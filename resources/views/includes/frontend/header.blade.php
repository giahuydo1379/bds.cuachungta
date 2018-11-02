<?php
$menu_items = \App\Helpers\General::get_menu_items();
?>
<!-- ====== BEGIN HEADER ====== -->
<header id="header">
    <!-- Main Menu Header -->
    <nav class="navbar navbar-default navbar-fixed-top-1">
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header">
                <a href="{{url('/')}}" id="navbar-brand" class="navbar-brand"><img src="/html/assets/images/header-logo-default.png"
                                                                        alt="kensington Property"></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Navbar Menu -->
            <nav id="navbar" class="navbar navbar-right navbar-collapse collapse">
                <ul class="nav navbar-nav">
                @foreach($menu_items as $item)
                    <!-- Dropdown Menu -->
                    <li>
                        <a class="scrollLink" href="{{$item['link_full']}}">{{$item['name']}}</a>
                    </li>
                @endforeach
                </ul>
            </nav>
        </div>
    </nav>
</header>
<!-- ====== END HEADER ====== -->