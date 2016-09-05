<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Video's</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
</head>
<style>
video {
    display: block;
    margin: 0 auto;
    width: 70% !important;
    height: auto !important;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}

html {
    height: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background: #000000;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to bottom, #000000, #434343);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to bottom, #000000, #434343);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

body {
    height: 100%;
    overflow: hidden;
}


/* new code */

a {
    cursor: pointer;
}


/* Global Variables 
***************************************************************/


/* Heading and buttons */


/* Secondary headings */


/* Main text color */


/* Borders and chevrons */


/* Secondary page color */

.border-box {
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -o-box-sizing: border-box;
    -ms-box-sizing: border-box;
}


/* Element Variables
   Change @bar-w to adjust entire button size.
*/


/* Start Styles - Side Menu 
***************************************************************/

.panel {
    -webkit-transition: 0.2s;
    -moz-transition: 0.2s;
    -o-transition: 0.2s;
    transition: 0.2s;
    transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    position: fixed;
    z-index: 9999;
    top: 0;
    height: 100%;
    width: 450px;
    /* ul */
    /* Ninja Button styles */
    /* Ninja Button */
    /* Ninja Button Active */
}

.panel ul {
    list-style-type: none;
    position: absolute;
    z-index: 1;
    margin: 0;
    padding: 0;
    top: 20%;
    left: 60px;
    right: 60px;
    height: auto;
    text-align: left;
    /* li & a */
}

.panel ul li,
.panel ul a {
    display: inline-block;
    float: left;
    width: 100%;
    line-height: 1.4;
    padding: 0;
    font-weight: 200;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}

.panel ul li.menu-label {
    font-size: 16px;
    margin: 30px 0 10px 0;
}

.panel ul li.menu-label:first-child {
    margin-top: 0;
}

.panel ul a {
    font-size: 22px;
    text-transform: uppercase;
}

.panel ul li.menu-contacts a {
    font-size: 16px;
    text-transform: inherit;
}

.panel .ninja-btn {
    -webkit-transition: 0.2s;
    -moz-transition: 0.2s;
    -o-transition: 0.2s;
    transition: 0.2s;
    transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    display: inline-block;
    float: left;
    cursor: pointer;
    padding: 34.28571429px 30px;
    position: absolute;
    z-index: 2;
    top: 0;
    width: 30px;
    height: 20.18181818px;
}

.panel .ninja-btn span,
.panel .ninja-btn span:before,
.panel .ninja-btn span:after {
    -webkit-transition: 0.3s;
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    width: 30px;
    height: 2px;
}

.panel .ninja-btn span {
    position: relative;
    display: inline-block;
    float: left;
    margin-top: 9.09090909px;
}

.panel .ninja-btn span:before,
.panel .ninja-btn span:after {
    content: "";
    position: absolute;
    left: 0;
}

.panel .ninja-btn span:before {
    top: -9.09090909px;
}

.panel .ninja-btn span:after {
    top: 9.09090909px;
}

.panel .ninja-btn.active span {
    background-color: transparent;
}

.panel .ninja-btn.active span:before,
.panel .ninja-btn.active span:after {
    top: 0;
}

.panel .ninja-btn.active span:before {
    transform: rotate(-135deg);
    -webkit-transform: rotate(-135deg);
    -moz-transform: rotate(-135deg);
    -o-transform: rotate(-135deg);
    -ms-transform: rotate(-135deg);
}

.panel .ninja-btn.active span:after {
    -webkit-transition-delay: 0.09s;
    -moz-transition-delay: 0.09s;
    -o-transition-delay: 0.09s;
    -msa-transition-delay: 0.09s;
    transition-delay: 0.09s;
    transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
    -moz-transform: rotate(135deg);
    -o-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
}


/* Panel */

.panel-overlay {
    position: fixed;
    top: 0;
    z-index: 9998;
    width: 100%;
    height: 100%;
    display: none;
    background-color: rgba(0, 0, 0, 0.35);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.05)), color-stop(100%, rgba(0, 0, 0, 0.6)));
    cursor: pointer;
}


/* overlay */

.panel-white {
    background-color: #FFFFFF;
    /* ul */
}

.panel-white ul {
    /* li */
}

.panel-white ul li,
.panel-white ul a {
    color: #8e8e93;
}

.panel-white ul li a:hover,
.panel-white ul li.active a {
    color: #007aff;
}

.panel-white .ninja-btn {
    background-color: #FFFFFF;
}

.panel-white .ninja-btn span,
.panel-white .ninja-btn span:before,
.panel-white .ninja-btn span:after {
    background-color: #007aff;
}


/* panel white */

.panel-black {
    background-color: #000000;
    /* ul */
}

.panel-black ul {
    /* li */
}

