@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold text-primary">
        Data Servis Kendaraan
    </h2>

    <p class="text-muted">
        Sistem Informasi E-Bengkel
    </p>
</div>
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
        <th>Aksi</th>
    </tr>

    @foreach($kendaraans as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->plat_nomor }}</td>
        <td>{{ $item->nama_pemilik }}</td>
        <td>{{ $item->merk_kendaraan }}</td>
        <td>{{ $item->keluhan }}</td>
        <td>
    <a href="/kendaraan/{{ $item->id }}/edit"
        class="btn btn-warning btn-sm">
        Edit
    </a>

    <form action="/kendaraan/{{ $item->id }}"
        method="POST"
        style="display:inline;">

        @csrf
        @method('DELETE')

        <button class="btn btn-danger btn-sm">
            Hapus
        </button>
    </form>
</td>
    </tr>
    @endforeach

</table>

@endsection