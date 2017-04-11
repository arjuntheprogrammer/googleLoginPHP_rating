<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include 'head.htm';?>

<body>
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>

    <div class="container main-container">

        <?php include 'body1.htm';?>
        <div class="row">

            <!-- Gallery Items
        ================================================== -->
            <div class="span12 gallery-single">

                <div class="row">
                    <div class="span6">
                        <img src="img/gallery/gallery-img-1-full.jpg" class="align-left thumbnail" alt="image">
                    </div>
                    <div class="span6">
                        <?php
                            $name = $_POST['product'];
                            
                        ?>
                        <h2><?php echo $name; ?></h2>
                        <p class="lead">Short description of product...........................</p>
                        <p>Description of product.......................................................................................</p>

                        <ul class="project-info">
                            <li>
                                <h6>Date:</h6> 09/12/15</li>
                            <li>
                                <h6>Client:</h6> John Doe, Inc.</li>
                            <li>
                                <h6>Services:</h6> Design, Illustration</li>
                            <li>
                                <h6>Art Director:</h6> Jane Doe</li>
                            <li>
                                <h6>Designer:</h6> Jimmy Doe</li>
                             <li>
                                  <?php include 'demo/page.html';?></li>    
                        </ul>

                        <!--<button class="btn btn-inverse pull-left" type="button">Visit Website</button>
                        <a href="#" class="pull-right"><i class="icon-arrow-left"></i>Back to Gallery</a>-->
                    </div>
                </div>

            </div>
            <!-- End gallery-single-->

        </div>
    
    </div>
    <?php include 'footer.htm';?>

   

</body>

</html>