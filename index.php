<?php
    // Initialize the language code variable
$lc = ""; 
    // Check to see that the global language server variable isset()
    // If it is set, we cut the first two characters from that string
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    // Now we simply evaluate that variable to detect specific languages
if($lc == "en"){
    header("location: https://discordler.github.io/en/");
    exit();
} else if($lc == "de"){
    header("location: https://discordler.github.io/de/");
    exit();
}
else{ // default case if $lc is empty
    header("location: https://discordler.github.io/de/");
    exit();
}
?>