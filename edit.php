<?php
$title = "ADD | STUDENT";
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
                <h3 class="panel-title">Add Students</h3>
                <form method='POST' action="/siswa-df/backend/create.php">
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="NAMA" name="name">
                    </div>
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-home"></i></span>
                        <input type="text" class="form-control" placeholder="KELAS" name="class">
                    </div>
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-building"></i></span>
                        <input type="text" class="form-control" placeholder="JURUSAN" name="major">
                    </div>
                    <div class="input-group mb-20">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input type="text" class="form-control rounded-end" placeholder="UMUR" name="age">
                    </div>
                    <div class="input-group mb-20">
                        <span class="input-group-text"><i class="fa-regular fa-note"></i></span>
                        <select class="form-control rounded-end" name="keterangan" >
                            <option value="">Pilih Keterangan</option>
                            <option value="IZIN">IZIN</option>
                            <option value="SAKIT">SAKIT</option>
                            <option value="ALFA">ALFA</option>
                            <option value="HADIR">HADIR</option>
                        </select>
                    </div>
                        <button class="btn btn-primary w-100 login-btn" type="submit">add</button>
             
                </form>
</div>
