<?php

namespace App\Http\Controllers;

use App\Models\DynamicContentPage;
use App\Models\JobListing;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DynamicContentPageController extends Controller
{
    public function partnerListing()
    {
        $partnerList=DB::table('partner_form')->get();
        return view('partner/partner_list',compact('partnerList'));
    }
    public function partnerDelete($id)
    {
        $partnerList=DB::table('partner_form')->where('id',$id)->delete();
        return redirect()->back();
    }
    public function jobListing()
    {
        $dynamicContentPage=DynamicContentPage::get()->first();
        $jobListing=JobListing::where('is_active','yes')->get();
        return view('dynamic-pages/job_list',compact('dynamicContentPage','jobListing'));

    }
    public function jobListSubmit(Request $request)
    {
        if(is_numeric($request->jobs))
        {
            $jobs=JobListing::find($request->jobs);
            return view('dynamic-pages/job_confirmation',compact('jobs'));
        }
        else
        {
            $jobs=$request->jobs;
            return view('dynamic-pages/partner_form',compact('jobs'));

        }
    }
    public function dynamicJobPage()
    {
        $dynamicContentPage=DynamicContentPage::get()->first();
        return view('dynamic-pages/dynamic_page_edit',compact('dynamicContentPage'));

    }
    public function partnerFormSubmit(Request $request)
    {
        $path='';
        if ($request->hasFile('file')) {
            
            $destinationPath = base_path('public/uploads/partner/');
            $file = $request->file('file');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $size = $file->getSize();
            $file->move($destinationPath, $filename);
            $path = "uploads/partner/" . $filename;
        }

        $patner=DB::table('partner_form')->insert(
            [   'first_name' => $request->first_name, 
                'last_name' => $request->last_name, 
                'email' => $request->email, 
                'mobile_no' => $request->mobile_no, 
                'description' => $request->description, 
                'path' => $path,
                'status' => $request->status, 
                'created_at' => Date("Y-m-d")
            ]
        );
      
        return redirect()->route('thankyou_page');

    }
    public function jobConfirmation(Request $request)
    {
        $id=DB::table('job_confirmation')->insertGetId(
            [   'first_name' => $request->first_name, 
                'last_name' => $request->last_name, 
                'middle_name' => $request->middle_name, 
                'date' => $request->date, 
                'current_address' => $request->current_address, 
                'city' => $request->city, 
                'state' => $request->state, 
                'zip_code' => $request->zip_code, 
                'previous_address' => $request->previous_address, 
                'previous_city' => $request->previous_city, 
                'previous_state' => $request->previous_state, 
                'previous_zip_code' => $request->previous_zip_code, 
                'telephone' => $request->telephone, 
                'alternate_telephone' => $request->alternate_telephone, 
                'best_contact_time' => $request->best_contact_time, 
                'e_mail_address' => $request->e_mail_address, 
                'date_of_birth' => $request->date_of_birth, 
                'social_security_number' => $request->social_security_number, 
                'driving_license_number' => $request->driving_license_number, 
                'position_apply_for' => $request->position_apply_for, 
                'type_of_work_desired' => $request->type_of_work_desired, 
                'job_post_number' => $request->job_post_number, 
                'available_to_begin_work' => $request->available_to_begin_work, 
                'work_overtime' => $request->work_overtime, 
                'authorized_age' => $request->authorized_age, 
                'background_check' => $request->background_check, 
                'emergency' => $request->emergency, 
                'emergency_telephone' => $request->emergency_telephone, 
                'name_of_nearest_relative' => $request->name_of_nearest_relative, 
                'relative_telephone' => $request->relative_telephone, 
                'high_school_name' => $request->high_school_name, 
                'high_school_course_of_study' => $request->high_school_course_of_study, 
                'high_school_year_completed' => $request->high_school_year_completed, 
                'high_school_degree' => $request->high_school_degree, 
                'business_school_name' => $request->business_school_name, 
                'business_course_of_study' => $request->business_course_of_study, 
                'business_year_completed' => $request->business_year_completed, 
                'business_degree' => $request->business_degree, 
                'college_name' => $request->college_name, 
                'college_course_of_study' => $request->college_course_of_study, 
                'college_year_completed' => $request->college_year_completed, 
                'college_degree' => $request->college_degree, 
                'graduate_name' => $request->graduate_name, 
                'graduate_course_of_study' => $request->graduate_course_of_study, 
                'graduate_year_completed' => $request->graduate_year_completed, 
                'graduate_degree' => $request->graduate_degree, 
                'other_name' => $request->other_name, 
                'other_course_of_study' => $request->other_course_of_study, 
                'other_year_completed' => $request->other_year_completed, 
                'other_degree' => $request->other_degree, 
                'computer_knowledge' => $request->computer_knowledge, 
                'programing_knowledge' => $request->programing_knowledge, 
                'graphic_video_editing_knowledge' => $request->graphic_video_editing_knowledge, 
                'you_served_in_usa' => $request->you_served_in_usa, 
                'branch' => $request->branch, 
                'start_date' => $request->start_date, 
                'end_date' => $request->end_date, 
                'rate_discharge' => $request->rate_discharge, 
                'type_of_service' => $request->type_of_service, 
                'type_of_discharge' => $request->type_of_discharge, 
                'special_training' => $request->special_training, 
                'draft_status' => $request->draft_status, 
                'reserve_status' => $request->reserve_status, 
                'criminal_offense' => $request->criminal_offense, 
                'criminal_actions_pending' => $request->criminal_actions_pending, 
                'probation_or_parole' => $request->probation_or_parole, 
                'explain_the_nature_of_the_offense' => $request->explain_the_nature_of_the_offense, 
                'reference_1_name' => $request->reference_1_name, 
                'reference_1_address' => $request->reference_1_address, 
                'reference_1_phone' => $request->reference_1_phone, 
                'reference_1_occupation' => $request->reference_1_occupation, 
                'reference_1_relationship' => $request->reference_1_relationship, 
                'reference_2_name' => $request->reference_2_name, 
                'reference_2_address' => $request->reference_2_address, 
                'reference_2_phone' => $request->reference_2_phone, 
                'reference_2_occupation' => $request->reference_2_occupation, 
                'reference_2_relationship' => $request->reference_2_relationship, 
                'professional_reference_1_name' => $request->professional_reference_1_name, 
                'professional_reference_1_address' => $request->professional_reference_1_address, 
                'professional_reference_1_phone' => $request->professional_reference_1_phone, 
                'professional_reference_1_occupation' => $request->professional_reference_1_occupation, 
                'professional_reference_1_relationship' => $request->professional_reference_1_relationship, 
                'professional_reference_2_name' => $request->professional_reference_2_name, 
                'professional_reference_2_address' => $request->professional_reference_2_address, 
                'professional_reference_2_phone' => $request->professional_reference_2_phone, 
                'professional_reference_2_occupation' => $request->professional_reference_2_occupation, 
                'professional_reference_2_relationship' => $request->professional_reference_2_relationship, 
                'print_name' => $request->print_name, 
                'signature_date' => Date("Y-m-d",strtotime($request->signature_date)), 
                'created_at' => Date("Y-m-d")
            ]
        );
        for ($i=0; $i < count($request->company_name) ; $i++) { 
            DB::table('employers_information')->insert(
                [   'job_confirmation_id' => $id, 
                    'company_name' => $request->company_name[$i], 
                    'telephone' => $request->e_telephone[$i], 
                    'address' => $request->address[$i], 
                    'city' => $request->e_city[$i], 
                    'state' => $request->e_state[$i], 
                    'zip_code' => $request->e_zip_code[$i], 
                    'position_held' => $request->position_held[$i], 
                    'from' => $request->from[$i], 
                    'to' => $request->to[$i], 
                    'starting_ending_salary' => $request->starting_ending_salary[$i], 
                    'duties' => $request->duties[$i], 
                    'reason_for_leaving' => $request->reason_for_leaving[$i], 
                    'supervisor_name' => $request->supervisor_name[$i], 
                    'created_at' => Date("Y-m-d")
                ]
            );
        }
        $subject='New Job Request';
        $fileName='new_job_request_template';
        $to_email='dawngill08@gmail.com';
        $this->sendEmail($to_email,$subject,$fileName,$data='');

        return redirect()->route('thankyou_page');


    }
    
    function sendEmail($to_email,$subject,$fileName,$data='')
    {
        
        $from_email = env('MAIL_FROM_ADDRESS');
        $subject = $subject;
            Mail::send("mail-template/$fileName", ['data' => $data], function ($message) use ($to_email, $from_email, $subject) {
                $message->to($to_email)
                    ->subject($subject);
                $message->from($from_email);
        });    
    }
    public function jobRequest()
    {
        $jobConfirmation=DB::table('job_confirmation')->get();
        return view('partner/job_request',compact('jobConfirmation'));
    }
    public function jobRequestEdit(Request $request)
    {
        $id=$request->id;
        $jobConfirmation=DB::table('job_confirmation')->where('id',$id)->get();
        return view('partner/job_request_edit',compact('jobConfirmation','id'));

    }
    public function jobRequestStatus(Request $request)
    {
        DB::table('job_confirmation')
        ->where('id', $request->id)
        ->update(['status' => $request->value]);
        return true;
    }
    public function jobRequestSubmit(Request $request)
    {

        DB::table('job_confirmation')
                ->where('id', $request->job_id)
                ->update(['social_security_number' => $request->social_security_number,'driving_license_number' => $request->driving_license_number]);
                return redirect()->back();
    }
    public function jobRequestDelete($id)
    {
        $partnerList=DB::table('job_confirmation')->where('id',$id)->delete();
        return redirect()->back();
    }
    public function jobRequestShow($id)
    {
        $jobConfirmation=DB::table('job_confirmation')->where('id', $id)->get();
        $employersInformation=DB::table('employers_information')->where('job_confirmation_id', $id)->get();
        return view('partner/job_request_show',compact('jobConfirmation','employersInformation'));
    }
    public function dynamicJobPageSubmit(Request $request)
    {
        $request->validate([
            'description' => ['required'],
        ]);
        $data = DynamicContentPage::create([
            'description' => $request->description,
            'user_id'=>Auth::user()->id,
            'created_at' => date("Y-m-d h:i:s"),
        ]);
        return redirect()->back();
    }
    public function dynamicJobPageUpdate(Request $request, int $id)
    {
        $request->validate([
            'description' => ['required'],
        ]);
        $job = DynamicContentPage::find($id);
        $job['description'] = $request->description;
        $job['updated_at'] = date("Y-m-d");
        $job->save();
       
        return redirect()->back();
    }
}
