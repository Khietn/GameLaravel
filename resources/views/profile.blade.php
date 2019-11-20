@extends('layouts.Master')

@section('head')
@parent
@endsection

@section('main-content')
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-xl-4">
                        <div class="card-box text-center">
                            <img src="{{asset('assets/images/users/user-1.jpg')}}" class="rounded-circle avatar-lg img-thumbnail"
                                alt="profile-image">

                            <h4 class="mb-0">Geneva McKnight</h4>
                            <p class="text-muted">@webdesigner</p>

                            <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                            <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                            <div class="text-left mt-3">
                                <h4 class="font-13 text-uppercase">About Me :</h4>
                                <p class="text-muted font-13 mb-3">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type.
                                </p>
                                <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">Geneva
                                        D. McKnight</span></p>

                                <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2">(123)
                                        123 1234</span></p>

                                <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">user@email.domain</span></p>

                                <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ml-2">USA</span></p>
                            </div>

                            <ul class="social-list list-inline mt-3 mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                                            class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                            class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                            class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i
                                            class="mdi mdi-github-circle"></i></a>
                                </li>
                            </ul>
                        </div> <!-- end card-box -->

                        <div class="card-box">
                            <h4 class="header-title mb-3">Inbox</h4>

                            <div class="inbox-widget slimscroll" style="max-height: 310px;">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-2.jpg')}}" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Tomaslau</p>
                                    <p class="inbox-item-text">I've finished it! See you so...</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-3.jpg')}}" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Stillnotdavid</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-4.jpg')}}" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Kurafire</p>
                                    <p class="inbox-item-text">Nice to meet you</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>

                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-5.jpg')}}" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Shahedk</p>
                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-6.jpg')}}" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Adhamdannaway</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>

                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-3.jpg')}}" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Stillnotdavid</p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-4.jpg')}}" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Kurafire</p>
                                    <p class="inbox-item-text">Nice to meet you</p>
                                    <p class="inbox-item-date">
                                        <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                    </p>
                                </div>
                            </div> <!-- end inbox-widget -->

                        </div> <!-- end card-box-->

                    </div> <!-- end col-->

                    <div class="col-lg-8 col-xl-8">
                        <div class="card-box">
                            <ul class="nav nav-pills navtab-bg">
                                <li class="nav-item">
                                    <a href="#timeline" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                        <i class="mdi mdi-timeline mr-1"></i>Timeline
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="mdi mdi-settings-outline mr-1"></i>Settings
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                
                                <div class="tab-pane show active" id="timeline">

                                    <!-- comment box -->
                                    <form action="#" class="comment-area-box mt-2 mb-3">
                                        <span class="input-icon">
                                            <textarea rows="3" class="form-control" placeholder="Write something..."></textarea>
                                        </span>
                                        <div class="comment-area-btn">
                                            <div class="float-right">
                                                <button type="submit" class="btn btn-sm btn-dark waves-effect waves-light">Post</button>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-sm btn-light text-black-50"><i class="far fa-user"></i></a>
                                                <a href="#" class="btn btn-sm btn-light text-black-50"><i class="fa fa-map-marker-alt"></i></a>
                                                <a href="#" class="btn btn-sm btn-light text-black-50"><i class="fa fa-camera"></i></a>
                                                <a href="#" class="btn btn-sm btn-light text-black-50"><i class="far fa-smile"></i></a>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end comment box -->

                                    <!-- Story Box-->
                                    <div class="border border-light p-2 mb-3">
                                        <div class="media">
                                            <img class="mr-2 avatar-sm rounded-circle" src="{{asset('assets/images/users/user-3.jpg')}}"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="m-0">Jeremy Tomlinson</h5>
                                                <p class="text-muted"><small>about 2 minuts ago</small></p>
                                            </div>
                                        </div>
                                        <p>Story based around the idea of time lapse, animation to post soon!</p>

                                        <img src="{{asset('assets/images/small/img-1.jpg')}}" alt="post-img" class="rounded mr-1"
                                            height="60" />
                                        <img src="{{asset('assets/images/small/img-2.jpg')}}" alt="post-img" class="rounded mr-1"
                                            height="60" />
                                        <img src="{{asset('assets/images/small/img-3.jpg')}}" alt="post-img" class="rounded"
                                            height="60" />

                                        <div class="mt-2">
                                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                                    class="mdi mdi-reply"></i> Reply</a>
                                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                                    class="mdi mdi-heart-outline"></i> Like</a>
                                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                                    class="mdi mdi-share-variant"></i> Share</a>
                                        </div>
                                    </div>

                                    <!-- Story Box-->
                                    <div class="border border-light p-2 mb-3">
                                        <div class="media">
                                            <img class="mr-2 avatar-sm rounded-circle" src="{{asset('assets/images/users/user-4.jpg')}}"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="m-0">Thelma Fridley</h5>
                                                <p class="text-muted"><small>about 1 hour ago</small></p>
                                            </div>
                                        </div>
                                        <div class="font-16 text-center font-italic text-dark">
                                            <i class="mdi mdi-format-quote-open font-20"></i> Cras sit amet nibh libero, in
                                            gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                                            purus odio, vestibulum in vulputate at, tempus viverra turpis. Duis
                                            sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper
                                            porta. Mauris massa.
                                        </div>

                                        <div class="post-user-comment-box">
                                            <div class="media">
                                                <img class="mr-2 avatar-sm rounded-circle" src="{{asset('assets/images/users/user-3.jpg')}}"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Jeremy Tomlinson <small class="text-muted">3 hours ago</small></h5>
                                                    Nice work, makes me think of The Money Pit.

                                                    <br/>
                                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2"><i
                                                        class="mdi mdi-reply"></i> Reply</a>

                                                    <div class="media mt-3">
                                                        <a class="pr-2" href="#">
                                                            <img src="{{asset('assets/images/users/user-4.jpg')}}" class="avatar-sm rounded-circle"
                                                                alt="Generic placeholder image">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Kathleen Thomas <small class="text-muted">5 hours ago</small></h5>
                                                            i'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="media mt-2">
                                                <a class="pr-2" href="#">
                                                    <img src="{{asset('assets/images/users/user-1.jpg')}}" class="rounded-circle"
                                                        alt="Generic placeholder image" height="31">
                                                </a>
                                                <div class="media-body">
                                                    <input type="text" id="simpleinput" class="form-control border-0 form-control-sm" placeholder="Add comment">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-danger"><i
                                                    class="mdi mdi-heart"></i> Like (28)</a>
                                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                                    class="mdi mdi-share-variant"></i> Share</a>
                                        </div>
                                    </div>

                                    <!-- Story Box-->
                                    <div class="border border-light p-2 mb-3">
                                        <div class="media">
                                            <img class="mr-2 avatar-sm rounded-circle" src="{{asset('assets/images/users/user-6.jpg')}}"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="m-0">Jeremy Tomlinson</h5>
                                                <p class="text-muted"><small>15 hours ago</small></p>
                                            </div>
                                        </div>
                                        <p>The parallax is a little odd but O.o that house build is awesome!!</p>

                                        <iframe src='https://player.vimeo.com/video/87993762' height='300' class="img-fluid border-0"></iframe>
                                    </div>

                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading mr-1"></i> Load more </a>
                                    </div>

                                </div>
                                <!-- end timeline content-->

                                <div class="tab-pane" id="settings">
                                    <form>
                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstname">First Name</label>
                                                    <input type="text" class="form-control" id="firstname" placeholder="Enter first name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastname">Last Name</label>
                                                    <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="userbio">Bio</label>
                                                    <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..."></textarea>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="useremail">Email Address</label>
                                                    <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                                                    <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="userpassword">Password</label>
                                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                                    <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Company Info</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="companyname">Company Name</label>
                                                    <input type="text" class="form-control" id="companyname" placeholder="Enter company name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cwebsite">Website</label>
                                                    <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url">
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i> Social</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="social-fb">Facebook</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="social-fb" placeholder="Url">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="social-tw">Twitter</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="social-tw" placeholder="Username">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="social-insta">Instagram</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="social-insta" placeholder="Url">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="social-lin">Linkedin</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="social-lin" placeholder="Url">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="social-sky">Skype</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fab fa-skype"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="social-sky" placeholder="@username">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="social-gh">Github</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fab fa-github"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="social-gh" placeholder="Username">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end settings content-->

                            </div> <!-- end tab-content -->
                        </div> <!-- end card-box-->

                    </div> <!-- end col -->
                </div>
                <!-- end row-->

                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Marcia J. Melia</a> </h5>
                    <p class="text-muted mb-0"><small>Product Owner</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <div class="row">
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                </div>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                        <label class="custom-control-label" for="customSwitch1">Notifications</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">API Access</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                        <label class="custom-control-label" for="customSwitch3">Auto Updates</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                        <label class="custom-control-label" for="customSwitch4">Online Status</label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-2.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-3.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-4.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-5.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('assets/images/users/user-6.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
@endsection
@section('footer')
@parent
@endsection
