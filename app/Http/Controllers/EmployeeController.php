<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use App\Certificate;
use App\BankAccountDetail;
use App\ImportantDocument;
use Illuminate\Http\Request;
use App\InterviewRelatedDocument;
use TCG\Voyager\Models\Role as Role;

class EmployeeController extends Controller
{
    public function addEmployee(Request $request)
    {
        $role = Role::where('name','employee')->first();
        $user = new User;
        $user->name = $request->name;
        $user->role_id = $role->id;
        $user->email = $request->email;
        $user->password = 'password';
        $user->department_id = $request->department_id;
        $user->designation_id = $request->designation_id;
        $user->date_of_birth = $request->date_of_birth;
        $user->fathers_name = $request->fathers_name;
        $user->mothers_name = $request->mothers_name;
        $user->marital_status = $request->marital_status;
        $user->spouse_name = $request->spouse_name;
        $user->date_of_joining = $request->date_of_joining;
        $user->blood_group = $request->blood_group;
        $user->save();
        return response()->json(['success'=>'Saved','user_id'=>$user->id]);
    }

    public function addDetail(Request $request)
    {
        $user = User::where('id',$request->user_id)->first();
        if($user == null){
            return response()->json(['error'=>'Invalid user ID'],403);
        }
        $passport = time().$request->personal_phone_no.'.'.request()->passport_size_photo->getClientOriginalExtension();
        request()->passport_size_photo->move(public_path('images/passport_size_photo'), $passport);

        $cv = time().$request->personal_phone_no.'.'.request()->curriculum_vite->getClientOriginalExtension();
        request()->curriculum_vite->move(public_path('images/cv'), $cv);

        $permanent_address_proof = time().$request->personal_phone_no.'.'.request()->permanent_address_proof_image->getClientOriginalExtension();
        request()->permanent_address_proof_image->move(public_path('images/permanent_address_proof_image'), $permanent_address_proof);

        $present_address_proof_image = time().$request->personal_phone_no.'.'.request()->present_address_proof_image->getClientOriginalExtension();
        request()->present_address_proof_image->move(public_path('images/present_address_proof_image'), $present_address_proof_image);

        $detail = new UserDetail;
        $detail->user_id = $request->user_id;
        $detail->company_mobile_no = $request->company_mobile_no;
        $detail->company_whatsapp_no = $request->company_whatsapp_no;
        $detail->personal_email_id = $request->personal_email_id;
        $detail->personal_phone_no = $request->personal_phone_no;
        $detail->personal_whatsapp_no = $request->personal_whatsapp_no;
        $detail->permanent_address = $request->permanent_address;
        $detail->pernament_address_pin_code = $request->pernament_address_pin_code;
        $detail->permanent_address_proof_image = $permanent_address_proof;
        $detail->present_address = $request->present_address;
        $detail->present_address_pin_code = $request->present_address_pin_code;
        $detail->present_address_proof_image = $present_address_proof_image;
        $detail->passport_size_photo = $passport;
        $detail->educational_qualification = $request->educational_qualification;
        $detail->curriculum_vite = $cv;
        $detail->save();
        return response()->json(['success'=>'Employee details saved']);
    }

    public function addEmergencyContact(Request $request)
    {
        $detail = UserDetail::where('user_id',$request->user_id)->first();
        $first_emergency_verification = time().$request->personal_phone_no.'.'.request()->first_emergency_verification->getClientOriginalExtension();
        request()->first_emergency_verification->move(public_path('images/first_emergency_verification'), $first_emergency_verification);

        $second_emergency_verification = time().$request->personal_phone_no.'.'.request()->second_emergency_verification->getClientOriginalExtension();
        request()->second_emergency_verification->move(public_path('images/second_emergency_verification'), $second_emergency_verification);

        $detail->first_emergency_contact_name = $request->first_emergency_contact_name;
        $detail->first_emergency_relationship = $request->first_emergency_relationship;
        $detail->first_emergency_verification = $first_emergency_verification;
        $detail->second_emergency_name = $request->second_emergency_name;
        $detail->second_emergency_relationship = $request->second_emergency_relationship;
        $detail->second_emergency_verification = $second_emergency_verification;
        $detail->save();
        return response()->json(['success'=>'Emergency Contacts Added']);
    }

