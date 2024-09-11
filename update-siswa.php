<?php
$title = "UPDATE | STUDENT";
 include ('bahan/head.php') ;
 include ("backend/detail.php")

 ?>

    <!-- main content start -->
    <div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="assets/images/logo-black.png" alt="Logo">
                </div>
                <a href="/dashboard.php"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <h3 class="panel-title">Update Students</h3>
                <form method='POST' action="/siswa-df/backend/update.php">
                    <?php foreach ($student as $detail) : ?>
                      
                        <input type="hidden" name="id" value="<?= $detail['id'] ?>" />
                       
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-home"></i></span>
                        <input
                         type="text"
                          class="form-control"
                           placeholder="Name"
                            name="name"
                            value="<?= $detail['name'] ?>">
                    </div>
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-building"></i></span>
                        <input
                         type="text"
                          class="form-control"
                           placeholder="Umur"
                            name="age"
                            value="<?= $detail['age'] ?>">
                    </div>
                    <div class="input-group mb-20">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input
                         type="text"
                          class="form-control"
                           placeholder="Major"
                            name="major"
                            value="<?= $detail['major'] ?>">
                    </div>
                    <div class="input-group mb-20">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input
                         type="text"
                          class="form-control"
                           placeholder="Class"
                            name="class"
                            value="<?= $detail['class'] ?>">
                    </div>
                    <div class="input-group mb-20">
                        <span class="input-group-text"><i class="fa-regular fa-note"></i></span>
                        <select class="form-control " name="keterangan" >
                            <option value="">Pilih Keterangan</option>
                            <option value="IZIN" <?= $detail['keterangan'] == "IZIN" ? 'selected' : '' ?>>IZIN</option>
                            <option value="SAKIT"  <?= $detail['keterangan'] == "SAKIT" ? 'selected' : '' ?>>SAKIT</option>
                            <option value="ALFA" <?= $detail['keterangan'] == "AlFA" ? 'selected' : '' ?>>ALFA</option>
                            <option value="HADIR" <?= $detail['keterangan'] == "HADIR" ? 'selected' : '' ?>>HADIR</option>
                        </select>
                    </div>
                    <?php endforeach; ?>
                        <button class="btn btn-primary w-100 login-btn" type="submit">add</button>
             
                </form>
</div>
                    </div>
