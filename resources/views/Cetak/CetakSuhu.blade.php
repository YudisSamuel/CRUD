<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-g">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="({ csrf token() }]">
    <link href="{{asset('Tugas.SI/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('Tugas.SI/css/sb-admin.css')}}" rel="stylesheet">

    <link href="{{asset('Tugas.SI/css/plugins/morris.css')}}" rel="stylesheet">

    <link href="{{asset('Tugas.SI/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
</head>
    
    <style>
    table.static {
        Position: relative:
        border: 1px solid #543535;
    }
    </style>
    <title>CETAK DATA PEGAWAI</title>
</head>
<body>
    <div class="form-group">
    <p align ="center"><b>Laporan Data Suhu</b></p>
    <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>id</th>
                    <th>Data Sensor</th>
                    <th>Status</th>   
                    <th>Tanggal</th>
                    <th>Waktu</th>
                </tr>
                @foreach ($data as $item)
                <tr>
                    <td>{{$loop ->iteration}}</td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->Data_Sensor}}</td>
                    <td>{{$item->Status}}</td>
                    <td>{{$item->Tanggal}}</td>
                    <td>{{$item->Waktu}}</td>
                </tr>
            
                @endforeach
                </tr>
            </table>    
        </div> 
</table>
</div>
</body>
</html>