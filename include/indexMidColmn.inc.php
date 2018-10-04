<div id="indexMidColmn">
    <p>
        His Landscape Cration was founded in 1991.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugit numquam quo inventore adipisci consequuntur laboriosam id suscipit, autem, sunt asperiores voluptates error nulla. Dolorem iusto saepe modi odio eligendi et fugit nam laborum maxime quasi. Veritatis minus, numquam porro voluptates itaque neque commodi harum, magni vitae eaque quibusdam autem!
    </p>
    
    <div style="text-align:center;margin-top:10px">
        <img src=images/ourServices.png alt="services" />
    </div>
    <div>
        <table style="width:70%;margin:0 auto">
            <tr>
                <td style="padding:5px"><img id="installation" src=images/installation.png alt="installation" onmouseover="fadeIn('installDetails'); changeCursor(this.id)" onmouseout="setTimeout(function(){fadeOut('installDetails')},4000)" /></td>
                <td style="padding:5px"><img id="design" src=images/design.png alt="design" onmouseover="fadeIn('designDetails'); changeCursor(this.id)" onmouseout="setTimeout(function(){fadeOut('designDetails')},4000)" /></td>
                <td style="padding:5px"><img id="maintenence" src=images/maintenence.png alt="maintenance" onmouseover="fadeIn('maintenenceDetails'); changeCursor(this.id)" onmouseout="setTimeout(function(){fadeOut('maintenenceDetails')},4000)" /></td>
            </tr>
            <tr>
                <td>
                    <p id="installDetails" class="srvsDetails">
                    Shrubs<br />
                    Sod<br />
                    Sprinklers<br />
                    Trees<br />
                    </p>
                </td>
                <td>
                    <p id="designDetails" class="srvsDetails">
                    Backyard<br />
                    Landscape<br />
                    Hardscape<br />
                    Waterscape<br />
                    </p>
                </td>
                <td>  
                    <p id="maintenenceDetails" class="srvsDetails">
                    Mowing<br />
                    Edging<br />
                    Planters<br />
                    Hedges<br />
                    </p> 
                </td>
            </tr>
        </table>
    </div>
    <hr class="hrColor" />
    <div id="mediaSpace">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/vC08NJgrRs8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
</div>
<script type="text/javascript">
        var fade_in_from=0;
        var fade_out_from=10;
        function fadeIn(element){
            var target=document.getElementById(element);
            target.style.display="block";
            var newSetting= fade_in_from / 10;
            target.style.opacity=newSetting;
            
            //opacity ranges form 0 to 1 (0 - .1 - .2 - .3 - .4 - etc...)
            fade_in_from++;
            if(fade_in_from == 10){
                target.style.opacity=1;
                clearTimeout(loopTimer);
                fade_in_from=0;
                return false;
            }
            var loopTimer=setTimeout('fadeIn(\''+element+'\')',50)       
        }
        function fadeOut(element){
            var target=document.getElementById(element);
            var newSetting= fade_out_from / 10;
            target.style.opacity=newSetting;
            
            //opacity ranges form 0 to 1 (0 - .1 - .2 - .3 - .4 - etc...)
            fade_out_from--;
            if(fade_out_from == 0){
                target.style.opacity=0;
                /*target.style.display="none";*/ //toggle on off 
                clearTimeout(loopTimer);
                fade_out_from=10;
                return false;
            }
            var loopTimer=setTimeout('fadeOut(\''+element+'\')',50)       
        }

        function changeCursor(self){
            document.getElementById(self).style.cursor = "help";
        }
    </script>
    

    