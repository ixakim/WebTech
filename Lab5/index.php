<?php
header('Content-Type: text/html; charset=utf-8');

echo "<link rel='stylesheet' href='lab5.css' type='text/css' />";

$row = 1;
if (($handle = fopen("lab5.csv", "r")) !== FALSE) {
echo "<mainblock>";	
	while (($data = fgetcsv($handle, 150, ";")) !== FALSE) {
        $num = count($data);			
        if ($row == 1) {
			echo "	<toprow>
						<name>		$data[0]	</name>
						<price>		$data[1]	</price>
						<currency>	$data[2]	</currency>
						<count>		$data[3]	</count>			
					</toprow>
				
					<row>
						<name>		</name>
						<price>		</price>
						<currency>	</currency>
						<count>		</count>					
					</row>
					<div id=table2>";
		}	
		if ($row > 1) {			
			echo "					
					<row>
						<name>		$data[0]	</name>
						<price>		$data[1]	</price>
						<currency>	$data[2]	</currency>
						<count>		$data[3]	</count>					
					</row>";
		}
        $row++;
    }
	fclose($handle);
}
echo "	</div>
		</mainblock>
		<updbtn> 
			ОБНОВИТЬ ДАННЫЕ В ТАБЛИЦЕ
		</updbtn>";

echo "	<script src='scripts/jquery-3.0.0.min.js'></script>
		<script src='scripts/main.js'></script>";
?>
