<?php
$ver_js = \App\Helpers\General::get_version_js();
$ver_css = \App\Helpers\General::get_version_css();
$settings = \App\Helpers\General::get_settings();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    @loadLocalCSS(/html/node_modules/bootstrap/dist/css/bootstrap.min.css)
    @loadLocalCSS(/html/node_modules/datatables.net-bs4/css/datatables.bootstrap4.min.css)
    @loadLocalCSS(/html/node_modules/magiczoomplus/magiczoomplus.css)
    @loadLocalCSS(/html/node_modules/hover.css/css/hover-min.css)
    @loadLocalCSS(/html/node_modules/owl.carousel/dist/assets/owl.carousel.min.css)
    @loadLocalCSS(/html/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css)
    @loadLocalCSS(/html/css/style.css)
    @loadLocalCSS(/html/css/theme.css)
    <title>@yield('title') :: <?=config('app.name', 'Phan Thịnh')?></title>

    <meta name="keywords" content="@yield('og_keywords', $settings['og_keywords']['value']??'')"/>
    <meta name="description" content="@yield('og_description', $settings['og_description']['value']??'')"/>

    @yield('after_style')
</head>
<body>
<header class="header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-2"><a href="/"><img class="img-logo" src="{{URL::asset('/html/images/system/phan-thinh.png')}}" alt="PHAN THINH"></a></div>
        <div class="col-sm-10 hoa">
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-end" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <?php
                    $menuitems = \App\Helpers\General::get_menu_items();
                    $_link = url()->current();
                ?>
                @foreach($menuitems as $tmp)
                <li class="nav-item">
                    <?php
                    $link = \App\Helpers\General::get_link_menu($tmp);
                    ?>
                    <a class="nav-link <?=$link==$_link?'active':''?>" href="<?=$link?>"><?=$tmp['name']?></a>
                </li>
                @endforeach
                <li class="nav-item dropdown"><a class="nav-link dropdown_toggle" href="#" data-toggle="dropdown"><i class="fas fa-search"></i></a>
                  <div class="dropdown-menu dropdown-menu-right p-2">
                    <form class="form-inline search" action="<?=route('search')?>">
                        <input id="kw" name="kw" value="<?=@$_GET['kw']?>" class="form-control" type="text" placeholder="Tìm kiếm" aria-label="Search">
                        <a href="javascript:void(0)" onclick="$(this).closest('form.search').submit();"><span id="btn-search"><i class="fas fa-search"></i></span></a>
                    </form>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php
                $slides = \App\Models\SlideShow::getSlideShows();
            ?>
                @if(count($slides))
                    <?php $i = 0; ?>
                    @foreach($slides as $slide)
                        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                            <img class="d-block w-100" alt="{{ $slide['title'] }}" src="{{ @$slide['image_url'].$slide['image'] }}">
                        </div>
                        <?php $i++ ?>
                    @endforeach
                @endif
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
      </div>
    </div>
  </header>
@yield('content')
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h5 class="toggle">Liên hệ chúng tôi<a class="mobile_togglemenu">&nbsp;</a></h5>
                <ul class="list-unstyled">
                    <li class="address"><i class="fas fa-map-marker-alt fa-fw"></i> <?=@$settings['address']['value']?>
                    </li>
                    <li class="phoneno"><i class="fas fa-phone fa-fw"></i> <a
                                href="tel:<?=@$settings['hotline']['value']?>"><?=@$settings['hotline']['value']?></a> -
                        <i class="fas fa-fax"></i> <?=@$settings['fax']['value']?></li>
                    <li class="email"><i class="fas fa-envelope fa-fw"></i> <a
                                href="#"><?=@$settings['email_support']['value']?></a></li>
                </ul>
            </div>
            <div class="col-md-6 align-self-center">
                <h1 class="cip ">Phan Thinh</h1>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@loadLocalJS(/html/node_modules/jquery/dist/jquery.min.js)
@loadLocalJS(/html/node_modules/popper.js/dist/umd/popper.min.js)
@loadLocalJS(/html/node_modules/bootstrap/dist/js/bootstrap.min.js)
@loadLocalJS(/html/node_modules/datatables.net/js/jquery.dataTables.min.js)
@loadLocalJS(/html/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js)
@loadLocalJS(/html/node_modules/magiczoomplus/magiczoomplus.js)
@loadLocalJS(/html/node_modules/owl.carousel/dist/owl.carousel.min.js)
@loadLocalJS(/html/js/main.js)
@loadLocalJS(/js/numeral.min.js)
@yield('after_script')
</body>
</html>