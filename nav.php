
  <div id="nav">

    <?php

    function nav_link($name, $link_text, $page) {
      if ($page == $name) {
        echo "<span>$link_text</span>";
      } else {
        echo "<a href='/$name'>$link_text</a>";
      }
      echo "\n    ";
    }

    if (empty($_GET["page"])) {
      $page = ltrim($_SERVER["REDIRECT_URL"], '/');
    } else {
      $page = $_GET["page"];
    }

    $links = array("about" => "about turkopticon",
                   "policy" => "policy",
                   "faq" => "faq",
                   "devel" => "development",
                   "blog" => "blog");

    foreach($links as $name => $link_text) {
      nav_link($name, $link_text, $page);
    }

    ?>

  </div>

