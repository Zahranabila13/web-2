<form class="form-horizontal" action="nilai_mahasiswa.php" method="POST">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class='container'>
        <div class='border p-3 bg-light'>
            <h5 class= 'mb-3 h6'>Sistem Penilaian Mahasiswa</h5>
            <hr/>
            <h6 class= 'mb-4 h4'>Form Nilai Siswa</h6>
            
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                        </div> 
                        <input id="nama" name="nama" placeholder="*Nama Lengkap" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="dasar dasar pemrograman">Dasar Dasar Pemrograman</option>
                        <option value="basis data 1">Basis Data 1</option>
                        <option value="pemrograman web">Pemrograman Web</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="*Nilai UTS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="*Nilai UAS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="*Nilai Tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary" value='proses'>Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
