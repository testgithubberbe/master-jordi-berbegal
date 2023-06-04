
<?php
include_once 'header.php';?>

<div class="general">

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
