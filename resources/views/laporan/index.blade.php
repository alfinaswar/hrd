@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Download Laporan</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ route('laporan.kontrak') }}" class="btn btn-primary btn-block">Download Laporan kontrak</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('laporan.catatan') }}" class="btn btn-primary btn-block">Download Laporan catatan</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('laporan.jadwal') }}" class="btn btn-primary btn-block">Download Laporan jadwal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
