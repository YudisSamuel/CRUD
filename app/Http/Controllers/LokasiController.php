<?php

namespace App\Http\Controllers;

use App\Models\lokasi;
use App\Models\kecamatan;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        return view('Lokasi.Lokasi');
        //     'Kecamatan' => kecamatan::all()
        // ]);
    }

    public function getLokasi($id)
    {
        $lokasi= Lokasi::where('id_Kecamatan', $id)->get();
        return response()->json($lokasi);
    }

    public function iLokasi(){
        return view('input.iSuhu');
    }

    public function instLokasi(Request $request){
        $request->validate([
            'id' => 'required',
            'id_Kecamatan' => 'required',
            'id_Kota' => 'required',
            'id_Provinsi' => 'required',
        ]);

        lokasi::create([
            'id' => rand(),
            'id_Kecamatan'  => $request->Data_Sensor,
            'Status' => $request->Status,
            'Tanggal' => $request->Tanggal,
            'Waktu' => $request->Waktu,
        ]);
        return redirect("Lokasi")->with("message", "Data berhasil disimpan");
       // sensor_suhu::create($request->all());
        //return redirect()->route('sensor_suhu')->with('Success', 'Data Berhasil Ditambahkan');
    }

}
