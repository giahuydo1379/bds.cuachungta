@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span class="text-capitalize">{{ $title }}</span>
            <small>Thêm mới <span>{{ $title }}</span>.</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/">Trang chủ</a></li>
            <li><a href="<?=route($controllerName.'.index')?>" class="text-capitalize">{{ ucfirst($title) }}</a></li>
            <li class="active">Thêm mới</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm mới {{$title}}</h3>
                    </div>
                    <!-- form start -->
                    <form id="frm-add" method="post" action="<?=isset($object['id']) ? route($controllerName.'.update', ['id' => $object['id']]) : route($controllerName.'.index')?>"" class="form-horizontal">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-10">
                                          <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                           Tên  thuộc tính <span class="required"></span>
                                        </label>
                                        <div class="col-sm-8">
                                            {!! Form::select("feature_id", $assetFeature, $object['feature_id'], ['id' => 'feature_id','class' => 'form-control select2','data-placeholder' => '--- Chọn thuộc tính ---']) !!}
                                            <label id="feature_id-error" class="error" for="feature_id">{!! $errors->first("feature_id") !!}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                           Tên giá trị thuộc tính
                                        </label>
                                         <div class="col-sm-9">
                                            {!! Form::text("name", $object['name'], ['class' => 'form-control']) !!}
                                            <label id="name-error" class="error" for="name">{!! $errors->first("name") !!}</label>
                                        </div>
                                    </div>

                                          <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                            Mô tả
                                        </label>
                                        <div class="col-sm-9">
                                            {!! Form::textarea("description", $object['description'], ['class' => 'form-control']) !!}
                                            <label id="description-error" class="error" for="description">{!! $errors->first("description") !!}</label>
                                        </div>
                                    </div>

                                      <div class="form-group" >
                                        <label class="col-sm-3 control-label "  for="form-field-1">
                                     Giá trị từ
                                        </label>
                                         <div class="col-sm-9">
                                            {!! Form::text("from", $object['from'], ['class' => 'form-control', 'disabled' => 'disabled'])  !!}
                                            <label id="from-error" class="error" for="from">{!! $errors->first("from") !!}</label>
                                        </div>
                                    </div>
                                      <div class="form-group" >
                                        <label class="col-sm-3 control-label "  for="form-field-1">
                                           Giá trị đến
                                        </label>
                                         <div class="col-sm-9">
                                            {!! Form::text("to", $object['to'],  ['class' => 'form-control', 'disabled' => 'disabled' ]) !!}
                                            <label id="to-error" class="error" for="to">{!! $errors->first("to") !!}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                            Trạng thái
                                        </label>
                                        <div class="col-sm-4">
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="status1" value="0" checked> Kích hoạt
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="status2" value="1"> Không kích hoạt
                                            </label>
                                        </div>
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                            Ưu tiên <span class="required"></span>
                                        </label>
                                        <div class="col-sm-2">
                                            {!! Form::select("position", $orderOptions, $object['position'], ['id' => 'position','class' => 'form-control select2','data-placeholder' => '--- Chọn thứ tự ---']) !!}
                                            <label id="position-error" class="error" for="order">{!! $errors->first("position") !!}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5">

                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="row">
                                <div class="col-sm-3">
                                    <a href='{!! route($controllerName.'.index') !!}' class="btn btn-success btn-labeled fa fa-arrow-left pull-left"> Danh sách {{ $title }}</a>
                                </div>
                                <div class="col-sm-9 text-right">
                                    <button class="btn btn-primary btn-labeled fa fa-save"> Lưu lại</button>
                                    <button type="reset" class="btn btn-default btn-labeled fa fa-refresh"> Làm lại</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- Default box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
@section('after_styles')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/bower_components/select2/dist/css/select2.min.css') }}">
@endsection
@section('after_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/function.js') }}"></script>
    <script src="{{ asset('js/numeral.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/bower_components/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('/html-admin/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/html-admin/plugins/ckfinder/ckfinder.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#frm-add').validate({
                ignore: ".ignore",
                rules: {
//                    name: "required",
//                    address: "required",
                },
                messages: {
                    {{--name: "Vui lòng nhập tên {{ $title }}",--}}
                    {{--address: "Vui lòng nhập địa chỉ",--}}
                },
                submitHandler: function(form) {
                    ajax_loading(true);
                    $.ajax({
                        method: "PUT",
                        url: $(form).attr('action'),
                        dataType: 'json',
                        data: $(form).serializeArray()
                    })
                        .done(function (res) {
                            ajax_loading(false);
                            malert(res.msg, null , function () {
                                if (res.rs) {
                                    location.href='<?=route($controllerName.'.index')?>';
                                }
                            });
                        })
                        .fail(function (res) {
                            ajax_loading(false);
                            if (res.status == 403) {
                                malert('Bạn không có quyền thực hiện tính năng này. Vui lòng liên hệ Admin!');
                            }
                        });
                    return false;
                }
            });

            init_select2('.select2');

        });
    </script>
@endsection