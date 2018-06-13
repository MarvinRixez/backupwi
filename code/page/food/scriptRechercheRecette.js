function scrollingMenu(){
	var request = new XMLHttpRequest();
	request.open("GET", "scriptRechercheRecette.php");
	/*request.onreadystatechange = function(){
		if(request.readyState == 4){
			var ing = JSON.parse(request.responseText);

		}
	};*/
	var value = document.getElementById("select1").value;
	request.open("GET", "scriptRechercheRecette.php?value=" + value);
	request.send();
}