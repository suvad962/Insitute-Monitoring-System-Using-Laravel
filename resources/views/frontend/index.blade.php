<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

    <!-- favicons -->
    <link rel="apple-touch-icon" href="{{ asset('frontend') }}/img/favicon-apple.png">
    <link rel="icon" href="{{ asset('frontend') }}/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/bootstrap-4.1.3/css/bootstrap.min.css">

    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/materializeicon/material-icons.css">

    <!-- aniamte CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/animatecss/animate.css">

    <!-- swiper carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/swiper/css/swiper.min.css">

    <!-- daterange CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/bootstrap-daterangepicker-master/daterangepicker.css">

    <!-- footable CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/footable-bootstrap/css/footable.bootstrap.min.css">

    <!-- Bootstra tour CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/bootstrap_tour/css/bootstrap-tour-standalone.css">


    <!-- jvector map CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/jquery-jvectormap/jquery-jvectormap-2.0.3.css">

    <!-- app CSS -->
    <link id="theme" rel="stylesheet" href="{{ asset('frontend') }}/css/purplesidebar.css" type="text/css">

    <title>Mobipath</title>
</head>

<body class="fixed-header sidebar-right-close">
    <!-- page loader -->
    <div class="loader justify-content-center pink-gradient">
        <div class="align-self-center text-center">
            <div class="logo-img-loader">
                <img src="{{ asset('frontend') }}/img/loader-hole.png" alt="" class="logo-image">
                <img src="{{ asset('frontend') }}/img/loader-bg.png" alt="" class="logo-bg-image">
            </div>
            <h2 class="mt-3 font-weight-light">Mobipath</h2>
            <p class="mt-2 text-white">Digital school is coming here</p>
        </div>
    </div>
    <!-- page loader ends  -->

    <div class="wrapper">
        <!-- main header -->
      @include('frontend.inc.header')
        <!-- main header ends -->

        <!-- sidebar left -->
      @include('frontend.inc.sidebar')
        <!-- sidebar left ends -->

        <!-- sidebar right -->
        
        <!-- sidebar right ends -->

        <!-- setting sidebar -->
        <div class="settings-sidebar close-settings-sidebar-backdrop">
            <button type="button" class="btn close-setting-sidebar pink-gradient"><i class="material-icons">keyboard_arrow_left</i></button>
            <ul class="nav nav-tabs row no-gutters pink-gradient" role="tablist">
                <li class="nav-item text-center col">
                    <a class="nav-link active" id="tabhome1settings-tab" data-toggle="tab" href="#tabhome1settings" role="tab" aria-controls="tabhome1settings" aria-selected="true">
                        <h5 class="content-color-primary mb-0"><i class="material-icons">chat</i></h5>
                        <p class="content-color-secondary mb-0 small">Chat</p>
                    </a>
                </li>
                <li class="nav-item text-center col">
                    <a class="nav-link" id="tabhome2settings-tab" data-toggle="tab" href="#tabhome2settings" role="tab" aria-controls="tabhome2settings" aria-selected="false">
                        <h5 class="content-color-primary mb-0"><i class="material-icons">settings</i></h5>
                        <p class="content-color-secondary mb-0 small">Settings</p>
                    </a>
                </li>
                <li class="nav-item text-center col">
                    <a class="nav-link" id="tabhome3settings-tab" data-toggle="tab" href="#tabhome3settings" role="tab" aria-controls="tabhome3settings" aria-selected="false">
                        <h5 class="content-color-primary mb-0"><i class="material-icons">notifications</i></h5>
                        <p class="content-color-secondary mb-0 small">Updates</p>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tabhome1settings" role="tabpanel" aria-labelledby="tabhome1settings-tab">
                    <ul class="list-group list-group-flush" id="chat-list">
                        <li class="list-group-item new">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user1.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">John Doe <small class="float-right content-color-secondary">7:05 am</small></h6>
                                    <p>Hi</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item new">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user2.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">Alizee TaCkor<small class="float-right content-color-secondary">8:05 am</small></h6>
                                    <p>GoTRI is best of everyone else</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item new">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user3.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">Denial Torry<small class="float-right content-color-secondary">10:05 am</small></h6>
                                    <p>How are you?</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user1.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">John Doe <small class="float-right content-color-secondary">7:05 am</small></h6>
                                    <p>Hi</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user2.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">Alizee TaCkor<small class="float-right content-color-secondary">8:05 am</small></h6>
                                    <p>GoTRI is best of everyone else</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user3.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">Denial Torry<small class="float-right content-color-secondary">10:05 am</small></h6>
                                    <p>How are you?</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user1.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">John Doe <small class="float-right content-color-secondary">7:05 am</small></h6>
                                    <p>Hi</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user2.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">Alizee TaCkor<small class="float-right content-color-secondary">8:05 am</small></h6>
                                    <p>GoTRI is best of everyone else</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user3.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">Denial Torry<small class="float-right content-color-secondary">10:05 am</small></h6>
                                    <p>How are you?</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user1.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">John Doe <small class="float-right content-color-secondary">7:05 am</small></h6>
                                    <p>Hi</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user2.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">Alizee TaCkor<small class="float-right content-color-secondary">8:05 am</small></h6>
                                    <p>GoTRI is best of everyone else</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user3.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">Denial Torry<small class="float-right content-color-secondary">10:05 am</small></h6>
                                    <p>How are you?</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user1.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">John Doe <small class="float-right content-color-secondary">7:05 am</small></h6>
                                    <p>Hi</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user2.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">Alizee TaCkor<small class="float-right content-color-secondary">8:05 am</small></h6>
                                    <p>GoTRI is best of everyone else</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    <img src="{{ asset('frontend') }}/img/user3.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <h6 class="my-0">Denial Torry<small class="float-right content-color-secondary">10:05 am</small></h6>
                                    <p>How are you?</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="tabhome2settings" role="tabpanel" aria-labelledby="tabhome2settings-tab">
                    <div class="row mx-0">
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible  mt-2 p-2" role="alert" id="settingalert">
                                <strong>Congratulation!</strong>
                                <br>Your setting has been reflected.
                                <button type="button" class="close btn-sm" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 mt-2">
                        <div class="col-12">
                            <p class="page-sub-title-small">
                                <span class="icon-circle mr-2">
                                     <i class="material-icons">settings</i>
                                 </span>Application Settings</p>
                        </div>
                    </div>
                    <ul class="list-group  list-group-flush w-100">
                        <li class="list-group-item">
                            <label class="d-inline-block mr-2">Hide Backdrop</label>
                            <input type="checkbox" id="hidebackdrop" class="switch switch-sm">
                            <label for="hidebackdrop" class="pink-gradient float-right"></label>
                        </li>
                        <li class="list-group-item">
                            <label class="d-inline-block mr-2">Full Container</label>
                            <input type="checkbox" id="full-width3" class="switch switch-sm">
                            <label for="full-width3" class="pink-gradient float-right"></label>
                        </li>
                    </ul>
                    <div class="row mx-0 mt-2">
                        <div class="col-12">
                            <p class="page-sub-title-small">
                                <span class="icon-circle mr-2">
                                     <i class="material-icons">mail</i>
                                 </span>Email Settings</p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush w-100">
                        <li class="list-group-item">
                            <label class="d-inline-block mr-2">Receive Updates</label>
                            <input type="checkbox" id="dead1" class="switch switch-sm" checked>
                            <label for="dead1" class="pink-gradient float-right"></label>
                        </li>
                        <li class="list-group-item">
                            <label class="d-inline-block mr-2">Receive Notification</label>
                            <input type="checkbox" id="dead2" class="switch switch-sm" checked>
                            <label for="dead2" class="pink-gradient float-right"></label>
                        </li>
                        <li class="list-group-item">
                            <label class="d-inline-block mr-2">Receive Alerts</label>
                            <input type="checkbox" id="dead3" class="switch switch-sm">
                            <label for="dead3" class="pink-gradient float-right"></label>
                        </li>
                    </ul>
                    <div class="row mx-0 mt-2">
                        <div class="col-12">
                            <p class="page-sub-title-small">
                                <span class="icon-circle mr-2">
                                     <i class="material-icons">person</i>
                                 </span>User Settings</p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush w-100">
                        <li class="list-group-item">

                            <label class="d-inline-block mr-2">Connection List</label>
                            <input type="checkbox" id="dead11" class="switch switch-sm">
                            <label for="dead11" class="pink-gradient float-right"></label>
                            <hr class="mt-2">
                            <p class="content-color-secondary small mb-2">Your friends or connection can see your connection list if you allow this setting.</p>
                        </li>
                        <li class="list-group-item">
                            <label class="d-inline-block mr-2">Comments</label>
                            <input type="checkbox" id="dead21" class="switch switch-sm" checked>
                            <label for="dead21" class="pink-gradient float-right"></label>
                            <hr class="mt-2">
                            <p class="content-color-secondary small mb-2">Your friends or connection can able to comment on your profile and post you have posted or shared if you allow this setting.</p>
                        </li>
                        <li class="list-group-item">
                            <label class="d-inline-block mr-2">Share</label>
                            <input type="checkbox" id="dead31" class="switch switch-sm" checked>
                            <label for="dead31" class="pink-gradient float-right"></label>
                            <hr class="mt-2">
                            <p class="content-color-secondary small mb-2">Your friends or connection can able to share your post you have posted and written by you only if you allow this setting.</p>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade " id="tabhome3settings" role="tabpanel" aria-labelledby="tabhome3settings-tab">
                    <div class="row mx-0 mt-0 bg-light">
                        <div class="col-12">
                            <div class="card my-3">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="icon-circle icon-50 bg-light-primary mr-3">
                                            <i class="material-icons">track_changes</i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="content-color-primary mb-0">Good Job!</h4>
                                            <p class="content-color-secondary mb-3">System running perfectly.</p>
                                        </div>
                                    </div>
                                    <div class="progress progress-small">
                                        <div class="progress-bar bg-primary col-6" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="page-sub-title-small">
                                <span class="icon-circle mr-2">
                                    <i class="material-icons">av_timer</i>
                                 </span>Application Settings
                            </p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush w-100 log-information mt-2">
                        <li class="list-group-item">
                            <div class="avatar avatar-15 border-danger"></div>
                            <p class="content-color-primary">System updated
                                <br><small class="content-color-secondary">2:02 am</small></p>
                        </li>
                        <li class="list-group-item">
                            <span class="avatar avatar-15 border-warning"></span>
                            <p class="content-color-primary">New account Created
                                <br><small class="content-color-secondary">5:02 pm</small></p>
                        </li>
                        <li class="list-group-item">
                            <span class="avatar avatar-15 border-success"></span>
                            <p class="content-color-primary">Shutdown 2 hours
                                <br><small class="content-color-secondary">Yesterday | 2:02 pm</small></p>
                        </li>
                        <li class="list-group-item">
                            <span class="avatar avatar-15 border-primary"></span>
                            <p class="content-color-primary">System updated
                                <br><small class="content-color-secondary">Yesterday | 1:32 pm</small></p>
                        </li>
                        <li class="list-group-item">
                            <span class="avatar avatar-15 border-dark"></span>
                            <p class="content-color-primary">icro changes done!
                                <br><small class="content-color-secondary">14 October 2018 | 2:02 am</small></p>
                        </li>
                        <li class="list-group-item">
                            <span class="avatar avatar-15 border-secondary"></span>
                            <p class="content-color-primary">icro changes done!
                                <br><small class="content-color-secondary">14 October 2018 | 2:02 am</small></p>
                        </li>
                    </ul>
                    <br>
                    <div class="row mx-0 mt-2 bg-light">
                        <div class="col-12">
                            <p class="page-sub-title-small">
                                <span class="icon-circle mr-2">
                                     <i class="material-icons">av_timer</i>
                                 </span>Application Settings</p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush w-100 log-information bubble-sheet mt-2">
                        <li class="list-group-item">
                            <div class="avatar avatar-15 border-danger"></div>
                            <p class="content-color-primary">System updated
                                <br><small class="content-color-secondary">2:02 am</small></p>
                        </li>
                        <li class="list-group-item">
                            <span class="avatar avatar-15 border-warning"></span>
                            <p class="content-color-primary">New account Created
                                <br><small class="content-color-secondary">5:02 pm</small></p>
                        </li>
                        <li class="list-group-item">
                            <span class="avatar avatar-15 border-success"></span>
                            <p class="content-color-primary">Shutdown 2 hours
                                <br><small class="content-color-secondary">Yesterday | 2:02 pm</small></p>
                        </li>
                        <li class="list-group-item">
                            <span class="avatar avatar-15 border-primary"></span>
                            <p class="content-color-primary">System updated
                                <br><small class="content-color-secondary">Yesterday | 1:32 pm</small></p>
                        </li>
                        <li class="list-group-item">
                            <span class="avatar avatar-15 border-dark"></span>
                            <p class="content-color-primary">icro changes done!
                                <br><small class="content-color-secondary">14 October 2018 | 2:02 am</small></p>
                        </li>
                        <li class="list-group-item">
                            <span class="avatar avatar-15 border-secondary"></span>
                            <p class="content-color-primary">icro changes done!
                                <br><small class="content-color-secondary">14 October 2018 | 2:02 am</small></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="settings-sidebar-backdrop pink-gradient"></div>
        <div class="chat-window">
            <div class="card">
                <div class="card-header pink-gradient p-2">
                    <div class="media">
                        <figure class="avatar avatar-20 mr-2">
                            <img src="{{ asset('frontend') }}/img/user1.png" alt="Generic placeholder image">
                        </figure>
                        <div class="media-body">
                            <h6 class="text-white mb-0">John McMohan <span class="status vm bg-success"></span></h6>
                        </div>
                        <button class="btn btn-link p-0 chat-minmax vm"><i class="material-icons minimizeicon">remove</i><i class="material-icons fullscreenicon">fullscreen</i></button>
                        <button class="btn btn-link p-0 chat-close vm"><i class="material-icons closeicon">close</i></button>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group chatlist">
                        <li class="list-group-item ">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-2">
                                    <img src="{{ asset('frontend') }}/img/user1.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla.
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item chat-you">
                            <div class="media">
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla.
                                </div>
                                <figure class="avatar avatar-40 ml-2">
                                    <img src="{{ asset('frontend') }}/img/user2.png" alt="Generic placeholder image">
                                </figure>
                            </div>
                        </li>
                        <li class="list-divider">20 December 2018</li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla.
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item chat-you">
                            <div class="media">
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla.
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <button class="input-group-text px-1 rounded-0">
                                <i class="material-icons">mood</i>
                            </button>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter Message...">
                        <div class="input-group-prepend">
                            <button class="input-group-text px-1">
                                <i class="material-icons">attach_file</i>
                            </button>
                        </div>
                        <div class="input-group-prepend">
                            <button class="input-group-text px-1">
                                <i class="material-icons">send</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- setting sidebar ends -->

        <!-- content page title -->
        <div class="container-fluid bg-light-opac">
            <div class="row">
                <div class="container my-3 main-container">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="content-color-primary page-title">Dashboard</h2>
                            <p class="content-color-secondary page-sub-title">Creative, amazing, awesome and unique</p>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-rounded pink-gradient text-uppercase pr-3" data-toggle="modal" data-target="#createOrder"><i class="material-icons">add</i> <span class="text-hide-xs">Create</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content page title ends -->

        <!-- content page -->
        <div class="container mt-4 main-container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="content-color-secondary mb-0">Daily Sales<span class="text-success float-right"><i class="material-icons icon-sm">arrow_drop_up</i> $250</span></p>
                                    <h4 class="content-color-primary mb-3">$ 2000.00</h4>
                                </div>
                            </div>
                            <div class="progress progress-small">
                                <div class="progress-bar bg-success col-6" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="media">
                                <div class="icon-circle icon-50 bg-light-danger mr-3">
                                    <i class="material-icons">settings</i>
                                </div>
                                <div class="media-body">
                                    <p class="content-color-secondary mb-0">Raw Material<span class="text-danger float-right"><i class="material-icons icon-sm">arrow_drop_down</i> $250</span></p>
                                    <h4 class="content-color-primary mb-3">$ 1506.00</h4>
                                </div>
                            </div>
                            <div class="progress progress-small">
                                <div class="progress-bar bg-danger col-6" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="media">
                                <div class="icon-rounded icon-50 bg-light-warning mr-3">
                                    <i class="material-icons">account_balance_wallet</i>
                                </div>
                                <div class="media-body">
                                    <p class="content-color-secondary mb-0">Shortage balance</p>
                                    <h4 class="content-color-primary mb-3">26</h4>
                                </div>
                            </div>
                            <div class="progress progress-small">
                                <div class="progress-bar bg-warning col-6" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="icon-rounded icon-50 shadow-light primary-gradient top-right-icon">
                                <i class="material-icons">account_balance</i>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <p class="content-color-secondary mb-0">Profit Target</p>
                                    <h4 class="content-color-primary mb-3">40% <small class="content-color-secondary">achieved</small></h4>
                                </div>
                            </div>
                            <div class="progress progress-small">
                                <div class="progress-bar bg-primary col-4" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="media">
                                <figure class="avatar avatar-50 mr-2">
                                    <img src="{{ asset('frontend') }}/img/user1.png" alt="Generic placeholder image">
                                </figure>
                                <div class="media-body">
                                    <p class="content-color-secondary mb-0">Welcome</p>
                                    <h4 class="content-color-primary mb-0">John McMohan</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="mt-4">210</h1>
                            <p class="small mb-0 content-color-secondary">Order recieved</p>
                        </div>
                        <div class="card-footer bg-light-secondary border-top">
                            <div class="media">
                                <div class="icon-circle icon-40 mr-2 content-color-secondary">
                                    <i class="material-icons icon-lg">add_shopping_cart</i>
                                </div>
                                <div class="media-body">
                                    <h5 class="content-color-primary mb-0">209</h5>
                                    <p class="content-color-secondary mb-0 small">Product available</p>
                                </div>
                                <a href="" class="icon-circle icon-40 content-color-secondary">
                                    <i class="material-icons icon-lg">keyboard_arrow_right</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Gold</h4>
                                    <p class="content-color-secondary mb-0">24 Carat</p>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="mt-4"><span class="font-weight-light">$</span> 2053.19</h1>
                            <p class="small mb-1 text-success "><i class="material-icons icon-sm">arrow_drop_up</i> $250</p>
                        </div>
                        <div class="card-footer border-top">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="content-color-primary mb-0">Clear Stoke</h5>
                                    <p class="content-color-secondary mb-0 small"><span class="content-color-primary">+15%</span> vs last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Finance States <small class="content-color-secondary">In Profit</small></h4>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabhome1" role="tabpanel" aria-labelledby="tabhome1-tab">
                                    <canvas id="mixedchartjs"></canvas>
                                </div>
                                <div class="tab-pane fade" id="tabhome2" role="tabpanel" aria-labelledby="tabhome2-tab">
                                    <canvas id="linechart"></canvas>
                                </div>
                                <div class="tab-pane fade scrolltable110px" id="tabhome3" role="tabpanel" aria-labelledby="tabhome3-tab">
                                    <div class="">
                                        <table class="table table-sm table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Product Name</th>
                                                    <th>Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>001</td>
                                                    <td>Shoes</td>
                                                    <td>520</td>
                                                </tr>
                                                <tr>
                                                    <td>002</td>
                                                    <td>Clothing</td>
                                                    <td>1020</td>
                                                </tr>
                                                <tr>
                                                    <td>003</td>
                                                    <td>Pipes</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <td>004</td>
                                                    <td>Shoes</td>
                                                    <td>520</td>
                                                </tr>
                                                <tr>
                                                    <td>005</td>
                                                    <td>Clothing</td>
                                                    <td>1020</td>
                                                </tr>
                                                <tr>
                                                    <td>006</td>
                                                    <td>Pipes</td>
                                                    <td>20</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-top tabs-footer">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tabhome1-tab" data-toggle="tab" href="#tabhome1" role="tab" aria-controls="tabhome1" aria-selected="true">
                                        <h5 class="content-color-primary mb-0">Income</h5>
                                        <p class="content-color-secondary mb-0 small"><span class="content-color-primary">+15%</span> vs yesterday</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tabhome2-tab" data-toggle="tab" href="#tabhome2" role="tab" aria-controls="tabhome2" aria-selected="false">
                                        <h5 class="content-color-primary mb-0">Expense</h5>
                                        <p class="content-color-secondary mb-0 small"><span class="content-color-primary">+20%</span> vs yesterday</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tabhome3-tab" data-toggle="tab" href="#tabhome3" role="tab" aria-controls="tabhome3" aria-selected="false">
                                        <h5 class="content-color-primary mb-0">Stock Shortage</h5>
                                        <p class="content-color-secondary mb-0 small"><span class="content-color-primary">+5%</span> vs yesterday</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Finance States </h4>
                                </div>
                                <input type="text" class="form-control form-control-sm daterange mr-2" name="daterange" value="01/01/2018 - 01/15/2018" />
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabhome1-1" role="tabpanel" aria-labelledby="tabhome1-tab">
                                    <canvas id="barcharts"></canvas>
                                    <div class="legend3" id="legend3"></div>
                                </div>
                                <div class="tab-pane fade scrolltable155px" id="tabhome2-1" role="tabpanel" aria-labelledby="tabhome3-tab">
                                    <div class="">
                                        <table class="table table-sm table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Product Name</th>
                                                    <th>Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>001</td>
                                                    <td>Shoes</td>
                                                    <td>520</td>
                                                </tr>
                                                <tr>
                                                    <td>002</td>
                                                    <td>Clothing</td>
                                                    <td>1020</td>
                                                </tr>
                                                <tr>
                                                    <td>003</td>
                                                    <td>Pipes</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <td>004</td>
                                                    <td>Shoes</td>
                                                    <td>520</td>
                                                </tr>
                                                <tr>
                                                    <td>005</td>
                                                    <td>Clothing</td>
                                                    <td>1020</td>
                                                </tr>
                                                <tr>
                                                    <td>006</td>
                                                    <td>Pipes</td>
                                                    <td>20</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-top tabs-footer">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tabhome1-1-tab" data-toggle="tab" href="#tabhome1-1" role="tab" aria-controls="tabhome1-1" aria-selected="true">
                                        <h5 class="content-color-primary mb-0">Imported</h5>
                                        <p class="content-color-secondary mb-0 small"><span class="content-color-primary">2000</span> products</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tabhome2-1-tab" data-toggle="tab" href="#tabhome2-1" role="tab" aria-controls="tabhome2-1" aria-selected="false">
                                        <h5 class="content-color-primary mb-0">Exported</h5>
                                        <p class="content-color-secondary mb-0 small"><span class="content-color-primary">2500</span> products</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4 pink-gradient">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="text-white mb-0">Domestic Sales</h4>
                                </div>
                                <div class="dropdown d-inline-block">
                                    <a href="#" class="icon-circle icon-30 text-white  dropdown-toggle caret-none" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons ">more_vertical</i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="" class="dropdown-item">Refresh</a>
                                        <a href="" class="dropdown-item">Setting</a>
                                        <a href="" class="dropdown-item">Close</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="piecharts"></canvas>
                        </div>
                        <div class="card-footer border-top">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="text-white mb-0">Much better</h5>
                                    <p class="text-white mb-0 small"><span class="text-white">+50%</span> vs last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4 has-background-img bg-dark">
                        <figure class="background-img ">
                            <img src="{{ asset('frontend') }}/img/bw.jpg" alt="">
                        </figure>
                        <div class="card-header pb-0">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="text-white mb-0">Black & White</h4>
                                    <p class="text-secondary mt-1">For people who has special ability of color blindness <a href="colorblindness.html" class="text-white" target="_blank">Read more.</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <label class="d-inline-block mr-2 text-white">Enable</label>
                            <input type="checkbox" id="darktheme" class="switch">
                            <label for="darktheme" class="bg-dark mb-2 border"></label>
                        </div>
                    </div>
                    <div class="card mb-4 animated animateflipy">
                        <div class="card-header">
                            <div class="media">
                                <div class="icon-circle icon-50 bg-light-pink mr-3">
                                    <i class="material-icons">settings</i>
                                </div>
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0 mt-2">Color schemes</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light-secondary border-top ">
                            <a href="javascript:void(0);" id="opencolorpanel" class="media">
                                <div class="media-body">
                                    <h5 class="content-color-primary mb-0">White</h5>
                                    <p class="content-color-secondary mb-0 small">Change Color Scheme</p>
                                </div>
                                <div class="icon-circle icon-40 content-color-secondary">
                                    <i class="material-icons icon-lg">keyboard_arrow_right</i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Profile </h4>
                                </div>
                                <button class="btn btn-sm primary-gradient mr-2">Edit</button>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row align-items-center no-gutters">
                                <div class="col-auto">
                                    <button class="btn btn-icon icon-circle icon-50 p-0">
                                        <i class="material-icons">mail_outline</i>
                                    </button>
                                </div>
                                <a href="profile.html " class="col">
                                    <figure class="avatar avatar-120 mx-auto mb-3">
                                        <img src="{{ asset('frontend') }}/img/user1.png" alt="">
                                    </figure>
                                </a>
                                <div class="col-auto">
                                    <button class="btn btn-icon icon-circle icon-50 p-0">
                                        <i class="material-icons">call</i>
                                    </button>
                                </div>
                            </div>

                            <h5 class="card-title mb-2 header-color-primary text-center">John McMohan</h5>
                            <h6 class="card-subtitle mb-3 header-color-secondary text-center">South Africa</h6>

                            <div class="row bg-light-secondary text-center">
                                <div class="col py-3">
                                    <h5 class="content-color-primary mb-0">5000</h5>
                                    <p class="content-color-secondary small mb-0">Follower</p>
                                </div>
                                <div class="col py-3">
                                    <h5 class="content-color-primary mb-0">450</h5>
                                    <p class="content-color-secondary small mb-0">Connections</p>
                                </div>
                                <div class="col py-3">
                                    <h5 class="content-color-primary mb-0">1586</h5>
                                    <p class="content-color-secondary small mb-0">Posts</p>
                                </div>
                            </div>
                            <p class="content-color-secondary page-sub-title-small">My Recent Posts</p>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="list-group border-top border-bottom list-group-flush">
                                        <li class="list-group-item px-0">
                                            <div class="media">
                                                <div class="icon-circle icon-50 bg-light-primary mr-3">
                                                    <i class="material-icons">chrome_reader_mode</i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">Alizee Johnson</h6>
                                                    <p class="small">Cras sit amet nibh libero, in gravida nulla.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="media">
                                                <div class="icon-circle icon-50 bg-light-primary mr-3">
                                                    <i class="material-icons">chrome_reader_mode</i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">Alizee Johnson</h6>
                                                    <p class="small">Cras sit amet nibh libero, in gravida nulla.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="media">
                                                <div class="icon-circle icon-50 bg-light-primary mr-3">
                                                    <i class="material-icons">chrome_reader_mode</i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">Alizee Johnson</h6>
                                                    <p class="small">Cras sit amet nibh libero, in gravida nulla.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Purchase History</h4>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table border-bottom mb-0 footable">
                                <thead class="d-none">
                                    <tr>
                                        <th>Business</th>
                                        <th data-breakpoints="xs">Total</th>
                                        <th data-breakpoints="xs sm">Status</th>
                                        <th data-breakpoints="xs sm">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="icon-circle icon-50 bg-light-primary mr-3">
                                                    <i class="material-icons">business</i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">MarsXspace</h6>
                                                    <p class="small">New Jersey, UK</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">3250</h6>
                                            <p class="content-color-secondary small mb-0">Tickets</p>
                                        </td>
                                        <td class="text-center">
                                            <span class="btn btn-rounded btn-outline-success px-3 btn-sm">Normal</span>
                                        </td>
                                        <td class="text-center">
                                            <b>$250</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="icon-circle icon-50 bg-light-primary mr-3">
                                                    <i class="material-icons">business</i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">Chinmayaar</h6>
                                                    <p class="small">India</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">1250</h6>
                                            <p class="content-color-secondary small mb-0">Tickets</p>
                                        </td>
                                        <td class="text-center">
                                            <span class="btn btn-rounded btn-outline-danger px-3 btn-sm">High</span>
                                        </td>
                                        <td class="text-center">
                                            <b>$250</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="icon-circle icon-50 bg-light-primary mr-3">
                                                    <i class="material-icons">business</i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">OpenFiled</h6>
                                                    <p class="small">New Jersey, UK</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">5250</h6>
                                            <p class="content-color-secondary small mb-0">Tickets</p>
                                        </td>
                                        <td class="text-center">
                                            <span class="btn btn-rounded btn-outline-warning px-3 btn-sm">Medium</span>
                                        </td>
                                        <td class="text-center">
                                            <b>$250</b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">User List</h4>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table border-bottom mb-0 footable">
                                <thead class="d-none">
                                    <tr>
                                        <th>User</th>
                                        <th data-breakpoints="xs">Total</th>
                                        <th data-breakpoints="xs sm">Earning</th>
                                        <th data-breakpoints="xs sm">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <figure class="avatar avatar-50 mr-3">
                                                    <img src="{{ asset('frontend') }}/img/user1.png" alt="Generic placeholder image">
                                                </figure>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">John Doe</h6>
                                                    <p class="small">New Jersey, UK</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">3250</h6>
                                            <p class="content-color-secondary small mb-0">Task</p>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">$ 15545</h6>
                                            <p class="content-color-secondary small mb-0">Total Earning</p>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn pink-gradient px-3 btn-sm">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <figure class="avatar avatar-50 mr-3">
                                                    <img src="{{ asset('frontend') }}/img/user2.png" alt="Generic placeholder image">
                                                </figure>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">Anushka Makwan</h6>
                                                    <p class="small">India</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">1250</h6>
                                            <p class="content-color-secondary small mb-0">Task</p>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">$ 25545</h6>
                                            <p class="content-color-secondary small mb-0">Total Earning</p>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn pink-gradient px-3 btn-sm">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <figure class="avatar avatar-50 mr-3">
                                                    <img src="{{ asset('frontend') }}/img/user3.png" alt="Generic placeholder image">
                                                </figure>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">Reddy John</h6>
                                                    <p class="small">New Jersey, UK</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">5250</h6>
                                            <p class="content-color-secondary small mb-0">Task</p>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">$ 11523</h6>
                                            <p class="content-color-secondary small mb-0">Total Earning</p>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn pink-gradient px-3 btn-sm">Edit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('frontend') }}/img/birtmsg.png" class="mw-100 mx-auto mb-3" alt="">
                            </div>
                            <h1 class="font-weight-light">Order Received!</h1>
                        </div>
                        <div class="card-footer">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="content-color-primary mb-0">Pipe ID5246</h5>
                                    <p class="content-color-secondary mb-0 small">Delivered to New york</p>
                                </div>
                                <a href="" class="icon-circle icon-40 content-color-secondary">
                                    <i class="material-icons icon-lg">keyboard_arrow_right</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Global Sales</h4>
                                    <p class="content-color-secondary mb-0">5200 Sales in month</p>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="vectormap" id="mapwrap"></div>
                        </div>
                        <div class="card-footer  border-top">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="content-color-primary mb-0">Make a Stock</h5>
                                    <p class="content-color-secondary mb-0 small"><span class="content-color-primary">-12.00%</span> price dropped</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Global Sales</h4>
                                    <p class="content-color-secondary mb-0">5200 Sales in month</p>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas class="" id="linechartarea"></canvas>
                        </div>
                        <div class="card-footer border-top mt-2">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="content-color-primary mb-0">Great Performance, Congratulation!</h5>
                                    <p class="content-color-secondary mb-0 small"><span class="content-color-primary">12.00%</span> profit achieved this month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content page ends -->

    </div>
    <footer class="border-top">
        <div class="row">
            <div class="col-12 col-sm-6">This template is designed by <b>maxartkiller</b> with <span class="text-danger">❤</span></div>
            <div class="col-12 col-sm-6 text-right"><a href="" class="content-color-secondary">Privacy Policy</a> | <a href="" class="content-color-secondary">Terms of use</a></div>
        </div>
    </footer>

    <!-- modal for create form -->
    <div class="modal fade" id="createOrder" tabindex="-1" role="dialog" aria-labelledby="createOrderTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" id="createOrderTitle">
                    <div class="col text-center">
                    <img src="{{ asset('frontend') }}/img/logo.png" alt="" class="mt-4">
                    <br>
                    <h5 class="mt-4">Firm Authority Transfer</h5>
                    <p>Please complete your online reservation by providing information below</p>
                    </div>
                    <button type="button" class="close absolute" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Country</label>
                                            <select class="form-control " data-live-search="true" tabindex="-1" aria-hidden="true">
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Réunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.S.</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>City</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>State/Province</label>
                                            <select class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <h5 class="m-0">New authorise person's Name and Details</h5>
                            <hr>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Country</label>
                                            <select class="form-control " data-live-search="true" tabindex="-1" aria-hidden="true">
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Réunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.S.</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>City</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>State/Province</label>
                                            <select class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="agreement">
                                            <label class="custom-control-label" for="agreement">I agree with terms and condition. </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Attachments</label>
                                    <br>
                                    <div class="custom-dropzone text-center align-items-center" id="my-dropzone">
                                        <div class="dz-default dz-message" data-dz-message>
                                            <h3 class="mb-0"><i class="material-icons">cloud_download</i></h3>
                                            <p>Drop here or click here to upload</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Location</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Date</label>
                                    <input type="text" class="form-control datepicker" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal for create form ends-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontend') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/vendor/bootstrap-4.1.3/{{ asset('frontend') }}/js/bootstrap.min.js"></script>

    <!-- Cookie jquery file -->
    <script src="{{ asset('frontend') }}/vendor/cookie/jquery.cookie.js"></script>

    <!-- sparklines chart jquery file -->
    <script src="{{ asset('frontend') }}/vendor/sparklines/jquery.sparkline.min.js"></script>

    <!-- Circular progress gauge jquery file -->
    <script src="{{ asset('frontend') }}/vendor/circle-progress/circle-progress.min.js"></script>

    <!-- Swiper carousel jquery file -->
    <script src="{{ asset('frontend') }}/vendor/swiper/{{ asset('frontend') }}/js/swiper.min.js"></script>

    <!-- Chart js jquery file -->
    <script src="{{ asset('frontend') }}/vendor/chart{{ asset('frontend') }}/js/Chart.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/vendor/chart{{ asset('frontend') }}/js/utils.js"></script>

    <!-- Footable jquery file -->
    <script src="{{ asset('frontend') }}/vendor/footable-bootstrap/{{ asset('frontend') }}/js/footable.min.js"></script>

    <!-- datepicker jquery file -->
    <script src="{{ asset('frontend') }}/vendor/bootstrap-daterangepicker-master/moment.js"></script>
    <script src="{{ asset('frontend') }}/vendor/bootstrap-daterangepicker-master/daterangepicker.js"></script>

    <!-- jVector map jquery file -->
    <script src="{{ asset('frontend') }}/vendor/jquery-jvectormap/jquery-jvectormap.js"></script>
    <script src="{{ asset('frontend') }}/vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Bootstrap tour jquery file -->
    <script src="{{ asset('frontend') }}/vendor/bootstrap_tour/{{ asset('frontend') }}/js/bootstrap-tour-standalone.min.js"></script>

    <!-- jquery toast message file -->
    <script src="{{ asset('frontend') }}/vendor/jquery-toast-plugin-master/dist/jquery.toast.min.js"></script>

    <!-- Application main common jquery file -->
    <script src="{{ asset('frontend') }}/js/main.js"></script>

    <!-- page specific script -->
    <script src="{{ asset('frontend') }}/js/dashboard.js"></script>

    <!-- page specific script -->
    <script>
        "use script";
        $(window).on('load', function() {
            var tour = new Tour({
                steps: [{
                    element: "#left-menu",
                    title: "Main Menu",
                    content: "Access the demo pages from sidebar",
                    smartPlacement: true,
                    storage:false
                }, {
                    element: "button[data-target='#createOrder']",
                    title: "Creative Form",
                    content: "See beautifully designed form in modal",
                    smartPlacement: true,
                    placement: "left",
                    storage:false

                }, {
                    element: ".close-sidebar",
                    title: "Customizaton Menu",
                    content: "Customize your Layout style",
                    smartPlacement: true,
                    placement: "left",
                    storage:false

                }]

            });

            // Initialize the tour
            tour.init();

            // Start the tour
            tour.start();
        });

    </script>

</body>

</html>

<!-- Localized -->
