<!-- header top -->
<div class="brand-image d-flex justify-content-center bg-light">
            <img src="{{asset('frontend/images/main-shubban-logo.png')}}" alt="brand-image">
        </div>
        <nav uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light text-derk; top: 100" class="uk-navbar-container navbar uk-navbars navbar-expand-lg nav-color" uk-navbar>
            <div class="container">
                <a href="">
                    <img class="navbar-brand logo-size" src="{{asset('frontend/images/logo.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-target="#mynav" data-bs-toggle="collapse">
                    <span class="uk-navbar-toggle uk-navbar-toggle-animate" uk-navbar-toggle-icon href=""></span>
                </button>



                <div class="collapse navbar-collapse" id="mynav">
                    <ul class="navbar-nav ml-auto main-nav">
                        <li class="nav-item">
                            <a class="nav-link {{$elementActive == 'home' ? 'menu-active' : '' }}" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item dd-btn">
                            <a class="nav-link" href="#">About us
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <div class="dd-menu">
                                <a href="">Jamiyat Shubbane Ahl-Al-Hadith Bangladesh</a>
                                <a href="">Concern Institutions</a>
                            </div>
                        </li>
                        <li class="nav-item dd-btn">
                            <a class="nav-link" href="#">Activities
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <div class="dd-menu">
                                <a href="about.html">Central Council, Conferences & Seminars</a>
                                <a href="course-derail.html">District Councils</a>
                                <a href="elaments.html">Training & Workshops</a>
                                <a href="elaments.html">Essay & Quiz Competition</a>
                            </div>
                        </li>
                        <li class="nav-item dd-btn">
                            <a class="nav-link" href="#">Library & Publications
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <div class="dd-menu">
                                <a href="#">Books/Articles</a>
                                <!-- <a href="#">blog details</a> -->
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$elementActive == 'newsGallery' ? 'menu-active' : '' }}" href="{{route('newsGallery')}}">News & Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$elementActive == 'archives' ? 'menu-active' : '' }}" href="{{route('archives')}}">Archives</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Forms & syllabus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$elementActive == 'contactUs' ? 'menu-active' : '' }}" href="{{route('contactUs')}}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>