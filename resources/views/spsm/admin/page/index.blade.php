@extends('spsm.layouts.main')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif
@endsection