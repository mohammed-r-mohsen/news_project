
<?php
/*
session_start();
if ($_SESSION["lastpage"] == "Home.php")

{
    */
    ?>
<html class="no-js" lang="en"><!--<![endif]--><head>
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

    <link rel="stylesheet" href="{{ asset('controle/assets/css/style.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet" type="text/css">



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
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
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
                        <h1>Update Category</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">

                    <!--/.col-->

























                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header">EDit Category</div>
                                                        <div class="card-body card-block">

                                                            <form action="{{ route('categoryUpdate', ['id'=>$Category->id]) }}" method="post" class="">
                                                               {{ csrf_field() }}
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                        <input type="text" id="username" value="{{$Category->name}}" name="UpdateCategory" placeholder="{{$Category->name}}" class="form-control">
                                                                    </div>
                                                                </div>


                                                                <div class="form-actions form-group"><button type="submit" name="updatesubmit" class="btn btn-success btn-sm">Submit</button></div>
                                                            </form>
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

                            <script src="{{ asset('controle/vendors/jquery-validation/dist/jquery.validate.min.js') }}"></script>
                            <script src="{{ asset('controle/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js') }}"></script>

                            <script src="{{ asset('controle/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
                            <script src="{{ asset('controle/assets/js/main.js') }}"></script>


</body></html>

<?php
/*
  }
  else {
    return header("Location:http://localhost/news-project/news-project/login-form-v3/Login_v3/index.php");
  }

  */
?>
