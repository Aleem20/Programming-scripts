<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<h3>Problem 5</h3>

<?php

if ($_POST) {
    $width = 8;
    $height = (int)$_POST['cartHeight'];
    $length = (int)$_POST['cartLength'];
    $distance = (int)$_POST['distance'];
    if ($length < 20 || $length > 60) {
        echo "length must 20 - 60 ft <br> <a href='index.html'>Back</a>";
        exit;
    }
    if ($height < 10 || $height > 15) {
        echo "height must 10 - 15 ft <br> <a href='index.html'>Back</a>";
        exit;
    }

    $distance = $_POST['distance'];
    if ($distance < 0) {
        echo "distance cant minus <br> <a href='index.html'>Back</a>";
        exit;
    }
    $volume = $height * $length * $width;

    $container = round(100000 / $volume);
    $total = $container * $distance * 20; //20 is price
    echo "<table>
            <tr>
                <th>Volume</th>
                <th>Container</th>
                <th>Distance</th>
                <th>Total</th>
            </tr>
            <tr>
                <th>{$volume}</th>
                <th>{$container}</th>
                <th>{$distance}</th>
                <th>{$total}</th>
            </tr>
        </table><br><a href='index.html'>Back</a>";;
}
