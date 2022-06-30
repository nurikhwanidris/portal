@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <form action="/spsm/admin/transaksi/{{ $transaksi->id }}" method="post">
                        <div class="row">
                            @csrf
                            @method('put')
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tajuk
                                        Transaksi</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        <input type="text" name="title_my" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('title_my', $transaksi->title_my) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Transaction
                                        Title</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        <input type="text" name="title_en" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('title_en', $transaksi->title_en) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Jenis
                                        Transaksi</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <select name="product_id" id="" class="form-control form-control-sm">
                                            <option value="">Sila Pilih</option>
                                            @foreach ($products as $item)
                                                @if (old('product_id', $transaksi->product_id) == $item->id)
                                                    <option value="{{ $item->id }}" selected>{{ $item->title_my }}
                                                    </option>
                                                @else
                                                    <option value="{{ $item->id }}">{{ $item->title_my }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tahun</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="text" name="year" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('year', $transaksi->year) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Januari</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="text" name="january" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('january', $transaksi->january) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Februari</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="text" name="february" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('february', $transaksi->february) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Mac</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="text" name="march" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('march', $transaksi->march) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">April</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="text" name="april" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('april', $transaksi->april) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Mei</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="text" name="may" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('may', $transaksi->may) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Jun</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="text" name="june" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('june', $transaksi->june) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Julai</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="text" name="july" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('july', $transaksi->july) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Ogos</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="text" name="august" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('august', $transaksi->august) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for=""
                                        class="col-sm-2 col-form-label col-form-label-sm">September</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="text" name="september" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('september', $transaksi->september) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for=""
                                        class="col-sm-2 col-form-label col-form-label-sm">Oktober</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="text" name="october" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('october', $transaksi->october) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for=""
                                        class="col-sm-2 col-form-label col-form-label-sm">November</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="text" name="november" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('november', $transaksi->november) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for=""
                                        class="col-sm-2 col-form-label col-form-label-sm">Disember</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="text" name="december" id=""
                                            class="form-control form-control-sm"
                                            value="{{ old('december', $transaksi->december) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tahun</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <select name="status_id" id="" class="form-control form-control-sm">
                                            <option value="">Sila Pilih</option>
                                            @foreach ($statuses as $item)
                                                @if (old('status_id', $transaksi->status_id) == $item->id)
                                                    <option value="{{ $item->id }}" selected>{{ $item->status }}
                                                    </option>
                                                @else
                                                    <option value="{{ $item->id }}">{{ $item->status }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                        <button type="reset" class="btn btn-danger btn-sm float-right">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
