<div>
    <div class="container-fluid" style="padding: 0 150px;">
        <div class="row" style="padding: 30px 0;">
            <div class="col">
                <div class="owl-carousel nav-inside show-nav-hover dots-inside mb-0"
                    style="box-shadow: 0px 0px 10px #ccc;"
                    data-plugin-options="{'items': 1, 'loop': true, 'autoplay': true, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'nav': true, 'dots': true, 'animateOut': 'fadeOut'}">
                    @foreach ($sliders as $slider)
                        <div>
                            <img src="{{ asset('storage/upload/img/' . $slider->filename) }}" style="height: 100%;">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
