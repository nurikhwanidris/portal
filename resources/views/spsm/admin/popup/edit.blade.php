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
        <div class="col-sm-12">
            <form action="/spsm/admin/popup/{{ $popup->id }}" method="post" class="form-horizontal"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm ">Tajuk</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-9">
                                <input type="text" name="tajuk" id=""
                                    class="form-control form-control-sm @error('tajuk') is-invalid @enderror"
                                    value="{{ old('tajuk',$popup->tajuk) }}">
                            </div>
                            @error('tajuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tarikh Mula Papar</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-3">
                                <input type="datetime-local" name="show" id="" class="form-control form-control-sm"
                                    value="{{ old('show', $popup->show) }}">
                            </div>
                            @error('show')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tarikh Akhir Papar</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-3">
                                <input type="datetime-local" name="hide" id="" class="form-control form-control-sm"
                                    value="{{ old('hide', $popup->hide) }}">
                            </div>
                            @error('hide')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Status</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-3">
                                <select name="status_id" id=""
                                    class="form-control form-control-sm @error('status') is-invalid @enderror">
                                    <option value="">Sila Pilih</option>
                                    @foreach ($statuses as $status)
                                    @if (old('status', $popup->status_id) == $status->id)
                                    <option value="{{ $status->id }}" selected>{{ $status->status }}</option>
                                    @else
                                    <option value="{{ $status->id }}">{{ $status->status }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Content</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-9">
                                <textarea class="form-control @error('content') is-invalid @enderror" id="content"
                                    placeholder="Enter the Description" name="content"
                                    rows="4">{{ old('content',$popup->content) }}</textarea>
                            </div>
                            @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success btn-sm float-left">Submit</button>
                                <button type="reset" class="btn btn-danger btn-sm float-right">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    // Editor MY
    CKEDITOR.replace( 'content', {
    filebrowserUploadUrl: "{{route('pageUpload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form',
    });
</script>
@endsection