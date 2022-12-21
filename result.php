<a href="./">Back to Homepage</a><br>

<?php
    include 'includes/class-autoload.inc.php';

    $button_id = $_GET['button_id'];

    $result_obj = new Result($button_id);
    $result_obj->showResult();

?>