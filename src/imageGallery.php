
<?php
require("./library/avatarsApi.php");

$counter = 1;
foreach ($result as $avatar) {
  echo '<div class="each-radio-wrapper"><label for="avatar' . $counter . '"><input type="radio" id="avatar' . $counter . '" name="avatar" value="' . urldecode($avatar['photo']) . '" >
  <img class="width-120 img-thumbnail rounded" src="' . urldecode($avatar['photo']) . '" alt="avatar' . $counter . '"></label></div>';
  $counter++;
}
