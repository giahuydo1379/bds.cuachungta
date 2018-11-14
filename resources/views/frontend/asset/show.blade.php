@extends('layouts.frontend')
@section('title') Trang chủ @stop

@section('content')
    <!-- ====== SINGLE PROPERTY PAGE HEADER ====== -->
    <section class="page-header">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li class="active">Nhà Đất cho thuê</li>
            </ul>
        </div>
    </section>
    <!-- ====== SINGLE PROPERTY CONTENT ====== -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Content -->
                    <div id="content">
                        <!-- Property Single Detail / Description -->
                        <article class="post property-item">
                            <div class="post-property-header">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <h3 class="post-title">{{$object['name']}}</h3>
                                    </div>
                                    <div class="col-md-4 col-sm-4 text-right">
                                        <span class="property-price">{{$object['price']}}</span>
                                    </div>
                                </div>
                                <?php
                                $tmp = [];
                                if ($object['district_name']) $tmp[] = $object['district_name'];
                                if ($object['province_name']) $tmp[] = $object['province_name'];
                                $tmp = implode(", ", $tmp);
                                ?>
                                <div class="property-address">{{$tmp}}</div>
                                <div class="property-label">
                                    <a href="#" class="property-label__type">{{$object['acreage']}}</a>
                                </div>
                            </div>
                            <!-- Property Gallery Slider -->
                            <div class="property-image">
                                <div id="property-slider" class="property-slider">
                                    <img src="{{$object['image_url'].$object['image']}}" alt="">
                                    @foreach($images as $item)
                                        <img src="{{$item['image_url'].$item['image']}}" alt="">
                                    @endforeach
                                </div>
                                <!-- Property Gallery Slider Navigation -->
                                <div id="property-slider-nav" class="property-slider-nav">
                                    <img src="{{$object['image_url'].$object['image']}}" alt="">
                                    @foreach($images as $item)
                                        <img src="{{$item['image_url'].$item['image']}}" alt="">
                                    @endforeach
                                </div>
                            </div>
                            <!-- Property facility Detail -->
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span>{{$object['acreage']}}</div>
                                <div class="item-room"><span class="fi flaticon-room"></span> 4</div>
                                <div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
                                <div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
                            </div>
                            <div class="property-content">
                                {!! $object['content'] !!}
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <h3 class="heading-title">Không gian</h3>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <ul class="feature-list">
                                        <li>Phòng ngủ: <strong>2</strong></li>
                                        <li>Phòng khách: <strong>1</strong></li>
                                        <li>Phòng bếp: <strong>1</strong></li>
                                        <li>Toilet: <strong>2</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Facilities Section -->
                        </article>
                        <!-- Property Location / Map -->
                        @if (isset($object['embed_map']))
                        <div class="property-location widget panel-box">
                            <div class="panel-header">
                                <h3 class="panel-title">Property Location</h3>
                            </div>
                            <div class="panel-body">
                                <div id="map">{!! $object-> embed_map !!}</div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Sidebar -->
                    <!-- Sidebar -->
                    <div id="sidebar">
                        <!-- widget Booking -->
                        <!-- widget section Search Property -->
                        <div class="widget">
                            <!-- Search Tabmenu -->
                            @include('frontend.blocks.form-search-list')
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
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
@stop