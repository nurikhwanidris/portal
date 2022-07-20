<div>
    @if (app()->getLocale() == 'en')
        {!! $page->content_en !!}
    @else
        {!! $page->content_my !!}
    @endif
</div>
