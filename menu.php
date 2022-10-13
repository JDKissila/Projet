<?php
	if (isset($_SESSION['login']))
	{	

?>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    <a class="navbar-brand" href="#">
      <img src="https://www.fabert.com/uploads/logo/m0ffwovpywngzqemtlhibhels.jpg" height="85" alt="Logo"/></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#team">
            <?php echo $_SESSION['login']; ?>
          </a></li>
          <li class="dropdown"><a href="#"><span>Note de frais</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Listage</a></li>
              <li><a href="#">Modification</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <?php 
	}
	
	
	?>
