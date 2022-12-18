<form id="" class="form" method="POST" action="{{ route('job_listing.store') }}" >
    @csrf
    <!--begin::Scroll-->
    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
        <div class="fv-row mb-7">
            <label class="required fw-bold fs-6 mb-2">Job Title</label>
            <input type="text"  name="job_title" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Please Enter your Job Title here." required/>
        </div>
        <div class="fv-row mb-7">
            <label class="required fw-bold fs-6 mb-2">Job #</label>
            <input type="text" name="job_number" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Please Enter your Job # here." required/>
        </div>
        <textarea name='description' id='body' hidden></textarea>
        <div class="fv-row mb-7">
            <div name="kt_ecommerce_add_product_description" class="min-h-200px mb-2 kt_docs_quill_basica"></div>
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