<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <?php wp_head() ?>


</head>
<body>
    
<header>
<div class="grid">
<h1>Khamal Akbar</h1>
<?php 
wp_nav_menu(

array(
    'theme_location' => 'main-menu',
    'menu_class' => 'main-menu'
)

)

?> 
</div>




</header>