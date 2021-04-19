<div class="row">
	<div class="col-md-12 mt-1">
        <!-------awal menu----------->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Delakasa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?hal=home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?hal=dataPegawai">Pegawai</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?hal=aboutus">About Us</a>
      </li>
</ul>
      <?php
      $member = $_SESSION['MEMBER'];
      if(!isset($member)){
      ?>
       <div class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php?hal=formLogin">Login</a>
        </li>
      </div>
      <?php
      }else{
      ?>
      <div class="navbar-nav ml-auto">
      <div class="nav-item dropdown">
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><i class="fa fa-user" aria-hidden="true"></i>
          <?= $member['fullname']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php" onclick="runPopup()">Logout</a>
        </div>
        </li>
      <?php  
      }
      ?> 
  </div>
</nav>
        <!--------akhir menu---------->
	</div>
</div>