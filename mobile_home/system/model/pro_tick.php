<?php
session_start();
$id= $_GET['views'];
if($id != "") //  Neu co id truy cap vao

{

if(isset($_SESSION['giohang'][$id]))

{

// Tang s? lu?ng n� l�n n?u d� c� id s?n ph?m d� trong gi? h�ng

$_SESSION['giohang'][$id];

}

else // N?u chua c� th� th�m m?i v�o

{
$_SESSION['giohang'][$id] = $id; // S? lu?ng m?c d?nh l� 1

}
}

else

{

}

?>
<?php
$giohang = $_SESSION['giohang'];
?>