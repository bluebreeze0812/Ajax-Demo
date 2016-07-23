<?php

require_once '/program/ZendStudio/project/mysql/tool/SqlTool.class.php';

$sqlTool = new SqlTool();

$sqlTool->connect('localhost', 'root', 'root', 'mydb');

//get employee's id that we want to show
$id = $_GET['id'];

$sql = "select * from ajax_emp_info where id='{$id}'";

//get array witch cantain all the information of employee by given id
$arr = $sqlTool->return_result($sql);

//create a table to show info
echo "<table border='1' width='800px'>";
echo "<tr>
    <th align='center'>id</th>
    <th align='center'>FirstName</th>
    <th align='center'>LastName</th>
    <th align='center'>Age</th>
    <th align='center'>Hometown</th>
    <th align='center'>Job</th>
    </tr>";
echo "<tr>";
for ($i = 0; $i < 6; $i++) {
    echo "<td align='center'>{$arr[0][$i]}</td>";
}
echo "</tr>";
echo "</table>";

?>