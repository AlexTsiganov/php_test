<?php 

$data_arr = array(
	'simferopol' 	=> '295053',
	'krasnodar' 	=> '350000',
	'moscow'		=> '121500'
);

$data = '';

// if isset get request 'city'
if(isset($_GET['city'])){

	$request = $_GET['city'];

	// if not empty
	if( ! empty($request) ){

		// clear spaces
		$request = trim($request);
		// clear tags
		$request = strip_tags($request);
		// to lower case
		$request = strtolower($request);

		foreach ($data_arr as $key => $val) {

			if($request === $key){
				$data = $val;
			} // end if

		} // end foreach

	} // end if

} // end if

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
</head>
<body>
	<form method="get">
		<input type="text" name="city">
	</form>
	<div>
		<?php echo $data; ?>
	</div>
</body>
</html>