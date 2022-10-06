<?php
$fname='Machu Picchu 101 _ National Geographic.mp4';
if(file_exists($fname)){
    
    header('Content-Disposition: attachment; filename=" '.basename($fname)).'"';
    readfile($fname);
    echo "Download Success";
}
?>
