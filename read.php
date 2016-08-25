<!doctype html>
<html>
    <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        a{
            color: white;
        }
        a:hover{
            color: white;
            text-decoration: none;
        }
    </style>
    </head>
    <body>        
<?php
 
include "db.php";
$id = $_GET['id'];

$sql = "SELECT * FROM list WHERE list_id=$id";
$query = mysqli_query($db_con, $sql); 
        

if ($query) {
                        
    while($row = mysqli_fetch_assoc($query)){ ?>
    <form class="form-horizontal">
          <div class="form-group">
            <p class="col-sm-2 control-label">ID:</p>
            <div class="col-sm-10">
              <p class="form-control-static"><?=$row['list_id']; ?></p>
            </div>
          </div>
           <div class="form-group">
            <p class="col-sm-2 control-label">NAME:</p>
            <div class="col-sm-10">
              <p class="form-control-static"><?=$row['list_name']; ?></p>
            </div>
          </div>
           <div class="form-group">
            <p class="col-sm-2 control-label">SURNAME:</p>
            <div class="col-sm-10">
              <p class="form-control-static"><?=$row['list_surname']; ?></p>
            </div>
          </div>
           <div class="form-group">
            <p class="col-sm-2 control-label">PHONE NUMBER:</p>
            <div class="col-sm-10">
              <p class="form-control-static"><?=$row['list_phone']; ?></p>
            </div>
          </div>
            </div>
          </div>
        </form>                        

 <?php   }
}

    ?>

        <button class="btn btn-success"><a href="list.php">Back</a></button>


    </body>
</html>