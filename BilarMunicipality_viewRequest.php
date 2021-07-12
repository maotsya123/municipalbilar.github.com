<html>
<head>
	<title>View Request</title>
</head>

<body style="font-family:Gabriola;">
<style>
   
</style>

<div>

<h2>View Request</h2>

<table border='1'>
<tr>
	<th>Email</th>
	<th>Comments</th>
</tr>

<?php

//*****************************************************
//Read Order Information From File Into HTML table
//*****************************************************

$display = "";
$line_ctr = 0;

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

$filename = $DOCUMENT_ROOT.'BilarMunicipality_webpage/data/'.'sendRequest.txt';

if (file_exists($filename))
{

	$fp = fopen($filename, 'r');   //opens the file for reading

	while(true)
	{
		$line = fgets($fp);

		if (feof($fp))
		{
			break;
		}

		$line_ctr++;

		$line_ctr_remainder = $line_ctr % 2;

		if ($line_ctr_remainder == 0)
		{
			$style = "style='background-color: #FFFFCC;'";
		} else {
			$style = "style='background-color: white;'";
		}

		list($email, $comments) = explode('|', $line);

		$display .= "<tr $style>";
		
			$display .= "<td>".$email."</td>";
			$display .= "<td>".$comments."</td>";
			
		$display .= "</tr>\n";  //added newline
	}


	fclose($fp );

	print $display;

}
else
{
	print "<p>Currently no request.</p>";
}

?>

</table>

</div>
</body>
</html>