

<?php

   /**
    *  DATA BASE CONNECTION
    */

   $connect = new mysqli('localhost','root','','ct');

   /**
    *  Payment form isseting
    */
   if ( isset($_POST['payment']) ) {
       //Get values
       $name = $_POST['name'];
       $amount = $_POST['amount'];


       if ( empty($name) || empty($amount) ) {
           echo "Fill the form !";
       }else{
           $sql = "INSERT INTO money (name, amount) VALUES ('$name','$amount')";
           $connect -> query($sql);
       }
   }





?>


<form action="" method="POST">
    <input name="name" type="text" placeholder="Name">
    <input name="amount" type="text" placeholder="Amount">
    <input name="payment" type="submit" placeholder="Add Payment">
</form>


<?php

    $sql = "SELECT * FROM money";
    $data = $connect -> query($sql);


    // fetch , fetchAll , fetch_array, fetch_assoc , fetch_object ,fetch_all

    while ( $all_data = $data -> fetch_assoc() ) {
        echo " My name is " . $all_data['name'] . " and my amount is " . $all_data['amount'] . "<hr>" ;
    }



   //  echo "<pre>";
   // print_r($all_data);
   //   echo "</pre>";


   // foreach ( $all_data as $single_data ) {
   //     echo " My name is " . $single_data['1'] . " and my amount is " . $single_data['2'] . "<hr>";
   // }



?>