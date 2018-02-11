 <?

$link = mysqli_connect('a42962.mysql.mchost.ru', 'a42962_mos', 'ajyat846aB', 'a42962_mos');
$link->set_charset('utf8');
$link->query("SET NAMES utf8 COLLATE utf8_general_ci"); 

if (mysqli_connect_errno()) {
	echo 'Ошибка подключения ('.mysqli_connect_errno().'): '. mysqli_connect_error();
	exit();
}

function getOnePost($postID) {
	global $link;
	$sql = "SELECT * FROM articles WHERE menu_link = '$postID'";
	$query = mysqli_query($link, $sql);
	$onePost = mysqli_fetch_assoc($query);
	return $onePost;
}

function getMenu() { 
	global $link;
	$sql = "SELECT menu_name, menu_link FROM articles"; 
	$query = mysqli_query($link, $sql);
	$menu = mysqli_fetch_all($query, 1);
	return $menu;
}