@extends('layouts.frontend')
@section('title') Trang chủ @stop

@section('content')
    <!-- ====== PROPERTY ARCHIVE PAGE HEADER ====== -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-header-title">Nhà đất cho thuê</h1>
            <ul class="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li class="active">Nhà đất cho thuê</li>
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
                                                    <label for="sale-range-price">Price</label>
                                                    <div class="range-box">
                                                        <input class="form-control" id="sale-range-price" type="number">
                                                    </div>
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
                                                    <label for="sale-range-price">Price</label>
                                                    <div class="range-box">
                                                        <input class="form-control" id="sale-range-price" type="number">
                                                    </div>
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
                                            <div class="property-image"><img style="background: url(/html/assets/images/1.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="/html/assets/images/transparent.png" alt="Property One"></div>
                                            <div class="property-content">
                                                <a href="{{\App\Helpers\Block::get_link_asset()}}">Best Private Villas</a>
                                                <span class="property-price">3.000.000 VNĐ</span>
                                                <ul class="property-footer">
                                                    <li class="item-wide"><span class="fi flaticon-wide"></span> 100 m2</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Property List Item -->
                                        <li>
                                            <div class="property-image"><img style="background: url(/html/assets/images/1.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="/html/assets/images/transparent.png" alt="Property One"></div>
                                            <div class="property-content">
                                                <a href="{{\App\Helpers\Block::get_link_asset()}}">Best Private Villas</a>
                                                <span class="property-price">3.000.000 VNĐ</span>
                                                <ul class="property-footer">
                                                    <li class="item-wide"><span class="fi flaticon-wide"></span> 100 m2</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Property List Item -->
                                        <li>
                                            <div class="property-image"><img style="background: url(/html/assets/images/1.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="/html/assets/images/transparent.png" alt="Property One"></div>
                                            <div class="property-content">
                                                <a href="{{\App\Helpers\Block::get_link_asset()}}">Best Private Villas</a>
                                                <span class="property-price">3.000.000 VNĐ</span>
                                                <ul class="property-footer">
                                                    <li class="item-wide"><span class="fi flaticon-wide"></span> 100 m2</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Property List Item -->
                                        <li>
                                            <div class="property-image"><img style="background: url(/html/assets/images/1.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="/html/assets/images/transparent.png" alt="Property One"></div>
                                            <div class="property-content">
                                                <a href="{{\App\Helpers\Block::get_link_asset()}}">Best Private Villas</a>
                                                <span class="property-price">3.000.000 VNĐ</span>
                                                <ul class="property-footer">
                                                    <li class="item-wide"><span class="fi flaticon-wide"></span> 100 m2</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Property List Item -->
                                        <li>
                                            <div class="property-image"><img style="background: url(/html/assets/images/1.jpg) center center no-repeat; padding-bottom: 100%; height: 0;" src="/html/assets/images/transparent.png" alt="Property One"></div>
                                            <div class="property-content">
                                                <a href="{{\App\Helpers\Block::get_link_asset()}}">Best Private Villas</a>
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