@extends('layouts.app')

@section('title')
Tambah data |NutriTrack Admin
@endsection

@section('content')
<h3>Input Data Food</h3>
<div class="form-login">
  <form action="{{ url('/Nutrient/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    <label for="nama_pengguna">Nama Pengguna</label>
    <input class="input" type="text" name="nama_pengguna" id="nama_pengguna" placeholder="nama pengguna" value="{{ old('nama_pengguna') }}" />
    @error('nama_pengguna')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="nama_makanan">Nama Makanan</label>
    <input class="input" type="text" name="nama_makanan" id="nama_makanan" placeholder="nama makanan" value="{{ old('nama_makanan') }}" />
    @error('nama_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="calories">calories</label>
    <input class="input" type="text" name="calories" id="calories" placeholder="calories" value="{{ old('calories') }}" />
    @error('calories')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="protein">Protein</label>
    <input class="input" type="text" name="protein" id="protein" placeholder="protein" value="{{ old('protein') }}" />
    @error('protein')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="carbs">carbs</label>
    <input class="input" type="text" name="carbs" id="carbs" placeholder="carbs" value="{{ old('carbs') }}" />
    @error('carbs')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="fat">Fat</label>
    <input class="input" type="text" name="fat" id="fat" placeholder="fat" value="{{ old('fat') }}" />
    @error('fat')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="fiber">Fiber</label>
    <input class="input" type="text" name="fiber" id="fiber" placeholder="fiber" value="{{ old('fiber') }}" />
    @error('fat')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <!-- <label for="photo">Photo</label>
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror -->

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection
