@extends('layouts.main')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Edit Dynamic Content of Public Jobs Page</a>
                                    </div>
                                    <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            Content Editing
                                        </a>
                                    </div>
                                </div>
                                <!--begin::Actions-->
                                <!-- <div class="d-flex my-4">
                                    <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_email_templates">Edit Content</a>
                                </div> -->
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::details View-->
            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                <!--begin::Card header-->
                <div class="card-header cursor-pointer">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Jobs Page Body</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Card body-->
                @if(!isset($dynamicContentPage->id))
                <form id="" class="form" method="POST" action="{{ route('dynamic_job_page') }}" >
                    @csrf
                    <textarea name='description' id='body' hidden></textarea>
                @else
                <form id="" class="form" method="POST" action="{{ route('dynamic_job_update',$dynamicContentPage->id) }}" >
                    @csrf
                    <textarea name='description' id='body' hidden>{{$dynamicContentPage->description}}</textarea>
                @endif
                <div class="card-body p-9">
                    <label class="required fw-bold fs-6 mb-2">Content</label>
                    <div name="kt_ecommerce_add_product_description" class="min-h-200px mb-2 kt_docs_quill_basica"></div>
                    <div class="text-muted fs-7">Update the content above.</div>
                    <br>
                    <button type="submit" class="btn btn-sm btn-light-primary" >Update Content</button>
                </div>
                </form>
                <!--end::Card body-->
            </div>
            <!--end::details View-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<script>
    // $("#kt_datatable_example_1").DataTable();
    $(document).ready(function() {
       
        var quill = new Quill('.kt_docs_quill_basica', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline'],
                ]
            },
            placeholder: 'Type your text here...',
            theme: 'snow' // or 'bubble'
        });
       
        quill.on('text-change', function() {
        document.getElementById("body").value = quill.root.innerHTML;

        
    });

       
    var value1 = document.getElementById("body").value;
    var delta1 = quill.clipboard.convert(value1);

    quill.setContents(delta1, 'silent');
    });
</script>
@endsection('content')