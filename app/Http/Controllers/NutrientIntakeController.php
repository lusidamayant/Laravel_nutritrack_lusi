<?php

namespace App\Http\Controllers;
use App\Models\Nutrient;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class NutrientIntakeController extends Controller
{
    public function index()
    {
        $Nutrient = Nutrient::all();
        return view('Nutrient_Intake.Nutrient', compact('Nutrient'));
    }

    public function create()
    {
        return view('Nutrient_Intake.Nutrient-entry');
    }

    public function store(Request $request)
    {
       $request->validate([
        'nama_pengguna'=> 'required',
        'nama_makanan' => 'required',
        'calories' => 'required',
        'protein' => 'required',
        'carbs' => 'required',
        'fat' => 'required',
        'fiber'=> 'required',
        ]);

        Nutrient::create([
             'nama_pengguna'=> $request->nama_pengguna,
            'nama_makanan' => $request->nama_makanan,
            'calories' => $request->calories,
            'protein' => $request->protein,
            'carbs' => $request->carbs,
            'fat' => $request->fat,
            'fiber' => $request->fiber,
        ]);

        return redirect('/Nutrient');
    }

    public function edit($id_Nutrient)
    {
        $Nutrient = Nutrient::find($id_Nutrient);
        return view('Nutrient_Intake.Nutrient-edit', compact('Nutrient'));
    }

    public function update(Request $request, $id_Nutrient)
    {
        $request->validate([
        'nama_pengguna' => 'required',
        'nama_makanan' => 'required',
        'calories' => 'required',
        'protein' => 'required',
        'carbs' => 'required',
        'fat' => 'required',
        'fiber'=> 'required',
        ]);

        $Nutrient  = Nutrient::find($id_Nutrient);

        $Nutrient->update([
            'nama_pengguna' => $request->nama_pengguna,
            'nama_makanan' => $request->nama_makanan,
            'calories' => $request->calories,
            'protein' => $request->protein,
            'carbs' => $request->carbs,
            'fat' => $request->fat,
            'fiber' => $request->fiber,
        ]);

        return redirect('/Nutrient');
    }

    public function delete($id_Nutrient)
    {
        $Nutrient = Nutrient::find($id_Nutrient);
        return view('Nutrient_Intake.Nutrient-hapus', compact('Nutrient'));
    }

    public function destroy($id_Nutrient)
    {
        $Nutrient = Nutrient::find($id_Nutrient);
        $Nutrient->delete();
        return redirect('/Nutrient');
    }

    public function cetak()
    {
        $Nutrient = Nutrient::all();
        $pdf = Pdf::loadview('Nutrient_Intake.Nutrient-cetak', compact('Nutrient'));
        return $pdf->download('laporan.pdf');
    }

}
