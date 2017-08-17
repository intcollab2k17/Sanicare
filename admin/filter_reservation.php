<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "hotel");  
      $output = '';  
      $query = " SELECT * FROM reservation WHERE date_reserved BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'"; 

      $result = mysqli_query($connect, $query); 
      $output .= '  
           <table class="table table-bordered" id = "sample_2">  
                <tr>  
                     <th width="5%">Code</th>  
                     <th width="30%">Customer Name</th>  
                     <th width="30%">Payment Date</th>  
                     <th width="30%">Reservation Status</th>  
                                         
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["r_code"] .'</td>  
                          <td>'. $row["firstname"].'  '.$row['lastname'].'</td>
                          <td>'. $row["date_reserved"] .'</td>
                          <td>'. $row["reservation_status"] .'</td>
                     </tr>
                '; 

           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= ' 
      </table>';  
      echo $output;  
 }
 if(isset($_POST["from_date"], $_POST["to_date"])){
      $connect = mysqli_connect("localhost", "root", "", "hotel");  
      $output2 = '';  
      $sql = "SELECT count(r_code) as total FROM reservation WHERE date_reserved BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";

      $result2 = mysqli_query($connect, $sql); 

       $output2 .= '  
           <table class="table table-bordered" id = "sample_2">  
                <tr>  
                     
                                         
                                         
                </tr>  
      '; 
        if(mysqli_num_rows($result2) > 0){
              while($row4=mysqli_fetch_array($result2)){
                $output2 .= '
                <tdwidth="5%">Total Number of Reservation</td>  
                <td>'. $row4['total'].'</td>
                <td><a hreff = "#" class = "btn btn-success btn-block" onclick = "window.print();">Print</a></td>
                ';               ;
              }  
        }



      $output2 .='</table>';
      echo $output2;

 }
 ?>