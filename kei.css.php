<?php
    header('Content-type: text/css');

    $color = array("#ffff00", "#090000", "#008080", "#f00fe4", "#8080ff", "#fe4080", "#fffe00", "#ffee00");
    shuffle($php_color);
?>

h1 {
    color: <?php echo $olor[0]; ?>;
}
p {
    color: <?php echo $color[1]; ?>;
}