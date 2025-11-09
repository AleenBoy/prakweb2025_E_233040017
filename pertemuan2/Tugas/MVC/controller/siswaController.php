<?php
require_once __DIR__ . '/../model/siswaModel.php';

class siswaController {
    private $model;

    public function __construct() {
        $this->model = new siswaModel();
    }

    public function tampilkanData() {
        return $this->model->getSemuaSiswa();
    }

    public function detail($id) {
        return $this->model->getSiswaById($id);
    }

    public function tambah($nama, $kelas) {
        return $this->model->tambahSiswa($nama, $kelas);
    }

    public function ubah($id, $nama, $kelas) {
        return $this->model->ubahSiswa($id, $nama, $kelas);
    }

    public function hapus($id) {
        return $this->model->hapusSiswa($id);
    }
}
?>
