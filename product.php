<?php
 $id = $_GET['id'];
 $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 $data = json_decode($json,true);
 $details = array('records' => $data);
 $result = $details['records'];
?>
<html>
<br/>
<br/>
<br/>
<br/>
<div class="w3-container">
	<div class="w3-card-4">
		<header class="midtown">
			<h1><b><?php echo $result['name']; ?></b></h1>
		</header>
	<div class="midtown">
		<p> <b>Price:  </b><?php echo $result['price']; ?></p>
		<p>	<b>Description:  </b><?php echo $result['description']; ?> </p>
		<p>	<b>Category:  </b><?php echo $result['category_name'];?> </p>
	</div>
		
			<a class="bots" href="index.php?navigation=update.php?id=<?php echo $id ?>">Update</a>
			<a class="bots" href="index.php?navigation=form_delete.php?id=<?php echo $id ?>">Delete/Trash</a>
	
	</div>
  </div>
</html>
