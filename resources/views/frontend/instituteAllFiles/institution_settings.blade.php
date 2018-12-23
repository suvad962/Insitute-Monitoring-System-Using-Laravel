<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

    <!-- favicons -->
    <link rel="apple-touch-icon" href="{{ asset('frontend') }}/img/favicon-apple.png">
    <link rel="icon" href="{{ asset('frontend') }}/img/favicon.png">
    @include('frontend.includeFiles.all-css')
    
    <title>Mobipath</title>
</head>

<body class="fixed-header sidebar-right-close">
        
<!-- page loader -->
  @include('frontend.includeFiles.page-loader-frontend')
<!-- page loader ends  -->



    <div class="wrapper">
        <!-- main header -->
        @include('frontend.inc.header')
        <!-- main header ends -->

        <!-- sidebar left -->
        @include('frontend.inc.sidebar')
        <!-- sidebar left ends -->

        @include('frontend.inc.education-institute')
        <!-- content page title -->
        <div class="container-fluid bg-light-opac">
            <div class="row">
                <div class="container my-3 main-container">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="content-color-primary page-title">Institution Settings</h2>
                            <p class="content-color-secondary page-sub-title">Create School Essential Components</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content page title ends -->

        <!-- content page -->
        <div class="container mt-4 main-container">

          </div>
            <div class="row" style="padding-left: 25px; padding-right: 25px">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="/create_shift"><button class="btn btn-primary btn-lg btn-block">Shifts</button></a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="/create_class"><button class="btn btn-primary btn-lg btn-block">Classes</button></a>
                </div>
            </div>
            <label></label>
            <div class="row" style="padding-left: 25px ; padding-right: 25px">
                {{--<div class="col-sm-12 col-md-6 col-lg-4">--}}
                    {{--<a href="#"><button class="btn btn-primary btn-lg btn-block">Subjects</button></a>--}}
                {{--</div>--}}
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="/create_section"><button class="btn btn-primary btn-lg btn-block">Sections</button></a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="/create_course"><button class="btn btn-primary btn-lg btn-block">Assign Teachers</button></a>
                </div>
                {{--<div class="col-sm-12 col-md-6 col-lg-4">--}}
                    {{--<a href="#"><button class="btn btn-primary btn-lg btn-block">Class Schedule</button></a>--}}
                {{--</div>--}}
            </div>

        </div>
        <!-- content page ends -->

    </div>
   @include('frontend.inc.footer');

    <!-- page specific script -->
    @include('frontend.includeFiles.all-js')
</body>

</html>

<!-- Localized -->
