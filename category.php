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
    <body>
        <?php include_once 'header.php'; ?>
        <div id="content">
            Content
            <?php include_once 'footer.php'; ?>
        </div>
    </body>
</html>
