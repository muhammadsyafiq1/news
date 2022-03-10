<!-- Header news -->
<header class="bg-light">
    @include('includes.nav-top')
    <!-- Navbar  -->
    <!-- Navbar menu  -->
<div class="navigation-wrap navigation-shadow bg-white">
<nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
    <div class="container">
        <div class="offcanvas-header">
            <div data-toggle="modal" data-target="#modal_aside_right" class="btn-md">
                <span class="navbar-toggler-icon"></span>
            </div>
        </div>
        <figure class="mb-0 mx-auto">
            <a href="/homepage-v1.html">
                <img src="/news/images/placeholder/logo.jpg" alt="" class="img-fluid logo">
            </a>
        </figure>

        <div class="collapse navbar-collapse justify-content-between" id="main_nav99">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}"> HOME </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown"> About </a>
                    <ul class="dropdown-menu dropdown-menu-left">
                        <li><a class="dropdown-item" href="/about-us.html"> Style 1 </a>
                        </li>
                        <li><a class="dropdown-item" href="/about-us-v1.html"> Style 2 </a></li>

                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#"> Category </a></li>
                <li class="nav-item"><a class="nav-link" href="/contact.html"> contact </a></li>
            </ul>
            <!-- Search content bar.// -->
        </div> <!-- navbar-collapse.// -->
    </div>
</nav>
</div>
<!-- End Navbar menu  -->

            <!-- Navbar sidebar menu  -->
            <div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-aside" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="widget__form-search-bar  ">
                <div class="row no-gutters">
                    <div class="col">
                        <input class="form-control border-secondary border-right-0 rounded-0" value="" placeholder="Search">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <nav class="list-group list-group-flush">
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle text-dark" href="#" data-toggle="dropdown"> Home
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle  text-dark" href="#" data-toggle="dropdown"> About
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a class="dropdown-item" href="/about-us.html"> Style 1 </a>
                            </li>
                            <li><a class="dropdown-item" href="/about-us-v1.html"> Style 2 </a></li>

                        </ul>
                    </li>


                    <li class="nav-item"><a class="nav-link  text-dark" href="#"> Category </a></li>
                    <li class="nav-item"><a class="nav-link  text-dark" href="/contact.html"> contact </a></li>
                </ul>

            </nav>
        </div>
        <div class="modal-footer">
            <p>© 2020 <a href="http://retenvi.com" title="Premium WordPress news &amp; magazine theme">Magzrenvi</a>
                -
                Premium template news, blog & magazine &amp;
                magazine theme by <a href="http://retenvi.com" title="retenvi">RETENVI.COM</a>.</p>
        </div>
    </div>
</div> <!-- modal-bialog .// -->
</div> <!-- modal.// -->
<!-- End Navbar sidebar menu  -->
    <!-- End Navbar  -->
</header>