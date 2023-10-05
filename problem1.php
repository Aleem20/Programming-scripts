<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<h3>Problem 1</h3>
<?php
if ($_POST) {
    if ($_POST['dependents'] == -1) {
        echo "please select the dependents  <a href='index.html'>Back</a>";
        exit;
    } else {
        if ($_POST['dependents'] == 0) {
            $tax = 33;
        } else if ($_POST['dependents'] == 1) {
            $tax = 25;
        } else if ($_POST['dependents'] == 2) {
            $tax = 18;
        } else if ($_POST['dependents'] == 3) {
            $tax = 15;
        } else {
            $tax = 10;
        }
        $netincome = round((float)$_POST['grossIncome'] - ((float)$_POST['grossIncome'] * $tax / 100), 2);
        echo "<table>
            <tr>
                <th>Gross Income</th>
                <th>Taxes</th>
                <th>Net Income</th>
            </tr>
            <tr>
                <th>{$_POST['grossIncome']}</th>
                <th>{$tax}%</th>
                <th><b>{$netincome}</b></th>
            </tr>
        </table><br><a href='index.html'>Back</a>";
    }
} else {
    echo "wrong page <a href='index.html'>Back</a>";
}
