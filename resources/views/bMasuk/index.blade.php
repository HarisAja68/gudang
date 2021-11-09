@extends('master')
@section('title')
    Barang Masuk
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Table Barang Masuk</h6>
                        <a href="{{ route('bMasuk.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-borderd table-striped">
                        <thead>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Tanggal Masuk</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->kode }}</td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->jumlah }}</td>
                                    <td>{{ $value->tanggal }}</td>
                                    <td>
                                        <a href="#" style="margin-bottom: 10px" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="#" style="margin-bottom: 10px" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
