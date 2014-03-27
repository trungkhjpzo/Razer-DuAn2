<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include_once 'head.php'; ?>
</head>
<title>Product</title>
<body>
    <?php include_once 'header.php';?>
    <div id="product">
        <div id="picture">
            <img src="images/01-1.jpg"></img>
            <img src="images/01-2.jpg"></img>
        </div>
        <div id="detail">
            <p id="productName">Product name</p>
            <p id="productPrice">0 USD</p>
            <p id="productCode">ABC123</p>
            <input id="addCart" type="submit" name="btnAddCart" value="Add this product into cart"></input>
        </div>
    </div>
    <?php include_once 'footer.php';?>
</body>
</html>