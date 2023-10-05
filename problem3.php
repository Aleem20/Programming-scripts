<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<h3>Problem 3</h3>
<?php
// product id, category, title, and price
if (isset($_POST['category'])) {
    $category = $_POST['category'];
    $filename = "product.txt";
    $myfile = fopen($filename, "r") or die("Unable to open file!");
    $file =  fread($myfile, filesize($filename));
    $file = explode("\n", $file);
    $newresult = array();
    for ($i = 0; $i < count($file); $i++) {
        if (mb_strpos($file[$i], $category) !== false) {
            $newresult[] = $file[$i];
        }
    }
    $output = "<table>
            <tr>
                <th>Product ID</th>
                <th>Category</th>
                <th>Title</th>
                <th>Price</th>
            </tr>";
    for ($i = 0; $i < count($newresult); $i++) {
        $data_raw = explode(",", $newresult[$i]);
        $output .= "<tr>
                <td>{$data_raw[0]}</td>
                <td>{$data_raw[1]}</td>
                <td>{$data_raw[2]}</td>
                <td>{$data_raw[3]}</td>
            </tr>";
    }
    $output .= "</table><br><a href='index.html'>Back</a>";
    echo $output;
} else {
    echo "please select the product  <a href='index.html'>Back</a>";
    exit;
}
