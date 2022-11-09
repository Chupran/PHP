function funkcja(){
    let tc=Number(document.getElementById("stopien").value);
    let tf=32+(9/5*tc);
    let tk=tc+273.15;
    document.getElementById("wynikK").innerText=tc+" to " + tf + " stopni Fahrenheita i " + tk + " stopni Kelwina";
}