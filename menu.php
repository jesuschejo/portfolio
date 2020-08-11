<nav class="navbar navbar-expand-sm">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon fa fa-bars"></span>
  </button>
  <div class="collapse navbar-collapse" id="navMenu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php echo $pg =="inicio"? "active": ""?>" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $pg =="sobre-mi"? "active": ""?>" href="sobre-mi.php">SOBRE MI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $pg =="proyectos"? "active": ""?>" href="proyecto.php">PROYECTOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $pg =="contacto"? "active": ""?>" href="contacto.php">CONTACTO</a>
      </li>
    </ul>
  </div>
</nav>