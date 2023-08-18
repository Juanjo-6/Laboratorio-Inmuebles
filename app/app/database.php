<?php

#Leer items
$read = $db->prepare("
SELECT item_id, item_name, item_done
FROM items
WHERE user_id =:user

");


?>
