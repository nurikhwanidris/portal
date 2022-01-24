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
                                <input type="file" name="sliderImage" id="image" class="form-control form-control-sm"
                                    accept="image/png, image/jpeg, image/jpg" onchange="previewImage()">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label-sm">Pautan</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="text" name="linkSlider" id="" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Tarikh Mula Paparan</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="datetime-local" name="tarikhMulaPapar" id=""
                                    class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Tarikh Akhir Paparan</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <input type="datetime-local" name="tarikhAkhirPaparan" id=""
                                    class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Status</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <select name="status" id="" class="form-control form-control-sm">
                                    <option value="">Sila Pilih</option>
                                    @foreach ($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Sususan</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-8">
                                <select name="sususan" id="" class="form-control form-control-sm">
                                    <option value="">Sila Pilih</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
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