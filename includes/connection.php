<?php
 $db = mysqli_connect('sql102.epizy.com', 'epiz_31773258', 'XcT7N0Z5UZ') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'epiz_31773258_prince' ) or die(mysqli_error($db));
?>