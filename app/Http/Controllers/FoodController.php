<?php

namespace App\Http\Controllers;

use App\Models\food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FoodController extends Controller
{
    public function index()
    {
        $food = food::all();
        return view('food.food', compact('food'));
    }

    public function create()
    {
        return view('food.food-entry');
    }

    public function store(Request $request)
    {
       $request->validate([
        'nama_makanan' => 'required',
        'calories' => 'required',
        'protein' => 'required',
        'carbs' => 'required',
        'fat' => 'required',
        'fiber'=> 'required',
        'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $tujuan_upload = 'img_food';
        $gambar->move($tujuan_upload, $nama_gambar);

        food::create([
            'nama_makanan' => $request->nama_makanan,
            'calories' => $request->calories,
            'protein' => $request->protein,
            'carbs' => $request->carbs,
            'fat' => $request->fat,
            'fiber' => $request->fiber,
            'gambar' => $nama_gambar,
        ]);

        return redirect('/food');
    }

    public function edit($id_food)
    {
        $food = food::find($id_food);
        return view('food.food-edit', compact('food'));
    }

    public function update(Request $request, $id_food)
    {
        $request->validate([
        'nama_makanan' => 'required',
        'calories' => 'required',
        'protein' => 'required',
        'carbs' => 'required',
        'fat' => 'required',
        'fiber'=> 'required',
        //'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $food  = food::find($id_food);

        // if($request->hasFile('gambar')){

        //     File::delete('img_categories/'.$food ->gambar);
        //     $gambar = $request->file('gambar');
        //     $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        //     $tujuan_upload = 'img_categories';
        //     $gambar->move($tujuan_upload, $nama_gambar);
        //     $food ->gambar = $nama_gambar;
        // }

        $food->update([
            'nama_makanan' => $request->nama_makanan,
            'calories' => $request->calories,
            'protein' => $request->protein,
            'carbs' => $request->carbs,
            'fat' => $request->fat,
            'fiber' => $request->fiber,
            //'gambar' => $nama_gambar,
        ]);

        return redirect('/food');
    }

    public function delete($id_food)
    {
        $food = food::find($id_food);
        return view('food.food-hapus', compact('food'));
    }

    public function destroy($id_food)
    {
        $food = food::find($id_food);
        File::delete('img_food/'.$food->gambar);
        $food->delete();
        return redirect('/food');
    }

}

