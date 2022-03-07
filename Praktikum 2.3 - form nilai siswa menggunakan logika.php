<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai Akhir Siswa</title>
</head>
<body>
<div class="m-5 border border-primary p-4 rounded">
            <form method="POST" autocomplete="off" action="siswa_grade.php">
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label" >Nama Lengkap</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-book-o"></i>
                        </div>
                        </div> 
                        <input id="text" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="select" name="matkul" required="required" class="custom-select">
                        <option value="">Pilih Matkul</option>
                        <option value="Bahasa Inggris">Pemrograman Web</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="PPKn">PPkN</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text1" name="nilai_uts" placeholder="Masukan Nilai UTS Anda" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text2" name="nilai_uas" placeholder="Masukan Nilai UAS" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="text3" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktikum" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
            <!-- Cetak Variable -->
        <div class="m-5 border border-primary p-4 rounded">
            
            
            
            <?php
                error_reporting(0);
                $nama_siswa = $_POST['nama'];
                $mata_kuliah = $_POST['matkul'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $tugas = $_POST['nilai_tugas'];
                $total = $uts + $uas + $tugas;
                $rata_rata = $total/3;

                // Cetak Data

                if ($rata_rata <= 55){
                    $lulus = "Maaf anda tidak lulus!";
                }else{
                    $lulus = "Selamat anda lulus!";
                }
                if ($rata_rata >= 85){
                    $grade = "A";
                }
                elseif ($rata_rata >= 70){
                    $grade = "B";
                }
                elseif ($rata_rata >= 56){
                    $grade = "C";
                }
                elseif ($rata_rata >= 36){
                    $grade = "D";
                }
                elseif ($rata_rata >= 10){
                    $grade = "E";
                }else{
                    $grade = "Tidak ada nilai";
                } 

                // Submit
                if(isset($_POST['submit'])){
                    echo "Nama Siswa = ".$nama_siswa;
                    echo "<br>Mata Kuliah = ".$mata_kuliah;
                    echo "<br>Nilai UTS = ".$uts;
                    echo "<br>Nilai UAS = ".$uas;
                    echo "<br>Nilai Tugas = ".$tugas;
                    echo "<br>Rata-Rata = ".$rata_rata;
                    echo "<br>Keterangan = ".$lulus;
                    echo "<br>Kategori = ".$grade;
                }else{
                        echo '<div class="alert alert-primary" role="alert"> Silahkan Isi Form Diatas Untuk Menampilkan Nilai , Grade dan Predikat </div>';
                }
            
            ?>
        
    </div>
</body>
</html>