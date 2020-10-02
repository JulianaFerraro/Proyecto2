<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F2AEE3;">
  <a class="navbar-brand" href="#"><img src="/assets/img/Logo.png" alt="Logo" height="52"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-center">
      <li class="nav-item active">
        <a class="nav-link" style="padding-left: 8em;" href="#">INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          COLECCION
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">HOMBRE</a>
          <a class="dropdown-item" href="#">MUJER</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">NIÑOS</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">CONTACTO</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
      <div cold cold-sm4>
      <ul class="navbar-nav mr-right">
          <i class="fa fa-shopping-cart" style="padding-left: 17em;"></i>
          <li class="nav-item active">
          <i class="fa fa-user" style="padding-left: 1em;"></i><span class="component-target-text">
          <a href= " {{url ('login') }} "> Ingresar</a></span></a>
          <a href= " {{url ('register')}} "> Registrar</a></span></a>
          </li>
      </ul>
      </div>
    </form>
  </div>
</nav>