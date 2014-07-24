// スクロールを抑止する関数
function preventScroll(event) {

  // a要素だけは、タップイベントに反応したいので、抑止しない。
  if (event.touches[0].target.tagName.toLowerCase() == "a") {return;}

  // preventDefaultでブラウザ標準動作を抑止する。
  event.preventDefault();
}

// タッチイベントの初期化
document.addEventListener("touchstart", preventScroll, false);
document.addEventListener("touchmove", preventScroll, false);
document.addEventListener("touchend", preventScroll, false); 
// ジェスチャーイベントの初期化
document.addEventListener("gesturestart", preventScroll, false);
document.addEventListener("gesturechange", preventScroll, false);
document.addEventListener("gestureend", preventScroll, false);