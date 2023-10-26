<html>

<head>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])
    @vite(['resources/assets/css/main.min.css'])
    @vite(['resources/assets/css/style.css'])
    @vite(['resources/assets/css/color.css'])
    @vite(['resources/assets/css/responsive.css'])
</head>

<body class="antialiased">
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">

        <div class="responsive-header">
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                    <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                </span>
                <span class="mh-text">
                    <a href="newsfeed.html" title=""><img src="{{ Vite::asset('resources/assets/images/logo2.jpg') }}" alt=""></a>
                </span>
                <span class="mh-btns-right">
                    <a class="fa fa-sliders" href="#shoppingbag"></a>
                </span>
            </div>
            <div class="mh-head second">
                <form class="mh-form">
                    <input placeholder="search" />
                    <a href="#/" class="fa fa-search"></a>
                </form>
            </div>
            <nav id="menu" class="res-menu">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" title="">Home</a>
                        <ul>
                            <li><a href="{{ route('home') }}" title="">Home</a></li>

                            <li><a href="{{ route('dashboard') }}" title="">Dashboard</a></li>

                        </ul>
                    </li>
                    <li><span>Time Line</span>
                        <ul>
                            <li><a href="/time-line" title="">timeline</a></li>
                            <li><a href="timeline-friends.html" title="">timeline friends</a></li>
                            <li><a href="timeline-groups.html" title="">timeline groups</a></li>
                            <li><a href="timeline-pages.html" title="">timeline pages</a></li>
                            <li><a href="timeline-photos.html" title="">timeline photos</a></li>
                            <li><a href="timeline-videos.html" title="">timeline videos</a></li>
                            <li><a href="fav-page.html" title="">favourit page</a></li>
                            <li><a href="groups.html" title="">groups page</a></li>
                            <li><a href="page-likers.html" title="">Likes page</a></li>
                            <li><a href="people-nearby.html" title="">people nearby</a></li>


                        </ul>
                    </li>
                    <li><span>Account Setting</span>
                        <ul>
                            <li><a href="create-fav-page.html" title="">create fav page</a></li>
                            <li><a href="edit-account-setting.html" title="">edit account setting</a></li>
                            <li><a href="edit-interest.html" title="">edit-interest</a></li>
                            <li><a href="edit-password.html" title="">edit-password</a></li>
                            <li><a href="edit-profile-basic.html" title="">edit profile basics</a></li>
                            <li><a href="edit-work-eductation.html" title="">edit work educations</a></li>
                            <li><a href="messages.html" title="">message box</a></li>
                            <li><a href="inbox.html" title="">Inbox</a></li>
                            <li><a href="notifications.html" title="">notifications page</a></li>
                        </ul>
                    </li>
                    <li><span>forum</span>
                        <ul>
                            <li><a href="forum.html" title="">Forum Page</a></li>
                            <li><a href="forums-category.html" title="">Fourm Category</a></li>
                            <li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
                            <li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
                        </ul>
                    </li>
                    <li><span>Our Shop</span>
                        <ul>
                            <li><a href="shop.html" title="">Shop Products</a></li>
                            <li><a href="shop-masonry.html" title="">Shop Masonry Products</a></li>
                            <li><a href="shop-single.html" title="">Shop Detail Page</a></li>
                            <li><a href="shop-cart.html" title="">Shop Product Cart</a></li>
                            <li><a href="shop-checkout.html" title="">Product Checkout</a></li>
                        </ul>
                    </li>
                    <li><span>Our Blog</span>
                        <ul>
                            <li><a href="blog-grid-wo-sidebar.html" title="">Our Blog</a></li>
                            <li><a href="blog-grid-right-sidebar.html" title="">Blog with R-Sidebar</a></li>
                            <li><a href="blog-grid-left-sidebar.html" title="">Blog with L-Sidebar</a></li>
                            <li><a href="blog-masonry.html" title="">Blog Masonry Style</a></li>
                            <li><a href="blog-list-wo-sidebar.html" title="">Blog List Style</a></li>
                            <li><a href="blog-list-right-sidebar.html" title="">Blog List with R-Sidebar</a>
                            </li>
                            <li><a href="blog-list-left-sidebar.html" title="">Blog List with L-Sidebar</a></li>
                            <li><a href="blog-detail.html" title="">Blog Post Detail</a></li>
                        </ul>
                    </li>
                    <li><span>Portfolio</span>
                        <ul>
                            <li><a href="portfolio-2colm.html" title="">Portfolio 2col</a></li>
                            <li><a href="portfolio-3colm.html" title="">Portfolio 3col</a></li>
                            <li><a href="portfolio-4colm.html" title="">Portfolio 4col</a></li>
                        </ul>
                    </li>
                    <li><span>Support & Help</span>
                        <ul>
                            <li><a href="support-and-help.html" title="">Support & Help</a></li>
                            <li><a href="support-and-help-detail.html" title="">Support & Help Detail</a></li>
                            <li><a href="support-and-help-search-result.html" title="">Support & Help Search
                                    Result</a></li>
                        </ul>
                    </li>
                    <li><span>More pages</span>
                        <ul>
                            <li><a href="careers.html" title="">Careers</a></li>
                            <li><a href="career-detail.html" title="">Career Detail</a></li>
                            <li><a href="404.html" title="">404 error page</a></li>
                            <li><a href="404-2.html" title="">404 Style2</a></li>
                            <li><a href="faq.html" title="">faq's page</a></li>
                            <li><a href="insights.html" title="">insights</a></li>
                            <li><a href="knowledge-base.html" title="">knowledge base</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html" title="">about</a></li>
                    <li><a href="about-company.html" title="">About Us2</a></li>
                    <li><a href="contact.html" title="">contact</a></li>
                    <li><a href="contact-branches.html" title="">Contact Us2</a></li>
                    <li><a href="widgets.html" title="">Widgts</a></li>
                </ul>
            </nav>
            <nav id="shoppingbag">
                <div>
                    <div class="">
                        <form method="post">
                            <div class="setting-row">
                                <span>use night mode</span>
                                <input type="checkbox" id="nightmode" />
                                <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notifications</span>
                                <input type="checkbox" id="switch2" />
                                <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notification sound</span>
                                <input type="checkbox" id="switch3" />
                                <label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>My profile</span>
                                <input type="checkbox" id="switch4" />
                                <label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show profile</span>
                                <input type="checkbox" id="switch5" />
                                <label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                        <h4 class="panel-title">Account Setting</h4>
                        <form method="post">
                            <div class="setting-row">
                                <span>Sub users</span>
                                <input type="checkbox" id="switch6" />
                                <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>personal account</span>
                                <input type="checkbox" id="switch7" />
                                <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Business account</span>
                                <input type="checkbox" id="switch8" />
                                <label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show me online</span>
                                <input type="checkbox" id="switch9" />
                                <label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Delete history</span>
                                <input type="checkbox" id="switch10" />
                                <label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Expose author name</span>
                                <input type="checkbox" id="switch11" />
                                <label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div><!-- responsive header -->


        <div class="topbar stick">
            <div class="logo">
                <a title="" href="{{ route('home') }}"><img src="{{ Vite::asset('resources/assets/images/logo.png') }}" alt=""></a>
            </div>

            <div class="top-area">
                <ul class="">
                    @if (auth()->check() && auth()->user()->role === 'admin')
                    <li>
                        <a href="{{ route('dashboard') }}" title="">Dashboard</a>
                    </li>
                    @endif

                    <li>
                        <a href="{{ route('editProfile') }}" title=""> Settings</a>
                    </li>
                </ul>

                <ul class="setting-area">

                    <li><a href="{{ route('home') }}" title="Home" data-ripple=""><i class="ti-home"></i></a></li>

                    <li>
                        <a href="#" title="Notification" data-ripple="">
                            <i class="ti-bell"></i><span>20</span>
                        </a>
                        <div class="dropdowns">
                            <span>4 New Notifications</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-1.jpg') }}" alt="">
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-2.jpg') }}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Reply</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-3.jpg') }}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue">Unseen</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-4.jpg') }}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Tom cruse</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-5.jpg') }}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Amy</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                            </ul>
                            <a href="notifications.html" title="" class="more-mesg">view more</a>
                        </div>
                    </li>
                    <li>
                        <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                        <div class="dropdowns">
                            <span>5 New Messages</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-1.jpg') }}" alt="">
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-2.jpg') }}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Reply</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-3.jpg') }}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue">Unseen</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-4.jpg') }}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Tom cruse</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-5.jpg') }}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Amy</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                            </ul>
                            <a href="messages.html" title="" class="more-mesg">view more</a>
                        </div>
                    </li>
                    <li><a href="{{ route('editProfile') }}" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>

                    </li>
                </ul>
                <div class="user-img">
                    <img width="50px" height="60px" src="{{ Vite::asset('resources/assets/images/profile.png') }}" alt="">
                    <span class="status f-online"></span>
                    <div class="user-setting">
                        <a href="#" title=""><span class="status f-online"></span>online</a>
                        {{-- <a href="#" title=""><span class="status f-away"></span>away</a>
					<a href="#" title=""><span class="status f-off"></span>offline</a> --}}
                        @if (Auth::check())
                        <a href="{{ route('profile') }}" title=""><i class="ti-user"></i>
                            {{ Auth::user()->name }}</a>
                        @endif
                        <a href="{{ route('editProfile') }}" title=""><i class="ti-pencil-alt"></i>edit
                            profile</a>
                        <a href="" title=""><i class="ti-target"></i>activity log</a>
                        <a href="{{ route('editProfile') }}" title=""><i class="ti-settings"></i>account
                            setting</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
								  document.getElementById('logout-form').submit();">
                            <i class="ti-power-off"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                <span class="ti-menu main-menu" data-ripple=""></span>

            </div>
        </div>

        <section>
            <div class="feature-photo">
                <figure><img src="{{ Vite::asset('resources/assets/images/resources/timeline-1.jpg') }}" alt=""></figure>
                {{-- <div class="add-btn">
                    <span>1205 followers</span>
                    <a href="#" title="" data-ripple="">Add Friend</a>
                </div> --}}
                <form class="edit-phto">
                    <i class="fa fa-camera-retro"></i>
                    <label class="fileContainer">
                        Edit Cover Photo
                        <input type="file" />
                    </label>
                </form>
                <div class="container-fluid">
                    <div class="row merged">
                        <div class="col-lg-2 col-sm-3">
                            <div class="user-avatar">
                                <figure>
                                    <img src="{{ Vite::asset('resources/assets/images/profile.png') }}" alt="">
                                    <form class="edit-phto">
                                        <i class="fa fa-camera-retro"></i>
                                        <label class="fileContainer">
                                            Edit Display Photo
                                            <input type="file" />
                                        </label>
                                    </form>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-9">
                            <div class="timeline-info">
                                <ul>
                                    <li class="admin-name">
                                        <h5>{{ Auth::user()->name }}</h5>
                                    </li>
                                    <li>
                                        <a class="active" href="/time-line" title="" data-ripple="">time
                                            line</a>
                                        <a class="" href="timeline-photos.html" title="" data-ripple="">Photos</a>
                                        <a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
                                        <a class="" href="timeline-friends.html" title="" data-ripple="">Friends</a>
                                        <a class="" href="timeline-groups.html" title="" data-ripple="">Groups</a>
                                        <a class="" href="about.html" title="" data-ripple="">about</a>
                                        <a class="" href="#" title="" data-ripple="">more</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- top area -->

        <section>
            <div class="gap gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row" id="page-contents">
                                <div class="col-lg-3">
                                    <aside class="sidebar static">
                                        <div class="widget">
                                            <h4 class="widget-title">Socials</h4>
                                            <ul class="socials">
                                                <li class="facebook">
                                                    <a title="" href="#"><i class="fa fa-facebook"></i>
                                                        <span>facebook</span> <ins>45 likes</ins></a>
                                                </li>
                                                <li class="twitter">
                                                    <a title="" href="#"><i class="fa fa-twitter"></i>
                                                        <span>twitter</span><ins>25 likes</ins></a>
                                                </li>
                                                <li class="google">
                                                    <a title="" href="#"><i class="fa fa-google"></i>
                                                        <span>google</span><ins>35 likes</ins></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="widget">
                                            <h4 class="widget-title">Shortcuts</h4>
                                            <ul class="naves">
                                                <li>
                                                    <i class="ti-clipboard"></i>
                                                    <a href="newsfeed.html" title="">News feed</a>
                                                </li>
                                                <li>
                                                    <i class="ti-mouse-alt"></i>
                                                    <a href="inbox.html" title="">Inbox</a>
                                                </li>
                                                <li>
                                                    <i class="ti-files"></i>
                                                    <a href="fav-page.html" title="">My pages</a>
                                                </li>
                                                <li>
                                                    <i class="ti-user"></i>
                                                    <a href="timeline-friends.html" title="">friends</a>
                                                </li>
                                                <li>
                                                    <i class="ti-image"></i>
                                                    <a href="timeline-photos.html" title="">images</a>
                                                </li>
                                                <li>
                                                    <i class="ti-video-camera"></i>
                                                    <a href="timeline-videos.html" title="">videos</a>
                                                </li>
                                                <li>
                                                    <i class="ti-comments-smiley"></i>
                                                    <a href="messages.html" title="">Messages</a>
                                                </li>
                                                <li>
                                                    <i class="ti-bell"></i>
                                                    <a href="notifications.html" title="">Notifications</a>
                                                </li>
                                                <li>
                                                    <i class="ti-share"></i>
                                                    <a href="people-nearby.html" title="">People Nearby</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-bar-chart-o"></i>
                                                    <a href="insights.html" title="">insights</a>
                                                </li>
                                                <li>
                                                    <i class="ti-power-off"></i>
                                                    <a href="landing.html" title="">Logout</a>
                                                </li>
                                            </ul>
                                        </div><!-- Shortcuts -->
                                        <div class="widget">
                                            <h4 class="widget-title">Recent Activity</h4>
                                            <ul class="activitiez">
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>10 hours Ago</i>
                                                        <span><a href="#" title="">Commented on Video
                                                                posted </a></span>
                                                        <h6>by <a href="newsfeed.html">black demon.</a></h6>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>30 Days Ago</i>
                                                        <span><a href="newsfeed.html" title="">Posted your
                                                                status. “Hello guys, how are you?”</a></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>2 Years Ago</i>
                                                        <span><a href="#" title="">Share a video on her
                                                                timeline.</a></span>
                                                        <h6>"<a href="newsfeed.html">you are so funny mr.been.</a>"
                                                        </h6>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- recent activites -->
                                        <div class="widget stick-widget">
                                            <h4 class="widget-title">Who's follownig</h4>
                                            <ul class="followers">
                                                <li>
                                                    <figure><img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar2.jpg') }}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="/time-line" title="">Kelly Bill</a>
                                                        </h4>
                                                        <a href="#" title="" class="underline">Add
                                                            Friend</a>
                                                    </div>
                                                </li>


                                                <li>
                                                    <figure><img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar8.jpg') }}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="/time-line" title="">Sophia</a></h4>
                                                        <a href="#" title="" class="underline">Add
                                                            Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar3.jpg') }}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="/time-line" title="">Allen</a></h4>
                                                        <a href="#" title="" class="underline">Add
                                                            Friend</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- who's following -->
                                    </aside>
                                </div><!-- sidebar -->
                                <div class="col-lg-6">
                                    @csrf <!-- This is for CSRF protection -->
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success" id="success-alert">
                                        <p>{{ $message }}</p>
                                    </div>
                                    <script>
                                        // Add JavaScript to hide the alert after 2 seconds
                                        setTimeout(function() {
                                            var successAlert = document.getElementById('success-alert');
                                            successAlert.style.display = 'none';
                                        }, 2000); // 2000 milliseconds = 2 seconds
                                    </script>
                                    @endif
                                    <div class="central-meta">
                                        <div class="new-postbox">
                                            <figure>
                                                <img width="50px" height="60px" src="{{ Vite::asset('resources/assets/images/profile.png') }}" alt="">
                                            </figure>
                                            <div class="newpst-input">
                                                @error('content')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                                @error('image')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <textarea name="content" rows="2" placeholder="write something"></textarea>
                                                    <div class="attachments">
                                                        <ul>

                                                            <li>
                                                                <i class="fa fa-image"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file" name="image" id="image">
                                                                </label>
                                                            </li>

                                                            <li>
                                                                <button type="submit">Post</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div><!-- add post new box -->
                                    <div class="loadMore">
                                        @foreach ($posts as $post)
                                        <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img src="{{ Vite::asset('resources/assets/images/profile.png') }}" alt="">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <ins><a href="time-line.html" title=""> {{ Auth::user()->name }}
                                                            </a></ins>
                                                        <span>published: {{ $post->created_at }}</span>
                                                    </div>
                                                    <div class="post-meta">
                                                        @if ($post->image)
                                                        <a href="{{ asset('storage/' . $post->image) }}" target="_blank"><img src="{{ asset('storage/' . $post->image) }}" alt="Image"></a>
                                                        @endif
                                                        <div class="we-video-info">
                                                            <ul>
                                                                <li>
                                                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                                                        <i class="fa fa-comments-o"></i>
                                                                        <ins>{{ $post->comments }}</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="like" data-toggle="tooltip" title="like">
                                                                        <i class="ti-heart"></i>
                                                                        <ins>{{ $post->likes }}</ins>
                                                                    </span>
                                                                </li>
                                                                <li class="social-media">
                                                                    <div class="menu">
                                                                        <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="description">

                                                            <p>{{ $post->content }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if (isset($commentsByPost[$post->id]))
                                                @foreach ($commentsByPost[$post->id] as $comment)
                                                <div class="coment-area">
                                                    <ul class="we-comet">
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="{{ Vite::asset('resources/assets/images/profile.png') }}" alt="" style="width: 40px; height: 40px;">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="time-line.html" title="">{{ $comment->user->name }}</a></h5>
                                                                    <span>{{ $comment->created_at->diffForHumans() }}</span>
                                                                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn-delete-comment" onclick="return confirm('Are you sure you want to delete this comment?')">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                                <p>{{ $comment->content }}</p>
                                                                <br>
                                                                @if ($comment->file)
                                                                <a href="{{ asset('storage/' . $comment->file) }}" target="_blank"><img src="{{ asset('storage/' . $comment->file) }}" alt="Image" style="width: 100px; height: 50px;"></a>
                                                                @endif
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                @endforeach
                                                @endif

                                            </div>
                                            <form action="{{ route('comments.store') }}" method="post" enctype="multipart/form-data">
                                                @csrf <!-- This is for CSRF protection -->
                                                <textarea name="content" id="content" class="form-control" rows="4"></textarea>
                                                <input type="hidden" name="post_id" value="{{ $post->id }}">

                                                <div class="attachments">
                                                    <ul>
                                                        <li>
                                                            <label for="file" class="custom-file-upload">
                                                                <i class="fa fa-cloud-upload"></i>
                                                            </label>
                                                            <input type="file" name="file" id="file" class="form-control-file">
                                                        </li>
                                                        <li>
                                                            <button type="submit">Comment</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </form>

                                        </div>
                                        @endforeach
                                    </div>
                                </div><!-- centerl meta -->
                                <div class="col-lg-3">
                                    <div class="col-lg-3">
                                        <aside class="sidebar static">
                                            <div class="widget">
                                                <div class="banner medium-opacity bluesh">
                                                    <div style="background-image: url(images/resources/baner-widgetbg.jpg)" class="bg-image"></div>
                                                    <div class="baner-top">
                                                        <span><img src="{{ Vite::asset('resources/assets/images/book-icon.jpg') }}" alt=""></span>
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </div>
                                                    <div class="banermeta">
                                                        <p>
                                                            create your own favourit page.
                                                        </p>
                                                        <span>like them all</span>
                                                        <a href="#" title="" data-ripple="">start now!</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget friend-list stick-widget">
                                                <h4 class="widget-title">Friends</h4>
                                                <div id="searchDir"></div>
                                                <ul id="people-list" class="friendz-list">
                                                    <li>
                                                        <figure>
                                                            <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar.jpg') }}" alt="">
                                                            <span class="status f-online"></span>
                                                        </figure>
                                                        <div class="friendz-meta">
                                                            <a href="/time-line">bucky barnes</a>
                                                            <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f2836312b3a2d2c30333b3a2d1f38323e3633713c3032">[email&#160;protected]</a></i>
                                                        </div>
                                                    </li>

                                                    <li>

                                                        <figure>
                                                            <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar7.jpg') }}" alt="">
                                                            <span class="status f-off"></span>
                                                        </figure>
                                                        <div class="friendz-meta">
                                                            <a href="/time-line">amy watson</a>
                                                            <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0cac1d3cfcec2e0c7cdc1c9cc8ec3cfcd">[email&#160;protected]</a></i>
                                                        </div>
                                                    </li>
                                                    <li>

                                                        <figure>
                                                            <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar5.jpg') }}" alt="">
                                                            <span class="status f-online"></span>
                                                        </figure>
                                                        <div class="friendz-meta">
                                                            <a href="/time-line">daniel warber</a>
                                                            <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6f050e1c00010d2f08020e0603410c0002">[email&#160;protected]</a></i>
                                                        </div>
                                                    </li>
                                                    <li>

                                                        <figure>
                                                            <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar2.jpg') }}" alt="">
                                                            <span class="status f-away"></span>
                                                        </figure>
                                                        <div class="friendz-meta">
                                                            <a href="/time-line">Sarah Loren</a>
                                                            <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c5a7a4b7aba0b685a2a8a4aca9eba6aaa8">[email&#160;protected]</a></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="chat-box">
                                                    <div class="chat-head">
                                                        <span class="status f-online"></span>
                                                        <h6>Bucky Barnes</h6>
                                                        <div class="more">
                                                            <span><i class="ti-more-alt"></i></span>
                                                            <span class="close-mesage"><i class="ti-close"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="chat-list">
                                                        <ul>
                                                            <li class="me">
                                                                <div class="chat-thumb"><img src="{{ Vite::asset('resources/assets/images/resources/chatlist1.jpg') }}" alt=""></div>
                                                                <div class="notification-event">
                                                                    <span class="chat-message-item">
                                                                        Hi James! Please remember to buy the food for
                                                                        tomorrow! I’m gonna be handling the gifts and Jake’s
                                                                        gonna get the drinks
                                                                    </span>
                                                                    <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at
                                                                            8:10pm</time></span>
                                                                </div>
                                                            </li>
                                                            <li class="you">
                                                                <div class="chat-thumb"><img src="{{ Vite::asset('resources/assets/images/resources/chatlist2.jpg') }}" alt=""></div>
                                                                <div class="notification-event">
                                                                    <span class="chat-message-item">
                                                                        Hi James! Please remember to buy the food for
                                                                        tomorrow! I’m gonna be handling the gifts and Jake’s
                                                                        gonna get the drinks
                                                                    </span>
                                                                    <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at
                                                                            8:10pm</time></span>
                                                                </div>
                                                            </li>
                                                            <li class="me">
                                                                <div class="chat-thumb"><img src="{{ Vite::asset('resources/assets/images/resources/chatlist1.jpg') }}" alt=""></div>
                                                                <div class="notification-event">
                                                                    <span class="chat-message-item">
                                                                        Hi James! Please remember to buy the food for
                                                                        tomorrow! I’m gonna be handling the gifts and Jake’s
                                                                        gonna get the drinks
                                                                    </span>
                                                                    <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at
                                                                            8:10pm</time></span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <form class="text-box">
                                                            <textarea placeholder="Post enter to post..."></textarea>
                                                            <div class="add-smiles">
                                                                <span title="add icon" class="em em-expressionless"></span>
                                                            </div>
                                                            <div class="smiles-bunch">
                                                                <i class="em em---1"></i>
                                                                <i class="em em-smiley"></i>
                                                                <i class="em em-anguished"></i>
                                                                <i class="em em-laughing"></i>
                                                                <i class="em em-angry"></i>
                                                                <i class="em em-astonished"></i>
                                                                <i class="em em-blush"></i>
                                                                <i class="em em-disappointed"></i>
                                                                <i class="em em-worried"></i>
                                                                <i class="em em-kissing_heart"></i>
                                                                <i class="em em-rage"></i>
                                                                <i class="em em-stuck_out_tongue"></i>
                                                            </div>
                                                            <button type="submit"></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!-- friends list sidebar -->
                                        </aside>
                                    </div><!-- sidebar -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget">
                            <div class="foot-logo">
                                <div class="logo">
                                    <a href="/home" title=""><img src="images/logo.jpg" alt=""></a>
                                </div>
                                <p>
                                    The trio took this simple idea and built it into the world’s leading carpooling
                                    platform.
                                </p>
                            </div>
                            <ul class="location">
                                <li>
                                    <i class="ti-map-alt"></i>
                                    <p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p>+1-56-346 345</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>follow</h4>
                            </div>
                            <ul class="list-style">
                                <li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
                                <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
                                <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
                                <li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
                                <li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Navigate</h4>
                            </div>
                            <ul class="list-style">
                                <li><a href="about.html" title="">about us</a></li>
                                <li><a href="contact.html" title="">contact us</a></li>
                                <li><a href="terms.html" title="">terms & Conditions</a></li>
                                <li><a href="#" title="">RSS syndication</a></li>
                                <li><a href="sitemap.html" title="">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>useful links</h4>
                            </div>
                            <ul class="list-style">
                                <li><a href="#" title="">leasing</a></li>
                                <li><a href="#" title="">submit route</a></li>
                                <li><a href="#" title="">how does it work?</a></li>
                                <li><a href="#" title="">agent listings</a></li>
                                <li><a href="#" title="">view All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>download apps</h4>
                            </div>
                            <ul class="colla-apps">
                                <li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
                                <li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
                                <li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer -->
        <div class="bottombar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="copyright">© Winku 2018. All rights reserved.</span>
                        <i><img src="images/credit-cards.jpg" alt=""></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="side-panel">
        <h4 class="panel-title">General Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>use night mode</span>
                <input type="checkbox" id="nightmode1" />
                <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notifications</span>
                <input type="checkbox" id="switch22" />
                <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notification sound</span>
                <input type="checkbox" id="switch33" />
                <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>My profile</span>
                <input type="checkbox" id="switch44" />
                <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show profile</span>
                <input type="checkbox" id="switch55" />
                <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
        <h4 class="panel-title">Account Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>Sub users</span>
                <input type="checkbox" id="switch66" />
                <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>personal account</span>
                <input type="checkbox" id="switch77" />
                <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Business account</span>
                <input type="checkbox" id="switch88" />
                <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show me online</span>
                <input type="checkbox" id="switch99" />
                <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Delete history</span>
                <input type="checkbox" id="switch101" />
                <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Expose author name</span>
                <input type="checkbox" id="switch111" />
                <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
    </div><!-- side panel -->
    @vite(['resources/assets/js/script.js'])
    @vite(['resources/assets/js/map-init.js'])
    @vite(['https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI'])
    @vite(['/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js'])
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>