<div>
    <div class="row row-cols-1 row-cols-md-2">
{{--        @dd($list)--}}
        @foreach($list['serverList'] as $index => $lists)
            <div class="col py-1 my-2 my-sm-3">
                <div href="services-single-v1.html" class="card  h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block rounded-3 position-absolute top-0 translate-middle-y">
                            <img src="{{ $lists['location_img'] }}" class="d-block m-1 rounded-1" width="70" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">
                            <span class="me-3">{{ $lists['label'] }}</span><span class="text-muted">#1</span>
                        </h2>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <button type="button" class="btn btn-secondary text-uppercase">Generate key</button>
                            </div>
                            <div>
                                <span class="badge bg-faded-success text-success">{{ \App\Http\Controllers\PingHostContoller::getPingHoist($lists['ip'], $lists['port'], 10) }}ms</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach

    </div>
</div>
