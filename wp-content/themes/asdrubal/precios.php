
<?php
include_once 'header.php';

/* Template Name: dinero */

?>

<div class="generico">

<div class="landing especial">Precios ultra rebajados</div>

<h1>
    <?php the_title();?> 
</h1>



    <section id="content">

    <?php
    echo the_content();
    ?>
    </section>

</div>

<?php
include_once 'footer.php';?>
