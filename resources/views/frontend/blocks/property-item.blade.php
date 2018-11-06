<?php
$link = \App\Helpers\Block::get_link_asset($item);
?>
<!-- Property Item Tall -->
<div class="property-item">
    <div class="property-header">
        <a href="archive-property.html" class="item-category">Thuê Nhà phố</a>
        <a href="{{$link}}" class="item-title">{{$item['name']}}</a>
        <div class="item-price">{{$item['price']}}</div>
    </div>
    <figure class="item-img" style="background-image: url('{{$item['image_url'].$item['image']}}');">
        <a href="{{$link}}"></a>
    </figure>
</div>