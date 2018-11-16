<?php
$settings = \App\Helpers\General::get_settings();
?>
<footer id="footer" class="fixed">
    <div class="copyright">
        <div class="container clearfix">
            <p><?=@$settings['copyright']['value']?></p>

            <ul class="list-social">
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo URL::current(); ?>"
                       onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600'); return false;" class="btn-floating btn-large btn-fb">
                        <i class="fa fa-facebook"></i></a></li>
                <li><a href="http://twitter.com/share" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600'); return false;" class="btn-floating btn-large btn-tw">
                        <i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/share?url=<?php echo URL::current(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600'); return false;" class="btn-floating btn-large btn-gplus">
                        <i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </div>
</footer>