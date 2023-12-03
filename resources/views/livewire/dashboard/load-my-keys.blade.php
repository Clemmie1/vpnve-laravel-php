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
        <div wire:loading wire:target="deleteKey, getConnect">
            <div class="py-3 text-center justify-content-center">
                <div class="spinner-border spinner-border-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        @foreach($listKey as $list)
            <div class="card border-0 shadow-sm p-3 p-md-4 mb-4 rounded disabled">
                <div class="d-sm-flex flex-sm-row align-items-sm-center justify-content-between">
                    <div class="d-flex align-items-center pe-sm-3">
                        <img src="{{$list['vpn_location']}}" width="64" class="rounded">
                        <div class="ps-3 ps-sm-4">
                            <h6 class="mb-2">ID {{$list['id']}} | Traffic: N/A</h6>
                            <div class="fs-sm">Created {{ \Carbon\Carbon::parse($list['created_at'])->diffForHumans() }}</div>
                        </div>

                    </div>
                    <div class="pt-3 pt-sm-0">
                        <div class="d-flex justify-content-end">
                            <div wire:loading.remove>
                                <button wire:click="deleteKey({{$list['id']}})" type="button" class="btn btn-outline-danger px-3 px-xl-4">
                                    <i class="bx bx-trash-alt fs-xl me-lg-1 me-xl-2"></i>
                                    <span class="d-none d-lg-inline">Delete</span>
                                </button>
                            </div>

                            <div wire:loading>
                                <button disabled type="button" class="btn btn-outline-danger px-3 px-xl-4">
                                    <i class="bx bx-trash-alt fs-xl me-lg-1 me-xl-2"></i>
                                    <span class="d-none d-lg-inline">Delete</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 fs-6 text-muted">
                    {{ $list['vpn_access_url'] }}
                </div>
            </div>
        @endforeach
    @endif
        @if($showModalConnect)
            <div class="modal fade show" id="modalCentered" tabindex="-11" style="display: block;" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>{{ $url_connect }}</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary btn-sm" type="button">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
</div>
