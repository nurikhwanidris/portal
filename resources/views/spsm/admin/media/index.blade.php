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
                    <form class="form" method="POST" action="/spsm/admin/media/upload" enctype="multipart/form-data">
                        @csrf
                        <label for="mediaUpload" class="m-2">Muatnaik media</label>
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="file" class="form-control m-2 @error('mediaUpload') is-invalid @enderror"
                                    id="mediaUpload" name="mediaUpload" accept="image/png, image/gif, image/jpeg">
                                @error('mediaUpload')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-md btn-primary m-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="row my-2">
                        @foreach ($images as $image)
                        <a href="#" id="viewMedia" class="col-md-1 text-center" data-toggle="modal"
                            data-target="#mediaLibrary" data-id="{{ $image->id }}"
                            data-filename="{{ $image->filename }}" data-created="{{ $image->created_at }}"
                            data-createdby="{{ $image->user->name }}" data-path="{{ $image->path }}">
                            <img class="my-3 mx-auto" src="{{ $image->path }}" alt=""
                                style="max-height:90px; width:80%;" class="mx-auto d-block">
                        </a>
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

<!-- Modal -->
<form action="" id="deleteForm" method="post">
    <div class="modal fade" id="mediaLibrary" tabindex="-1" role="dialog" aria-labelledby="mediaLibraryTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <img id="image" src="/storage/upload/img/Hebahan-Meja-Bantuan-JUPEM-1641912266.png"
                                    alt="" style="height:auto" width="100%">
                            </div>
                            <div class="col-md-6">
                                <div class="row d-none">
                                    <label for="" class="col-form-label col-form-label-md">ID</label>
                                    <input type="text" name="mediaId" id="mediaId" class="form-control form-control-md"
                                        readonly>
                                </div>
                                <div class="row">
                                    <label for="" class="col-form-label col-form-label-sm">Filename</label>
                                    <input type="text" name="filename" id="filename"
                                        class="form-control form-control-sm" readonly>
                                </div>
                                <div class="row">
                                    <label for="" class="col-form-label col-form-label-sm">Path</label>
                                    <input type="text" name="path" id="path" class="form-control form-control-sm"
                                        readonly>
                                </div>
                                <div class="row">
                                    <label for="" class="col-form-label col-form-label-sm">Created by</label>
                                    <input type="text" name="createdby" id="createdby"
                                        class="form-control form-control-sm" readonly>
                                </div>
                                <div class="row">
                                    <label for="" class="col-form-label col-form-label-sm">Created at</label>
                                    <input type="text" name="created" id="created" class="form-control form-control-sm"
                                        readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger float-left" id="deleteMedia"><i class="fas fa-trash"></i></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    // View on click media
    $(document).on('click','#viewMedia', function () {
        var mediaId = $(this).data("mediaId");
        var filename = $(this).data("filename");
        var path = $(this).data("path");
        var createdby = $(this).data("createdby");
        var created = $(this).data("created");

        // Display inside the inputs
        $("#mediaId").val(mediaId);
        $("#filename").val(filename);
        $("#path").val(path);
        $("#createdby").val(createdby);
        $("#created").val(created);
        $("#image").attr('src',path);
    });

    $(document).on('click','#deleteMedia', function () {
        var mediaId = $(this).data('mediaId');
        $("#deleteForm").action = "/spsm/admin/media/delete/" + mediaId;
    });
</script>
@endsection