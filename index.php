<?php include('navigation.php') ?>
<DOCTYPE html>
<style>
      .bg
      {
        background-image:url('http://www.asacocirco.com/wp-content/uploads/2015/05/21399-red-stage-curtain-1920x1200-abstract-wallpaper.jpg');
         background-position: center;
         background-size: cover;
         height: 85vh;

      }   
      h1{
    background-color:#08080a;
    cursor: pointer;
    color: #f7f43f;
    text-align: center;
    height: 100px;
    margin-bottom: 0 !important;
    border: 0 !important;
    height: auto;
    transform: 1s;
    font-family: 'Suez One', serif;
}

h1:hover{
    background-color: lightpink;
    color:black;
    transition-duration: 1s;
} 
    </style>
<html>

<body>

  <h1>Welcome to Our Bank</h1>

  <div class="bg">
    <div class="center">
      <ul>
        <li class="operations"><a href="transfer_money.php"><button class="btn" id="red"style="color:yellow;">View Customers</button></a></li>
        <li class="operations"><a href="transaction_history.php"><button class="btn" id="green"style="color:yellow;">Transaction History</button></a></li>
      </ul>
    </div>
  </div>

  
</body>
</html>