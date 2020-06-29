<?php 

  // Web Scraping 

  // Will be using simple_html_dom.php. (Download this by looking it up)
  require_once 'simple_html_dom.php';
  
  // This line will let it know where to get the data from. By using a function called file_get_html(url).
  $dom = file_get_html("https://www.imdb.com/title/tt4154756/");
  /* We will use the find(information, 0) function to get to the div we need to. 
     By typing in the div we want and the class, we can reach to it. */
  $list = $dom->find('div[class="plot_summary"]', 0 ); 
  // We will then get then create another array and find the element we want. A div, an a, an href, or any tag.   
  $list_array = $list->find('div[class="summary_text"]', 0);
  // Run a loop traversal through this array and then echo each element till we run out. 
  // This will get the content of  the tag such as text or anything else. 
 echo $list_array;

 /* for ($i = 0; $i < sizeof($list_array); $i++)  {
  echo $list_array[$i];
} */

 // foreach($dom->find('.plot_summary') as $postDiv )  {

   // echo "<pre>";
   // die(var_dump($postDiv));
   // foreach($postDiv->find("div") as $div ) {
      //echo "<pre>"; 
    //  die(var_dump($div));
    // for( $i = 0; $i )
  //  } 
 // }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel = "stylesheet" href = "styles.css" type = "text/css">;

    <title>Hello, world!</title>


  </head>
  <body>
      <div class = "container">
        <h1>Hello, world!</h1>
      </div>

    <div class = "container">
         <div class="input-group mb-3">
                <div class = "label_above">
                    <label for = "location" id = "place"> Enter a location. </label></br>  
                    <input type="text" class="form-control" id = "location" placeholder = "hello" name = "location">
                </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <script type = "text/javascript">



    </script>
  </body>
</html>