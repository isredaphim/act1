<?php
 $json = file_get_contents('http://rdapi.herokuapp.com/product/read.php');
 $data = json_decode($json,true);

 if(isset($_POST['search'])){
    $search = $_POST['search'];
}

 if(isset($search)){
	$jsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
	$res = json_decode($jsearch,true);

	$list = $res['records'];
	
 }else{
	$list = $data['records'];
 }
 
?>
<html>
<br/>
<br/>
<br/>
	<div class="midtown"><form action="index.php?page=list" method="POST">
	Search <input type="text" name="search" placeholder="Product Name">
		<input type="submit" name="submit" value="Search">
	</form>
	</div>
	<hr/>
  <table><thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
	    <th>Price</th>
      <th>Category</th>
    </tr>
    <?php

      foreach($list as $result){
    ?>
    <tr>
     <td> <a href="index.php?page=show_product&id=<?php echo $result['id'];?>"> 
	 <?php echo $result['name']; ?> </a> </td>
     <td><?php echo $result['description'];?> </td>
	 <td><?php echo $result['price'];?> </td>
	 <td><?php echo $result['category_name'];?> </td>

    </tr></thead>
    <?php
      }
    ?>
  </table>

</html>