<!DOCTYPE html>
<html>
<head>
<meta http-equiv="charset" content="UTF-8">
<title>View</title>

<script>
function get_info(id) {

	var xmlhttp = "";
	
	if(window.XMLHttpRequest) {
		//code for FF, Chrome, and IE7+
		xmlhttp = new XMLHttpRequest();
	} else {
		//code for IE5, IE6
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	var url = "show-info.php?id=" + id + "&anti-cache=" + Math.random();
	
	xmlhttp.open("GET", url, true);
	xmlhttp.send();

	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("info").innerHTML = xmlhttp.responseText;
		}
	}
}
</script>

</head>
<body>

<label>Select a employee

<select name='select_emp' id='select_emp' onchange='get_info(this.value)'>
<option value='1'>Peter Grafil</option>
<option value='2'>Louis Grafil</option>
<option value='3'>Joseph Swonson</option>
<option value='4'>Gelnn Qunlinskie</option>
</select>

</label>

<br>

<p id='info'>Employee information will show in here</p>

</body>
</html>