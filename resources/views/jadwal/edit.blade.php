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
    <div class="col-sm-6">
        <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="form-label" for="Tanggal">Tanggal</label>
                <input type="date" name="Tanggal" class="form-control" id="Tanggal" value="{{ $jadwal->Tanggal }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="NamaPerusahaan">Nama Perusahaan</label>
                <input type="text" name="NamaPerusahaan" class="form-control" id="NamaPerusahaan" value="{{ $jadwal->NamaPerusahaan }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="AlamatPerusahaan">Alamat Perusahaan</label>
                <input type="text" name="AlamatPerusahaan" class="form-control" id="AlamatPerusahaan" value="{{ $jadwal->AlamatPerusahaan }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="NamaKaryawan">Nama Karyawan</label>
                <input type="text" name="NamaKaryawan" class="form-control" id="NamaKaryawan" value="{{ $jadwal->NamaKaryawan }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="JumlahRuangan">Jumlah Ruangan</label>
                <input type="number" name="JumlahRuangan" class="form-control" id="JumlahRuangan" value="{{ $jadwal->JumlahRuangan }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="Keterangan">Keterangan</label>
                <textarea name="Keterangan" class="form-control" id="Keterangan" rows="3">{{ $jadwal->Keterangan }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<div class="card-inner">
     <table class="datatable-init table" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Alamat Perusahaan</th>
                                        <th>Nam Karyawan</th>
                                        <th>Jumlah Ruangan</th>
                                        <th>Keterangan</th>

                                        <th width="280px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data2 as $key => $item)
                                       <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$item->Tanggal}}</td>
                                        <td>{{$item->NamaPerusahaan}}</td>
                                        <td>{{$item->AlamatPerusahaan}}</td>
                                        <td>{{$item->NamaKaryawan}}</td>
                                        <td>{{$item->JumlahRuangan}}</td>
                                        <td>{{$item->Keterangan}}</td>

                                        <td><a href="{{ route('jadwal.destroy', $item->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();" class="btn btn-danger">Hapus</a>
                                        <form id="delete-form-{{ $item->id }}" action="{{ route('jadwal.destroy', $item->id) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
                                            <a href="{{ route('jadwal.edit', $item->id) }}" class="btn btn-primary">Edit</a></td>
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
