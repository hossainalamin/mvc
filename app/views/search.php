<div class="searchoption">
<div class="menu">
<a href="<?php echo base_url;?>">Home</a>
</div>
<div class="search">
<form action="<?php echo base_url;?>/Index/search" method="post">
    <input type="text" name="keyword" placeholder="search">
    <select class="catsearch" name="cat">
        <option>
        select one
        </option>
        <?php foreach($search as $catagory){
        ?>
        <option value="<?php echo $catagory['id'];?>">
            <?php echo $catagory['name'];?>
        </option>
        <?php }?>
    </select>
<input type="submit" name="submit" class="submitbtn"value="Search">
</form>
</div>
</div>