
    <?php
    $pTesto ="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    var_dump($pTesto);
    echo "<br>";
    $p = $_GET["badword"];
    var_dump($p);
    $pTestoReplace = str_replace($p, "***",$pTesto);
    echo "<br>";
    var_dump($pTestoReplace);
    ?>
