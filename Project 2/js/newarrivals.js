window.onload = function() 
{
    var d = new Date();
    var x = d.toLocaleDateString();
    document.getElementById("date").innerHTML = x;
}

function logout()
{
	location.replace("../php/login.php")
}

