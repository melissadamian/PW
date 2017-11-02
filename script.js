$(document).ready(function(){
$("#submitSearch").click(function(){
	var url=window.location.href;
	if(url.indexOf("search")!=-1){
		url=url.split("=");
		url=url[0]+"=";
	} else {
		url += "?search=";
	}
window.location=url+$("#searchTerms").val();
});

$("#searchTerms").keyup(function(event){
    if(event.keyCode == 13){
        $("#submitSearch").click();
    }
});
});
