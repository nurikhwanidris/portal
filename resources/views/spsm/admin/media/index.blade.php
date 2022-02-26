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
                        <form class="form" method="POST" action="/spsm/admin/media/upload"
                            enctype="multipart/form-data">
                            @csrf
                            <label for="mediaUpload" class="m-2">Muatnaik media</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="file" class="form-control m-2 @error('mediaUpload') is-invalid @enderror"
                                        id="mediaUpload" name="mediaUpload" accept="image/png, image/jpg, image/jpeg">
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
                                    data-target="#mediaLibrary" data-mediaid="{{ $image->id }}"
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
                                <img id="image" src="" alt="" style="height:auto" width="100%">
                            </div>
                            <div class="col-md-6">
                                <div class="row d-none">
                                    <label for="" class="col-form-label col-form-label-sm">ID</label>
                                    <input type="text" name="mediaid" id="mediaid" class="form-control form-control-sm"
                                        readonly>
                                    <input type="hidden" name="csrf-token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="method" value="delete">
                                </div>
                                <div class="row">
                                    <label for="" class="col-form-label col-form-label-sm">Filename</label>
                                    <input type="text" name="filename" id="filename" class="form-control form-control-sm"
                                        readonly>
                                </div>
                                <div class="row">
                                    <label for="" class="col-form-label col-form-label-sm">Path</label>
                                    <input type="text" name="path" id="path" class="form-control form-control-sm" readonly>
                                </div>
                                <div class="row">
                                    <label for="" class="col-form-label col-form-label-sm">Created by</label>
                                    <input type="text" name="createdby" id="createdby" class="form-control form-control-sm"
                                        readonly>
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
                    <div class="col">
                        <button type="" class="btn btn-danger float-left deleteRecord">
                            <i class="fas fa-trash"></i>
                            Delete
                        </button>
                        <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // View on click media
        $(document).on('click', '#viewMedia', function() {
            var mediaid = $(this).data("mediaid");
            var filename = $(this).data("filename");
            var path = $(this).data("path");
            var createdby = $(this).data("createdby");
            var created = $(this).data("created");

            // Display inside the inputs
            $("#mediaid").val(mediaid);
            $("#filename").val(filename);
            $("#path").val(path);
            $("#createdby").val(createdby);
            $("#created").val(created);
            $("#image").attr('src', path);
        });

        $(".deleteRecord").click(function() {
            var id = $('#mediaid').val();
            var token = $("input[name='csrf-token']").val();
            var method = $("input[name='method']").val();
            $.ajax({
                url: "/spsm/admin/media/delete/" + id,
                type: 'delete',
                data: {
                    "id": id,
                    "method": method,
                    "_token": token,
                },
                success: function() {
                    alert("Deleted a media. Page will be refreshed in 3 seconds");
                },
            });
            setTimeout(function() {
                location.reload();
            }, 1000)
        });
    </script>
@endsection
