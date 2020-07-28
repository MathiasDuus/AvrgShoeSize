<!DOCTYPE html>
<html>
    <head>
        <title>Registrering</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="../css/Style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        
    </head>
<body onload="getheader();">        
    <header id="header">
    </header>
<div id="front" class="row">

    <div id="reg" class="container">
        <div class="row">
            <div class="col-sm">
                <form action="bin/senddata.php" method="post">
                    <div class="form-group">

                      <label for="Navn">Navn</label>
                      <input type="text" class="form-control" id="Navn" name="Navn" required>

                    </div>
                    <div class="form-group">

                      <label for="Email">Email address</label>
                      <input type="email" class="form-control" id="Email" name="Email" required>
                    </div>  

                    <div class="form-group">
                      <div class="row">
                        <div class="col">

                            <label for="Alder">Alder</label>
                            <input type="number" min="0" class="form-control" id="Alder" name="Alder" required>

                        </div>
                        <div class="col">

                          <label for="Sko">Skostørelse</label>
                          <input type="number" min="0" class="form-control" id="Sko" name="Sko" required>

                        </div>
                      </div>
                    </div>

                    <button type="submit" id="buttonreg" name="buttonreg" class="btn ">Send</button>
                </form>
            </div>
        </div>
    </div>   

<!--        All Java Script files  -->
        <script src="../js/getheader().js" type="text/javascript"></script>
  </body>
</html>
