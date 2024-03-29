<div>

    @if($getKey == null)
        <div class="d-flex align-items-center justify-content-between pt-xl-1 mb-3 pb-3">
            <h1 class="h1 mb-0">API</h1>
            <button wire:click="generateApiKey" type="button" class="btn btn-secondary px-3 px-sm-4">
                <i class="bx bx-plus fs-xl me-sm-1"></i>
                Generate
            </button>
        </div>
        <div class="justify-content-start text-center py-5 text-muted">
            <div class="mb-5">
                <i class='bx bx-info-circle fs-1'></i>
            </div>
            <div>
                <span>
                    Not found...
                </span>
            </div>
        </div>
    @else
        <div class="d-flex align-items-center justify-content-between pt-xl-1 mb-3 pb-3">
            <h1 class="h1 mb-0">API</h1>
            <button disabled type="button" class="btn btn-secondary px-3 px-sm-4 disabled">
                <i class="bx bx-plus fs-xl me-sm-1"></i>
                Generate
            </button>
        </div>

        <ul class="list-unstyled mb-0">
            <li class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-start ">
                    <div class="ps-0">
                        <span id="key" class="d-inline-block fs-sm text-muted me-2">{{$getKey}}</span>
                        <span>
                            <i style="cursor: pointer;" onclick="copyCode()" class="bx bx-copy fs-xl text-primary"></i>
                            <i style="cursor: pointer;" wire:click="deleteApiKey" class="bx bx-trash-alt fs-xl text-danger"></i>
                        </span>
                    </div>
                </div>
            </li>
        </ul>
    @endif

</div>
