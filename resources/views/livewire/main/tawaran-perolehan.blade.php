<div>
    <div class="parent">
        <div class="row"><text class="text-head-space">Tender</text></div>
        @if ($tenders->count() > 0)
            @foreach ($tenders as $tender)
                <div class="row">
                    <text class="info-semasa-paragraph overflow-tajuk">
                        <a href="/perolehan/{{ $tender->id }}}">{{ $tender->title_my }}</a>
                    </text>
                </div>
            @endforeach
        @else
            <div class="row">
                <text class="info-semasa-paragraph overflow-tajuk">
                    Tiada tender buat masa ini
                </text>
            </div>
        @endif
        <div class="row" style="padding-top: 24px;">
            <text class="text-head-space">Sebutharga</text>
        </div>
        @if ($quotes->count() > 0)
            @foreach ($quotes as $quote)
                <div class="row">
                    <text class="info-semasa-paragraph overflow-tajuk">
                        <a href="/perolehan/{{ $quote->id }}">{{ $quote->title_my }}</a>
                    </text>
                </div>
            @endforeach
        @else
            <div class="row">
                <text class="info-semasa-paragraph">
                    Tiada sebutharga buat masa ini
                </text>
            </div>
        @endif
        <div class="row child">
            <a href="/perolehan" class="read-more text-color-dark font-weight-bold text-2">
                MAKLUMAT TERPERINCI
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
</div>
