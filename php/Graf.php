<!DOCTYPE html

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../css/Style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        
        <title>Graf </title>
    </head>
     <body onload="getheader();">        
        <header id="header">
        </header>
<div class="container">
    <div class="row">       
          <?php  
          
    include 'bin/getdata.php';
    
         ?>
        

        
    </div>
</div>
         
<!--        All Java Script files  -->
        <script src="../js/getheader().js" type="text/javascript"></script>
    </body>
</html>
