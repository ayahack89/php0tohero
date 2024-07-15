<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Sequence</title>
</head>
<body>
    <h1>Fibonacci Sequence</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Generate Sequence</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        function fibonacci($n) {
            if ($n <= 0) {
                return [];
            } elseif ($n == 1) {
                return [0];
            } elseif ($n == 2) {
                return [0, 1];
            } else {
                $sequence = [0, 1];
                for ($i = 2; $i < $n; $i++) {
                    $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
                }
                return $sequence;
            }
        }

        $fibonacciSequence = fibonacci($number);
        echo "<h2>Fibonacci Sequence:</h2>";
        echo implode(", ", $fibonacciSequence);
    }
    ?>
</body>
</html>