function insertUser(name,id,sexlist)
{
    for (var i = 0; i < sexlist.length; i++)
    {
        if (sexlist[i].checked)
        {
            xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("news").innerHTML=xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET","insert.php?name="+name+"&id="+id+"&sex="+sexlist[i].value,true);
            xmlhttp.send();
        }
    }
    selectUser();
}

function modeselect(str)
{
    if (str=="")
    {
        document.getElementById("modestest").innerHTML="";
        return;
    }
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("modestest").innerHTML=xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET","modes.php?q="+str,true);
    xmlhttp.send();
}

function selectUser()
{
    xmlhttp_table=new XMLHttpRequest();
    xmlhttp_table.onreadystatechange=function()
    {
        if (xmlhttp_table.readyState==4 && xmlhttp_table.status==200)
        {
            document.getElementById("table").innerHTML=xmlhttp_table.responseText;
        }
    };
    xmlhttp_table.open("GET","table.php",true);
    xmlhttp_table.send();
}
selectUser();