<div>
    <div class="parent">
        <div class="row"><text class="text-head-space">{{ __('message.Tender') }}</text></div>
        @if ($tenders->count() > 0)
            @foreach ($tenders as $tender)
                <div class="row">
                    <text class="info-semasa-paragraph overflow-tajuk">
                        <a
                            href="{{ route('tender-read', [app()->getLocale(), 'id' => $tender->id]) }}">{{ $tender->title_my }}</a>
                    </text>
                </div>
            @endforeach
        @else
            <div class="row">
                <text class="info-semasa-paragraph overflow-tajuk">
                    {{ __('message.no_tender') }}
                </text>
            </div>
        @endif
        <div class="row" style="padding-top: 24px;">
            <text class="text-head-space">{{ __('message.sebut_harga') }}</text>
        </div>
        @if ($quotes->count() > 0)
            @foreach ($quotes as $quote)
                <div class="row">
                    <text class="info-semasa-paragraph overflow-tajuk">
                        <a
                            href="{{ route('sebut-harga-read', [app()->getLocale(), 'id' => $quote->id]) }}">{{ $quote->title_my }}</a>
                    </text>
                </div>
            @endforeach
        @else
            <div class="row">
                <text class="info-semasa-paragraph">
                    {{ __('message.no_sebut_harga') }}
                </text>
            </div>
        @endif
        <div class="row child">
            <a href="/perolehan" class="read-more text-color-dark font-weight-bold text-2">
                {{ __('message.Details') }}
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
</div>
