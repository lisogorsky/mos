<? 
require_once('include/header.php'); 

$postID = $_SERVER['REQUEST_URI'];

/*if( substr($postID,0,10)=='/page.php?' ) {
	$postID = substr($postID,10);
}*/

if( preg_match($postID, $_SERVER['REQUEST_URI']) ) {
	$postID = $_SERVER['REQUEST_URI'];
}

$post = getOnePost($postID); 

echo $post['text'];

require_once('include/footer.php'); 
?>