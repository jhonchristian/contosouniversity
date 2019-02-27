function hideSuffix() 
{
    var gender = document.getElementById('gender');
    var suffix = document.getElementById('forSuffix');
    var classname = "hidden";    
    if(gender.value == "Female")
    {
        suffix.classList.add(classname);
    }
    else 
    {
        suffix.classList.remove(classname);
    }
}