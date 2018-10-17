var contents = ["/static/img/girlshostel.jpg","/static/img/boyshostel.jpg"];
var i = 0;
	
setInterval ( "changecontent()", 3000 );

function changecontent( )
{
	document.getElementsByClassName("img")[0].src = contents[i];
	
	i = i + 1;
	if(i == 2){
		i = 0;
	}
}