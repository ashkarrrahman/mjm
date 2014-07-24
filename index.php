<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/superHeader.php' ?>
</head>

<body>
   <div id="page"><!-- Page starts-->

        <ul id="menu">
            <li data-menuanchor="firstPage"><a href="#firstPage">First slide</a></li>
            <li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
            <li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
        </ul>
        <div id="fullpage">
            <div class="section " id="section0">
                <h1>fullPage.js</h1>
                <p>Configure the easing jQuery UI effect!</p>
                <img src="images/home2.png" alt="fullPage" >
            </div>
            <div class="section" id="section1">
                <div class="intro">
                    <!--img src="imgs/1.png" alt="Cool" /-->
                    <h1>easeOutBack</h1>
                    <p>This example is working with `easeOutBack` effect instead of the default</p>
                    <p>You can see more about them <a href="http://jqueryui.com/resources/demos/effect/easing.html" target="_blank">here</a></p>
                </div>
            </div>
            <div class="section" id="section2">
                <div class="intro">
                    <h1>Cool uh?</h1>
                    <p>Choose the best easing effect for your site!</p>
                </div>
            </div>
        </div>


   </div><!-- Page ends -->



<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- Fullpage.js -->
 <script type="text/javascript" src="js/jquery.fullPage.js"></script>

</body>

</html>