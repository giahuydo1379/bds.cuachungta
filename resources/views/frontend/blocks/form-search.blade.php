<?php
$params = request()->all();
$assets_prices = \App\Helpers\General::get_assets_prices();
?>
<!-- Tabmenu Container / Default Bootstrap Structure -->
<div class="search-tabmenu">
    <!-- Tabmenu Navigation -->
    <ul class="nav nav-tabs" role="tablist">
        <li {!! !isset($params['type']) || $params['type']=='lease'?'class="active"':'' !!}>
            <a href="#for-sale" role="tab" data-toggle="tab"><i class="fi flaticon-sale"></i> Nhà đất cho thuê</a></li>
        <li {!! @$params['type']=='buy'?'class="active"':'' !!}>
            <a href="#for-rent" role="tab" data-toggle="tab"><i class="fi flaticon-rent"></i> Nhà đất cần thuê</a></li>
    </ul>
    <!-- Tabmenu Body / Content -->
    <div class="tab-content">
        <!-- Tabmenu Content 1 / Property For SALE -->
        <div role="tabpanel" class="tab-pane {!! !isset($params['type']) || $params['type']=='lease'?'active':'' !!}" id="for-sale">
            <form action="{{route('fe.search.index')}}" id="frm-sale-search" method="get">
                <input name="type" type="hidden" value="lease">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="sale-location">Thành Phố</label>
                            <select name="province" class="form-control province_has_asset change" id="sale-location" data-id="{{@$params['province']}}"
                                    data-destination="#frm-sale-search .district" data-asset="1" data-placeholder="Chọn Tỉnh / Thành Phố">
                                <option>Chọn Tỉnh / Thành Phố</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="sale-location">Quận/Huyện</label>
                            <select name="district" class="form-control district" data-id="{{@$params['district']}}" id="sale-location" data-placeholder="Chọn Quận Huyện">
                                <option>Chọn Quận Huyện</option>
                            </select>
                        </div>
                        <?php
                        $assets_categories = \App\Helpers\General::get_assets_categories('lease');
                        ?>
                        <div class="col-md-4 form-group">
                            <label for="sale-type">Loại Nhà Cho Thuê</label>
                            {!! Form::select("cid", ['' => 'Chọn Loại Nhà Cho Thuê']+$assets_categories, @$params['cid'],
                            ['class' => 'form-control', "data-placeholder" => "Chọn Loại Nhà Cho Thuê"]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="sale-range-feet">Diện tích (m2)</label>
                            <div class="range-box">
                                <input id="sale-range-feet" type="text" data-from="{{@$params['acreage_from']}}" data-to="{{@$params['acreage_to']}}">
                                <input name="acreage_from" id="acreage_from" type="hidden" value="{{@$params['acreage_from']}}">
                                <input name="acreage_to" id="acreage_to" type="hidden" value="{{@$params['acreage_to']}}">
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="sale-range-price">Giá (VNĐ)</label>
                            {!! Form::select("price", ['' => 'Chọn Giá']+$assets_prices, @$params['price'],
                            ['class' => 'form-control', "data-placeholder" => "Chọn Giá"]) !!}
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
        <div role="tabpanel" class="tab-pane {!! @$params['type']=='buy'?'active':'' !!}" id="for-rent">
            <form action="{{route('fe.search.index')}}" id="frm-rent-search" method="get">
                <input name="type" type="hidden" value="buy">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="sale-location">Thành Phố</label>
                            <select class="form-control province_has_asset change" id="rent-location" data-id="{{@$params['province']}}"
                                    data-destination="#frm-rent-search .district" data-asset="1" data-placeholder="Chọn Tỉnh / Thành Phố">
                                <option>Chọn Thành Phố</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="sale-location">Quận/Huyện</label>
                            <select class="form-control district" name="district" data-id="{{@$params['district']}}"
                                    id="rent-location" data-placeholder="Chọn Quận Huyện">
                                <option>Chọn Quận Huyện</option>
                            </select>
                        </div>
                        <?php
                        $assets_categories = \App\Helpers\General::get_assets_categories('buy');
                        ?>
                        <div class="col-md-4 form-group">
                            <label for="sale-type">Loại Nhà Cần Thuê</label>
                            {!! Form::select("cid", ['' => 'Chọn Loại Nhà Cần Thuê']+$assets_categories, @$params['cid'],
                                    ['class' => 'form-control', "data-placeholder" => "Chọn Loại Nhà Cần Thuê"]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="sale-range-feet">Diện tích (m2)</label>
                            <div class="range-box">
                                <input id="sale-range-feet-1" type="text" data-from="{{@$params['acreage_from']}}" data-to="{{@$params['acreage_to']}}">
                                <input name="acreage_from" id="acreage_from1" type="hidden" value="{{@$params['acreage_from']}}">
                                <input name="acreage_to" id="acreage_to1" type="hidden" value="{{@$params['acreage_to']}}">
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="sale-range-price">Giá (VNĐ)</label>
                            {!! Form::select("price", ['' => 'Chọn Giá']+$assets_prices, @$params['price'],
                            ['class' => 'form-control', "data-placeholder" => "Chọn Giá"]) !!}
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