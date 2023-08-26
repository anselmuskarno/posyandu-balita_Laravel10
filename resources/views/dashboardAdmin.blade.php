<!DOCTYPE html>
<html lang="en">



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
                        <li class="active">
                            <a href="/dashboardAdmin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="">
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
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>1</h3>
                                <span class="widget-title1">Admin <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3> {{ $totalBalita }} </h3>
                                <span class="widget-title2">Balita <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3> {{ $totalUser }} </h3>
                                <span class="widget-title3">Pengguna <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3> {{ $totalBalita }} </h3>
                                <span class="widget-title4">Diagram<i class="fa fa-check" aria-hidden="true"></i></span>
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
    <script src="user/assets/js/jquery.slimscroll.js"></script>
    <script src="user/assets/js/Chart.bundle.js"></script>
    <script src="user/assets/js/chart.js"></script>
    <script src="user/assets/js/app.js"></script>

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

        var linectx = document.getElementById('linegraph').getContext('2d');

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
    </script>

</body>



</html>