<?php include(MyHelpers::UrlContent('~/views/shared/_defaultLayout.php')); ?>

<div class="menu">
    <?php include(MyHelpers::UrlContent('~/views/shared/_menuLayout.php')); ?>
</div>

<form name = "f1" method="post" action ="departments/add">
    <input type="text" name="newdep" id="newdep">
    <input type="submit" value="Add">
</form>

<table>
    
<?php
foreach ($items as $v) {
    echo "<tr><td>{$v['id']}</td><td>{$v['name']}</td>"
    . "<td><a href='/my/departments/edit/{$v['id']}'>Edit</a></td>"
    . "<td><a href='/my/departments/delete/{$v['id']}'>Delete</a></td></tr>";
}
?>
</table>