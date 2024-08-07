<?php get_header(); ?>
<div class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slide1.png');">
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#career">Career</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <div class="banner-text banner-text-right">
        Unlocking your true potential through
        <br>
        graphic design for business
    </div>
    <div class="banner-text banner-text-bottom banner-text-bottom-left">
        Where Design
        <br>
        Meets Strategy
    </div>
    <div class="banner-text banner-text-bottom banner-text-bottom-left-small">
        <i class="fas fa-trophy"></i> an award winning creative agency
    </div>
</div>
<div class="content">
    <?php include 'services.php'; ?>
    <?php include 'intermezzo.php'; ?>
    <?php include 'usecase.php'; ?>

</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>