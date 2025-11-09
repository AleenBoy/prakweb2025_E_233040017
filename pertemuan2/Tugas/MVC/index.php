<?php
require_once 'controller/siswaController.php';
require_once 'view/siswaView.php';

$controller = new siswaController();
$view = new siswaView();

// Tampilkan semua data awal
$data = $controller->tampilkanData();
$view->render($data);

// Contoh operasi CRUD
echo "<hr>";
$view->tampilPesan($controller->tambah("Eka", "XI RPL 4"));
$view->tampilPesan($controller->ubah(2, "Dina Putri", "XI RPL 5"));
$view->tampilPesan($controller->hapus(1));

echo "<hr><h3>Data Setelah Operasi CRUD (Simulasi)</h3>";
$dataBaru = $controller->tampilkanData();
$view->render($dataBaru);
?>
