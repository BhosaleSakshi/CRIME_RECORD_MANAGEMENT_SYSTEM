<?php
  include("connection.php");
  $Criminal_ID = $_GET['Criminal_ID'];

    $query01 = "SELECT * FROM criminalCrime where Criminal_ID='$Criminal_ID'";
    $data1 = mysqli_query($conn,$query01);
    $total = mysqli_num_rows($data1);
 ?>
<!DOCTYPE html>
<html>

<head>
  <title>Update Criminal Details</title>
  <style media="screen">
    body {
      font-family: Calibri, Helvetica, sans-serif;
    background-image: linear-gradient(45deg, #632626, #9D5353, #BF8B67, #DACC96);
      margin: 50px 400px;
    }

    .container {
      padding: 50px;;
      background-color: white;
      opacity: 0.7;
    }

    input[type=text],
    input[type=number],
    textarea {
      width: 95%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=number]:focus,
    textarea:focus {
      background-color: #F9CEEE;
      outline: none;
    }

    div {
      padding: 10px 0;
      margin-bottom: 15px;
    }

    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: -25px;
    }

    .registerbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
      font-size: 20px;
    }

    .registerbtn:hover {
      opacity: 1;
      background-color: #4CAA90;
      font-weight: 600;
    }
    td {
      padding: 15px;
      text-align: left;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}
    th {
      background-color: #069A8E;
      color: white;
    }
     td {
       font-size: 18px;
    border-bottom: 1px solid #ddd;
  }
  select{
    margin: 20px 0 0 50px;
    padding: 16px 20px;
    margin: 8px 0;
    cursor: pointer;
    width: 50%;
    font-size: 15px;
  }

  </style>
</head>

<body>
<div class="container">
        <h1>Add Crime</h1>
      </center>
      <hr>
<table>
  <td><label><b>Aleready added Crime ID </b></label></td>

<?php
if($total != 0){
  while($result = mysqli_fetch_assoc($data1)){

    echo "<tr>
              <td>".$result['Crime_ID']."</td>
              <br>
          </tr>";
  }
}else{
  echo "<h4>NO Recordes Previous Crime records </h4>";
}
 ?>
  </table>
  <form method="post">
      <h3>Add Crime</h3>
      <select class="" name="Crime_ID">
        <option value="100" >100 Robbery </option>
        <option value="101" >101 Theft</option>
        <option value="102" >102 kidnapping</option>
        <option value="103" >103 Rape</option>
        <option value="104" >104 Trafficking</option>
        <option value="105" >105 Smuggling</option>
        <option value="106" >106 Assassination</option>
        <option value="107" >107 Shoplifting</option>
      </select>


      <button type="submit" class="registerbtn" name="save">Add Crime</button>
  </form>

  </div>
</body>

</html>

<?php

  if(isset($_POST['save']))
  {
    $Crime_ID = $_POST['Crime_ID'];

  	$query1=" INSERT INTO criminalCrime (Criminal_ID,Crime_ID) VALUES ('$Criminal_ID','$Crime_ID') ";

      if (mysqli_query($conn, $query1))
      {
  		echo ' <script>alert("Criminal Details added successfully")</script>';
      ?>
      <meta http-equiv ="refresh" content = "0; url = http://localhost/project/criminalDetails.php" >
      <?php
  	}
  	mysqli_close($conn);
}
?>
