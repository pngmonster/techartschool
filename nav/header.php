<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styles.css">
        <title>Наша компания</title>
    </head>

    <body>
        <header>
            <img src="https://s1.iconbird.com/ico/1112/DiagramPreview/w128h1281354120390diagram06.png" alt="[Иконка дома]">
            <h1>Наша компания</h1>
            <nav>
                <?php require "menu.php"; 

                    foreach ($menu as $item)
                    {?>
                    <a href="<?php echo $item['link'];?>"><?php echo $item['text'];?></a>
                <?  }?>
            </nav>
        </header>
