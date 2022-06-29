<!DOCTYPE html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <title>TUGAS KALKULATOR </title>
    

    
  </head>
  <body> 
            <?php
            if(isset($_POST['operasi'])){
              $isi1= $_POST['isi1'];
              $isi2= $_POST['isi2'];

              $operasi= $_POST['operasi'];

              if($operasi=="+")
                    $hasil = $isi1+$isi2;

              else if($operasi=="-")
                    $hasil = $isi1-$isi2;

              else if($operasi=="x")
                  $hasil = $isi1*$isi2;
              else if($operasi=="/")
                  $hasil = $isi1/$isi2;
            }?>


  <div class="isi">

    <h1 class="judul">KALKULATOR</h1>

   <p class="sub">VSGA . BPTIK . KOMINFO . JWD3-G4</p>

    <form action=""  method="post">


      <label for="isi1" class="sub1">Masukan Angka</label><br>

      <input type="text" name="isi1" class="angka" value="" placeholder="Masukan Angka"/>

      <label for="isi2" class="sub1">Masukan Angka</label><br>

      <input type="text" name="isi2" class="angka" value="" placeholder="Masukan Angka"/>
      
    <div class="but">

      <input type="submit" class="tombol" name="operasi" value="+">

      <input type="submit" class="tombol" name="operasi" value="-">

      <input type="submit" class="tombol" name="operasi" value="x">

      <input type="submit" class="tombol" name="operasi" value="/">
    </div>
      


    </form>

	<?php if(isset($_POST['operasi'])){ ?>

       <label for="" class="sub1">HASIL</label><br>
			<input type="text" value="<?php echo $hasil; ?>" class="angka">

		<?php }else{ ?>

      <label for="" class="sub1">HASIL</label><br>
			<input type="text" value="0" class="angka">

		<?php } ?>	

  </div>
  </body>
</html>