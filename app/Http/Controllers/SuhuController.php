<?php

namespace App\Http\Controllers;
use App\Models\sensor_suhu;
use Illuminate\Http\Request;
use PDF;
class SuhuController extends Controller
{
    public function index()
    {
        $data = sensor_suhu::all();
        return view('Sensor.Suhu', compact('data'));
    }

    public function iSuhu(){
        return view('input.iSuhu');
    }
    public function instSuhu(Request $request){
        $request->validate([
            'id' => 'required',
            'Data_Sensor' => 'required',
            'Status' => 'required',
            'Tanggal' => 'required',
            'Waktu' => 'required',
        ]);

        sensor_suhu::create([
            'id' => rand(),
            'Data_Sensor'  => $request->Data_Sensor,
            'Status' => $request->Status,
            'Tanggal' => $request->Tanggal,
            'Waktu' => $request->Waktu,
        ]);
        return redirect("Suhu")->with("message", "Data berhasil disimpan");
       // sensor_suhu::create($request->all());
        //return redirect()->route('sensor_suhu')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editSuhu($id){
        $data = sensor_suhu::findorfail ($id);
        return view('edit.editsuhu', compact('data'));
    }

    public function updateSuhu(Request $request, $id ){
        $data = sensor_suhu::findorfail ($id);
        $data->update($request->all());
        return redirect('Suhu')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delSuhu($id){
        $data = sensor_suhu::find($id);
        $data->delete();
        return back()->with('Success', 'Data Berhasil Dihapus');
    }

    public function exportSuhu()
    {
        $data = sensor_suhu::all();
        $pdf = PDF::loadview('Cetak.CetakSuhu', compact('data'));
        return $pdf->download('laporan-Suhu.pdf');
    }

}
