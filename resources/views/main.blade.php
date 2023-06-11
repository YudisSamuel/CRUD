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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin. <b class="caret"></b></a>
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
                            Dashboard <small>Data Sensor Pendeteksi Kebakaran</small>
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
                                    <div class="col-xs-1">
                                        <i class="fa fa fa-5x"></i>
                                    </div>
                                    <div>
                                        <div class="huge">Sensor Suhu </div>
                                    </div>
                                </div>
                            </div>
                            <a  href="{{url ('/Suhu')}}">
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
                                    <div class="col-xs-2">
                                        <i class="fa fa fa-5x"></i>
                                    </div>
                                    <div>
                                        <div class="huge">Sensor Gas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url ('Gas')}}">
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
                                    <div class="col-xs-1">
                                        <i class="fa fa fa-5x"></i>
                                    </div>
                                    <div>
                                        <div class="huge">Sensor Asap</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url ('Asap')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa fa-5x"></i>
                                    </div>
                                    <div>
                                        <div class="huge">Sensor Api</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url ('Api')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                </div> <br> <br>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Status Panel</h3>
                                <div class="text-right">
                                    <a href="#">Print <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Data</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>location</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>10/21/2013</td>
                                                <td>1:00 PM</td>
                                                <td>Lowokwaru,Kota Malang, Jawa Timur</td>
                                                <td>Aman</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>10/21/2013</td>
                                                <td>1:00 AM</td>
                                                <td>Lowokwaru,Kota Malang, Jawa Timur</td>
                                                <td>Aman</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>11/21/2013</td>
                                                <td>1:00 PM</td>
                                                <td>Lowokwaru,Kota Malang, Jawa Timur</td>
                                                <td>Aman</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>11/21/2013</td>
                                                <td>1:00 AM</td>
                                                <td>Lowokwaru,Kota Malang, Jawa Timur</td>
                                                <td>Aman</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>12/21/2013</td>
                                                <td>1:00 PM</td>
                                                <td>Lowokwaru,Kota Malang, Jawa Timur</td>
                                                <td>Aman</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>12/21/2013</td>
                                                <td>1:00 AM</td>
                                                <td>Lowokwaru,Kota Malang, Jawa Timur</td>
                                                <td>Aman</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>13/21/2013</td>
                                                <td>1:00 PM</td>
                                                <td>Lowokwaru,Kota Malang, Jawa Timur</td>
                                                <td>Aman</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>13/21/2013</td>
                                                <td>1:00 AM</td>
                                                <td>Lowokwaru,Kota Malang, Jawa Timur</td>
                                                <td>Aman</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Status <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
