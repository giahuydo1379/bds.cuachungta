<!-- Tabmenu Container / Default Bootstrap Structure -->
<div class="search-tabmenu">
    <!-- Tabmenu Navigation -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active">
            <a href="#for-sale" role="tab" data-toggle="tab"><i class="fi flaticon-sale"></i> Nhà đất cho thuê</a></li>
        <li><a href="#for-rent" role="tab" data-toggle="tab"><i class="fi flaticon-rent"></i> Nhà đất cần thuê</a></li>
    </ul>
    <!-- Tabmenu Body / Content -->
    <div class="tab-content">
        <!-- Tabmenu Content 1 / Property For SALE -->
        <div role="tabpanel" class="tab-pane active" id="for-sale">
            <form action="{{route('fe.search.index')}}" id="frm-sale-search" method="get">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="sale-location">Thành Phố</label>
                            <select name="province" class="form-control province_has_asset change" id="sale-location"
                                    data-destination="#frm-sale-search .district" data-placeholder="Chọn Tỉnh / Thành Phố">
                                <option>Chọn Tỉnh / Thành Phố</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="sale-location">Quận/Huyện</label>
                            <select name="district" class="form-control district" id="sale-location" data-placeholder="Chọn Quận Huyện">
                                <option>Chọn Quận Huyện</option>
                            </select>
                        </div>
                        <?php
                        $assets_categories = \App\Helpers\General::get_assets_categories('buy');
                        
                        ?>
                        <div class="col-md-4 form-group">
                            <label for="sale-type">Loại Nhà Cho Thuê</label>
                            {!! Form::select("cid", @$assets_categories, @$_GET['cid'],
                            ['class' => 'form-control', "data-placeholder" => "Chọn Loại Nhà Cho Thuê"]) !!}

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="sale-range-feet">Diện tích (m2)</label>
                            <div class="range-box">
                                <input name="square" id="sale-range-feet" readonly="">
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="sale-range-price">Giá (VNĐ)</label>
                            <select name="price" class="form-control" id="sale-price">
                                <option>Chọn Giá</option>
                                <option>Thỏa thuận</option>
                                <option value="0;1000000"> > 1 triệu</option>
                                <option value="1000000;3000000">1 - 3 triệu</option>
                                <option value="3000000;5000000">3 - 5 triệu</option>
                                <option value="500000;10000000">5 - 10 triệu</option>
                                <option value="10000000;40000000">10 - 40 triệu</option>
                                <option value="40000000;70000000">40 - 70 triệu</option>
                                <option value="7000000;10000000">70 - 100 triệu</option>
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
            <form action="{{route('fe.search.index')}}" id="frm-rent-search" method="get">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="sale-location">Thành Phố</label>
                            <select class="form-control province_has_asset change" id="rent-location"
                                    data-destination="#frm-rent-search .district" data-placeholder="Chọn Tỉnh / Thành Phố">
                                <option>Chọn Thành Phố</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="sale-location">Quận/Huyện</label>
                            <select class="form-control district" id="rent-location" data-placeholder="Chọn Quận Huyện">
                                <option>Chọn Quận Huyện</option>
                            </select>
                        </div>
                        <?php
                        $assets_categories = \App\Helpers\General::get_assets_categories('lease');
                        ?>
                        <div class="col-md-4 form-group">
                            <label for="sale-type">Loại Nhà Cần Thuê</label>
                            
                            {!! Form::select("cid", @$assets_categories, @$_GET['cid'],
                                    ['class' => 'form-control', "data-placeholder" => "Chọn Loại Nhà Cho Thuê"]) !!}

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