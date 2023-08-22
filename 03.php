<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8" />
        <title>HTML5 ❤😂</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style01.css">
    </head>

    <body>
        Web Program <br>

        <script>
            function checkError() {
                alert('check your ID');
            }
        </script>

        <?php
            $i = 3;
            $i ++;
            echo "$i <br>";

            $1 = "홍길동";
            echo "i = $i<br>";

            for($i=1; $i<=10; $i++) {
                echo "$1 <br>";
            }

            include "04.php";

            echoc "i = $i<br>";
        ?>


            <button type="button" class="btn btn-primary" onClick="checkError()">Check error</button>
    </body>
</html>

