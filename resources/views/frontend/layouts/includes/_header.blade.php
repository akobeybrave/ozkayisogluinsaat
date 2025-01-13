<header class="header" data-header>
    <div class="container">


        <h4 class="brand">
            ÖZ KAYIŞOĞLU İNŞAAT
        </h4>



        <nav class="navbar" data-navbar>

            <!-- navbar-top -->
            <div class="navbar-top">
                <h4 class="mobile-brand">
                    ÖZ KAYIŞOĞLU İNŞAAT
                </h4>

                <button class="nav-toogle-btn" aria-label="close menu" data-nav-toggler>
                    <i class="ri-close-large-line ri-xl"></i>
                </button>
            </div>
            <!-- navbar-top -->


            <!-- navbar-list -->
            <ul class="navbar-list">
                <li class="navbar-item"><a href="{{ route('home') }}" class="navbar-link active">ANASAYFA</a></li>
                <li class="navbar-item"><a href="{{ route('tadilat') }}" class="navbar-link">TADİLAT</a></li>
                <li class="navbar-item"><a href="{{ route('cizim') }}" class="navbar-link">MİMARİ ÇİZİM</a></li>
                <li class="navbar-item"><a href="{{ route('izolasyon') }}" class="navbar-link">İZOLASYON</a></li>
                <li class="navbar-item"><a href="{{ route('about') }}" class="navbar-link">HAKKIMIZDA</a></li>
                <li class="navbar-item"><a href="{{ route('contact') }}" class="navbar-link">İLETİŞİM</a></li>

            </ul>
            <!-- navbar-list -->


            @auth
                @php
                    $dashboard = '';
                        if(auth()->user()->panel == "admin"){
                            $dashboard = '/admin/dashboard';
                            }
                        elseif(auth()->user()->panel == "website"){
                            $dashboard = '/website/dashboard';
                            }
                        else{
                            $dashboard = '';
                            }
                @endphp
                <div class="login-btn">
                    <a href="{{ $dashboard }}"><i class="ri-dashboard-2-line ri-xl"></i></a>
                </div>

            @else
                    <div class="login-btn">
                        <a href="{{ route('login') }}"><i class="ri-login-box-line ri-xl"></i></a>
                    </div>
            @endauth



        </nav>

        <!-- toggle-btn -->
        <button class="nav-toggle-btn" aria-label="open menu" data-nav-toggler>
            <i class="ri-menu-3-line" name="menu-outline" aria-hidden="true"></i>
        </button>
        <!-- toggle-btn -->

        <!-- overlay -->
        <div class="overlay" data-overlay data-nav-toggler></div>
        <!-- overlay -->

    </div>
</header>
