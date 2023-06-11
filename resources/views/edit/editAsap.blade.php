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
                <a class="navbar-brand" >Data Sensor Pendeteksi Kebakaran</a>
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
                            Data <small>Sensor Asap</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Pengisian dan status data
                            </li>
                        </ol>
                    </div>
                </div>

				<div class="home-content">
					<h3>Isi data sensor</h3>
					<table class="table-responsive">
					 <thead>
                        <form id="demo-form2" action="{{ route('instApi') }}" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="id" class="form-label">ID</label>
                              <input type="text" class="form-control" name = "id" id="id">
                            </div>
                            <div class="mb-3">
                              <label for="data" class="form-label">Data Sensor</label>
                              <input type="text" class="form-control" name = "Data_Sensor" id="Data_Sensor">
                            </div>
                            <div class="mb-3">
                                <label for="Status" class="form-label">Status</label>
                                <input type="text" class="form-control" name = "Status" id="Status">
                            </div>
                            <div class="mb-3">
                                <label for="Tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name = "Tanggal" id="Tanggal">
                            </div>
                            <div class="mb-3">
                                <label for="Waktu" class="form-label">Waktu</label>
                                <input type="time" class="form-control" name = "Waktu" id="Waktu">
                            </div> <br>
                            <button type="submit" class="btn btn-success">Submit</button>
                          </form>
						 </tr>
					 </thead>
					 </table>
				  </div>
                  <br> <br>
                <!-- /.row -->   
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

