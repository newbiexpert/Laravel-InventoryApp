@extends('layouts.main')
@section('custom-head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
@endsection
@section('container')
    <div class="row">
        <div class="col-md-10 offset-md-1 mt-5 bg-white pt-2 rounded">
            <a href="{{ url('/recap/create') }}" class="btn btn-success float-right mb-3">
                <i class="fas fa-plus-circle"></i>
                Tambahkan
            </a>
        </div>
        <div class="col-md-10 offset-md-1 bg-white p-5 rounded">
            <table id="myTable" class="table table-stripped text-grey" width="100%">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Barang</th>
                    <th>Tanggal Rekap</th>
                    <th>Stok Awal</th>
                    <th>Stok Akhir</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

    </div>
@endsection
@section('custom-script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
    <script>
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            "scrollX": true,
            responsive: true,
            ajax: '{{ route('recap.data') }}',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'kode_barang', name: 'kode_barang'},
                {data: 'tanggal_rekap', name: 'tanggal_rekap'},
                {data: 'stok_awal_rekap', name: 'stok_awal_rekap'},
                {data: 'stok_akhir_rekap', name: 'stok_akhir_rekap'},
                {data: 'kode_status_rekap', name: 'kode_status_rekap'},
                {data: 'action', name: 'action'},
            ]
        });
    </script>
@endsection
