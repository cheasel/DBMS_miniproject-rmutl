<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DBMS-miniproject</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.css" media="screen">
    <link rel="stylesheet" href="https://bootswatch.com/assets/css/custom.min.css">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
               <h1>DBMS-Mini Project</h1>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="alert alert-dismissible alert-warning text-center">
                        <h4>Temperature</h4>
                        <p id="display-temp" style="font-size: 60px;">Loading..</p>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="alert alert-dismissible alert-danger text-center">
                        <h4>Humidity</h4>
                        <p id="display-humi" style="font-size: 60px;">Loading..</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://bootswatch.com/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="https://bootswatch.com/assets/js/custom.js"></script>
        <script src="https://rmutl-db2.us/mysql.js"></script>
    </body>
</html>