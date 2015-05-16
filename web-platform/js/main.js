var clickedFlag=[false,false,false];

$(document).ready(function(){
    var box = $("div.box");
    box.click(function(){
	console.log("clicked");
	var textVal = $(this).children(0).text();
	if(textVal="1st lecture" && !(clickedFlag[0]==undefined)){
	    if(clickedFlag[0]){
		$(this).children(1).toggle();
	    }
	    else{
		$(this).append('<iframe src="https://onedrive.live.com/embed?cid=C9ED843235511755&resid=c9ed843235511755%212183&authkey=AD4pPlRkLIyhzLw&em=2" width="402" height="327" frameborder="0" scrolling="no"></iframe>');
		clickedFlag[0] = true;
	    }
	}
	else if(textVal="2nd lecture" && !(clickedFlag[1]==undefined)){
	    if(clickedFlag[1]){
		$(this).children(1).toggle();
            }
	    else{
		$(this).append('<iframe src="https://onedrive.live.com/embed?cid=C9ED843235511755&resid=c9ed843235511755%211742&authkey=ALEYM6mAYoiX6sg" width="98" height="120" frameborder="0" scrolling="no"></iframe>');
		clickedFlag[1] = true;
	    }
	}
	else if(textVal="3d lecture"&& !(clickedFlag[2]==undefined)){
	    if(clickedFlag[2]){
		$(this).children(1).toggle();
            }
	    else{
		$(this).append('<iframe src="https://onedrive.live.com/embed?cid=C9ED843235511755&resid=c9ed843235511755%212201&authkey=AGTPmdLza-5QJxI&em=2" width="402" height="327" frameborder="0" scrolling="no"></iframe>');
		clickedFlag[2] = true;
	    }
	}
    });
});
