<?php
App::uses('AppHelper', 'View/Helper');
 
class CommonHelper extends AppHelper {
 	//今日の日付
	 public function day($n){
	    $day = date("Y-m-d",strtotime("+".$n."day"));
	    return $day;
	 }

	//日付の差を表示する
	public function calculate($n) {
		//今日の日付
		$day = date("Y-m-d");
		//期限の日付
		$limit_day = $n;
		//日付の差を求める
		$result = (strtotime($limit_day) - strtotime($day)) / ( 60 * 60 * 24);
		//結果を返す
		return $result;
	}

}
