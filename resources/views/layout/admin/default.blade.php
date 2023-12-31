<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modernize By Rokan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="/assets/vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="/assets/vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/assets/img/favicon.ico">
</head>


<body>

<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-inner">
        <!-- Sidebar Header    -->
        <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img class="img-fluid rounded-circle avatar mb-3" src="http://rokan.webasetech.com/wp-content/uploads/2022/12/passport_size_image.jpg" alt="person">
                <h2 class="h5 text-white text-uppercase mb-0">Hasan Uddin Rokan</h2>
                <p class="text-sm mb-0 text-muted">Software Engineer</p>
            </div>
            <a class="brand-small text-center" href="#">
                <p class="h1 m-0">MC</p></a>
        </div>
        @include('layout.admin.nav')
    </div>
</nav>

<div class="page">
    <!-- navbar-->
    <header class="header mb-5 pb-3">
        <nav class="nav navbar fixed-top">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="d-flex align-items-center"><a class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900" id="toggle-btn" href="#">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy text-white">
                                <use xlink:href="#menu-1"> </use>
                            </svg></a><a class="navbar-brand ms-2" href="#">
                            <div class="brand-text d-none d-md-inline-block text-uppercase letter-spacing-0"><span class="text-white fw-normal text-xs">Modernize </span><strong class="text-primary text-sm">CMS</strong></div></a></div>
                    <ul class="nav-menu mb-0 list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Notifications dropdown-->
                        <li class="nav-item dropdown"> <a class="nav-link text-white position-relative" id="notifications" rel="nofollow" data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                    <use xlink:href="#chart-1"> </use>
                                </svg><span class="badge bg-warning">12</span></a>
                            <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="notifications">
                                <li><a class="dropdown-item py-3" href="#!">
                                        <div class="d-flex">
                                            <div class="icon icon-sm bg-blue">
                                                <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                                    <use xlink:href="#envelope-1"> </use>
                                                </svg>
                                            </div>
                                            <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">You have 6 new messages </span><small class="small text-gray-600">4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a class="dropdown-item py-3" href="#!">
                                        <div class="d-flex">
                                            <div class="icon icon-sm bg-green">
                                                <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                                    <use xlink:href="#chats-1"> </use>
                                                </svg>
                                            </div>
                                            <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a class="dropdown-item py-3" href="#!">
                                        <div class="d-flex">
                                            <div class="icon icon-sm bg-orange">
                                                <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                                    <use xlink:href="#checked-window-1"> </use>
                                                </svg>
                                            </div>
                                            <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">Server Rebooted</span><small class="small text-gray-600">8 minutes ago</small></div>
                                        </div></a></li>
                                <li><a class="dropdown-item py-3" href="#!">
                                        <div class="d-flex">
                                            <div class="icon icon-sm bg-green">
                                                <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                                    <use xlink:href="#chats-1"> </use>
                                                </svg>
                                            </div>
                                            <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-xs text-gray-600">New 2 WhatsApp messages</span><small class="small text-gray-600">10 minutes ago</small></div>
                                        </div></a></li>
                                <li><a class="dropdown-item all-notifications text-center" href="#!"> <strong class="text-xs text-gray-600">view all notifications                                            </strong></a></li>
                            </ul>
                        </li>
                        <!-- Messages dropdown-->
                        <li class="nav-item dropdown"> <a class="nav-link text-white position-relative" id="messages" rel="nofollow" data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                    <use xlink:href="#envelope-1"> </use>
                                </svg><span class="badge bg-info">10</span></a>
                            <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="messages">
                                <li><a class="dropdown-item d-flex py-3" href="#!"> <img class="img-fluid rounded-circle flex-shrink-0 avatar shadow-0" src="/assets/img/avatar-1.jpg" alt="..." width="45">
                                        <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe</span><small class="small text-gray-600"> Sent You Message</small>
                                            <p class="mb-0 small text-gray-600">3 days ago at 7:58 pm - 10.06.2014</p>
                                        </div></a></li>
                                <li><a class="dropdown-item d-flex py-3" href="#!"> <img class="img-fluid rounded-circle flex-shrink-0 avatar shadow-0" src="/assets/img/avatar-2.jpg" alt="..." width="45">
                                        <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe</span><small class="small text-gray-600"> Sent You Message</small>
                                            <p class="mb-0 small text-gray-600">3 days ago at 7:58 pm - 10.06.2014</p>
                                        </div></a></li>
                                <li><a class="dropdown-item d-flex py-3" href="#!"> <img class="img-fluid rounded-circle flex-shrink-0 avatar shadow-0" src="/assets/img/avatar-3.jpg" alt="..." width="45">
                                        <div class="ms-3"><span class="h6 d-block fw-normal mb-1 text-sm text-gray-600">Jason Doe</span><small class="small text-gray-600"> Sent You Message</small>
                                            <p class="mb-0 small text-gray-600">3 days ago at 7:58 pm - 10.06.2014</p>
                                        </div></a></li>
                                <li><a class="dropdown-item text-center" href="#!"> <strong class="text-xs text-gray-600">Read all messages       </strong></a></li>
                            </ul>
                        </li>
                        <!-- Languages dropdown    -->
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-white text-sm" id="languages" rel="nofollow" data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block ms-2">English</span></a>
                            <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="languages">
                                <li><a class="dropdown-item" rel="nofollow" href="#!"> <img class="me-2" src="/assets/img/flags/16/DE.png" alt="English"><span>German</span></a></li>
                                <li><a class="dropdown-item" rel="nofollow" href="#!"> <img class="me-2" src="/assets/img/flags/16/FR.png" alt="English"><span>French                                                         </span></a></li>
                            </ul>
                        </li>
                        <!-- Log out-->
                        <li class="nav-item"><a class="nav-link text-white text-sm ps-0" href="#"> <span class="d-none d-sm-inline-block">Logout</span>
                                <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                    <use xlink:href="#security-1"> </use>
                                </svg></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="main-footer w-100 position-absolute bottom-0 start-0 py-2" style="background: #222">
        <div class="container-fluid">
            <div class="row text-center gy-3">
                <div class="col-sm-6 text-sm-start">
                    <p class="mb-0 text-sm text-gray-600">Your company &copy; 2017-2022</p>
                </div>
                <div class="col-sm-6 text-sm-end">
                    <p class="mb-0 text-sm text-gray-600">Create by <a href="http://rokan.bio/" class="external">Hasan Uddin Rokan</a></p>
                    <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
                </div>
            </div>
        </div>
    </footer>
</div>





<!-- JavaScript files-->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/just-validate/js/just-validate.min.js"></script>
<script src="/assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="/assets/vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
<!-- Main File-->
<script src="/assets/js/front.js"></script>
<script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite -
    //   see more here
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {

        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
        }
    }

    injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    function displayAlert(message, type) {
        var alertContainer = document.getElementById('alert-container');

        var alertElement = document.createElement('div');
        alertElement.classList.add('alert');
        alertElement.classList.add('alert-' + type);
        alertElement.classList.add('d-flex');
        alertElement.classList.add('align-items-left');
        alertElement.setAttribute('role', 'alert');
        alertElement.innerText = message;

        alertContainer.appendChild(alertElement);

        setTimeout(function() {
            alertElement.remove();
        }, 5000);
    }

</script>
@yield('myscript')
</body>

</html>
