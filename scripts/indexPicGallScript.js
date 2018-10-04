<!--
    var i=0;
    var pics= new Array("pic0.jpg","pic1.jpg","pic2.jpg","pic3.jpg","pic4.jpg","pic5.jpg");
    var pic0Info="On this project we did this.";
    var pic1Info="On this project we did that...";
    var pic2Info="On this project we did this and that...";
    var pic3Info="On this project we did that, this, alittle of that...";
    var pic4Info="On this project we did this, that, alot of this and some of that...";
    var pic5Info="On this project we did and that too...";
    var info= new Array(pic0Info,pic1Info,pic2Info,pic3Info,pic4Info,pic5Info);
    function displayGallery(){
        document.getElementById("indexPicGallery").innerHTML="<img src='images/"+pics[i]+"' class='picBorder' style='width:200px;height:153px;float:left' /><p style='float:left'>"+info[i]+"</p>";      
    }
    displayGallery();
    function next(){
        if(i<pics.length-1){
            i++;
            displayGallery();
        }
    }
    function prev(){
        if(i>0){
            i--;
            displayGallery();
        }
    }
-->


