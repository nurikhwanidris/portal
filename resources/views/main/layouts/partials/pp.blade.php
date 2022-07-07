<div class="row"
    style="margin-top: 20px; margin-bottom: -20px; background-color: #f7f7f7;padding-top: 9px; padding-bottom: -1px">
    <div class="col">
        <h2 class="font-weight-normal text-center text-6">
            <strong>
                {{ __('message.product_and_service') }}
            </strong>
        </h2>
    </div>
</div>
<div class="d-inline-flex">
    <div class="row featured-boxes-full featured-boxes-full-scale">
        <div class="col-lg-2 featured-box-full featured-box-full-primary">
            <a href="https://ebiz.jupem.gov.my/" target="_blank">
                <img src="/main/img/logo-default/icon-produk-perkhidmatan/ebiz.png" width="100px" class="image-pp">
                <div class="overlay-pp">
                    <div class="text-pp font-weight-normal text-app mt-3">
                        <strong>
                            {{ __('message.ebiz') }}
                        </strong>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-2 featured-box-full featured-box-full-primary">
            <a href="{{ route('eKadaster', [app()->getLocale()]) }}" target="_self">
                <img src="/main/img/logo-default/icon-produk-perkhidmatan/ekadaster.png" width="100px"
                    class="image-pp">
                <div class="overlay-pp">
                    <div class="text-pp font-weight-normal text-app mt-3">
                        <strong>
                            {{ __('message.ekad') }}
                        </strong>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-2 featured-box-full featured-box-full-primary">
            <a href="{{ route('staps', app()->getLocale()) }}" target="_self">
                <img src="/main/img/logo-default/icon-produk-perkhidmatan/staps.png" width="100px" class="image-pp">
                <div class="overlay-pp">
                    <div class="text-pp font-weight-normal text-app mt-3">
                        <strong>
                            {{ __('message.staps') }}
                        </strong>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-2 featured-box-full featured-box-full-primary">
            <a href="https://www.myrtknet.gov.my/sbc" target="_blank">
                <img src="/main/img/logo-default/icon-produk-perkhidmatan/myrtknet.png" width="100px" class="image-pp">
                <div class="overlay-pp">
                    <div class="text-pp font-weight-normal text-app mt-3">
                        <strong>
                            {{ __('message.myrtk') }}
                        </strong>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-2 featured-box-full featured-box-full-primary">
            <a href="https://mygeoserve.jupem.gov.my/iportal/web-ui/index.html" target="_blank">
                <img src="/main/img/logo-default/icon-produk-perkhidmatan/mygeoserve.png" width="100px"
                    class="image-pp">
                <div class="overlay-pp">
                    <div class="text-pp font-weight-normal text-app mt-3">
                        <strong>
                            {{ __('message.mygeoserve') }}
                        </strong>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
