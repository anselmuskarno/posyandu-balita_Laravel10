<!DOCTYPE html>
<html lang="en">


<!-- index22:59-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <link rel="shortcut icon" type="image/x-icon" href="user/assets/img/favicon.ico">
  <title>Posyandu</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="user/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="user/assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="user/assets/css/style.css">
  <!--[if lt IE 9]>
		<script src="user/assets/js/html5shiv.min.js"></script>
		<script src="user/assets/js/respond.min.js"></script>
	<![endif]-->
  <style>
    @media print {
      body {
        -webkit-print-color-adjust: exact;
      }
    }
  </style>
</head>

<body>
  @foreach ($anak as $a)
  <div class="main-wrapper">
    <div class="header">
      <div class="header-left">
        <a href="#!" class="logo">
          <img src="user/assets/img/logo.png" width="35" height="35" alt=""> <span>Posyandu</span>
        </a>
      </div>

      <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
      <ul class="nav user-menu float-right">


        <li class="nav-item d-none d-sm-block">
          <a href="javascript:void(0);" target="_blank" class="btn btn-primary" onclick="window.print()">Print</a>
        </li>
        <li class="nav-item dropdown has-arrow">
          <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
            <span class="user-img">
              <img class="rounded-circle" src="user/assets/img/user.jpg" width="24" alt="Admin">
              <span class="status online"></span>
            </span>
            <span> {{ $a->nama_orangtua }} </span>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/keluar">Logout</a>
          </div>
        </li>
      </ul>
      <div class="dropdown mobile-user-menu float-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="/keluar">Logout</a>
        </div>
      </div>
    </div>

    <div class="" id="printableArea">

      <div style="height: 80px;"></div>
      <div class="row" style="height: 800px;">
        <div class="col-12 " style="margin-left: 60px;">
          <?php if ($a->jenis_kelamin == "perempuan") { ?>
            <div class="row" style="margin-top:-40px;background-color: lightpink;">
            <?php } else { ?>
              <div class="row" style="margin-top:-40px;background-color: lightblue;">
              <?php } ?>
              <div class="col-3">
                <img style="margin-left:-14px; width: 200px;" src="user/assets/img/kms.png" alt="">
              </div>
              <div class="col-3">
                <div>
                  <div class="card-body">
                    <div class="text-center">
                      <img style="width: 180px;" src="user/assets/img/kmsicon2.png" alt=""><br>
                      <?php if ($a->jenis_kelamin == "perempuan") { ?>
                        <span style="font-size: 16px;">Untuk Perempuan</span>
                      <?php } else { ?>
                        <span style="font-size: 16px;">Untuk Laki-Laki</span>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6">

                <div>
                  <div class="card-body mt-4">
                    <div class="">
                      <table>
                        <tr>
                          <th>Nama</th>
                          <th>: {{ $a->nama_anak }} </th>
                        </tr>
                        <tr>
                          <th style="height: 20px;"></th>
                          <th></th>
                        </tr>
                        <tr>
                          <th>Nama Posyandu</th>
                          <th>: {{ "coba" }}</th>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>

            <!-- DIAGRAM KMS -->
            <div class="col-12 ">
              <div class="card">
                <div class="card-body text-center">
                  <div class="text-center">
                    <h4>Timbanglah Anak Anda Setiap Bulan</h4>
                    <h4>Anak Sehat, Tambah Umur, Tambah Berat, Tambah Pandai</h4>
                  </div>
                  <canvas id="linegraph"></canvas>
                  <table class="table" border="2" style="margin-top: -25px; ">

                    <tr>
                      <td style="width: 40px;"> </td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                    </tr>
                    <tr>
                      <input type="hidden" id="berat0" name="berat0" value="{{ $a->berat0 }}">
                      <input type="hidden" id="berat1" name="berat1" value="{{ $a->berat1 }}">
                      <input type="hidden" id="berat2" name="berat2" value="{{ $a->berat2 }}">
                      <input type="hidden" id="berat3" name="berat3" value="{{ $a->berat3 }}">
                      <input type="hidden" id="berat4" name="berat4" value="{{ $a->berat4 }}">
                      <input type="hidden" id="berat5" name="berat5" value="{{ $a->berat5 }}">
                      <input type="hidden" id="berat6" name="berat6" value="{{ $a->berat6 }}">
                      <input type="hidden" id="berat7" name="berat7" value="{{ $a->berat7 }}">
                      <input type="hidden" id="berat8" name="berat8" value="{{ $a->berat8 }}">
                      <input type="hidden" id="berat9" name="berat9" value="{{ $a->berat9 }}">
                      <input type="hidden" id="berat10" name="berat10" value="{{ $a->berat10 }}">
                      <input type="hidden" id="berat11" name="berat11" value="{{ $a->berat11 }}">
                      <input type="hidden" id="berat12" name="berat12" value="{{ $a->berat12 }}">
                      <input type="hidden" id="berat13" name="berat13" value="{{ $a->berat13 }}">
                      <input type="hidden" id="berat14" name="berat14" value="{{ $a->berat14 }}">
                      <input type="hidden" id="berat15" name="berat15" value="{{ $a->berat15 }}">
                      <input type="hidden" id="berat16" name="berat16" value="{{ $a->berat16 }}">
                      <input type="hidden" id="berat17" name="berat17" value="{{ $a->berat17 }}">
                      <input type="hidden" id="berat18" name="berat18" value="{{ $a->berat18 }}">
                      <input type="hidden" id="berat19" name="berat19" value="{{ $a->berat19 }}">
                      <input type="hidden" id="berat20" name="berat20" value="{{ $a->berat20 }}">
                      <input type="hidden" id="berat21" name="berat21" value="{{ $a->berat21 }}">
                      <input type="hidden" id="berat22" name="berat22" value="{{ $a->berat22 }}">
                      <input type="hidden" id="berat23" name="berat23" value="{{ $a->berat23 }}">
                      <input type="hidden" id="berat24" name="berat24" value="{{ $a->berat24 }}">
                      <input type="hidden" id="tinggi0" name="tinggi0" value="{{ $a->tinggi0 }}">
                      <input type="hidden" id="tinggi1" name="tinggi1" value="{{ $a->tinggi1 }}">
                      <input type="hidden" id="tinggi2" name="tinggi2" value="{{ $a->tinggi2 }}">
                      <input type="hidden" id="tinggi3" name="tinggi3" value="{{ $a->tinggi3 }}">
                      <input type="hidden" id="tinggi4" name="tinggi4" value="{{ $a->tinggi4 }}">
                      <input type="hidden" id="tinggi5" name="tinggi5" value="{{ $a->tinggi5 }}">
                      <input type="hidden" id="tinggi6" name="tinggi6" value="{{ $a->tinggi6 }}">
                      <input type="hidden" id="tinggi7" name="tinggi7" value="{{ $a->tinggi7 }}">
                      <input type="hidden" id="tinggi8" name="tinggi8" value="{{ $a->tinggi8 }}">
                      <input type="hidden" id="tinggi9" name="tinggi9" value="{{ $a->tinggi9 }}">
                      <input type="hidden" id="tinggi10" name="tinggi10" value="{{ $a->tinggi10 }}">
                      <input type="hidden" id="tinggi11" name="tinggi11" value="{{ $a->tinggi11 }}">
                      <input type="hidden" id="tinggi12" name="tinggi12" value="{{ $a->tinggi12 }}">
                      <input type="hidden" id="tinggi13" name="tinggi13" value="{{ $a->tinggi13 }}">
                      <input type="hidden" id="tinggi14" name="tinggi14" value="{{ $a->tinggi14 }}">
                      <input type="hidden" id="tinggi15" name="tinggi15" value="{{ $a->tinggi15 }}">
                      <input type="hidden" id="tinggi16" name="tinggi16" value="{{ $a->tinggi16 }}">
                      <input type="hidden" id="tinggi17" name="tinggi17" value="{{ $a->tinggi17 }}">
                      <input type="hidden" id="tinggi18" name="tinggi18" value="{{ $a->tinggi18 }}">
                      <input type="hidden" id="tinggi19" name="tinggi19" value="{{ $a->tinggi19 }}">
                      <input type="hidden" id="tinggi20" name="tinggi20" value="{{ $a->tinggi20 }}">
                      <input type="hidden" id="tinggi21" name="tinggi21" value="{{ $a->tinggi21 }}">
                      <input type="hidden" id="tinggi22" name="tinggi22" value="{{ $a->tinggi22 }}">
                      <input type="hidden" id="tinggi23" name="tinggi23" value="{{ $a->tinggi23 }}">
                      <input type="hidden" id="tinggi24" name="tinggi24" value="{{ $a->tinggi24 }}">
                      <td style="width: 40px;"> {{ $a->berat0 }} </td>
                      <td style="width: 40px;">{{ $a->berat1 }} </td>
                      <td style="width: 40px;">{{ $a->berat2 }} </td>
                      <td style="width: 40px;">{{ $a->berat3 }} </td>
                      <td style="width: 40px;">{{ $a->berat4 }} </td>
                      <td style="width: 40px;">{{ $a->berat5 }} </td>
                      <td style="width: 40px;">{{ $a->berat6 }} </td>
                      <td style="width: 40px;">{{ $a->berat7 }} </td>
                      <td style="width: 40px;">{{ $a->berat8 }} </td>
                      <td style="width: 40px;">{{ $a->berat9 }} </td>
                      <td style="width: 40px;">{{ $a->berat10 }} </td>
                      <td style="width: 40px;">{{ $a->berat11 }} </td>
                      <td style="width: 40px;">{{ $a->berat12 }} </td>
                      <td style="width: 40px;">{{ $a->berat13 }} </td>
                      <td style="width: 40px;">{{ $a->berat14 }} </td>
                      <td style="width: 40px;">{{ $a->berat15 }} </td>
                      <td style="width: 40px;">{{ $a->berat16 }} </td>
                      <td style="width: 40px;">{{ $a->berat17 }} </td>
                      <td style="width: 40px;">{{ $a->berat18 }} </td>
                      <td style="width: 40px;">{{ $a->berat19 }} </td>
                      <td style="width: 40px;">{{ $a->berat20 }} </td>
                      <td style="width: 40px;">{{ $a->berat21 }} </td>
                      <td style="width: 40px;">{{ $a->berat22 }} </td>
                      <td style="width: 40px;">{{ $a->berat23 }} </td>
                      <td style="width: 40px;">{{ $a->berat24 }} </td>
                    </tr>
                    @endforeach
                  </table>
                  <canvas id="linegraph2"></canvas>
                  <table class="table" border="2" style="margin-top: -25px; ">

                    <tr>
                      <td style="width: 40px;"> </td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                      <td style="width: 40px;"></td>
                    </tr>

                    <input type="hidden" id="berat0" name="berat0" value="{{ $a->berat0 }}">
                    <input type="hidden" id="berat1" name="berat1" value="{{ $a->berat1 }}">
                    <input type="hidden" id="berat2" name="berat2" value="{{ $a->berat2 }}">
                    <input type="hidden" id="berat3" name="berat3" value="{{ $a->berat3 }}">
                    <input type="hidden" id="berat4" name="berat4" value="{{ $a->berat4 }}">
                    <input type="hidden" id="berat5" name="berat5" value="{{ $a->berat5 }}">
                    <input type="hidden" id="berat6" name="berat6" value="{{ $a->berat6 }}">
                    <input type="hidden" id="berat7" name="berat7" value="{{ $a->berat7 }}">
                    <input type="hidden" id="berat8" name="berat8" value="{{ $a->berat8 }}">
                    <input type="hidden" id="berat9" name="berat9" value="{{ $a->berat9 }}">
                    <input type="hidden" id="berat10" name="berat10" value="{{ $a->berat10 }}">
                    <input type="hidden" id="berat11" name="berat11" value="{{ $a->berat11 }}">
                    <input type="hidden" id="berat12" name="berat12" value="{{ $a->berat12 }}">
                    <input type="hidden" id="berat13" name="berat13" value="{{ $a->berat13 }}">
                    <input type="hidden" id="berat14" name="berat14" value="{{ $a->berat14 }}">
                    <input type="hidden" id="berat15" name="berat15" value="{{ $a->berat15 }}">
                    <input type="hidden" id="berat16" name="berat16" value="{{ $a->berat16 }}">
                    <input type="hidden" id="berat17" name="berat17" value="{{ $a->berat17 }}">
                    <input type="hidden" id="berat18" name="berat18" value="{{ $a->berat18 }}">
                    <input type="hidden" id="berat19" name="berat19" value="{{ $a->berat19 }}">
                    <input type="hidden" id="berat20" name="berat20" value="{{ $a->berat20 }}">
                    <input type="hidden" id="berat21" name="berat21" value="{{ $a->berat21 }}">
                    <input type="hidden" id="berat22" name="berat22" value="{{ $a->berat22 }}">
                    <input type="hidden" id="berat23" name="berat23" value="{{ $a->berat23 }}">
                    <input type="hidden" id="berat24" name="berat24" value="{{ $a->berat24 }}">
                    <input type="hidden" id="tinggi0" name="tinggi0" value="{{ $a->tinggi0 }}">
                    <input type="hidden" id="tinggi1" name="tinggi1" value="{{ $a->tinggi1 }}">
                    <input type="hidden" id="tinggi2" name="tinggi2" value="{{ $a->tinggi2 }}">
                    <input type="hidden" id="tinggi3" name="tinggi3" value="{{ $a->tinggi3 }}">
                    <input type="hidden" id="tinggi4" name="tinggi4" value="{{ $a->tinggi4 }}">
                    <input type="hidden" id="tinggi5" name="tinggi5" value="{{ $a->tinggi5 }}">
                    <input type="hidden" id="tinggi6" name="tinggi6" value="{{ $a->tinggi6 }}">
                    <input type="hidden" id="tinggi7" name="tinggi7" value="{{ $a->tinggi7 }}">
                    <input type="hidden" id="tinggi8" name="tinggi8" value="{{ $a->tinggi8 }}">
                    <input type="hidden" id="tinggi9" name="tinggi9" value="{{ $a->tinggi9 }}">
                    <input type="hidden" id="tinggi10" name="tinggi10" value="{{ $a->tinggi10 }}">
                    <input type="hidden" id="tinggi11" name="tinggi11" value="{{ $a->tinggi11 }}">
                    <input type="hidden" id="tinggi12" name="tinggi12" value="{{ $a->tinggi12 }}">
                    <input type="hidden" id="tinggi13" name="tinggi13" value="{{ $a->tinggi13 }}">
                    <input type="hidden" id="tinggi14" name="tinggi14" value="{{ $a->tinggi14 }}">
                    <input type="hidden" id="tinggi15" name="tinggi15" value="{{ $a->tinggi15 }}">
                    <input type="hidden" id="tinggi16" name="tinggi16" value="{{ $a->tinggi16 }}">
                    <input type="hidden" id="tinggi17" name="tinggi17" value="{{ $a->tinggi17 }}">
                    <input type="hidden" id="tinggi18" name="tinggi18" value="{{ $a->tinggi18 }}">
                    <input type="hidden" id="tinggi19" name="tinggi19" value="{{ $a->tinggi19 }}">
                    <input type="hidden" id="tinggi20" name="tinggi20" value="{{ $a->tinggi20 }}">
                    <input type="hidden" id="tinggi21" name="tinggi21" value="{{ $a->tinggi21 }}">
                    <input type="hidden" id="tinggi22" name="tinggi22" value="{{ $a->tinggi22 }}">
                    <input type="hidden" id="tinggi23" name="tinggi23" value="{{ $a->tinggi23 }}">
                    <input type="hidden" id="tinggi24" name="tinggi24" value="{{ $a->tinggi24 }}">


                    <tr>
                      <td style="width: 40px;"> {{ $a->tinggi0 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi1 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi2 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi3 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi4 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi5 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi6 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi7 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi8 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi9 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi10 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi11 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi12 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi13 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi14 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi15 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi16 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi17 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi18 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi19 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi20 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi21 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi22 }} </td>
                      <td style="width: 40px;">{{ $a->tinggi23 }} </td>
                    </tr>

                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="notification-box">
        <div class="msg-sidebar notifications msg-noti">
          <div class="topnav-dropdown-header">
            <span>Messages</span>
          </div>
          <div class="drop-scroll msg-list-scroll" id="msg_list">
            <ul class="list-box">
              <li>
                <a href="chat.html">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar">R</span>
                    </div>
                    <div class="list-body">
                      <span class="message-author">Richard Miles </span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="chat.html">
                  <div class="list-item new-message">
                    <div class="list-left">
                      <span class="avatar">J</span>
                    </div>
                    <div class="list-body">
                      <span class="message-author">John Doe</span>
                      <span class="message-time">1 Aug</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="chat.html">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar">T</span>
                    </div>
                    <div class="list-body">
                      <span class="message-author"> Tarah Shropshire </span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="chat.html">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar">M</span>
                    </div>
                    <div class="list-body">
                      <span class="message-author">Mike Litorus</span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="chat.html">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar">C</span>
                    </div>
                    <div class="list-body">
                      <span class="message-author"> Catherine Manseau </span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="chat.html">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar">D</span>
                    </div>
                    <div class="list-body">
                      <span class="message-author"> Domenic Houston </span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="chat.html">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar">B</span>
                    </div>
                    <div class="list-body">
                      <span class="message-author"> Buster Wigton </span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="chat.html">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar">R</span>
                    </div>
                    <div class="list-body">
                      <span class="message-author"> Rolland Webber </span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="chat.html">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar">C</span>
                    </div>
                    <div class="list-body">
                      <span class="message-author"> Claire Mapes </span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="chat.html">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar">M</span>
                    </div>
                    <div class="list-body">
                      <span class="message-author">Melita Faucher</span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="chat.html">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar">J</span>
                    </div>
                    <div class="list-body">
                      <span class="message-author">Jeffery Lalor</span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="chat.html">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar">L</span>
                    </div>
                    <div class="list-body">
                      <span class="message-author">Loren Gatlin</span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="chat.html">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar">T</span>
                    </div>
                    <div class="list-body">
                      <span class="message-author">Tarah Shropshire</span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                        adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="topnav-dropdown-footer">
            <a href="chat.html">See all messages</a>
          </div>
        </div>
      </div>

    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="user/assets/js/jquery-3.2.1.min.js"></script>
    <script src="user/assets/js/popper.min.js"></script>
    <script src="user/assets/js/bootstrap.min.js"></script>
    <script src="user/assets/js/jquery.slimscroll.js"></script>
    <script src="user/assets/js/Chart.bundle.js"></script>
    <script src="user/assets/js/chart.js"></script>
    <script src="user/assets/js/app.js"></script>

    <script>
      function printPageArea(areaID) {
        var printContent = document.getElementById(areaID).innerHTML;
        var originalContent = document.body.innerHTML;
        document.body.innerHTML = printContent;
        window.print();

      }
    </script>


    <script>
      // Line Chart
      let berat0 = document.getElementById('berat0').value;
      let berat1 = document.getElementById('berat1').value;
      let berat2 = document.getElementById('berat2').value;
      let berat3 = document.getElementById('berat3').value;
      let berat4 = document.getElementById('berat4').value;
      let berat5 = document.getElementById('berat5').value;
      let berat6 = document.getElementById('berat6').value;
      let berat7 = document.getElementById('berat7').value;
      let berat8 = document.getElementById('berat8').value;
      let berat9 = document.getElementById('berat9').value;
      let berat10 = document.getElementById('berat10').value;
      let berat11 = document.getElementById('berat11').value;
      let berat12 = document.getElementById('berat12').value;
      let berat13 = document.getElementById('berat13').value;
      let berat14 = document.getElementById('berat14').value;
      let berat15 = document.getElementById('berat15').value;
      let berat16 = document.getElementById('berat16').value;
      let berat17 = document.getElementById('berat17').value;
      let berat18 = document.getElementById('berat18').value;
      let berat19 = document.getElementById('berat19').value;
      let berat20 = document.getElementById('berat20').value;
      let berat21 = document.getElementById('berat21').value;
      let berat22 = document.getElementById('berat22').value;
      let berat23 = document.getElementById('berat23').value;
      let berat24 = document.getElementById('berat24').value;
      let tinggi0 = document.getElementById('tinggi0').value;
      let tinggi1 = document.getElementById('tinggi1').value;
      let tinggi2 = document.getElementById('tinggi2').value;
      let tinggi3 = document.getElementById('tinggi3').value;
      let tinggi4 = document.getElementById('tinggi4').value;
      let tinggi5 = document.getElementById('tinggi5').value;
      let tinggi6 = document.getElementById('tinggi6').value;
      let tinggi7 = document.getElementById('tinggi7').value;
      let tinggi8 = document.getElementById('tinggi8').value;
      let tinggi9 = document.getElementById('tinggi9').value;
      let tinggi10 = document.getElementById('tinggi10').value;
      let tinggi11 = document.getElementById('tinggi11').value;
      let tinggi12 = document.getElementById('tinggi12').value;
      let tinggi13 = document.getElementById('tinggi13').value;
      let tinggi14 = document.getElementById('tinggi14').value;
      let tinggi15 = document.getElementById('tinggi15').value;
      let tinggi16 = document.getElementById('tinggi16').value;
      let tinggi17 = document.getElementById('tinggi17').value;
      let tinggi18 = document.getElementById('tinggi18').value;
      let tinggi19 = document.getElementById('tinggi19').value;
      let tinggi20 = document.getElementById('tinggi20').value;
      let tinggi21 = document.getElementById('tinggi21').value;
      let tinggi22 = document.getElementById('tinggi22').value;
      let tinggi23 = document.getElementById('tinggi23').value;
      let tinggi24 = document.getElementById('tinggi24').value;
      var lineChartData = {
        labels: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],
        datasets: [{
            label: "Berat",
            data: [berat0, berat1, berat2, berat3, berat4, berat5, berat6, berat7, berat8, berat9, berat10, berat11, berat12, berat13, berat14, berat15, berat16, berat17, berat18, berat19, berat20, berat21, berat22, berat23, berat24],
            borderColor: "rgba(255, 0, 0, 0.5)",
            tension: 0.4
          },
          // {
          //   label: "Tinggi",
          //   data: [tinggi0, tinggi1, tinggi2, tinggi3, tinggi4, tinggi5, tinggi6, tinggi7, tinggi8, tinggi9, tinggi10, tinggi11, tinggi12, tinggi13, tinggi14, tinggi15, tinggi16, tinggi17, tinggi18, tinggi19, tinggi20, tinggi21, tinggi22, tinggi23, tinggi24],
          //   borderColor: "rgba(0, 255, 0, 0.5)",
          //   tension: 0.5
          // },
          {
            label: "My Second dataset",
            data: [4.8, 6.3, 7.4, 8.4, 9.2, 9.9, 10.4, 10.9, 11.4, 11.8, 12.2, 12.5, 12.9, 13.2, 13.5, 13.9, 14.2, 14.5, 14.8, 15.1, 15.4, 15.7, 16.0, 16.3, 16.7],
            backgroundColor: "rgba(238, 208, 28, 0.5)",
            tension: 0.4,
            fill: 1
          },
          {
            label: "My Three dataset",
            data: [4.2, 5.5, 6.6, 7.5, 8.2, 8.8, 9.3, 9.8, 10.2, 10.6, 10.9, 11.2, 11.5, 11.8, 12.1, 12.4, 12.6, 12.9, 13.2, 13.5, 13.7, 14.0, 14.3, 14.6, 14.9],
            backgroundColor: "rgba(69, 167, 78, 0.5)",
            tension: 0.4,
            fill: 1
          },
          {
            label: "My Three dataset",
            data: [3.7, 4.8, 5.8, 6.6, 7.3, 7.8, 8.2, 8.7, 9.0, 9.3, 9.6, 9.9, 10.1, 10.4, 10.6, 10.9, 11.1, 11.4, 11.6, 11.8, 12.1, 12.3, 12.5, 12.8, 13.0],
            backgroundColor: "rgba(127, 190, 55, 0.5)",
            tension: 0.4,
            fill: 1
          },
          {
            label: "My Three dataset",
            backgroundColor: "rgba(127, 190, 55, 0.5)",
            data: [3.2, 4.2, 5.1, 5.8, 6.4, 6.9, 7.3, 7.6, 8.0, 8.2, 8.5, 8.7, 9.0, 9.2, 9.4, 9.6, 9.8, 10.0, 10.2, 10.4, 10.6, 10.9, 11.1, 11.3, 11.5],
            tension: 0.4,
            fill: 1
          },
          {
            label: "My Three dataset",
            backgroundColor: "rgba(127, 190, 55, 0.5)",
            data: [2.8, 3.7, 4.5, 5.1, 5.6, 6.1, 6.5, 6.8, 7.1, 7.3, 7.5, 7.7, 7.9, 8.1, 8.3, 8.5, 8.7, 8.9, 9.1, 9.3, 9.4, 9.6, 9.8, 10.0, 10.2],
            tension: 0.4,
            fill: 1
          },
          {
            label: "My Three dataset",
            backgroundColor: "rgba(127, 190, 55, 0.5)",
            data: [2.4, 3.2, 4.0, 4.5, 4.9, 5.4, 5.7, 6.0, 6.3, 6.5, 6.7, 6.9, 7.0, 7.2, 7.4, 7.6, 7.7, 7.9, 8.1, 8.2, 8.4, 8.5, 8.7, 8.9, 9.0],
            tension: 0.4,
            fill: 1
          },
          {
            label: "My Seven dataset",
            fill: false,
            // backgroundColor: "rgb(1, 1, 1)",
            data: [2.4, 3.2, 4.0, 4.5, 4.9, 5.4, 5.7, 6.0, 6.3, 6.5, 6.7, 6.9, 7.0, 7.2, 7.4, 7.6, 7.7, 7.9, 8.1, 8.2, 8.4, 8.5, 8.7, 8.9, 9.0]
          },
          {
            label: "My Second dataset",
            data: [2.0, 2.7, 3.4, 4.0, 4.3, 4.8, 5.1, 5.4, 5.6, 5.8, 6.0, 6.1, 6.3, 6.4, 6.6, 6.8, 6.9, 7.0, 7.2, 7.4, 7.5, 7.6, 7.8, 7.9, 8.1],
            backgroundColor: "rgba(238, 208, 28, 0.5)",
            tension: 0.4,
            fill: 1
          }
        ]
      };
      var lineChartData2 = {
        labels: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],
        datasets: [{
            label: "Berat",
            data: [tinggi0, tinggi1, tinggi2, tinggi3, tinggi4, tinggi5, tinggi6, tinggi7, tinggi8, tinggi9, tinggi10, tinggi11, tinggi12, tinggi13, tinggi14, tinggi15, tinggi16, tinggi17, tinggi18, tinggi19, tinggi20, tinggi21, tinggi22, tinggi23, tinggi24],
            borderColor: "rgba(255, 0, 0, 0.5)",
            tension: 0.4
          },
          // {
          //   label: "Tinggi",
          //   data: [tinggi0, tinggi1, tinggi2, tinggi3, tinggi4, tinggi5, tinggi6, tinggi7, tinggi8, tinggi9, tinggi10, tinggi11, tinggi12, tinggi13, tinggi14, tinggi15, tinggi16, tinggi17, tinggi18, tinggi19, tinggi20, tinggi21, tinggi22, tinggi23, tinggi24],
          //   borderColor: "rgba(0, 255, 0, 0.5)",
          //   tension: 0.5
          // },
          {
            label: "My Second dataset",
            data: [4.8, 6.3, 7.4, 8.4, 9.2, 9.9, 10.4, 10.9, 11.4, 11.8, 12.2, 12.5, 12.9, 13.2, 13.5, 13.9, 14.2, 14.5, 14.8, 15.1, 15.4, 15.7, 16.0, 16.3, 16.7],
            backgroundColor: "rgba(238, 208, 28, 0.5)",
            tension: 0.4,
            fill: 1
          },
          {
            label: "My Three dataset",
            data: [4.2, 5.5, 6.6, 7.5, 8.2, 8.8, 9.3, 9.8, 10.2, 10.6, 10.9, 11.2, 11.5, 11.8, 12.1, 12.4, 12.6, 12.9, 13.2, 13.5, 13.7, 14.0, 14.3, 14.6, 14.9],
            backgroundColor: "rgba(69, 167, 78, 0.5)",
            tension: 0.4,
            fill: 1
          },
          {
            label: "My Three dataset",
            data: [3.7, 4.8, 5.8, 6.6, 7.3, 7.8, 8.2, 8.7, 9.0, 9.3, 9.6, 9.9, 10.1, 10.4, 10.6, 10.9, 11.1, 11.4, 11.6, 11.8, 12.1, 12.3, 12.5, 12.8, 13.0],
            backgroundColor: "rgba(127, 190, 55, 0.5)",
            tension: 0.4,
            fill: 1
          },
          {
            label: "My Three dataset",
            backgroundColor: "rgba(127, 190, 55, 0.5)",
            data: [3.2, 4.2, 5.1, 5.8, 6.4, 6.9, 7.3, 7.6, 8.0, 8.2, 8.5, 8.7, 9.0, 9.2, 9.4, 9.6, 9.8, 10.0, 10.2, 10.4, 10.6, 10.9, 11.1, 11.3, 11.5],
            tension: 0.4,
            fill: 1
          },
          {
            label: "My Three dataset",
            backgroundColor: "rgba(127, 190, 55, 0.5)",
            data: [2.8, 3.7, 4.5, 5.1, 5.6, 6.1, 6.5, 6.8, 7.1, 7.3, 7.5, 7.7, 7.9, 8.1, 8.3, 8.5, 8.7, 8.9, 9.1, 9.3, 9.4, 9.6, 9.8, 10.0, 10.2],
            tension: 0.4,
            fill: 1
          },
          {
            label: "My Three dataset",
            backgroundColor: "rgba(127, 190, 55, 0.5)",
            data: [2.4, 3.2, 4.0, 4.5, 4.9, 5.4, 5.7, 6.0, 6.3, 6.5, 6.7, 6.9, 7.0, 7.2, 7.4, 7.6, 7.7, 7.9, 8.1, 8.2, 8.4, 8.5, 8.7, 8.9, 9.0],
            tension: 0.4,
            fill: 1
          },
          {
            label: "My Seven dataset",
            fill: false,
            // backgroundColor: "rgb(1, 1, 1)",
            data: [2.4, 3.2, 4.0, 4.5, 4.9, 5.4, 5.7, 6.0, 6.3, 6.5, 6.7, 6.9, 7.0, 7.2, 7.4, 7.6, 7.7, 7.9, 8.1, 8.2, 8.4, 8.5, 8.7, 8.9, 9.0]
          },
          {
            label: "My Second dataset",
            data: [2.0, 2.7, 3.4, 4.0, 4.3, 4.8, 5.1, 5.4, 5.6, 5.8, 6.0, 6.1, 6.3, 6.4, 6.6, 6.8, 6.9, 7.0, 7.2, 7.4, 7.5, 7.6, 7.8, 7.9, 8.1],
            backgroundColor: "rgba(238, 208, 28, 0.5)",
            tension: 0.4,
            fill: 1
          }
        ]
      };
      var linectx = document.getElementById('linegraph').getContext('2d');
      var linectx2 = document.getElementById('linegraph2').getContext('2d');
      window.myLine = new Chart(linectx, {
        type: 'line',
        data: lineChartData,
        options: {
          responsive: true,
          legend: {
            display: false,
          },
          tooltips: {
            mode: 'index',
            intersect: false,
          }
        }
      });
      window.myLine = new Chart(linectx2, {
        type: 'line',
        data: lineChartData2,
        options: {
          responsive: true,
          legend: {
            display: false,
          },
          tooltips: {
            mode: 'index',
            intersect: false,
          }
        }
      });
    </script>

</body>


<!-- index22:59-->

</html>