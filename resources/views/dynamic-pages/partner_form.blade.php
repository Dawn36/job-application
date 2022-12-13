<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../">
    <title>Be Partner / Contribute to Community - CCMS</title>
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
                                        <h1>{{$jobs}}</h1>
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
                                                    <form id="" class="form w-lg-auto mx-auto" method="POST" action="{{ route('partner_form') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <!--begin::Group-->
                                                        <div class="mb-5">
                                                            <!--begin::Step 1-->
                                                            <div class="flex-column current" data-kt-stepper-element="content">
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-10 text-center">
                                                                    <p class="fw-bold fs-4 text-gray-600 mb-2">You are Appling for</p>
                                                                    <h1 class="fw-bolder display-4 text-gray-800 mb-2">Be Partner / Contribute to Community</h1>
                                                                </div>
                                                                <!--end::Input group-->
                                                            </div>
                                                            <!--begin::Step 1-->

                                                            <!--begin::Step 2-->
                                                            <div class="flex-column" data-kt-stepper-element="content">
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-10">
                                                                    <!--begin::Form-->
                                                                    
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-12">
                                                                                <div class="form-check form-check-custom form-check-solid mb-3 form-check-lg">
                                                                                    <input class="form-check-input" name="status" type="radio" id="1" value="individual" checked/>
                                                                                    <label class="form-check-label" for="1">
                                                                                        I am individual
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check form-check-custom form-check-solid mb-3 form-check-lg">
                                                                                    <input class="form-check-input" name="status" type="radio" id="2" value="company" />
                                                                                    <label class="form-check-label" for="2">
                                                                                        I am company
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-6 fv-row">
                                                                                <label class="required fs-5 fw-bold mb-2">First Name</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="first_name" required/>
                                                                            </div>
                                                                            <div class="col-md-6 fv-row">
                                                                                <label class="required fs-5 fw-bold mb-2">Last Name</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="last_name" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-6 fv-row">
                                                                                <label class="required fs-5 fw-bold mb-2">Email</label>
                                                                                <input class="form-control form-control-solid" placeholder="" name="email" required/>
                                                                            </div>
                                                                            <div class="col-md-6 required fv-row">
                                                                                <label class="fs-5 fw-bold mb-2">Mobile No</label>
                                                                                <input type="text" class="form-control form-control-solid" placeholder="" name="mobile_no" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-12">
                                                                                <label class="fs-6 required fw-bold mb-2">Describe your interest or what you are going to offer for the community</label>
                                                                                <textarea class="form-control form-control-solid" rows="5" name="description" placeholder="Describe your interest or what you are going to offer for the community"required></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5">
                                                                            <div class="col-md-6 fv-row">
                                                                            </div>
                                                                            <div class="col-md-6 fv-row">
                                                                                <label class="fs-5 fw-bold mb-2">Attach resume</label>
                                                                                <input type="file"  class="form-control form-control-solid" name="file" required>
                                                                            </div>
                                                                        </div>
                                                                    <!--end::Form-->
                                                                </div>
                                                                <!--end::Input group-->
                                                            </div>
                                                            <!--begin::Step 2-->
                                                        </div>
                                                        <!--end::Group-->

                                                        <!--begin::Actions-->
                                                        <div class="d-flex flex-stack">
                                                            <!--begin::Wrapper-->
                                                            <div class="me-2">
                                                                <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                                                                    Back
                                                                </button>
                                                            </div>
                                                            <!--end::Wrapper-->

                                                            <!--begin::Wrapper-->
                                                            <div>
                                                                <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">Final Submit</button>
                                                                <button type="button" class="btn btn-primary" data-kt-stepper-action="next">Continue</button>
                                                            </div>
                                                            <!--end::Wrapper-->
                                                        </div>
                                                        <!--end::Actions-->
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
    </script>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>