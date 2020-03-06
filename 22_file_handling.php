<?php
    $file = "example.txt";
    
    // Writing File
    if($handle = fopen($file,'w')){
        fwrite($handle,"PHP Rocks");
        echo "Writing Done<br>";
        fclose($handle);
    }else{
        echo "Unable to open file.";
    }

    // Reading File
    if($handle = fopen($file,'r')){
        echo $content =  fread($handle,filesize($file))."<br>";
        fclose($handle);
    }else{
        echo "Unable to open file.";
    }

    // Deleting File
    unlink($file);
    echo "File deleted.";
?>