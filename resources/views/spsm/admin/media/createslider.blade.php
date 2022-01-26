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
            <div class="row">
                <div class="col-sm-6">
                    <form action="/spsm/admin/slider/save" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Gambar</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="file" name="sliderImage" id="image"
                                    class="form-control form-control-sm @error('sliderImage') is-invalid @enderror"
                                    accept="image/png, image/jpeg, image/jpg" onchange="previewImage()">
                                @error('sliderImage')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label-sm">Pautan</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" name="link" id="" class="form-control form-control-sm"
                                    placeholder="https://www.google.com" value="{{ old('link') }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Tarikh Mula Paparan</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="datetime-local" name="show" id="" class="form-control form-control-sm"
                                    value="{{ old('show') }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Tarikh Akhir Paparan</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="datetime-local" name="hide" id=""
                                    class="form-control form-control-sm @error('hide') is-invalid @enderror"
                                    value="{{ old('hide') }}">
                                @error('hide')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Status</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <select name="status" id=""
                                    class="form-control form-control-sm @error('status') is-invalid @enderror">
                                    <option value="">Sila Pilih</option>
                                    @foreach ($statuses as $status)
                                    @if (old('status') == $status->id)
                                    <option value="{{ $status->id }}" selected>{{ $status->status }}</option>
                                    @else
                                    <option value="{{ $status->id }}">{{ $status->status }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Susunan</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <select name="susunan" id=""
                                    class="form-control form-control-sm @error('susunan') is-invalid @enderror">
                                    <option value="">Sila Pilih</option>
                                    <option value="1" @if (old('susunan')==1) selected @endif>1</option>
                                    <option value="2" @if (old('susunan')==2) selected @endif>2</option>
                                    <option value="3" @if (old('susunan')==3) selected @endif>3</option>
                                    <option value="4" @if (old('susunan')==4) selected @endif>4</option>
                                    <option value="5" @if (old('susunan')==5) selected @endif>5</option>
                                    <option value="6" @if (old('susunan')==6) selected @endif>6</option>
                                    <option value="7" @if (old('susunan')==7) selected @endif>7</option>
                                    <option value="8" @if (old('susunan')==8) selected @endif>8</option>
                                    <option value="9" @if (old('susunan')==9) selected @endif>9</option>
                                    <option value="10" @if (old('susunan')==10) selected @endif>10</option>
                                </select>
                                @error('susunan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6 ">
                    <div class="row mb-3 ">
                        <div class="col-sm-12">
                            <span class="float-right">Slider Preview</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <img class="img-preview img-fluid mb-3 float-right" style="width: auto; height: 150px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Slider Preview
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>
@endsection