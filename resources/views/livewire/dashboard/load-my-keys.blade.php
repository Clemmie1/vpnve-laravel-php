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
                    <input type="hidden" id="accessKey" value="{{$list['vpn_access_url']}}">
                    <div class="pt-3 pt-sm-0">
                        <div class="d-flex justify-content-end">
                            <div wire:loading.remove>
                                <button type="button" onclick="copyCode('{{$list['vpn_access_url']}}')" class="btn btn-outline-secondary px-3 px-xl-3 me-1">
                                    <i class="bx bx-copy fs-xl me-lg-1 me-xl-2"></i>
                                    <span class="d-none d-lg-inline">Copy key</span>
                                </button>
                                <button x-on:click="$wire.deleteKey({{$list['id']}})" x-clipboard="dsadsa" type="button" class="btn btn-outline-danger px-3 px-xl-3">
                                    <i class="bx bx-trash-alt fs-xl me-lg-1 me-xl-2"></i>
                                    <span class="d-none d-lg-inline">Delete</span>
                                </button>
                            </div>

                            <div wire:loading>
                                <button type="button" onclick="copyCode('{{$list['vpn_access_url']}}')" class="btn btn-outline-secondary px-3 px-xl-3 me-1">
                                    <i class="bx bx-copy fs-xl me-lg-1 me-xl-2"></i>
                                    <span class="d-none d-lg-inline">Copy key</span>
                                </button>
                                <button disabled type="button" class="btn btn-outline-danger px-3 px-xl-3">
                                    <i class="bx bx-trash-alt fs-xl me-lg-1 me-xl-2"></i>
                                    <span class="d-none d-lg-inline">Delete</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 fs-6 text-muted">
                    <button onclick="location.href='{{$list['vpn_access_url']}}'" class="w-100 btn btn-secondary">
                        Open in app
                    </button>

                </div>
            </div>
        @endforeach
    @endif
</div>
