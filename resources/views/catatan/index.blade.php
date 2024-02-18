@extends('layouts.app')
@push('title')
Master kontrak
@endpush
@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                               <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <ul class="preview-list ">
                                                    <li class="preview-item">
                                                        <a href="" class="btn btn-warning" >Kembali</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card">
                                                            <div class="card-header border-bottom" style="background-color:white ">Tambah Data kontrak</div>
                                                            <div class="card-body">
                                                                                                                <div class="preview-block">

                                                                                                                    @if(session('success'))
                                                                                                <div class="alert alert-success">
                                                                                                    {{ session('success') }}
                                                                                                </div>
                                                                                            @endif
                      <div class="row gy-4">
    <div class="col-sm-12">
       <form action="{{ route('catatan.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" id="tanggal">
    </div>
    <div class="form-group">
        <label for="nama_mitra">Nama Mitra</label>
        <input type="text" name="nama_mitra" class="form-control" id="nama_mitra">
    </div>
    <div class="form-group">
        <label for="nama_karyawan">Nama Karyawan</label>
        <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan">
    </div>
    <div class="form-group">
        <label for="jumlah_ruangan">Jumlah Ruangan</label>
        <input type="number" name="jumlah_ruangan" class="form-control" id="jumlah_ruangan">
    </div>
    <div class="form-group">
        <label for="peralatan">Peralatan</label>
        <input type="text" name="peralatan" class="form-control" id="peralatan">
    </div>
    <div class="form-group">
        <label for="bahan">Bahan</label>
        <input type="text" name="bahan" class="form-control" id="bahan">
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea name="keterangan" class="form-control" id="keterangan" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

    </div>
</div>

<div class="card-inner">
     <table class="datatable-init table" id="table1">
    <thead>
        <tr>
            <th>#</th>
            <th>Tanggal</th>
            <th>Nama Mitra</th>
            <th>Nama Karyawan</th>
            <th>Jumlah Ruangan</th>
            <th>Keterangan</th>
            <th width="280px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data2 as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->nama_mitra }}</td>
                <td>{{ $item->nama_karyawan }}</td>
                <td>{{ $item->jumlah_ruangan }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>
                    <a href="{{ route('catatan.destroy', $item->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();" class="btn btn-danger">Hapus</a>
                    <form id="delete-form-{{ $item->id }}" action="{{ route('catatan.destroy', $item->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                    <a href="{{ route('catatan.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>
                                                        </div>

                            </div>
                        </div>
                    </div>
                </div>
@endsection
