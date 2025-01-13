@extends('website.layouts.website')

@section('title', 'Ayarlar')



@section('content')


    <div class="card">
        <div class="card-body">

            <!-- Nav tabs -->
            <ul class="nav nav-pills nav-fill mt-4" role="tablist">
                <li class="nav-item">
                    <a
                        class="nav-link {{ $activeTab === 'site' ? 'active' : '' }}"
                        data-bs-toggle="tab"
                        href="#navpill-111"
                        role="tab"
                    >
                        <span>Site Bilgileri</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link {{ $activeTab === 'contact' ? 'active' : '' }}"
                        data-bs-toggle="tab"
                        href="#navpill-222"
                        role="tab"
                    >
                        <span>İletişim Bilgileri</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link {{ $activeTab === 'media' ? 'active' : '' }}"
                        data-bs-toggle="tab"
                        href="#navpill-333"
                        role="tab"
                    >
                        <span>Logo ve Favicon</span>
                    </a>
                </li>
            </ul>


            <!-- Tab panes -->
            <div class="tab-content border mt-2">


                @include("website.setting.includes.site-tab")

                @include("website.setting.includes.iletisim-tab")

                @include("website.setting.includes.media-tab")


            </div>
        </div>
    </div>

@endsection
