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
          background-image:url('image/customer.jpg');
          background-position: center;
          background-size: cover;
        height: 100vh;
      }  
      h3{
    background-color:black;
    cursor: pointer;
    color: #161203;
    text-align: center;
    height: 100px;
    margin-bottom: 0 !important;
    border: 0 !important;
    height: auto;
    transform: 1s;
    font-family: 'Suez One', serif;
}  
    </style>
</head>
<body>
<?php 
    include 'connection.php';
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn,$sql);
?>
<?php include('navigation.php'); ?>

<div class="container" >
            <h3 style="color:yellow;">Customers</h3>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2"style="color:yellow;">Id</th>
                            <th scope="col" class="text-center py-2"style="color:yellow;">Name</th>
                            <th scope="col" class="text-center py-2"style="color:yellow;">E-Mail</th>
                            <th scope="col" class="text-center py-2"style="color:yellow;">Balance</th>
                            <th scope="col" class="text-center py-2"style="color:yellow;">Trasact</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"style="color:yellow;"><?php echo $rows['id'] ?></td>
                        <td class="py-2"style="color:yellow;"><?php echo $rows['name']?></td>
                        <td class="py-2"style="color:yellow;"><?php echo $rows['email']?></td>
                        <td class="py-2"style="color:yellow;"><?php echo $rows['balance']?></td>
                        <td><a href="customer.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-success"style="color:blue;background-color:lightyellow;">Transfer Money</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>
