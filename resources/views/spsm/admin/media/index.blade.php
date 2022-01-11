@extends('spsm.layouts.main')

@section('content')

{{-- Alert --}}
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ session('success') }}
</div>
@endif

{{-- Content --}}
<div class="card">
    <div class="card-body">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-md-6">
                    <form class="form-inline" method="POST" action="/spsm/admin/media/upload"
                        enctype="multipart/form-data">
                        @csrf
                        <label for="mediaUpload" class="m-2">Muatnaik media</label>
                        <input type="file" class="form-control m-2 @error('mediaUpload') is-invalid @enderror"
                            id="mediaUpload" name="mediaUpload" accept="image/png, image/gif, image/jpeg">
                        @error('mediaUpload')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <button type="submit" class="btn btn-sm btn-primary m-2">Submit</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class=" row">
                <div class="col-md-12">
                    <div class="row my-2">
                        @foreach ($images as $image)
                        <a href="#" class="col-md-1 text-center">
                            <img class="m-1" src="{{ $image->path }}" alt="" style="height:auto%; width:80%;"
                                class="mx-auto d-block">
                        </a>
                        {{-- <span>{{ $image->filename }}</span> --}}
                        @endforeach
                    </div>
                    <div class="row my-2">
                        <div class="col-md-6">
                            <div class="float-left">
                                {{ $images->links() }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <span class="text-muted float-right">Memaparkan <b>{{ $images->total() }}</b>
                                media</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection