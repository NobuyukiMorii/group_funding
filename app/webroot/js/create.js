function entryChange(){
    radio = document.getElementsByName('data[Campaign][style]') 
    if(radio[0].checked) {
    //フォーム
    document.getElementById('firstBox').style.display = "";
    document.getElementById('secondBox').style.display = "none";
    }else if(radio[1].checked) {
    //フォーム
    document.getElementById('firstBox').style.display = "none";
    document.getElementById('secondBox').style.display = "";
    }
}
//オンロードさせ、リロード時に選択を保持
window.onload = entryChange;