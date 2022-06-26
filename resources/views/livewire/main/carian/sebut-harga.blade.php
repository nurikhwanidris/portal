<div>
    @if (count($sebutHarga) > 0)
        <hr>
        <h3>{{ __('message.sebut_harga') }}</h3>
        <ul class="simple-post-list m-0">
            @foreach ($sebutHarga as $item)
                <li>
                    <div class="post-info">
                        <a
                            href="{{ route('sebut-harga-read', ['id' => $item['id'], app()->getLocale()]) }}">{{ $item->title_my }}</a>
                        <div class="post-meta">
                            <span class="text-dark text-uppercase font-weight-semibold">{{ __('message.post') }}</span>
                            |
                            {{ $item->created_at->diffForHumans() }}
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        {!! $sebutHarga->appends(request()->query())->links() !!}
    @endif
</div>
