function hideSuffix() 
{
    var gender = document.getElementById('gender');
    var divSuffix = document.getElementById('forSuffix');
    var suffix = document.getElementById('suffix');
    var classname = "hidden";    
    if(gender.value == "Female")
    {
        divSuffix.classList.add(classname);
        suffix.selectedIndex = 0;
    }
    else 
    {
        divSuffix.classList.remove(classname);
    }
}