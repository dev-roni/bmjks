
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top" id="mainNavbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{route('home')}}">
                            <i class="fas fa-home me-2"></i>হোম
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           কমিটি
                        </a>
                        <ul class="dropdown-menu dropdown-menu-animated">
                            <li><a class="dropdown-item" href="{{route('commitee')}}">
                                <i class="fas fa-users me-2"></i>প্রধান কমিটি
                            </a></li>
                            <li><a class="dropdown-item" href="{{route('commitee')}}">
                                <i class="fas fa-sitemap me-2"></i>শাখা কমিটি ১
                            </a></li>
                            <li><a class="dropdown-item" href="{{route('commitee')}}">
                                <i class="fas fa-sitemap me-2"></i>শাখা কমিটি ২
                            </a></li>
                            <li><a class="dropdown-item" href="comitee.html">
                                <i class="fas fa-sitemap me-2"></i>শাখা কমিটি ৩
                            </a></li>
                            <li><a class="dropdown-item" href="#branch-committee">
                                <i class="fas fa-sitemap me-2"></i>শাখা কমিটি ৪
                            </a></li>
                            <li><a class="dropdown-item" href="#branch-committee">
                                <i class="fas fa-sitemap me-2"></i>শাখা কমিটি ৫
                            </a></li>
                            <li><a class="dropdown-item" href="#advisory-committee">
                                উপদেষ্টা কমিটি
                            </a></li>
                            <li><a class="dropdown-item" href="#lifetime-member">
                                আজীবন সদস্য
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{route('notice')}}">
                            নোটিশ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="#news">
                            সংবাদ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{route('contact')}}">
                            যোগাযোগ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{route('about')}}">
                            আমাদের সম্পর্কে
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{route('techteam')}}">
                            টেক টিম
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
