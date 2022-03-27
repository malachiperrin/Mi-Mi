<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;0,700;1,900&family=Raleway:wght@400;500;600&display=swap" rel="stylesheet">
    <title><?php echo bloginfo('name'); ?></title>

    <?php wp_head() ?>
</head>
<body>
    <header>
        <?php get_template_part('templates/primary-navigation', null); ?>
    </header>
    <section id="page-hero">
        <h1 id="page-title">Page Title</h1>
    </section>
    <main class="page-content">
    <?php 
    get_template_part( "templates/cookie-notice", null );
    ?>