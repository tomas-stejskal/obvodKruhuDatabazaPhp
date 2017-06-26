<?php
	function main()
	{
		if (isset($_POST['x'])){
			$R = (double)$_POST['x'];
			if ($R < 0)
				$R *= -1;
			$outPut = new StdClass();
			$outPut->obvod = 2 * pi() * $R;
			$outPut->obsah = pi() * pow($R,2);
			
			echo json_encode($outPut);
		}else{
			echo "err";
		}
	}
	main();
?>