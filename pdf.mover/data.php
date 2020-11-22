<?php

$pdf = $_FILES['pdf']['name'];

$tmp_name = $_FILES['pdf']['tmp_name'];

move_uploaded_file($tmp_name,"./pdf/".$pdf);

?>