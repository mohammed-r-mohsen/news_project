
<?php
/*
include '../class/NewsDB.php';

session_start();
if ($_SESSION["lastpage"] == "Home.php")

  {
    */
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('controle/apple-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('controle/favicon.ico') }}">


    <link rel="stylesheet" href="{{ asset('controle/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('controle/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('controle/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('controle/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('controle/vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('controle/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('controle/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('controle/assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->

    @include('inc.nav')
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>

                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('controle/images/admin.jpg') }}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a href="../class/logout.php" class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>News</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Author</th>

                                        </tr>
                                    </thead>
                                    <tbody>




                                     @foreach ($News as $item)




                                        <tr>
                                        <td>{{$item['Title']}}</td>
                                        <td>{{$Category->find($item['categoryid'])['name']}}  </td>
                                        <td>{{$item['authorid']}}</td>
                                        <td>
                                        <a  href='{{ route('NewsDelete', ['id'=>$item['id']]) }}'><span class='ti-trash'></span><span class='icon-name'></span></a>
                                        <a  href='{{ route('NewsEdit', ['id'=>$item['id']]) }}'><span class='ti-settings'></span><span class='icon-name'></span></a>

                                        </td>
                                        </tr>
                                     @endforeach




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{ asset('controle/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('controle/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('controle/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('controle/assets/js/main.js') }}"></script>


    <script src="{{ asset('controle/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('controle/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('controle/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('controle/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('controle/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('controle/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('controle/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('controle/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('controle/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('controle/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('controle/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>


</body>

</html>
<?php
/*
}
  else {
    return header("Location:http://localhost/news-project/news-project/login-form-v3/Login_v3/index.php");
  }
  */
?>
