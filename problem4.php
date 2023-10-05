<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<h3>Problem 4</h3>

<?php
// product id, category, title, and price
$filename = "product.txt";
$myfile = fopen($filename, "r") or die("Unable to open file!");
$file =  fread($myfile, filesize($filename));
$file = explode("\n", $file);
$newresult = array();
for ($i = 0; $i < count($file); $i++) {
    $newresult[] = $file[$i];
}
$output = "<table>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Category</th>
            </tr>";
for ($i = 0; $i < count($newresult); $i++) {
    $data_raw = explode(",", $newresult[$i]);
    if ($data_raw[3] < 500) {
        $output .= "<tr>
                    <td>{$data_raw[2]}</td>
                    <td>{$data_raw[3]}</td>
                    <td>{$data_raw[1]}</td>
                    </tr>";
    }
}
$output .= "</table><br><a href='index.html'>Back</a>";
echo $output;
