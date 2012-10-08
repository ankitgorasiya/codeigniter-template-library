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

    </head>

    <body>

        <!-- Top Nav  --> 
        <?php
        if (!empty($region['top_nav'])) {
            print $region['top_nav'];
        }
        ?>

        <div class="row">
                <?php
                if (!empty($region['sidebar_nav'])) {
                    print $region['sidebar_nav'];
                }
                ?>

                <div class="nine columns">
                    
                    <?php echo $region['notices']; ?>
                    
                    <!-- Page Title  -->
                    <?php if (!empty($page_title)): ?>
                        <div class="well well-thinner">
                            <h2><?php print $page_title; ?></h2>
                            <?php if (!empty($page_title_sub)): ?>
                                <h5><em><?php print $page_title_sub; ?></em></h5>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>



                    <!-- Seide Bar  --> 
                    <?php if (!empty($region['action_buttons'])): ?> 
                        <div class="well well-thinner">
                            <?php print $region['action_buttons']; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Search Bar  -->    
                    <?php
                    if (!empty($region['search'])) {
                        print $region['search'];
                    }
                    ?>

                    <!-- Main Content  -->
                    <?php echo $content; ?>

                </div>
            </div>
        </div>
    </body>
</html>