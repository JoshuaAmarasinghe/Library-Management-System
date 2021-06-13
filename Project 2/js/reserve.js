function logout()
{
	location.replace("../php/login.php")
}

function cancel() 
{
    window.location.href = "../php/home.php"
}

function confirm() 
{
    alert("Reservation Successful");
    window.location.href = "../php/home.php"
}