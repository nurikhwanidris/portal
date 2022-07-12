<div>
    <div class="container-fluid slider">
        <div class="row slider-row">
            <div class="col">
                <div class="owl-carousel nav-inside show-nav-hover dots-inside mb-0"
                    style="box-shadow: 0px 0px 10px #ccc;"
                    data-plugin-options="{'items': 1, 'loop': true, 'autoplay': true, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'nav': true, 'dots': true, 'animateOut': 'fadeOut'}">
                    @foreach ($sliders as $slider)
                        <div>
                            <img src="{{ asset('storage/upload/img/' . $slider->filename) }}" z>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
