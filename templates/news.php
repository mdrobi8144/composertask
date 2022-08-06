<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Washington News Post</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top:45px">
                <div class="col-md-6 col-md-offset-3">
                    <h4>Latest News Feed</h4><hr>                    
                    <?php 
                        if(sizeof($headlines) > 0){ ?>
                            <ul class="nav nav-pills nav-stacked">
                            <?php  foreach($headlines as $h){
                    ?>
                            <li role="presentation" class="active"><a href="<?php echo $h["link"]; ?>"><?php echo $h["text"]; ?></a></li>
                    <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>