<div>
    @if (!empty($pengumuman))
        <hr>
        <h3>{{ __('message.Announcement') }}</h3>
        <ul class="simple-post-list m-0">
            @foreach ($pengumuman as $item)
                <li>
                    <div class="post-info">
                        <a
                            href="{{ route('carian-pengumuman', ['id' => $item['id'], app()->getLocale()]) }}">{{ $item['tajuk'] }}</a>
                        <div class="post-meta">
                            <span
                                class="text-dark text-uppercase font-weight-semibold">{{ __('message.Announcement') }}</span>
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
