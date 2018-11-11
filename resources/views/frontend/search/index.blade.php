@extends('layouts.frontend')

@section('title') Tìm kiếm @stop

@section('content')
    <section id="page-builder" class="page-section">
        <!-- HERO IMAGE WITH SEARCH FORM -->
        <div class="row tpb-row" style="background-image: url(/html/assets/images/home_hero_image_default.jpg); padding-top: 44px; padding-bottom: 68px; margin: 0; background-size: cover; background-position: center;">
            <div class="tpb tpb-property_simple_search col-md-12">
                <div class="container">
                    <?=\App\Helpers\Block::form_search();?>
                </div>
            </div>
        </div>
    </section>
    <section id="property-search-result" class="archive-property">
        <!-- ====== PAGE CONTENT ====== -->
        <div class="page-section">
            <div class="container">
                <div class="panel filter-panel">
                    <div class="panel-body">
                        <h4 class="filter-title pull-left">Tìm được {{$assets->total()}} tin</h4>
                        <form action="#" class="form-inline pull-right">
                            <div class="form-group">
                                <label>Sắp xếp:</label>
                                <select class="form-control">
                                    <option value="1">Tin mới nhất</option>
                                    <option value="2">Giá thấp</option>
                                    <option value="3">Giá cao</option>
                                    <option value="4">Phổ biến</option>
                                    <option value="5">Diện tích lớn nhất</option>
                                    <option value="6">Diện tích nhỏ nhất</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="property-list archive-flex archive-with-footer">
                    <div class="row">
                    @foreach($assets as $item)
                        <div class="col-md-3 col-sm-6">
                            <!-- Property Item -->
                            <?=\App\Helpers\Block::property_item_content($item); ?>
                        </div>
                    @endforeach
                    </div>
                </div>

                {{ $assets->links('frontend/pagination/pagination') }}
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