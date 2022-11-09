function licz(){
    let a=Number(document.getElementById("a").value);
    let b=Number(document.getElementById("b").value);
    let c=Number(document.getElementById("c").value);
    let wynik;
    let p=(a+b+c)/2;
    if(a+b>c && a+c>b && b+c>a){
        wynik=Math.sqrt(p*(p-a)*(p-b)*(p-c));
        document.getElementById("wyniks").innerText="Pole kwadratu wynosi: " + wynik + "!";
    }else{
        document.getElementById("wyniks").innerText="Nie ma takiego kwadratu!";
    }
}