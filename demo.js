const xmlhttp = new XMLHttpRequest();

xmlhttp.onload = function(){
    const myObj = JSON.parse(this.responseText);
    console.log(myObj);
}

xmlhttp.open("GET", "demo.php", true);
xmlhttp.send();

