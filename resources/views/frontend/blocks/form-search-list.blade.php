<!-- Tabmenu Container / Default Bootstrap Structure -->
<?php
$params = request()->all();
$ac = \App\Helpers\General::get_controller_action();
//dd($ac);
?>
<div class="search-tabmenu">
    <!-- Tabmenu Navigation -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#for-sale" role="tab" data-toggle="tab"><i class="fi flaticon-sale"></i> Cho Thuê</a></li>
        <li><a href="#for-rent" role="tab" data-toggle="tab"><i class="fi flaticon-rent"></i> Cần thuê</a></li>
    </ul>
    <div class="tab-content">
        <!-- Tab Content For Sale -->
        <div role="tabpanel" class="tab-pane active" id="for-sale">
            <form action="" id="frm-sale-search" method="get">
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
                    $assets_categories = \App\Helpers\General::get_assets_categories('buy');
                    ?>
                    <div class="form-group">
                        <label for="sale-bathroom">Loại nhà</label>
                        {!! Form::select("cid", ['' => "Chọn Loại Nhà Cho Thuê"]+$assets_categories, @$_GET['cid'],
                            ['class' => 'form-control', "data-placeholder" => "Chọn Loại Nhà Cho Thuê"]) !!}
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
            <form action="" id="frm-rent-search" method="get">
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
                        $assets_categories = \App\Helpers\General::get_assets_categories('lease');
                        ?>
                        <label for="sale-bathroom">Loại nhà</label>
                        {!! Form::select("cid", ['' => "Chọn Loại Nhà Cần Thuê"]+$assets_categories, @$_GET['cid'],
                                        ['class' => 'form-control', "data-placeholder" => "Chọn Loại Nhà Cần Thuê"]) !!}
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