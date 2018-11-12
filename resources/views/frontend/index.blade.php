@extends('layouts.frontend')

@section('title') Trang chủ @stop

@section('content')
    <!-- ====== PAGE BUILDER TEMPLATE ====== -->
    <section id="page-builder" class="page-section">
        <!-- HERO IMAGE WITH SEARCH FORM -->
        <div class="row tpb-row"
             style="background-image: url(/html/assets/images/home_hero_image_default.jpg); padding-top: 144px; padding-bottom: 168px; margin: 0; background-size: cover; background-position: center;">
            <div class="tpb tpb-property_simple_search col-md-12">
                <div class="container">
                    <?=\App\Helpers\Block::form_search();?>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== FEATURED PROPERTY SECTION ====== -->
    <section id="featured-property" class="page-section">
        <div class="container">
            <?=\App\Helpers\Block::assets_hot()?>
        </div>
    </section>

    <!-- ====== BEST OFFER SECTION ====== -->
    <section id="block-house" class="page-section">
        <div class="container">
            <!-- Section Header / Title with Column Slider Control / Add 'header-column' to use this style -->
            <?=\App\Helpers\Block::assets_lease(8)?>
        </div>
    </section>
    <!-- ====== BEST OFFER SECTION ====== -->
    <section id="block-land" class="page-section">
        <div class="container">
            <!-- Section Header / Title with Column Slider Control / Add 'header-column' to use this style -->
            <?=\App\Helpers\Block::assets_buy(8)?>
        </div>
    </section>

    <!-- ====== HOW TO BUY SECTION ====== -->
    <section id="block-news" class="page-section" style="background-image: url(/html/assets/images/main_default.jpg);">
        <div class="container">
            <!-- Section Header / Title with Column Content / Add 'header-column' to use this style -->
            <div class="section-header header-column">
                <!-- Header Title / Column 1 -->
                <h2 class="section-title"><a href="{{route('fe.article.index')}}" title="">Tin tức</a> <a class="btn-more" href="{{route('fe.article.index')}}">Xem thêm <i
                                class="fa fa-angle-double-right" aria-hidden="true"></i></a></h2>
            </div>
            <!-- Panel Wrapper for Panel Box Container -->
            <div class="panel-wrapper">
                <div id="product-house" class="row">
            @foreach ($articles as $key => $article)
                    <div class="col-md-3 col-sm-6">
                        <!-- Property Item -->
                        <?=\App\Helpers\Block::news_item($article)?>
                    </div>
            @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ====== TESTIMONY SECTION ====== -->
    <section id="testimony" class="page-section">
        <div class="container">
            <!-- Section Header / Title with Column Slider Control / Add 'header-column' to use this style -->
            <div class="section-header header-column">
                <h2 class="section-title"><a href="{{route('fe.article.fengshui')}}" title="">Phong thủy</a> <a class="btn-more" href="{{route('fe.article.fengshui')}}">Xem thêm <i
                                class="fa fa-angle-double-right" aria-hidden="true"></i></a></h2>
                <!-- Slider Control -->
                <div class="slide-control">
                    <button id="content-left" class="slide-left content-left"><i class="fa fa-angle-left"></i></button>
                    <button id="content-right" class="slide-right content-right"><i class="fa fa-angle-right"></i></button>
                </div>
            </div>
            <!-- Testimony Slider Content -->
            <div id="content-slider" class="content-slider testimony-wrapper">
                <!-- Testimony Slider Item -->
                @foreach($fengshuis->chunk(2) as $chunk)
                <div class="slider-item">
                    <!-- Testimony Left -->
                    @foreach($chunk as $key=>$item)
                        <?=\App\Helpers\Block::fengshui_item($item, $key%2==0?'item-left':'item-right')?>
                    @endforeach
                    <!-- Testimony Right -->
                </div>
                @endforeach

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