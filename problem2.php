<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<h3>Problem 2</h3>
<?php
if ($_POST) {
    if (!isset($_POST['category'])) {
        echo "please select the Vehicle  <a href='index.html'>Back</a>";
        exit;
    } else {
        if ($_POST['category'] == "car") {
            $rate = 20;
        } else if ($_POST['category'] == "suv") {
            $rate = 40;
        } else {
            $rate = 50;
        }
    }
    if (!isset($_POST['coverage'])) {
        $coverage = 0;
    } else {
        $coverage = 20;
    }
    $total = $_POST['numDays'] * $rate + $coverage;
    echo "<table>
            <tr>
                <th>Vehicle Category</th>
                <th>Number Of Day</th>
                <th>Rate Per Day ($)</th>
                <th>Coverage Price($)</th>
                <th>Total</th>
            </tr>
            <tr>
                <th>" . ucwords($_POST['category']) . "</th>
                <th>{$_POST['numDays']}</th>
                <th>$" . $rate . "</th>
                <th>$" . $coverage . "</th>
                <th><b>$" . $total . "</b></th>
            </tr>
        </table><br><a href='index.html'>Back</a>";
} else {
    echo "wrong page <a href='index.html'>Back</a>";
}
