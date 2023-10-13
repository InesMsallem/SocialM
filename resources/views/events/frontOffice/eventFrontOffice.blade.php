<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])
    @vite(['resources/assets/css/main.min.css'])
    @vite(['resources/assets/css/style.css'])
    @vite(['resources/assets/css/color.css'])
    @vite(['resources/assets/css/responsive.css'])

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <div class="topbar stick">
            <div class="logo">
                <a title="" href="home"><img src="{{ Vite::asset('resources/assets/images/logo.png') }}"
                        alt=""></a>
            </div>

            <div class="top-area">
                <ul class="main-menu">
                    <li>
                        <a href="#" title="">Home</a>
                        <ul>
                            <li><a href="{{ route('dashboard') }}" title="">Dashboard</a></li>
                            <li><a href="index-company.html" title="">Home Company</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" title="">timeline</a>
                        <ul>
                            <li><a href="time-line.html" title="">timeline</a></li>
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
                    <li>
                        <a href="#" title="">account settings</a>
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
                    <li>
                        <a href="#" title="">more pages</a>
                        <ul>
                            <li><a href="404.html" title="">404 error page</a></li>
                            <li><a href="about.html" title="">about</a></li>
                            <li><a href="contact.html" title="">contact</a></li>
                            <li><a href="faq.html" title="">faq's page</a></li>
                            <li><a href="insights.html" title="">insights</a></li>
                            <li><a href="knowledge-base.html" title="">knowledge base</a></li>
                            <li><a href="widgets.html" title="">Widgts</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="setting-area">
                    <li>
                        <a href="" title="Home" data-ripple=""><i class="ti-search"></i></a>
                        <div class="searched">
                            <form method="post" class="form-search">
                                <input type="text" placeholder="Search Friend">
                                <button data-ripple><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li><a href="" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
                    <li>
                        <a href="#" title="Notification" data-ripple="">
                            <i class="ti-bell"></i><span>20</span>
                        </a>
                        <div class="dropdowns">
                            <span>4 New Notifications</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-1.jpg') }}"
                                            alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-2.jpg') }}"
                                            alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-3.jpg') }}"
                                            alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-4.jpg') }}"
                                            alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-5.jpg') }}"
                                            alt="">
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
                        <a href="#" title="Messages" data-ripple=""><i
                                class="ti-comment"></i><span>12</span></a>
                        <div class="dropdowns">
                            <span>5 New Messages</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-1.jpg') }}"
                                            alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-2.jpg') }}"
                                            alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-3.jpg') }}"
                                            alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-4.jpg') }}"
                                            alt="">
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
                                        <img src="{{ Vite::asset('resources/assets/images/thumb-5.jpg') }}"
                                            alt="">
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
                    <li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
                        <div class="dropdowns languages">
                            <a href="#" title=""><i class="ti-check"></i>English</a>
                            <a href="#" title="">Arabic</a>
                            <a href="#" title="">Dutch</a>
                            <a href="#" title="">French</a>
                        </div>
                    </li>
                </ul>
                <div class="user-img">
                    <img src="{{ Vite::asset('resources/assets/images/resources/admin.jpg') }}" alt="">
                    <span class="status f-online"></span>
                    <div class="user-setting">
                        <a href="#" title=""><span class="status f-online"></span>online</a>
                        {{-- <a href="#" title=""><span class="status f-away"></span>away</a>
                        <a href="#" title=""><span class="status f-off"></span>offline</a> --}}
                        @if (Auth::check())
                            <a href="#" title=""><i class="ti-user"></i> {{ Auth::user()->name }}</a>
                        @endif
                        <a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                        <a href="" title=""><i class="ti-target"></i>activity log</a>
                        <a href="#" title=""><i class="ti-settings"></i>account setting</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
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
        </div><!-- topbar -->
        <section>
            <div class="gap gray-bg">
                <div class="container-fluid">
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
                                <div class="widget stick-widget">
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

                                    </ul>
                                </div><!-- Shortcuts -->
                            </aside>
                        </div>
                        <div class="col-lg-9">
                            <div class="blog-sec right-pading">
                                <div class="post-filter-sec">
                                    <form method="post" class="filter-form">
                                        <input type="post" placeholder="Search event">
                                        <button><i class="ti-search"></i></button>
                                    </form>
                                    <div class="purify">
                                        <span>filter by</span>
                                        <select>
                                            <option>All categories</option>
                                            <option>By Favouirtes</option>
                                            <option>By Likes</option>
                                        </select>
                                        <select>
                                            <option>Assending A-Z</option>
                                            <option>Desending Z-A</option>
                                            <option>Desending (date)</option>
                                            <option>Asending (date)</option>
                                        </select>
                                        <a href="#" title="" data-toggle="modal"
                                            data-target="#myModal">Add</a>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Your form goes here -->
                                                    <form method="POST" action="{{ route('addEventPost') }}">
                                                        @csrf <!-- Add CSRF token -->
                                                        <div class="form-group">
                                                            <input type="text" name="title" required="required"
                                                                placeholder="Event Title" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="location" required="required"
                                                                placeholder="Event Location" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="datetime-local" name="start_time"
                                                                required="required" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="datetime-local" name="end_time"
                                                                required="required" />
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="description" rows="4" required="required" placeholder="Event Description"></textarea>
                                                        </div>

                                                        <div class="submit-btns">
                                                            <button type="button" class="mtr-btn"
                                                                data-dismiss="modal"><span>Cancel</span></button>
                                                            <button type="submit" class="mtr-btn"><span>Create
                                                                </span></button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @foreach ($events as $event)
                                    <div class="l-post">
                                        <figure>
                                            <img src="{{ Vite::asset('resources/assets/images/resources/bloglist-4.jpg') }}"
                                                alt="image">
                                            <ul class="blg-socials">
                                                <li><a href="#" title="" class="facebook"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="" class="youtube"><i
                                                            class="fa fa-youtube"></i></a></li>

                                            </ul>
                                        </figure>
                                        <div class="l-post-meta">
                                            <h4><a href="#" title="">{{ $event->title }}</a></h4>
                                            <div class="l-post-ranking">
                                                <a class="admin" href="#"
                                                    title="">{{ $event->creator->name }}</a>
                                                <a class="time-post" href="#" title=""> -
                                                    {{ $event->created_at->format('l F jS') }} </a>
                                            </div>
                                            <p>
                                                {{ $event->description }} </p>
                                            <div class="g-post-ranking">
                                                <a class="likes" href="#" title=""><i
                                                        class="fa fa-heart-o"></i>10
                                                    Participants</a>
                                                <a class="coments" href="#" title=""><i
                                                        class="fa fa-comment-o"></i>5 Review</a>
                                            </div>
                                            <a href="#" title="" class="read">
                                                <form action="{{ route('eventParticipate', $event->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @if ($event->participants->contains(auth()->user()))
                                                        <button>Participated </button>
                                                    @else
                                                        <form action="{{ route('eventParticipate', $event->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit">Participate in Event</button>
                                                        </form>
                                                    @endif
                                                </form>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach

                                <button class="btn-view btn-load-more">Load More</button>
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
                                    <a href="index.html" title=""><img src="images/logo.png"
                                            alt=""></a>
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
                                <li><i class="fa fa-facebook-square"></i> <a
                                        href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
                                <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en"
                                        title="">twitter</a></li>
                                <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en"
                                        title="">instagram</a></li>
                                <li><i class="fa fa-google-plus-square"></i> <a
                                        href="https://plus.google.com/discover" title="">Google+</a></li>

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
                                <li><a href="https://play.google.com/store?hl=en" title=""><i
                                            class="fa fa-android"></i>android</a></li>
                                <li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i
                                            class="ti-apple"></i>iPhone</a></li>
                                <li><a href="https://www.microsoft.com/store/apps" title=""><i
                                            class="fa fa-windows"></i>Windows</a></li>
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
                        <i><img src="images/credit-cards.png" alt=""></i>
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

    <script src="resources/assets/js/script.js"></script>

    @vite(['resources/assets/js/script.js'])
    @vite(['resources/assets/js/map-init.js'])
    @vite(['https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI'])
    @vite(['/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js'])
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
