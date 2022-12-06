<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css%22 rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js%22 integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js%22 integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>Pan Tadeusz</title>
</head>
<body>
    <header class="containter text-center">
        <h1>Pan Tadeusz, czyli ostatni zajazd na Litwie: historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem</h1>

    </header>
    <div>
        <h2>Spis tresci: </h2>
        <ul> <!-- OSTYLOWAĆ PRZY UŻYCIU BOOTSTRAP -->
        <li><a href="./index.php">Strona Główna</a></li>
            <?php 
                for ($i=1; $i < 13; $i++) { 
                    print("<li><a href='.\index.php?i=$i'>Księga $i</a></li>");
                }
            ?>
        </ul>
    </div>
    <div>
        <?php 
            $i = $_GET['i'];
            if(isset($i)) {
                include_once("k$i.html");
            } else {
                print('<img src="./Pan-Tadeusz--w-rezyserii-Andrzeja-Wajd.jpg" alt="Pan Tadeusz">');
            }
        ?>
    </div>
    <footer class="containter">
        <p>&copy; Kacper Siciarz</p>
    </footer>
</body>
</html>