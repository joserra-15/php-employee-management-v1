
<?php
require("./library/avatarsApi.php");

$counter = 1;
foreach ($result as $avatar) {
  $samePhoto = isset($employee['avatar']) ? ((urldecode($avatar['photo'])==$employee['avatar']) ? 'checked' : ''):'';
  echo '<div class="each-radio-wrapper"><label for="avatar' . $counter . '">
  <input '.$samePhoto.' type="radio" id="avatar' . $counter . '" name="avatar" value="' . urldecode($avatar['photo']) . '" >
  <img class="width-120 img-thumbnail rounded" src="' . urldecode($avatar['photo']) . '" alt="avatar' . $counter . '"></label></div>';
  $counter++;
}
