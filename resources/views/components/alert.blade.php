@if (session('success'))
    <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-1">
        <div class="d-flex align-items-center">
            <div class="font-30 text-white"><i class="bx bxs-check-circle"></i>
            </div>
            <div class="ms-3">
                <h6 class="mb-0 text-white">Success Alert</h6>
                <div class="text-white">{{session('success')}}</div>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif