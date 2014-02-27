<?php

  if ($page = $_GET["page"]) {
    preg_replace("/[^a-z]/", '', $page);  /* protect against params like
                                             '../../private_stuff' */
    if (file_exists("page/$page")) {
      require '../lib/markdown.php';
      $markdown = file_get_contents("page/$page");
      if (empty($markdown)) {
        echo "<p>This page seems to be empty.</p>";
      } else {
        $html = Markdown::defaultTransform($markdown);
        echo $html;
      }
    } else {
      echo "<p>That file doesn't seem to exist.</p>";
    }
  } else {
    echo "<p>There seems to have been a mistake.</p>";
  }

?>
