<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container card">
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Sistem Penilaian</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Form Nilai Siswa</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                        <div class="col-5">
                        <input id="nama" name="nama" placeholder="Masukan nama lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                        <div class="col-5">
                        <select id="matkul" name="matkul" class="custom-select">
                            <option value="Dasar - Dasar Pemrograman">Dasar - Dasar Pemrograman</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                            <option value="Basis Data">Basis Data</option>
                        </select>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-3">
                        <input id="nilai_uts" name="nilai_uts" placeholder="Masukan nilai uts" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-3">
                        <input id="nilai_uas" name="nilai_uas" placeholder="Masukan nilai uas" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                        <div class="col-3">
                        <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan nilai tugas" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
                <?php
                    include_once 'libfungsi.php';
                    $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
                    $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                    $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                    $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                    $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

                    echo "Nama : $nama";
                    echo "<br/>Mata Kuliah : $mata_kuliah";
                    echo "<br/>Nilai UTS : $nilai_uts";
                    echo "<br/>Nilai UAS : $nilai_uas";
                    echo "<br/>Nilai Tugas : $nilai_tugas";
                    echo "<br/> Nilai Akhir : ", persentase($nilai_uts, $nilai_uas, $nilai_tugas);

                    $nilai_akhir = persentase($nilai_uts, $nilai_uas, $nilai_tugas);
                    $grade_nilai = grade_nilai($nilai_akhir);

                    echo "<br/>Nilai Akhir : $nilai_akhir";
                    echo "<br/>Status : ", kelulusan($nilai_akhir);
                    echo "<br/>Grade Nilai : ", $grade_nilai;
                    echo "<br/>Predikat Nilia : ", predikat_nilai($grade_nilai);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Develop by Mahasiswa STT NF</p>
            </div>
        </div>
    </div>
</body>
</html>