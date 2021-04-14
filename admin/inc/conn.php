<?php

	$host = "host=ec2-52-21-252-142.compute-1.amazonaws.com";
	$dbname = " dbname=dcle2fpc522se2";
	$user = " user=fmneqfpwrsmfic";
	$password = " password=f2f4b403db219824f6af70a62a6cd17f982167cdc23ef004cf3ed53e403f98f4 port=5432";

	$conn = pg_connect($host.$dbname.$user.$password);
	if(!$conn){echo "LOST CONNECT";}
 ?>
