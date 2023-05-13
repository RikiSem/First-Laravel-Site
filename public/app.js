function contextMenu(event){
    event.preventDefault();
}
function checkBot(event){
    let operand1 = Math.floor(Math.random() * (288 - 0 + 1) + 0);
    let operand2 = Math.floor(Math.random() * (288 - 0 + 1) + 0);
    let primer = String(operand1) + "+" + String(operand2);
    let answ = prompt("Реши пример: " + primer);
    if(Number(answ) != operand1+operand2){
        location = "registrPage.php";
        event.preventDefault()
    }
}
function adsShow(){
    let procent = Math.random();
    if(procent >= 0.5){
        window.open("https://prpops.com/p/1exky/direct","_blank");
    }
}
