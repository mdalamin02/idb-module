<?php

    echo substr(decoct(fileperms("readme.txt")),2)."<br>";
    // echo fileperms("readme.txt")."<br>";

    // echo chmod("readme.txt", 0600);
    echo chmod("readme.txt", 0755);
    // echo chmod("readme.txt", 0400);
    // echo chmod("readme.txt", 0222);

?>