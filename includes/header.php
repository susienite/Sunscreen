<header>
    <h1 id="title">S u n s c r e e n</h1>

    <nav id="nav">

        <?php
        $pages = [
          ["index.php", "Home"], ["motive.php", "Motive"],
          ["apply.php", "Application"], ["spf.php", "SPF"]
        ];
        $current_file = basename($_SERVER['PHP_SELF']);

        foreach ($pages as $p) { ?>
        <li><a href="<?php echo $p[0]; ?>" class="<?php if ($p[0] == $current_file) {
                                                    echo " format_page";
                                                  } ?>">
                <?php echo $p[1]; ?></a></li>
        <?php

      } ?>

    </nav>
</header> 
