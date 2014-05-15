<?php include(MyHelpers::UrlContent('~/views/shared/_defaultLayout.php')); ?>

<div class="menu">
    <?php include(MyHelpers::UrlContent('~/views/shared/_menuLayout.php')); ?>
</div>

<form name = "f1" method="post" action ="users/add">
    <p>Name: <input type="text" name="us" id="us" value="">
        &nbsp;&nbsp;&nbsp;Department: <select name="dep" id="dep">
            <?php
            $did = 0;
            foreach ($items as $v) {
                if ($v['did'] != $did) {
                    echo "<option value='{$v['did']}'>{$v['dn']}</option>";
                }
                $did = $v['did'];
            }
            ?>
        </select>

        <input type="submit" value="Add"> </p>   
</form>

<table>

    <?php
    foreach ($items as $v) {
        if (!empty($v['uid'])) {
            echo "<tr><td>{$v['uid']}</td><td>{$v['un']}</td>"
            . "<td><a href='/my/users/edit/{$v['uid']}'>Edit</a></td>"
            . "<td><a href='/my/users/delete/{$v['uid']}'>Delete</a></td></tr>";
        }
    }
    ?>
</table>