
<?php

//The directory to your images folder, with trailing slash
$dir = "images/uploads/";

//Set the extensions you want to load, seperate by a comma.
$extensions = "jpeg,jpg,png,gif,JPEG,JPG,PNG,GIF";

//Set the number of images you want to display per page
$imagesPerPage = 12;

//Set the $page variable
if(!isset($_GET['page'])){
	$page = 1;
}else{
	$page = $_GET['page'];
}

//Load all images into an array
//$images = glob($dir."*.{".$extensions."}", GLOB_BRACE);
$images = glob($dir."*.{".$extensions."}", GLOB_BRACE);

/*
// FORMAT CODE for PHOTOS
*/
$counter = 0; 
$array_imgs = array();
foreach ($images as $pathToThumb)
{
    array_push($array_imgs, $pathToThumb);
    $counter++;
}

$chunks = array_chunk($array_imgs, 3);

/*
// ENDS HERE
*/


//Count the number of images
$totalImages = count($images);

//Get the total pages
$totalPages = ceil($totalImages / $imagesPerPage);

//Make sure the page you are on is not greater then the total pages available.
if($page > $totalPages){
	//Set the currnet page to the total pages.
	$page = $totalPages;
}

//Now find where to start the loading from
$from = ($page * $imagesPerPage) - $imagesPerPage;

//Now to display the page numbers!
echo "<div class='page-numbers center-text'>";
    for($p = 1; $p <= $totalPages; $p++){
        if($p == $page){
            $tmp_pages[] = "<strong>{$p}</strong>";
        }else{
            $tmp_pages[] = "<a href='?page={$p}'>{$p}</a>";
        }
    }

    //Now display pages, seperated by a hyphon.
    echo  implode(" - ", $tmp_pages);
echo "</div>";

//Now start looping
for($i = $from; $i < ($from + $imagesPerPage); $i+=6){
	//We need to make sure that its within the range of totalImages.
	if($i < $totalImages){
		//Now we can display the image!
        echo "<div class='row'>";
            echo "<div class='gal-img medium-8 large-8 columns'>";
                    echo "<img src='".$images[$i]."' alt='gallery1'/>";
            echo "</div>
                <div class='gal-img medium-4 large-4 columns'>";
                    echo "<img src='".$images[$i+1]."' alt='gallery2'/>";
                    echo "<img src='".$images[$i+2]."' alt='gallery3'/>";
            echo "</div>";
        echo "</div>";
        echo "<div class='row'>";
            echo "<div class='gal-img medium-4 large-4 columns'>";
                    echo "<img src='".$images[$i+3]."' alt='gallery4'/>";
                    echo "<img src='".$images[$i+4]."' alt='gallery5'/>";
            echo "</div>            
                    <div class='gal-img medium-8 large-8 columns'>";
                    echo "<img src='".$images[$i+5]."' alt='gallery6'/>";
            echo "</div>";
        echo "</div>";
    
	}
}

?>