<div>
    @if (!empty($posts))
        <h3>Post</h3>
        <ul class="simple-post-list m-0">
            @foreach ($posts as $item)
                <li>
                    <div class="post-info">
                        <a
                            href="{{ route('carian-post', ['id' => $item['id'], app()->getLocale()]) }}">{{ $item['tajuk'] }}</a>
                        <div class="post-meta">
                            @if ($item['type'] == 'post')
                                <span
                                    class="text-dark text-uppercase font-weight-semibold">{{ __('message.writing') }}</span>
                            @else
                                <span
                                    class="text-dark text-uppercase font-weight-semibold">{{ __('message.page') }}</span>
                            @endif
                            | {{ $item['created_at']->diffForHumans() }}
                            <p>
                                {!! $item['contents_my'] !!}
                            </p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        {!! $data->appends(request()->query())->links() !!}
    @endif
</div>
