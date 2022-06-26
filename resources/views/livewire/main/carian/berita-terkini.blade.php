<div>
    @if (!empty($beritaTerkini))
        <hr>
        <h3>{{ __('message.current_news') }}</h3>
        <ul class="simple-post-list m-0">
            @foreach ($beritaTerkini as $item)
                <li>
                    <div class="post-info">
                        <a
                            href="{{ route('carian-berita-terkini', [app()->getLocale(), 'id' => $item['id']]) }}">{{ $item['tajuk'] }}</a>
                        <div class="post-meta">
                           <span class="text-dark text-uppercase font-weight-semibold">{{ __('message.current_news') }}</span>
                            |
                            {{ $item['created_at']->diffForHumans() }}
                            <p>
                                {!! $item['content_my'] !!}
                            </p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        {!! $data->appends(request()->query())->links() !!}
    @endif
</div>
