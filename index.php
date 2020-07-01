<?php 

  // Web Scraping 

  require_once 'simple_html_dom.php';
  // Will be using simple_html_dom.php. (Download this by looking it up)
 /* require_once 'simple_html_dom.php';
  
  // This line will let it know where to get the data from. By using a function called file_get_html(url).
  $dom = file_get_html("https://www.imdb.com/title/tt4154756/");
   We will use the find(information, 0) function to get to the div we need to. 
     By typing in the div we want and the class, we can reach to it. 
  $list = $dom->find('div[class="plot_summary"]', 0 ); 
  // We will then get then create another array and find the element we want. A div, an a, an href, or any tag.   
  $list_array = $list->find('div[class="summary_text"]', 0);
  // Run a loop traversal through this array and then echo each element till we run out. 
  // This will get the content of  the tag such as text or anything else. 
 echo $list_array; 

  for ($i = 0; $i < sizeof($list_array); $i++)  {
  echo $list_array[$i];
} */
 // print_r($_POST);

    $information = "";
    $errror = "";
  if ( $_POST ) {

    $state = $_POST['location'];
   $base_website = "http://completewebdevelopercourse.com"."/locations/".$state; // We will manipulate this link. 
   // $website = $base_website . "/locations/" . $state;

   // $website = $base_website . "/locations" . "/" . $state . "/forecasts/latest";
    //= file_get_html("weather-forecast.com");
    $html = file_get_html($base_website);

    $pageArray = explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $html);
    
    //echo 'hello' . $pageArray[0];

    $secondPageArray = explode('</span></span></span>', $pageArray[1]);

    //echo $secondPageArray[0];

    if ( $pageArray[1] == "" ) {
      $error = '<div class="alert alert-danger" role="alert">
      This information does not exist.
    </div>';
     // echo 'This is empty.' . '<br>';
    } else  {
      $information = 'The weather for ' . 
      $state . ' is:' . '<div class="alert alert-success" role="alert">' 
      . $secondPageArray[0] . '</div>';

    }
    //echo $html;
    //$list = $html->find('div[class="description__text"]', 0);
   
   // $list = $html->find('p[class="b-forecast__table-description-content"]', 0);
   
    
   // die(var_dump($list));
   // $list_array = $list->find('h2', 0);
    // $list_array = $list->find()
  // echo '<pre>';
    //die(var_dump($list_array));
  /// print_r($list_array);

 // for( $i = 0; $i < sizeof($list_array); $i++ ) {
   // echo '<br>';
    //echo $list_array[$i];
 // }
  
      
  //  echo '<br>'; 
   // echo $website; 
  }


   

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

  <div id = "header_container">
      <h2> Weather Scrapper </h2>
   </div>

  <div id = "input_container">
    <form method="post">
      <div class="form-group">
         <div class="input-group mb-3">
                <div class = "label_above">
                    <label for = "location" id = "place"> Enter a location. </label></br>  
                    <input type="text" class="form-control" id = "location" placeholder = "Eg: New-York, London" name = "location">
                </div>
         </div>
    </form>
                <button class = "btn btn-primary">Get the Weather.</button>
        </div>
  </div>

  <div id = "information_container">
      <div id = "info"> 
      <? echo $information.$error ?>
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