<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Asset::with('assetType')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assetImageName = time().$request->serial_no.'.'.request()->asset_image->getClientOriginalExtension();
        request()->asset_image->move(public_path('images/asset_image'), $assetImageName);
        $invoiceImageName = time().$request->invoice_no.'.'.request()->invoice_image->getClientOriginalExtension();
        request()->invoice_image->move(public_path('images/invoice_image'), $invoiceImageName);
        $asset = new Asset;
        $asset->asset_type_id = $request->asset_type_id;
        $asset->product_description = $request->product_description;
        $asset->brand_name = $request->brand_name;
        $asset->serial_no = $request->serial_no;
        $asset->asset_image = $assetImageName;
        $asset->invoice_date = $request->invoice_date;
        $asset->invoice_no = $request->invoice_no;
        $asset->company_shop_name = $request->company_shop_name;
        $asset->company_shop_address = $request->company_shop_address;
        $asset->company_shop_pin_code = $request->company_shop_pin_code;
        $asset->contact_person_name = $request->contact_person_name;
        $asset->contact_person_number = $request->contact_person_number;
        $asset->have_guarantee = $request->have_guarantee;
        $asset->guarantee_number_of_months = $request->guarantee_number_of_months;
        $asset->have_warranty = $request->have_warranty;
        $asset->warranty_number_of_months = $request->warranty_number_of_months;
        $asset->extended_warranty = $request->extended_warranty;
        $asset->months_of_extended_warranty = $request->months_of_extended_warranty;
        $asset->are_we_extending = $request->are_we_extending;
        $asset->our_extended_warranty_months = $request->our_extended_warranty_months;
        $asset->invoice_image = $invoiceImageName;
        $asset->remark = $request->remark;
        $asset->save();
        return response()->json(['success','Asset added successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
