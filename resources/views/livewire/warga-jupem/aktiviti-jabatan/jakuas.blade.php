<div>
    <div class="row pb-4">
        <div class="toggle toggle-primary toggle-simple" data-plugin-toggle>
            <!-- 1 -->
            <section class="toggle">
                <span class="toggle-title text-4">
                    <div class="accordion-jupem-negeri">Objektif JAKUAS</div>
                </span>
                <div class="toggle-content margin-content-2">
                    {!! $objective->content_my !!}
                </div>
            </section>
            <!-- 2 -->
            <section class="toggle">
                <span class="toggle-title text-4">
                    <div class="accordion-jupem-negeri">Keanggotaan JAKUAS</div>
                </span>
                <div class="toggle-content margin-content-2">
                    {!! $members->content_my !!}
                </div>
            </section>
            <!-- 3 -->
            <section class="toggle">
                <span class="toggle-title text-4">
                    <div class="accordion-jupem-negeri">Kategori Pengoperasian UAS Yang Tertakluk Dalam Penyelarasan JAKUAS</div>
                </span>
                <div class="toggle-content margin-content-2">
                    {!! $categories->content_my !!}
                </div>
            </section>
            <!-- 4 -->
            <section class="toggle">
                <span class="toggle-title text-4">
                    <div class="accordion-jupem-negeri">Terma Rujukan</div>
                </span>
                <div class="toggle-content margin-content-2">
                    {!! $terms->content_my !!}
                </div>
            </section>
            <!-- 4 -->
            <section class="toggle">
                <span class="toggle-title text-4">
                    <div class="accordion-jupem-negeri">Carta Alir JAKUAS</div>
                </span>
                <div class="toggle-content margin-content-2">
                    {!! $flowChart->content_my !!}
                </div>
            </section>
        </div>
    </div>
</div>
