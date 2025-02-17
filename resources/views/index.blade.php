@extends("layouts.main")

@section('content')
<div class="content-wrapper">
    <div class="row" id="proBanner">
        <div class="col-12">
            <span class="d-flex align-items-center purchase-popup">
                @auth
                <p>Selamat datang {{ auth()->user()->name }}</p>
                @endauth
                <a href="/view-jenis" class="btn download-button purchase-button ml-auto">Kelola Arsip</a>
                <i class="mdi mdi-close" id="bannerClose"></i>
            </span>
        </div>
    </div>
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
            </span> Dashboard
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('thema/assets/images/dashboard/circle.svg') }}" class="card-img-absolute"
                        alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Arsip Masuk <i
                            class="mdi mdi-email-open-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"> {{ $data[2]}}</h2>
                    <a href="/view-sm" class="text-decoration-none text-white">
                        <h6 class="card-text">View Detail </h6>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('thema/assets/images/dashboard/circle.svg') }}" class="card-img-absolute"
                        alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Arsip Keluar<i
                            class="mdi mdi-email-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{ $data[1]}}</h2>
                    <a href="/view-sk" class="text-decoration-none text-white">
                        <h6 class="card-text">View Detail </h6>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('thema/assets/images/dashboard/circle.svg') }}" class="card-img-absolute"
                        alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Users <i class="mdi mdi-account mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{ $data[0]}}</h2>
                    <a href="/view-user" class="text-decoration-none text-white">
                        <h6 class="card-text">View Detail </h6>
                    </a>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- content-wrapper ends -->
<!--Digunakan untuk alert-->
@include('sweetalert::alert')

@endsection