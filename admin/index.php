<?php
//memproses file atas
session_start();
include_once 'models/Produk.php';
include_once 'models/Jenis_Produk.php';
include_once 'models/Pelanggan.php';
include_once 'models/Pesanan.php';
include_once 'models/Kartu.php';
include_once 'models/Member.php';
include_once 'koneksi.php';

$sesi = $_SESSION['MEMBER'];
if (isset($sesi)) {

    include_once 'top.php';
    //memproses file menu
    include_once 'menu.php';
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">

                <?php
                $url = $_GET['url'];
                if ($url == 'dashboard') {
                    include_once 'dashboard.php';
                } else if (!empty($url)) {
                    include_once '' . $url . '.php';
                } else {
                    'dashboard.php';
                }

                ?>
            </div>
        </main>
    </div>

<?php
    //memproses file bawah
    include_once 'bottom.php';
} else {
    echo '<script>alert("anda tidak boleh masuk");history.back();</script>';
}
?>