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
        <div class="row">
            <div class="col-lg-12">
                <a href="/spsm/admin/jabatan/create" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus"></i>
                    Tambah
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th class="align-middle">Nama Jabatan / Unit</th>
                            <th class="align-middle">Department Name</th>
                            <th class="align-middle text-center">Status</th>
                            <th class="align-middle text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">
                                Pejabat Ketua Pengarah Ukur Dan Pemetaan Malaysia
                            </td>
                            <td class="align-middle">
                                Office Of The Director General Of Survey And Mapping Malaysia
                            </td>
                            <td class="align-middle text-center">
                                <span class="badge badge-success">Published</span>
                            </td>
                            <td class="align-middle text-center">
                                <a href="#" class="">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection