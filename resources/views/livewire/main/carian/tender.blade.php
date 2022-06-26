<div>
    @if (count($tender) > 0)
        <hr>
        <h3>{{ __('message.Tender') }}</h3>
        <ul class="simple-post-list m-0">
            @foreach ($tender as $item)
                <li>
                    <div class="post-info">
                        <a href="{{ route('tender-read', [app()->getLocale(), 'id' => $item['id']]) }}">{{ $item->title_my }}</a>
                        <div class="post-meta">
                            <span class="text-dark text-uppercase font-weight-semibold">{{ __('message.post') }}</span>
                            |
                            {{ $item->created_at->diffForHumans() }}
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        {!! $tender->appends(request()->query())->links() !!}
    @endif
</div>
