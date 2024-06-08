@extends('layouts.app')

@section('title')
Hapus NutriTrack | NutriTrack Admin
@endsection

@section('content')
<h3>Hapus food</h3>
<div class="form-login">
  <h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href={{ url('/food/destroy/' . $food->id_food ) }}>
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/food">
      No
    </a>
  </button>
</div>
@endsection
