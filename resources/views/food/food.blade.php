@extends('layouts.app')

@section('title')
Food | NutriTrack Admin
@endsection

@section('content')
<h3>Food</h3>
<button type="button" class="btn btn-tambah">
  <a href="/food/tambah">Tambah Data</a>
</button>
<table class="table-data">
  <thead>
    <tr>
    <th scope="col" style="width: 20%"> photo</th>
    <th scope="col" style="width: 20%"> Nama Makanan</th>
    <th scope="col" style="width: 15%"> Calories</th>
    <th scope="col" style="width: 15%">Protein</th>
	  <th scope="col" style="width: 15%">Carbohydrates</th>
	  <th scope="col" style="width: 15%">Fat</th>
    <th scope="col" style="width: 15%">Fiber</th>
	<th scope="col" style="width: 30%">Action</th>
  </tr>
  </thead>
  <tbody>
    @forelse ($food as $food)
    <tr>
      <td><img src="{{ asset('img_food/' . $food->gambar)  }}" alt="" width="300px"></td>
      <td>{{ $food->nama_makanan }}</td>
      <td>{{ $food->calories }}</td>
      <td>{{ $food->protein }}</td>
      <td>{{ $food->carbs }}</td>
      <td>{{ $food->fat }}</td>
      <td>{{ $food->fiber }}</td>
      <td>
        <a class='btn-edit' href="/food/edit/{{ $food->id_food }}">Edit</a>
        |
        <a class='btn-delete' href="/food/hapus/{{$food->id_food }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="8" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
