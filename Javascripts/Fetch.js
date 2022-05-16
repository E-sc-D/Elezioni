//raccogli i dati e fai una query
 function fetcher()
{
    let elements = document.getElementsByClassName("data");
    let values;
    //fai un array con i valori degli elementi che come chiave usano il nome della classe dei input.
    for (let i = 0; i < elements.length; i++) 
    {
        values+=elements[i].className.split(" ")[1]+"="+values[i]+"&";//riempo un array indicizzato con il nome della classe  
    } 
    return values.substring(0,values.length-1);
}

function caller( values = fetcher(), url )//chiama un file php che esegue la query
{   
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
        console.log("query eseguita")
    }
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(values);
}