.panel-black ul li,
.panel-black ul a {
    color: #ffffff;
}

.panel-black ul li a:hover,
.panel-black ul li.active a {
    color: #FFFFFF;
}

.panel-black .ninja-btn {
    background-color: #000000;
}

.panel-black .ninja-btn span,
.panel-black .ninja-btn span:before,
.panel-black .ninja-btn span:after {
    background-color: #007aff;
}


/* panel black */

.panel-brand {
    background-color: #007aff;
    /* ul */
    /*
  .ninja-btn.active span:before,
  .ninja-btn.active span:after {
    background-color: rgba( 0, 0, 0, 0.50 );
  }*/
}

.panel-brand ul {
    /* li */
}

.panel-brand ul li,
.panel-brand ul a {
    color: rgba(0, 0, 0, 0.5);
}

.panel-brand ul li a:hover,
.panel-brand ul li.active a {
    color: #FFFFFF;
}

.panel-brand .ninja-btn {
    background-color: #007aff;
}

.panel-brand .ninja-btn span,
.panel-brand .ninja-btn span:before,
.panel-brand .ninja-btn span:after {
    background-color: #FFFFFF;
}


/* panel brand */

.panel.left {
    left: -450px;
}

.panel.left .ninja-btn {
    left: 100%;
}


/* Panel Left Active */

.panel.left.active {
    left: 0;
}

.panel.left.active .ninja-btn {
    left: 100%;
    margin-left: -90px;
}


/* Panel Menu Active */

.panel.right {
    right: -450px;
}

.panel.right .ninja-btn {
    right: 100%;
}


/* Panel Right Active */

.panel.right.active {
    right: 0;
}

.panel.right.active .ninja-btn {
    right: 100%;
    margin-right: -90px;
}


/* Panel Menu Active */

label {
    position: relative;
    display: inline-block;
    margin: 0;
}

label:after {
    content: '▼';
    position: absolute;
    width: 37px;
    color: #999;
    font-weight: bold;
    font-size: 16px;
    right: 2px;
    bottom: 8px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    pointer-events: none;
    z-index: 2;
    text-align: center;
}

label:before {
    content: '';
    right: 2px;
    top: 2px;
    width: 37px;
    height: 34px;
    background: #242424;
    position: absolute;
    pointer-events: none;
    display: block;
    z-index: 1;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

label select {
    position: relative;
    width: 250px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: #111;
    color: #999;
    border: none;
    outline: none;
    font-size: 14px;
    padding: 10px 9px;
    margin: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    cursor: pointer;
    height: 38px;
}
</style>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <video id=viddiv controls poster="poster.png">
        <source id="vidsrc" src="" type="video/mp4">
    </video>
    <!-- Menu -->
    <div class="panel panel-black left">
        <!-- Overlay div -->
        <div class="overlay"></div>
        <!-- Animated button -->
        <a class="ninja-btn" title="menu"><span></span></a>
        <!-- Menu list -->
        <ul>
            <li class="menu-label">Available Video's</li>
            <li>
                <label>
                    <select name='options' class='vidSource'>
                        <option value=''>Please Select a video</option>
                        <?php
                          //fetch and list all the files found in the video folder. Make sure to change the path to your video folder.
                          
                          $replacements = array('./video/','.mp4');
                          
                          $videos=glob('./video/*.mp4');
                          
                          //sort so the newest file is first. 
                          usort($videos, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));
                          foreach($videos as $video){
                             $videoname = str_replace($replacements,'',$video);
                              echo " <option class='isVideo' value='$video'>$videoname</option>";
                          }
                        ?>
                    </select>
                </label>
            </li>
        </ul>
    </div>
    <!-- panel -->
    <div class="panel-overlay"></div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
    $(window).load(function() {

        $(".ninja-btn, .panel-overlay, .panel li a ").click(function() {
            toggleMenuState();
        });

    });


    $(window).on("load resize", function() {
        var menuHeightOffset = $(".panel").find("ul").height() / 2;

        $(".panel").find("ul").css({
            "margin-top": -menuHeightOffset
        });
    });

    function toggleMenuState() {

        $(".ninja-btn, .panel-overlay, .panel").toggleClass("active");
        /* Check panel overlay */
        if ($(".panel-overlay").hasClass("active")) {
            $(".panel-overlay").fadeIn();
        } else {
            $(".panel-overlay").fadeOut();
        }
    }

    $(document).ready(function() {
        $('.vidSource').on('change', function() {
            $('#vidsrc').attr('src', $(this).val());
            $('#viddiv').attr('poster', 'loading.png');
            $('#viddiv')[0].load();
            $('#viddiv')[0].play();
            toggleMenuState();
            return false;
        });
    });
    </script>
</body>

</html>
