<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

<body class="antialiased">
    <div class="theme-layout">


        <div class="topbar stick">
            <div class="logo">
                <a title="" href="home"><img src="{{ Vite::asset('resources/assets/images/logo.png') }}" alt=""></a>
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
        </div><!-- topbar -->

        <section>
            <div class="gap gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row" id="page-contents">
                                <div class="col-lg-3">
                                    <aside class="sidebar static">
                                        <div class="widget">
                                            <h4 class="widget-title">Shortcuts</h4>
                                            <ul class="naves">
                                                <li>
                                                    <i class="ti-clipboard"></i>
                                                    <a href="newsfeed.html" title="">News feed</a>
                                                </li>
                                                <li>
                                                    <i class="ti-mouse-alt"></i>
                                                    <a href="/inbox">Inbox</a>

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
                                                        <h6>by <a href="time-line.html">black demon.</a></h6>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>30 Days Ago</i>
                                                        <span><a href="#" title="">Posted your status.
                                                                “Hello guys, how are you?”</a></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>2 Years Ago</i>
                                                        <span><a href="#" title="">Share a video on her
                                                                timeline.</a></span>
                                                        <h6>"<a href="#">you are so funny mr.been.</a>"</h6>
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
                                                        <h4><a href="time-line.html" title="">Kelly Bill</a>
                                                        </h4>
                                                        <a href="#" title="" class="underline">Add
                                                            Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar4.jpg') }}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Issabel</a></h4>
                                                        <a href="#" title="" class="underline">Add
                                                            Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar6.jpg') }}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Andrew</a></h4>
                                                        <a href="#" title="" class="underline">Add
                                                            Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar8.jpg') }}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Sophia</a></h4>
                                                        <a href="#" title="" class="underline">Add
                                                            Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar3.jpg') }}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Allen</a></h4>
                                                        <a href="#" title="" class="underline">Add
                                                            Friend</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- who's following -->
                                    </aside>
                                </div><!-- sidebar -->
                                <div class="col-lg-6">
                                    <div class="central-meta">
                                        <div class="new-postbox">
                                            <figure>
                                                <img src="{{ Vite::asset('resources/assets/images/resources/admin2.jpg') }}" alt="">
                                            </figure>
                                            <div class="newpst-input">
                                                <form action="{{ route('posts.store') }}" method="post">
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
                                                    <textarea name="content" rows="2" placeholder="write something"></textarea>
                                                    <div class="attachments">
                                                        <ul>
                                                            <li>
                                                                <i class="fa fa-music"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file" name="music_attachment">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-image"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file" name="image_attachment">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-video-camera"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file" name="video_attachment">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-camera"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file" name="camera_attachment">
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
                                        <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar10.jpg') }}" alt="">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <ins><a href="time-line.html" title="">Janice
                                                                Griffith</a></ins>
                                                        <span>published: june,2 2018 19:PM</span>
                                                    </div>
                                                    <div class="post-meta">
                                                        <img src="{{ Vite::asset('resources/assets/images/resources/user-post.jpg') }}" alt="">
                                                        <div class="we-video-info">
                                                            <ul>
<<<<<<< HEAD
                                                                <li>
                                                                    <span class="views" data-toggle="tooltip" title="views">
                                                                        <i class="fa fa-eye"></i>
                                                                        <ins>1.2k</ins>
                                                                    </span>
                                                                </li>
=======

>>>>>>> c3d417c6aa3bea38fd79a6bae88bad80006cf910
                                                                <li>
                                                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                                                        <i class="fa fa-comments-o"></i>
                                                                        <ins>52</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="like" data-toggle="tooltip" title="like">
                                                                        <i class="ti-heart"></i>
                                                                        <ins>2.2k</ins>
                                                                    </span>
                                                                </li>
<<<<<<< HEAD
                                                                <li>
                                                                    <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                        <i class="ti-heart-broken"></i>
                                                                        <ins>200</ins>
                                                                    </span>
                                                                </li>
=======

