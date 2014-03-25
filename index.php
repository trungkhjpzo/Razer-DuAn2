<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include_once 'head.php'; ?>
        <script type="text/javascript">
            $(document).ready(function(){
                // Bat dau slider
                $('.bxslider').bxSlider({
                    speed: 1000,
                    auto: true,
                    pause: 5000,
                    controls: false,
                    pager: false
                });
                // Ket thuc slider
            });
        </script>
        <title>Template</title>
    </head>
    <body id="home">
        <?php include_once 'header.php'; ?>
        <div id="content">
            <div id="slider">
                <ul class="bxslider">
                    <li><img src="images/slider/01.jpg" /></li>
                    <li><img src="images/slider/02.jpg" /></li>
                    <li><img src="images/slider/03.jpg" /></li>
                    <li><img src="images/slider/04.jpg" /></li>
                    <li><img src="images/slider/05.jpg" /></li>
                </ul>
            </div>
            <?php include_once 'footer.php'; ?>
        </div>
    </body>
</html>
