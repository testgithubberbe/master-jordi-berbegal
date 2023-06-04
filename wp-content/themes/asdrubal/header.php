<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type='text/css' media='all'>



<?php /* 
    <!--viewport sirve para adaptar texto e imagen cuando la web es responsive-->
    

    <meta charset="utf-8"><link rel="preconnect" href="https://fonts.googleapis.com">
    
    */
    
 wp_head();
 
?>
 
</head>

<body>
     
    <header>
    <nav>
        <ul>
            <li> <a class="nav" href="/index">Inicio</a></li>
            <li> <a class="nav" href="/seo">SEO</a></li>
            <li> <a class="nav" href="/sem">SEM</a></li>
            <li> <a class="nav" href="/nuevo">Nuevo</a></li>
            <li> <a class="nav" href="/rrss">RRSS</a></li>
            <li> <a class="nav" href="https://carlos.sanchezdonate.com/" target="_blank"> EMAIL</a></li>
            <li> <a class="nav" href="/carpeta/archivo-carpeta"> ARCHVIVO DENTRO DE CARPETA</a></li>
            <li> <a class="nav" href="/ejemplo-tabla" target="_blank"> EJEMPLO TABLA</a></li>
            <li> <a class="nav" href="/historia-musica" target="_blank">Historia Música</a></li>
        </ul>
    </nav>
    </header>