<?php 
$title = "DETAIL | DAFTAR SISWA";
include('bahan/head.php');
include("backend/detail.php");

$number = 1;
?>

<div class="main-content">
    <div class="dashboard-breadcrumb mb-25">
        <h2>Data Siswa</h2>
        <div class="input-group dashboard-filter">
            <a class="btn btn-success" href="/siswa-df/add.php"><i class="fa-solid fa-plus"></i>Tambah</a>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xxl-12">
            <div class="panel">
                <div class="panel-body">
                    <table class="table table-dashed recent-order-table" id="myTable">
                        <thead>
                            <?php foreach ($student as $detail) : ?> 
                            <tr>
                                <th>Nama</th>
                                <th><?= $detail['name']?></th>
                             

                            </tr>
                     
                            <tr>
                                
                                <th>Kelas</th>
                                <th><?= $detail['class']?></th>
                              

                            </tr>
                     
                            <tr>
                             
                                <th>Jurusan</th>
                                <th><?= $detail['major']?></th>
                                

                            </tr>
                     
                            <tr>
                                
                                <th>Umur</th>
                                <th><?= $detail['age']?></th>
                          

                            </tr>
                            <tr>
                                
                                <th>Keterangan</th>
                                <th><?= $detail['keterangan']?></th>
                          

                            </tr>
                     
                                
                        <?php endforeach ?>
                        <tr>
                </div>
            
          
                <div class="table-bottom-control"></div>
            </div>
        </div>
           
    </div>
</div>