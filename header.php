<? 
$link = mysqli_connect('a42962.mysql.mchost.ru', 'a42962_mos', 'ajyat846aB', 'a42962_mos');
if (mysqli_connect_errno()) {
	echo 'Ошибка подключения ('.mysqli_connect_errno().'): '. mysqli_connect_error();
	exit();
}
else {echo "string";}
function getCategories() { 
	global $link;
	$sql = "SELECT * FROM `articles`"; 
	$query = mysqli_query($link, $sql);
	$categories = mysqli_fetch_all($query, 1);
	return $categories;
}
$categories = getCategories(); var_dump($categories);
?>

