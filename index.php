<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet"> 
    <?php 
        $page=0;


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
    <section class="introduce">
        <div class="wrapper">
            <h1 class="main_title">We make your future waste-free!</h1>
            <div class="flex_wrapper">
                <h2 class="sub_title">Scroll bellow</h2>
                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48"><path d="M6 8l18 32L42 8H6zm6.75 4h22.5L24 32 12.75 12z" fill='white'/></svg>
            </div>
        </div>
    </section>
    <section class="services_wrapper">
        <h2>What we can do?</h2>
        <div class="services">
            <div class="services__card">
                <img src="<?php
                if ($seconds%2==0) echo './img/opening-time-3014158_640.png';
                else echo './img/recycling-1341372_640.png';
                ?>" alt="">
                <p class="service_title">We take out the garbage around the clock</p>
                <p>You can order a bunker truck at any convenient time of the day or night.</p>
            </div>
            <div class="services__card">
                <img src="./img/heavy-3491395_640.png" alt="">
                <p class="service_title">Professional movers</p>
                <p>We have only professional movers. You will always get quality help.</p>
            </div>
            <div class="services__card">
                <img src="./img/recycling-1341372_640.png" alt="">
                <p class="service_title">All your garbage will be recycled</p>
                <p>Your garbage will be recycled into something new with a 100% probability</p>
            </div>
        </div>
    </section>
    <section class="prices">
        <table>
            <?php
            echo '
            <tr>
                <td>Order price</td>
                <td>Price per hour</td>
                <td>Price for recycling</td>
            </tr>';
            ?>
            <tr>
                <td><?php echo '20$'; ?></td>
                <td><?php echo '10$'; ?></td>
                <td><?php echo '100$'; ?></td>
            </tr>
            
        </table>
    </section>
    <footer>
        <p><?php echo 'Сформировано '.$time.'&nbsp;'; ?> </p>
        <br>
        <p>Copyright © 2021 All Rights Reserved</p>
    </footer>
</body>
</html>