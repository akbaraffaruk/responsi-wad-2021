<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>


<body>
    <div class="container">


        <div class="row">
            <div class="col">
                <!-- Operator Aritmatika -->
                <h1>Aritmatika</h1>
                <h3>Penjumlahan</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 2;</p>
                <p> $total = $_variabel1 + $variabel2;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;

                $total = $_variabel1 + $variabel2;

                echo "total = " . $total;
                ?>
                <h3>Pengurangan</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 2;</p>
                <p> $total = $_variabel1 - $variabel2;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;

                $total = $_variabel1 - $variabel2;

                echo "total = " . $total;
                ?>
                <h3>Pembagian</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 2;</p>
                <p> $total = $_variabel1 / $variabel2;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;

                $total = $_variabel1 / $variabel2;

                echo "total = " . $total;
                ?>
                <h3>Perkalian</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 2;</p>
                <p> $total = $_variabel1 * $variabel2;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;

                $total = $_variabel1 * $variabel2;

                echo "total = " . $total;
                ?>
                <h3>Pemangkatan</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 2;</p>
                <p> $total = $_variabel1 ** $variabel2;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;

                $total = $_variabel1 ** $variabel2;

                echo "total = " . $total;
                ?>
                <h3>Sisa Bagi</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 3;</p>
                <p> $total = $_variabel1 % $variabel2;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 3;

                $total = $_variabel1 % $variabel2;

                echo "total = " . $total;
                ?>
            </div>
            <div class="col">
                <!-- Operator Penugasan -->
                <h1>Penugasan</h1>
                <h3>(=)</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 2;</p>
                <p> $total = $_variabel1 = $variabel2;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;

                $total = $_variabel1 = $variabel2;

                echo "total = " . $total;
                ?>
                <h3>(+=)</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 2;</p>
                <p> $total = $_variabel1 += $variabel2;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;

                $total = $_variabel1 += $variabel2;

                echo "total = " . $total;
                ?>
                <h3>(-=)</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 2;</p>
                <p> $total = $_variabel1 -= $variabel2;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;

                $total = $_variabel1 -= $variabel2;

                echo "total = " . $total;
                ?>
                <h3>(*=)</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 2;</p>
                <p> $total = $_variabel1 *= $variabel2;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;

                $total = $_variabel1 *= $variabel2;

                echo "total = " . $total;
                ?>
                <h3>(/=)</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 2;</p>
                <p> $total = $_variabel1 /= $variabel2;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;

                $total = $_variabel1 /= $variabel2;

                echo "total = " . $total;
                ?>
                <h3>(%=)</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 3;</p>
                <p> $total = $_variabel1 %= $variabel2;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 3;

                $total = $_variabel1 %= $variabel2;

                echo "total = " . $total;
                ?>
                <h3>(.=)</h3>
                <p> $_variabel1 = 'ayam';</p>
                <p> $variabel2 = ' goreng';</p>
                <p> $total = $_variabel1 .= $variabel2;</p>

                <?php
                $_variabel1 = 'ayam';
                $variabel2 = ' goreng';

                $total = $_variabel1 .= $variabel2;

                echo "total = " . $total;
                ?>
            </div>
            <div class="col">
                <!-- Operator Increment & Decrement -->
                <h1>Increment & Decrement</h1>
                <h3>Increament</h3>
                <p> $_variabel1 = 10;</p>
                <p> $_variabel1++;</p>
                <p> $total = $_variabel1</p>

                <?php
                $_variabel1 = 10;
                $_variabel1++;
                $total = $_variabel1;

              
                echo "total = " . $total;
                ?>
                <h3>Decreament</h3>
                <p> $_variabel1 = 10;</p>
                <p> $_variabel1--;</p>
                <p> $total = $_variabel1</p>

                <?php
                $_variabel1 = 10;
                $_variabel1--;
                $total = $_variabel1;

                echo "total = " . $total;
                ?>


            </div>
            <div class="col">
                <!-- Operator Relasi atau Pembanding -->
                <h1>Relasi atau Pembanding</h1>
                <h3>(==)</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 7;</p>
                <p> echo $_variabel1==$variabel2 ? 'true' : 'false';</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;
                echo  $_variabel1 == $variabel2 ? 'hasil: true' : 'hasil: false';
                ?>
                <h3>(!=)</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 7;</p>
                <p> echo $_variabel1!=$variabel2 ? 'true' : 'false';</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;
                echo  $_variabel1 != $variabel2 ? 'hasil: true' : 'hasil: false';
                ?>

                <h3>(<=)</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 7;</p>
                <p> echo $_variabel1<=$variabel2 ? 'true' : 'false' ;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;
                echo  $_variabel1 <= $variabel2 ? 'hasil: true' : 'hasil: false';
                ?>
                <h3>(>=)</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 7;</p>
                <p> echo $_variabel1>=$variabel2 ? 'true' : 'false' ;</p>

                <?php
                $_variabel1 = 10;
                $variabel2 = 2;
                echo  $_variabel1 >= $variabel2 ? 'hasil: true' : 'hasil: false';
                ?>

            </div>
            <div class="col">
                <!-- Operator Logika -->
                <h1>Logika</h1>
                <h3>(&&)</h3>
                <p> $_variabel1 = 10;</p>
                <p> $variabel2 = 7;</p>
                <p> echo $_variabel1!=$variabel2 && $_variabel1 < 5 ? 'true' : 'false' ;</p>

                        <?php
                        $_variabel1 = 10;
                        $variabel2 = 2;
                        echo  $_variabel1 != $variabel2 && $_variabel1 < 5 ? 'hasil: true' : 'hasil: false';
                        ?>
                        <h3>(||)</h3>
                        <p> $_variabel1 = 10;</p>
                        <p> $variabel2 = 2;</p>
                        <p>$_variabel1 != $variabel2 || $_variabel1 < 5 ? 'hasil: true' : 'hasil: false' ;</p>

                                <?php
                                $_variabel1 = 10;
                                $variabel2 = 2;
                                echo  $_variabel1 != $variabel2 || $_variabel1 < 5 ? 'hasil: true' : 'hasil: false';
                                ?>


            </div>



        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>