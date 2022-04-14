@extends('layouts.master')
@push('style')
@endpush
@section('judul')
Aplikasi Data Penjualan
@endsection
@section('judul_sub')
Menu Tambahan
@endsection
@section('content')
<div class="row align-items-center">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div id="examples" class="mb-4">
            <h2>Pembuat Website</h2>
        </div>
        <!-- Bg -->
        <div class="pt-20 rounded-top" style="background:
                    url(../assets/images/background/profile-cover.jpg) no-repeat;
                    background-size: cover;">
        </div>
        <div class="bg-white rounded-bottom smooth-shadow-sm ">
            <div class="d-flex align-items-center justify-content-between
                      pt-4 pb-6 px-4">
                <div class="d-flex align-items-center">
                    <!-- avatar -->
                    <div class="avatar-xxl me-2
                          position-relative d-flex justify-content-end
                          align-items-end mt-n10">
                        <img src="{{ asset('/assets') }}/images/my-img/my_foto.jpeg" class="avatar-xxl
                            rounded-circle border border-4 border-white-color-40" alt="">
                    </div>
                    <!-- text -->
                    <div class="lh-1">
                        <h2 class="mb-0">Eko Muchamad Haryono
                        </h2>
                    </div>
                </div>
            </div>
            <!-- nav -->

        </div>
    </div>
