<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci</title>
</head>
<body>

    <h2>Menghitung Fibonacci</h2>

    <form method="post">
        Masukkan n:
        <input type="number" name="n" min="1" required>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if (isset($_POST['n'])) {
        $n = (int) $_POST['n'];

        $a = 0;
        $b = 1;
        $c = 0;
        $total = 0;

        while ($c < 2 ** $n) {
            if ($c % 2 == 1) {
                $total = $total + $c;
            }
            echo "<h3>deret fibonance: $c.-</h3>";
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }

        echo "<h3>Hasil: $total</h3>";
    }
    ?>

</body>
</html>