<?php
require_once 'models/Pegawai.php';
$ar_agama = ['Islam','Kristen','Katolik','Hindu','Budha','Konghucu'];
$obj = new Pegawai();
$rs = $obj->dataDivisi();
?>

<div class="row ">
  <div class="col-md-12">
  <nav class="card mt-0 mb-2 col-md-12" > 
    <h3 class="text-center mt-1" >Form Pegawai</h3>
    <form method="POST" class="mt-4" action="controllers/pegawaiController.php">
  <div class="form-group mt-3 row">
    <label for="nip" class="col-4 col-form-label">NIP</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nip" name="nip" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pegawai</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Kondisi</label> 
    <div class="col-8">
    <?php
    $no = 0;
    foreach($ar_agama as $agama){
    ?>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="agama" id="agama_<?= $no ?>" type="radio" class="custom-control-input" value="<?= $agama?>" required="required"> 
        <label for="agama_<?= $no ?>" class="custom-control-label"><?= $agama?></label>
      </div>
    <?php 
    $no++;
    } ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="Divisi" class="col-4 col-form-label">Divisi</label> 
    <div class="col-8">
      <select id="divisi" name="divisi" class="custom-select" required="required">
        <option value="">-- Pilih Divisi --</option>
        <?php
        foreach($rs as $j){
        ?>
            <option value="<?= $j['id'] ?>"> <?= $j['nama'] ?> </option>
        <?php } ?>    
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="foto" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="foto" name="foto" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
        </nav>
        </div>
        </div>
</form>