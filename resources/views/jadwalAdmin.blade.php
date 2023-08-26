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
                        <li class="active">
                            <a href="/jadwalAdmin"><i class="fa fa-heartbeat" aria-hidden="true"></i><span>Jadwal</span></a>
                        </li>
                        <li class="">
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
                                <h6 class="card-title text-bold">Data Jadwal</h6>
                                <p class="content-group">
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data User</button>
                                    <!-- Modal -->
                                <div class="modal fade bg-primary" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                                <button type="button" class="btn btn-secondary btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/tambahJadwal" method="post">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-md-2">Agenda</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="agenda_posyandu" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-md-2">Tanggal Pelaksanaan</label>
                                                        <div class="col-md-10">
                                                            <input type="date" name="tanggal" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-md-2">Tempat</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="tempat" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="status" value="ongoing">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </p>
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Agenda</th>
                                                <th>Tanggal Pelaksanaan</th>
                                                <th>Tempat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jadwal as $j)
                                            <tr>
                                                <td> {{ $loop->iteration }} </td>
                                                <td> {{ $j->agenda_posyandu }} </td>
                                                <td> {{ $j->tanggal }}</td>
                                                <td> {{ $j->tempat }} </td>
                                                <td>
                                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailModal{{ $j->id }}">Detail</button>
                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $j->id }}">Edit</button>
                                                    <a href="/hapusJadwal/{{$j->id}}" onclick="return confirm('Apakah anda yakin data ini akan dihapus?');" type="submit" class="btn btn-danger btn-sm mb-1">Hapus</a>


                                                </td>
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

    <!-- Detail Modal -->
    @foreach ($jadwal as $j)
    <div class="modal fade bg-primary" id="detailModal{{ $j->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                    <button type="button" class="btn btn-secondary btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Agenda</label>
                            <div class="col-md-10">
                                <input type="text" value="{{ $j->agenda_posyandu }}" name="agenda_posyandu" class="form-control" required disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Tanggal Pelaksanaan</label>
                            <div class="col-md-10">
                                <input type="date" name="tanggal" value="{{ $j->tanggal }}" class="form-control" required disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Tempat</label>
                            <div class="col-md-10">
                                <input type="text" name="tempat" value="{{ $j->tempat }}" class="form-control" required disabled>
                            </div>
                        </div>
                        <input type="hidden" name="status" value="ongoing">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Detail Modal -->
    @foreach ($jadwal as $j)
    <div class="modal fade bg-primary" id="editModal{{ $j->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="btn btn-secondary btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form action="/editJadwal" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $j->id }}">
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Agenda</label>
                            <div class="col-md-10">
                                <input type="text" value="{{ $j->agenda_posyandu }}" name="agenda_posyandu" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Tanggal Pelaksanaan</label>
                            <div class="col-md-10">
                                <input type="date" name="tanggal" value="{{ $j->tanggal }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Tempat</label>
                            <div class="col-md-10">
                                <input type="text" name="tempat" value="{{ $j->tempat }}" class="form-control" required>
                            </div>
                        </div>
                        <input type="hidden" name="status" value="ongoing">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

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