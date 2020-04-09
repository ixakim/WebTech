<?php
header('Content-Type: text/html; charset=utf-8');

echo "<link rel='stylesheet' href='lab3.css' type='text/css' />";

$row = 1;
if (($handle = fopen("lab3.csv", "r")) !== FALSE) {
	
	while (($data = fgetcsv($handle, 150, ";")) !== FALSE) {
        $num = count($data);			
        if ($row == 1) {
			echo "	<toprow>
						<name> $data[0] </name>
						<price> $data[1] </price>
						<currency> $data[2] </currency>
						<count> $data[3] </count>			
					</toprow>
				
					<row>
						<name>  </name>
						<price> </price>
						<currency> </currency>
						<count> </count>					
					</row>";
		}	
		if ($row > 1) {			
			echo "	<row>
						<name> $data[0] </name>
						<price> $data[1] </price>
						<currency> $data[2] </currency>
						<count> $data[3] </count>					
					</row>";			
		}
        $row++;
    }
	fclose($handle);
}
?>
