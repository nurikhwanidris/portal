<div>
    <div class="col-lg-12">
        <!-- FILTERING - START -->
        <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
            <div class="row">
                <div>
                    {{ __('message.choose_state') }}
                    <select id="strukturNegeri" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="johor">JUPEM Johor</option>
                        <option value="kedah">JUPEM Kedah</option>
                        <option value="kelantan">JUPEM Kelantan</option>
                        <option value="melaka">JUPEM Melaka</option>
                        <option value="wpkl">JUPEM W.P. Kuala Lumpur & Putrajaya</option>
                        <option value="negeri-sembilan">JUPEM Negeri Sembilan</option>
                        <option value="pahang">JUPEM Pahang</option>
                        <option value="perak">JUPEM Perak</option>
                        <option value="perlis">JUPEM Perlis</option>
                        <option value="penang">JUPEM Pulau Pinang</option>
                        <option value="selangor">JUPEM Selangor</option>
                        <option value="terengganu">JUPEM Terengganu</option>
                        <option value="labuan">JUPEM W.P Labuan</option>
                        <option value="sarawak">Topografi Sarawak</option>
                        <option value="sabah">Topografi Sabah</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- FILTERING - END -->
        <div class="toggle toggle-primary toggle-simple" data-plugin-toggle>
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="johor">
                <!-- JUPEM Johor -->
                <section class="toggle">
                    <div class="text-center text-title-semasa-11">JUPEM Johor</div>
                    <!-- Sejarah Penubuhan - START -->
                    <div class="container pt-4">
                        {!! $johor->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM Kedah -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="kedah">
                <section class="toggle">

                    <div class="text-center text-title-semasa-11">JUPEM Kedah</div>
                    <div class="container pt-4">
                        {!! $kedah->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM Penang -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="penang">
                <section class="toggle">

                    <div class="text-center text-title-semasa-11">JUPEM Pulau Pinang</div>
                    <div class="container pt-4">
                        {!! $penang->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM Kelantan -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="kelantan">
                <section class="toggle">
                    <div class="text-center text-title-semasa-11">JUPEM Kelantan</div>
                    <div class="container pt-4">
                        {!! $kelantan->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM Melaka -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="melaka">
                <section class="toggle">
                    <div class="text-center text-title-semasa-11">JUPEM Melaka</div>
                    <div class="container pt-4">
                        {!! $melaka->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM Negeri Sembilan -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;"
                id="negeri-sembilan">
                <section class="toggle">
                    <div class="text-center text-title-semasa-11">JUPEM Negeri Sembilan</div>
                    <div class="container pt-4">
                        {!! $n9->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM Pahang -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="pahang">
                <section class="toggle">
                    <div class="text-center text-title-semasa-11">JUPEM Pahang</div>
                    <div class="container pt-4">
                        {!! $pahang->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM Perak -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="perak">
                <section class="toggle">
                    <div class="text-center text-title-semasa-11">JUPEM Perak</div>
                    <div class="container pt-4">
                        {!! $perak->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM Perlis -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="perlis">
                <section class="toggle">
                    <div class="text-center text-title-semasa-11">JUPEM Perlis</div>
                    <div class="container pt-4">
                        {!! $perlis->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM Selangor -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="selangor">
                <section class="toggle">
                    <div class="text-center text-title-semasa-11">JUPEM Selangor</div>
                    <div class="container pt-4">
                        {!! $selangor->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM Terengganu -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="terengganu">
                <section class="toggle">
                    <div class="text-center text-title-semasa-11">JUPEM Terengganu</div>
                    <div class="container pt-4">
                        {!! $terengganu->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM JUPEM W.P. Kuala Lumpur & Putrajaya -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="wpkl">
                <section class="toggle">
                    <div class="text-center text-title-semasa-11">JUPEM W.P. Kuala Lumpur & Putrajaya</div>
                    <div class="container pt-4">
                        {!! $kl->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM W.P. Labuan -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="labuan">
                <section class="toggle">
                    <div class="text-center text-title-semasa-11">JUPEM W.P. Labuan</div>
                    <div class="container pt-4">
                        {!! $labuan->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM Sabah -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="sabah">
                <section class="toggle">
                    <div class="text-center text-title-semasa-11">JUPEM Sabah</div>
                    <div class="container pt-4">
                        {!! $sabah->contents_my !!}
                    </div>
                </section>
            </div>
            <!-- JUPEM Sarawak -->
            <div class="row align-items-center show-hide" style="padding-top: 30px; display: none;" id="sarawak">
                <section class="toggle">
                    <div class="text-center text-title-semasa-11">JUPEM Sarawak</div>
                    <div class="container pt-4">
                        {!! $sarawak->contents_my !!}
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
