@extends('spsm.layouts.main')

@section('content')
{{-- Alert --}}
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ session('success') }}
</div>
@endif

<div class="card">
    <div class="card-body">
        <div class="border d-flex aligns-items-center justify-content-center">
            <form class="form-inline" method="POST" action="/spsm/admin/media" enctype="multipart/form-data">
                @csrf
                <img class="imgPreview img-fluid mb-3 col-sm-5 rounded">
                <input type="file" id="mediaUpload" class="form-control m-2 @error('mediaUpload') is-invalid @enderror"
                    id="mediaUpload" name="mediaUpload" onchange="previewImage()">
                @error('mediaUpload')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <button type="submit" class="btn btn-sm btn-primary m-2">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Image Preview
    function previewImage() {
    const image = document.querySelector('#mediaUpload');
    const imgPreview = document.querySelector('.imgPreview');
    
    imgPreview.style.display = 'block';
    
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    
    oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
    }
    }
</script>

@endsection