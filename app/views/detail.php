Detail
<hr>
<article class="postcontent">
<?php 
	foreach($postbyid as $value){
?>
<div class="post">
<h2><?php echo $value['title'];?></h2>
<h4><a href="<?php echo base_url;?>/Index/PostByCat/<?php echo $value['cat'];?>"><?php echo $value['name'];?></a></h4>
<p><?php echo $value['content'];?></p>
</div>
<?php } ?>
</article>