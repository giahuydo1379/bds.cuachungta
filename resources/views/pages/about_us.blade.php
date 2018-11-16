@extends('layouts.frontend')

@section('title', $page['title'])

@section('content')
    <!-- ====== ABOUT PAGE HEADER ====== -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-header-title">{{$page['title']}}</h1>
            <?=\App\Helpers\Block::breadcrumb([['link' => 'javascript:void(0)', 'name' => $page['title']]])?>
        </div>
    </section>
    <!-- ====== PAGE CONTENT ====== -->
    <section id="page-content" class="page-section">
        <div class="container">
            <!-- Section Title -->
            <div class="section-header">
                <h2 class="section-title"><?=$page['page_name']?></h2>
            </div>
            <!-- Section Content -->
            <div class="panel-box">
                <?=$page['content']?>
            </div>
        </div>
    </section>
    <div class="socials-box" style="background: none; margin-top: 0; margin-bottom: 50px;">
        <div class="container">
            <div class="row">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo URL::current(); ?>"
                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600'); return false;"
                   class="btn btn-facebook col-md-4 col-xs-4"><i class="fa fa-facebook"></i></a>
                <a href="http://twitter.com/share"
                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600'); return false;"
                   class="btn btn-twitter col-md-4 col-xs-4"><i class="fa fa-twitter"></i></a>
                <a href="https://plus.google.com/share?url=<?php echo URL::current(); ?>"
                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600'); return false;"
                   class="btn btn-google col-md-4 col-xs-4"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
    </div>
@endsection