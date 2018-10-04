<div id="indexLtColmn">
    <!-- estimates div -->
    <div id="estimate">
        <h3 class="skyBlue" style="text-align:center">Estimates</h3>
        <hr />
        <h4 class="estimateTxtformat">Tell us about your next project.</h4>
        <div class="estimateTxtformat"><span class="red"><?php //echo $errorMsg; 2018 dr?></span><?php //echo $intlMsg; 2018 dr ?></div>
        <form name="estimateForm" action="index.php" method="post" onsubmit="return onSubmitMsg()"> 
            <table id="estimateFormTable">
                <tr><td><span class="red">*</span>Name:</td><td><input type="text" name="name" size="24" maxlength="50" value="<?php echo $name; ?>" /></td></tr>
                <tr>
                    <td><span class="red">*</span>Phone:</td>
                    <td>
                    &#40;&nbsp;<input type="text" name="phoneCode" id="phoneCode" size="4" maxlength="3" value="<?php //echo $phoneCode; 2018 dr ?>" />&nbsp;&#41;
                    &#45;<input type="text" name="phone3"  size="4" maxlength="3" value="<?php //echo $phone3; 2018 dr ?>" />&#45;
                    <input type="text" name="phone4" size="6" maxlength="4" value="<?php //echo $phone4; 2018 dr?>" />
                    </td>
                </tr>
                <tr><td>Email:</td><td><input type="email" name="email" value="<?php //echo $email; 2018 dr ?>" /></td></tr>
                <tr><td>Confrim Email:</td><td><input type="email" name="re_email" /></td></tr>
                <tr>
                    <td>Job type:</td>
                    <td>
                        <select name="job_type">
                            <option value="none">-</option>
                            <option value="clean_up">Clean up</option>
                            <option value="design">Design</option>
                            <option value="installation">Installation</option>
                            <option value="yard_maintenace">Yard Maintenace</option>            
                        </select>
                    </td>
                </tr>
                <tr><td><span class="red">*</span>Describe:</td><td><textarea name="description" maxlength="1000" style="height:59px;width:154px"><?php echo $description; ?></textarea></td></tr>               
                <!--<tr><td>Upload a picture:</td><td><input type="file" name="file" id="file" /></td></tr>-->
                <tr><td colspan="2"><input type="submit" /></td></tr>
            </table>
        </form>
    </div>
    <!-- landscape tips div-->
    <div id="landTips" style="text-align:center">
        <h3 class="skyBlue">Landscape Ideas</h3>
        <hr />
        <p class="smallFont">
        <a href="./gallery.php"><img src="images/flowers1.jpg" alt="flowers" style="width:175px;height:110px" class="picBorder"/></a>
        <br />
        <a href="./gallery.php" style="text-decoration:none">Spring flowers for your planter.</a>
        <br /><br />
        <a href="./gallery.php"><img src="images/pond.jpg" alt="pond" style="width:175px;height:110px" class="picBorder" /></a>
        <br />
        <a href="./gallery.php" style="text-decoration:none">Lush waterfalls of tranquility.</a>  
        </p>
    </div>
</div>
<script src=./scripts/onSubmitMsg.js></script>