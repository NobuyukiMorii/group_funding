function disp(){
	var form = document.getElementById("confirm_address");
	var address = window.prompt("パスワードを初期かする\nメールアドレスを入力して下さい。");
	document.getElementById('mail_address').value=address;
	form.submit();
	if (isset(address)) {
	alert('パスワード変更のメールを送信しました。');
	}
}

var isset = function(data){
    if(data === "" || data === null || data === undefined){
        return false;
    }else{
        return true;
    }
};