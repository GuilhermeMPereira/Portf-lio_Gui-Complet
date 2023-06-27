<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../static/style.css">
    <link rel="icon" type='image/png' href="../static/img/logo_site.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <title>Portfólio</title>
</head>

<body>
<?php
    require('../back-end/connect.php');
    @session_start();
    if(isset($_SESSION['msg'])){
        echo "<p class=alert>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
?>

    <i class="bi bi-list menu-mobile"></i>

    <aside id='header'>
        <section class="profile">
            <?php
                if(isset($_SESSION['login']) == true){
                    echo "<img src=$_SESSION[foto] alt=capa>";
                    echo "<h1>$_SESSION[nome]</h1>";
                }
                else{
                    echo "<img src=../static/imgs/foto.jpg alt=>";
                    echo "<h1>Guilherme Pereira</h1>";
                }
            ?>
            
            <div class="social-links mt-4 text-center">
                <a target="_blank" href="https://www.linkedin.com/in/guilherme-pereira-617491213/">
                    <i class="bi bi-linkedin"></i>
                </a>

                <a target="_blank" href="https://github.com/Guizin02">
                    <i class="bi bi-github"></i>
                </a>

                <a target="_blank" href="https://www.instagram.com/guizin_pereira2/?next=%2F">
                    <i class="bi bi-instagram"></i>
                </a>

                <a target="_blank" href="https://web.facebook.com/profile.php?id=100086513356235">
                    <i class="bi bi-facebook"></i>
                </a>

            </div>
        </section>
        <section>
            <nav id="navbar" class="nav-menu">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#" > <i class="bi bi-house-gear-fill"></i>Inicio
                       
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sobre"><i class="bi bi-person-fill"></i>Sobre
                      
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#habilidades"><i class="bi bi-list-check"></i>Habilidades
                  

                      </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#curriculo">   <i class="bi bi-file-earmark"></i>Currículo
                         

                        </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#portfolio"><i class="bi bi-collection"></i>Portfólio
                            

                        </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#contato"> <i class="bi bi-phone-vibrate-fill"></i>Contato
                           
                        </a>
                      </li>
                  
                  </ul>
            </nav>
        </section>
    </aside>

    <main id="main">

        <section id="inicio" class="row m-0 p-0">
            <div class="col-md-13 d-flex justify-content-center align-items-center flex-column">
                <?php
                    if(isset($_SESSION['login']) == true){
                        echo "<h2 class=text-white text-shadow>$_SESSION[nome]</h2>";
                        echo "<span id=subtitle class=text-white text-shadow col-md-5>$_SESSION[funcao]</span>";
                        echo "<p class=text-white text-shadow row col-md-7 pt-5>$_SESSION[descricao]</p>";
                    }
                    else{
                        echo "<h2 class=text-white text-shadow>Guilherme Pereira</h2>";
                        echo "<span id=subtitle class=text-white text-shadow col-md-5>Diretor-Executivo</span>";
                        echo "<p class=text-white text-shadow row col-md-7 pt-5>Sou o Guilherme, estou cursando o terceiro ano do ensino médio
                        e tenho como objetivo ingressar profissionalmente no mercado de trabalho em áreas atreladas a computação, trabalho muito bem como full-stack conseguindo operar tanto o back-end quanto o front-end,
                        sei trabalhar com a linguagem de programação Java além de estar aprendendo sobre Python e C#,
                        em vista de muitos aspectos consigo trabalhar com Pre Hyper Text Processor, e com banco de dados.
                        </p>";
                    }
                ?>
            </div>


        </section>

        <section class="container mt-5" id='sobre'>


            <div class="row mt-4">
                <div class="col-md-4">
                    <?php
                    if(isset($_SESSION['login']) == true){
                        echo "<img class=img-fluid shadow src=$_SESSION[foto] alt=foto data-anime=left>";
                    }
                    else{
                        echo "<img class=img-fluid shadow src=../static/imgs/foto.jpg alt= data-anime=left>";
                    }
                    ?>
                </div>
                <div class="col-md-8" data-anime="right">
                    <?php
                    if(isset($_SESSION['login']) == true){
                        echo "<h3>$_SESSION[funcao]</h3>";
                    }
                    else{
                        echo "<h3>Diretor-Executivo</h3>";
                    }
                    ?>
                    <p>Atualmentee sou Diretor Executivo da Ender Softwares, atuando com linguagens de Python, Java, JavaScript
                        junto com full-stack e a administração da empresa.</p>

                        <div class="row mt-3 mb-3">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush fs-5">
                                    <li class="list-group-item">
                                        Aniversário: <span class="fw-lighter">02 Julho de 2005

                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        Idade: <span class="fw-lighter">17 Anos</span>

                                    </li>
                                    <li class="list-group-item">
                                        Genero: <span class="fw-lighter">Masculino</span>
                                    </li>
                                    <li class="list-group-item">
                                        Cidade: <span class="fw-lighter">São Paulo</span>

                                    </li>
                                    <li class="list-group-item">
                                       Estado: <span class="fw-lighter">São Paulo</span>

                                    </li>
                                    <li class="list-group-item">
                                        Rua: <span class="fw-lighter"> Rua Serra Bonita 116</span>

                                    </li>
                                  </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush fs-5">
                                    <li class="list-group-item">
                                        Características: <span class="fw-lighter">Muito Comunicativo, trabalho bem em grupo, bom em liderança</span>
                                </li>
                                <li class="list-group-item">
                                        Idiomas: <span class="fw-lighter">Português, Inglês </span>
                                    </li>
                                    <li class="list-group-item">
                                        Experiência: <span class="fw-lighter">+1 ano</span>
                                    </li>
                                    <li class="list-group-item">
                                       Pretensão Salárial: <span class="fw-lighter" target="_blank" class="fw-lighter text-decoration-none link-dark">R$1.200</span>
                                    </li>
                                    <li class="list-group-item">
                                        Objetivo: <span class="fw-lighter">Trabalhar com Engenharia de Software </span>
                                    </li>
                                   
                                  </ul>
                            </div>
                    </div>

                    <p>Tendo em vista de abordar muitos conhecimentos em áreas computacionais, pretendo ingressar nesta rede de freelancer para adquirir uma quantia monetária para a faculdade
                        e adquirir mais conhecimento.</p>

                </div>
            </div>
        </section>

     

            <section class="mt-5 bg" id="habilidades">
                <div class="container pb-5">
                    <h2 class="pt-5">Habilidades</h2>
                    <p>De acordo com meu tempo de estudos e práticas com a tecnologia 
                        adquiri muitas habilidades, as medindo por porcentagem daria.
                    </p>
    
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mt-3 mb-0">HTML</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Example with label" 
                                style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" data-anime="left">
                                70%</div>
                              </div>  
    
                              <p class="mt-3 mb-0">CSS</p>
                              <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                   style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-anime="left">
                                  80%</div>
                                </div>       
                              
                              <p class="mt-3 mb-0">Java</p>
                              <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-label="Example with label" 
                                  style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" data-anime="left">
                                  50%</div>
                                </div>      
                                
                                <p class="mt-3 mb-0">PHP</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-label="Example with label" 
                                    style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" data-anime="left">
                                    50%</div>
                                  </div>
    
                               
    
                        </div>
                        <div class="col-md-6">
                            <p class="mt-3 mb-0">Python</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Example with label" 
                                style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" data-anime="left">
                                40%</div>
                              </div>    
    
                              <p class="mt-3 mb-0">Banco de dados (SQL) </p>
                              <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-label="Example with label" 
                                  style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" data-anime="left">
                                 70%</div>
                                </div>       
                                
                                  
                                  <p class="mt-3 mb-0">C</p>
                                  <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                       style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" data-anime="left">
                                      35%</div>
                                    </div>   
                                    
                                    <p class="mt-3 mb-0">Bootstrap</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-label="Example with label" 
                                        style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" data-anime="left">
                                        45%</div>
                                      </div>       
    
                        </div>
                </div>

            </div>

        </section>

        <section class="mt-4 cv" id="curriculo">

            <div class="container pb-5">
                <h2 class="pt-3 pb-4">Currículo</h2>

                <div class="row">
                    <div class="col-md-6">
                        <h3 class="cv-title">Educação</h3>

                       <div class="cv-item" data-anime="up">
                    <h4>Curso de Extensão Universitária na modalidade
                        de Difusão: Projeto Codifique (Ciências da Computação)
                    </h4>
                    <h5>2021 - 2021</h5>
                    <p><em>Universidade de São Paulo</em></p>
                    <p>Curso voltada a área de Ciências da Computação Online</p>
                </div>

                <div class="cv-item" data-anime="up">
                    <h4>Introdução a Ciências da Computação
                    </h4>
                    <h5>2022 - 2022</h5>
                    <p><em>Harvard (Estudar na Prática)</em></p>
                    <p>Curso voltada a área de Ciências da Computação </p>
                </div>

                <div class="cv-item" data-anime="up"> 
                    <h4>Técnico em Desenvolvimento de Sistemas
                    </h4>
                    <h5>2022 - 2023</h5>
                    <p><em>ETEC ITAQUERA 1</em></p>
                    <p>Curso Profissionalizante a área de Desenvolvimento de Sistema </p>
                </div>
                    </div>

                    <div class="col-md-6">
                    <h3 class="cv-title">Profissional</h3>

                    <div class="cv-item" data-anime="up">
                        <h4>Freelancer </h4>
                        <h5>2021 - 2023</h5>
                        <p><em>99freelas, workana</em></p>
                        <p>Atuei como freelancer por algum tempo criando sites e desenvolvendo aplicativos, ajudando até na administração de uma empresa</p>
                    </div>
    
                    <div class="cv-item" data-anime="up">
                        <h4>Desenvolvimento de Aplicativos</h4>
                        <h5>2022 - 2022</h5>
                        <p><em>EDAM, E-Learning</em></p>
                        <p>Já desenvolvi uma serie de aplicativos mobile para duas empresas, uma de apoio ao idoso que é a EDAM, e uma empresa caracterizada para o apoio a criação de TCCs</p>
                    </div>
    
                    <div class="cv-item" data-anime="up">
                        <h4>Professor de Programação</h4>
                        <h5>2022 - 2022</h5>
                        <p><em>Estudar na Prática</em></p>
                        <p>Dei algumas aulas na fundação após tirar 48/50 questões na sua prova final e fui chamado para a monitoria atuei em algum tempo.</p>
                    </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="section-bg mt-5">
            <div class="container pb-5 pt-5" data-anime="left">

                <h2 class="pb-4">Portfólio</h2>

                <div id="carouselPortfolio" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselPortfolio" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselPortfolio" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">

                             <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card">
                                        <img src="../static/imgs/doacao.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Site de Doação</h5>
                                          <p class="card-text">Projeto FullStack criado com o objetivo de ajudar na doação de cachorros de rua com PHP e SQL</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="../static/imgs/summer.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Site de Loja de Games</h5>
                                          <p class="card-text">Projeto BackEnd onde fiquei encarregado da parte de Dados do PHP.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="../static/imgs/calculadora.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Calculadora de Área</h5>
                                          <p class="card-text">Um projeto onde utilizamos JavaScript para fazer o calculo da área das formas geométricas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="../static/imgs/jogo.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Jogo com JavaScript</h5>
                                  <p class="card-text">Projeto onde desenvolvemos um simulado de um jogo com JavaScript</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="../static/imgs/nikojapan.png"card-img-top" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Site de Venda de Carros Japonês</h5>
                                          <p class="card-text">Projeto front-end onde fiquei encarregado da parte de estilizar o site. </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <div class="card">
                                            <img src="../static/imgs/GRADES.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title">Grades (site de evento)</h5>
                                              <p class="card-text">Projeto FullStack desenvolvido para dar suporte a inserção de notas das apresentações</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPortfolio"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPortfolio"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </section>

        <section class="pt-5 pb-5" id="contato">

            <div class="container mb-5">
                <h2 class='pt-3 pb-3'>Contato</h2>

                <div class="row">

                    <div class="col-md-5">
                        <div class="card p-5 shadow border-0" data-anime="up">
                            <div class="endereco">
                                <h4><i class="bi bi-geo-alt"></i> Localização:</h4>
                                <p>São Paulo, SP</p>
                            </div>

                            <div class="email">
                                <h4><i class="bi bi-envelope"></i> Email:</h4>
                                <p>guilherme.martins158@etec.sp.gov.br</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.642121501973!2d-46.49728558575562!3d-
                                23.581293468212085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce67a22fae89f7%3A0xa6d7e8a2a9546e19
                                !2sR.%20Serra%20Bonita%20-%20S%C3%A3o%20Mateus%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003930-100!5e0!3m2!1spt-BR!2
                                sbr!4v1670883784920!5m2!1spt-BR!2sbr"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                class='w-100'></iframe>
                        </div>
                    </div>

                    <div class="col-md-7 mt-5 mt-md-0">
                        <div class="card p-5 h-100 shadow border-0" data-anime="left">

                            <form class="row g-3" action='/send' method="POST">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome:</label>
                                    <input type="text" class="form-control" id="nome" name='nome'
                                        placeholder='Digite seu nome' required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name='email'
                                        placeholder='Digite seu email' required>
                                </div>

                                <div class="col-12">
                                    <label for="mensagem" class="form-label">Mensagem:</label>
                                    <textarea type="text" class="form-control" id="mensagem" name='mensagem' rows="10"
                                        placeholder="Digite sua mensagem" required></textarea>
                                </div>


                                <div class="col-12 d-flex justify-content-center mt-4">
                                    <button id='btn-enviar' type="submit" class="btn btn-primary">Enviar
                                        mensagem</button>
 
                                        <!-- <button id="btn-loader" class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Loading...
                                        </button>  -->

                                </div>

                                

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </section>
<!-- 
        {% with messages = get_flashed_messages() %}
        {% if messages %}
          <ul class=flashes>
          {% for message in messages %}
            <li>{{ message }}</li>
          {% endfor %}
          </ul>
        {% endif %}
      {% endwith %}
        
    </main> -->


    <script src="../static/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../static/script.js"></script>
</body>

</html>