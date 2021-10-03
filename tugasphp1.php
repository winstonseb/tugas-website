<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="php" href="index2.php">
</head>
<body>
    <div class="contoh1">
    <H1>Contoh 1</H1>
    <?php     echo "Halo Apa Kabar"."<br>";
                print "halo apa kabar";

    ?></div>
    <div class="contoh2">
    <h1>Contoh 2</h1>
    <?php
            $a = 3;
            $b = 7;
            $a += 5;
            $b = ($c = 11) + 3;
            echo "Nilai Variabel A Adalah = $a";
            echo "<br>";
            echo "Nilai Variabel B Adalah = $b";
            echo "<br>";
            echo "Nilai Variabel C Adalah = $c";
            echo "<br>";

    ?></div>
    <div class="contoh3">
    <h1>Contoh 3</h1>
    <?php
            $a = 3;
            $b = 7;
            print "Nilai variabel A adalah = $a";
            echo "<br>";
            print "Nilai variabel B adalah = $b";
            echo "<br>";
            echo "$a * $b = ";
            print $a * $b;
            echo "<br>";
            echo "<br>";
            echo "$a : $b = ";
            print $a / $b;
            echo "<br>";
            echo "<br>";
            echo "$a % $b = ";
            print $a % $b;
    ?></div>
    <h1>Contoh 4</h1>
    <?php
            $nilai = 20;
            echo "Nilai anda adalah $nilai";
            echo "<br>";
            $nama = "Winston Sebastian";
            if($nilai >= 80){
                echo $nama." Memperoleh Nilai A";
            }
            elseif($nilai >= 70){
                echo $nama." Memperoleh Nilai B";
            }
            elseif($nilai >= 60){
                echo $nama." Memperoleh Nilai C";
            }
            else{
                echo $nama." Memperoleh Nilai D";
            }

    ?>
    <br>
    Tanggal lahir : 
    <select name = tanggal>
        <option value= 0 selected> Tanggal
            <?php
                for($i = 1; $i < 31; $i++)
                echo "<option value = $i > $i";


            ?>
        </option></select><br>
        <?php
        $i = 1;
        do
        {
            echo "$i <br>";
            $i++;
        }   while($i <= 10);
        ?>
</body>
</html>