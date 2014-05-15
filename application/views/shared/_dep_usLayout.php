<ul>
    <?php
    $did = 0;

    foreach ($items as $v) {
        if ($v['did'] == $did) {
            echo "<li class = 'user'>{$v['un']}</li>";
        } else if (!empty($v['uid'])) {
            echo "<li class = 'dep'><a href='/my/phptest/departments/{$v['did']}'>{$v['dn']}</a></li>"
            . "<li class = 'user'>{$v['un']}</li>";
        } else {
            echo "<li class = 'dep'><a href='/my/phptest/departments/{$v['did']}'>{$v['dn']}</a></li>";
        }
        /**/

        $did = $v['did'];
    }
    ?>
</ul>