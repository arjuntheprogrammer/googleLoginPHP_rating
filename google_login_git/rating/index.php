<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include 'head.htm';?>


<body class="home">
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>

    <div class="container">
        <?php include 'body1.htm';?>
    
        <div class="row headline">
           
            <div class="span4">
                <h3>Welcome to Webczar. <br /> A Big Theme in a Small Package.</h3>
                <!--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium vulputate magna sit amet blandit.</p>
                <p>Cras rutrum, massa non blandit convallis, est lacus gravida enim, eu fermentum ligula orci et tortor. In sit amet nisl ac leo pulvinar molestie. Morbi blandit ultricies ultrices.</p>
                <a href="#"><i class="icon-plus-sign"></i>Read More</a>-->
            </div>
        </div>
   
       

    

<!--////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div class="row gallery-row">
            <!-- Begin Gallery Row -->

            <div class="span12">
                <h5 class="title-bg">Recent Work
                    <small>That we are most proud of</small>
                    <!--<button class="btn btn-mini btn-inverse hidden-phone" type="button">View Portfolio</button>-->
                </h5>

                <!-- Gallery Thumbnails
        ================================================== -->

                <div class="row clearfix no-margin">
                    <ul class="gallery-post-grid holder">

                        <!-- Gallery Item 1 -->
                       <?php 
                        for( $i = 1; $i<=8; $i++ ) {
                       ?>
                        <li class="span3 gallery-item" data-id="id-<?php print $i ?>" data-type="illustration">
                            <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Product 1" data-rel="prettyPhoto"></a>
                                        <!--<a href="gallery-single.php" class="item-details-link"></a>-->
                                    </span>
                            </span>
                            <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                            
                            <span class="project-details">
                                <form action="gallery-single.php" method="POST">
                                     <!--<input type="hidden" name="action" value="submit" />-->
                                     <input type="Submit" class="btn btn-warning" name="product" value="Product <?php print $i ?>">
                                </form>
                                <!--<a href="gallery-single.php">Product <?php print $i ?></a>-->
                                Short description of Product<?php print $i ?>
                            </span>
                        </li>

                    <?php   
                        }
                    ?>


                    </ul>
                </div>
            </div>

        </div>
 <!--////////////////////////////////////////////////////////////////////////////////////////////////////       -->

        
    </div>

    <?php include 'footer.htm';?>

</body>

</html>