</div>
<!-- content -->
<div class="py-6">
    <!-- row -->
    <div class="row">
        <div>
            <!-- card -->
            <div class="card">
                <!-- card body -->
                <div class="card-body">
                    <!-- card title -->
                    <h4 class="card-title mb-4">Tentang Saya</h4>
                    <span class="text-uppercase fw-medium text-dark
                          fs-5 ls-2">Bio</span>
                    <!-- text -->
                    <p class="mt-2 mb-6">Saya lulusan SMK 1 TRIPLE "J" 2020/2021, jurusan Rekayasa Perangkat Lunak. </p>
                    <!-- row -->
                    <div class="row">
                        <div class="col-12 mb-5">
                            <!-- text -->

                        </div>
                        <div class="col-6 mb-5">
                            <h6 class="text-uppercase fs-5 ls-2">Phone </h6>
                            <p class="mb-0">082246105463</p>
                        </div>
                        <div class="col-6 mb-5">
                            <h6 class="text-uppercase fs-5 ls-2">Date of Birth </h6>
                            <p class="mb-0">29 - 03 - 2003</p>
                        </div>
                        <div class="col-6">
                            <h6 class="text-uppercase fs-5 ls-2">Email </h6>
                            <p class="mb-0">ekomh13@gmail.com</p>
                        </div>
                        <div class="col-6">
                            <h6 class="text-uppercase fs-5 ls-2">Location
                            </h6>
                            <p class="mb-0">Indonesia, Jawa Barat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-6">
            <!-- card -->
            <div class="card">
                <!-- card body -->
                <div class="card-body">
                    <!-- card title -->
                    <h4 class="card-title mb-4">Projects Contributions</h4>
                    <div class="d-md-flex justify-content-between
                          align-items-center mb-4">
                        <div class="d-flex align-items-center">
                            <div>
                                <!-- icon shape -->
                                <div class="icon-shape icon-lg border p-4 rounded-1">
                                    <img src="../assets/images/brand/3dsmax-logo.svg" alt="">
                                </div>
                            </div>
                            <!-- text -->
                            <div class="ms-3 ">
                                <h5 class="mb-1"><a href="#" class="text-inherit">Design 3d Character</a></h5>
                                <p class="mb-0 fs-5 text-muted">Project description and details about...</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center ms-10 ms-md-0 mt-3">
                            <!-- avatar group -->
                            <div class="avatar-group me-2">
                                <span class="avatar avatar-sm">
                                    <!-- img -->
                                    <img alt="avatar" src="../assets/images/avatar/avatar-4.jpg" class="rounded-circle">
                                </span>
                                <span class="avatar avatar-sm">
                                    <!-- img -->
                                    <img alt="avatar" src="../assets/images/avatar/avatar-5.jpg" class="rounded-circle">
                                </span>
                                <span class="avatar avatar-sm">
                                    <!-- img -->
                                    <img alt="avatar" src="../assets/images/avatar/avatar-6.jpg" class="rounded-circle">
                                </span>
                            </div>
                            <div>
                                <!-- dropdown -->
                                <div class="dropdown dropstart">
                                    <a href="#" class="text-muted text-primary-hover" id="dropdownprojectTwo"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-vertical" class="icon-xxs"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownprojectTwo">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                            here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-flex justify-content-between
                          align-items-center mb-4">
                        <div class="d-flex align-items-center">
                            <div>
                                <!-- icon shape -->
                                <div class="icon-shape icon-lg border p-4 rounded-1">
                                    <img src="../assets/images/brand/github-logo.svg" alt="">
                                </div>
                            </div>
                            <!-- text -->
                            <div class="ms-3 ">
                                <h5 class="mb-1"><a href="#" class="text-inherit">Github Development</a></h5>
                                <p class="mb-0 fs-5 text-muted">Project description and details about...</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ms-10 ms-md-0 mt-3">
                            <!-- avatar group -->
                            <div class="avatar-group me-2">
                                <span class="avatar avatar-sm">
                                    <!-- img -->
                                    <img alt="avatar" src="../assets/images/avatar/avatar-7.jpg" class="rounded-circle">
                                </span>
                                <span class="avatar avatar-sm">
                                    <!-- img -->
                                    <img alt="avatar" src="../assets/images/avatar/avatar-8.jpg" class="rounded-circle">
                                </span>
                                <span class="avatar avatar-sm">
                                    <!-- img -->
                                    <img alt="avatar" src="../assets/images/avatar/avatar-9.jpg" class="rounded-circle">
                                </span>
                            </div>
                            <div>
                                <!-- dropdown -->
                                <div class="dropdown dropstart">
                                    <a href="#" class="text-muted text-primary-hover" id="dropdownprojectThree"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-vertical" class="icon-xxs"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownprojectThree">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                            here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-flex justify-content-between
                          align-items-center mb-4">
                        <div class="d-flex align-items-center">
                            <!-- icon shape -->
                            <div>
                                <div class="icon-shape icon-lg border p-4 rounded-1">
                                    <img src="../assets/images/brand/dropbox-logo.svg" alt="">
                                </div>
                            </div>
                            <!-- text -->
                            <div class="ms-3 ">
                                <h5 class="mb-1"><a href="#" class="text-inherit">Dropbox Design
                                        System</a></h5>
                                <p class="mb-0 fs-5 text-muted">Project description and details about...</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ms-10 ms-md-0 mt-3">
                            <!-- avatar group -->
                            <div class="avatar-group me-2">
                                <!-- img -->
                                <span class="avatar avatar-sm">
                                    <img alt="avatar" src="../assets/images/avatar/avatar-10.jpg"
                                        class="rounded-circle">
                                </span>
                                <!-- img -->
                                <span class="avatar avatar-sm">
                                    <img alt="avatar" src="../assets/images/avatar/avatar-11.jpg"
                                        class="rounded-circle">
                                </span>
                                <!-- img -->
                                <span class="avatar avatar-sm">
                                    <img alt="avatar" src="../assets/images/avatar/avatar-12.jpg"
                                        class="rounded-circle">
                                </span>
                            </div>
                            <div>
                                <!-- dropdown -->
                                <div class="dropdown dropstart">
                                    <a href="#" class="text-muted text-primary-hover" id="dropdownprojectFour"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-vertical" class="icon-xxs"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownprojectFour">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                            here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-flex justify-content-between
                          align-items-center">
                        <div class="d-flex align-items-center">
                            <!-- icon shape -->
                            <div>
                                <div class="icon-shape icon-lg border p-4 rounded-1
                                bg-primary">
                                    <img src="../assets/images/brand/layers-logo.svg" alt="">
                                </div>
                            </div>
                            <!-- text -->
                            <div class="ms-3 ">
                                <h5 class="mb-1"><a href="#" class="text-inherit">Project Management</a></h5>
                                <p class="mb-0 fs-5 text-muted">Project description and details about...</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ms-10 ms-md-0 mt-3">
                            <!-- avatar group -->
                            <div class="avatar-group me-2">
                                <!-- img -->
                                <span class="avatar avatar-sm">
                                    <img alt="avatar" src="../assets/images/avatar/avatar-13.jpg"
                                        class="rounded-circle">
                                </span>
                                <!-- img -->
                                <span class="avatar avatar-sm">
                                    <img alt="avatar" src="../assets/images/avatar/avatar-14.jpg"
                                        class="rounded-circle">
                                </span>
                                <!-- img -->
                                <span class="avatar avatar-sm">
                                    <img alt="avatar" src="../assets/images/avatar/avatar-15.jpg"
                                        class="rounded-circle">
                                </span>
                            </div>
                            <div>
                                <!-- dropdown -->
                                <div class="dropdown dropstart">
                                    <a href="#" class="text-muted text-primary-hover" id="dropdownprojectFoufive"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-vertical" class="icon-xxs"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownprojectFoufive">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                            here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
</div>
</div>

@push('scripts')
@endpush
@endsection