>>>>>>> c3d417c6aa3bea38fd79a6bae88bad80006cf910
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

                                                            <p>
                                                                World's most beautiful car in Curabitur <a href="#" title="">#test drive booking
                                                                    !</a> the most beatuiful car available in america
                                                                and the saudia arabia, you can book your test drive by
                                                                our official website
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="coment-area">
                                                    <ul class="we-comet">
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="{{ Vite::asset('resources/assets/images/resources/comet-1.jpg') }}" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="time-line.html" title="">Jason
                                                                            borne</a></h5>
                                                                    <span>1 year ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>we are working for the dance and sing songs. this car
                                                                    is very awesome for the youngster. please vote this
                                                                    car and like our post</p>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div class="comet-avatar">
                                                                        <img src="{{ Vite::asset('resources/assets/images/resources/comet-2.jpg') }}" alt="">
                                                                    </div>
                                                                    <div class="we-comment">
                                                                        <div class="coment-head">
                                                                            <h5><a href="time-line.html" title="">alexendra dadrio</a>
                                                                            </h5>
                                                                            <span>1 month ago</span>
                                                                            <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                        </div>
                                                                        <p>yes, really very awesome car i see the
                                                                            features of this car in the official website
                                                                            of <a href="#" title="">#Mercedes-Benz</a> and
                                                                            really impressed :-)</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="comet-avatar">
                                                                        <img src="{{ Vite::asset('resources/assets/images/resources/comet-3.jpg') }}" alt="">
                                                                    </div>
                                                                    <div class="we-comment">
                                                                        <div class="coment-head">
                                                                            <h5><a href="time-line.html" title="">Olivia</a></h5>
                                                                            <span>16 days ago</span>
                                                                            <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                        </div>
                                                                        <p>i like lexus cars, lexus cars are most
                                                                            beautiful with the awesome features, but
                                                                            this car is really outstanding than lexus
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="{{ Vite::asset('resources/assets/images/resources/comet-1.jpg') }}" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="time-line.html" title="">Donald
                                                                            Trump</a></h5>
                                                                    <span>1 week ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster. please vote
                                                                    this video and like our channel
                                                                    <i class="em em-smiley"></i>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more comments</a>
                                                        </li>
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="{{ Vite::asset('resources/assets/images/resources/comet-1.jpg') }}" alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="post">
                                                                    <textarea placeholder="Post your comment"></textarea>
                                                                    <div class="add-smiles">
                                                                        <span class="em em-expressionless" title="add icon"></span>
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
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
<<<<<<< HEAD
                                        <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img src="{{ Vite::asset('resources/assets/images/resources/nearly1.jpg') }}" alt="">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <ins><a href="time-line.html" title="">Sara
                                                                Grey</a></ins>
                                                        <span>published: june,2 2018 19:PM</span>
                                                    </div>
                                                    <div class="post-meta">
                                                        <iframe src="https://player.vimeo.com/video/15232052" height="315" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                        <div class="we-video-info">
                                                            <ul>
                                                                <li>
                                                                    <span class="views" data-toggle="tooltip" title="views">
                                                                        <i class="fa fa-eye"></i>
                                                                        <ins>1.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                                                        <i class="fa fa-comments-o"></i>
                                                                        <ins>52</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="like" data-toggle="tooltip" title="like">
                                                                        <i class="ti-heart"></i>
                                                                        <ins>2.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                        <i class="ti-heart-broken"></i>
                                                                        <ins>200</ins>
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

                                                            <p>
                                                                Lonely Cat Enjoying in Summer Curabitur <a href="#" title="">#mypage</a>
                                                                ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                                                                Maecenas tempus, tellus eget condimentum rhoncus, sem
                                                                quam semper libero, sit amet adipiscing sem neque sed
                                                                ipsum. Nam quam nunc,
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="coment-area">
                                                    <ul class="we-comet">
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="{{ Vite::asset('resources/assets/images/resources/comet-1.jpg') }}" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="time-line.html" title="">Jason
                                                                            borne</a></h5>
                                                                    <span>1 year ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster. please vote
                                                                    this video and like our channel</p>
                                                            </div>

                                                        </li>
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="{{ Vite::asset('resources/assets/images/resources/comet-2.jpg') }}" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="time-line.html" title="">Sophia</a></h5>
                                                                    <span>1 week ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster.
                                                                    <i class="em em-smiley"></i>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more comments</a>
                                                        </li>
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="{{ Vite::asset('resources/assets/images/resources/comet-2.jpg') }}" alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="post">
                                                                    <textarea placeholder="Post your comment"></textarea>
                                                                    <div class="add-smiles">
                                                                        <span class="em em-expressionless" title="add icon"></span>
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
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img src="{{ Vite::asset('resources/assets/images/resources/nearly6.jpg') }}" alt="">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <ins><a href="time-line.html" title="">Sophia</a></ins>
                                                        <span>published: january,5 2018 19:PM</span>
                                                    </div>
                                                    <div class="post-meta">
                                                        <div class="post-map">
                                                            <div class="nearby-map">
                                                                <div id="map-canvas"></div>
                                                            </div>
                                                        </div><!-- near by map -->
                                                        <div class="we-video-info">
                                                            <ul>
                                                                <li>
                                                                    <span class="views" data-toggle="tooltip" title="views">
                                                                        <i class="fa fa-eye"></i>
                                                                        <ins>1.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                                                        <i class="fa fa-comments-o"></i>
                                                                        <ins>52</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="like" data-toggle="tooltip" title="like">
                                                                        <i class="ti-heart"></i>
                                                                        <ins>2.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                        <i class="ti-heart-broken"></i>
                                                                        <ins>200</ins>
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

                                                            <p>
                                                                Curabitur Lonely Cat Enjoying in Summer <a href="#" title="">#mypage</a>
                                                                ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                                                                Maecenas tempus, tellus eget condimentum rhoncus, sem
                                                                quam semper libero, sit amet adipiscing sem neque sed
                                                                ipsum. Nam quam nunc,
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="coment-area">
                                                    <ul class="we-comet">
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="{{ Vite::asset('resources/assets/images/resources/comet-1.jpg') }}" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="time-line.html" title="">Jason
                                                                            borne</a></h5>
                                                                    <span>1 year ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster. please vote
                                                                    this video and like our channel</p>
                                                            </div>

                                                        </li>
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="{{ Vite::asset('resources/assets/images/resources/comet-2.jpg') }}" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="time-line.html" title="">Sophia</a></h5>
                                                                    <span>1 week ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster.
                                                                    <i class="em em-smiley"></i>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more comments</a>
                                                        </li>
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="{{ Vite::asset('resources/assets/images/resources/comet-2.jpg') }}" alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="post">
                                                                    <textarea placeholder="Post your comment"></textarea>
                                                                    <div class="add-smiles">
                                                                        <span class="em em-expressionless" title="add icon"></span>
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
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img alt="" src="{{ Vite::asset('resources/assets/images/resources/friend-avatar10.jpg') }}">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <ins><a title="" href="time-line.html">Janice
                                                                Griffith</a></ins>
                                                        <span>published: june,2 2018 19:PM</span>
                                                    </div>
                                                    <div class="description">

                                                        <p>
                                                            Curabitur World's most beautiful car in <a title="" href="#">#test drive booking !</a> the most
                                                            beatuiful car available in america and the saudia arabia,
                                                            you can book your test drive by our official website
                                                        </p>
                                                    </div>
                                                    <div class="post-meta">
                                                        <div class="linked-image align-left">
                                                            <a title="" href="#"><img alt="" src="{{ Vite::asset('resources/assets/images/resources/page1.jpg') }}"></a>
                                                        </div>
                                                        <div class="detail">
                                                            <span>Love Maid - ChillGroves</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit,
                                                                sed do eiusmod tempor incididunt ut labore et dolore
                                                                magna aliqua... </p>
                                                            <a title="" href="#">www.sample.com</a>
                                                        </div>
                                                        <div class="we-video-info">
                                                            <ul>
                                                                <li>
                                                                    <span class="views" data-toggle="tooltip" title="views">
                                                                        <i class="fa fa-eye"></i>
                                                                        <ins>1.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                                                        <i class="fa fa-comments-o"></i>
                                                                        <ins>52</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="like" data-toggle="tooltip" title="like">
                                                                        <i class="ti-heart"></i>
                                                                        <ins>2.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                        <i class="ti-heart-broken"></i>
                                                                        <ins>200</ins>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
