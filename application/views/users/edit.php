<?php include(MyHelpers::UrlContent('~/views/shared/_defaultLayout.php')); ?>

<div class="menu">
    <?php include(MyHelpers::UrlContent('~/views/shared/_menuLayout.php')); ?>
</div>

<form name = "f1" method="post">
    <p>Name: <input type="text" name="un" id="un" value="<?=$items[0]['selected']['un'];?>">
        &nbsp;&nbsp;&nbsp;Department: <select name="dep" id="dep">
            <?php
            $did = 0;               
            foreach ($items as $v) {
                if ($v['did'] != $did) {
                    if ($v['did'] == $items[0]['selected']['did']) {
                        echo "<option value='{$v['did']}' selected>{$v['dn']}</option>";
                    } else {
                        echo "<option value='{$v['did']}'>{$v['dn']}</option>";
                    }
                }
                $did = $v['did'];
            }
            ?>
        </select>

        <input type="submit" value="Save">
    <input type="submit" name='cancel' id='cancel' value="Cancel"></p>   
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
