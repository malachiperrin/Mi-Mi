<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= bloginfo("name"); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<header style="display: flex; align-items: center; justify-content: space-between;">
    <div>
        <span style="color: pink; font-size: 40px;">Mi-Mi</span>
    </div>

    <nav style="display: flex; align-items: center; justify-content: center;">
        <div><a href="#">Nav Link</a></div>
    </nav>
</header>