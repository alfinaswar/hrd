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

                      <div class="row gy-4">
                        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="col-sm-6">
       <form action="{{ route('kontrak.update', $kontrak->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="form-label" for="NamaPerusahaan">Nama Perusahaan</label>
                <input type="text" name="NamaPerusahaan" class="form-control" id="NamaPerusahaan" value="{{ $kontrak->NamaPerusahaan }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="AlamatPerusahaan">Alamat Perusahaan</label>
                <input type="text" name="AlamatPerusahaan" class="form-control" id="AlamatPerusahaan" value="{{ $kontrak->AlamatPerusahaan }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="Npwp">NPWP (Nomor Pokok Wajib Pajak)</label>
                <input type="text" name="Npwp" class="form-control" id="Npwp" value="{{ $kontrak->Npwp }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="NamaDirut">Nama Direktur Utama</label>
                <input type="text" name="NamaDirut" class="form-control" id="NamaDirut" value="{{ $kontrak->NamaDirut }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="MasaKontrak">Masa Kontrak</label>
                <input type="text" name="MasaKontrak" class="form-control" id="MasaKontrak" value="{{ $kontrak->MasaKontrak }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="JumlahKaryawan">Jumlah Karyawan</label>
                <input type="text" name="JumlahKaryawan" class="form-control" id="JumlahKaryawan" value="{{ $kontrak->JumlahKaryawan }}">
            </div>
    </div>
</div>


                                                </div>
<br>
                                                             <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
                                                            </div>
                                                            </form>
<div class="card-inner">
     <table class="datatable-init table" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Alamat Perusahaan</th>
                                        <th>Npwp</th>
                                        <th>Nama Dirut</th>
                                        <th>Masa Kontrak</th>
                                        <th>Jumlah Karyawan</th>

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
                                        <td>{{$item->Npwp}}</td>
                                        <td>{{$item->NamaDirut}}</td>
                                        <td>{{$item->MasaKontrak}}</td>
                                        <td>{{$item->JumlahKaryawan}}</td>
                                        <td><a href="{{ route('kontrak.destroy', $item->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();" class="btn btn-danger">Hapus</a>
                                        <form id="delete-form-{{ $kontrak->id }}" action="{{ route('kontrak.destroy', $kontrak->id) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
                                            <a href="{{ route('kontrak.edit', $item->id) }}" class="btn btn-primary">Edit</a></td>
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
