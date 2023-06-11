<?php

namespace App\Http\Controllers;
use App\Models\SensorGas;
use Illuminate\Http\Request;

class SuhuController extends Controller
{
    public function index()
    {
        $data = SensorGas::all();
        return view('Sensor.Gas', compact('data'));
    }

    public function iGas(){
        return view('input.iGas');
    }
    public function instGas(Request $request){
        $request->validate([
            'id' => 'required',
            'Data_Sensor' => 'required',
            'Status' => 'required',
            'Tanggal' => 'required',
            'Waktu' => 'required',
        ]);

        SensorGas::create([
            'id' => rand(),
            'Data_Sensor'  => $request->Data_Sensor,
            'Status' => $request->Status,
            'Tanggal' => $request->Tanggal,
            'Waktu' => $request->Waktu,
        ]);
        return redirect("Gas")->with("message", "Data berhasil disimpan");
    
        
    }

    public function editGas($id){
        $data = SensorGas::find($id);
        return view('edit.editgas', compact('data'));
    }

    public function updateGas(Request $request, $id ){
        $data = SensorGas::find($id);
        $data->update($request->all());
        return redirect()->route('Gas')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delGas($id){
        $data = SensorGas::find($id);
        $data->delete();
        return redirect()->route('Gas')->with('Success', 'Data Berhasil Dihapus');
    }
}