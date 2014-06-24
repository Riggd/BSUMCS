<?php
$counter = 0; 
$array_imgs = array();
foreach (glob("images/uploads/*.*") as $pathToThumb)
{
    array_push($array_imgs, $pathToThumb);
    $counter++;
}               

$chunks = array_chunk($array_imgs, 3);
//print_r($chunks);
foreach($chunks as $key => $chunk) {
    if($key % 2 == 0){
        echo "<div class='row'>
            <div class='gal-img medium-8 large-8 columns'>";
                echo "<img src='".$chunk[0]."' alt='gallery1'/>";
        echo "</div>
            <div class='gal-img medium-4 large-4 columns'>";
                echo "<img src='".$chunk[1]."' alt='gallery2'/>";
                echo "<img src='".$chunk[2]."' alt='gallery3'/>";
            echo "</div>
        </div>";
    }
    else {
        echo "<div class='row'>
            <div class='gal-img medium-4 large-4 columns'>";
                echo "<img src='".$chunk[0]."' alt='gallery4'/>";
                echo "<img src='".$chunk[1]."' alt='gallery5'/>";
        echo "</div>            
                <div class='gal-img medium-8 large-8 columns'>";
                echo "<img src='".$chunk[2]."' alt='gallery6'/>";
            echo "</div>
        </div>";
    }
}
?>