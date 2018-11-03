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
                    <!-- Tabmenu Container / Default Bootstrap Structure -->
                    <div class="search-tabmenu">
                        <!-- Tabmenu Navigation -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#for-sale" role="tab" data-toggle="tab"><i
                                            class="fi flaticon-sale"></i> Nhà đất cho thuê</a></li>
                            <li><a href="#for-rent" role="tab" data-toggle="tab"><i class="fi flaticon-rent"></i> Nhà đất
                                    cần thuê</a></li>
                        </ul>
                        <!-- Tabmenu Body / Content -->
                        <div class="tab-content">
                            <!-- Tabmenu Content 1 / Property For SALE -->
                            <div role="tabpanel" class="tab-pane active" id="for-sale">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="sale-location">Thành Phố</label>
                                                <select class="form-control" id="sale-location">
                                                    <option>Chọn Thành Phố</option>
                                                    <option>Hà Nội</option>
                                                    <option>Hồ Chí Minh</option>
                                                    <option>Vĩnh Long</option>
                                                    <option>Cần Thơ</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="sale-location">Quận/Huyện</label>
                                                <select class="form-control" id="sale-location">
                                                    <option>Chọn Quận Huyện</option>
                                                    <option>Quận 1</option>
                                                    <option>Quận 2</option>
                                                    <option>Quận 3</option>
                                                    <option>Quận 4</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="sale-type">Loại Nhà Cho Thuê</label>
                                                <select class="form-control" id="sale-type">
                                                    <option>Loại Nhà Cho Thuê</option>
                                                    <option>Cho thuê nhà chung cư</option>
                                                    <option>Cho thuê nhà riêng</option>
                                                    <option>Cho thuê nhà mặt phố</option>
                                                    <option>Cho thuê nhà trọ, phòng trọ</option>
                                                    <option>Cho thuê văn phòng</option>
                                                    <option>Cho thuê cửa hàng, ki ốt</option>
                                                    <option>Cho thuê kho, nhà xưởng, đất</option>
                                                    <option>Cho thuê loại bất động sản khác</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="sale-range-feet">Diện tích (m2)</label>
                                                <div class="range-box">
                                                    <input id="sale-range-feet" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="sale-range-price">Giá (VNĐ)</label>
                                                <select class="form-control" id="sale-price">
                                                    <option>Chọn Giá</option>
                                                    <option>Thỏa thuận</option>
                                                    <option> > 1 triệu</option>
                                                    <option>1 - 3 triệu</option>
                                                    <option>3 - 5 triệu</option>
                                                    <option>5 - 10 triệu</option>
                                                    <option>10 - 40 triệu</option>
                                                    <option>40 - 70 triệu</option>
                                                    <option>70 - 100 triệu</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <button class="btn btn-primary pull-right btn-submit" type="submit"><i
                                                            class="fa fa-search"></i> Tìm Kiếm
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="for-rent">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="sale-location">Thành Phố</label>
                                                <select class="form-control" id="sale-location">
                                                    <option>Chọn Thành Phố</option>
                                                    <option>Hà Nội</option>
                                                    <option>Hồ Chí Minh</option>
                                                    <option>Vĩnh Long</option>
                                                    <option>Cần Thơ</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="sale-location">Quận/Huyện</label>
                                                <select class="form-control" id="sale-location">
                                                    <option>Chọn Quận Huyện</option>
                                                    <option>Quận 1</option>
                                                    <option>Quận 2</option>
                                                    <option>Quận 3</option>
                                                    <option>Quận 4</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="sale-type">Loại Nhà Cần Thuê</label>
                                                <select class="form-control" id="sale-type">
                                                    <option>Loại Nhà Cho Thuê</option>
                                                    <option>Cần thuê nhà chung cư</option>
                                                    <option>Cần thuê nhà riêng</option>
                                                    <option>Cần thuê nhà mặt phố</option>
                                                    <option>Cần thuê nhà trọ, phòng trọ</option>
                                                    <option>Cần thuê văn phòng</option>
                                                    <option>Cần thuê cửa hàng, ki ốt</option>
                                                    <option>Cần thuê kho, nhà xưởng, đất</option>
                                                    <option>Cần thuê loại bất động sản khác</option>
                                                </select>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="sale-range-feet">Diện tích (m2)</label>
                                                <div class="range-box">
                                                    <input id="sale-range-feet-1" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="sale-range-price">Giá (VNĐ)</label>
                                                <select class="form-control" id="sale-price">
                                                    <option>Chọn Giá</option>
                                                    <option>Thỏa thuận</option>
                                                    <option> > 1 triệu</option>
                                                    <option>1 - 3 triệu</option>
                                                    <option>3 - 5 triệu</option>
                                                    <option>5 - 10 triệu</option>
                                                    <option>10 - 40 triệu</option>
                                                    <option>40 - 70 triệu</option>
                                                    <option>70 - 100 triệu</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <button class="btn btn-primary pull-right btn-submit" type="submit"><i
                                                            class="fa fa-search"></i> Tìm Kiếm
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== FEATURED PROPERTY SECTION ====== -->
    <section id="featured-property" class="page-section">
        <div class="container">
            <!-- Section Title -->
            <div class="section-header">
                <h2 class="section-title">Tin nổi bật <a class="btn-more" href="#">Xem thêm <i
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
                <h2 class="section-title"><a href="#" title="">Nhà đất cho thuê</a> <a class="btn-more" href="#">Xem thêm <i
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
                <h2 class="section-title"><a href="#">Nhà đất cần thuê</a> <a class="btn-more" href="#">Xem thêm <i
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
                <h2 class="section-title"><a href="#" title="">Tin tức</a> <a class="btn-more" href="#">Xem thêm <i
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
                <h2 class="section-title"><a href="#" title="">Phong thủy</a> <a class="btn-more" href="#">Xem thêm <i
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