var clickedFlag=[false,false,false];

$(document).ready(function(){
    var box = $("div.box");
    box.click(function(){
	console.log("clicked");
	var textVal = $(this).children(0).text();
	if(textVal="1st lecture" && !(clickedFlag[0])){
	    console.log("click 1:"+clickedFlag[0]);
	    $(this).append('<iframe src="https://onedrive.live.com/embed?cid=C9ED843235511755&resid=c9ed843235511755%212183&authkey=AD4pPlRkLIyhzLw&em=2" width="402" height="327" frameborder="0" scrolling="no"></iframe>');
	    clickedFlag[0] = true;
	    console.log("click 1:"+clickedFlag[0]);
	}
	else if(textVal="2nd lecture" && !(clickedFlag[1])){
	    $(this).append('<iframe src="https://onedrive.live.com/embed?cid=C9ED843235511755&resid=c9ed843235511755%212188&authkey=ACYBl2UOID7HpoU&em=2" width="402" height="327" frameborder="0" scrolling="no"></iframe>');
	    clickedFlag[1] = true;
	    console.log("click 2:"+clickedFlag[1]);
	}
	else if(textVal="3d lecture"&& !(clickedFlag[2])){
	    $(this).append('<iframe src="https://onedrive.live.com/embed?cid=C9ED843235511755&resid=c9ed843235511755%212201&authkey=AGTPmdLza-5QJxI&em=2" width="402" height="327" frameborder="0" scrolling="no"></iframe>');
	    clickedFlag[2] = true;
	    console.log("click 3:"+clickedFlag[2]);
	}
    });
    
});
