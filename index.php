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
</head>
<body onload="load_page('1')">
	<div id="main-content">
		<div class="row">
			<div class="col-sm-3">
				<div class="form-group">
					<table id="table-title">
						<tr>
							<td id="icon-setting"><a href="load_page('1')"><img src="icon/setting.png"></a></td>
							<td id="title-messenger">Messenger</td>
							<td id="icon-new-message"><a href="new-message.php" ><img src="icon/new-message.png"></a></td>
						</tr>
					</table>
					<div class="line"></div>
				</div>
				<div class="form-group">
					<input placeholder="Search Messenger" type="text" name="search" id="search" class="form-control">
				</div>
				<div class="form-group" id="list-friend">
					
				</div>
			</div>
			<div class="col-sm-9" style="background-color: orange"></div>
		</div>
	</div>
</body>

<script>
	function load_page($user_id){
		if($user_id == ""){
			alert("ERROR!");
		}else{
			$.get("list-friend.php?userid=" + $user_id, function(data, status){
				if(status == "success"){
					document.getElementById("list-friend").innerHTML = data;
				}
			})
		}
	}
</script>
</html>