
@extends('layouts.app')

@section('content')
    
<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>


                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    </div>
                    @endif



                    <!-- Begin page -->
<div id="wrapper">

<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.php" class="logo"><i class="mdi mdi-assistant"></i>Zoter</a>-->
            <a href="{{ route('home') }}" class="logo">
                <img src="assets/images/logo-lg.png" alt="" class="logo-large">
            </a>
        </div>
    </div>

    <div class="sidebar-inner niceScrollleft">

        <div id="sidebar-menu">
            <ul>
               
                <li>
                    <a href="{{ route('home') }}" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span> Home </span>
                    </a>
                </li>

                <li >
                    <a href="{{ url('/profiles') }}" class="waves-effect"><i class="mdi mdi-account-circle"></i> <span> Personal </span> </a>
                    
                </li>

                <li>
                    <a href="{{ url('/preferences') }}" class="waves-effect"><i class="typcn typcn-spanner"></i><span> Preferences </span></a>
                </li>

                

                <li >
                    <a href="{{ url('/credentials') }}" class="waves-effect"><i class="mdi mdi-book-variant"></i> <span> Credentials </span> </a>
                  
                </li>

                <li >
                    <a href="{{ url('/experiences') }}" class="waves-effect"><i class="typcn typcn-mortar-board"></i><span> Experiences </span> </a>
                    
                </li>

                <li >
                    <a href="{{ url('/skills') }}" class="waves-effect"><i class="dripicons-view-list"></i><span> Skills </span> </a>
                    
                </li>

                <li >
                    <a href="{{ url('/tests') }}" class="waves-effect"><i class="dripicons-hourglass"></i> <span> Tests </span> </a>
                    
                </li>

                <li >
                    <a href="{{ url('/documents') }}" class="waves-effect"><i class="dripicons-folder-open"></i><span> Documents </span> </a>
                    
                </li>

                

                <li >
                    <a href="{{ url('/settings') }}" class="waves-effect"><i class="mdi mdi-settings"></i><span> Settings </span> </a>
                    
                </li>

                

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->




<!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-inline float-right mb-0">
                            <!-- language-->
                            <li class="list-inline-item hide-phone app-search">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            <li class="list-inline-item dropdown notification-list hide-phone">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect text-white" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right language-switch">
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
                                    <a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
                                </div>
                            </li>
                            

                            <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="{{ route('home') }}"  role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h4>Welcome</h4>
                                        </div>
                                        <a class="dropdown-item" href="{{ url('/profiles') }}"> <i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="{{ url('/settings') }}"><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <div class="dropdown-divider"></div>

                                        <form action="{{ route('logout') }}" method="post" >
                                                @csrf
                                            <button class="dropdown-item" type="submit"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout </button>
                                        </form>
                                    </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left waves-light waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>                                
                        </ul>

                        <div class="clearfix"></div>

                    </nav>

                </div>
                <!-- Top Bar End -->
                <div class="page-content-wrapper ">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="btn-group float-right">
                                        <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#"> {{ Auth::user()->name }}</a></li>
                                            <li class="breadcrumb-item active">Home</li>
                                            <li class="breadcrumb-item active">Preferences</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Preferences</h4>


                                    @if (session('done'))
                                    <div class="alert alert-success" role="alert">
                                    {{ session('done') }}
                                    </div>
                                    @endif

                                    @if (session('failed'))
                                    <div class="alert alert-danger" role="alert">
                                    {{ session('failed') }}
                                    </div>
                                    @endif




                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- end page title end breadcrumb -->
                       


                        
                        <div id="sidebar-menu">
                                <ul>
                                   
        
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect "> <h5><span> Work Preferences </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></h5></a>
                                        <ul class="list-unstyled">
                                            
                                            <br>
                                            <form class="" action="{{ route('addworkPreferences') }}" method="post">
                                                @csrf
                                                <div class="form-group mb-0">
                                                    <!-- <label class="mb-2 pb-1" style="font-size: 20px;"><b> Date Available * </b></label> -->
                                                    <div class="form-group mb-0">
                                                        
                                                        <div>
                                                            <label class="my-2 py-1" style="font-size: 20px;"><b>Date Available *</b></label>

                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <input class="form-control" type="date" value="{{ $preferences->Work_preference_date ?? 'mm/dd/yyyy' }}" id="example-date-input" name="Work_preference_date">
                                                                </div>
                                                            </div>

                                                            
                                                        </div>
                                                    </div>
                
                                                    
                                                </div>


                                                <br>

                                               
                                                <div class="form-group mb-0">
                                                    <label class="mb-2 pb-1" style="font-size: 20px;"><b>Position Type * </b></label>
                                                    <select class="select2 form-control mb-3 custom-select" name="work_preference_position" value="{{ $preferences->work_preference_position ?? null }}">
                                                        
                                                            <option value="AK">Select an option</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="HI">Hawaii</option>
                                                    
                                                        
                                                    </select>
                    
                                                </div>
                

                                                

                                                <div class="form-group mb-0">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Save Work Preferences
                                                        </button>

                                                      
                                                    </div>

                                                    <br>
                                                </div>
                                            </form>

                                        </ul>
                                    </li>
        
                                    
        
                                </ul>

