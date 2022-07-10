<html>
<head>
	<title>kalkulator sederhana</title>
<link rel="stylesheet" type="text/css" href="kalkulator-style.css">
</head>
     <body background="ab.jpg">
     	<center><maquee behavior="alternate"scrollmount="30><font size="35" face="algarian">HAPPY NGODING</font></marquee></center>
     		<?php if (isset($_POST['hitung'])){
     			$bi11 = $_POST['bi11'];
     			$bi12 = $_POST['bil2'];
     			$operasi =$_POST['operasi'];
     			switch ($operasi) {
     				case 'tambah':
     				   $hasil =$bi11+bi12;
     				break;
     				   case'kurang':
     				   $hasil =$bi11-bi12;
     				break;
     				   case 'kali':
     				   $hasil = $bi11*$bi12;
     				break;
     				case 'bagi':
     				    $hasil=$bi11/bi12;
     				break;
     			}
     		}
     	?>
     	        <div class="kalkulator">
     	        <h2 class="judul">kalkulator sederhana</h2>
     	        <form method="post" action="kalkulator.php">
     	        <input type="text" name="bi11 class="bil" autocomplete="off" placeholder="bilangan pertama">
     	        <input type="text" name="bi11 class="bi2" autocomplete="off" placeholder="bilangan kedua">

                    <select class="opt " name="operasi"</select>
     	        	<option value="tambah">+</option>
     	        	<option value="kurang">-</option>
     	        	<option value="kali">x</option>
     	        	<option value="bagi">/</option>


     	        </select>
<input type="submit" name="hitung" value="hitung" class="tombol">
</form>
<?php if (isset ($_POST['hitung'])){?>
                <input type="text" name="<?php" echo $hasil;?>"class="bi11">

                <?php }
                else {?>
                <input type="text"value="30 class="bi1">
                <?php }
                ?>
                </div>
                </body>
                </html 	        