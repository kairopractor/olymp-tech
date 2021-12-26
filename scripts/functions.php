<?php 
	require_once 'config/connect.php';



	function get_goods($connect, $id = FALSE) {

		$sql = "SELECT * FROM result ";
		$result = mysqli_query($connect, $sql);

		if ($id) {
			if ($id == 'namea') {
				$sql .= 'ORDER BY name ASC';
			}
			else if ($id == 'named') {
				$sql .= 'ORDER BY name DESC';
			}
			else if ($id == 'pricea') {
				$sql .= 'ORDER BY materials ASC';
			}
			else if ($id == 'priced') {
				$sql .= 'ORDER BY materials DESC';
			}
		}
		echo(mysqli_num_rows($result));
		for ($i=0; $i < mysqli_num_rows($result); $i++) { 
			$goods[] = mysqli_fetch_array($result);

			return $goods;
		}
	}