<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between" style="background-color: #202D42">
            <a href="{{ route("website.dashboard") }}" class="text-nowrap logo-img">
                <img src="{{ asset("uploads/logos/" . $setting->logo) }}" width="100" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ri-close-large-line ri-xl"></i>
            </div>
        </div>

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" style="background-color: #202D42" data-simplebar>

            <ul id="sidebarnav" class="mt-4">

                <li class="sidebar-item">
                    <a href="{{ route("website.dashboard") }}" class="sidebar-link aktext" aria-expanded="false">
                        <span><i class="ri-home-2-line ri-xl"></i></span>
                        <span class="hide-menu">Yönetim Paneli</span>
                    </a>
                </li>

                <hr>



                <li class="sidebar-item">
                    <a href="{{ route("website.categories.index") }}" class="sidebar-link aktext" aria-expanded="false">
                        <span><i class="ri-dashboard-line ri-xl"></i></span>
                        <span class="hide-menu">Kategori</span>
                    </a>
                </li>


                <li class="sidebar-item">
                    <a href="{{ route("website.tadilats.index") }}" class="sidebar-link aktext" aria-expanded="false">
                        <span><i class="ri-draft-line ri-xl"></i></span>
                        <span class="hide-menu">Tadilat</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route("website.mimaris.index") }}" class="sidebar-link aktext" aria-expanded="false">
                        <span><i class="ri-draft-line ri-xl"></i></span>
                        <span class="hide-menu">Mimari</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route("website.izolasyons.index") }}" class="sidebar-link aktext" aria-expanded="false">
                        <span><i class="ri-draft-line ri-xl"></i></span>
                        <span class="hide-menu">İzolasyon</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route("website.settings.index") }}" class="sidebar-link aktext" aria-expanded="false">
                        <span><i class="ri-equalizer-line ri-xl"></i></span>
                        <span class="hide-menu">Ayarlar</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route("home") }}" target="_blank" class="sidebar-link aktext" aria-expanded="false">
                        <span><i class="ri-ie-line ri-xl"></i></span>
                        <span class="hide-menu">Web Sitesi</span>
                    </a>
                </li>


                <hr>
            </ul>

        </nav>
        <!-- Sidebar navigation-->

        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
