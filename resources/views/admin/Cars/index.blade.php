@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2>Daftar Mobil</h2>
        <!-- <a href="#" class="btn btn-primary">Tambah Mobil</a> -->
        <a href="{{ route('admin.cars.create') }}" class="btn btn-primary">Tambah Mobil</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mobil</th>
                        <th>Gambar Mobil</th>
                        <th>Harga Mobil</th>
                        <th>Status Mobil</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cars as $c)
                    <tr>
                        <td>{{ loop->iteration }}</td>
                        <td>{{ $car->nama_mobil }}</td>
                        <td>
                            <img src="{{ storage::url($c->gambar) }}" width="200" >
                        </td>
                        <td>{{ $car->harga_mobil }}</td>
                        <td>{{ $car->status_mobil }}</td>
                        <td><button class="btn-sm btn-warning">Edit</button></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">DATA KOSONG</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection