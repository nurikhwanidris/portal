<div>
    @if (!empty($posts))
        <h3>Post</h3>
        <ul class="simple-post-list m-0">
            @foreach ($posts as $item)
                <li>
                    <div class="post-info">
                        <a
                            href="/{{ app()->getLocale() }}/carian/papar/post/{{ $item['id'] }}">{{ $item['tajuk'] }}</a>
                        <div class="post-meta">
                            @if ($item['type'] == 'post')
                                <span class="text-dark text-uppercase font-weight-semibold">Post</span>
                            @else
                                <span class="text-dark text-uppercase font-weight-semibold">Page</span>
                            @endif
                            | {{ $item['created_at'] }}
                            <p>
                                <?= $item['contents_my'] ?>
                            </p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        {!! $data->appends(request()->query())->links() !!}
    @endif
</div>
