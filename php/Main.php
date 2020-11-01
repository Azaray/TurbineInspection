<?php
require('Inspector.php');

$inspector = new Inspector();
echo json_encode($inspector->damageReport());
exit();