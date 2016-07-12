<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ImcNavBar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a class="navbar-brand" href="index.php?page=about">Projeto IMC</a>
    </div>
    <div class="collapse navbar-collapse" id="ImcNavBar">
      <ul class="nav navbar-nav">
      <li class=<?php echo isset($_GET['page']) ? $_GET['page'] == 'about' ? 'active': '' : 'active' ?>><a href="index.php?page=about">O que é IMC <span class="sr-only">(current)</span></a></li>
        <li class=<?php echo isset($_GET['page']) ? $_GET['page'] == 'calculo' ? 'active': '' : '' ?>><a href="index.php?page=calculo">Calcule seu IMC</a></li>
</ul>
    <!-- Collect the nav links, forms, and other content for toggling -->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nosso Contato <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://www.facebook.com/adolfo.pesoti" target="_blank">Adolfo</a></li>
            <li><a href="http://www.facebook.com/kako.ferrare" target="_blank">Kako</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>