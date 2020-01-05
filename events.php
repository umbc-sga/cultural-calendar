<?php
    $url = "https://my3.my.umbc.edu/api/v0/events.xml?group_token=" . $_POST["group_token"];

    $data = file_get_contents($url);

    echo $data;
?>