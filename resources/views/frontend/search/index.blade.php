@extends('layouts.frontend')

@section('title') Tìm kiếm @stop

@section('content')
    <section id="page-builder" class="page-section">
        <!-- HERO IMAGE WITH SEARCH FORM -->
        <div class="row tpb-row" style="background-image: url(/html/assets/images/home_hero_image_default.jpg); padding-top: 44px; padding-bottom: 68px; margin: 0; background-size: cover; background-position: center;">
            <div class="tpb tpb-property_simple_search col-md-12">
                <div class="container">
                    <?=\App\Helpers\Block::form_search();?>
                </div>
            </div>
        </div>
    </section>
    <section id="property-search-result" class="archive-property">
        <!-- ====== PAGE CONTENT ====== -->
        <div class="page-section">
            <div class="container">
                <div class="panel filter-panel">
                    <div class="panel-body">
                        <h4 class="filter-title pull-left">Tìm được 60 tin</h4>
                        <form action="#" class="form-inline pull-right">
                            <div class="form-group">
                                <label>Sắp xếp:</label>
                                <select class="form-control">
                                    <option value="1">Tin mới nhất</option>
                                    <option value="2">Giá thấp</option>
                                    <option value="3">Giá cao</option>
                                    <option value="4">Phổ biến</option>
                                    <option value="5">Diện tích lớn nhất</option>
                                    <option value="6">Diện tích nhỏ nhất</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="property-list archive-flex archive-with-footer">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <!-- Property Item -->
                            <div class="property-item">
                                <div class="property-heading">
                                    <span class="item-price">10 triệu / tháng</span>
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                                </div>
                                <div class="img-box">
                                    <div class="property-label">
                                        <a href="#" class="property-label__type">nhà cho thuê</a>
                                    </div>
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="img-box__image"><img style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;" src="assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                                <div class="property-content">
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
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
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                                </div>
                                <div class="img-box">
                                    <div class="property-label">
                                        <a href="#" class="property-label__type">nhà cho thuê</a>
                                    </div>
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="img-box__image"><img style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;" src="assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                                <div class="property-content">
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
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
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                                </div>
                                <div class="img-box">
                                    <div class="property-label">
                                        <a href="#" class="property-label__type">nhà cho thuê</a>
                                    </div>
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="img-box__image"><img style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;" src="assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                                <div class="property-content">
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
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
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                                </div>
                                <div class="img-box">
                                    <div class="property-label">
                                        <a href="#" class="property-label__type">nhà cho thuê</a>
                                    </div>
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="img-box__image"><img style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;" src="assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                                <div class="property-content">
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
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
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                                </div>
                                <div class="img-box">
                                    <div class="property-label">
                                        <a href="#" class="property-label__type">nhà cho thuê</a>
                                    </div>
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="img-box__image"><img style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;" src="assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                                <div class="property-content">
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
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
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                                </div>
                                <div class="img-box">
                                    <div class="property-label">
                                        <a href="#" class="property-label__type">nhà cho thuê</a>
                                    </div>
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="img-box__image"><img style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;" src="assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                                <div class="property-content">
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
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
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                                </div>
                                <div class="img-box">
                                    <div class="property-label">
                                        <a href="#" class="property-label__type">nhà cho thuê</a>
                                    </div>
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="img-box__image"><img style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;" src="assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                                <div class="property-content">
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
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
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                                </div>
                                <div class="img-box">
                                    <div class="property-label">
                                        <a href="#" class="property-label__type">nhà cho thuê</a>
                                    </div>
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="img-box__image"><img style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;" src="assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                                <div class="property-content">
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
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
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                                </div>
                                <div class="img-box">
                                    <div class="property-label">
                                        <a href="#" class="property-label__type">nhà cho thuê</a>
                                    </div>
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="img-box__image"><img style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;" src="assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                                <div class="property-content">
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
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
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                                </div>
                                <div class="img-box">
                                    <div class="property-label">
                                        <a href="#" class="property-label__type">nhà cho thuê</a>
                                    </div>
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="img-box__image"><img style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;" src="assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                                <div class="property-content">
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
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
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                                </div>
                                <div class="img-box">
                                    <div class="property-label">
                                        <a href="#" class="property-label__type">nhà cho thuê</a>
                                    </div>
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="img-box__image"><img style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;" src="assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                                <div class="property-content">
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
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
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
                                </div>
                                <div class="img-box">
                                    <div class="property-label">
                                        <a href="#" class="property-label__type">nhà cho thuê</a>
                                    </div>
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="img-box__image"><img style="background: url(/html/assets/images/7.jpg) center center no-repeat; padding-bottom: 56.25%; height: 0;" src="assets/images/transparent.png" alt="" class="img-responsive"></a>
                                </div>
                                <div class="property-content">
                                    <a href="{{\App\Helpers\Block::get_link_asset()}}" class="property-title">CHO THUÊ SÀN VĂN PHÒNG TẦNG 3, LÔ GÓC, TOÀ NHÀ GOLDEN PALM - 91 LÊ VĂN LƯƠNG</a>
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
    </section>
@stop

@section('after_script')
    <script type='text/javascript'>
        $(document).ready(function () {
        });
    </script>
@stop