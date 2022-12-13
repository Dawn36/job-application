<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../">
    <title>Job Confirmation - CCMS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('theme/assets/media/logos/CCMS-nobg.png')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('theme/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/792974b28a.js"></script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="col" id="kt_wrapper">

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            <!--begin::Careers - List-->
                            <div class="card">
                                <!--begin::Body-->
                                <div class="card-body p-lg-17">
                                    <!--begin::Hero-->
                                    <div class="text-center mb-17">
                                        <!--begin::Heading-->
                                        <img alt="Logo" src="{{ asset('theme/assets/media/logos/CCMS-logo.png')}}" class="h-100px h-lg-150px logo" />
                                        <h1>Job Confirmation</h1>
                                        <!--end::Heading-->
                                    </div>
                                    <!--end::-->
                                    <!--begin::Layout-->
                                    <div class="d-flex flex-column flex-lg-row mb-17">
                                        <!--begin::Content-->
                                        <div class="flex-lg-row-fluid me-0">
                                            <!--begin::Job-->
                                            <div class="mb-17">
                                                <!--begin::Stepper-->
                                                <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                                                    <!--begin::Nav-->
                                                    <div class="stepper-nav flex-center flex-wrap mb-10">
                                                        <!--begin::Step 1-->
                                                        <div class="stepper-item mx-2 my-4 current" data-kt-stepper-element="nav">
                                                            <!--begin::Icon-->
                                                            <div class="stepper-icon w-40px h-40px">
                                                                <i class="stepper-check fas fa-check"></i>
                                                                <span class="stepper-number">1</span>
                                                            </div>
                                                            <!--end::Icon-->
                                                        </div>
                                                        <!--end::Step 1-->

                                                        <!--begin::Step 2-->
                                                        <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                                            <!--begin::Icon-->
                                                            <div class="stepper-icon w-40px h-40px">
                                                                <i class="stepper-check fas fa-check"></i>
                                                                <span class="stepper-number">2</span>
                                                            </div>
                                                            <!--begin::Icon-->
                                                        </div>
                                                        <!--end::Step 2-->
                                                    </div>
                                                    <!--end::Nav-->

                                                    <!--begin::Form-->
                                                    <form id="" class="form" method="POST" action="{{ route('job_confirmation') }}" >
                                                        @csrf
                                                        <!--begin::Group-->
                                                        <div class="mb-5">
                                                            <!--begin::Step 1-->
                                                            <div class="flex-column current" data-kt-stepper-element="content">
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-10 text-center">
                                                                    <p class="fw-bold fs-4 text-gray-600 mb-2">You are Appling for</p>
                                                                    <h1 class="fw-bolder display-4 text-gray-800 mb-2">{{$jobs->job_title}} {{$jobs->job_number}}</h1>
                                                                </div>
                                                                <!--end::Input group-->
                                                            </div>
                                                            <!--end::Step 1-->

                                                            <!--begin::Step 2-->
                                                            <div class="flex-column" data-kt-stepper-element="content">
                                                                <div class="fv-row mb-10">

                                                                        <!-- Start :: APPLICANT INFORMATION -->
                                                                        <h1>APPLICANT INFORMATION</h1>
                                                                        <div class="separator mb-8"></div>

                                                                        <div class="row mb-5">
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Last Name</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="last_name" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">First Name</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="first_name" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Middle Name</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="middle_name" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Date</label>
                                                                                <input type="text" class="form-control form-control-solid kt_datepicker_2" placeholder="" name="date" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Current Address</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="current_address" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">City</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="city" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">State</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="state" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Zip Code</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" min="9" max="9" name="zip_code" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Previous Address</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="previous_address" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">City</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="previous_city" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">State</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="previous_state" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Zip Code</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" min="9" max="9" name="previous_zip_code" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Telephone</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="telephone" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Alternate Telephone <span class="text-danger">(optional)</span></label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="alternate_telephone" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Best Contact Time</label>
                                                                                <input type="text" class="form-control form-control-solid kt_datepicker_3" placeholder="" name="best_contact_time" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">E-Mail Address</label>
                                                                                <input class="form-control form-control-solid" placeholder="" name="e_mail_address" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">Date of Birth</label>
                                                                                <input type="text" class="form-control form-control-solid kt_datepicker_2" placeholder="" name="date_of_birth" />
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">Social Security Number (SS#)</label>
                                                                                <input type="text" disabled class="form-control form-control-solid" placeholder="" name="ssn" />
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">Driving License Number (DL#)</label>
                                                                                <input type="text" disabled class="form-control form-control-solid" placeholder="" name="dln" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">Position Apply For</label>
                                                                                <input class="form-control form-control-solid" readonly value="{{$jobs->job_title}}"  placeholder="" name="position_apply_for" />
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">Type of Work Desired</label>
                                                                                <select name="type_of_work_desired" class="form-control form-control-solid">
                                                                                    <option value="Full-Time">Full-Time</option>
                                                                                    <option value="Part-Time">Part-Time</option>
                                                                                    <option value="Temporary/Contract">Temporary/Contract</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">Job Post #</label>
                                                                                <input class="form-control form-control-solid" readonly value=" {{$jobs->job_number}}" placeholder="" name="job_post_number" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-6">
                                                                                <label class="fs-5 fw-bold mb-2">When Are You Available to Begin Work?</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="available_to_begin_work" />
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="fs-5 fw-bold mb-2">Willing to Work Overtime?</label>
                                                                                <select name="work_overtime" class="form-control form-control-solid">
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-6">
                                                                                <label class="fs-5 fw-bold mb-2">If hired, can you provide evidence that you are authorized and of legal age to work in the United States?</label>
                                                                                <select name="authorized_age" class="form-control form-control-solid">
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="fs-5 fw-bold mb-2">Willing to undergo a Background check? </label>
                                                                                <select name="background_check" class="form-control form-control-solid">
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">In Case of Emergency Notify</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="emergency" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Telephone</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="emergency_telephone" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Name of Nearest Relative</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="name_of_nearest_relative" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Telephone</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="relative_telephone" />
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
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="high_school_name" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">COURSE OF STUDY</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="high_school_course_of_study" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">NO. YEARS COMPLETED</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="high_school_year_completed" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">DEGREE/Certificate</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="high_school_degree" />
                                                                            </div>
                                                                        </div>
                                                                        <h3>BUSINESS/TECHNICAL</h3>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">SCHOOL NAME/LOCATION</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="business_school_name" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">COURSE OF STUDY</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="business_course_of_study" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">NO. YEARS COMPLETED</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="business_year_completed" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">DEGREE/Certificate</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="business_degree" />
                                                                            </div>
                                                                        </div>
                                                                        <h3>COLLEGE</h3>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">SCHOOL NAME/LOCATION</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="college_name" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">COURSE OF STUDY</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="college_course_of_study" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">NO. YEARS COMPLETED</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="college_year_completed" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">DEGREE/Certificate</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="college_degree" />
                                                                            </div>
                                                                        </div>
                                                                        <h3>GRADUATE</h3>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">SCHOOL NAME/LOCATION</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="graduate_name" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">COURSE OF STUDY</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="graduate_course_of_study" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">NO. YEARS COMPLETED</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="graduate_year_completed" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">DEGREE/Certificate</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="graduate_degree" />
                                                                            </div>
                                                                        </div>
                                                                        <h3>OTHER</h3>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">SCHOOL NAME/LOCATION</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="other_name" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">COURSE OF STUDY</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="other_course_of_study" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">NO. YEARS COMPLETED</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="other_year_completed" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">DEGREE/Certificate</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="other_degree" />
                                                                            </div>
                                                                        </div>
                                                                        <!-- End :: EDUCATION -->

                                                                        <!-- Start :: Proficient Computer Skills/Softwares -->
                                                                        <h1 class="mt-15">Proficient Computer Skills/Softwares</h1>
                                                                        <div class="separator mb-8"></div>

                                                                        <div class="row mb-5">
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">List any computer knowledge that you are good at</label>
                                                                                <textarea name="computer_knowledge" class="form-control form-control-solid" cols="30" rows="5"></textarea>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">List any programing knowledge that you are good at</label>
                                                                                <textarea name="programing_knowledge" class="form-control form-control-solid" cols="30" rows="5"></textarea>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">List any graphic/ video editing knowledge that you are good at</label>
                                                                                <textarea name="graphic_video_editing_knowledge" class="form-control form-control-solid" cols="30" rows="5"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End :: Proficient Computer Skills/Softwares -->

                                                                        <!-- Start :: EMPLOYERS -->
                                                                        <h1 class="mt-15">EMPLOYERS <span class="text-danger fw-normal fs-6">(List all jobs and contracts held by you during the past five continuous years that we may contact)</span></h1>
                                                                        <div class="separator mb-8"></div>

                                                                        <div id="questions">
                                                                            <div class="row mb-5">
                                                                                <div class="col-md-6">
                                                                                    <label class="fs-5 fw-bold mb-2">Company Name</label>
                                                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="company_name[]" />
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="fs-5 fw-bold mb-2">Telephone <span class="text-danger">(optional)</span></label>
                                                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="e_telephone[]" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-5">
                                                                                <div class="col-md-3">
                                                                                    <label class="fs-5 fw-bold mb-2">Address</label>
                                                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="address[]" />
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="fs-5 fw-bold mb-2">City</label>
                                                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="e_city[]" />
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="fs-5 fw-bold mb-2">State</label>
                                                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="e_state[]" />
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="fs-5 fw-bold mb-2">ZIP Code</label>
                                                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="e_zip_code[]" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-5">
                                                                                <div class="col-md-3">
                                                                                    <label class="fs-5 fw-bold mb-2">Position Held</label>
                                                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="position_held[]" />
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="fs-5 fw-bold mb-2">From</label>
                                                                                    <input type="text" class="form-control form-control-solid" placeholder="MM-DD-YYYY" name="from[]" />
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="fs-5 fw-bold mb-2">To</label>
                                                                                    <input type="text" class="form-control form-control-solid" placeholder="MM-DD-YYYY" name="to[]" />
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label class="fs-5 fw-bold mb-2">Starting/Ending Salary</label>
                                                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="starting_ending_salary[]" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-5">
                                                                                <div class="col-md-12">
                                                                                    <label class="fs-5 fw-bold mb-2">Duties:</label>
                                                                                    <textarea name="duties[]" class="form-control form-control-solid" cols="30" rows="5"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-5">
                                                                                <div class="col-md-6">
                                                                                    <label class="fs-5 fw-bold mb-2">Reason for Leaving</label>
                                                                                    <textarea name="reason_for_leaving[]" class="form-control form-control-solid" cols="30" rows="5"></textarea>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="fs-5 fw-bold mb-2">Supervisor Name / Contact</label>
                                                                                    <textarea name="supervisor_name[]" class="form-control form-control-solid" cols="30" rows="5"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-5">
                                                                                <div class="col-md-12">
                                                                                    <button type="button" id="DeleteRow" class="btn btn-sm btn-light-danger fs-6 fw-bold"><i class="fas fa-trash-alt fs-4 pe-2"></i>Delete</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div id="newinput"></div>
                                                                        <div class="btn-wrapper d-flex gap-2 my-4">
                                                                            <button id="rowAdder" type="button" class="btn btn-sm btn-light-success fs-6 fw-bold">
                                                                                <i class="fas fa-plus pe-2"></i> Add Employer
                                                                            </button>
                                                                        </div>
                                                                        <!-- End :: EMPLOYERS -->

                                                                        <!-- Start :: MILITARY STATUS -->
                                                                        <h1 class="mt-15">MILITARY STATUS <span class="text-danger fw-normal fs-6">(Optional)</span></h1>
                                                                        <div class="separator mb-8"></div>

                                                                        <div class="row mb-5">
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Have You Served in the U.S. Armed Services? <span class="text-danger">IF NO jump to the next step</span></label>
                                                                                <select name="you_served_in_usa" class="form-control form-control-solid">
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Branch</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="branch" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">Start Date</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="start_date" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label class="fs-5 fw-bold mb-2">End Date</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="end_date" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">Rank/Rate at Discharge</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="rate_discharge" />
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">Type of Service</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="type_of_service" />
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">Type of Discharge</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="type_of_discharge" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">Special Training/Experience Received in the U.S. Armed Services</label>
                                                                                <textarea name="special_training" class="form-control form-control-solid" cols="30" rows="5"></textarea>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">Draft Status</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="draft_status" />
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label class="fs-5 fw-bold mb-2">Reserve Status</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="reserve_status" />
                                                                            </div>
                                                                        </div>
                                                                        <!-- End :: MILITARY STATUS -->

                                                                        <!-- Start :: CRIMINAL HISTORY -->
                                                                        <h1 class="mt-15">CRIMINAL HISTORY <span class="text-danger fw-normal fs-6">(Optional)</span></h1>
                                                                        <div class="separator mb-8"></div>

                                                                        <div class="row mb-5">
                                                                            <div class="col-md-12 mb-5">
                                                                                <label class="fs-5 fw-bold mb-2">Have you ever been convicted of a criminal offense?</label>
                                                                                <select name="criminal_offense" class="form-control form-control-solid">
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-12 mb-5">
                                                                                <label class="fs-5 fw-bold mb-2">Do you currently have any criminal actions pending in which you are the Defendant? (Not Applicable to California Applicants) Check One:</label>
                                                                                <select name="criminal_actions_pending" class="form-control form-control-solid">
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-12 mb-5">
                                                                                <label class="fs-5 fw-bold mb-2">Are you currently on probation or parole? Check One:</label>
                                                                                <select name="probation_or_parole" class="form-control form-control-solid">
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-12 mb-5">
                                                                                <label class="fs-5 fw-bold mb-2">If you answered "Yes" to any of the above questions, please explain the nature of the offense and provide the date of the offense and the county and state in which it occurred</label>
                                                                                <textarea name="explain_the_nature_of_the_offense" class="form-control form-control-solid" cols="30" rows="5"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End :: CRIMINAL HISTORY -->

                                                                        <!-- Start :: References -->
                                                                        <h1 class="mt-10">List below two personal reference other than your family or relatives who they know you at least for the last 4 years</h1>
                                                                        <div class="separator mb-8"></div>

                                                                        <div class="row mb-5">
                                                                            <h3>Reference 1</h3>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Name</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="reference_1_name" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Address</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="reference_1_address" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Phone</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="reference_1_phone" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Occupation</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="reference_1_occupation" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Relationship</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="reference_1_relationship" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <h3>Reference 2</h3>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Name</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="reference_2_name" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Address</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="reference_2_address" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Phone</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="reference_2_phone" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Occupation</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="reference_2_occupation" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Relationship</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="reference_2_relationship" />
                                                                            </div>
                                                                        </div>
                                                                        <!-- End :: References -->

                                                                        <!-- Start :: Professional References -->
                                                                        <h1 class="mt-10">List below two business or professional reference who have knowledge of your work performance within the last four years.</h1>
                                                                        <div class="separator mb-8"></div>

                                                                        <div class="row mb-5">
                                                                            <h3>Reference 1</h3>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Name</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="professional_reference_1_name" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Address</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="professional_reference_1_address" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Phone</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="professional_reference_1_phone" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Occupation</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="professional_reference_1_occupation" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Relationship</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="professional_reference_1_relationship" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <h3>Reference 2</h3>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Name</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="professional_reference_2_name" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Address</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="professional_reference_2_address" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Phone</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="professional_reference_2_phone" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Occupation</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="professional_reference_2_occupation" />
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <label class="fs-5 fw-bold mb-2">Relationship</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="professional_reference_2_relationship" />
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
                                                                                    <input type="text" class="form-control form-control-solid" placeholder="" name="print_name" />
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label class="fs-5 fw-bold mb-2">Signature Date</label>
                                                                                    <input type="text" class="form-control form-control-solid" placeholder="MM-DD-YYYY" name="signature_date" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End :: APPLICANT STATEMENT -->
                                                                 
                                                                </div>
                                                            </div>
                                                            <!--end::Step 2-->
                                                        </div>

                                                        <div class="d-flex flex-stack">
                                                            <div class="me-2">
                                                                <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                                                                    Back
                                                                </button>
                                                            </div>

                                                            <div>
                                                                <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">Final Submit</button>
                                                                <button type="button" class="btn btn-primary" data-kt-stepper-action="next">Continue</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Stepper-->
                                            </div>
                                            <!--end::Job-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Layout-->

                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Careers - List-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--end::Main-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('theme/assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{ asset('theme/assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('theme/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('theme/assets/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('theme/assets/js/custom/widgets.js')}}"></script>
    <script src="{{ asset('theme/assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{ asset('theme/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{ asset('theme/assets/js/custom/utilities/modals/create-app.js')}}"></script>
    <script src="{{ asset('theme/assets/js/custom/utilities/modals/users-search.js')}}"></script>
    <!--end::Page Custom Javascript-->
    <script>
        // Stepper lement
        var element = document.querySelector("#kt_stepper_example_basic");

        // Initialize Stepper
        var stepper = new KTStepper(element);

        // Handle next step
        stepper.on("kt.stepper.next", function(stepper) {
            stepper.goNext(); // go next step
        });

        // Handle previous step
        stepper.on("kt.stepper.previous", function(stepper) {
            stepper.goPrevious(); // go previous step
        });

        // -- Date Picker
        $(".kt_datepicker_2").flatpickr({});

        // -- Date & Time Picker
        $(".kt_datepicker_3").flatpickr({
            enableTime: true,
            time_24hr: true,
            dateFormat: "Y-m-d H:i",
        });

        // Add or Remove Fields
        $("#rowAdder").click(function() {
            newRowAdd =
                '<div id="questions">' +
                '<div class="row mb-5">' +
                '<div class="col-md-6">' +
                '<label class="fs-5 fw-bold mb-2">Company Name</label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="" name="company_name[]" />' +
                '</div>' +
                '<div class="col-md-6">' +
                '<label class="fs-5 fw-bold mb-2">Telephone <span class="text-danger">(optional)</span></label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="" name="e_telephone[]" />' +
                '</div>' +
                '</div>' +
                '<div class="row mb-5">' +
                '<div class="col-md-3">' +
                '<label class="fs-5 fw-bold mb-2">Address</label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="" name="address[]" />' +
                '</div>' +
                '<div class="col-md-3">' +
                '<label class="fs-5 fw-bold mb-2">City</label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="" name="e_city[]" />' +
                '</div>' +
                '<div class="col-md-3">' +
                '<label class="fs-5 fw-bold mb-2">State</label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="" name="e_state[]" />' +
                '</div>' +
                '<div class="col-md-3">' +
                '<label class="fs-5 fw-bold mb-2">ZIP Code</label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="" name="e_zip_code[]" />' +
                '</div>' +
                '</div>' +
                '<div class="row mb-5">' +
                '<div class="col-md-3">' +
                '<label class="fs-5 fw-bold mb-2">Position Held</label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="" name="position_held[]" />' +
                '</div>' +
                '<div class="col-md-3">' +
                '<label class="fs-5 fw-bold mb-2">From</label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="MM-DD-YYYY" name="from[]" />' +
                '</div>' +
                '<div class="col-md-3">' +
                '<label class="fs-5 fw-bold mb-2">To</label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="MM-DD-YYYY" name="to[]" />' +
                '</div>' +
                '<div class="col-md-3">' +
                '<label class="fs-5 fw-bold mb-2">Starting/Ending Salary</label>' +
                '<input type="text" class="form-control form-control-solid" placeholder="" name="starting_ending_salary[]" />' +
                '</div>' +
                '</div>' +
                '<div class="row mb-5">' +
                '<div class="col-md-12">' +
                '<label class="fs-5 fw-bold mb-2">Duties:</label>' +
                '<textarea name="duties[]" class="form-control form-control-solid" cols="30" rows="5"></textarea>' +
                '</div>' +
                '</div>' +
                '<div class="row mb-5">' +
                '<div class="col-md-6">' +
                '<label class="fs-5 fw-bold mb-2">Reason for Leaving</label>' +
                '<textarea name="reason_for_leaving[]" class="form-control form-control-solid" cols="30" rows="5"></textarea>' +
                '</div>' +
                '<div class="col-md-6">' +
                '<label class="fs-5 fw-bold mb-2">Supervisor Name / Contact</label>' +
                '<textarea name="supervisor_name[]" class="form-control form-control-solid" cols="30" rows="5"></textarea>' +
                '</div>' +
                '</div>' +
                '<div class="row mb-5">' +
                '<div class="col-md-12">' +
                '<button type="button" id="DeleteRow" class="btn btn-sm btn-light-danger fs-6 fw-bold"><i class="fas fa-trash-alt fs-4 pe-2"></i>Delete</button>' +
                '</div>' +
                '</div>' +
                '</div>';
            $('#newinput').append(newRowAdd);
        });

        $("body").on("click", "#DeleteRow", function() {
            $(this).parents("#questions").remove();
        })
    </script>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>