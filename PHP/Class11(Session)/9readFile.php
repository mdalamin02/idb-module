<?php

$filename = "Data.json";

$data = file_get_contents($filename);

$users = json_decode($data);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Show Employee Information</title>
</head>
<body>
	<table border="1">
		<caption>Employees Information</caption>
		<tbody>
			<tr>
				<th>Name</th>
				<th>Occupation</th>
				<th>City</th>
			</tr>

			<?php

				foreach ($users as $user) 
				{
						
			?>

			<tr>
				<td><?= $user->name; ?></td>
				<td><?= $user->occupation; ?></td>
				<td><?= $user->city; ?></td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>