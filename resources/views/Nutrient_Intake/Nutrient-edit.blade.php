@extends('layouts.app')

@section('title')
Edit Nutrient| NutriTrack Admin
@endsection

@section('content')
<h3>Edit Nutrient</h3>
<div class="form-login">
  <form action="{{ url('/Nutrient/update/' . $Nutrient->id_nutrient) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <label for="nama_pengguna">Nama Pengguna</label>
    <input class="input" type="text" name="nama_pengguna" id="nama_pengguna" placeholder="nama_pengguna"
      value="{{ old('nama_pengguna', $Nutrient->nama_pengguna) }}" />
    @error('nama_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror
    <label for="nama_makanan">Nama Makanan</label>
    <input class="input" type="text" name="nama_makanan" id="nama_makanan" placeholder="nama_makanan"
      value="{{ old('nama_makanan',$Nutrient->nama_makanan) }}" />
    @error('nama_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="calories">calories</label>
    <input class="input" type="text" name="calories" id="calories" placeholder="calories"
      value="{{ old('calories',$Nutrient->calories) }}" />
    @error('calories')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="protein">protein</label>
    <input class="input" type="text" name="protein" id="protein" placeholder="protein"
      value="{{ old('protein', $Nutrient->protein) }}" />
    @error('protein')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="carbs">carbs</label>
    <input class="input" type="text" name="carbs" id="carbs" placeholder="carbs"
      value="{{ old('carbs', $Nutrient->carbs) }}" />
    @error('carbs')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="fat">fat</label>
    <input class="input" type="text" name="fat" id="fat" placeholder="fat"
      value="{{ old('fat', $Nutrient->fat) }}" />
    @error('fat')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="fiber">fiber</label>
    <input class="input" type="text" name="fiber" id="fiber" placeholder="fiber"
      value="{{ old('fiber', $Nutrient->fiber) }}" />
    @error('fiber')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror 


    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
