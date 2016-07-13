<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php?page=about">Projeto IMC</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class=<?php echo isset($_GET['page']) ? $_GET['page'] == 'about' ? 'active': '' : 'active' ?>><a href="index.php?page=about">O que é IMC <span class="sr-only">(current)</span></a></li>
        <li class=<?php echo isset($_GET['page']) ? $_GET['page'] == 'calculo' ? 'active': '' : '' ?>><a href="index.php?page=calculo">Calcule seu IMC</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nosso Contato <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="http://www.facebook.com/adolfo.pesoti" target="_blank"><span class="fa fa-facebook-square padding-right"></span>Adolfo</a></li>
            <li><a href="http://www.facebook.com/kako.ferrare" target="_blank"><span class="fa fa-facebook-square padding-right"></span>Kako</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>