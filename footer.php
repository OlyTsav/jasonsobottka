</main><!--mainContent-->

<footer>
<div class="container">
<p>&copy; <script>document.write(new Date().getFullYear())</script> Tacoma Art Gallery</p>
</div>
</footer>

<!-- Scripts -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="<?php echo site_url(); ?>/wp-content/themes/js2017/js/jquery-1.11.1.min.js"></script>
<!--<script src="<?php echo site_url(); ?>/wp-content/themes/js2017/js/lightbox.min.js"></script><!-->

<script>

$(document).ready(function(){
    $('.navBtn').click(function(){
        $('.navigation').toggleClass("active");
    });

    var lightbox = $('.gallery a').simpleLightbox({
        captions: false;
    });
});

</script>

<?php wp_footer(); ?>
</body>
</html>