  @extends('layouts.app')

  @section('title')
  Food | NutriTrack Admin
  @endsection

  @section('content')
  <h3>Nutrient</h3>
  <button type="button" class="btn btn-tambah">
    <a href="/Nutrient/tambah">Tambah Data</a>
  </button>
  <button type="button" class="btn btn-render">
    <a href="{{ url('/Nutrient/cetak') }}">Cetak Data</a>
  </button>
  <table class="table-data">
    <thead>
      <tr>
      <th scope="col" style="width: 15%"> Nama Pengguna</th>
      <th scope="col" style="width: 15%"> Nama Makanan</th>
      <th scope="col" style="width: 15%"> Calories</th>
      <th scope="col" style="width: 15%">Protein</th>
      <th scope="col" style="width: 15%">Carbohydrates</th>
      <th scope="col" style="width: 15%">Fat</th>
      <th scope="col" style="width: 15%">Fiber</th>
    <th scope="col" style="width: 30%">Action</th>
    </tr>
    </thead>
    <tbody>
      @forelse ($Nutrient as $Nutrient)
      <tr>
      <td>{{ $Nutrient->nama_pengguna }}</td>
        <td>{{ $Nutrient->nama_makanan }}</td>
        <td>{{ $Nutrient->calories }}</td>
        <td>{{ $Nutrient->protein }}</td>
        <td>{{ $Nutrient->carbs }}</td>
        <td>{{ $Nutrient->fat }}</td>
        <td>{{ $Nutrient->fiber }}</td>
        <td>
          <a class='btn-edit' href="/Nutrient/edit/{{ $Nutrient->id_nutrient }}">Edit</a>
          |
          <a class='btn-delete' href="/Nutrient/hapus/{{$Nutrient->id_nutrient }}">Hapus</a>
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
