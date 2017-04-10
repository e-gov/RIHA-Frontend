<!DOCTYPE html>
<html lang="et">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RIHA HTML prototype</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="bower_components/jquery-ui/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="bower_components/datatables/media/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="build/app.css">
</head>
<body>
    <div id="wrap">
        <header id="header">
            <div class="nav-overlay"></div>
            <div class="header-top hidden-xs-down">
                <div class="container">
                    <div class="left">
                        <div class="btn-group hidden-sm-down">
                            <button type="button" class="btn btn-outline-primary btn-sm"><span class="fa fa-universal-access"></span><span>Ligipääsetavus</span></button>
                        </div>
                        <div class="links hidden-sm-down">
                            <a href="#">Tagasiside</a>
                        </div>
                        <div id="langbar">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">In English</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">по-русски</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right d-flex align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-sm"><span>Logi Sisse</span><span class="fa fa-user"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <nav class="navbar  navbar-toggleable-xl">
                    <div class="container">
                        <a class="navbar-brand" href="_index.php"><img src="images/base/logo.svg" width="200" height="35" alt="Logo"></a>
                        <nav class="collapse navbar-collapse" id="mainmenu">
                            <ul class="navbar-nav mr-0 mr-xl-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Avaleht <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Kõik toimingud</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Omanikule</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kooskõlastajale</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Arendajale</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Abi</a>
                                </li>
                            </ul>
                            <form class="form-inline search-bar">
                                <label for="search" class="hidden-xs-up">Otsing</label>
                                <input id="search" class="form-control" type="text" placeholder="Search">
                            </form>
                        </nav>
                        <button class="menu-toggle">
                       <span></span>
                   </button>
                    </div>
                </nav>
            </div>
        </header>
        <div class="header-alert bg-primary">
            <div class="container">
                <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span class="fa fa-times"></span>
  </button>
                    <p class="h3 alert-heading">Planeeritud hooldustööd 14. mai 2015</p>
                    <p class="mb-0">Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                </div>
            </div>
        </div>
        <main id="content" class="container">
