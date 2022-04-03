<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <title>Variedades OnLine - Trabalhe Conosco</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <script>
  (function() {
            'use strict';
            window.addEventListener('load', function() {
            var form = document.getElementById('needs-validation');
            form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
            form.classList.add('was-validated');
        }, false);
    }, false);
    })();
    </script>
</head>
<body>
 <div class="container mx-auto bg-light mt-1 w-90">
 <header class="row">
  <div class="col-sm-2">   
    <img src="foto/LOJACAPA2.jpeg" alt="Variedades OnLine">
</div>
<div class="col-sm-6">
        <h1>Variedades OnLine</h1>
        <h3>Trabalhe Conosco</h3>
</div>
<div class="col-sm-4" id="barra_acessibilidade">
  <ul id="atalhos"> 
    <li><a href="#menu" accesskey="1">Início da página [1]</a></li>
    <li><a href="#rodape" accesskey="2">Final da página [2]</a></li>
</ul>
</div>  
</header>
<br>
<section class="row" id="menu">
  <div class="col-sm-12">
      <h4 class="d-none">Menu</h4>
  </div>
  <div class="col-sm-12">
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
              <ul class="navbar-nav mr-auto" >
                  <li class="nav-item">
                      <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="catalogo.html">Catálogo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="atacado.html">Atacado</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="televendas.html">Tele Vendas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="faleconosco.html">Fale Conosco</a>
                    <li>
                    <li class="nav-item">
                   <a class="nav-link" href="trabalheconosco.html">Trabalhe Conosco</a>
                    </li>
                    <li class="nav-item">
                  </li>
              </ul>
          </div>
      </nav>
      <br>
  </div>
  <br>
  <p class="col-sm-12"> Venha fazer parte da nossa Equipe</p>
  <p class="col-sm-12">Seja um representante ou parceiro da Variedades OnLine </p> 
  <p class="col-sm-12">Deixe seu curriculo para que possamos inserir no nosso banco de dados </p>
  <p class="col-sm-12">Oportunidade também para estágiario(a) e para quem esta em busca do primeiro emprego</p>
  <p class="col-sm-12">A Variedades OnLine gostaria muito de te-lo em nossa equipe</p>
  <div class="col-sm-12">
  <img src="foto/206.jpeg" class="img-fluid rounded mx-auto d-block" alt="Produtos">
  </div>
   <article class="col-12">
 <h2 id="formulario">Trabalhe Conosco</h2>
 <form action="#" method="post" id="needs-validation" novalidate>
 <div class="form-group row">
    <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome*</label>
    <div class="col-sm-10">
    <input type="text" class="form-control form-control-sm" id="nome" placeholder="Digite seu nome" required>
    <small id="nomehelp" class="invalid-feedback">
    Campo nome obrigatório.
    </small>
    </div>
    </div>
    <div class="form-group row">
    <label for="contato" class="col-sm-2 col-form-label col-form-label-sm">Telefone*</label>
    <div class="col-sm-10">
    <input type="number" class="form-control form-control-sm" id="contato" placeholder="Envie seu contato"
   required>
    <small id="emalhelp" class="invalid-feedback">
    Campo telefone obrigatório.
    </small>
    </div>
    </div>
    <div class="form-group row">
    <label for="currículo" class="col-sm-2 col-form-label col-form-label-sm">Currículo*</label>
    <div class="col-sm-10">
 <textarea class="form-control form-control-sm" id="currículo" placeholder="Envie seu currículo" required></textarea>  
    <small id="mensagemhelp" class="invalid-feedback">
    Campo mensagem obrigatório.
    </small>
    <button type="submit" class="btn btn-dark my-1">Enviar</button>
    <small id="help" class="form-text text-muted">
    * Campos obrigatórios.
    </small>
    </div>
    </div>
    </form>
    </article>
    </section>
    <footer class="row">
    </footer>
    </div>
    <noscript>Atualize seu navegador</noscript>
    </body>
   </html>