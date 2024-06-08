@extends('layouts.app')

@section('title')
Edit Food| NutriTrack Admin
@endsection

@section('content')
<h3>Edit Food</h3>
<div class="form-login">
  <form action="{{ url('/food/update/' . $food->id_food) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="nama_makanan">Nama Makanan</label>
    <input class="input" type="text" name="nama_makanan" id="nama_makanan" placeholder="nama_makanan"
      value="{{ old('nama_makanan', $food->nama_makanan) }}" />
    @error('nama_makanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="calories">calories</label>
    <input class="input" type="text" name="calories" id="calories" placeholder="calories"
      value="{{ old('calories', $food->calories) }}" />
    @error('calories')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="protein">protein</label>
    <input class="input" type="text" name="protein" id="protein" placeholder="protein"
      value="{{ old('protein', $food->protein) }}" />
    @error('protein')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="carbs">carbs</label>
    <input class="input" type="text" name="carbs" id="carbs" placeholder="carbs"
      value="{{ old('carbs', $food->carbs) }}" />
    @error('carbs')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="fat">fat</label>
    <input class="input" type="text" name="fat" id="fat" placeholder="fat"
      value="{{ old('fat', $food->fat) }}" />
    @error('fat')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="fiber">fiber</label>
    <input class="input" type="text" name="fiber" id="fiber" placeholder="fiber"
      value="{{ old('fiber', $food->fiber) }}" />
    @error('fiber')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror 

    <label for="photo">Photo</label>
    <img src="{{ asset('img_food/' . $food->gambar) }}" alt="" width="200px">
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
