
<?php
require("./library/avatarsApi.php");

$counter = 1;
foreach ($result as $avatar) {
  echo '<label for="avatar' . $counter . '"><input type="radio" id="avatar' . $counter . '" name="avatar" value="' . urldecode($avatar['photo']) . '" ><img class="width-200 img-responsive rounded  rounded-circle" src="' . urldecode($avatar['photo']) . '" alt="avatar' . $counter . '"></label>';
  $counter++;
}
