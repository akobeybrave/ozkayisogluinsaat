<header class="app-header" style="background-color: #202D42">
    <nav class="navbar navbar-expand-lg navbar-dark">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                    <i class="ri-menu-fold-line ri-lg"></i>
                </a>
            </li>
        </ul>


        <div class="d-block d-lg-none">
            <img src="{{ asset("uploads/logos/" . $setting->logo) }}" width="32" alt="" />
        </div>

        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="p-2">
        <i class="ri-menu-line ri-xl"></i>
      </span>
        </button>

        <!-- user -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="d-flex align-items-center justify-content-between">

                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                    <li>
                        <span class="mb-1 d-block text-dark">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">

                            <div class="d-flex align-items-center">
                                <div class="user-profile-img">
                                    <img src="{{ asset("uploads/logos/" . Auth::user()->image) }}" class="rounded-circle" width="35" height="35" alt="" />
                                </div>
                            </div>
                        </a>

                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                            <div class="profile-dropdown position-relative" data-simplebar>
                                <div class="py-3 px-7 pb-0">
                                    <h5 class="mb-0 fs-5 fw-semibold">Kullanıcı Profili</h5>
                                </div>
                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                    <div class="">
                                        <h5 class="mb-2 fs-3">{{ \Illuminate\Support\Facades\Auth::user()->name }}</h5>
                                        <span class="mb-1 d-block text-dark">{{ \Illuminate\Support\Facades\Auth::user()->panel }}</span>
                                        <p class="mb-0 d-flex text-dark align-items-center gap-2">
                                            {{ \Illuminate\Support\Facades\Auth::user()->email }}
                                        </p>

                                    </div>
                                </div>


                                <div class="message-body mt-2">
                                    <a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="py-2 px-7 mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M5 22C4.44772 22 4 21.5523 4 21V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V6H18V4H6V20H18V18H20V21C20 21.5523 19.5523 22 19 22H5ZM18 16V13H11V11H18V8L23 12L18 16Z"></path></svg>
                                        ÇIKIŞ
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf
                                    </form>
                                </div>

                            </div>
                        </div>

                    </li>

                </ul>
            </div>
        </div>
        <!-- user -->


    </nav>
</header>
<button type="button" class="">
    Success
</button>
