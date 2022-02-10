@extends('spsm.layouts.main')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th class="align-middle">#</th>
                            <th class="align-middle">Tajuk Pengumuman</th>
                            <th class="align-middle text-center">Status</th>
                            <th class="align-middle text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">Majulah sukan utk negara</td>
                            <td class="align-middle text-center">
                                <span class="badge badge-success">Published</span>
                            </td>
                            <td class="align-middle text-center">
                                <a href="#">
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