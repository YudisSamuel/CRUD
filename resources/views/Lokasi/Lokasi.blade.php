<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sensor Pendeteksi Kebakaran</title>

    <link href="{{asset('Tugas.SI/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('Tugas.SI/css/sb-admin.css')}}" rel="stylesheet">

    <link href="{{asset('Tugas.SI/css/plugins/morris.css')}}" rel="stylesheet">

    <link href="{{asset('Tugas.SI/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Data Sensor Pendeteksi Kebakaran</a>
            </div>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Yudistira</strong>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Yudistira. <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="{{url ('/')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>                    
                    <li>
                        <a href="{{url ('User')}}"><i class="menu-icon fa fa "></i>User</a>
                    </li>
                    <li>
                        <a href="{{url ('LokasiSide')}}"><i class="menu-icon fa fa "></i>Data Lokasi</a>
                    </li>
                    <li>
                        <a href="{{url ('Grafik')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Grafik</a>
                    </li>
                    <li>
                        <a href="{{url ('Alat')}}"><i class="menu-icon fa fa "></i>Data Alat</a>
                    </li>
                    <li>
                        <a href="{{url ('Informasi')}}"><i class="fa-solid fa-circle-info"></i>Informasi</a>
                    </li>
                    <li>
                        <a href="{{url ('Pengaduan')}}"><i class="menu-icon fa "></i>Pengaduan</a>
                    </li>
                    <li>
                        <a href="{{url ('Respon')}}"><i class="menu-icon fa fa" ></i>Respon</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Data Lokasi Sensor Pendeteksi Kebakaran</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <i class="fa fa fa-5x"></i>
                                    </div>
                                    <div>
                                        <div class="huge">
                                            <div class="text-left">
                                                Kecamatan 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url ('Kecamatan')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa fa-5x"></i>
                                    </div>
                                    <div>
                                        <div class="huge">
                                            <div class="text-left">
                                                Kota     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url ('Kota')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa fa-5x"></i>
                                    </div>
                                    <div>
                                        <div class="huge">
                                            <div class="text-left">
                                                Provinsi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url ('Provinsi')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div> <br>
                </div>

				<div class="home-content">
					<h3>Isi data Lokasi</h3>
					<table class="table-responsive">
					 <thead>
                        <form id="demo-form2" action="#" data-parsley-validate class="form-horizontal form-label-left" method="#">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">id Lokasi</label>
                                  <input type="text" class="form-control" name = "Lokasi" id="Lokasi"><br>
                                  <label for="exampleInputEmail1" class="form-label">Pilih Kecamatan</label>
                                  <div class="form-group">
                                    <select class="form-control" name="id_Kecmatan">
                                    <option selected disabled>-- Pilih ID --</option>
                                    {{-- @foreach ($Kecamatan as $item) --}}
                                    <option>1.Lowokwaru</option>
                                    <option>2.Blimbing</option>
                                    <option>3.Sukun</option>
                                    <option>4.Klojen</option>
                                    {{-- @endforeach --}}
                                    </select> <br>
                                    <label for="exampleInputEmail1" class="form-label">Pilih Kota</label>
                                    <div class="form-group">
                                      <select class="form-control" name="id_Kecmatan">
                                      <option selected disabled>-- Pilih ID --</option>
                                      {{-- @foreach ($Kecamatan as $item) --}}
                                      <option>1.Malang</option>
                                      {{-- @endforeach --}}
                                      </select> <br>
                                    </div>
                                    <label for="exampleInputEmail1" class="form-label">Pilih Provinsi</label>
                                    <div class="form-group">
                                      <select class="form-control" name="id_Kecmatan">
                                      <option selected disabled>-- Pilih ID --</option>
                                      {{-- @foreach ($Kecamatan as $item) --}}
                                      <option>1.Jawa Timur</option>
                                      {{-- @endforeach --}}
                                      </select>
                                    </div>
                                  </div>
                                  <button type="submit" class="btn btn-success">Submit</button>
                                </div>

                            {{-- <div class="mb-3">
                              <label for="id" class="form-label">ID</label>
                              <input type="text" class="form-control" name = "id" id="id">
                            </div><br>
                            <label for="id" class="form-label">ID Kecamatan</label>
                            <input type="text" class="form-control" name = "id" id="id">
                          </div><br>
                          <button type="submit" class="btn btn-success">Submit</button> <br> <br> --}}
                          </form> <br>
					 </thead>
					 </table>
				  </div>
                <!-- /.row -->

                <div class="content">
                    <div class = "card-ifo card-outline">
                        <div class="card-header"> 
                            <div class="card-tools"> 
                            </div> 
                        </div>
                        <div class="card-tools"> 
                            <h3>Tabel Data Lokasi</h3>
                            <div class="card-tools"> 
                                <a href="#" class="btn btn-success">Cetak</a>  <br> <br>
                            </div> 
                        </div> 
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No.</th>
                                    <th>ID_Lokasi</th>
                                    <th>ID_Kecamatan</th>
                                    <th>ID_Kota</th>   
                                    <th>ID_Provinsi</th>
                                    <th>Aksi</th>  
                                </tr>
                                {{-- @foreach ($data as $item) --}}
                                <tr>

                                    <th>1.</th>
                                    <th>001</th>
                                    <th>Lowokwaru</th>
                                    <th>Malang</th>   
                                    <th>Jawa Timur</th> 
                                    {{-- <td>{{$loop ->iteration}}</td>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->Kecamatan->Kecamatan}}</td>
                                    <td>{{$item->id_Kota}}</td>
                                    <td>{{$item->id_Provinsi}}</td> --}}
                                    <th>
                                        <button type="button" class="btn btn-xs btn-info">Edit</button>
                                        <button type="button" class="btn btn-xs btn-danger">Hapus</button>
                                    </th> 
                                </tr>
                                {{-- @endforeach --}}
                            </table>    
                        </div>  
                    </div>
                </div>    
                  <br> <br>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
