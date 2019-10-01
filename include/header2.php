<!DOCTYPE html>
<html lang="en">
<head><title>Login</title>
    <link href="" rel="icon" type="image"> 
    <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <link href="css2/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css2/font-awesome.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/grid.css" rel="stylesheet" type="text/css" media="screen">



    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap-carousel.js"></script>
    <script type="text/javascript" src="js/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="js/bootstrap-typeahead.js"></script>
    <script type="text/javascript" src="js/bootstrap-popover.js"></script>
    <script type="text/javascript" src="js/bootstrap-tab.js"></script>
    <script type="text/javascript" src="scripts/swfobject/swfobject.js"></script>
    <script type="text/javascript">
        var flashvars = {};
        flashvars.cssSource = "piecemaker.css";
        flashvars.xmlSource = "piecemaker.xml";

        var params = {};
        params.play = "true";
        params.menu = "false";
        params.scale = "showall";
        params.wmode = "transparent";
        params.allowfullscreen = "true";
        params.allowscriptaccess = "always";
        params.allownetworking = "all";

        swfobject.embedSWF('piecemaker.swf', 'piecemaker', '1000', '434', '10', null, flashvars,    
            params, null);

    </script>


    <!----hover pop up -->
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/mouseover_popup.js" type="text/javascript"></script>
    <div style="display: none;
        color:white;
        position: absolute;
        z-index:100;
        width:auto;
        height:auto;"
        id="preview_div"></div>




    <!-- notify -->
    <link href="css2/notify/jquery_notification.css" type="text/css" rel="stylesheet" media="screen, projection"/>
    <script type="text/javascript" src="js/notify/jquery_notification_v.1.js"></script>
    <!-- notify end -->
   
    

</head>