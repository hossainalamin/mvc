<hr>
<article class="postcontent">
<?php 
	foreach($postbysearch as $value){
?>
<div class="post">
<h2><a href="<?php echo base_url;?>/Index/PostDetail/<?php echo $value['id']; ?>"><?php echo $value['title'];?></a></h2>
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