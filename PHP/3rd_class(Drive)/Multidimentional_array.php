<?php

$books = array(


				array(

					"name"=>"web Development",
					"edition"=>"2nd",
					"price"=>"BDT500"
				),
				array(
					"name"=>"Red hat Linux",
					"edition"=>"2nd",
					"price"=>"BDT580"	
				),
				array(
					"name"=>"C# Programming",
					"edition"=>"1st",
					"price"=>"BDT400"
				),
				array(
					"name"=>"Laravel 8",
					"edition"=>"1st",
					"price"=>"BDT850"
				),
				array(
					"name"=>"CPA Merketing",
					"edition"=>"2nd",
					"price"=>"BDT350"
				)
);

foreach ($books as $value) 
{
	foreach ($value as $key => $val) 
	{
		print "$key:$val<br>";
	}

	print "<br>";
}


?>