<?php

namespace App\Http\Controllers;
use App\Models\sensor_suhu;
use Illuminate\Http\Request;

class SuhuController extends Controller
{
    public function index()
    {
        $data = SensorApi::all();
        return view('Sensor.Api', compact('data'));
    }

    public function iApi(){
        return view('input.iApi');
    }
    public function instApi(Request $request){
        $request->validate([
            'id' => 'required',
            'Data_Sensor' => 'required',
            'Status' => 'required',
            'Tanggal' => 'required',
            'Waktu' => 'required',
        ]);

        SensorApi::create([
            'id' => rand(),
            'Data_Sensor'  => $request->Data_Sensor,
            'Status' => $request->Status,
            'Tanggal' => $request->Tanggal,
            'Waktu' => $request->Waktu,
        ]);
        return redirect("Api")->with("message", "Data berhasil disimpan");
    
        
    }

    public function editApi($id){
        $data = SensorApi::find($id);
        return view('edit.editapi', compact('data'));
    }

    public function updateApi(Request $request, $id ){
        $data = SensorApi::find($id);
        $data->update($request->all());
        return redirect()->route('Api')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delApi($id){
        $data = SensorApi::find($id);
        $data->delete();
        return redirect()->route('Api')->with('Success', 'Data Berhasil Dihapus');
    }
}