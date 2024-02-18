     <center><h2>Laporan Catatan</h2></center>
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
            <th>Nama Mitra</th>
            <th>Nama Karyawan</th>
            <th>Jumlah Ruangan</th>
            <th>Keterangan</th>
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

            </tr>
        @endforeach
    </tbody>
</table>
