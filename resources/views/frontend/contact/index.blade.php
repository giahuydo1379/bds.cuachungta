@extends('layouts.frontend')

@section('title') Liên hệ @stop

@section('content')
    <!-- ====== CONTACT PAGE HEADER ====== -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-header-title">Liên hệ</h1>
            <ul class="breadcrumb">
                <li><a href="/">Trang chủ</a></li>
                <li class="active">Liên hệ</li>
            </ul>
        </div>
    </section>
    <!-- ====== CONTACT PAGE CONTENT ====== -->
    <section class="page-section">
        <div class="container">
            <div id="content">
                <!-- Messages Form Section -->
                <section class="section-row">
                    <div class="panel-box">
                        <div class="panel-header">
                            <h3 class="panel-title">Liên hệ chúng tôi</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route("contact") }}" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input name="name" type="text" class="form-control" placeholder="Tên">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input name="email" type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="content" id="messages" cols="30" rows="7" class="form-control" placeholder="Nội dung"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn-submit btn-primary btn" value="Gửi">
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@stop

@section('after_script')
    <script type='text/javascript'>
        $(document).ready(function () {
        });
    </script>
@stop