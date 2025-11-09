<?php
class siswaView {
    public function render($dataSiswa) {
        echo "<h2>Daftar Siswa</h2>";
        echo "<table border='1' cellpadding='6'>
                <tr><th>ID</th><th>Nama</th><th>Kelas</th></tr>";
        foreach ($dataSiswa as $s) {
            echo "<tr>
                    <td>{$s['id']}</td>
                    <td>{$s['nama']}</td>
                    <td>{$s['kelas']}</td>
                  </tr>";
        }
        echo "</table><br>";
    }

    public function tampilPesan($pesan) {
        echo "<p><b>{$pesan}</b></p>";
    }
}
?>
