function entryChange(){
    radio = document.getElementsByName('style') 
    if(radio[0].checked) {
    //フォーム
    document.getElementById('firstBox').style.display = "";
    document.getElementById('secondBox').style.display = "none";
    document.getElementById('thirdBox').style.display = "none";
    $("input[type=text]").val([""]);
    }else if(radio[1].checked) {
    //フォーム
    document.getElementById('firstBox').style.display = "none";
    document.getElementById('secondBox').style.display = "";
    document.getElementById('thirdBox').style.display = "none";
    $("input[type=text]").val([""]);
    }else if(radio[2].checked) {
    document.getElementById('firstBox').style.display = "none";
    document.getElementById('secondBox').style.display = "none";
    document.getElementById('thirdBox').style.display = "";
    $("input[type=text]").val([""]);
    }
}
//オンロードさせ、リロード時に選択を保持
window.onload = entryChange;