<!-- 
                                <ul>
                                   
        
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect "> <h5><span> Shift Preferences </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></h5></a>
                                        <ul class="list-unstyled">
                                            
                                            <br>
                                            <form class="" action="#">
                                                <div class="col-md-9">
            
                                                    <label class="mb-2 pb-1" style="font-size: 15px;"><b>Shifts * </b></label>
                                                    <div class="form-group row">
                                                    <div class="form-check-inline my-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck6" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck6">8 Hr Day</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-check-inline my-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck6" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck6">12 Hr Day</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-check-inline my-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck6" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck6">8 Hr Eve</label>
                                                        </div>
                                                       
                                                    </div> 

                                                    <div class="form-check-inline my-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck6" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck6">12 Hr Night</label>
                                                        </div>
                                                    </div>


                                                    <div class="form-check-inline my-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck7" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck7">
                                                                8 Hr Night</label>
                                                        </div>
                                                     </div>
                                                    
                                                </div>

                                                </div>

                                                <br>

                                               
                                                <div class="form-group mb-0">
                                                    <label class="mb-2 pb-1" style="font-size: 20px;"><b>Distance * </b></label>
                                                    <select class="select2 form-control mb-3 custom-select">
                                                        
                                                            <option value="AK">Select an option</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="HI">Hawaii</option>
                                                    
                                                        
                                                    </select>
                    
                                                </div>




                                               <br>
                                               

                                                <div class="form-group mb-0">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Confirm Shift Preferences
                                                        </button>

                                                    </div>
                                                    <br>

                                                </div>
                                            </form>

                                        </ul>
                                    </li>
        
                                    
                                  
                                   
        
                                </ul> -->


                                  
                                <ul>
                                   
        
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect "> <h5><span> Work Locations </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></h5></a>
                                        <ul class="list-unstyled">
                                            
                                            <br>
                                            <form class="" action="{{ route('addworkLocation') }}" method="post">
                                                @csrf
                                                <div class="form-group mb-0">
                                                    <label class="mb-2 pb-1" style="font-size: 20px;"><b>Select work locations</b></label>
                                                    <input type="text" class="form-control" required placeholder="Enter your full name" name="work_locations" value="{{ $preferences->work_locations ?? null }}"/>
                                                </div>

                                                <br>

                                                <div class="form-group mb-0">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit Work Locations
                                                        </button>
                                                        
                                                       
                                                    </div>
                                                    <br>
                                                </div>



                                                
                                            </form>

                                        </ul>
                                    </li>
        
                                    
                                  
                                   
        
                                </ul>




                                  
                                <ul>
                                   
        
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect "><h5><span> Notification Settings </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></h5> </a>
                                        <ul class="list-unstyled">
                                            
                                            <br>
                                            <form class="" action="{{ route('addnotification') }}" method="post">
                                                

                                            @csrf
                                             
                                            <p class="text-unmuted mb-4 font-14">How often do you want to receive notifications?</p>
                                            
                                            <select class="select2 form-control mb-3 custom-select" name="preference_notification" value="{{ $preferences->preference_notification ?? null }}">
                                                <option selected>Select</option>
                                               
                                                
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                
                                            </select>


                                               
                                               <br>
                                               

                                                <div class="form-group mb-0">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        
                                                       
                                                    </div>
                                                    <br>
                                                </div>
                                            </form>

                                        </ul>
                                    </li>
        
                                    
                                  
                                </ul>


                            </div>
                            <!-- sidebar-menu-ends -->








                        <div class="clearfix"></div>
                    </div> <!-- end sidebarinner -->


                </div><!-- container -->

                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->


            <footer class="footer">
               <b> © 2021 GHR by Course Lodge.</b>
            </footer>

        </div>
        <!-- End Right content here -->


</div>
<!-- END wrapper -->






<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>

<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="assets/plugins/skycons/skycons.min.js"></script>


<script src="assets/plugins/raphael/raphael-min.js"></script>
<script src="assets/plugins/morris/morris.min.js"></script> 
 
<script src="assets/pages/dashborad.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>




@endsection