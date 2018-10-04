<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="style/stylez.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="His Landscape Creation pictures" />
    <meta name="keywords" content="his landscape design photos, his landscape gallery, his creation landscape picx, creation landscape pics" /> 
</head>
<body>
<div id="wrapper">
    <!-- HEADER -->
        <?php include("include/header.inc.php"); ?>
    <!-- END HEADER -->

    <!-- MENUE -->
        <?php include("include/menu.inc.php"); ?>
    <!-- END MENUE -->

    <!-- MIDCOLMN -->
        <div id="galleryMidColmn">
                <div><img src="images/flowers1.jpg" alt="pic" onmouseover="choosePic('images/flowers1.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/pic1.jpg" alt="pic" onmouseover="choosePic('images/pic1.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/pic2.jpg" alt="pic" onmouseover="choosePic('images/pic2.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/pic3.jpg" alt="pic" onmouseover="choosePic('images/pic3.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/pic4.jpg" alt="pic" onmouseover="choosePic('images/pic4.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/pic5.jpg" alt="pic" onmouseover="choosePic('images/pic5.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/after.jpg" alt="pic" onmouseover="choosePic('images/after.jpg')" class="myOpacityFloat"  /></div>
                

                <div><img src="images/pic1.jpg" alt="pic" onmouseover="choosePic('images/pic1.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/pic2.jpg" alt="pic" onmouseover="choosePic('images/pic2.jpg')" class="myOpacityFloat"  /></div>
                <div style="grid-column:3 / 6; grid-row:2 / 4;padding-bottom:3px;"><img style="width:100%;max-height:100%" src="images/pic3.jpg" alt="pic" onmouseover="choosePic('images/pic3.jpg')" /></div>
                <div><img src="images/pic4.jpg" alt="pic" onmouseover="choosePic('images/pic4.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/pic5.jpg" alt="pic" onmouseover="choosePic('images/pic5.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/after.jpg" alt="pic" onmouseover="choosePic('images/after.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/flowers1.jpg" alt="pic" onmouseover="choosePic('images/flowers1.jpg')" class="myOpacityFloat"  /></div>
                
                <div><img src="images/flowers1.jpg" alt="pic" onmouseover="choosePic('images/flowers1.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/pic1.jpg" alt="pic" onmouseover="choosePic('images/pic1.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/pic2.jpg" alt="pic" onmouseover="choosePic('images/pic2.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/pic3.jpg" alt="pic" onmouseover="choosePic('images/pic3.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/pic4.jpg" alt="pic" onmouseover="choosePic('images/pic4.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/pic5.jpg" alt="pic" onmouseover="choosePic('images/pic5.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/after.jpg" alt="pic" onmouseover="choosePic('images/after.jpg')" class="myOpacityFloat"  /></div> 
                
                <div><img src="images/pic1.jpg" alt="pic" onmouseover="choosePic('images/pic1.jpg')" class="myOpacityFloat"  /></div>
                <div><img src="images/pic2.jpg" alt="pic" onmouseover="choosePic('images/pic2.jpg')" class="myOpacityFloat"  /></div>
        </div>
        <script type="text/javascript">
            var fade_in_from=0;
            var fade_out_from=10;
            var picsAy=new Array("images/pic1.jpg","images/pic2.jpg","images/pic3.jpg","images/pic5.jpg","images/pic5.jpg")
            var i=0
            var p=3
            //starts slide show
            function fadeIn(){
                var target=document.getElementsByTagName("img")[12];
                target.getAttributeNode("src").value=picsAy[i];
                var newSetting= fade_in_from / 10;
                target.style.opacity=newSetting;
                //opacity ranges form 0 to 1 (0 - .1 - .2 - .3 - .4 - etc...)
                fade_in_from++;
                /*-----------------------------------------------------------*/
                if(fade_in_from == 10){
                    target.style.opacity=1;
                    clearTimeout(loopTimer);
                    fade_in_from=0;
                    /*fade out function when fade in reaches full opacity*/
                                function fadeOut(){
                                    newSetting= fade_out_from / 10;
                                    target.style.opacity=newSetting;
                                    fade_out_from--;
                                    if(fade_out_from == 0){
                                        target.style.opacity=0;
                                        /*target.style.display="none";*/ //toggle on off 
                                        clearTimeout(loopTimerOut);
                                        fade_out_from=10;
                                        return false;
                                    }
                                var loopTimerOut=setTimeout(function(){fadeOut()},100)
                                }
                            setTimeout(function(){fadeOut()},5000)
                    /*fade out function when fade in reaches full opacity starting at 5sec*/
                                
                    i=i+1;
                    if(i>picsAy.length-1){
                        i=0;
                    }
                    p=p+1
                    if(p>21){
                        p=3
                    }
                    

                    setTimeout(function(){fadeIn()},6000)
                    return false;
                }
                /*-----------------------------------------------------------*/   
                    loopTimer=setTimeout(function(){fadeIn()},100)
            }
            fadeIn();
        
        //this function shows choosen pic on mouseover
        function choosePic(thePic){
                var target=document.getElementsByTagName("img")[12];
                target.getAttributeNode("src").value=thePic;
        }
        </script>
    <!-- END MIDCLMN-->
    
    <!-- FOOTER -->
        <?php include("include/footer.inc.php"); ?>   
    <!-- END FOOTER -->
</div>
</body>
</html>