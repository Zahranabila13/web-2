<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $nilai_akhir = 0;
    $status = '';
    $grade = '';
    $predikat = '';

    $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

    if ($nilai_akhir > 55) {
        $status = 'Lulus';
    } else {
        $status = 'Tidak Lulus';
    }

    if ($nilai_akhir >= 0 && $nilai_akhir <= 35) {
        $grade = 'E';
    } elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
        $grade = 'E';
    } elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
        $grade = 'E';
    } elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
        $grade = 'E';
    } elseif ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        $grade = 'E';
    } else {
        $grade = 'I';
    }
    
    switch ($grade) {
        case 'E':
            $predikat = 'Sangat Kurang';
            break;
        case 'D':
            $predikat = 'Kurang';
            break;
        case 'C':
            $predikat = 'Cukup';
            break;
        case 'B':
            $predikat = 'Memuaskan';
            break;
        case 'A':
            $predikat = 'Sangat Memuaskan';
            break;
        default:
            $predikat = 'Tidak Ada';
            break;
    }    

    echo "<div class='container'>";
    echo "<h3>Hasil Penilaian</h3>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Mata Kuliah:</strong> $matkul</p>";
    echo "<p><strong>Nilai UTS:</strong> $nilai_uts</p>";
    echo "<p><strong>Nilai UAS:</strong> $nilai_uas</p>";
    echo "<p><strong>Nilai Tugas:</strong> $nilai_tugas</p>";
    echo "<p><strong>Status:</strong> $status</p>";
    echo "<p><strong>Grade:</strong> $grade</p>";
    echo "<p><strong>Predikat:</strong> $predikat</p>";
    echo "<p><strong>Nilai Akhir:</strong> $nilai_akhir</p>";
    echo "</div>";
}
?>
