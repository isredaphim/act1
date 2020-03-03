<?php
$load = (isset($_GET['page'])&& $_GET['page'] !='')? $_GET['page'] : '';
?>

<html>
	<head>
		<title>Api Utilization</title>
	</head>
<link rel="stylesheet" href="styles.css"/>
	<div class="header">
	<div class="Navigation">
			 <div class="bots"><a href="index.php?page=home">HOME</a></div>
			<div class="bots"><a href="index.php?page=list">PRODUCTS</a></div>
			 <div class="bots"><a href="index.php?page=create">ADD/CREATE</a></div>
	</div>
	</div>
<?php
	switch($load){
		case 'home':
			require_once('index.php');
		break;
		case 'list':
			require_once('list.php');
		break;
		case 'show_product':
			require_once('product.php');
		break;	
		case 'create':
			require_once('form_create.php');
		break;
		case 'update':
			require_once('update.php');
		break;
		case 'delete':
			require_once('form_delete.php');
		break;
		default:
			require_once('index.php');
	}
?>
</html>