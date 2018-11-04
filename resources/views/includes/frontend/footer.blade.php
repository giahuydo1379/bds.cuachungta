<?php
$settings = \App\Helpers\General::get_settings();
?>
<footer id="footer" class="fixed">
    <div class="copyright">
        <div class="container clearfix">
            <p><?=$settings['copyright']['value']?></p>
            <a href="{{url('/')}}">tinthuenha.net</a>
        </div>
    </div>
</footer>