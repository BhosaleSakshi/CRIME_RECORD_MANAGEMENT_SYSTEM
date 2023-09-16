<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Incharge</title>
    <link rel="stylesheet" href="style.css">
    <style media="screen">
    body{
      background-color: white;
      margin: 10px;
    }
    .title{
      margin-top: -8px;
    }
    .navlinks{

    }

    .navbar{
       margin-left : 0;
    }
    ul{
      list-style: none;
    }
    li{
      width: 200px;
      margin-top: 15px;
      font-family: sans-serif;
      font-weight: 500;
      font-size: 25px;
      padding: 20px;
      text-align: center;
    }

    .dp_menu:hover{
      background-color: #F73D93;
      cursor: pointer;
    }
    a{
      color: white;
      text-decoration: none;
    }
    .rlink:hover{
      color: #001D6E;
      font-weight: bolder;
    }

    .dropdown_opts{
      display: none;
    }
    ul li:hover > ul{
      display: block;
    }
    ul ul .dp_menu:hover{
      background-color: #F73D93;
    }
    .dp_menu{
      width: 155px;
      font-size: 20px;
      text-align: left;
      padding: 10px 20px 10px 20px;
      margin: 15px;
    }
    .register_ops{
      width: 180px;
      margin: 2px 20px 20px 20px;
    }
    .register_ops:hover{
      background-color: #242F9B;
    }
    .opts {
      margin: 0;
      padding: 5px;
      text-align: left;
    }
    .optslist{
      display:flex;
    }
    .detail_tbl{
       padding: 80px 0 0 250px;
    }
    th, td {
    padding: 10px;
    font-size: 20px;
    margin: 10px;
    }
    table {
      border-spacing: 3px;
      padding: 5px;
    }
    .a_tbl{
      color: Darkblue;
    }
    .a_tbl:hover{
      color: red;
    }
    .logout{
      margin: 40px 80px 0 600px;
      font-size: 18px;
    }
    .logout a:hover{
      color: yellow;
    }

    </style>
  </head>
  <body>
    <header>
      <div class="logo">
        <img class="imglogo" src="Logo.png" alt="Logo">
      </div>
        <p class="title">
          <br>
          <nobr>National Crime Record<br /> and Control Bureau</nobr>
        </p>
        <div class="logout"><a href="index.php">Log Out</a></div>
        <nav class="navbar">
          <ul class="navlinks">
          <li class="register_ops"><a href="#">Register Options</a>
            <ul class="dropdown_opts">
              <li class="dp_menu"><a class="rlink" href="adminRegistration.php"><nobr>Register Admin</nobr></a></li>
              <li class="dp_menu"><a class="rlink" href="officerRegistration.php"><nobr>Register Police</nobr></a></li>
              <li class="dp_menu"><a class="rlink" href="judgeRegistration.php"><nobr>Register Judge</nobr></a></li>
            </ul>
            </ul>
          </li>
        </nav>
    </header>
    <br>

    <div class="detail_tbl">
      <h3>DETAILS</h3>
      <table class="tblopts">
        <tr>
          <td><a class="a_tbl" href="adminDetails.php">Admins</a></td>
        </tr>
        <tr>
          <td><a class="a_tbl" href="policeDetails.php">Police Officers</a></td>
        </tr>
        <tr>
          <td><a class="a_tbl" href="judgeDetails.php">Judges</a></td>
        </tr>
      </table>
    </div>


  </body>
</html>
