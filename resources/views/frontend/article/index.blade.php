@extends('layouts.frontend')
@section('title') Trang chủ @stop

@section('content')
    <!-- ====== BLOG ARCHIVE PAGE HEADER ====== -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-header-title">Tin Tức</h1>
            <ul class="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li class="active">Tin tức</li>
            </ul>
        </div>
    </section>
    <!-- ====== POST LIST ====== -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Content -->
                    <div id="content">
                        @foreach($articles as $article)

                        <!-- Post List -->
                        <article class="post">
                            <h2 class="post-title"><a href="{{ url('tin-tuc/' .$article->path()) }}">{!! $article->name !!}</a></h2>
                            <figure class="post-image"><a href="{{ url('tin-tuc/' .$article->path()) }}"><img style="background: url({{ $article->image }}) center center no-repeat; padding-bottom: 50%; height: 0;" src="{{ $article->image }}" alt="Post list 1"></a></figure>
                            <ul class="post-meta">
                                <li class="post-author"><a href="#">{{ $article->created_at }}</a></li>
                            </ul>
                            <p class="post-entries">{!! $article->description !!}</p>
                        </article>

                        @endforeach

                        <!-- Post List Paginatino-->
                        <div class="pagination">
                            <a href="#" class="prev"></a>
                            <span class="current">1</span>
                            <a href="#" class="page">2</a>
                            <a href="#" class="page">3</a>
                            <a href="#" class="page">4</a>
                            <a href="#" class="page">5</a>
                            <a href="#" class="next"></a>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-md-4">
                    <div id="sidebar">
                        <!-- widget section Search -->
                        <div class="widget widget_search">
                            <div class="panel-box">
                                <form role="search" method="get" class="search-form" action="#">
                                    <label>
                                        <span class="screen-reader-text">Tìm kiếm:</span>
                                        <input type="search" class="search-field" placeholder="Tìm kiếm …" value="" name="s">
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
                                        <li>
                                            <a href="{{\App\Helpers\Block::get_link_article()}}">LDG Group khánh thành nhà điều hành và giới thiệu dự án Viva Park</a>
                                            <span class="post-date">20/01/2017</span>
                                        </li>
                                        <li>
                                            <a href="{{\App\Helpers\Block::get_link_article()}}">LDG Group khánh thành nhà điều hành và giới thiệu dự án Viva Park</a>
                                            <span class="post-date">20/01/2017</span>
                                        </li>
                                        <li>
                                            <a href="{{\App\Helpers\Block::get_link_article()}}">LDG Group khánh thành nhà điều hành và giới thiệu dự án Viva Park</a>
                                            <span class="post-date">20/01/2017</span>
                                        </li>
                                        <li>
                                            <a href="{{\App\Helpers\Block::get_link_article()}}">LDG Group khánh thành nhà điều hành và giới thiệu dự án Viva Park</a>
                                            <span class="post-date">20/01/2017</span>
                                        </li>
                                        <li>
                                            <a href="{{\App\Helpers\Block::get_link_article()}}">LDG Group khánh thành nhà điều hành và giới thiệu dự án Viva Park</a>
                                            <span class="post-date">20/01/2017</span>
                                        </li>
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
                                    <ul class="post-list">
                                        <!-- Post List Item -->
                                        <li>
                                            <div class="post-image"><img style="background: url(/html/assets/images/property_item_default.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="/html/assets/images/transparent.png" alt="#"></div>
                                            <div class="post-content">
                                                <span class="post-date">20/01/2017</span>
                                                <a href="{{\App\Helpers\Block::get_link_article()}}" class="post-title">Ecopark Grand – The Island: Miền tiên cảnh mới của giới đại gia Việt</a>
                                            </div>
                                        </li>
                                        <!-- Post List Item -->
                                        <li>
                                            <div class="post-image"><img style="background: url(/html/assets/images/property_item_default.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="/html/assets/images/transparent.png" alt="#"></div>
                                            <div class="post-content">
                                                <span class="post-date">20/01/2017</span>
                                                <a href="{{\App\Helpers\Block::get_link_article()}}" class="post-title">Ecopark Grand – The Island: Miền tiên cảnh mới của giới đại gia Việt</a>
                                            </div>
                                        </li>
                                        <!-- Post List Item -->
                                        <li>
                                            <div class="post-image"><img style="background: url(/html/assets/images/property_item_default.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="/html/assets/images/transparent.png" alt="#"></div>
                                            <div class="post-content">
                                                <span class="post-date">20/01/2017</span>
                                                <a href="{{\App\Helpers\Block::get_link_article()}}" class="post-title">Ecopark Grand – The Island: Miền tiên cảnh mới của giới đại gia Việt</a>
                                            </div>
                                        </li>
                                        <!-- Post List Item -->
                                        <li>
                                            <div class="post-image"><img style="background: url(/html/assets/images/property_item_default.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="/html/assets/images/transparent.png" alt="#"></div>
                                            <div class="post-content">
                                                <span class="post-date">20/01/2017</span>
                                                <a href="{{\App\Helpers\Block::get_link_article()}}" class="post-title">Ecopark Grand – The Island: Miền tiên cảnh mới của giới đại gia Việt</a>
                                            </div>
                                        </li>
                                        <!-- Post List Item -->
                                        <li>
                                            <div class="post-image"><img style="background: url(/html/assets/images/property_item_default.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="/html/assets/images/transparent.png" alt="#"></div>
                                            <div class="post-content">
                                                <span class="post-date">20/01/2017</span>
                                                <a href="{{\App\Helpers\Block::get_link_article()}}" class="post-title">Ecopark Grand – The Island: Miền tiên cảnh mới của giới đại gia Việt</a>
                                            </div>
                                        </li>
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