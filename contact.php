<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet"> 
    <?php 
        $page=2;


        $title = 'Бухарцев, php-lab-1_1';
        $time = date("m.d.y").' в '.date("H:i:s");
        $seconds = date('s');
        
        
        if ($page==0) $title = $title.' | Home';
        else if ($page==1) $title = $title.' | About';
        else if ($page==2) $title = $title.' | Contacts';
        
    ?>
    <title><?php echo $title; ?></title>
</head>
<body>
    <header>
        <nav>
            <a href="<?php echo './' ?>" <?php
                echo 'class="menu_item';
                if ($page==0) echo ' active';
                echo '">Home'; ?>
            </a>
            <a href="<?php echo './about.php' ?>"  <?php
                echo 'class="menu_item';
                if ($page==1) echo ' active';
                echo '">About'; ?>
            </a>
            <a href="<?php echo './contact.php' ?>"  <?php
                echo 'class="menu_item';
                if ($page==2) echo ' active';
                echo '">Contacts'; ?>
            </a>
        </nav>
    </header>
    <section class="contact">
        <h2 class="title">contact</h2>
        <form class="main_form">
            <input type="text" name="name" id="name" placeholder="Your name">
            <textarea name="message" id="message" placeholder="Your message"></textarea>
            <button>Send</button>
        </form>
    </section>
    <footer>
        <p><?php echo 'Сформировано '.$time.'&nbsp;'; ?> </p>
        <br>
        <p>Copyright © 2020 All Rights Reserved</p>
    </footer>
</body>
</html>