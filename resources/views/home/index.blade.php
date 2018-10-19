@extends('home.layout')
@section('title') Trang chủ @stop

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget widget-hotline">
                    <div class="media mr-xl-4">
                        <div class="mr-1">
                            <img src="{{URL::asset('/html/images/system/call-now.gif')}}" class="img-fluid" alt="">
                        </div>
                        <div class="media-body align-self-center">
                            <span class="wghl-text">Hotline</span>
                            <span class="wghl-number text-nowrap">0908 488 288</span>
                        </div>
                    </div>
                </div>
                <div class="box mt-5">
                    <?php
                    $supports = \App\Helpers\General::get_supports();
                    if ($supports) {
                    ?>
                    <h5 class="box-title mb-4"><span>Hỗ trợ trực tuyến </span></h5>
                    <div class="row box-card">
                        @foreach($supports as $item)
                        <div class="col-6">
                            <div class="media mb-3">
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="skype:{{$item['account']}}?chat" class="link-skype hvr-buzz-out"><i class="fab fa-skype fa-3x"></i></a>
                                        </div>
                                        <div class="col pl-xl-0">
                                            <a href="skype:{{$item['account']}}?chat" class="link-skype hvr-buzz-out">{{$item['name']}}</a>
                                            <br>({{$item['department']}})
                                            <br>{{$item['phone']}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-8 about">
                <div class="ml-3">
                    <h3 class="pt-title">GIỚI THIỆU</h3>
                    <hr>
                    <p><strong>Công ty TNHH Thương mại Dịch vụ Kỹ thuật Phan Thịnh</strong> là một trong những doanh
                        nghiệp chuyên cung cấp thiết bị và giải pháp trong lãnh vực Kỹ thuật điện - Đo lường - Điều
                        khiển tự động</p>
                    <p>Với chiến lược luôn đổi mới để phát triển, <strong>Công ty TNHH Thương mại Dịch vụ Kỹ thuật Phan
                            Thịnh</strong> không ngừng tìm hiểu sản phẩm mới, nâng cao chất lượng dịch vụ nhằm mang đến
                        lợi ích thiết thực cho khách hàng với những sản phẩm chất lương, dịch vụ tốt và uy tín.</p>
                    <p>Hiện nay, <strong>Công ty TNHH Thương mại Dịch vụ Kỹ thuật Phan Thịnh</strong> là nhà phân phối
                        chính thức</p>
                    <div class="row mb-5">
                        @include('home.partners')
                    </div>
                </div>
            </div>
        </div>
        @if (@$objects)
        <div class="box">
            <h5 class="box-title box-title-two mb-4"><span>Sản phẩm mới</span></h5>
            <div id="home_carousel" class="owl-carousel owl-theme">
                @foreach($objects as $a)
                    <?php
                    $link = route('article_detail', ['slug_article' => str_slug($a['name']), 'id' => $a['id']]);
                    ?>
                    <div class="card">
                        <div class="card-body d-flex">
                            <a href="{{$link}}"
                               class="align-self-center mx-auto">
                                <img class="img-fluid" alt="{{ $a['name'] }}"
                                                                      src="{{ $a['image_url'].$a['image'] }}"></a>
                        </div>
                        <div class="card-footer">
                            <h6 class="card-title m-0"><a
                                        href="{{$link}}">{{ $a['name'] }}</a>
                            </h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
@stop

@section('after_script')
    <script type='text/javascript'>
        $(document).ready(function () {
        });
    </script>
@stop