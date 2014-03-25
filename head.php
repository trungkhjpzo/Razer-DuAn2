        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/user.css" rel="stylesheet" type="text/css" />
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/parsley.js"></script>
        <script type="text/javascript" src="js/messages.vn.js"></script>
        <script type="text/javascript">
            var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;	
            if(navigator.userAgent.toLowerCase().indexOf('firefox') > -1)
            {
                document.write("<link href='css/fixFirefox.css' rel='stylesheet' type='text/css' />");
            }

            function changeLogo(logoImage)
            {
                var logo = document.getElementById('logo');
                logo.src = "images/" + logoImage + ".png";
            }
        </script>