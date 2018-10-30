<?php
$settings = \App\Helpers\General::get_settings();
?>
@extends('frontend.layout')
@section('title') Liên hệ @stop

@section('after_style')
<style>

</style>
@stop

@section('content')
	<div class="container">
		<div class="box contact mt-4">
			<h3 class="box-cate-title"><span>Liên hệ</span></h3>
			<h4><?=@$settings['company_name']['value']?></h4>
			<address>
                <?=@$settings['address']['value']?>
				<br> MST : <?=@$settings['tax_code']['value']?>
				<br> Tài Khoản : <?=@$settings['tax_code']['value']?>
				<br> ĐT : <?=@$settings['phone']['value']?> - FAX : <?=@$settings['fax']['value']?>
				<br> Mail : <a href="mailto:<?=@$settings['email']['value']?>"><em><?=@$settings['email']['value']?></em></a>
			</address>
			<iframe src="<?=@$settings['address_map']['value']?>" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
@stop
@section('after_script')
@stop