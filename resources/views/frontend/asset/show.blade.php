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
                                        <h3 class="post-title"><a href="#">TMT LAND - CHUYÊN CHO THUÊ VINHOMES BA SON 1PN 16TR, 2PN 19TR, 3 PN 27TR, 4 PN TL, LH 0909060957</a></h3>
                                    </div>
                                    <div class="col-md-4 col-sm-4 text-right">
                                        <span class="property-price">10 triệu / tháng</span>
                                    </div>
                                </div>
                                <div class="property-address">
                                    Phú Nhuận, TP.HCM
                                </div>
                                <div class="property-label">
                                    <a href="#" class="property-label__type">50 m2</a>
                                </div>
                            </div>
                            <!-- Property Gallery Slider -->
                            <div class="property-image">
                                <div id="property-slider" class="property-slider">
                                    <img src="assets/images/1.jpg" alt="Property Photo 1">
                                    <img src="assets/images/2.jpg" alt="Property Photo 2">
                                    <img src="assets/images/3.jpg" alt="Property Photo 4">
                                    <img src="assets/images/4.jpg" alt="Property Photo 5">
                                    <img src="assets/images/5.jpg" alt="Property Photo 6">
                                    <img src="assets/images/img_slider_default.jpg" alt="Property Photo 7">
                                </div>
                                <!-- Property Gallery Slider Navigation -->
                                <div id="property-slider-nav" class="property-slider-nav">
                                    <img src="assets/images/1.jpg" alt="Property Photo 1">
                                    <img src="assets/images/2.jpg" alt="Property Photo 2">
                                    <img src="assets/images/3.jpg" alt="Property Photo 4">
                                    <img src="assets/images/4.jpg" alt="Property Photo 5">
                                    <img src="assets/images/5.jpg" alt="Property Photo 6">
                                    <img src="assets/images/img_slider_default.jpg" alt="Property Photo 7">
                                </div>
                            </div>
                            <!-- Property facility Detail -->
                            <div class="property-footer">
                                <div class="item-wide"><span class="fi flaticon-wide"></span> 50 m2</div>
                                <div class="item-room"><span class="fi flaticon-room"></span> 4</div>
                                <div class="item-bathroom"><span class="fi flaticon-bathroom"></span> 3</div>
                                <div class="item-garage"><span class="fi flaticon-garage"></span> 1</div>
                            </div>
                            <p>Cho thuê mặt bằng kho, xưởng tại khu vực Metro Hà Đông.
                                Phù hợp làm bãi xe, bãi rửa xe, nơi trưng bày máy móc công trình, trưng bày bán hàng gốm sứ, cây cảnh, quán bia ngoài trời, bãi tập kết vật liệu xây dựng, bãi tập kết sắt vụn... Đây là khu mặt bằng nằm phía trước khu kho xưởng đã được xây dựng và đang hoạt động.</p>
                            <p>Địa chỉ: Đối diện chợ 365 Hà Đông (Cạnh khu Chung cư CC Huyndai Khu Thương mại Metro Hà Đông).</p>
                            <p>Diện tích kho: 200, 500m2.</p>
                            <p>iện tích mặt bằng 100 - 200 - 300 - 500 - 1000 - 2000 - 4000m2. <br>
                                1. Nền bê tông sạch, chắc chắn, xe container ra vào thoải mái.<br>
                                2. Điện nước đầy đủ phục vụ sản xuất (điện 3 pha).<br>
                                3. Thời gian cho thuê lâu dài, ổn định, pháp lý đầy đủ, xuất được VAT.<br>
                                4. Được phép dựng nhà Container trên mặt bằng - Giá cho thuê mặt bằng 30.000 vnđ.<br>
                                5. Kho đã dựng 70.000 vnđ.<br>
                                (Thuê lâu dài - Chính chủ).<br>
                                Liên hệ trực tiếp chính chủ: Anh Sáng 0906558566</p>
                            <!-- The Space Section -->
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
                        <div class="property-location widget panel-box">
                            <div class="panel-header">
                                <h3 class="panel-title">Property Location</h3>
                            </div>
                            <div class="panel-body">
                                <div id="map"></div>
                            </div>
                        </div>
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
                            <div class="search-tabmenu">
                                <!-- Tabmenu Navigation -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#for-sale" role="tab" data-toggle="tab"><i class="fi flaticon-sale"></i> Cho Thuê</a></li>
                                    <li><a href="#for-rent" role="tab" data-toggle="tab"><i class="fi flaticon-rent"></i> Cần thuê</a></li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Tab Content For Sale -->
                                    <div role="tabpanel" class="tab-pane active" id="for-sale">
                                        <form action="#">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="sale-location">Thành phố</label>
                                                    <select class="form-control" id="sale-location">
                                                        <option>Thành phố</option>
                                                        <option>HCM</option>
                                                        <option>HN</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sale-type">Quận/huyện</label>
                                                    <select class="form-control" id="sale-type">
                                                        <option>Quận/huyện</option>
                                                        <option>Gò Vấp</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sale-bathroom">Loại nhà</label>
                                                    <select class="form-control" id="sale-bathroom">
                                                        <option>Loại nhà</option>
                                                        <option>Chung cư</option>
                                                        <option>Phòng trọ</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sale-range-feet">Diện tích (m2)</label>
                                                    <div class="range-box">
                                                        <input id="sale-range-feet" readonly="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sale-range-price">Giá</label>
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
                                                <div class="form-group">
                                                    <button class="btn btn-primary btn-submit" type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Tab Content For Rent -->
                                    <div role="tabpanel" class="tab-pane" id="for-rent">
                                        <form action="#">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="sale-location">Thành phố</label>
                                                    <select class="form-control" id="sale-location">
                                                        <option>Thành phố</option>
                                                        <option>HCM</option>
                                                        <option>HN</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sale-type">Quận/huyện</label>
                                                    <select class="form-control" id="sale-type">
                                                        <option>Quận/huyện</option>
                                                        <option>Gò Vấp</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sale-bathroom">Loại nhà</label>
                                                    <select class="form-control" id="sale-bathroom">
                                                        <option>Loại nhà</option>
                                                        <option>Chung cư</option>
                                                        <option>Phòng trọ</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sale-range-feet">Diện tích (m2)</label>
                                                    <div class="range-box">
                                                        <input id="sale-range-feet-1" readonly="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sale-range-price">Giá</label>
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
                                                <div class="form-group">
                                                    <button class="btn btn-primary btn-submit" type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- widget section Recent Property-->
                        <div class="widget">
                            <div class="panel-box">
                                <!-- Panel Header / Title -->
                                <div class="panel-header">
                                    <h3 class="panel-title">Tin nổi bật</h3>
                                </div>
                                <!-- Panel Body -->
                                <div class="panel-body">
                                    <!-- Recent Property -->
                                    <ul class="recent-property">
                                        <!-- Property List Item -->
                                        <li>
                                            <div class="property-image"><img style="background: url(assets/images/1.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="assets/images/transparent.png" alt="Property One"></div>
                                            <div class="property-content">
                                                <a href="single-property.html">Best Private Villas</a>
                                                <span class="property-price">3.000.000 VNĐ</span>
                                                <ul class="property-footer">
                                                    <li class="item-wide"><span class="fi flaticon-wide"></span> 100 m2</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Property List Item -->
                                        <li>
                                            <div class="property-image"><img style="background: url(assets/images/1.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="assets/images/transparent.png" alt="Property One"></div>
                                            <div class="property-content">
                                                <a href="single-property.html">Best Private Villas</a>
                                                <span class="property-price">3.000.000 VNĐ</span>
                                                <ul class="property-footer">
                                                    <li class="item-wide"><span class="fi flaticon-wide"></span> 100 m2</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Property List Item -->
                                        <li>
                                            <div class="property-image"><img style="background: url(assets/images/1.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="assets/images/transparent.png" alt="Property One"></div>
                                            <div class="property-content">
                                                <a href="single-property.html">Best Private Villas</a>
                                                <span class="property-price">3.000.000 VNĐ</span>
                                                <ul class="property-footer">
                                                    <li class="item-wide"><span class="fi flaticon-wide"></span> 100 m2</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Property List Item -->
                                        <li>
                                            <div class="property-image"><img style="background: url(assets/images/1.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="assets/images/transparent.png" alt="Property One"></div>
                                            <div class="property-content">
                                                <a href="single-property.html">Best Private Villas</a>
                                                <span class="property-price">3.000.000 VNĐ</span>
                                                <ul class="property-footer">
                                                    <li class="item-wide"><span class="fi flaticon-wide"></span> 100 m2</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Property List Item -->
                                        <li>
                                            <div class="property-image"><img style="background: url(assets/images/1.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="assets/images/transparent.png" alt="Property One"></div>
                                            <div class="property-content">
                                                <a href="single-property.html">Best Private Villas</a>
                                                <span class="property-price">3.000.000 VNĐ</span>
                                                <ul class="property-footer">
                                                    <li class="item-wide"><span class="fi flaticon-wide"></span> 100 m2</li>
                                                </ul>
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