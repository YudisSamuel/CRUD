<?php

namespace App\Http\Controllers;
use App\Models\SensorAsap;
use Illuminate\Http\Request;

class SuhuController extends Controller
{
    public function index()
    {
        $data = SensorAsap::all();
        return view('Sensor.Asap', compact('data'));
    }

    public function iAsap(){
        return view('input.iApi');
    }
    public function instAsap(Request $request){
        $request->validate([
            'id' => 'required',
            'Data_Sensor' => 'required',
            'Status' => 'required',
            'Tanggal' => 'required',
            'Waktu' => 'required',
        ]);

        SensorAsap::create([
            'id' => rand(),
            'Data_Sensor'  => $request->Data_Sensor,
            'Status' => $request->Status,
            'Tanggal' => $request->Tanggal,
            'Waktu' => $request->Waktu,
        ]);
        return redirect("Asap")->with("message", "Data berhasil disimpan");
    
        
    }

    public function editAsap($id){
        $data = SensorAsap::find($id);
        return view('edit.editasap', compact('data'));
    }

    public function updateAsap(Request $request, $id ){
        $data = SensorAsap::find($id);
        $data->update($request->all());
        return redirect()->route('Asap')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delAsap($id){
        $data = SensorAsap::find($id);
        $data->delete();
        return redirect()->route('Asap')->with('Success', 'Data Berhasil Dihapus');
    }
}