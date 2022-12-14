<form id="" class="form" method="POST" action="{{ route('job_request_submit') }}" >
    @csrf
    <!--begin::Scroll-->
    <input hidden name="job_id" value="{{$id}}" />
    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
        <div class="fv-row mb-7">
            <label class="fs-5 fw-bold mb-2">Social Security Number (SS#)</label>
            <input type="text" class="form-control form-control-solid" value="{{$jobConfirmation[0]->social_security_number}}" placeholder="" id="social_security_number" name="social_security_number" />
        </div>
        <div class="fv-row mb-7">
            <label class="fs-5 fw-bold mb-2">Driving License Number (DL#)</label>
            <input type="text" class="form-control form-control-solid" value="{{$jobConfirmation[0]->driving_license_number}}" placeholder="" name="driving_license_number" />
        </div>
    </div>
    <!--end::Scroll-->
    <!--begin::Actions-->
    <div class="text-center pt-15">
        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal" aria-label="Close">Discard</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <!--end::Actions-->
</form>
<script src="{{ asset('theme/assets/js/jquery.inputmask.bundle.js')}}"></script>
<script>
    $("#social_security_number").inputmask({"mask": "999-99-9999"});
    </script>