<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
        <!-- emmet: header>h1+p+nav>ul>li*3>a -->
        <header class="left">
            <h1 class="left__title">O'Clock Students News</h1>
            <div class="left__paragraph">
            <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
            </p>
            </div>
            <nav>
            
            <?php

                $tableauNav = [
                ['lien' => 'plan_de_site.php',
                    'nom'  =>  'plan du site'],

                ['lien' => 'mentions_legales.php',
                    'nom'  =>  'mentions legales'],

                ['lien' => 'contact.php',
                    'nom'  =>  'contact']

                ];


                $compteurTableau = 0;
                while($compteurTableau <3): 
            ?>
                    <ul class="left__nav">
                        <li class="left__nav-item">
                            <a href="<?= $tableauNav[$compteurTableau]['lien'] ?>" class="left__nav-link"><?= $tableauNav[$compteurTableau]['nom'] ?></a>
                        </li>
                    </ul>
            <?php
                $compteurTableau++;
                endwhile
            ?>    
            </nav>
        </header>