<style>
    .parent {
        position: relative;
        /*width: 300px;
    height: 300px;*/
        /*margin: 10px;*/
        /*border:1px solid red;*/
        padding-bottom: 50px;
        margin-bottom: 150px;
    }

    .child1 {
        position: absolute;
        width: 100%;
        height: 350px;
        /* height: 370px; */
        top: 0;
        left: 0;
        background: #4e914a;
        /* opacity: 0.7; */
        /*background: #2f4c2d;*/
        /* padding-top: 100px; */
        /* margin-top: 45px; */
        /* margin-top: 45px; */
    }

    .child2 {
        z-index: 1;
        /*margin: 30px;*/
        /*background: green;*/
    }

    .icon-kaler {
        color: #c19331;
    }

</style>

<div class="row">
    <div class="col" style="padding-top:10px;">
        <h2 class="font-weight-normal text-center text-6" style="margin-bottom: 0px;">
            {{ __('message.Contact Us') }}
        </h2>
    </div>
</div>

<section class="parent">
    <div class="container-fluid child1"></div>
    <div class="container-fluid child2">
        <div class="container">
            <div class="row align-items-center">
                <!-- Line 1 START -->
                <div class="col-lg-6">
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63739.35934671229!2d101.68325047910156!3d3.1708730000000234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37dd51fff901%3A0x4a80677198e75bfd!2sDepartment%20of%20Survey%20and%20Mapping%20Malaysia%20(JUPEM)!5e0!3m2!1sen!2smy!4v1644058089547!5m2!1sen!2smy"
                            width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <!-- Line 1 END -->
                <!-- Line 2 START -->
                <div style="padding-left: 70px;margin-top: 10px;"
                    class="col-lg-6 row align-items-center appear-animation animated fadeInLeftShorter appear-animation-visible"
                    data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
                    <!-- <div style="padding-left:20px;" class="col-lg-6 p-5 row align-items-center pt-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;" > -->
                    <div class="nama-hubungi-white">{{ __('message.Department of Survey and Mapping Malaysia') }}
                    </div>
                    <div class="feature-box feature-box-primary mb-4">
                        <div class="icon-hubungi-2">
                            <i class="fas fa-map-marker-alt icon-kaler"></i>
                        </div>
                        <div class="feature-box-info">
                            <div class="info-hubungi-white">
                                Jabatan Ukur Dan Pemetaan Malaysia,<br>
                                Wisma JUPEM, Jalan Sultan Yahya Petra,<br>
                                50578 Kuala Lumpur.
                            </div>
                        </div>
                    </div>
                    <div class="feature-box feature-box-primary">
                        <div class="icon-hubungi-2">
                            <i class="fas fa-phone-volume icon-kaler"></i>
                        </div>
                        <div class="feature-box-info">
                            <div class="info-hubungi-white">
                                +603-2617 0800
                            </div>
                        </div>
                    </div>
                    <div class="feature-box feature-box-primary">
                        <div class="icon-hubungi-2">
                            <i class="fas fa-fax icon-kaler"></i>
                        </div>
                        <div class="feature-box-info">
                            <div class="info-hubungi-white">
                                +603-2691 7457
                            </div>
                        </div>
                    </div>
                    <div class="feature-box feature-box-primary">
                        <div class="icon-hubungi-2 icon-kaler">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div class="feature-box-info">
                            <div class="info-hubungi-white">
                                hqweb[at]jupem[dot]gov[dot]my
                            </div>
                        </div>
                    </div>
                    <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 10px;">
                        <a href="/info-korp#tab-3"
                            class="btn btn-modern btn-tertiary mb-2">{{ __('message.jupem_states') }}</a>&nbsp;
                        <a href="/orang-awam#tab-4"
                            class="btn btn-modern btn-secondary mb-2">{{ __('message.Staff Directory') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
