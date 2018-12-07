<?php 
	require("templates/header.php");

	$loi = array();
	$loi["them"] = NULL;

	if(isset($_POST["ok"]))	
	{
		$tenbh = $_POST["tenbh"];
		$tencs = $_POST["tencs"];
		$tenns = $_POST["tenns"];
		$url = $_POST["url"];

		if(isset($tenbh) && isset($tencs) && isset($tenns) && isset($url))
		{
			require("../config/connect.php");
			$sql = "SELECT * FROM baihat WHERE tenbh = '$tenbh'";
			$kt = mysqli_query($conn,$sql);
			if(mysqli_num_rows($kt)>0)
			{
				$loi["them"] = "* Tên bài hát đã tồn tại";
			}
			else
			{
				$sql = "INSERT INTO baihat(tenbh,
									   tencs,
									   tenns,
									   url)	VALUES	
									   ('$tenbh',
									   '$tencs',
									   '$tenns',
									   '$url')";

				mysqli_query($conn,$sql);
				$loi["them"] = "* Thêm bài hát thành công";					   	
			}					
			mysqli_close($conn);						   								   
		}
	}	
?>	
	<form action="add_list_music.php" method="post">	
		<h2>Thêm bài hát</h2>
		<div>
			<div>
				<input class="form-control is-valid w-25 mb-1" type="text" name="tenbh" placeholder="Tên bài hát" value required>
			</div>
			<div>
				<input class="form-control is-valid w-25 mb-1" type="text" name="tencs" placeholder="Tên ca sĩ" value required>
				
			</div>
			<div>
				<input class="form-control is-valid w-25 mb-1" type="text" name="tenns" placeholder="Tên nhạc sĩ" value required>
				
			</div>
			<div>
				<input class="form-control is-valid w-25 mb-1" type="text" name="url" placeholder="Đường dẫn file" value required>
				
			</div>
		</div>

		<button class="btn btn-success" type="submit" name="ok">Thêm</button>

	</form>

	<div style="width: 500px; margin: 30px; text-align: center; color: red;">
		<?php  
			echo $loi["them"];
		?>
	</div>

<?php  
	require("templates/footer.php");
?>
