<?php

session_start();

if (isset($_SESSION["id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user_1
            WHERE id = {$_SESSION["id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta charset="utf-8" />
    <title>RunRoot</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
@import url(https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic);

.cf:before,
.cf:after {
  content: " ";
  display: table;
}


.cf:after {
  clear: both;
}


.cf {
  zoom: 1;
}

*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}


body {
  font-size: 100%;
  font-family: 'PT Sans', sans-serif;
  background-color: #f3f3f3;
}

.left {
  text-align: left;
}


.center {
  text-align: center;
}


.right {
  text-align: right;
}


.justify {
  text-align: justify;
}


.uppercase {
  text-transform: uppercase;
}

.padding1rem {
  padding: 1rem;
}


.paddingRight2rem {
  padding: 0 2rem 0 0;
}

a {
  color: white;
}

i {
  color: #d1d4d9;
  margin: 0 1rem 0 0;
}

header {

  max-width: 100%;
  height: 66px;
  margin: 0 auto;
  overflow: hidden;
  color: white;
  z-index: 1;
  background-color: #4a4e54;
  border: 1px solid grey;
  display: flex;
  justify-content: space-between;
  opacity: 0.5;
}


.floatLeft {
  float: left;
}


.floatRight {
  float: right;
}


.posAbs {
  position: absolute;
}


.third {
  width: 33.3333%;
}


.half {
  width: 50%;
}


.twoThird {
  width: 66.6666%;
}


.quarter {
  width: 25%;
}


label {
  cursor: pointer;
  border-right: 1px solid #d1d4d9;
  display: block;
  height: 4rem;
  width: 4rem;
  position: relative;
}
label span {
  border-radius: 15%;
  height: 3px;
  width: 32px;
  background-color: white;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateY(-50%) translateX(-50%);
  transition: all 0.3s ease-out;
}
label span:before {
  border-radius: 15%;
  position: absolute;
  content: "";
  height: 100%;
  width: 100%;
  background-color: white;
  top: 400%;
  transition: all 0.3s ease-out;
}
label span:after {
  border-radius: 15%;
  position: absolute;
  content: "";
  height: 100%;
  width: 100%;
  background-color: white;
  top: -400%;
  transition: all 0.3s ease-out;
}


label:hover span {
  height: 0;
  transition: all 0.3s ease-out;
}
label:hover span:before {
  height: 3px;
  transform: rotate(-45deg);
  transition: all 0.3s ease-out;
}
label:hover span:after {
  height: 3px;
  transform: rotate(45deg);
  transition: all 0.3s ease-out;
}




nav {
  border-left: 1px solid #d1d4d9;
  border-right: 1px solid #d1d4d9;
  border-bottom: 1px solid #d1d4d9;
  max-width: 300px;
  background-color: white;
  transform: translateX(-100%) scale(1, 0.1);
  transform-origin: top left;
  transition: all 0.3s ease-out;
}
nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
nav ul li {
  border-top: 1px solid #efefef;
  opacity: 0;
  transform: translateX(-100%);
  transition: all 0.6s ease-out;
}
nav ul li a {
  transition: all 0.3s ease-out;
  line-height: 1rem;
  text-decoration: none;
  color: #8a8d92;
  display: block;
  padding: 1rem;
}
nav ul li:first-child {
  border-top: none;
}
nav ul li:hover a {
  color: white;
  background-color: #6d747e;
  transition: all 0.3s ease-out;
}
nav ul li:hover a i {
  color: white;
}


.navBtn:checked ~ nav {
  transform: translateX(0);
  transition: all 0.3s ease-out;
}


.navBtn:checked ~ nav ul li {
  opacity: 1;
  transform: translateX(0);
  transition: all 0.6s ease-out;

}


.navBtn {
  display: none;
  position: absolute;
  top:50px;
}

.container {
  width: 900px;
  max-width: 100%;
  margin-right: auto;
  margin-left: auto;
}

.container h2 {
  text-transform: uppercase;
  text-align: center;
  font-size: 40px;
  margin-bottom: 10px;
}

.container .subtitle {
  text-align: center;
  margin: 0;
  margin-bottom: 80px;
}

.services {
  width: 100%;
  background: url(zemekoule.jpg);

}

.services h2 {
  color: #000000;
  margin-top: 120px;
}

.services .serv-list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  text-align: center;
  padding-left: 0;
}

@media (max-width: 768px) {
  .services .serv-list {
    width: 100%;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
}

.services .serv-item {
  width: 250px;
}

@media (max-width: 768px) {
  .services .serv-item {
    width: 100%;
    margin-bottom: 20px;
  }
}

.services .serv-img {
  display: inline-block;
  border: 3px solid #fed136;
  padding: 15px;
  border-radius: 50%;
}

.services .serv-img img {
  height: 40px;
  width: 45px;
}

.contact {
  background: url("../map.png") right bottom/auto no-repeat;
  background-color: #222;
  padding: 110px 0 115px;
}

.contact h2 {
  color: #fff;
  margin-top: 10px;
}

form {
  font-family: "Montserrat", sans-serif;
  text-align: center;
  margin-top: 75px;
}

form .flex-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  gap: 30px;
  margin-bottom: 30px;
}

form .flex-column {
  width: 50%;
}

form .flex-column:first-child {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 30px;
}

form .flex-column input,
form .flex-column textarea {
  padding: 20px;
  font-size: 1rem;
  color: #333;
  border-radius: 5px;
}

form .flex-column input::-webkit-input-placeholder,
form .flex-column textarea::-webkit-input-placeholder {
  font-size: 1rem;
  color: #bbb;
  text-transform: uppercase;
  font-weight: 700;
}

form .flex-column input:-ms-input-placeholder,
form .flex-column textarea:-ms-input-placeholder {
  font-size: 1rem;
  color: #bbb;
  text-transform: uppercase;
  font-weight: 700;
}

form .flex-column input::-ms-input-placeholder,
form .flex-column textarea::-ms-input-placeholder {
  font-size: 1rem;
  color: #e4e4e4;
  text-transform: uppercase;
  font-weight: 700;
}

form .flex-column input::placeholder,
form .flex-column textarea::placeholder {
  font-size: 1rem;
  color: #e4e4e4;
  text-transform: uppercase;
  font-weight: 700;
}

form .flex-column textarea {
  width: 100%;
  height: 100%;
  resize: none;
}

form input[type="submit"] {
  text-transform: uppercase;
  font-weight: bold;
  font-size: 18px;
  color: #fff;
  border-radius: 3px;
  border: none;
  background-color: #fed136;
  height: 70px;
  width: 250px;
}

body {
  font-size: 100%;
  font-family: 'PT Sans', sans-serif;
  background-color: #f3f3f3;
}
 
 
body{
    background: url("pozadi.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}

main {
  margin: 0 auto;
  height: 70%;
  margin-top: -10rem;
  text-align: center;
}

        .flex-container {
          margin: 0 auto;
        width: 70%;
  display: flex;
  justify-content: space-between;
  background-color: rgba(30, 143, 255, 0);
}

.title {
  line-height: 1.5;
  top: 0;
  display: block;
  margin: 0 auto;
  margin-bottom: 3rem;
  font-size: 6rem;
  color: #fff;
  text-transform: uppercase;
}

.flex-container > div {
  background-color: #f1f1f1;
  margin: 10px;
  padding: 1rem;
  width: 20rem;
  font-size: 20px;
  opacity: 0.8;
  border-radius: 1rem;
}


.number{
    opacity: 0.1;
    font-size: 130px;
    display: block;
    line-height: 120px;
    position: relative;
    bottom: 120px;
}

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    margin-top: 100px;
    margin-left: 750px;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    top: 50px;    
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
.nadpis-tabulky{  
    text-align: center;
    margin-top: 150px;
}
 
    </style>
</head>
<body>
   <header>
    <div class="bar">
        <label class="floatLeft" for="navBtn"><span></span></label>
        <span class="floatRight paddingRight2rem"></span>
        </span>
    </div>
    </header> 
        <input type="checkbox" class="navBtn" id="navBtn" />
        <nav>
            <ul>
                <li>
                    <a href="tabulka.html"><i class="fa fa-table"></i>Table</a>
                </li>
                <li>
                    <a href="aktivita + calendar.html"><i class="fa fa-heart" ></i>Events</a>
                </li>
                <li>
                    <a href="skupina.html"><i class="fa fa-users"></i>Group</a>
                </li>
                <li>
                    <a href="muj-profil.html"><i class="fa fa-user"></i>My profile</a>
                </li>
                <li>
                    <a href="log in.html"><i class="fa fa-user"></i>Log in</a>
                </li>
            </ul>
        </nav>
    </header>
   <main>
    <h1 class="title">about us</h1>
    <div class="flex-container">
        <div>
        <p>New challenges await you every<br>day. They are categorised by<br>difficulty and you can choose<br>which one you feel like doing.<br>You get XP for completing<br> the different challenges. XP is <br>used to give you higher<br>levels for which you get<br> bonus points, thanks to which<br> you are on the leaderboard.</p>
      </div>
        <div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore placeat amet sit voluptatum nemo pariatur!</p></div>
        <div><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, earum!</p></div>  
      </div>  
      <h1 class="nadpis-tabulky">Table of the 10 best employees</h1>
    <table class="styled-table">
      <thead>
          <tr>
              <th>Name</th>
              <th>Points</th>
          </tr>
      </thead>
      <tbody>
          <tr  class="active-row">
              <td>Joelle</td>
              <td>15475</td>
          </tr>
          <tr>
              <td>Rina</td>
              <td>15047</td>
          </tr>
          <tr>
            <td>Thomas</td>
            <td>14259</td>
        </tr>
        <tr>
            <td>Joe</td>
            <td>12547</td>
        </tr>
        <tr>
          <td>Melissa</td>
          <td>10269</td>
      </tr>
      <tr>
          <td>Carl</td>
          <td>10247</td>
      </tr>
      <tr>
        <td>Dom</td>
        <td>9831</td>
    </tr>
    <tr>
        <td>Faith</td>
        <td>9478</td>
    </tr>
    <tr>
      <td>Nigel</td>
      <td>9041</td>
  </tr>
  <tr>
      <td>Karen</td>
      <td>8897</td>
  </tr>
      </tbody>
  </table>
       
   </main>
</body>
</html>

    
    
    
    
    
    
    
    
    
    
    
