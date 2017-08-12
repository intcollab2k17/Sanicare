<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "hotel");  
      $output = '';  
      $query = " SELECT * FROM sales WHERE payment_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'"; 

      $result = mysqli_query($connect, $query); 
/*
    $sql = "SELECT sum(sales_amount) as total FROM sales WHERE payment_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
     
     $result2 = mysqli_query($sql);

     while($row4=mysqli_fetch_assoc($result2)){
       $output2 .='<tr>
                    <td>Total</td>
                    <td>'. $row4['total'] .'</td>
                    <td>&nbsp;</td>
                  </tr>';
         }

*/




      $output .= '  
           <table class="table table-bordered" id = "sample_2">  
                <tr>  
                     <th width="5%">ID</th>  
                     <th width="30%">Sales Amount</th>  
                     <th width="30%">Payment Date</th>  
                                         
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["sales_id"] .'</td>  
                          <td>'. $row["sales_amount"] .'</td>
                          <td>'. $row["payment_date"] .'</td>
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
                <td><a hreff = "#" class = "btn btn-success btn-block" onclick = "window.print();">Print</a></td>
                ';               ;
              }  
        }



      $output2 .='</table>';
      echo $output2;

 }
































 ?>