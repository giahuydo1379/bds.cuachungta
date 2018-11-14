@extends('layouts.frontend')

@section('title') {!! $articles->name !!} @stop

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
                               
                                <blockquote>
                                    <p>{!! $articles->description !!}</p>
                                    <footer></footer>
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
                                @if ($articlePrevious != null)
                                <div class="nav-previous">
                                    <a href="{{ url('tin-tuc/' .$articlePrevious->path()) }}" rel="prev"><span class="nav-post-title">Trờ về</span><span
                                                class="nav-post-name">{{  $articlePrevious->name }}</span></a>
                                </div>
                                @endif

                                @if ($articleNext != null)        
                                <div class="nav-next">
                                    <a href="{{ url('tin-tuc/' .$articleNext->path()) }}" rel="prev"><span class="nav-post-title">Tiếp theo</span><span
                                    class="nav-post-name">{{ $articleNext->name }}</span></a>
                                </div>
                                @endif
                        
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
                                    @foreach($postRandom as $post)
                                    <li>
                                        <a class="post-image" href="{{ url('tin-tuc/' .$post->path()) }}"><img
                                        src="{{ $post->image }}"
                                                    style="background-image: url({{ $post->image }});  padding-bottom: 56.25%; height: 0; background-size: cover; background-position: center;"
                                                    alt="Image"></a>
                                        <div class="post-content">
                                        <a href="{{ url('tin-tuc/' .$post->path()) }}" class="post-title">{{ $post->name }}</a>
                                        <span class="post-date">{{ $post->updated_at }}</span>
                                        </div>
                                    </li>
                                    @endforeach
                                    
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
                                                <a href="{{ url('tin-tuc/' .$ishot->path()) }}">{!! $ishot->name !!}</a>
                                                <span class="post-date">{!! $ishot->updated_at !!}</span>
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
                                                    <span class="post-date">{!! $iscommon->updated_at !!}</span>
                                                    <a href="{{ url('tin-tuc/' .$iscommon->path()) }}" class="post-title">{!! $iscommon->name !!}</a>
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