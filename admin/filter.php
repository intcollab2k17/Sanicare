<?php  
 //filter.php  

                include('dbcon.php');
                    $query=mysqli_query($con,"select * from reservation LEFT JOIN room ON room.room_id = reservation.room_id WHERE reservation_status = 'Cancel' OR reservation_status = 'Accept' OR reservation_status = 'Finished'")or die(mysqli_error());
                      $row1=mysqli_fetch_array($query);
                       
                        $date_check = new DAteTime($row1['check_in']);                                
                        $date_out = new DAteTime($row1['check_out']);  
                        $diff = $date_out->diff($date_check)->format("%a");                                
  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "hotel");  
      $output = '';  
      $query = " SELECT * FROM sales LEFT JOIN reservation ON reservation.reservation_id = sales.reservation_id WHERE payment_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'"; 

      $result = mysqli_query($connect, $query);
      $output .= '  
           <table class="table table-bordered" id = "sample_2">  
                <tr>  
                     <th width="30%">Customer Name</th>  
                     <th width="30%">Sales Amount</th>  
                     <th width="30%">Payment Date</th>  
                     <th width="30%">Number of days stayed</th>  
                                         
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))
           {  
                $output .= '  
                     <tr>  

                          <td>'. $row["firstname"]. ' ' .$row["lastname"] .'</td>  
                          <td>'. $row["sales_amount"] .'</td>
                          <td>'. $row["payment_date"] .'</td>                         
                          <td>'. $diff .'</td>                         
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
      $sql = "SELECT sum(sales_amount) as total FROM sales WHERE payment_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";

      $result2 = mysqli_query($connect, $sql); 

       $output2 .= '  
           <table class="table table-bordered" id = "sample_2">  
                <tr>  
                     
                                         
                                         
                </tr>  
      '; 
        if(mysqli_num_rows($result2) > 0){
              while($row4=mysqli_fetch_array($result2)){
                $output2 .= '
                <tdwidth="5%">Total</td>  
                <td>Php. '. $row4['total'] .'.00</td>
                <td><a hreff = "#" class = "btn btn-success btn-block printer" onclick = "window.print();">Print</a></td>
                ';               ;
              }  
        }



      $output2 .='</table>';
      echo $output2;

 }
 ?>