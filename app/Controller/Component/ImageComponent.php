<?php
class ImageComponent extends Component {

  //ポストされた画像データの処理
  public function get_image($data) {
    //ポストされた画像データを取得
    $data = file_get_contents($data['Campaign']['file']['tmp_name']);
    //画像データをリターンする
    return $data;

  }


}