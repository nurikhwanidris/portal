<div>
    @if (app()->getLocale() == 'en')
        {!! $post->content_en !!}
    @else
        {!! $post->content_my !!}
    @endif
</div>
