<?php
require_once('connection.php'); ?>

<html>
<header>

</header>
<body>

<!-- Hallo World -->

<section class="top">

   <div class="top-left">
      <div class="burger-menu-icon">
         <img class="burger-menu" src="Hamburger_icon.svg.png">
      </div>

      <div class="icon">
         
         <img src="icon.png">
         <p>Kontakte</p>
      </div>
   </div>

   <div class="top-search">
      <input type="text" class="search-input" id="search-input" placeholder="Search"/>
      <div id="live-search-result"  class="live-search-result"  ></div>
   </div>

</section>

<section class="buttom">

   <section class="left">
      <input type="button" value="First" id="first">
      <input type="button" value="second" id="second">
   </section>

   <section class="right" >

   <?php

      $sql = "SELECT firstName FROM contacts ;";
      $result = MySQLi_query($connection, $sql);

      echo '<ul>';
      while($row = mysqli_fetch_array($result)){
      ?>
      <li onclick="">
         <?php echo $row['firstName'] ?>
      </li>

      <?php
      }

   ?>
   </section>

</section>
   <div class="add">
   <img src="add.png">
   </div>
</body>

<style>

   *{
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      font-family: Calibri, sans-serif;
      /* outline: 1px solid red; */
   }

   img {
      display: block;
      aspect-ratio: 1/1;
   }

   .top-left img{
      width: 40%;
   }

   ul{
      list-style-type: none;
      text-align: left;
      padding: 3px;

      -webkit-box-shadow: 0px 0px 3px 0px #000000;
      box-shadow: 0px 0px 3px 0px #000000;
    }

    .live-search-result li{
      display: flex;
      align-items: center;
    }


    .live-search-result img{
      width:3rem;
    }
    .live-search-image{
      margin-right: 1rem;
      border-radius: 50%;
      overflow: hidden;
    }

   .top{
      display: flex;
      padding: 0.5rem;
      margin-inline: 1.1rem;
   }

   .top-left{
      display: flex;
      justify-content: center;
      align-items: center;
      justify-items:center ;
      text-align: center;
      margin-right: 1.9rem;
   }
   .icon{
      display: flex;
      align-items: center;
      font-size: 1.5rem;
   }

   .icon *{
      flex-shrink: 1;
   }

   .burger-menu-icon{
      width: 5rem;
      cursor: pointer;
   }

   .top-search{
      width:100%;
      display: flex;
      align-items: center;
      flex-direction: row;
   }


   .search-input{
      padding: 10px;
      margin-right: 10px;
      background-color: #f1f3f4;
      border:none;
      border-radius: 3px;
      max-width:  45rem;
      flex:1;
      font-size: large;
    }

    .search-input:focus{
      outline:none;
      background:white;
      -webkit-box-shadow: 0px 0px 3px 0px #000000;
      box-shadow: 0px 0px 3px 0px #000000;
    }

    #live-search-result{
      background-color: white;
      position: absolute;
      width: 100%;
      left: 0%;
      top: 0%;
      z-index: 100;
   }

 .buttom{
      display: grid;
      grid-template-columns: 15rem 1fr;
   }

   .left{

      height: 100vh;
      display:flex;
      flex-direction: column;

   }

   .right{
      position: relative;
      height:100vh;
   }

   .add{
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 4rem;
      height: 4rem;
      cursor:pointer;
   }

   .add img{
      width: 100%;
      background-color: white;

   }

/*
   .top {
      padding: 0.2rem;
      width: 100%;
      display: flex;
      align-items: flex-start;
   }

   .top > div{
      position: relative;
      max-width: fit-content;
      padding-inline: 1rem;
      display: flex;
      align-items: center;
      align-self: center;
      margin-left: 10px;
   }

   .top-left{
      width: fit-content;
      display: flex;
      flex-wrap: nowrap;
      justify-content: left;
      flex-shrink: 0;
   }





    .search-input{
      padding: 10px;
      margin-right: 10px;
      background-color: #f1f3f4;
      border:none;
      border-radius: 3px;
      width: 50rem;
      font-size: large;

    }

    .search-input:focus{
      outline:none;
      background:white;
      -webkit-box-shadow: 0px 0px 3px 0px #000000;
      box-shadow: 0px 0px 3px 0px #000000;

    }

   */


</style>

<script type="text/javascript" src="scripts.js"></script>
</html>