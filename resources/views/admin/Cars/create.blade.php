@extends('layouts.admin')
@section('content')
<div class="car">
    <div class="card-header">
        Tambah Data
    </div>
    <div class="card-body">
        <form action="{{ route('cars.store')}}" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama_mobil">Nama Mobil</label>
                <input type="text" name="nama_mobil" class="form-control" value="{{old('nama_mobil')}}">
            </div>
            <div class="form-group">
                <label for="harga_sewa">Harga Sewa</label>
                <input type="number" name="harga_sewa" class="form-control" value="{{old('harga_sewa')}}">
            </div>
            <div class="form-group">
                <label for="bahan_bakar">Bahan Bakar</label>
                <!-- <input type="text" name="bahan_bakar" class="form-control" value="{/{old('bahan_bakar')}}"> -->
                <select name="bahan_bakar" id="bahan_bakar" class="form-control" value="{{old('bahan_bakar')}}">
                    <option value="pertalite">Pertalite</option>
                    <option value="pertamax">Pertamax</option>
                    <option value="pertamax turbo">Pertamax Turbo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_kursi">Jumlah Kursi</label>
                <input type="text" name="jumlah_kursi" class="form-control" value="{{old('jumlah_kursi')}}">
            </div>
            <div class="form-group">
                <label for="transmisi">Transmisi</label>
                <select name="transmisi" id="transmisi" class="form-control" value="{{old('transmisi')}}">
                    <option value="manual">Manual</option>
                    <option value="matic">Automatic</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <!-- <input type="text" name="status" class="form-control" value="{/{old('status')}}"> -->
                <select name="status" id="status" class="form-control" value="{{old('status')}}">
                    <option value="tersedia">Tersedia</option>
                    <option value="tidak tersedia">Tidak Tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea type="text" name="deskripsi" id="deskripsi"  class="form-control" value="{{old('deskripsi')}}"></textarea>
            </div>
            <div class="form-group">
                <label for="p3k">p3k</label>
                <input type="text" name="p3k" class="form-control" value="{{old('p3k')}}">
            </div>
            <div class="form-group">
                <label for="charger">Charger</label>
                <input type="text" name="charger" class="form-control" value="{{old('charger')}}">
            </div>
            <div class="form-group">
                <label for="audio">Audio</label>
                <input type="text" name="audio" class="form-control" value="{{old('audio')}}">
            </div>
            <div class="form-group">
                <label for="ac">AC</label>
                <input type="text" name="ac" class="form-control" value="{{old('ac')}}">
            </div>
        </form>
    </div>
</div>
@endsection