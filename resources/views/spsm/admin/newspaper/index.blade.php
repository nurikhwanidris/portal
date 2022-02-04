@extends('spsm.layouts.main')

@section('content')
{{-- Alert --}}
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ session('success') }}
</div>
@endif

{{-- Alert --}}
@if (session()->has('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ session('error') }}
</div>
@endif

<div class="card">
    <div class="card-body">
        <div class="col-lg-12">
            <table class="table table-striped table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th class="align-middle text-center">#</th>
                        <th class="align-middle">Tajuk</th>
                        <th class="align-middle">Sumber</th>
                        <th class="align-middle">Tarikh Terbitan</th>
                        <th class="align-middle text-center">Status</th>
                        <th class="align-middle text-center">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection