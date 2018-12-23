<!-- main header -->
<header class="main-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-auto pl-0">
                <button class="btn pink-gradient btn-icon" id="left-menu"><i class="material-icons">widgets</i></button>
                <a href="#" class="logo"><img src="{{ asset('frontend') }}/img/cbane-fklnv-2.jpg" alt=""></a>
            </div>
            <div class="col text-center p-xs-0">
                <ul class="time-day">
                    <li class="text-right">
                        <p class="header-color-primary"><span class="header-color-secondary"></span><small> </small></p>
                        <h2> </h2>
                    </li>
                    <li class="text-left">
                        <h2> <span class="header-color-secondary font-weight-light"><sup> </sup>  </span></h2>
                        <p class="header-color-primary text-hide-lg"><span class="header-color-secondary"> </span><small> </small></p>
                    </li>
                </ul>

            </div>
            <div class="dropdown d-inline-block">
               <form action="{{ action('Loginsession@sessiondelete') }}" method="post">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   <a class="btn header-color-secondary  username"  role="button" id="dropdownMenuLink" >
                       <!-- <figure class="userpic"><img src="" alt="">User image</figure> -->
                       <h5 class="text-hide-xs">

                           <button class="btn btn-rounded pink-gradient" style="border-radius: 8px;"> Logout <i class="material-icons">exit_to_app</i></button>
                       </h5>
                   </a>
               </form>
           </div>
       </div>
   </div>
</header>
<!-- main header ends -->
