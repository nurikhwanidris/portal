@extends('spsm.layouts.main')

@section('content')

@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="card">
    <form method="POST" class="form-horizontal" action="/spsm/admin/page/create" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <span class="badge bg-info">Bahasa Malaysia</span>
            <div class="form-group row">
                <label for="title_my" class="col-sm-2 col-form-label">Tajuk Halaman</label>
                <div class="col-sm-10">
                    <input type="text" name="title_my" class="form-control @error('title_my') is-invalid @enderror"
                        id="title_my" placeholder="Tajuk halaman">
                    @error('title_my')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="slug_my" class="col-sm-2 col-form-label">Slug Tajuk</label>
                <div class="col-sm-10">
                    <input type="text" name="slug_my" id="slug_my"
                        class="form-control @error('slug_my') is-invalid @enderror" disabled>
                    @error('slug_my')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="content_my" class="col-sm-2 col-form-label">Kandungan</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="content_my" placeholder="Enter the Description" name="content_my"
                        rows="4"></textarea>
                </div>
            </div>
            <hr>
            <span class="badge bg-warning">English</span>
            <div class="form-group row">
                <label for="title_en" class="col-sm-2 col-form-label">Page Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror"
                        id="title_en" placeholder="Page Title">
                    @error('title_en')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="slug_en" class="col-sm-2 col-form-label">Slug Title</label>
                <div class="col-sm-10">
                    <input type="text" name="slug_en" id="slug_en"
                        class="form-control @error('title_en') is-invalid @enderror" disabled>
                    @error('slug_en')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="content_en" class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="content_en" placeholder="Enter the Description" name="content_en"
                        rows="4"></textarea>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="type" class="col-sm-2 col-form-label">Jenis</label>
                <div class="col-sm-4">
                    <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
                        <option value=""> Pilih Jenis </option>
                        <option value="page">Halaman</option>
                        <option value="post">Penulisan</option>
                    </select>
                </div>
                @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <hr>
            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-4">
                    {{-- <input type="text" name="status" class="form-control" id="status" placeholder="Status"> --}}
                    <select name="status" id="status" class="form-control">
                        <option value=""> Pilih Status </option>
                        <option value="published">Publish</option>
                        <option value="draft">Draf</option>
                        <option value="archived">Archive</option>
                    </select>
                    @error('status')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Tambah</button>
            <button type="reset" class="btn btn-danger float-right">Reset</button>
        </div>
    </form>
</div>
<script>
    // Convert title to slug
    const title_my = document.querySelector('#title_my');
    const title_en = document.querySelector('#title_en');
    const slug_my = document.querySelector('#slug_my');
    const slug_en = document.querySelector('#slug_en');

    title_my.addEventListener('change', function () {
        fetch('/spsm/admin/page/checkSlugMy?title_my='+title_my.value)
        .then(reponse => reponse.json())
        .then(data => slug_my.value = data.slug_my)
    });

    title_en.addEventListener('change', function () {
    fetch('/spsm/admin/page/checkSlugEn?title_en='+title_en.value)
    .then(reponse => reponse.json())
    .then(data => slug_en.value = data.slug_en)
    });
    
    // Editor MY
    ClassicEditor
    .create( document.querySelector( '#content_my' ) )
    .catch( error => {
    console.error( error );
    } );
    
    // Editor EN
    ClassicEditor
    .create( document.querySelector( '#content_en' ) )
    .catch( error => {
    console.error( error );
    } );
</script>
@endsection