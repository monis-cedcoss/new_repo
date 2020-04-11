<h1>Home</h1>
<a href="index.php?page=about">About</a>
<?php
for ($i=0; $i<sizeof($arr); $i++) :
    echo "<pre>";
    print_r($arr[$i]);
endfor;
echo "<br>Its an array!";
?>
