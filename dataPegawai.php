<?php
require_once 'models/Pegawai.php';
//ciptakan objek dari class pegawai
$obj = new Pegawai();
//panggil method & tampilkan data
$rs = $obj->dataPegawai();
?>

<h3 class="text-center" style="margin-bottom:10px;">Data Pegawai</h3>
<?php
if (isset($member)) {
?>
    <a href="index.php?hal=formPegawai" class="btn btn-primary" style="margin-bottom: 10px;"><i class="fas fa-plus-circle"></i> Add File</a>
<?php } ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Agama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Foto</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($rs as $pegwa) {
        ?>
            <tr class="table-active">

                <td><?= $no; ?></td>
                <td><?= $pegwa['nip']; ?></td>
                <td><?= $pegwa['nama']; ?></td>
                <td><?= $pegwa['email']; ?></td>
                <td><?= $pegwa['agama']; ?></td>
                <td><?= $pegwa['pekerjaan']; ?></td>
                <td><?= $pegwa['foto']; ?></td>
                <td>
                    <form method="POST" action="controllers/pegawaiController.php">
                        <a href="index.php?hal=detailPegawai&id=<?= $pegwa['id']; ?>" class="btn btn-info" title="klik untuk melihat secara detail"><i class="fas fa-info-circle"></i></a>
                        <?php
                        $role = $member['role'];
                        if (isset($member)) {
                        ?>
                            <a href="index.php?hal=formEditPegawai&id=<?= $pegwa['id']; ?>" class="btn btn-warning" title="klik untuk mengedit data"><i class="fas fa-user-edit"></i></a>
                            <?php
                            if ($role != 'staff') {
                            ?>
                                <button name="proses" value="hapus" onclick="return confirm('Data akan terhapus, Anda yakin?')" class="btn btn-danger" title="klik untuk menghapus data"><i class="fas fa-trash-alt"></i></button>
                            <?php } ?>
                            <input type="hidden" name="idx" value="<?= $pegwa['id']; ?>">
                        <?php } ?>
                    </form>
                </td>
            </tr>
        <?php
            $no++;
        }
        ?>

    </tbody>
</table>