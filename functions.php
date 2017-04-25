<?php

function open_card($title, $subtitle="") {
  $full_title = $title;
  $full_title = ($subtitle != "") ? $full_title . ' <small class="text-danger float-right">' . $subtitle . '</small>' : $full_title;
  echo '<div class="card">
      <h2 class="card-header">' . $full_title . '</h2>
      <div class="card-block">';
}

function close_card() {
  echo '</div>
    </div>';
}

?>