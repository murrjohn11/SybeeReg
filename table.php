<?php
  include 'sql.php';
?>
<html>
  <head>
    <title>Print Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="./css/print.css">  
  </head>
  <body>
      <center>
        <h1><a href="index.html"> USC BA Convention 2018</h1></a>
      </center>
      <center>
      <table class="table-bordered table-striped" id="tab">
        <thead>
            <td class="td1"></td>
            <td class="td1">ID Number</td>
            <td class="td1">Full Name</td>
            <td class="td1">Course & Year</td>
            <td class="td1">Time In</td>        
        </thead>
        <tbody>
          <?php
              $count = 1;
              $students = $SQL->retrieveTimeins('BS-OM');
              foreach($students as $row){
          ?>
          <tr>
            <td class="td1"><?php echo $count;?></td> 
            <td class="td1"><?php echo $row['idnum'];?></td> 
            <td class="td1"><?php echo $row['name'];?></td> 
            <td class="td1"><?php echo $row['courseyr'];?></td>
            <td class="td1"><?php echo $row['timein'];?></td>
          </tr>
          <?php $count++; }?>
          </tbody>
      </table>      
      </Center>
  </body>
</html>