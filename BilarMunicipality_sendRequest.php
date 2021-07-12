<html>

<body>

<?php
//***************************************
// Gather Data from Form
//***************************************

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$email = htmlspecialchars($_REQUEST['email']);  
	$comments = htmlspecialchars($_REQUEST['comments']); 
//***************************************
// Validate Entries
//***************************************


//***************************************
//Add Guestbook Information to File
//***************************************

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

$filename = $DOCUMENT_ROOT.'BilarMunicipality_webpage/data/'.'sendRequest.txt';

$fp = fopen($filename, 'a');   //opens the file for appending

$output_line = $email.'|'.$comments.'|'."\n";

fwrite($fp, $output_line);

fclose($fp );   


//***************************************
//Display New Page
//***************************************

}
?>
</body>
</html>