 <?php
      header('Content-Type: application/json');
      
      if($_GET['product']) {
          $data = array();
          $productName = str_replace(" ", "+", $_GET['product']);
          $productLink = "https://via.placeholder.com/1024x768?text=".$productName;
          
          for ($i=0; $i<3; $i++) {
              $data[] = $productLink."+"($i+1);
          }
           echo json_encode($data);
      }
      else {
          echo json_encode("https://via.placeholder.com/1024x768?text=error+no+product");
      }
      echo $data[1];
      
      ?>