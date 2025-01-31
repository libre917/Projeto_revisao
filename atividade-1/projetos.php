<?php
require_once "array.php"
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Currículo</title>
</head>

<body>
    <?php menu($menu) ?>
    <main>
        <section class="secao_portifolio">
            <?php
            foreach ($item_portifolio as $title => $content) {
                echo "<article class='portifolio'>
                ";


                echo "
                    <div style='display:flex;align-items:center;'>
               <div class='descricao'><h2>" . $title . "</h2><p>" . $content['Descricao'] . "</p>
                <a href='". $content['link'] ."' target='blank'><button class='descricao_botao'>Link para o Projeto no GitHub</button></a></div>
               <div class='descricao_img'><img src='" . $content['img'] . "'</div>
               </div>

               </article>";

            }
            ;
            ?>
        </section>
    </main>
    <footer>
        &copy;lucasserralheiro
    </footer>

</body>

</html>