<div>
    @if($listKey->isEmpty())
        <div class="justify-content-start text-center py-5 text-muted">
            <div class="mb-5">
                <i class='bx bx-info-circle fs-1'></i>
            </div>
            <div>
                <span>
                    Not found keys...
                </span>
            </div>
        </div>
    @else
        <div class="card d-sm-flex flex-sm-row align-items-sm-center justify-content-between border-0 shadow-sm p-3 p-md-4 mb-4 rounded">
            <div class="d-flex align-items-center pe-sm-3">
                <img src="https://flagicons.lipis.dev/flags/4x3/fr.svg" width="64" class="rounded">
                <div class="ps-3 ps-sm-4">
                    <h6 class="mb-2">**** **** **** 4298</h6>
                    <div class="fs-sm">Expiration 09/26</div>
                </div>
            </div>
            <div class="d-flex justify-content-end pt-3 pt-sm-0">
                <button type="button" class="btn btn-outline-secondary px-3 px-xl-4 me-3">
                    <i class="bx bx-edit fs-xl me-lg-1 me-xl-2"></i>
                    <span class="d-none d-lg-inline">Edit</span>
                </button>
                <button type="button" class="btn btn-outline-danger px-3 px-xl-4">
                    <i class="bx bx-trash-alt fs-xl me-lg-1 me-xl-2"></i>
                    <span class="d-none d-lg-inline">Delete</span>
                </button>
            </div>
        </div>
    @endif

</div>
