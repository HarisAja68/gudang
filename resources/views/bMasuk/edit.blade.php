@extends('master')
@section('title')
    Edit Barang Masuk
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
            </div>
            <form action="{{ route("bMasuk.update", $masuk->id_barangMasuk) }}" method="post">
                @csrf
                @method("PUT")
                <div class="card-body">
                    <div class="form-group">
                        <label>Kode</label>
                        <input name="kode" class="form-control" value="{{ $masuk->kode }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama" class="form-control" value="{{ $masuk->nama }}" >
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input name="jumlah" class="form-control" value="{{ $masuk->jumlah }}" >
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input name="tanggal" class="form-control" value="{{ $masuk->tanggal }}" >
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        <a href="{{ route('bMasuk.index') }}" class="btn btn-danger"><i class="fas fa-arrow-circle-left"></i> kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
