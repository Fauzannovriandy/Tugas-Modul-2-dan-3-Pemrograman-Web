<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rumah Makan Jaya Makmur</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<style> 
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #29d4ff;
  border: solid 1px #000000;
}

#panel {
  padding: 50px;
  display: none;
}
</style>
</head>

<div id="flip">Klik Untuk Mengetahui Informasi Singkat Tentang Rumah Makan Jaya Makmur</div>
<div id="panel">Selamat Datang Di Rumah Makan Jaya Makmur
    Kami menjual berbagai menu makanan yang dijamin LEZAT dan NIKMAT. Kami beralamat di Jalan Sidosermo nomor. 24 Surabaya. Toko ini berdiri sejak tahun 2002, kami sudah memiliki berbagai cabang di Surabaya, Silahkan pilih dan nikmati hasil masakan kami. TERIMA KASIH.
</div>

<body>
    <?php
            //decision
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $ayamgoreng = $_POST['ayamgoreng'];
                $bebekgoreng = $_POST['bebekgoreng'];
                $ayambakar = $_POST['ayambakar'];
                $total = $_POST['total'];



                echo "<div class="."container".">";
                echo "<p class="."nota".">Nota pembelian:</p><br>";
                
        
        
            if (strlen($ayamgoreng) !== 0) {
                echo "<p class="."nota".">".$ayamgoreng." Ayam Goreng</p><br>";
            }
            if (strlen($ayambakar) !== 0) {
                echo "<p class="."nota".">".$ayambakar." Ayam Bakar</p><br>";
            }
            if (strlen($bebekgoreng) !== 0) {
                echo "<p class="."nota".">".$bebekgoreng." Bebek Goreng</p><br>";
            }
            if (strlen($total) !== 0) {
                function rupiah($angka){
	
                $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                return $hasil_rupiah;
            
            }
                echo "<p class="."nota".">Total Harga: ".rupiah($total)."</p>";
            }
            }
        
    ?>
    </div>
    <form name="form" method="post">
        <table>
            <tr>
                <th colspan="2">PROGRAM PENJUALAN MAKANAN</th>
            </tr>
            <tr>
                <th>NAMA MAKANAN</th>
                <th>JUMLAH BELI</th>
            </tr>
            <tr>
                <td>
                    <label> <input type="checkbox" class="ayamgoreng" /> </label>Ayam Goreng
                </td>
                <td><input type="text" class="jumlahBeliayamgoreng" name="ayamgoreng"/></td>
            </tr>
            <tr>
                <td>
                    <label> <input type="checkbox" class="ayambakar" /> </label>Ayam Bakar
                </td>
                <td><input type="text" class="jumlahBeliayambakar" name="ayambakar"/></td>
            </tr>
            <tr>
                <td>
                    <label> <input type="checkbox" class="bebekgoreng" /> </label>Bebek Goreng
                </td>
                <td><input type="text" class="jumlahBelibebekgoreng" name="bebekgoreng"/></td>
            </tr>
            <tr>
                <td>
                    <label> TOTAL HARGA </label>
                </td>
                <td><input type="text" id="total" name="total" readonly="readonly"/></td>
            </tr>
            <tr>
                
                <td><input type="button" value="Hitung" /></td>
                <td><input type="submit" value="Bayar" /></td>
            </tr>
        </table>
    </form>
    
    <p>
        <?php
            //array
            $menu = array(
                (object) [
                'nama' => 'Ayam Goreng',
                'harga' => 15000,
                'kode' => 'ayamgoreng'
            ],
                (object) [
                'nama' => 'Ayam Bakar',
                'harga' => 17000,
                'kode' => 'ayambakar'
            ],
                (object) [
                'nama' => 'Bebek Goreng',
                'harga' => 20000,
                'kode' => 'bebekgoreng'
            ],
                );

            //looping
            foreach ($menu as $value) {

                echo 'Harga 1 '.$value->nama.' = '.$value->harga.' <br />';
                
            }
        ?>
    </p>

    <script src="ehem.js"></script>

</body>
</html>