<html>
 <body>
    <?php
    $a = 1;
        echo '<ul>';
        for ($x = 0; $x <= 10; $x++) {
            echo '<li>This is ' . ($a+$x) . '</li>';
        }
        echo '</ul>';
    ?> 
 </body>
</html>