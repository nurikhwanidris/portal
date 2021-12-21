@extends('spsm.layouts.main')

@section('content')

<div class="card">
    <form class="form-horizontal">
        <div class="card-body">
            <span class="badge bg-info">Bahasa Malaysia</span>
            <div class="form-group row">
                <label for="tajukMY" class="col-sm-2 col-form-label">Tajuk Halaman</label>
                <div class="col-sm-10">
                    <input type="text" name="tajuk" class="form-control" id="tajuk" placeholder="Tajuk halaman">
                </div>
            </div>
            <div class="form-group row">
                <label for="kandungan" class="col-sm-2 col-form-label">Kandungan</label>
                <div class="col-sm-10">
                    <div id="editorMY"></div>
                    <script>
                        ClassicEditor.create( document.querySelector( '#editorMY' ) ).then( editor => {
                                                            console.log( editor );
                                                        } ).catch( error => {
                                                            console.error( error );
                        } );
                    </script>
                </div>
            </div>
            <hr>
            <span class="badge bg-warning">English</span>
            <div class="form-group row">
                <label for="tajukMY" class="col-sm-2 col-form-label">Page Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Page Title">
                </div>
            </div>
            <div class="form-group row">
                <label for="content" class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10">
                    <div id="editorEN"></div>
                    <script>
                        ClassicEditor.create( document.querySelector( '#editorEN' ) ).then( editor => {
                                                                        console.log( editor );
                                                                    } ).catch( error => {
                                                                        console.error( error );
                                    } );
                    </script>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Tambah</button>
            <button type="reset" class="btn btn-danger float-right">Reset</button>
        </div>
    </form>
</div>

@endsection