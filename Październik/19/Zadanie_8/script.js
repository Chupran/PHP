function slij(){
    let g, m, s;
    let czas=Number(document.getElementById("liczba").value);
    s=czas%60;
    m=(czas%3600)/60;
    g=czas/3600;
    m=Math.floor(m);
    g=Math.floor(g);
    document.getElementById("p").innerText=g + "g" + m + "m" + s + "s";
}