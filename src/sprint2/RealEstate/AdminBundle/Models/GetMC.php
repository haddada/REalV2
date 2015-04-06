<?php

$result = mysql_query("SELECT id, 2
                       FROM boitemessages");
$to_encode = array();
while($row = mysql_fetch_assoc($result)) {
  $to_encode[] = $row;
}
echo json_encode($to_encode);

?>