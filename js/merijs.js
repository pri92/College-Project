function show(str) {
  if (str.length==0) { 
    document.getElementById("txt").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txt").innerHTML=xmlhttp.responseText;
    }
  }

 if(str== "1")
 {
  xmlhttp.open("GET","index.php",true);
  xmlhttp.send();
}

if(str== "2")
 {
  xmlhttp.open("GET","html.php",true);
  xmlhttp.send();
}

if(str== "3")
 {
  xmlhttp.open("GET","css.php",true);
  xmlhttp.send();
}

if(str== "4")
 {
  xmlhttp.open("GET","chat/index.php",true);
  xmlhttp.send();
}

}

if(str== "result")
 {
  xmlhttp.open("GET","result.php",true);
  xmlhttp.send();
}