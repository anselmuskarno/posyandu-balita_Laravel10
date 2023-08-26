<!DOCTYPE html>
<html lang="en">


<!-- tables-datatables23:59-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="user/assets/img/favicon.ico">
    <title>Posyandu</title>
    <link rel="stylesheet" type="text/css" href="user/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="user/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="user/assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="user/assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="user/assets/js/html5shiv.min.js"></script>
		<script src="user/assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index-2.html" class="logo">
                    <img src="user/assets/img/logo.png" width="35" height="35" alt=""> <span>Posyandu</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="user/assets/img/user.jpg" width="40" alt="Admin">
                            <span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/keluar">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="/keluar">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="/dashboardAdmin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="">
                            <a href="/halamanAdmin"><i class="fa fa-user-md"></i> <span>Data Balita</span></a>
                        </li>
                        <li class="">
                            <a href="/userAdmin"><i class="fa fa-wheelchair"></i> <span>User</span></a>
                        </li>
                        <li class="">
                            <a href="/jadwalAdmin"><i class="fa fa-heartbeat" aria-hidden="true"></i><span>Jadwal</span></a>
                        </li>
                        <li class="active">
                            <a href="/imunisasiAdmin"><i class="fa fa-heartbeat" aria-hidden="true"></i><span>Imunisasi</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h6 class="card-title text-bold">Data Pendaftaran Imunisasi</h6>
                                <p class="content-group">

                                </p>
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Orang Tua</th>
                                                <th>Nama Balita</th>
                                                <th>Agenda/Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($imunisasi as $j)
                                            <tr>
                                                <td> {{ $loop->iteration }} </td>
                                                <td> {{ $j->nama_ortu }} </td>
                                                <td> {{ $j->nama_balita }}</td>
                                                <td> Jenis : {{ $j->agenda }} <br>
                                                    Tanggal : {{ $j->tanggal_pelaksanaan }} </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar-overlay" data-reff=""></div>
    <script src="user/assets/js/jquery-3.2.1.min.js"></script>
    <script src="user/assets/js/popper.min.js"></script>
    <script src="user/assets/js/bootstrap.min.js"></script>
    <script src="user/assets/js/jquery.dataTables.min.js"></script>
    <script src="user/assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="user/assets/js/jquery.slimscroll.js"></script>
    <script src="user/assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


<!-- tables-datatables23:59-->

</html>