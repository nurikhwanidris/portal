<div>
    @if (count($post) > 0)
        <h3>Post</h3>
        <ul class="simple-post-list m-0">
            @foreach ($post as $item)
                <li>
                    <div class="post-info">
                        <a href="/carian/papar">{{ $item['title_my'] }}</a>
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
        {!! $post->appends(request()->query())->links() !!}
    @endif
</div>
