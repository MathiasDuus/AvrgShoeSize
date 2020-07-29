<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../css/Style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
 <body onload="getheader();">
        
        <title>Data </title>
    </head>
 <body onload="getheader();">
    <header id="header">
    </header>
         
    <div id="reg" class="container">
        <div class="row">
           
                
                
        <?php  
            include 'bin/getdata.php';
            $numRow=numRow();

            $ID = 1;    

            for($ID;$ID<=$numRow;$ID++){
            list($navn, $alder, $skostr) = checkProject($ID);

        ?>
        <div class="col-sm-4" id="datacard">
                <div class="card" style="width: 18rem;">
                  <div class="card-header">
                <?php echo $navn;?>
                  </div>
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item"><strong>Skostørelse: </strong><?php echo $skostr;?></li>
                      <li class="list-group-item"><strong>Alder: </strong><?php echo $alder;?></li>
                  </ul>
                </div>
            </div> 
                
             <?php
    }
     ?> 
        </div>
    </div>
     
<!--        All Java Script files  -->
    <script src="../js/getheader().js" type="text/javascript"></script>
    
</body>
</html>
