<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <style>
      body
      {
          background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQWdqMczw7MecqluIVpcahbYc5ZvMT9NArlLd8JZRHRQoUIskE0aYkJu3jzcrOEu7pZ7A&usqp=CAU');
          background-position: center;
          background-size: cover;
        height: 100vh;
      }    
    </style>
</head>
<body>
<?php
  include 'navigation.php';
?>

	<div class="container">
        <h2 class="text-center pt-4" style="color:yellow;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center"style="color:yellow;">S.No.</th>
                <th class="text-center"style="color:yellow;">Sender</th>
                <th class="text-center"style="color:yellow;">Receiver</th>
                <th class="text-center"style="color:yellow;">Amount</th>
                <th class="text-center"style="color:yellow;">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connection.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"style="color:yellow;"><?php echo $rows['sno']; ?></td>
            <td class="py-2"style="color:yellow;"><?php echo $rows['sender']; ?></td>
            <td class="py-2"style="color:yellow;"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"style="color:yellow;"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"style="color:yellow;"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
</body>
</html>