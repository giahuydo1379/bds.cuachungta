<?php
$link = \App\Helpers\Block::get_link_asset($item);
?>
<!-- Property Item Content -->
<div class="property-item">
    <div class="property-heading">
        <span class="item-price">{{$item['price']}}</span>
        <a href="{{$link}}" class="item-detail btn"><i class="fi flaticon-detail"></i></a>
    </div>
    <div class="img-box">
        <div class="property-label">
            <a href="#" class="property-label__type">nhà cho thuê</a>
        </div>
        <a href="{{$link}}" class="img-box__image"><img
                    style="background: url('{{$item['image_url'].$item['image']}}') center center no-repeat; padding-bottom: 56.25%; height: 0;"
                    src="/html/assets/images/transparent.png" alt="" class="img-responsive"></a>
    </div>
    <div class="property-content">
        <a href="{{$link}}" class="property-title">{{$item['name']}}</a>
        <div class="property-address">
            Cầu Giấy, Hà Nội
        </div>
        <div class="property-footer">
            <div class="item-wide"><span class="fi flaticon-wide"></span> 518 m2</div>
            <div class="item-date"><span class="fi flaticon-clock"></span> 22/09/2018</div>
        </div>
    </div>
</div>