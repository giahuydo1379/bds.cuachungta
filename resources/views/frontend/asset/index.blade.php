@extends('layouts.frontend')
<?php
$types_titles = \App\Helpers\General::get_assets_types_titles();
$breadcrumb = [['link' => '#', 'name' => $types_titles[$type]]];
if ($type=='hot') {
    if (isset($params['type'])) $breadcrumb[] = ['link' => '#', 'name' => $types_titles[$params['type']]];
}
?>
@section('title') {{$types_titles[$type]}} @stop

@section('content')
    <!-- ====== PROPERTY ARCHIVE PAGE HEADER ====== -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-header-title">{{$types_titles[$type]}}</h1>
            <ul class="breadcrumb">
                <li><a href="/">Trang chủ</a></li>
                @foreach($breadcrumb as $i => $bc)
                    @if ($i+1 == count($breadcrumb))
                        <li class="active">{{$bc['name']}}</li>
                    @else
                        <li><a href="{{$bc['link']}}">{{$bc['name']}}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </section>
    <!-- ====== PROPERTY LIST CONTENT ====== -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Content -->
                    <div id="content">
                        <div class="row">
                            @foreach($assets as $item)
                                <div class="property-item property-archive col-lg-12 col-md-6 col-sm-6">
                                    <?=\App\Helpers\Block::property_item_content($item, 'list'); ?>
                                </div>
                            @endforeach
                        </div>
                        <!-- Property List Pagination -->

                        {{ $assets->links('frontend/pagination/pagination') }}
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Sidebar -->
                    <div id="sidebar">
                        <!-- widget Booking -->
                        <!-- widget section Search Property -->
                        <div class="widget">
                            <!-- Search Tabmenu -->
                            @include('frontend.blocks.form-search-list')
                        </div>
                        <!-- widget section Contact Our Agent -->
                        <div class="widget">
                            <!-- Panel Box -->
                            <div class="panel-box">
                                <!-- Panel Header / Title -->
                                <div class="panel-header">
                                    <h3 class="panel-title">Liên hệ</h3>
                                </div>
                                <!-- Panel Body -->
                                <div class="panel-body">
                                    <div class="profile-box">
                                        <div class="profile-header">
                                            <div class="profile-img"><img src="/html/assets/images/img_author_default.jpg" alt="Vinh Lâm"></div>
                                            <h5 class="profile-title">Vinh Lâm</h5>
                                        </div>
                                        <ul class="profile-contact">
                                            <li><i class="fa fa-envelope"></i> <a href="#">vinhlam@gmail.com</a></li>
                                            <li><i class="fa fa-phone"></i> <a href="#">0973173939</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- widget section Recent Property-->
                        <div class="widget">
                            <?=\App\Helpers\Block::assets_hot_panel();?>
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