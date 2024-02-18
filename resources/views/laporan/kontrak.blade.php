          <center><h2>Laporan Kontrak</h2></center>
     <style>
    .datatable-init {
        border-collapse: collapse;
        width: 100%;
    }

    .datatable-init th, .datatable-init td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .datatable-init th {
        background-color: #f2f2f2;
    }
</style>
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

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
