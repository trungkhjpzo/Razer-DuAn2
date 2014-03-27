<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include_once 'head.php'; ?>
        <script type="text/javascript">
            function changeMarginProduct()
            {
                var wWidth = window.innerWidth;
                var marginProduct = wWidth / 100;
                $(".product").css("margin", marginProduct + "px 1%");
            }
        </script>
        <title>Template</title>
    </head>
    <body onload="changeMarginProduct()" onresize="changeMarginProduct()">
        <?php include_once 'header.php'; ?>
        <div id="content">
            <div id="category">
                <div class="product left" name="product"></div>
                <div class="product left" name="product"></div>
                <div class="product left" name="product"></div>
                <div class="product left" name="product"></div>
                <div class="product left" name="product"></div>
                <div class="product left" name="product"></div>
                <div class="product left" name="product"></div>
                <div class="product left" name="product"></div>
                <div class="product left" name="product"></div>
                <div class="product left" name="product"></div>
                <div class="clear"></div>
            </div>
            <?php include_once 'footer.php'; ?>
        </div>
    </body>
</html>
