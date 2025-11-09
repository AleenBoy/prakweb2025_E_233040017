<?php
class siswaModel {
    private $data = [
        ['id' => 1, 'nama' => 'Rafi', 'kelas' => 'XI RPL 1'],
        ['id' => 2, 'nama' => 'Dina', 'kelas' => 'XI RPL 2'],
        ['id' => 3, 'nama' => 'Luthfi', 'kelas' => 'XI RPL 3']
    ];

    public function getSemuaSiswa() {
        return $this->data;
    }

    public function getSiswaById($id) {
        foreach ($this->data as $s) {
            if ($s['id'] == $id) {
                return $s;
            }
        }
        return null;
    }

    public function tambahSiswa($nama, $kelas) {
        $idBaru = count($this->data) + 1;
        $this->data[] = ['id' => $idBaru, 'nama' => $nama, 'kelas' => $kelas];
        return "Data siswa baru berhasil ditambahkan (simulasi).";
    }

    public function ubahSiswa($id, $nama, $kelas) {
        foreach ($this->data as &$s) {
            if ($s['id'] == $id) {
                $s['nama'] = $nama;
                $s['kelas'] = $kelas;
                return "Data siswa berhasil diubah (simulasi).";
            }
        }
        return "Data siswa tidak ditemukan.";
    }

    public function hapusSiswa($id) {
        foreach ($this->data as $key => $s) {
            if ($s['id'] == $id) {
                unset($this->data[$key]);
                return "Data siswa berhasil dihapus (simulasi).";
            }
        }
        return "Data siswa tidak ditemukan.";
    }
}
?>