    public function getEmployees()
    {
        $role = Role::where('name','employee')->first();
        return User::where('role_id',$role->id)->with('department')->with('designation')->get();
    }

    public function getEmployee($id)
    {
        $employee = User::where('id',$id)->with('department')->with('designation')->first();
        return $employee;
    }

    public function addBankDetail(Request $request)
    {
        $passbook_image = time().$request->account_number.'.'.request()->passbook_image->getClientOriginalExtension();
        request()->passbook_image->move(public_path('images/passbook_image'), $passbook_image);

        $bank_account = new BankAccountDetail;
        $bank_account->user_id = $request->user_id;
        $bank_account->account_holder_name = $request->account_holder_name;
        $bank_account->account_number = $request->account_number;
        $bank_account->bank_name = $request->bank_name;
        $bank_account->branch_name = $request->branch_name;
        $bank_account->branch_address = $request->branch_address;
        $bank_account->pin_code = $request->pin_code;
        $bank_account->ifsc = $request->ifsc;
        $bank_account->passbook_image = $passbook_image;
        $bank_account->save();
        return response()->json(['success'=>'Bank Account Detail Added']);
    }

    public function addImportantDocument(Request $request)
    {
        $aadhar_image = time().$request->aadhar_no.'.'.request()->aadhar_image->getClientOriginalExtension();
        request()->aadhar_image->move(public_path('images/aadhar_image'), $aadhar_image);

        $pan_card_image = time().$request->pan_card_no.'.'.request()->pan_card_image->getClientOriginalExtension();
        request()->pan_card_image->move(public_path('images/pan_card_image'), $pan_card_image);

        if($request->driving_licence == 'Yes'){
            $driving_licence_image = time().$request->driving_licence_no.'.'.request()->driving_licence_image->getClientOriginalExtension();
            request()->driving_licence_image->move(public_path('images/driving_licence_image'), $driving_licence_image);
        }else{
            $driving_licence_image = null;
        }

        $documents = new ImportantDocument;
        $documents->user_id = $request->user_id;
        $documents->aadhar_no = $request->aadhar_no;
        $documents->aadhar_image = $aadhar_image;
        $documents->pan_card_no = $request->pan_card_no;
        $documents->pan_card_image = $pan_card_image;
        $documents->driving_licence = $request->driving_licence;
        $documents->driving_licence_no = $request->driving_licence_no;
        $documents->driving_licence_image = $driving_licence_image;
        $documents->company_agreement_type = $request->company_agreement_type;
        $documents->company_agreement_copy = $request->company_agreement_copy;
        $documents->require_mmt_user_id = $request->require_mmt_user_id;
        $documents->dashboard_name = $request->dashboard_name;
        $documents->user_name = $request->user_name;
        $documents->password = bcrypt($request->password);
        $documents->save();
        return response()->json(['success'=>'Documents uploaded']);
    }

    public function addInterviewRelated(Request $request)
    {
		$interviews = $request->interview;
		$certificates = $request->certificate;
		
        for($i = 0; $i < count($interviews); $i++){
			$audio_video = time().$request->user_id.'.'.$interviews[$i]['file']->getClientOriginalExtension();
			$interviews[$i]['file']->move(public_path('images/audio_video'), $audio_video);
			
            $interview = new InterviewRelatedDocument;
			$interview->user_id = $request->user_id;
            $interview->interview_type_id = $interviews[$i]['type'];
            $interview->attendees = $interviews[$i]['attendees'];
			$interview->audio_video = $audio_video;
			$interview->save();
        }
        for($i = 0; $i < count($certificates); $i++){
			$certificate_image = time().$request->user_id.'.'.$certificates[$i]['certificate']->getClientOriginalExtension();
			$certificates[$i]['certificate']->move(public_path('images/certificate_image'), $certificate_image);

            $certificate = new Certificate;
			$certificate->user_id = $request->user_id;
			$certificate->name = $certificates[$i]['name'];
			$certificate->image = $certificate_image;
			$certificate->save();
		}
		return response()->json(['success'=>'Saved successfully']);
    }
}

