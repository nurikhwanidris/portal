<div>
    @if (count($pengumuman) > 0)
        <hr>
        <h3>Pengumuman</h3>
        <ul class="simple-post-list m-0">
            @foreach ($pengumuman as $item)
                <li>
                    <div class="post-info">
                        <a href="/carian/papar/pengumuman/{{ $item->id }}">{{ $item->title_my }}</a>
                        <div class="post-meta">
                            @if ($item->type == 'post')
                                <span class="text-dark text-uppercase font-weight-semibold">Post</span>
                            @else
                                <span class="text-dark text-uppercase font-weight-semibold">Page</span>
                            @endif
                            |
                            {{ $item->created_at->diffForHumans() }}
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        {!! $pengumuman->appends(request()->query())->links() !!}
    @endif
</div>
