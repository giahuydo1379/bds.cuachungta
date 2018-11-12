<?php
$link = \App\Helpers\Block::get_link_asset($item);
?>
<div class="row">
    <div class="col-lg-5">
        <a href="{{$link}}" class="property-image">
            <img style="background: url('{{$item['image_url'].$item['image']}}') center center no-repeat; padding-bottom: 110%; height: 0;"
                 src="/html/assets/images/transparent.png" alt="Post list 1">
        </a>
    </div>
    <div class="col-lg-7">
        <div class="property-content">
            <h3 class="property-title"><a href="{{$link}}">{{$item['name']}}</a></h3>
            <p>
                <span class="property-price">{{$item['price']}}</span>
                <span class="property-label">
                    <a href="#" class="property-label__status">10/10/2018</a>
                    <a href="#" class="property-label__type">50 m2</a>
                </span>
            </p>
            <div class="property-address">
                Cầu Giấy, Hà Nội
            </div>
            <p class="property-description">{!! $item['description'] !!}</p>
        </div>
    </div>
</div>