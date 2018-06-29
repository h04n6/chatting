<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<?php include("database.php") ?>
</head>
<body>
	 <table id="table-list-friend">
	 		<?php
	 		$user_id = intval($_GET['userid']);
	 		$query_select = "SELECT * FROM user WHERE id IN (SELECT friend_id FROM friend_list WHERE user_id = :id_)";
	 		$sth = $conn->prepare($query_select);
	 		$sth->bindParam(":id_", $user_id);
	 		if($sth->execute()){
	 			while($row = $sth->fetch(PDO::FETCH_ASSOC)){
	 				$image = "";
	 				if($row['avatar'] == ""){
	 					if($row['sex'] == "0") $image = "icon/male.png";
	 					else $image = "icon/female.png";
	 				}else{
	 					$image = "avatar/" + $use_id + ".png";
	 				}
	 		?>
	 				<tr class="form-group" id="friend" onclick="#">
		 				<td>
				 			<img class="avatar" height="48px" width="48px" src=<?=$image?>>
				 		</td>
				 		<td>
				 			<p class="name"><?= $row['name']?></p>
				 			<p class="last-message">bay be</p>
				 		</td>
				 	</tr>
	 		<?php
	 			}
	 		}else{
	 			var_dump($sth->errorInfo());
	 		}
	 		?>
	 </table>
</body>
</html>