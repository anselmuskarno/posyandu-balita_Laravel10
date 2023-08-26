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
                        <li class="active">
                            <a href="/halamanAdmin"><i class="fa fa-user-md"></i> <span>Data Balita</span></a>
                        </li>
                        <li>
                            <a href="/userAdmin"><i class="fa fa-wheelchair"></i> <span>User</span></a>
                        </li>
                        <li class="">
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
                                <h6 class="card-title text-bold">Data Anak</h6>
                                <p class="content-group">
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data Balita</button>
                                    <!-- Modal -->
                                <div class="modal fade bg-primary" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                                <button type="button" class="btn btn-secondary btn-close" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/tambahDataBalita" method="post">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-md-2">Nama Balita</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="nama_anak" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-md-2">Nama Orang Tua</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="nama_orangtua" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-md-2">Jenis Kelamin</label>
                                                        <div class="col-md-10">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-md-2">Umur Balita</label>
                                                        <div class="col-md-10">
                                                            <select class="form-control" name="umur_anak">
                                                                <option value="1">1 bulan</option>
                                                                <option value="2">2 bulan</option>
                                                                <option value="3">3 bulan</option>
                                                                <option value="4">4 bulan</option>
                                                                <option value="5">5 bulan</option>
                                                                <option value="6">6 bulan</option>
                                                                <option value="7">7 bulan</option>
                                                                <option value="8">8 bulan</option>
                                                                <option value="9">9 bulan</option>
                                                                <option value="10">10 bulan</option>
                                                                <option value="11">11 bulan</option>
                                                                <option value="12">12 bulan</option>
                                                                <option value="13">13 bulan</option>
                                                                <option value="14">14 bulan</option>
                                                                <option value="15">15 bulan</option>
                                                                <option value="16">16 bulan</option>
                                                                <option value="17">17 bulan</option>
                                                                <option value="18">18 bulan</option>
                                                                <option value="19">19 bulan</option>
                                                                <option value="20">20 bulan</option>
                                                                <option value="21">21 bulan</option>
                                                                <option value="22">22 bulan</option>
                                                                <option value="23">23 bulan</option>
                                                                <option value="24">24 bulan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-md-2">Berat Badan</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" name="berat_badan_anak">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-md-2">Tinggi Badan</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" name="tinggi_badan">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="berat0" value="0">
                                                    <input type="hidden" name="berat1" value="0">
                                                    <input type="hidden" name="berat2" value="0">
                                                    <input type="hidden" name="berat3" value="0">
                                                    <input type="hidden" name="berat4" value="0">
                                                    <input type="hidden" name="berat5" value="0">
                                                    <input type="hidden" name="berat6" value="0">
                                                    <input type="hidden" name="berat7" value="0">
                                                    <input type="hidden" name="berat8" value="0">
                                                    <input type="hidden" name="berat9" value="0">
                                                    <input type="hidden" name="berat10" value="0">
                                                    <input type="hidden" name="berat11" value="0">
                                                    <input type="hidden" name="berat12" value="0">
                                                    <input type="hidden" name="berat13" value="0">
                                                    <input type="hidden" name="berat14" value="0">
                                                    <input type="hidden" name="berat15" value="0">
                                                    <input type="hidden" name="berat16" value="0">
                                                    <input type="hidden" name="berat17" value="0">
                                                    <input type="hidden" name="berat18" value="0">
                                                    <input type="hidden" name="berat19" value="0">
                                                    <input type="hidden" name="berat20" value="0">
                                                    <input type="hidden" name="berat21" value="0">
                                                    <input type="hidden" name="berat22" value="0">
                                                    <input type="hidden" name="berat23" value="0">
                                                    <input type="hidden" name="berat24" value="0">
                                                    <input type="hidden" name="tinggi24" value="0">
                                                    <input type="hidden" name="tinggi0" value="0">
                                                    <input type="hidden" name="tinggi1" value="0">
                                                    <input type="hidden" name="tinggi2" value="0">
                                                    <input type="hidden" name="tinggi3" value="0">
                                                    <input type="hidden" name="tinggi4" value="0">
                                                    <input type="hidden" name="tinggi5" value="0">
                                                    <input type="hidden" name="tinggi6" value="0">
                                                    <input type="hidden" name="tinggi7" value="0">
                                                    <input type="hidden" name="tinggi8" value="0">
                                                    <input type="hidden" name="tinggi9" value="0">
                                                    <input type="hidden" name="tinggi10" value="0">
                                                    <input type="hidden" name="tinggi11" value="0">
                                                    <input type="hidden" name="tinggi12" value="0">
                                                    <input type="hidden" name="tinggi13" value="0">
                                                    <input type="hidden" name="tinggi14" value="0">
                                                    <input type="hidden" name="tinggi15" value="0">
                                                    <input type="hidden" name="tinggi16" value="0">
                                                    <input type="hidden" name="tinggi17" value="0">
                                                    <input type="hidden" name="tinggi18" value="0">
                                                    <input type="hidden" name="tinggi19" value="0">
                                                    <input type="hidden" name="tinggi20" value="0">
                                                    <input type="hidden" name="tinggi21" value="0">
                                                    <input type="hidden" name="tinggi22" value="0">
                                                    <input type="hidden" name="tinggi23" value="0">
                                                    <input type="hidden" name="tinggi24" value="0">
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
                                                <th>Nama Anak</th>
                                                <th>Usia</th>
                                                <th>Nama Orang Tua</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($anak as $a)
                                            <tr>
                                                <td> {{ $loop->iteration }} </td>
                                                <td> {{ $a->nama_anak }} </td>
                                                <td> {{ $a->umur_anak }} bulan</td>
                                                <td> {{ $a->nama_orangtua }} </td>
                                                <td>

                                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailModal{{$a->id}}">Detail</button>
                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{$a->id}}">Edit</button>
                                                    <a href="/hapusBalita/{{$a->id}}" onclick="return confirm('Apakah anda yakin data ini akan dihapus?');" type="submit" class="btn btn-danger btn-sm mb-1">Hapus</a>

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


    <!-- Modal Detail-->
    @foreach ($anak as $a)
    <div class="modal fade bg-primary" id="detailModal{{$a->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                    <button type="button" class="btn btn-secondary btn-close" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Nama Balita</label>
                            <div class="col-md-10">
                                <input type="text" name="nama_anak" value="{{$a->nama_anak}}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Nama Orang Tua</label>
                            <div class="col-md-10">
                                <input type="text" name="nama_orangtua" value="{{$a->nama_orangtua}}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Jenis Kelamin</label>
                            <div class="col-md-10">
                                <?php if ($a->nama_orangtua == "perampuan") { ?>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="jenis_kelamin" value="perempuan" checked> Perempuan
                                        </label>
                                    </div>
                                <?php } else { ?>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="jenis_kelamin" value="laki-laki" checked> Laki-laki
                                        </label>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Umur Balita</label>
                            <div class="col-md-10">
                                <input type="text" name="nama_orangtua" class="form-control" value="{{$a->umur_anak}} bulan" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Berat Badan</label>
                            <div class="col-md-10">
                                <?php
                                if ($a->umur_anak == 0) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat0 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 1) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat1 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 2) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat2 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 2) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat2 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 3) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat3 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 4) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat4 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 5) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat5 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 6) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat6 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 7) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat7 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 8) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat8 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 9) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat9 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 10) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat10 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 11) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat11 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 12) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat12 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 13) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat13 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 14) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat14 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 15) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat15 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 16) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat16 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 16) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat16 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 17) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat17 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 18) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat18 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 19) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat19 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 20) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat20 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 21) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat21 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 22) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat22 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 23) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat23 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 24) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat24 ?> kg" disabled>
                                <?php  } ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Tinggi Badan</label>
                            <div class="col-md-10">
                                <?php
                                if ($a->umur_anak == 0) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat0 ?> kg" disabled>
                                <?php } else if ($a->umur_anak == 1) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi1 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 2) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi2 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 2) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi2 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 3) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi3 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 4) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi4 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 5) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi5 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 6) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi6 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 7) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi7 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 8) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi8 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 9) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi9 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 10) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi10 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 11) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi11 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 12) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi12 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 13) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi13 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 14) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi14 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 15) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi15 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 16) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi16 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 17) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi17 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 18) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi18 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 19) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi19 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 20) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi20 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 21) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi21 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 22) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi22 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 23) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi23 ?> cm" disabled>
                                <?php } else if ($a->umur_anak == 24) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->tinggi24 ?> cm" disabled>
                                <?php  } ?>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Modal Edit-->
    @foreach ($anak as $a)
    <div class="modal fade bg-primary" id="editModal{{$a->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="btn btn-secondary btn-close" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
                </div>
                <div class="modal-body">
                    <form action="/editBalita" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$a->id}}">
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Nama Balita</label>
                            <div class="col-md-10">
                                <input type="text" name="nama_anak" value="{{$a->nama_anak}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Nama Orang Tua</label>
                            <div class="col-md-10">
                                <input type="text" name="nama_orangtua" value="{{$a->nama_orangtua}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Jenis Kelamin</label>
                            <div class="col-md-10">
                                <?php if ($a->nama_orangtua == "perempuan") { ?>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="jenis_kelamin" value="perempuan" checked> Perempuan
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
                                        </label>
                                    </div>
                                <?php } else { ?>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="jenis_kelamin" value="laki-laki" checked> Laki-laki
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
                                        </label>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Umur Balita</label>
                            <div class="col-md-10">
                                <select class="form-control" name="umur_anak">
                                    <option value="{{$a->umur_anak}}">{{$a->umur_anak}} bulan</option>
                                    <option value="1">1 bulan</option>
                                    <option value="2">2 bulan</option>
                                    <option value="3">3 bulan</option>
                                    <option value="4">4 bulan</option>
                                    <option value="5">5 bulan</option>
                                    <option value="6">6 bulan</option>
                                    <option value="7">7 bulan</option>
                                    <option value="8">8 bulan</option>
                                    <option value="9">9 bulan</option>
                                    <option value="10">10 bulan</option>
                                    <option value="11">11 bulan</option>
                                    <option value="12">12 bulan</option>
                                    <option value="13">13 bulan</option>
                                    <option value="14">14 bulan</option>
                                    <option value="15">15 bulan</option>
                                    <option value="16">16 bulan</option>
                                    <option value="17">17 bulan</option>
                                    <option value="18">18 bulan</option>
                                    <option value="19">19 bulan</option>
                                    <option value="20">20 bulan</option>
                                    <option value="21">21 bulan</option>
                                    <option value="22">22 bulan</option>
                                    <option value="23">23 bulan</option>
                                    <option value="24">24 bulan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Berat Badan (kg)</label>
                            <div class="col-md-10">
                                <?php
                                if ($a->umur_anak == 0) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat0 ?>" required>
                                <?php } else if ($a->umur_anak == 1) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat1 ?>" required>
                                <?php } else if ($a->umur_anak == 2) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat2 ?>" required>
                                <?php } else if ($a->umur_anak == 2) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat2 ?>" required>
                                <?php } else if ($a->umur_anak == 3) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat3 ?>" required>
                                <?php } else if ($a->umur_anak == 4) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat4 ?>" required>
                                <?php } else if ($a->umur_anak == 5) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat5 ?>" required>
                                <?php } else if ($a->umur_anak == 6) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat6 ?>" required>
                                <?php } else if ($a->umur_anak == 7) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat7 ?>" required>
                                <?php } else if ($a->umur_anak == 8) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat8 ?>" required>
                                <?php } else if ($a->umur_anak == 9) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat9 ?>" required>
                                <?php } else if ($a->umur_anak == 10) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat10 ?>" required>
                                <?php } else if ($a->umur_anak == 11) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat11 ?>" required>
                                <?php } else if ($a->umur_anak == 12) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat12 ?>" required>
                                <?php } else if ($a->umur_anak == 13) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat13 ?>" required>
                                <?php } else if ($a->umur_anak == 14) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat14 ?>" required>
                                <?php } else if ($a->umur_anak == 15) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat15 ?>" required>
                                <?php } else if ($a->umur_anak == 16) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat16 ?>" required>
                                <?php } else if ($a->umur_anak == 16) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat16 ?>" required>
                                <?php } else if ($a->umur_anak == 17) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat17 ?>" required>
                                <?php } else if ($a->umur_anak == 18) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat18 ?>" required>
                                <?php } else if ($a->umur_anak == 19) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat19 ?>" required>
                                <?php } else if ($a->umur_anak == 20) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat20 ?>" required>
                                <?php } else if ($a->umur_anak == 21) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat21 ?>" required>
                                <?php } else if ($a->umur_anak == 22) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat22 ?>" required>
                                <?php } else if ($a->umur_anak == 23) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat23 ?>" required>
                                <?php } else if ($a->umur_anak == 24) { ?>
                                    <input type="text" class="form-control" name="berat_badan_anak" value="<?= $a->berat24 ?>" required>
                                <?php  } ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Tinggi Badan (cm)</label>
                            <div class="col-md-10">
                                <?php
                                if ($a->umur_anak == 0) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->berat0 ?>" required>
                                <?php } else if ($a->umur_anak == 1) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi1 ?>" required>
                                <?php } else if ($a->umur_anak == 2) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi2 ?>" required>
                                <?php } else if ($a->umur_anak == 2) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi2 ?>" required>
                                <?php } else if ($a->umur_anak == 3) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi3 ?>" required>
                                <?php } else if ($a->umur_anak == 4) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi4 ?>" required>
                                <?php } else if ($a->umur_anak == 5) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi5 ?>" required>
                                <?php } else if ($a->umur_anak == 6) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi6 ?>" required>
                                <?php } else if ($a->umur_anak == 7) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi7 ?>" required>
                                <?php } else if ($a->umur_anak == 8) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi8 ?>" required>
                                <?php } else if ($a->umur_anak == 9) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi9 ?>" required>
                                <?php } else if ($a->umur_anak == 10) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi10 ?>" required>
                                <?php } else if ($a->umur_anak == 11) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi11 ?>" required>
                                <?php } else if ($a->umur_anak == 12) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi12 ?>" required>
                                <?php } else if ($a->umur_anak == 13) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi13 ?>" required>
                                <?php } else if ($a->umur_anak == 14) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi14 ?>" required>
                                <?php } else if ($a->umur_anak == 15) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi15 ?>" required>
                                <?php } else if ($a->umur_anak == 16) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi16 ?>" required>
                                <?php } else if ($a->umur_anak == 17) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi17 ?>" required>
                                <?php } else if ($a->umur_anak == 18) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi18 ?>" required>
                                <?php } else if ($a->umur_anak == 19) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi19 ?>" required>
                                <?php } else if ($a->umur_anak == 20) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi20 ?>" required>
                                <?php } else if ($a->umur_anak == 21) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi21 ?>" required>
                                <?php } else if ($a->umur_anak == 22) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi22 ?>" required>
                                <?php } else if ($a->umur_anak == 23) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi23 ?>" required>
                                <?php } else if ($a->umur_anak == 24) { ?>
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?= $a->tinggi24 ?>" required>
                                <?php  } ?>
                            </div>
                        </div>

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