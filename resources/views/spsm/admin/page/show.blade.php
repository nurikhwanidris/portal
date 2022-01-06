@extends('spsm.layouts.main');

@section('content')
<div class="card">
    <div class="card-header">
        {{ $title }}
    </div>
    <div class="card-body">
        {!! $body !!}
    </div>
    <div class="card-footer">
        {{ $lastModified }}
    </div>
</div>
@endsection