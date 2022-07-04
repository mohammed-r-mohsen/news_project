
<?php

/*
  include '../class/NewsDB.php';
  session_start();
  if ($_SESSION["lastpage"] == "Home.php")

  {
*/
  ?>
<!--<![endif]--><head>
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



<link id="avast_os_ext_custom_font" href="moz-extension://7736b11c-9332-48fd-b29e-b51fbfa97c44/common/ui/fonts/fonts.css" rel="stylesheet" type="text/css"></head>

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
                        <h1>Dashboard</h1>
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
                                                    <div class="card-header">
                                                        <strong>Basic Form</strong> Elements
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <?php
                                                        /*
                                                        $row = NewsDB::GetnewsDB()->GetRowData($_GET['title']);
                                                        foreach ($row as $item) {
*/

                                                        ?>
                                                        <form action="{{ route('NewsUpdate', ['id'=>$News['id']]) }}" method="post"  class="form-horizontal" enctype="multipart/form-data" >
                                                            {{ csrf_field() }}
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="title" placeholder="{{$News['Title']}}" value="{{$News['Title']}}" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                                            </div>



                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">News-body</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="textarea-input" value="{{$News['body']}}" id="textarea-input" rows="9" placeholder="{{$News['body']}}" class="form-control">{{$News['body']}}</textarea></div>
                                                             </div>


                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"></div>
                                                                    <div class="col-12 col-md-9">

                                                                    </div>
                                                                </div>






                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">News-Img</label></div>
                                                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="img" class="form-control-file" value="{{$News['img']}}"></div>
                                                                </div>
                                                                <div class="card-footer">
                                                        <button type="submit" name="updatenew" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                    </div>
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


</body>
<?php
/*
  }
  else {
    return header("Location:http://localhost/news-project/news-project/login-form-v3/Login_v3/index.php");
  }
  */
?>
