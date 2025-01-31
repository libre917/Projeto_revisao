<?php
$menu = [
  "Home" => "index.php",
  "Projetos" => "projetos.php"
];
$content = [
  "Sobre mim" => [
   "img" => '<div class="imagem">
                 <img src="./img/User_image.webp" alt="">  </div>',
  "Nome_completo" => "Lucas Soalheiro Pereira",
  "Idade" => "18",
  "Email" => "lucas.pereira@gmail.com",
  "Telefone" => "(55) 11 97072-0124",
  "Localizacao" => "São Paulo",
  "Github" => "<a href='https://github.com/libre917' target='blank'><img style='width:75px;' src='./img/github_icon.png'></a>",
  ],
  "Minhas habilidades e graduações" => [
  "<strong>Formação:</strong>" => "Ensino médio E.E. Jozineide Pereira Gaudino | (Janeiro/2022 - Dezembro/2024) <br>Serviço Nacional de Aprendizagem Industrial(SENAI) | (Julho/2024 - Dezembro/2025) ",
  "<strong>Experiência:</strong>" => "Não possuo experiência profissional, pois dediquei meu tempo aos estudos",
  "<strong>Idiomas</strong>" => "Inglês(Suficiente)",
  ],
  "Interesse " => [
    "meus interesses são" =>
      [
        "nenhum no momento" => "",
        "" => "",
        "" => "",
      ],
  ],
  "Resumo " => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi aspernatur officia necessitatibus quae distinctio, impedit earum quaerat, consectetur quod, qui voluptas exercitationem obcaecati! Laboriosam, dignissimos laudantium rem id ducimus quasi.",
  "Objetivo" => "investir em carreira profissional e evoluir minhas habilidades",

];

function menu($menu)
{

  echo '<header>
  <nav class="nav-bar">
      <div style="margin-right:150px;font-size: 22px;">
          <h1>Portfólio</h1>
      </div>
      <div>
          <ul>';
  foreach ($menu as $nome => $link) {
    echo '<li><a href="' . $link . '">' . $nome . '</a></li>';
  }
  ;
  echo '</ul>
      </div>
  </nav>
</header>';

}


$item_portifolio = [
  "Microsoft" => [
    "Descricao" => "
    É um projeto pessoal baseado no site oficial da Microsoft afim de desenvolver minhas habilidades de Html, css, PHP e conhecer o Bootstrap.",
    "img" => "./img/microsoft.png",
    "link" => "https://github.com/libre917/Microsoft_Project",
  ],
  "Apple" => [
    "Descricao" => "
    Foi um projeto trabalhado em grupo baseado no site oficial da Apple, Foi um utilizado Html, Css e um pouco de Javascript.",
    "img" => "./img/apple.png",
    "link" => "https://github.com/libre917/Apple_project",
  ],
  "EstudoMind" => [
    "Descricao" => "
    Foi um projeto semestral feito em equipe. É um site de cursos que utiliza Html, Css, PHP e Javascript.",
    "img" => "./img/estudomind.png  ",
    "link" => "https://github.com/Guimenn/CursosOnline",
  ],
];