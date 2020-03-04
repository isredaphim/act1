<?php
	$id = $_GET['id'];
	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
	$data = json_decode($json,true);
	$details = array('records' => $data);
	$result = $details['records'];
	//category
	$json2 = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$data2 = json_decode($json2,true);
	$list = $data2['records'];
?>
<html> 
    <head>  
      <link rel="stylesheet" type="css" href="styles.css">
    </head>

<h1> Update Product </h1>
<form action="pro_update.php?id=<?php echo $id ?>" method="POST">
	<input type="text" name="name" value="<?php echo $result['name'];?>"/><br/>
	<input type="text" name="description" value="<?php echo $result['description']; ?>"/><br/>
	<input type="text" name="price" value="<?php echo $result['price']; ?>"/><br/>
	<select name="category">
	<option value="<?php echo $result['category_id'];?>"><?php echo $result['category_name'];?></option>
		<?php
		foreach($list as $page){
		?>
			<option value="<?php echo $page['id']?>"><?php echo $page['name']?></option>
		<?php
		}
		?>
		</select>
	<input type="submit" name="submit" value="submit"/>

</form>
</html>
