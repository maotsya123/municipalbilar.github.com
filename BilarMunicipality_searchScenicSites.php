<html>
<body style="background-color:#ccffdd; font-family:Gabriola">

<?php
	$find_city = $_POST['find_city'];

	if (empty($find_city))
	{
		$find_city = 'ALL';
	}
	
	if ($find_city == 'ALL')
	{
		print "<center><h1>Showing All List:</h1></center>";
	} else {
		print "<h1>Results found for: ".$find_city."</h1>";
	}


	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

	$dirname = $DOCUMENT_ROOT.'BilarMunicipality_webpage/images/scenicSites';

	$dirhandle = opendir($dirname);


	if ($dirhandle)
	{
   		 while (false !== ($file = readdir($dirhandle)))
		 {
			if ($file != '.' && $file != '..')
			{
				displayPropertyInfo($file, $find_city);
			}
		 }

	}

	//*****************************************
	//**   Function Definitions
	//*****************************************

	function displayPropertyInfo($image_filename, $find_city)
	{
		//Get Image File

		$imagename = 'images/scenicSites/'.$image_filename;     // .jpg file
		$house_img = "<p> <div style='border-width: 2px 200px 0px 200px; border-style:solid; border-color:#001a00;'> <img src='".$imagename."' style='width:40%; height:50%;'></div></p>";

		//Get Image Index Information

		$index_filename = str_replace('.jpg', '.txt', $image_filename);

		$filename = 'siteDetails/'.$index_filename;   // .txt file

		$fp = fopen($filename, 'r');


		$show_house = 'Y';   //set default value

		$descriptionFlag = "N";  //set default value
		$description = '';

		while(true)
		{
			$line = fgets($fp);

			if (feof($fp))
			{
				break;
			}

			$pos = stripos($line, 'Site:');

			if ($pos !== false)
			{
				$city = substr($line, 5);
				$city = trim($city);

				if ($find_city != 'ALL')
				{

					$subpos = stripos($city, $find_city);

					if($subpos === false)
					{
						$show_house = 'N';
						break;
					}

				}
			}

			
			$pos = stripos($line, 'Details:');

			if ($pos !== false)
			{
				$descriptionFlag = "Y";
			}
			
			if ($descriptionFlag == "Y")
			{
				$description .= $line."<br />";
			}
			
		}

		if ($show_house == 'Y')
		{
			print "<center>";
		
		
			print $house_img;
	
			
			print "<h2>Site: ".$city."<br /></h2>";			
			print "<h3>".$description."</h3><br /><br />";
			
			print "</center>";
			
		}

	}

?>

</body>
</html> 
