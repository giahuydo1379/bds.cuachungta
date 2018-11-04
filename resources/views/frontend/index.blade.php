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
            <!-- Section Title -->
            <div class="section-header">
                <h2 class="section-title">Tin nổi bật <a class="btn-more" href="{{route('asset.hot')}}">Xem thêm <i
                                class="fa fa-angle-double-right" aria-hidden="true"></i></a></h2>
            </div>
            <!-- Section Content -->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <!-- Property Item Tall -->
                    <div class="property-item">
                        <div class="property-header">
                            <a href="archive-property.html" class="item-category">Thuê Nhà phố</a>
                            <a href="single-property.html" class="item-title">Nhà phố Nguyễn Du Quận 1 cho thuê</a>
                            <div class="item-price">35 triệu / tháng</div>
                        </div>
                        <figure class="item-img" style="background-image: url('/html/assets/images/1.jpg');">
                            <a href="single-property.html"></a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-md-push-4 col-sm-6">
                    <!-- Property Item Tall -->
                    <div class="property-item">
                        <div class="property-header">
                            <a href="archive-property.html" class="item-category">Thuê Căn hộ</a>
                            <a href="single-property.html" class="item-title">Home city Quận 2</a>
                            <div class="item-price">10 triệu / tháng</div>
                        </div>
                        <figure class="item-img" style="background-image: url('/html/assets/images/2.jpg');">
                            <a href="single-property.html"></a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-4">
                    <!-- Property Item Short / Multiple Row Item -->
                    <div class="multiple-item">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
                                <!-- Property Item Short -->
                                <div class="property-item">
                                    <div class="property-header">
                                        <a href="archive-property.html" class="item-category">Thuê Đất</a>
                                        <a href="single-property.html" class="item-title">Thuê Đất Nông nghiệp Quận 12</a>
                                        <div class="item-price">5 triệu / tháng</div>
                                    </div>
                                    <figure class="item-img" style="background-image: url('/html/assets/images/3.jpg');">
                                        <a href="single-property.html"></a>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <!-- Property Item Short -->
                                <div class="property-item">
                                    <div class="property-header">
                                        <a href="archive-property.html" class="item-category">Thuê văn phòng</a>
                                        <a href="single-property.html" class="item-title">Thuê văn phòng công ty Quận Phú
                                            Nhuận</a>
                                        <div class="item-price">13 triệu / tháng</div>
                                    </div>
                                    <figure class="item-img" style="background-image: url('/html/assets/images/4.jpg');">
                                        <a href="single-property.html"></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== BEST OFFER SECTION ====== -->
    <section id="block-house" class="page-section">
        <div class="container">
            <!-- Section Header / Title with Column Slider Control / Add 'header-column' to use this style -->
            <div class="section-header header-column">
                <h2 class="section-title"><a href="{{route('asset.lease')}}" title="">Nhà đất cho thuê</a> <a class="btn-more" href="{{route('asset.lease')}}">Xem thêm <i
                                class="fa fa-angle-double-right" aria-hidden="true"></i></a></h2>
            </div>
            <div id="product-house" class="row">
                <div class="col-md-3 col-sm-6">
                    <!-- Property Item -->
                    <div class="property-item">
                        <div class="property-heading">
                            <span class="item-price">10 triệu / tháng</span>
                            <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                        </div>
                        <div class="img-box">
                            <div class="property-label">
                                <a href="#" class="property-label__type">nhà cho thuê</a>
                            </div>
                            <a href="single-property.html" class="img-box__image"><img
                                        style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                        src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="property-content">
                            <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ
                                NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                            <div class="property-address">
                                Cầu Giấy, Hà Nội
                            </div>
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                                <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- Property Item -->
                    <div class="property-item">
                        <div class="property-heading">
                            <span class="item-price">10 triệu / tháng</span>
                            <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                        </div>
                        <div class="img-box">
                            <div class="property-label">
                                <a href="#" class="property-label__type">nhà cho thuê</a>
                            </div>
                            <a href="single-property.html" class="img-box__image"><img
                                        style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                        src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="property-content">
                            <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ
                                NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                            <div class="property-address">
                                Cầu Giấy, Hà Nội
                            </div>
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                                <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- Property Item -->
                    <div class="property-item">
                        <div class="property-heading">
                            <span class="item-price">10 triệu / tháng</span>
                            <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                        </div>
                        <div class="img-box">
                            <div class="property-label">
                                <a href="#" class="property-label__type">nhà cho thuê</a>
                            </div>
                            <a href="single-property.html" class="img-box__image"><img
                                        style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                        src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="property-content">
                            <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ
                                NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                            <div class="property-address">
                                Cầu Giấy, Hà Nội
                            </div>
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                                <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- Property Item -->
                    <div class="property-item">
                        <div class="property-heading">
                            <span class="item-price">10 triệu / tháng</span>
                            <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                        </div>
                        <div class="img-box">
                            <div class="property-label">
                                <a href="#" class="property-label__type">nhà cho thuê</a>
                            </div>
                            <a href="single-property.html" class="img-box__image"><img
                                        style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                        src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="property-content">
                            <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ
                                NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                            <div class="property-address">
                                Cầu Giấy, Hà Nội
                            </div>
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                                <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- Property Item -->
                    <div class="property-item">
                        <div class="property-heading">
                            <span class="item-price">10 triệu / tháng</span>
                            <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                        </div>
                        <div class="img-box">
                            <div class="property-label">
                                <a href="#" class="property-label__type">nhà cho thuê</a>
                            </div>
                            <a href="single-property.html" class="img-box__image"><img
                                        style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                        src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="property-content">
                            <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ
                                NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                            <div class="property-address">
                                Cầu Giấy, Hà Nội
                            </div>
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                                <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- Property Item -->
                    <div class="property-item">
                        <div class="property-heading">
                            <span class="item-price">10 triệu / tháng</span>
                            <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                        </div>
                        <div class="img-box">
                            <div class="property-label">
                                <a href="#" class="property-label__type">nhà cho thuê</a>
                            </div>
                            <a href="single-property.html" class="img-box__image"><img
                                        style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                        src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="property-content">
                            <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ
                                NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                            <div class="property-address">
                                Cầu Giấy, Hà Nội
                            </div>
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                                <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- Property Item -->
                    <div class="property-item">
                        <div class="property-heading">
                            <span class="item-price">10 triệu / tháng</span>
                            <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                        </div>
                        <div class="img-box">
                            <div class="property-label">
                                <a href="#" class="property-label__type">nhà cho thuê</a>
                            </div>
                            <a href="single-property.html" class="img-box__image"><img
                                        style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                        src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="property-content">
                            <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ
                                NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                            <div class="property-address">
                                Cầu Giấy, Hà Nội
                            </div>
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                                <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- Property Item -->
                    <div class="property-item">
                        <div class="property-heading">
                            <span class="item-price">10 triệu / tháng</span>
                            <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                        </div>
                        <div class="img-box">
                            <div class="property-label">
                                <a href="#" class="property-label__type">nhà cho thuê</a>
                            </div>
                            <a href="single-property.html" class="img-box__image"><img
                                        style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                        src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="property-content">
                            <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ
                                NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                            <div class="property-address">
                                Cầu Giấy, Hà Nội
                            </div>
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                                <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== BEST OFFER SECTION ====== -->
    <section id="block-land" class="page-section">
        <div class="container">
            <!-- Section Header / Title with Column Slider Control / Add 'header-column' to use this style -->
            <div class="section-header header-column">
                <h2 class="section-title"><a href="{{route('asset.buy')}}">Nhà đất cần thuê</a> <a class="btn-more" href="{{route('asset.buy')}}">Xem thêm <i
                                class="fa fa-angle-double-right" aria-hidden="true"></i></a></h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- Property Item -->
                <div class="property-item">
                    <div class="property-heading">
                        <span class="item-price">10 triệu / tháng</span>
                        <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                    </div>
                    <div class="img-box">
                        <div class="property-label">
                            <a href="#" class="property-label__type">nhà cho thuê</a>
                        </div>
                        <a href="single-property.html" class="img-box__image"><img
                                    style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                    src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                    </div>
                    <div class="property-content">
                        <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ
                            GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                        <div class="property-address">
                            Cầu Giấy, Hà Nội
                        </div>
                        <div class="property-footer">
                            <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                            <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- Property Item -->
                <div class="property-item">
                    <div class="property-heading">
                        <span class="item-price">10 triệu / tháng</span>
                        <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                    </div>
                    <div class="img-box">
                        <div class="property-label">
                            <a href="#" class="property-label__type">nhà cho thuê</a>
                        </div>
                        <a href="single-property.html" class="img-box__image"><img
                                    style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                    src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                    </div>
                    <div class="property-content">
                        <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ
                            GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                        <div class="property-address">
                            Cầu Giấy, Hà Nội
                        </div>
                        <div class="property-footer">
                            <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                            <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- Property Item -->
                <div class="property-item">
                    <div class="property-heading">
                        <span class="item-price">10 triệu / tháng</span>
                        <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                    </div>
                    <div class="img-box">
                        <div class="property-label">
                            <a href="#" class="property-label__type">nhà cho thuê</a>
                        </div>
                        <a href="single-property.html" class="img-box__image"><img
                                    style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                    src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                    </div>
                    <div class="property-content">
                        <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ
                            GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                        <div class="property-address">
                            Cầu Giấy, Hà Nội
                        </div>
                        <div class="property-footer">
                            <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                            <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- Property Item -->
                <div class="property-item">
                    <div class="property-heading">
                        <span class="item-price">10 triệu / tháng</span>
                        <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                    </div>
                    <div class="img-box">
                        <div class="property-label">
                            <a href="#" class="property-label__type">nhà cho thuê</a>
                        </div>
                        <a href="single-property.html" class="img-box__image"><img
                                    style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                    src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                    </div>
                    <div class="property-content">
                        <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ
                            GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                        <div class="property-address">
                            Cầu Giấy, Hà Nội
                        </div>
                        <div class="property-footer">
                            <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                            <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- Property Item -->
                <div class="property-item">
                    <div class="property-heading">
                        <span class="item-price">10 triệu / tháng</span>
                        <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                    </div>
                    <div class="img-box">
                        <div class="property-label">
                            <a href="#" class="property-label__type">nhà cho thuê</a>
                        </div>
                        <a href="single-property.html" class="img-box__image"><img
                                    style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                    src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                    </div>
                    <div class="property-content">
                        <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ
                            GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                        <div class="property-address">
                            Cầu Giấy, Hà Nội
                        </div>
                        <div class="property-footer">
                            <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                            <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- Property Item -->
                <div class="property-item">
                    <div class="property-heading">
                        <span class="item-price">10 triệu / tháng</span>
                        <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                    </div>
                    <div class="img-box">
                        <div class="property-label">
                            <a href="#" class="property-label__type">nhà cho thuê</a>
                        </div>
                        <a href="single-property.html" class="img-box__image"><img
                                    style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                    src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                    </div>
                    <div class="property-content">
                        <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ
                            GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                        <div class="property-address">
                            Cầu Giấy, Hà Nội
                        </div>
                        <div class="property-footer">
                            <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                            <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- Property Item -->
                <div class="property-item">
                    <div class="property-heading">
                        <span class="item-price">10 triệu / tháng</span>
                        <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                    </div>
                    <div class="img-box">
                        <div class="property-label">
                            <a href="#" class="property-label__type">nhà cho thuê</a>
                        </div>
                        <a href="single-property.html" class="img-box__image"><img
                                    style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                    src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                    </div>
                    <div class="property-content">
                        <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ
                            GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                        <div class="property-address">
                            Cầu Giấy, Hà Nội
                        </div>
                        <div class="property-footer">
                            <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                            <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- Property Item -->
                <div class="property-item">
                    <div class="property-heading">
                        <span class="item-price">10 triệu / tháng</span>
                        <a href="single-property.html" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                    </div>
                    <div class="img-box">
                        <div class="property-label">
                            <a href="#" class="property-label__type">nhà cho thuê</a>
                        </div>
                        <a href="single-property.html" class="img-box__image"><img
                                    style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;"
                                    src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                    </div>
                    <div class="property-content">
                        <a href="single-property.html" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ
                            GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
                        <div class="property-address">
                            Cầu Giấy, Hà Nội
                        </div>
                        <div class="property-footer">
                            <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
                            <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== HOW TO BUY SECTION ====== -->
    <section id="block-news" class="page-section" style="background-image: url(/html/assets/images/main_default.jpg);">
        <div class="container">
            <!-- Section Header / Title with Column Content / Add 'header-column' to use this style -->
            <div class="section-header header-column">
                <!-- Header Title / Column 1 -->
                <h2 class="section-title"><a href="{{route('article.index')}}" title="">Tin tức</a> <a class="btn-more" href="{{route('article.index')}}">Xem thêm <i
                                class="fa fa-angle-double-right" aria-hidden="true"></i></a></h2>
            </div>
            <!-- Panel Wrapper for Panel Box Container -->
            <div class="panel-wrapper">
                <div id="product-house" class="row">
                    <div class="col-md-3 col-sm-6">
                        <!-- Property Item -->
                        <div class="property-item">
                            <div class="img-box">
                                <a href="single-property.html" class="img-box__image"><img
                                            style="background: url(/html/assets/images/2.jpg) center center no-repeat; padding-bottom: 62%; height: 0;"
                                            src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                            </div>
                            <div class="property-content">
                                <a href="single-property.html" class="property-title">ỨNG DỤNG PHONG THỦY GIÚP CUỘC SỐNG TỐT
                                    ĐẸP HƠN</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Property Item -->
                        <div class="property-item">
                            <div class="img-box">
                                <a href="single-property.html" class="img-box__image"><img
                                            style="background: url(/html/assets/images/2.jpg) center center no-repeat; padding-bottom: 62%; height: 0;"
                                            src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                            </div>
                            <div class="property-content">
                                <a href="single-property.html" class="property-title">Mẹo bố trí phòng làm việc hợp phong
                                    thủy để có sự nghiệp thăng tiến</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Property Item -->
                        <div class="property-item">
                            <div class="img-box">
                                <a href="single-property.html" class="img-box__image"><img
                                            style="background: url(/html/assets/images/2.jpg) center center no-repeat; padding-bottom: 62%; height: 0;"
                                            src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                            </div>
                            <div class="property-content">
                                <a href="single-property.html" class="property-title">Phương pháp kích hoạt tài lộc cho
                                    không gian ngồi làm việc</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Property Item -->
                        <div class="property-item">
                            <div class="img-box">
                                <a href="single-property.html" class="img-box__image"><img
                                            style="background: url(/html/assets/images/2.jpg) center center no-repeat; padding-bottom: 62%; height: 0;"
                                            src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                            </div>
                            <div class="property-content">
                                <a href="single-property.html" class="property-title">Cách tìm hướng phát triển trí tuệ tính
                                    theo thập can</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== TESTIMONY SECTION ====== -->
    <section id="testimony" class="page-section">
        <div class="container">
            <!-- Section Header / Title with Column Slider Control / Add 'header-column' to use this style -->
            <div class="section-header header-column">
                <h2 class="section-title"><a href="{{route('article.fengshui')}}" title="">Phong thủy</a> <a class="btn-more" href="{{route('article.fengshui')}}">Xem thêm <i
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
                <div class="slider-item">
                    <!-- Testimony Left -->
                    <div class="testimony-item item-left">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="testimony-profile">
                                    <a href="single-property.html" class="img-box__image"><img
                                                style="background: url(/html/assets/images/2.jpg) center center no-repeat; padding-bottom: 100%; height: 0;"
                                                src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimony-text">
                                    <h5><a href="#" title="">ỨNG DỤNG PHONG THỦY GIÚP CUỘC SỐNG TỐT ĐẸP HƠN</a></h5>
                                    <p>Simple and clean-easy to customize, the demo is so close to what I need. This theme
                                        can read my mind. AMAZING!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimony Right -->
                    <div class="testimony-item item-right">
                        <div class="row">
                            <div class="col-md-3 col-md-push-6 col-md-offset-3">
                                <div class="testimony-profile">
                                    <a href="single-property.html" class="img-box__image"><img
                                                style="background: url(/html/assets/images/2.jpg) center center no-repeat; padding-bottom: 100%; height: 0;"
                                                src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-pull-3">
                                <div class="testimony-text">
                                    <h5><a href="#" title="">ỨNG DỤNG PHONG THỦY GIÚP CUỘC SỐNG TỐT ĐẸP HƠN</a></h5>
                                    <p>Simple and clean-easy to customize, the demo is so close to what I need. This theme
                                        can read my mind. AMAZING!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimony Slider Item -->
                <div class="slider-item">
                    <!-- Testimony Left -->
                    <div class="testimony-item item-left">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="testimony-profile">
                                    <a href="single-property.html" class="img-box__image"><img
                                                style="background: url(/html/assets/images/2.jpg) center center no-repeat; padding-bottom: 100%; height: 0;"
                                                src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimony-text">
                                    <h5><a href="#" title="">ỨNG DỤNG PHONG THỦY GIÚP CUỘC SỐNG TỐT ĐẸP HƠN</a></h5>
                                    <p>Simple and clean-easy to customize, the demo is so close to what I need. This theme
                                        can read my mind. AMAZING!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimony Right -->
                    <div class="testimony-item item-right">
                        <div class="row">
                            <div class="col-md-3 col-md-push-6 col-md-offset-3">
                                <div class="testimony-profile">
                                    <a href="single-property.html" class="img-box__image"><img
                                                style="background: url(/html/assets/images/2.jpg) center center no-repeat; padding-bottom: 100%; height: 0;"
                                                src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-pull-3">
                                <div class="testimony-text">
                                    <h5><a href="#" title="">ỨNG DỤNG PHONG THỦY GIÚP CUỘC SỐNG TỐT ĐẸP HƠN</a></h5>
                                    <p>Simple and clean-easy to customize, the demo is so close to what I need. This theme
                                        can read my mind. AMAZING!</p>
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