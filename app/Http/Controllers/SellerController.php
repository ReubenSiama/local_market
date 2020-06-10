<?php

namespace App\Http\Controllers;

use App\Seller;
use App\ShopImage;
use App\LicenseType;
use App\BusinessType;
use App\BusinessPartner;
use App\InsideShopImage;
use App\AddressOfSeller;
use App\SellerBankAccount;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::with('licenseType')->get();
        return view('vendor.voyager.sellers.browse', ['sellers'=>$sellers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $business_type = BusinessType::get();
        $license_type = LicenseType::get();
        return view('vendor.voyager.sellers.edit-add', ['type'=>'add', 'business_type'=>$business_type, 'license_type'=>$license_type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $license_copy = time().$request->license_number.'.'.request()->license_copy->getClientOriginalExtension();
        request()->license_copy->move(public_path('images/license_copy'), $license_copy);

        $gst_copy = time().$request->gst_number.'.'.request()->gst_copy->getClientOriginalExtension();
        request()->gst_copy->move(public_path('images/gst_copy'), $gst_copy);

        $pan_copy = time().$request->pan_number.'.'.request()->pan_copy->getClientOriginalExtension();
        request()->pan_copy->move(public_path('images/pan_copy'), $pan_copy);

        $shop_and_establishment_license_copy = time().$request->shop_and_establishment_license_no.'.'.request()->shop_and_establishment_license_copy->getClientOriginalExtension();
        request()->shop_and_establishment_license_copy->move(public_path('images/shop_and_establishment_license_copy'), $shop_and_establishment_license_copy);

        $seller = new Seller;
        $seller->name_of_seller = $request->name_of_seller;
        $seller->name_as_on_license = $request->name_as_on_license;
        $seller->license_type_id = $request->license_type_id;
        $seller->business_type_id = $request->business_type_id;
        $seller->establishment_date = $request->establishment_date;
        $seller->nearest_landmark = $request->nearest_landmark;
        $seller->working_time = $request->working_time;
        $seller->working_dates = $request->working_dates;
        $seller->license_number = $request->license_number;
        $seller->license_copy = $request->license_copy;
        $seller->gst_number = $request->gst_number;
        $seller->gst_copy = $request->gst_copy;
        $seller->pan_number = $request->pan_number;
        $seller->pan_copy = $request->pan_copy;
        $seller->shop_and_establishment_license_no = $request->shop_and_establishment_license_no;
        $seller->shop_and_establishment_license_copy = $request->shop_and_establishment_license_copy;
        $seller->detail_report = $request->detail_report;
        $seller->save();

        $address = new AddressOfSeller;
        $address->seller_id = $seller->id;
        $address->latitude = $request->latitude;
        $address->longitude = $request->longitude;
        $address->mama_ward_number = $request->mama_ward_number;
        $address->full_address = $request->full_address;
        $address->pin_code = $request->pin_code;
        $address->save();

        $bankAccount = new SellerBankAccount;
        $bankAccount->seller_id = $seller->id;
        $bankAccount->account_number = $request->account_number;
        $bankAccount->account_holder_name = $request->account_holder_name;
        $bankAccount->bank_name = $request->bank_name;
        $bankAccount->branch_name = $request->branch_name;
        $bankAccount->branch_address = $request->branch_address;
        $bankAccount->ifsc = $request->ifsc;
        $bankAccount->save();

        return redirect()->route('voyager.sellers.show',['id'=>$seller->id])->withSuccess('New Seller Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seller = Seller::findOrFail($id);
        return view('vendor.voyager.sellers.read', ['seller'=>$seller]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seller = Seller::findOrFail($id);
        $business_type = BusinessType::get();
        $license_type = LicenseType::get();
        return view('vendor.voyager.sellers.edit-add', ['type'=>'Edit', 'seller'=>$seller, 'business_type'=>$business_type, 'license_type'=>$license_type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $seller = Seller::findOrFail($id);
        $seller->name_of_seller = $request->name_of_seller;
        $seller->name_as_on_license = $request->name_as_on_license;
        $seller->license_type_id = $request->license_type_id;
        $seller->business_type_id = $request->business_type_id;
        $seller->establishment_date = $request->establishment_date;
        $seller->nearest_landmark = $request->nearest_landmark;
        $seller->working_time = $request->working_time;
        $seller->working_dates = $request->working_dates;
        $seller->license_number = $request->license_number;
        if($request->license_copy){
            $license_copy = time().$request->license_number.'.'.request()->license_copy->getClientOriginalExtension();
            request()->license_copy->move(public_path('images/license_copy'), $license_copy);
            $seller->license_copy = $request->license_copy;
        }
        $seller->gst_number = $request->gst_number;
        if($request->gst_copy){
            $gst_copy = time().$request->gst_number.'.'.request()->gst_copy->getClientOriginalExtension();
            request()->gst_copy->move(public_path('images/gst_copy'), $gst_copy);
            $seller->gst_copy = $request->gst_copy;
        }
        $seller->pan_number = $request->pan_number;
        if($request->pan_copy){
            $pan_copy = time().$request->pan_number.'.'.request()->pan_copy->getClientOriginalExtension();
            request()->pan_copy->move(public_path('images/pan_copy'), $pan_copy);
            $seller->pan_copy = $request->pan_copy;
        }
        $seller->shop_and_establishment_license_no = $request->shop_and_establishment_license_no;
        if($request->shop_and_establishment_license_copy){
            $shop_and_establishment_license_copy = time().$request->shop_and_establishment_license_no.'.'.request()->shop_and_establishment_license_copy->getClientOriginalExtension();
            request()->shop_and_establishment_license_copy->move(public_path('images/shop_and_establishment_license_copy'), $shop_and_establishment_license_copy);
            $seller->shop_and_establishment_license_copy = $request->shop_and_establishment_license_copy;
        }
        $seller->detail_report = $request->detail_report;
        $seller->save();

        $address = AddressOfSeller::where('seller_id',$seller->id)->first();
        $address->latitude = $request->latitude;
        $address->longitude = $request->longitude;
        $address->mama_ward_number = $request->mama_ward_number;
        $address->full_address = $request->full_address;
        $address->pin_code = $request->pin_code;
        $address->save();

        $bankAccount = SellerBankAccount::where('seller_id',$seller->id)->first();
        $bankAccount->account_number = $request->account_number;
        $bankAccount->account_holder_name = $request->account_holder_name;
        $bankAccount->bank_name = $request->bank_name;
        $bankAccount->branch_name = $request->branch_name;
        $bankAccount->branch_address = $request->branch_address;
        $bankAccount->ifsc = $request->ifsc;
        $bankAccount->save();

        return redirect()->route('voyager.sellers.show',['id'=>$seller->id])->withSuccess('New Seller Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addShopImage(Request $request, $id)
    {
        for($i = 0; $i < count($request->type); $i++){
            $imageFile = time().$request->seller_id.'.'.request()->imageFile[$i]->getClientOriginalExtension();
            request()->imageFile[$i]->move(public_path('images/shop_images'), $imageFile);

            if($request->type[$i] == 'outside_shop'){
                $shopImage = new ShopImage;
                $shopImage->seller_id = $id;
                $shopImage->image = $imageFile;
                $shopImage->save();
            }else{
                $shopImage = new InsideShopImage;
                $shopImage->seller_id = $id;
                $shopImage->image = $imageFile;
                $shopImage->save();
            }
        }
        return back()->withSuccess('Images Added');
    }

    public function addPartner(Request $request, $id)
    {
        for($i = 0; $i < count($request->owner_name); $i++){
            $aadhar_image = time().$id.'.'.request()->aadhar_image[$i]->getClientOriginalExtension();
            request()->aadhar_image[$i]->move(public_path('images/partner_images'), $aadhar_image);

            $pan_card_image = time().$id.'.'.request()->pan_card_image[$i]->getClientOriginalExtension();
            request()->pan_card_image[$i]->move(public_path('images/partner_images'), $pan_card_image);

            $passport_size_photo = time().$id.'.'.request()->passport_size_photo[$i]->getClientOriginalExtension();
            request()->passport_size_photo[$i]->move(public_path('images/partner_images'), $passport_size_photo);

            $partners = new BusinessPartner;
            $partners->seller_id = $id;
            $partners->name_of_the_owner = $request->owner_name[$i];
            $partners->mobile_number = $request->mobile_no[$i];
            $partners->whatsapp_number = $request->whatsapp_no[$i];
            $partners->email_id = $request->email[$i];
            $partners->aadhar_card_no = $request->aadhar_no[$i];
            $partners->aadhar_card_image = $aadhar_image;
            $partners->pan_card_no = $request->pan_card_no[$i];
            $partners->pan_card_image = $pan_card_image;
            $partners->passport_size_photo = $passport_size_photo;
            $partners->save();
        }
        return back()->withSuccess('Partners added successfully');
    }
}
