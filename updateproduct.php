<?php

	session_start();

	include("connect.php");

	 $countproduct = $_REQUEST['countproduct'];

$sql = "UPDATE lpstore SET lastname='Doe' WHERE countproduct = $countproduct";

if (mysqli_query($conn, $sql)) {
    		echo "<script>
if(countproduct > countproduct){
				alert('เพิ่มจำนวนสินค้าสำเร็จ้');

}else if(countproduct<){
					alert('ลดจำนวนสินค้าสำเร็จ');

}else{
     
}
				window.location='main.php';
			</script>";

} else {
echo "<script>
				alert('ไม่สามารถทำรายการได้');
				window.location='main.php';
			</script>";
}

mysqli_close($conn);


?>