<div>
    @if (app()->getLocale() == 'ms')
        {!! $perutusan->content_my !!}
    @else
        {!! $perutusan->content_en !!}
    @endif
</div>
