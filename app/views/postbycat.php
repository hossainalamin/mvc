<hr>
<article class="postcontent">
<?php 
	foreach($postbycat as $value){
?>
<div class="post">
<h2><?php echo $value['title'];?></h2>
<h4>Catagory: <?php echo $value['name'];?></h4>
<p>
<?php
 $text = $value['content'];
 if(strlen($text)>200){
   $text = substr($text,0,200);
   echo $text."..";
 }else{
   echo $text;
 }
 ?>
</p>
<div class="readmore"><a href="<?php echo base_url;?>/Index/PostDetail/<?php echo $value['id']; ?>"> readmore</a></div>
</div>
<?php } ?>
</article>