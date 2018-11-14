<!-- Tabmenu Container / Default Bootstrap Structure -->
<?php
$params = request()->all();
$ac = \App\Helpers\General::get_controller_action();
$link_search = '';
if (isset($ac["as"]) && $ac["as"]=="fe.asset.show") {
    $link_search = \App\Helpers\Block::get_link_asset_category($object);
}
$assets_prices = \App\Helpers\General::get_assets_prices();
?>
<div class="search-tabmenu">
    <!-- Tabmenu Navigation -->
    <ul class="nav nav-tabs" role="tablist">
        <li {!! !isset($params['type']) || $params['type']=='lease'?'class="active"':'' !!}>
            <a href="#for-sale" role="tab" data-toggle="tab"><i class="fi flaticon-sale"></i> Cho Thuê</a></li>
        <li {!! @$params['type']=='buy'?'class="active"':'' !!}>
            <a href="#for-rent" role="tab" data-toggle="tab"><i class="fi flaticon-rent"></i> Cần thuê</a></li>
    </ul>
    <div class="tab-content">
        <!-- Tab Content For Sale -->
        <div role="tabpanel" class="tab-pane {!! !isset($params['type']) || $params['type']=='lease'?'active':'' !!}" id="for-sale">
            <form action="{{$link_search}}" id="frm-sale-search" method="get">
                <input name="type" type="hidden" value="lease">
                <div class="form-body">
                    <div class="form-group">
                        <label for="sale-location">Thành phố</label>
                        <select name="province" class="form-control province_has_asset change" id="sale-location"
                                data-destination="#frm-sale-search .district" data-placeholder="Chọn Tỉnh / Thành Phố">
                            <option>Chọn Tỉnh / Thành Phố</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sale-type">Quận/huyện</label>
                        <select name="district" class="form-control district" id="sale-location" data-placeholder="Chọn Quận Huyện">
                            <option>Chọn Quận Huyện</option>
                        </select>
                    </div>
                    <?php
                    $assets_categories = \App\Helpers\General::get_assets_categories('lease');
                    ?>
                    <div class="form-group">
                        <label for="sale-bathroom">Loại nhà</label>
                        {!! Form::select("cid", ['' => "Chọn Loại Nhà Cho Thuê"]+$assets_categories, @$params['cid'],
                            ['class' => 'form-control', "data-placeholder" => "Chọn Loại Nhà Cho Thuê"]) !!}
                    </div>
                    <div class="form-group">
                        <label for="sale-range-feet">Diện tích (m2)</label>
                        <div class="range-box">
                            <input id="sale-range-feet" type="text" data-from="{{@$params['acreage_from']}}" data-to="{{@$params['acreage_to']}}">
                            <input name="acreage_from" id="acreage_from" type="hidden" value="{{@$params['acreage_from']}}">
                            <input name="acreage_to" id="acreage_to" type="hidden" value="{{@$params['acreage_to']}}">
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
        <div role="tabpanel" class="tab-pane {!! @$params['type']=='buy'?'active':'' !!}" id="for-rent">
            <form action="{{$link_search}}" id="frm-rent-search" method="get">
                <input name="type" type="hidden" value="buy">
                <div class="form-body">
                    <div class="form-group">
                        <label for="sale-location">Thành phố</label>
                        <select class="form-control province_has_asset change" id="rent-location"
                                data-destination="#frm-rent-search .district" data-placeholder="Chọn Tỉnh / Thành Phố">
                            <option>Chọn Thành Phố</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sale-type">Quận/huyện</label>
                        <select class="form-control district" id="rent-location" data-placeholder="Chọn Quận Huyện">
                            <option>Chọn Quận Huyện</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <?php
                        $assets_categories = \App\Helpers\General::get_assets_categories('buy');
                        ?>
                        <label for="sale-bathroom">Loại nhà</label>
                        {!! Form::select("cid", ['' => "Chọn Loại Nhà Cần Thuê"]+$assets_categories, @$params['cid'],
                                        ['class' => 'form-control', "data-placeholder" => "Chọn Loại Nhà Cần Thuê"]) !!}
                    </div>
                    <div class="form-group">
                        <label for="sale-range-feet">Diện tích (m2)</label>
                        <div class="range-box">
                            <input id="sale-range-feet-1" type="text" data-from="{{@$params['acreage_from']}}" data-to="{{@$params['acreage_to']}}">
                            <input name="acreage_from" id="acreage_from1" type="hidden" value="{{@$params['acreage_from']}}">
                            <input name="acreage_to" id="acreage_to1" type="hidden" value="{{@$params['acreage_to']}}">
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