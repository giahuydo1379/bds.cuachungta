@extends('layouts.frontend')
@section('title') Trang chủ @stop

@section('content')
    <!-- ====== SINGLE POST / BLOG CONTENT ====== -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Content -->
                    <div id="content">
                        <!-- Post Entries-->
                        <article class="post">
                            <h2 class="post-title"><a href="#">{!! $articles->name!!}</a></h2>
                            <figure class="post-image"><a href="#"><img src="{{ $articles->image}}" alt=""></a></figure>
                            <div class="post-entries">
                                {!! $articles->description !!}
                                <blockquote>
                                    <p>Bố trí phòng làm việc hợp phong thủy sẽ hỗ trợ cho sự nghiệp thăng tiến</p>
                                    <footer>Vinh Nguyen</footer>
                                </blockquote>
                                {!! $articles->content !!}
                                <div class="widget">
                                    <div class="share-box">
                                        <h4>Share:</h4>
                                        <ul class="share-box-list">
                                            <li>
                                                <a href="#" class="facebook">
                                                    <i class="fa fa-facebook"></i>
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter">
                                                    <i class="fa fa-twitter"></i>
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="pinterest">
                                                    <i class="fa fa-pinterest"></i>
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="google">
                                                    <i class="fa fa-google"></i>
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="rss">
                                                    <i class="fa fa-rss"></i>
                                                    <i class="fa fa-rss"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="envelope">
                                                    <i class="fa fa-envelope"></i>
                                                    <i class="fa fa-envelope"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <nav class="navigation post-navigation" role="navigation">
                            <h2 class="screen-reader-text">Trở về</h2>
                            <div class="nav-links">
                                <div class="nav-previous">
                                    <a href="#" rel="prev"><span class="nav-post-title">Trờ về</span><span
                                                class="nav-post-name">Bố trí văn phòng hợp phong thủy giúp tăng vượng khí</span></a>
                                </div>
                                <div class="nav-next">
                                    <a href="#" rel="prev"><span class="nav-post-title">Tiếp theo</span><span
                                                class="nav-post-name">Phương pháp kích hoạt tài lộc cho không gian ngồi làm việc</span></a>
                                </div>
                            </div>
                        </nav>
                        <div class="related-post widget panel-box">
                            <!-- Related Post Title -->
                            <div class="panel-header">
                                <h3 class="panel-title">Tin liên quan</h3>
                            </div>
                            <!-- Related Post List -->
                            <div class="panel-body">
                                <ul class="post-list">
                                    <li>
                                        <a class="post-image" href="single-blog.html"><img
                                                    src="/html/assets/images/transparent.png"
                                                    style="background-image: url(assets/images/1.jpg);  padding-bottom: 56.25%; height: 0; background-size: cover; background-position: center;"
                                                    alt="Image"></a>
                                        <div class="post-content">
                                            <a href="single-blog.html" class="post-title">Hai màu trắng - đen có ý
                                                nghĩa, mối liên hệ gì với người mệnh Thủy?</a>
                                            <span class="post-date">02/01/2017</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="post-image" href="single-blog.html"><img
                                                    src="/html/assets/images/transparent.png"
                                                    style="background-image: url(assets/images/1.jpg);  padding-bottom: 56.25%; height: 0; background-size: cover; background-position: center;"
                                                    alt="Image"></a>
                                        <div class="post-content">
                                            <a href="single-blog.html" class="post-title">Trang trí nội thất phòng ngủ
                                                hợp phong thủy với người tuổi Mão</a>
                                            <span class="post-date">11/10/2018</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Sidebar -->
                    <div id="sidebar">
                        <!-- widget section Search -->
                        <div class="widget widget_search">
                            <div class="panel-box">
                                <form role="search" method="get" class="search-form" action="#">
                                    <label>
                                        <span class="screen-reader-text">Tìm kiếm:</span>
                                        <input type="search" class="search-field" placeholder="Tìm kiếm …" value=""
                                               name="s">
                                    </label>
                                    <input type="submit" class="search-submit" value="Search">
                                </form>
                            </div>
                        </div>
                        <!-- widget section Recent Post -->
                        <div class="widget widget_recent_entries">
                            <div class="panel-box">
                                <div class="panel-header">
                                    <h3 class="panel-title">Tin nổi bật</h3>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        @foreach($ishots as $ishot)
                                            <li>
                                                <a href="{{ url('phong-thuy/' .$ishot->path()) }}">{!! $ishot->name !!}</a>
                                                <span class="post-date">{!! $ishot->created_at !!}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- widget section Popular Post -->
                        <div class="widget widget_popular_post">
                            <!-- Panel Box -->
                            <div class="panel-box">
                                <!-- Panel Header / Title -->
                                <div class="panel-header">
                                    <h3 class="panel-title">Tin phổ biến</h3>
                                </div>
                                <!-- Panel Body -->
                                <div class="panel-body">
                                    <!-- Post List -->
                                    <ul class="post-listb">
                                    @foreach($iscommons as $iscommon)
                                        <!-- Post List Item -->
                                            <li>
                                                <div class="post-image"><img
                                                            style="background: url({{ $iscommon->image }}) center center no-repeat; padding-bottom: 100%; height: 0;"
                                                            src="{{ $iscommon->image }}" alt="#"></div>
                                                <div class="post-content">
                                                    <span class="post-date">{!! $iscommon->created_at !!}</span>
                                                    <a href="{{ url('phong-thuy/' .$iscommon->path()) }}" class="post-title">{!! $iscommon->name !!}</a>
                                                </div>
                                            </li>
                                            <!-- Post List Item -->
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('after_script')
    <script type='text/javascript'>
        $(document).ready(function () {
        });
    </script>
@stop