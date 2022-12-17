@extends('layouts.main')

@section('content')

<style>
    @media (min-width:1400px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            max-width: 1920px
        }
    }
</style>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <div class="col-xl-12 mb-5 mb-xl-10">
                    <!--begin::Card-->
                    <div class="card card-docs mb-2">
                        <!--begin::Card Body-->
                        <div class="card-body fs-6 py-lg-5 text-gray-700">
                            <!--begin::Block-->
                            <div class="py-5">
                                <form action="m-0" class="form mb-15" method="post" id="kt_careers_form">
                                    
                                    <!-- Start :: APPLICANT INFORMATION -->
                                    <h1>APPLICANT INFORMATION</h1>
                                    <div class="separator mb-8"></div>

                                    <div class="row mb-5" style="background-color: #f0f0f0;">
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Last Name</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->last_name}}" placeholder="" name="last_name" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">First Name</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->first_name}}" placeholder="" name="first_name" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Middle Name</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->middle_name}}" placeholder="" name="middle_name" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Date</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->date}}" placeholder="" name="date" />
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Current Address</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->current_address}}" placeholder="" name="current_address" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">City</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->city}}" placeholder="" name="city" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">State</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->state}}" placeholder="" name="state" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Zip Code</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->zip_code}}" placeholder="" min="9" max="9" name="zipcode" />
                                        </div>
                                    </div>
                                    <div class="row mb-5" style="background-color: #f0f0f0;">
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Previous Address</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->previous_address}}" placeholder="" name="previous_address" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">City</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->previous_city}}" placeholder="" name="city" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">State</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->previous_state}}" placeholder="" name="state" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Zip Code</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->previous_zip_code}}" placeholder="" min="9" max="9" name="zipcode" />
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Telephone</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->telephone}}"  placeholder="" name="telephone" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Alternate Telephone <span class="text-danger">(optional)</span></label>
                                            <input type="text" disabled class="form-control form-control-solid"  value="{{$jobConfirmation[0]->alternate_telephone}}" placeholder="" name="alternate_telephone" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Best Contact Time</label>
                                            <input type="text" disabled class="form-control form-control-solid kt_datepicker_3" value="{{$jobConfirmation[0]->best_contact_time}}" placeholder="" name="best_contact_time" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">E-Mail Address</label>
                                            <input disabled class="form-control form-control-solid" placeholder="" value="{{$jobConfirmation[0]->e_mail_address}}" type="email" name="email" />
                                        </div>
                                    </div>
                                    <div class="row mb-5" style="background-color: #f0f0f0;">
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">Date of Birth</label>
                                            <input disabled type="text" class="form-control form-control-solid kt_datepicker_2" value="{{$jobConfirmation[0]->date_of_birth}}" placeholder="" name="dob" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">Social Security Number (SS#)</label>
                                            <input type="text" disabled class="form-control form-control-solid" placeholder="" value="{{$jobConfirmation[0]->social_security_number}}" name="ssn" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">Driving License Number (DL#)</label>
                                            <input type="text" disabled class="form-control form-control-solid" placeholder="" value="{{$jobConfirmation[0]->driving_license_number}}" name="dln" />
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">Position Apply For</label>
                                            <input class="form-control form-control-solid" disabled placeholder="" value="{{$jobConfirmation[0]->position_apply_for}}" name="position_apply_for" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">Type of Work Desired</label>
                                            <select disabled name="type_of_work" class="form-control form-control-solid">
                                                <option value="" {{$jobConfirmation[0]->type_of_work_desired == 'Full-Time' ? 'Selected' : '' }}>Full-Time</option>
                                                <option value="" {{$jobConfirmation[0]->type_of_work_desired == 'Part-Time' ? 'Selected' : '' }}>Part-Time</option>
                                                <option value="" {{$jobConfirmation[0]->type_of_work_desired == 'Temporary/Contract' ? 'Selected' : '' }}>Temporary/Contract</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">Job Post #</label>
                                            <input class="form-control form-control-solid" value="{{$jobConfirmation[0]->job_post_number}}" disabled placeholder="" name="job_post_num" />
                                        </div>
                                    </div>
                                    <div class="row mb-5" style="background-color: #f0f0f0;">
                                        <div class="col-md-6">
                                            <label class="fs-5 fw-bold mb-2">When Are You Available to Begin Work?</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->available_to_begin_work}}" class="form-control form-control-solid" placeholder="" name="availability_date" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="fs-5 fw-bold mb-2">Willing to Work Overtime?</label>
                                            <select disabled name="work_overtime" class="form-control form-control-solid">
                                                <option value="" {{$jobConfirmation[0]->work_overtime == 'Yes' ? 'Selected' : ''}} >Yes</option>
                                                <option value="" {{$jobConfirmation[0]->work_overtime == 'No' ? 'Selected' : ''}} >No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-6">
                                            <label class="fs-5 fw-bold mb-2">If hired, can you provide evidence that you are authorized and of legal age to work in the United States?</label>
                                            <select disabled name="age_authorization" class="form-control form-control-solid">
                                                <option value="" {{$jobConfirmation[0]->work_overtime == 'Yes' ? 'Selected' : ''}} >Yes</option>
                                                <option value="" {{$jobConfirmation[0]->authorized_age == 'No' ? 'Selected' : ''}} >No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="fs-5 fw-bold mb-2">Willing to undergo a Background check? </label>
                                            <select disabled name="bg_check" class="form-control form-control-solid">
                                                <option value="" {{$jobConfirmation[0]->background_check == 'Yes' ? 'Selected' : ''}}>Yes</option>
                                                <option value="" {{$jobConfirmation[0]->background_check == 'No' ? 'Selected' : ''}}>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-5" style="background-color: #f0f0f0;">
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">In Case of Emergency Notify</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->emergency}}" class="form-control form-control-solid" placeholder="" name="emergency_notify" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Telephone</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->emergency_telephone}}" class="form-control form-control-solid" placeholder="" name="emergency_telephone" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Name of Nearest Relative</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->name_of_nearest_relative}}" class="form-control form-control-solid" placeholder="" name="nearest_relative" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Telephone</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->relative_telephone}}" class="form-control form-control-solid" placeholder="" name="relative_telephone" />
                                        </div>
                                    </div>
                                    <!-- End :: APPLICANT INFORMATION -->

                                    <!-- Start :: EDUCATION -->
                                    <h1 class="mt-15">EDUCATION <span class="text-danger fw-normal fs-6">(alt least one school must be filled out)</span></h1>
                                    <div class="separator mb-8"></div>

                                    <h3>HIGH SCHOOL</h3>
                                    <div class="row mb-5">
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">SCHOOL NAME/LOCATION</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->high_school_name}}" placeholder="" name="school_name_and_location" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">COURSE OF STUDY</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->high_school_course_of_study}}" placeholder="" name="course_of_study" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">NO. YEARS COMPLETED</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->high_school_year_completed}}" placeholder="" name="no_of_yrs_completed" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">DEGREE/Certificate</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->high_school_degree}}" placeholder="" name="degree_certificate" />
                                        </div>
                                    </div>
                                    <h3>BUSINESS/TECHNICAL</h3>
                                    <div class="row mb-5" style="background-color: #f0f0f0;">
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">SCHOOL NAME/LOCATION</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->business_school_name}}" placeholder="" name="busines_name_and_location" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">COURSE OF STUDY</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->business_course_of_study}}" placeholder="" name="busines_course_of_study" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">NO. YEARS COMPLETED</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->business_year_completed}}" placeholder="" name="busines_no_of_yrs_completed" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">DEGREE/Certificate</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->business_degree}}" placeholder="" name="busines_degree_certificate" />
                                        </div>
                                    </div>
                                    <h3>COLLEGE</h3>
                                    <div class="row mb-5">
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">SCHOOL NAME/LOCATION</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->college_name}}" placeholder="" name="college_name_and_location" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">COURSE OF STUDY</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->college_course_of_study}}" placeholder="" name="college_course_of_study" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">NO. YEARS COMPLETED</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->college_year_completed}}" placeholder="" name="college_no_of_yrs_completed" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">DEGREE/Certificate</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->college_degree}}" placeholder="" name="college_degree_certificate" />
                                        </div>
                                    </div>
                                    <h3>GRADUATE</h3>
                                    <div class="row mb-5" style="background-color: #f0f0f0;">
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">SCHOOL NAME/LOCATION</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->graduate_name}}" placeholder="" name="graduate_name_and_location" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">COURSE OF STUDY</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->graduate_course_of_study}}" placeholder="" name="graduate_course_of_study" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">NO. YEARS COMPLETED</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->graduate_year_completed}}" placeholder="" name="graduate_no_of_yrs_completed" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">DEGREE/Certificate</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->graduate_degree}}" placeholder="" name="graduate_degree_certificate" />
                                        </div>
                                    </div>
                                    <h3>OTHER</h3>
                                    <div class="row mb-5">
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">SCHOOL NAME/LOCATION</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->other_name}}" placeholder="" name="other_name_and_location" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">COURSE OF STUDY</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->other_course_of_study}}" placeholder="" name="other_course_of_study" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">NO. YEARS COMPLETED</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->other_year_completed}}" placeholder="" name="other_no_of_yrs_completed" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">DEGREE/Certificate</label>
                                            <input type="text" disabled class="form-control form-control-solid" value="{{$jobConfirmation[0]->other_degree}}" placeholder="" name="other_degree_certificate" />
                                        </div>
                                    </div>
                                    <!-- End :: EDUCATION -->

                                    <!-- Start :: Proficient Computer Skills/Softwares -->
                                    <h1 class="mt-15">Proficient Computer Skills/Softwares</h1>
                                    <div class="separator mb-8"></div>

                                    <div class="row mb-5" style="background-color: #f0f0f0;">
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">List any computer knowledge that you are good at <span style="color: red">(if you dont have knowledge, just put "NONE")</span></label>
                                            <textarea disabled name="list_computer_knowledge" class="form-control form-control-solid" cols="30" rows="5">{{$jobConfirmation[0]->computer_knowledge}}</textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">List any programing knowledge that you are good at (if you dont have knowledge, just put "NONE")</label>
                                            <textarea disabled name="list_programming_knowledge" class="form-control form-control-solid" cols="30" rows="5">{{$jobConfirmation[0]->programing_knowledge}}</textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">List any graphic/ video editing knowledge that you are good at (if you dont have knowledge, just put "NONE")</label>
                                            <textarea disabled name="list_graphic_knowledge" class="form-control form-control-solid" cols="30" rows="5">{{$jobConfirmation[0]->graphic_video_editing_knowledge}}</textarea>
                                        </div>
                                    </div>
                                    <!-- End :: Proficient Computer Skills/Softwares -->

                                    <!-- Start :: EMPLOYERS -->
                                    <h1 class="mt-15">EMPLOYERS <span class="text-danger fw-normal fs-6">(Provide the last two companies you worked )</span></h1>
                                    <div class="separator mb-8"></div>

                                    <div id="questions">
                                        @for($i=0; $i < count($employersInformation); $i++)
                                        <div class="row mb-5" >
                                            <div class="col-md-4">
                                                <label class="fs-5 fw-bold mb-2">Company Name</label>
                                                <input type="text" disabled value="{{$employersInformation[$i]->company_name}}" class="form-control form-control-solid" placeholder="" name="company_name" />
                                            </div>
                                            <div class="col-md-4">
                                                <label class="fs-5 fw-bold mb-2">Telephone </label>
                                                <input type="text" disabled value="{{$employersInformation[$i]->telephone}}" class="form-control form-control-solid" placeholder="" name="company_telephone" />
                                            </div>
                                            <div class="col-md-4">
                                                <label class="fs-5 fw-bold mb-2">Supervisor Name / Contact</label>
                                                <textarea disabled name="supervisor_contact" class="form-control form-control-solid" cols="30" rows="5">{{$employersInformation[$i]->supervisor_name}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-5" style="background-color: #f0f0f0;">
                                            <div class="col-md-3">
                                                <label class="fs-5 fw-bold mb-2">Address</label>
                                                <input type="text" disabled value="{{$employersInformation[$i]->address}}" class="form-control form-control-solid" placeholder="" name="company_address" />
                                            </div>
                                            <div class="col-md-3">
                                                <label class="fs-5 fw-bold mb-2">City</label>
                                                <input type="text" disabled value="{{$employersInformation[$i]->city}}" class="form-control form-control-solid" placeholder="" name="company_city" />
                                            </div>
                                            <div class="col-md-3">
                                                <label class="fs-5 fw-bold mb-2">State</label>
                                                <input type="text" disabled value="{{$employersInformation[$i]->state}}" class="form-control form-control-solid" placeholder="" name="company_state" />
                                            </div>
                                            <div class="col-md-3">
                                                <label class="fs-5 fw-bold mb-2">ZIP Code</label>
                                                <input type="text" disabled value="{{$employersInformation[$i]->zip_code}}" class="form-control form-control-solid" placeholder="" name="company_zipcode" />
                                            </div>
                                        </div>
                                        <div class="row mb-5">
                                            <div class="col-md-3">
                                                <label class="fs-5 fw-bold mb-2">Position Held</label>
                                                <input type="text" disabled value="{{$employersInformation[$i]->position_held}}" class="form-control form-control-solid" placeholder="" name="position_held" />
                                            </div>
                                            <div class="col-md-3">
                                                <label class="fs-5 fw-bold mb-2">From</label>
                                                <input type="text" disabled value="{{$employersInformation[$i]->from}}" class="form-control form-control-solid" placeholder="MM-DD-YYYY" name="date_from" />
                                            </div>
                                            <div class="col-md-3">
                                                <label class="fs-5 fw-bold mb-2">To</label>
                                                <input type="text" disabled value="{{$employersInformation[$i]->to}}" class="form-control form-control-solid" placeholder="MM-DD-YYYY" name="date_to" />
                                            </div>
                                            <div class="col-md-3">
                                                <label class="fs-5 fw-bold mb-2">Starting Salary</label>
                                                <input type="text" disabled value="{{$employersInformation[$i]->starting_salary}}" class="form-control form-control-solid" placeholder="" name="starting_ending_salary" />
                                            </div>
                                        </div>
                                        <div class="row mb-5" style="background-color: #f0f0f0;">
                                            <div class="col-md-6">
                                                <label class="fs-5 fw-bold mb-2">Ending Salary</label>
                                                <input type="text" disabled value="{{$employersInformation[$i]->ending_salary}}" class="form-control form-control-solid" placeholder="" name="starting_ending_salary" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="fs-5 fw-bold mb-2">Duties:</label>
                                                <textarea disabled name="duties" class="form-control form-control-solid" cols="30" rows="5">{{$employersInformation[$i]->duties}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-5">
                                            <div class="col-md-6">
                                                <label class="fs-5 fw-bold mb-2">Reason for Leaving</label>
                                                <textarea disabled name="reason_for_leaving" class="form-control form-control-solid" cols="30" rows="5">{{$employersInformation[$i]->reason_for_leaving}}</textarea>
                                            </div>
                                            
                                        </div>
                                        @endfor
                                    </div>
                                    <!-- End :: EMPLOYERS -->

                                    <!-- Start :: MILITARY STATUS -->
                                    {{-- <h1 class="mt-15">MILITARY STATUS <span class="text-danger fw-normal fs-6">(Optional)</span></h1> --}}
                                    {{-- <div class="separator mb-8"></div> --}}

                                    {{-- <div class="row mb-5">
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Have You Served in the U.S. Armed Services? <span class="text-danger">IF NO jump to the next step</span></label>
                                            <select disabled name="served_in_us_army" class="form-control form-control-solid">
                                                <option value="" {{$jobConfirmation[0]->you_served_in_usa == "Yes" ? 'Selected' : ''}} >Yes</option>
                                                <option value="" {{$jobConfirmation[0]->you_served_in_usa == "No" ? 'Selected' : ''}} >No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Branch</label>
                                            <input disabled type="text" class="form-control form-control-solid" value="{{$jobConfirmation[0]->branch}}" placeholder="" name="us_army_branch" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">Start Date</label>
                                            <input disabled type="text" class="form-control form-control-solid" value="{{$jobConfirmation[0]->start_date}}" placeholder="" name="us_army_start_date" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="fs-5 fw-bold mb-2">End Date</label>
                                            <input disabled type="text" class="form-control form-control-solid" value="{{$jobConfirmation[0]->end_date}}" placeholder="" name="us_army_end_date" />
                                        </div>
                                    </div> --}}
                                    {{-- <div class="row mb-5">
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">Rank/Rate at Discharge</label>
                                            <input disabled type="text" class="form-control form-control-solid" value="{{$jobConfirmation[0]->rate_discharge}}" placeholder="" name="rank_at_discharge" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">Type of Service</label>
                                            <input disabled type="text" class="form-control form-control-solid" value="{{$jobConfirmation[0]->type_of_service}}" placeholder="" name="type_of_service" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">Type of Discharge</label>
                                            <input disabled type="text" class="form-control form-control-solid" value="{{$jobConfirmation[0]->type_of_discharge}}" placeholder="" name="type_of_discharge" />
                                        </div>
                                    </div> --}}
                                    {{-- <div class="row mb-5">
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">Special Training/Experience Received in the U.S. Armed Services</label>
                                            <textarea disabled name="special_training" class="form-control form-control-solid" cols="30" rows="5">{{$jobConfirmation[0]->special_training}}</textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">Draft Status</label>
                                            <input disabled type="text" class="form-control form-control-solid" placeholder="" value="{{$jobConfirmation[0]->draft_status}}" name="draft_status" />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fs-5 fw-bold mb-2">Reserve Status</label>
                                            <input disabled type="text" class="form-control form-control-solid" placeholder="" value="{{$jobConfirmation[0]->reserve_status}}" name="reserve_status" />
                                        </div>
                                    </div> --}}
                                    <!-- End :: MILITARY STATUS -->

                                    <!-- Start :: CRIMINAL HISTORY -->
                                    <h1 class="mt-15">CRIMINAL HISTORY (Optional)</h1>
                                    <div class="separator mb-8"></div>

                                    <div class="row mb-5">
                                        <div class="col-md-12 mb-5" style="background-color: #f0f0f0;">
                                            <label class="fs-5 fw-bold mb-2">Have you ever been convicted of a criminal offense?</label>
                                            <select disabled name="convicted_criminal_offence" class="form-control form-control-solid">
                                                <option value="" {{$jobConfirmation[0]->criminal_offense == "Yes" ? 'Selected' : ''}}>Yes</option>
                                                <option value="" {{$jobConfirmation[0]->criminal_offense == "No" ? 'Selected' : ''}}>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <label class="fs-5 fw-bold mb-2">Do you currently have any criminal actions pending in which you are the Defendant? (Not Applicable to California Applicants) Check One:</label>
                                            <select disabled name="current_criminal_activity" class="form-control form-control-solid">
                                                <option value="" {{$jobConfirmation[0]->criminal_actions_pending == "Yes" ? 'Selected' : ''}}>Yes</option>
                                                <option value="" {{$jobConfirmation[0]->criminal_actions_pending == "No" ? 'Selected' : ''}}>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-5" style="background-color: #f0f0f0;">
                                            <label class="fs-5 fw-bold mb-2">Are you currently on probation or parole? Check One:</label>
                                            <select disabled name="current_criminal_activity" class="form-control form-control-solid">
                                                <option value="" {{$jobConfirmation[0]->probation_or_parole == "Yes" ? 'Selected' : ''}}>Yes</option>
                                                <option value="" {{$jobConfirmation[0]->probation_or_parole == "No" ? 'Selected' : ''}}>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <label class="fs-5 fw-bold mb-2">If you answered "Yes" to any of the above questions, please explain the nature of the offense and provide the date of the offense and the county and state in which it occurred</label>
                                            <textarea disabled name="explanation" class="form-control form-control-solid" cols="30" rows="5">{{$jobConfirmation[0]->explain_the_nature_of_the_offense}}</textarea>
                                        </div>
                                    </div>
                                    <!-- End :: CRIMINAL HISTORY -->

                                    <!-- Start :: References -->
                                    <h1 class="mt-10">List below two personal reference other than your family or relatives who they know you at least for the last 4 years</h1>
                                    <div class="separator mb-8"></div>

                                    <div class="row mb-5" style="background-color: #f0f0f0;">
                                        <h3>Reference 1</h3>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Name</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->reference_1_name}}" class="form-control form-control-solid" placeholder="" name="reference_name" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Address</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->reference_1_address}}" class="form-control form-control-solid" placeholder="" name="reference_address" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Phone</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->reference_1_phone}}" class="form-control form-control-solid" placeholder="" name="reference_phone" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Occupation</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->reference_1_occupation}}" class="form-control form-control-solid" placeholder="" name="reference_occupation" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Relationship</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->reference_1_relationship}}" class="form-control form-control-solid" placeholder="" name="reference_relationship" />
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <h3>Reference 2</h3>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Name</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->reference_2_name}}" class="form-control form-control-solid" placeholder="" name="reference_name" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Address</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->reference_2_address}}" class="form-control form-control-solid" placeholder="" name="reference_address" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Phone</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->reference_2_phone}}" class="form-control form-control-solid" placeholder="" name="reference_phone" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Occupation</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->reference_2_occupation}}" class="form-control form-control-solid" placeholder="" name="reference_occupation" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Relationship</label>
                                            <input type="text" disabled  value="{{$jobConfirmation[0]->reference_2_relationship}}" class="form-control form-control-solid" placeholder="" name="reference_relationship" />
                                        </div>
                                    </div>
                                    <!-- End :: References -->

                                    <!-- Start :: Professional References -->
                                    <h1 class="mt-10">List below two business or professional reference who have knowledge of your work performance within the last four years.</h1>
                                    <div class="separator mb-8"></div>

                                    <div class="row mb-5" style="background-color: #f0f0f0;">
                                        <h3>Reference 1</h3>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Name</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->professional_reference_1_name}}" class="form-control form-control-solid" placeholder="" name="reference_name" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Address</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->professional_reference_1_address}}" class="form-control form-control-solid" placeholder="" name="reference_address" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Phone</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->professional_reference_1_phone}}" class="form-control form-control-solid" placeholder="" name="reference_phone" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Occupation</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->professional_reference_1_occupation}}" class="form-control form-control-solid" placeholder="" name="reference_occupation" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Relationship</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->professional_reference_1_relationship}}" class="form-control form-control-solid" placeholder="" name="reference_relationship" />
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <h3>Reference 2</h3>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Name</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->professional_reference_2_name}}" class="form-control form-control-solid" placeholder="" name="reference_name" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Address</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->professional_reference_2_address}}" class="form-control form-control-solid" placeholder="" name="reference_address" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Phone</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->professional_reference_2_phone}}" class="form-control form-control-solid" placeholder="" name="reference_phone" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Occupation</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->professional_reference_2_occupation}}" class="form-control form-control-solid" placeholder="" name="reference_occupation" />
                                        </div>
                                        <div class="col-md col-auto">
                                            <label class="fs-5 fw-bold mb-2">Relationship</label>
                                            <input type="text" disabled value="{{$jobConfirmation[0]->professional_reference_2_relationship}}" class="form-control form-control-solid" placeholder="" name="reference_relationship" />
                                        </div>
                                    </div>
                                    <!-- End :: Professional References -->

                                    <!-- Start :: APPLICANT STATEMENT -->
                                    <div class="mt-10">
                                        <h1>APPLICANT STATEMENT
                                            <br>
                                            <span class="fs-4">(Read and Sign Below) </span>
                                        </h1>
                                        <div class="separator mb-8"></div>

                                        <p class="fw-bold fs-4 text-gray-600 mb-2">I certify that this employment application was completed by me and that all of the
                                            information on this application is true and correct to the best of my knowledge. I understand
                                            that any falsification, misrepresentation, or omission of facts called for herein will result in
                                            my disqualification from further consideration or dismissal from employment if I am hired. I
                                            have reviewed the Authorization for Criminal Records Verification and Fingerprint
                                            Information and acknowledge that I understand the terms set forth therein. I understand that
                                            this employment application is not valid without my signature.</p>
                                        <div class="row my-5">
                                            <div class="col">
                                                <label class="fs-5 fw-bold mb-2">Print Name</label>
                                                <input disabled type="text" class="form-control form-control-solid" value="{{$jobConfirmation[0]->print_name}}" placeholder="" name="print_name" />
                                            </div>
                                            <div class="col">
                                                <label class="fs-5 fw-bold mb-2">Signature Date</label>
                                                <input disabled type="text" class="form-control form-control-solid" value="{{$jobConfirmation[0]->signature_date}}" placeholder="MM-DD-YYYY" name="signature_date" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End :: APPLICANT STATEMENT -->
                                </form>
                            </div>
                        </div>
                        <!--end::Card Body-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->

@endsection('content')