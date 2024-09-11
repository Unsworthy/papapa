<?php 
$title = "HOME | DASHBOARD";
include('bahan/head.php');
include("backend/data.php");

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
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Umur</th>
                                <th>keterangan</th>
                                <th>action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($students as $student) : ?> 
                                <tr>
                                    <td><?= $number++ ?></td>
                                    <td> <?= $student['name'] ?></td>
                                    <td> <?= $student['class'] ?></td>
                                    <td> <?= $student['major'] ?></td>
                                    <td> <?= $student['age'] ?></td>
                                    <td> <?php 
                                    if($student['keterangan'] == 'Hadir') {
                                        echo '<span class="bg-success p-2 rounded text-light">HADIR</span>';
                                    }else if($student['keterangan'] == 'Sakit') {
                                        echo '<span class="bg-primary p-2 rounded text-light">SAKIT</span>';
                                    }else if($student['keterangan'] == 'Alfa') {
                                        echo '<span class="bg-danger p-2 rounded text-light">ALFA</span>';
                                    }else {
                                        echo "<span class='bg-info p-2 rounded text-light'>" . $student['keterangan']. "</span>";
                                    }
                                    ?> </td>

                                    <td>
                                        <div class="btn-box">
                                            <a href="/siswa-df/detail.php?id=<?=$student['id'] ?>"><i class="fa-light fa-eye"></i></a>
                                            <a href="/siswa-df/update-siswa.php?id=<?=$student['id'] ?>"><i class="fa-light fa-pen"></i></a>
                                            <a href="/siswa-df/backend/delete.php?id=<?=$student['id'] ?>"><i class="fa-light fa-trash"></i></a>
                                        </div>
                                    </td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                </div>
                </td>
                </tr>
                </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
           
    </div>
</div>