<aside class="sidebar">
<div class="widget">
<h2>Catagory</h2>
<ul>
<?php
 foreach($cat as $data){
?>
	<li><a href="<?php echo base_url;?>/Index/PostByCat/<?php echo $data['id'];?>"><?php echo $data['name'];?></a></li>
<?php } ?>
</ul>
</div>
<div class="widget">
<h2>Latest Post</h2>
<ul>
<?php
 foreach($latestpost as $data){
?>
	<li><a href="<?php echo base_url;?>/Index/PostDetail/<?php echo $data['id'];?>"><?php echo $data['title'];?></a></li>
<?php } ?>
</ul>
</div>
</aside>