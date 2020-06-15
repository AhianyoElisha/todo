<?php
require_once("../Now/operation.php");
require_once("../Now/mark.php");

 ?>

<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>To do list</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
        <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
        <!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous"> -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
        <!-- <script type="text/javascript" src="./js/bootstrap-datetimepicker.min.js"></script> -->
        <!-- <script type="text/javascript" src="./js/demo.js"></script> -->
        <!-- <link href="./css/bootstrap-datetimepicker.min.css" type="text/css" media="all" rel="stylesheet" /> -->
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/styles1.css">
        <link rel="stylesheet" href="./css/styles2.css">
        <link rel="stylesheet" href="./css/styles3.css">
        <link rel="stylesheet" href="./css/styles4.css">
        <link rel="stylesheet" href="./css/table.css">
        <style media="screen">
        .custom-checkbox .custom-control-indicator {
           content: "";
           display: inline-block;
           position: relative;
           width: 30px;
           height: 10px;
           background-color: #818181;
           border-radius: 15px;
           margin-right: 10px;
           -webkit-transition: background .3s ease;
           transition: background .3s ease;
           vertical-align: middle;
           margin: 0 16px;
           box-shadow: none;
         }
           .custom-checkbox .custom-control-indicator:after {
             content: "";
             position: absolute;
             display: inline-block;
             width: 18px;
             height: 18px;
             background-color: #f1f1f1;
             border-radius: 21px;
             box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
             left: -2px;
             top: -4px;
             -webkit-transition: left .3s ease, background .3s ease, box-shadow .1s ease;
             transition: left .3s ease, background .3s ease, box-shadow .1s ease;
           }
         .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator {
           background-color: #84c7c1;
           background-image: none;
           box-shadow: none !important;
         }
           .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator:after {
             background-color: #84c7c1;
             left: 15px;
           }
         .custom-checkbox .custom-control-input:focus ~ .custom-control-indicator {
           box-shadow: none !important;
         }

        </style>
    </head>

  <body>
  <?php include("../Now/container/modals/deletemodal.php")?>
  <?php include("../Now/container/container.php") ?>
  <?php include("../Now/container/modals/addmodal.php") ?>
  <?php include("../Now/container/modals/editmodal.php") ?>
  <?php include("../Now/container/modals/readmodal.php") ?>


    <!-- ################################################################################################################# -->
    <script src="../Now/js/delete.js" charset="utf-8"></script>
    <script src="../Now/js/edit.js" charset="utf-8"></script>
      <script src="../Now/js/show.js" charset="utf-8"></script>
      <script src="../Now/js/date.js" charset="utf-8"></script>
  </body>
</html>
