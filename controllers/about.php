<?php

$_SESSION['name'] = 'John Clap';

view("about.view.php", [
    'heading' => 'About Us',
]);
