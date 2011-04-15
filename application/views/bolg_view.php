<html>
<head>
<title><?php echo $title;?></title>
</head>
<body>
    
	<h1><?php echo $heading;?></h1>
    <h3><?php echo $loop_head;?></h3>
    <ul>
        <?php foreach ($todo_list as $item):?>
        <li><?php echo $item;?></li>
        <?php endforeach ?>
    </ul>
     <ul>
    
        <?php foreach ($dbdata_list as $item1):?>
        
        <li><?php echo "id:". $item1->id."name:". $item1->name."Description:".$item1->des;?><a href="edit_blog/id/<?php echo $item1->id;?>">Edit</a></li>
        <?php endforeach ?>
    </ul>
     <form method="post" action="comments">
        <div>
            <input type="text" name="name"/><input type="text" name="des"/><input type="submit" name="submit" value="submit"/>
        </div>
     </form>
    
     

</body>
</html>