=======
>>>>>>> c3d417c6aa3bea38fd79a6bae88bad80006cf910
                                    </div>
                                </div><!-- centerl meta -->
                                <div class="col-lg-3">
                                    <aside class="sidebar static">
                                        <div class="widget">
                                            <h4 class="widget-title">Your page</h4>
                                            <div class="your-page">
                                                <figure>
                                                    <a href="#" title=""><img src="{{ Vite::asset('resources/assets/images/resources/friend-avatar9.jpg') }}" alt=""></a>
                                                </figure>
                                                <div class="page-meta">
                                                    <a href="#" title="" class="underline">My page</a>
                                                    <span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em>9</em></a></span>
                                                    <span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em>2</em></a></span>
                                                </div>
                                                <div class="page-likes">
                                                    <ul class="nav nav-tabs likes-btn">
                                                        <li class="nav-item"><a class="active" href="#link1" data-toggle="tab">likes</a></li>
                                                        <li class="nav-item"><a class="" href="#link2" data-toggle="tab">views</a></li>
                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div class="tab-pane active fade show " id="link1">
                                                            <span><i class="ti-heart"></i>884</span>
                                                            <a href="#" title="weekly-likes">35 new likes this
                                                                week</a>
                                                            <div class="users-thumb-list">
                                                                <a href="#" title="Anderw" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-1.jpg') }}" alt="">
                                                                </a>
                                                                <a href="#" title="frank" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-2.jpg') }}" alt="">
                                                                </a>
                                                                <a href="#" title="Sara" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-3.jpg') }}" alt="">
                                                                </a>
                                                                <a href="#" title="Amy" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-4.jpg') }}" alt="">
                                                                </a>
                                                                <a href="#" title="Ema" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-5.jpg') }}" alt="">
                                                                </a>
                                                                <a href="#" title="Sophie" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-6.jpg') }}" alt="">
                                                                </a>
                                                                <a href="#" title="Maria" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-7.jpg') }}" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="link2">
                                                            <span><i class="ti-eye"></i>440</span>
                                                            <a href="#" title="weekly-likes">440 new views
                                                                this week</a>
                                                            <div class="users-thumb-list">
                                                                <a href="#" title="Anderw" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-1.jpg') }}" alt="">
                                                                </a>
                                                                <a href="#" title="frank" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-2.jpg') }}" alt="">
                                                                </a>
                                                                <a href="#" title="Sara" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-3.jpg') }}" alt="">
                                                                </a>
                                                                <a href="#" title="Amy" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-4.jpg') }}" alt="">
                                                                </a>
                                                                <a href="#" title="Ema" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-5.jpg') }}" alt="">
                                                                </a>
                                                                <a href="#" title="Sophie" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-6.jpg') }}" alt="">
                                                                </a>
                                                                <a href="#" title="Maria" data-toggle="tooltip">
                                                                    <img src="{{ Vite::asset('resources/assets/images/resources/userlist-7.jpg') }}" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- page like widget -->
                                        <div class="widget">
                                            <div class="banner medium-opacity bluesh">
                                                <div class="bg-image" style="background-image: url(images/resources/baner-widgetbg.jpg)">
                                                </div>
                                                <div class="baner-top">
                                                    <span><img alt="" src="images/book-icon.png"></span>
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </div>
                                                <div class="banermeta">
                                                    <p>
                                                        create your own favourit page.
                                                    </p>
                                                    <span>like them all</span>
                                                    <a data-ripple="" title="" href="#">start now!</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget friend-list stick-widget">
                                            <h4 class="widget-title">Friends</h4>
                                            <div id="searchDir"></div>
                                            <ul id="people-list" class="friendz-list">
                                                <li>
                                                    <figure>
                                                        <img src="images/resources/friend-avatar.jpg" alt="">
                                                        <span class="status f-online"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="time-line.html">bucky barnes</a>
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bdcad4d3c9d8cfced2d1d9d8cffddad0dcd4d193ded2d0">[email&#160;protected]</a></i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/resources/friend-avatar2.jpg" alt="">
                                                        <span class="status f-away"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="time-line.html">Sarah Loren</a>
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96f4f7e4f8f3e5d6f1fbf7fffab8f5f9fb">[email&#160;protected]</a></i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/resources/friend-avatar3.jpg" alt="">
                                                        <span class="status f-off"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="time-line.html">jason borne</a>
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="503a31233f3e3210373d31393c7e333f3d">[email&#160;protected]</a></i>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/resources/friend-avatar4.jpg" alt="">
                                                        <span class="status f-off"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="time-line.html">Cameron diaz</a>
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="157f74667a7b77557278747c793b767a78">[email&#160;protected]</a></i>
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="images/resources/friend-avatar5.jpg" alt="">
                                                        <span class="status f-online"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="time-line.html">daniel warber</a>
<<<<<<< HEAD
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dcb6bdafb3b2be9cbbb1bdb5b0f2bfb3b1">[email&#160;protected]</a></i>
=======
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                data-cfemail="dcb6bdafb3b2be9cbbb1bdb5b0f2bfb3b1">[email&#160;protected]</a></i>
>>>>>>> c3d417c6aa3bea38fd79a6bae88bad80006cf910
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="images/resources/friend-avatar6.jpg" alt="">
                                                        <span class="status f-away"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="time-line.html">andrew</a>
<<<<<<< HEAD
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7bdb6a4b8b9b597b0bab6bebbf9b4b8ba">[email&#160;protected]</a></i>
=======
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                data-cfemail="d7bdb6a4b8b9b597b0bab6bebbf9b4b8ba">[email&#160;protected]</a></i>
>>>>>>> c3d417c6aa3bea38fd79a6bae88bad80006cf910
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="images/resources/friend-avatar7.jpg" alt="">
                                                        <span class="status f-off"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="time-line.html">amy watson</a>
<<<<<<< HEAD
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aec4cfddc1c0cceec9c3cfc7c280cdc1c3">[email&#160;protected]</a></i>
=======
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                data-cfemail="aec4cfddc1c0cceec9c3cfc7c280cdc1c3">[email&#160;protected]</a></i>
>>>>>>> c3d417c6aa3bea38fd79a6bae88bad80006cf910
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="images/resources/friend-avatar5.jpg" alt="">
                                                        <span class="status f-online"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="time-line.html">daniel warber</a>
<<<<<<< HEAD
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9c3c8dac6c7cbe9cec4c8c0c587cac6c4">[email&#160;protected]</a></i>
=======
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                data-cfemail="a9c3c8dac6c7cbe9cec4c8c0c587cac6c4">[email&#160;protected]</a></i>
>>>>>>> c3d417c6aa3bea38fd79a6bae88bad80006cf910
                                                    </div>
                                                </li>
                                                <li>

                                                    <figure>
                                                        <img src="images/resources/friend-avatar2.jpg" alt="">
                                                        <span class="status f-away"></span>
                                                    </figure>
                                                    <div class="friendz-meta">
                                                        <a href="time-line.html">Sarah Loren</a>
<<<<<<< HEAD
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="adcfccdfc3c8deedcac0ccc4c183cec2c0">[email&#160;protected]</a></i>
=======
                                                        <i><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                data-cfemail="adcfccdfc3c8deedcac0ccc4c183cec2c0">[email&#160;protected]</a></i>
>>>>>>> c3d417c6aa3bea38fd79a6bae88bad80006cf910
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
                                                            <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
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
                                                            <div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt=""></div>
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
                                                            <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
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
                                    <a href="home" title=""><img src="images/logo.png" alt=""></a>
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
                        <i><img src="images/credit-cards.png" alt=""></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="resources/assets/js/script.js"></script>

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