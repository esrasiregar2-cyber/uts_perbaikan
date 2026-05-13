@extends('layouts.app')

@section('content')

<h3>Daftar Servis Kendaraan</h3>

<a href="/kendaraan/create" class="btn btn-primary mb-3">
    Tambah Kendaraan
</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Plat Nomor</th>
        <th>Nama Pemilik</th>
        <th>Merk Kendaraan</th>
        <th>Keluhan</th>
    </tr>

    @foreach($kendaraans as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->plat_nomor }}</td>
        <td>{{ $item->nama_pemilik }}</td>
        <td>{{ $item->merk_kendaraan }}</td>
        <td>{{ $item->keluhan }}</td>
    </tr>
    @endforeach

</table>

@endsection