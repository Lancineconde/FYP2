<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=fyp2_project", "root", "");

if($_POST["query"] != '')
{
	$search_array = explode(",", $_POST["query"]);
	$search_text = "'" . implode("', '", $search_array) . "'";
	$query = "
	SELECT * FROM receiveposts
	WHERE j_title IN (".$search_text.")
	ORDER BY j_id DESC
	";
}
else
{
	$query = "SELECT * FROM receiveposts ORDER BY j_id DESC";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td>'.$row["j_title"].'</td>
			<td>'.$row["j_location"].'</td>
			<td>'.$row["j_zibcode"].'</td>
			<td>'.$row["j_type"].'</td>
			<td>'.$row["j_companyname"].'</td>

     <td class="" onclick=""><a href="app01.php">Read More & Apply</a></td>';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="5" align="center">No Data Found</td>
	</tr>
	';
}

echo $output;


?>
