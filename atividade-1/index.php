<?php
require_once "array.php"
    ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Currículo</title>
</head>

<body>
<?php
menu($menu);
?>
    <main>
        <section class="secao_curriculo">
            
            <ul class="curriculo">
          <?php
foreach ($content as $title => $title_content) {
    if ($title == "Sobre mim"){
        echo"<li class='nome_curriculo'><div style='display:flex;   '>
        <div style='margin-right:20px;'>
        ".$title_content['img']."
        </div>
        <div>
        <h2>Olá, me chamo <p class='important_word'>". $title_content['Nome_completo']."</p></h2>
        <div class='not_important_word'>Idade: ". $title_content['Idade']." anos</div>
        <div class='not_important_word'>Email: ". $title_content['Email']."</div>
        <div class='not_important_word'>Telefone: ". $title_content['Telefone']."</div>
        <div class='not_important_word'>Estado: ". $title_content['Localizacao']."</div>
         <span class='borda-embaixo'></span>
         </div>
        </li>
       ";
    }else{
    echo "<li class='curriculo_content'><h3>$title</h3><div class='content'>";
    if (is_string($title_content)) {
        echo "<p>$title_content</p>";
    } elseif (is_array($title_content)) {
      
        foreach ($title_content as $subtitle => $sub_content) {
            if(is_string($sub_content)){
           echo $subtitle.'<br>'.$sub_content.'<br>';}
            if (is_array($sub_content)) {
              
                foreach ($sub_content as $sub_sub_content => $sub_sub_sub_content) {
                    
                    echo "<p>$sub_sub_content</p>";
                }
            }
        }
    }
    echo"</div></li>";
}
}

?>

            </ul>
        </section>
    </main>

    <footer>
        &copy;lucasserralheiro
    </footer>

</body>

</html>