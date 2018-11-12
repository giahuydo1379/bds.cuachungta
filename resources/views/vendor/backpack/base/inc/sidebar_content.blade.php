<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{backpack_url('dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
<li><a href="{{backpack_url('article') }}"><i class="fa fa-list"></i> <span>QL Bài viết</span></a></li>
<li><a href="{{backpack_url('asset') }}"><i class="fa fa-list"></i> <span>QL Sản phẩm</span></a></li>
<li><a href="{{backpack_url('asset-feature') }}"><i class="fa fa-list"></i> <span>QL Thuộc tính</span></a></li>
<li><a href="{{backpack_url('asset-feature-variant') }}"><i class="fa fa-list"></i> <span>QL Giá trị thuộc tính</span></a></li>
<li><a href="{{backpack_url('asset-category') }}"><i class="fa fa-list"></i> <span>QL Danh mục bài viết</span></a></li>
<li><a href="{{backpack_url('support') }}"><i class="fa fa-list"></i> <span>QL Hỗ trợ tực tuyến</span></a></li>
<li><a href="{{backpack_url('slide-show') }}"><i class="fa fa-picture-o"></i> <span>QL Slide Show</span></a></li>
<li><a href="{{backpack_url('page') }}"><i class="fa fa-file-o"></i> <span>Trang tĩnh</span></a></li>
<li><a href="{{backpack_url('menu-item') }}"><i class="fa fa-list-ol"></i> <span>Menu Items</span></a></li>
<li><a href="{{backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Cài đặt</span></a></li>

<li class="header"></li>
<li>
    <a href="{{ route('backpack.auth.logout') }}"
       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out"></i> <span>{{ __('Logout') }}</span>
    </a>
</li>
