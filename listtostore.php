<html>
<head>

        <meta charset="utf-8" </>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/web_project/vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="/web_project/vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="/web_project/vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="/web_project/css/style.css">
        <link rel="stylesheet" type="text/css" href="/web_project/css/nav-menu.css">
        <link rel="stylesheet" type="text/css" href="/web_project/slide-show/slide-show.css"> 
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <title>gym</title>
	
</head>
<body>

<p><center><h1><font>Order List</font></h1></center></p>

<?php
$con = mysql_connect("sql2.freesqldatabase.com","sql2209491","yM7*mF7%");
if (!$con){
die("Can not connect: " . mysql_error());
}
mysql_select_db("sql2209491",$con);


if(isset($_POST['delete'])){
$DeleteQuery = "DELETE FROM tst WHERE id='$_POST[hidden]' LIMIT 1 ";          
mysql_query($DeleteQuery, $con);
};

$sql = "SELECT * FROM tst";
$myData = mysql_query($sql,$con);
echo "<table border=1 >
<tr>
<th><h2>ID</h2></th>
<th><h2>Name</h2></th>
<th><h2>Lastname</h2></th>
<th><h2>Email</h2></th>
<th><h2>Tuna</h2></th>
<th><h2>Helbon</h2></th>
<th><h2>Gainer</h2></th>
<th><h2>Soda</h2></th>
<th><h2>Water</h2></th>
<th><h2>Salad</h2></th>
<th><h2>Price</h2></th> 
<th><h2>Delete Order</h2></th> 
</tr>";
while($record = mysql_fetch_array($myData)){
echo "<form action=listtostore.php method=post>";
echo "<tr>";


echo "<td>" . "<input type=text name=id value='" . $record['id'] . "' </td>";
echo "<td>" . "<input type=text name=name value='" . $record['name'] . "' </td>";
echo "<td>" . "<input type=text name=lastname value='" . $record['lastname'] . "' </td>";
echo "<td>" . "<input type=text name=email value='" . $record['email'] . "' </td>";

if($record['tuna']!=0)
echo "<td bgcolor='#22df2f'><center>" . "<input type=text name=tuna value='" . $record['tuna'] . "' </center></td>";
else
echo "<td>" . "<input type=text name=tuna value='" . $record['tuna'] . "' </td>";

if($record['helbon']!=0)
echo "<td bgcolor='#22df2f'>" . "<input type=text name=helbon value='" . $record['helbon'] . "' </td>";
else
echo "<td>" . "<input type=text name=helbon value='" . $record['helbon'] . "' </td>";

if($record['gainer']!=0)
echo "<td bgcolor='#22df2f'>" . "<input type=text name=gainer value='" . $record['gainer'] . "' </td>";
else
echo "<td>" . "<input type=text name=gainer value='" . $record['gainer'] . "' </td>";

if($record['soda']!=0)
echo "<td bgcolor='#22df2f'>" . "<input type=text name=soda value='" . $record['soda'] . "' </td>";
else
echo "<td>" . "<input type=text name=soda value='" . $record['soda'] . "' </td>";

if($record['wather']!=0)
echo "<td bgcolor='#22df2f'>" . "<input type=text name=wather value='" . $record['wather'] . "' </td>";
else
echo "<td>" . "<input type=text name=wather value='" . $record['wather'] . "' </td>";

if($record['salad']!=0)
echo "<td bgcolor='#22df2f'>" . "<input type=text name=salad value='" . $record['salad'] . "' </td>";
else
echo "<td>" . "<input type=text name=salad value='" . $record['salad'] . "' </td>";

if($record['price']!=0)
echo "<td bgcolor='#1586ee'>" . "<input type=text name=price value='" . $record['price'] . "' </td>";
else
echo "<td>" . "<input type=text name=price value='" . $record['price'] . "' </td>";
echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
echo "<td>" . "<input type=hidden name=hidden value='" . $record['id'] . "' </td>";
echo "</tr>";
echo "</form>";
}
echo "</table>";
mysql_close($con);

?>

</body>
</html>