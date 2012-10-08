<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <base href="<?php echo base_url(); ?>" />
        <?php echo $styles; ?>
        <?php echo $scripts; ?>
        <style>
            .login-box{
                width:312px;
                margin-left:auto;
                margin-right:auto;
                margin-top:309px;
                padding-left:28px;
            }
        </style>
    </head>

    <body>
        <div class="well login-box">
            
            <?php echo $region['notices']; ?>
            <br>
             <?php echo $content; ?>
        </div>
        
    </body>    
</html>