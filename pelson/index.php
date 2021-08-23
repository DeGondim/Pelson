<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script type="text/javascript" src="js/script.js"></script>
    
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Pelson Paiol</title>
    <link rel="icon" href="imagens/logo.png">
  </head>
  <body>
        <!-- Modal -->
        <?php
        if(!isset($_SESSION["modal"])){
           $_SESSION["modal"] = true;
        ?>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
              <div class="modal-dialog capa" role="document">
                <img src="imagens/pelson1.png" class="img-fluid" style="margin-bottom: 20px">
                <a href="">
                  <h3 class="h3logomodal">
                    P    E    L    S    O    N
                  </h3>
                  <br>
                  <h3 class="h3logominmodal">
                    -   P   A   I   O   L   -
                  </h3>
                </a>
                <div class="modal-content totalmodal">
                  <div class="modal-header titlemodal">
                    <h5 class="modal-title" id="exampleModalLabel">Verificação de idade</h5>
                  </div>
                  <div class="modal-body">
                    <div>
                        <p id="msgmodal"></p>
                    </div>
                    <p class="idadetop">O acesso para este site, só é permitido para maiores de idade.</p>
                    <p class="idade"><b>Você tem mais de 18 anos?</b></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn col-md-6 btn-verde" data-dismiss="modal">SIM</button>
                    <button type="button" onclick="funcao()" class="btn col-md-6 btn-red";">NÃO</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

    <header>
      <nav class="navbar navbar-expand-md fixed-top navbar-light navbar-transparente">
        <div class="container">
          <a href="index.html" class="navbar-brand top">
            <h3 class="h3logo">
              P    E    L    S    O    N
            </h3>
            <br>
            <h3 class="h3logomin">
                  -   P   A   I   O   L   -
            </h3>
          </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-white"></i>
          </button>
          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="#Produto" class="nav-link">Produto</a>
              </li>
              <li class="nav-item">
                <a href="#Biografia" class="nav-link">Biografia</a>
              </li>
              <li class="nav-item">
                <a href="#Contato" class="nav-link">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section id="home" class="d-flex">
      <div class="container align-self-center">
        <div class="row"><!--row -->
          <div class="col-md-12 capa">
            <div id="carousel-pelson" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="imagens/menta1.png" class="img-fluid imgcarousel">
                  <img src="imagens/pelson1.png" class="img-fluid imgcarouselmid">
                  <img src="imagens/uva1.png" class="img-fluid imgcarousel">
                  <div>
                    <a href="#Produto" class="btn btn-lg btn-custom btn-verdec">
                      Produtos
                    </a>
                    <a href="#Biografia" class="btn btn-lg btn-custom btn-roxo">
                      Biografia
                    </a>
                  </div>
                </div>
                <div class="carousel-item">
                  <h1>Os melhores paieiros!</h1>
                  <a href="index.html" class="btn btn-lg btn-custom btn-branco">
                    <i class="fas fa-phone"></i> CONTATO
                  </a>
                </div>
              </div>
              <a href="#carousel-pelson" class="carousel-control-prev" data-slide="prev">
                <i class="fas fa-angle-left fa-3x"></i>
              </a>
              <a href="#carousel-pelson" class="carousel-control-next" data-slide="next">
                  <i class="fas fa-angle-right fa-3x"></i></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="servicos" class="caixa">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 id="Produto">Produtos</h3>
            <p> Como sempre priorizamos a qualidade excepcional de nossos produtos, aqui vamos mostrar os produtos que nós trabalhamos atualmente. Todo o processo se inicia com a escolha dos melhores fumos, em ambos produtos nós fazemos um Blend, misturando dois tipos de fumo e dando toque especial que só o Pelson tem. Em segundo, separamos e fazemos a escolha das melhores palhas, frisando novamente a qualidade em ambas etapas do processo de produção e produto final. </p>
          </div>
          <div class="col-md-6">
            <div class="row albuns">
              <div class="col-md-6 zoom">
                <img src="imagens/pelson.png" class="img-fluid product">
              </div>
              <div class="col-md-6 zoom">
                <img src="imagens/Premium.png" class="img-fluid product">
              </div>
            </div>
            <div class="row albuns">
              <div class="col-md-6 zoom">
                <img src="imagens/menta.png" class="img-fluid product">
              </div>
              <div class="col-md-6 zoom">
                <img src="imagens/uva.png" class="img-fluid product">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h3 style="color:  #bf952e;">Pelson Paiol Original</h3>
            <p>Cigarro de palha tradicional, com blend de fumos exclusivos do Pelson Paiol.<br> Contêm 20 cigarros de palhas com piteiras.</p></p>
            <h3 style="color:  #bf952e;">Pelson Paiol Premium</h3>
            <p>Cigarro de Palha Pelson Paiol Premium.<br> Fumo natural (BLEND).<br> Contêm 20 cigarros de palhas com piteiras.</p>
            <h3 style="color: #5fdb57;">Pelson Paiol Menta Refresh</h3>
            <p>             Cigarro de Palha Pelson Paiol sabor menta.<br>Fumo natural (BLEND) com essência de menta.<br>Contêm 20 cigarros de palhas.</p>
            <h3>Pelson Paiol Uva</h3>
            <p>Cigarro de Palha Pelson Paiol sabor uva.<br>Fumo natural (BLEND) com essência de uva.<br>Contêm 20 cigarros de palhas.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="recursos" class="caixa">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h2 id="Biografia" style="color: whitesmoke;">Biografia</h2>
            <br>
            <p style="color: whitesmoke;">Pelson Paiol, ideia de dois amigos que cresceram juntos e descobriram a falta de qualidade nos cigarros de palhas artesanais, principalmente do local onde eles nasceram, procurando então uma solução para problema nasce o Pelson Paiol em 2021 em uma cidade, chamada Jacareí, do interior paulista (Vale do Paraíba). Desde então continuamos, um pequeno projeto que se tornou um grande sonho.
            <br>Qualidade, socialização e transparência.</p>
          </div>
          <div class="col-md-7">
            <div class="row rotacionar">
              <div class="col-md-7 zoom">
                <img src="imagens/Ppremium.jpg" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="servicos" class="caixa">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 id="Contato">Contato</h3>
            <p>Para mais informações e cotações entrem em contato conosco através do email ou através de algum dos nossos consultores.</p>
            <br>
          </div>
          <div class="col-md-4">
            <h4>Victor Mancini</h4>
            <p><a href="tel:+551299769-0912" target="_blank" style="color: black; text-decoration: none;"><img src="imagens/telefone.png" width="25px"> 12 99769-0912</a></p>
            <p><a href="mailto:victormanciviana@gmail.com" style="color: black; text-decoration: none;"><img src="imagens/email.png" width="25px"> Victormanciviana@gmail.com</a></p>
            <p><a href="https://api.whatsapp.com/send?phone=5512997690912" target="_blank" style="color: black; text-decoration: none;"><img src="imagens/wpp.png" width="24px"> WhatsApp</a></p>
          </div>
          <div class="col-md-4">
            <h4>Pelson Paiol</h4> 
            <p><a href="mailto:pelsonpaiol@gmail.com" style="color: black; text-decoration: none;"><img src="imagens/email.png" width="25px"> PelsonPaiol@gmail.com</a></p> 
          </div>
          <div class="col-md-4">
            <h4>André Gondim</h4>
            <p><a href="tel:+551299105-4402" target="_blank" style="color: black; text-decoration: none;"><img src="imagens/telefone.png" width="25px"> 12 99105-4402</a></p>
            <p><a href="mailto:andrebgondim@hotmail.com" style="color: black; text-decoration: none;"><img src="imagens/email.png" width="25px"> Andrebgondim@hotmail.com</a></p>
            <p><a href="https://api.whatsapp.com/send?phone=5512991054402" target="_blank" style="color: black; text-decoration: none;"><img src="imagens/wpp.png" width="24px"> WhatsApp</a></p>     
          </div>
        </div>
      </div>
    </section>
    
    <footer>
      <div class="container">
        <div class="row">
          <a href="index.html" style="text-decoration: none;">
            <div class="col-md-3">
              <h3 class="h3rodape">
                P    E    L    S    O    N
              </h3>
              <br>
              <h3 class="h3rodapemin">
                    -   P   A   I   O   L   -
              </h3>
            </div>
          </a>
          <div id="rodape" class="col-md-6">
            <h4>© 2021 Pelson Paiol - Todos os direitos reservados</h4>
            <br>
          </div>
          <div class="col-md-3 rodapeicon">
            <ul>
              <li>
                <a href=""><img src="imagens/facebook.png"></a> 
              </li>
              <li>
                <a href=""><img src="imagens/twitter.png"></a>
              </li>
              <li>
                <a href=""><img src="imagens/instagram.png"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
          $('#myModal').modal({backdrop: 'static', keyboard: false})  
          $('#myModal').modal('show');
      })
    </script>
  </body>
</html>