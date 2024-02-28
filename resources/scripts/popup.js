var popUp = document.getElementById("pop-up");
var popUpClose = document.getElementById("pop-up-close");

window.onload = function()
{
    popUp.style.display = "block";
};

window.onclick = function(event)
{
    if (event.target === popUp || event.target === popUpClose)
    {
        popUp.style.display = "none";
    }
};