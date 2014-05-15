<?php include(MyHelpers::UrlContent('~/views/shared/_defaultLayout.php')); ?>

<div class="menu">
    <?php include(MyHelpers::UrlContent('~/views/shared/_menuLayout.php')); ?>
</div>

<form name = "f1" method="post">
    <input type="text" name="dep" id="dep" value="<?=$items[0]['name'];?>">
    <input type="submit" value="Save">
    <input type="submit" name="cancel" id="cancel" value="Cancel">
</form>



    
<?php
//echo $items[0]['id'].$items[0]['name'];
/*
foreach ($items as $v) {
    echo $v['id'].$v['name'];
}
 * 
 */
?>
