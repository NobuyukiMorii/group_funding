<?php
/**
 * よく使う処理を書く来んポーンrンと
 */
class CommonComponent extends Component {

    //現在のサーバー名を取得する
    public function get_my_server_name() {
        $server_name = $_SERVER['SERVER_NAME'];
        return $server_name;
    }

    //ドキュメントルートからのファイルまでのパスを取得する
    public function get_my_domain() {
        //ドメイン所得の関数
        $my_domain = $_SERVER['PHP_SELF'];
        return  $my_domain;
    }

    //現在のプロトコルを取得する
    public function get_my_protocol() {
        $my_protocol = $_SERVER['SERVER_PROTOCOL'];
        return $my_protocol;
    }

    //現在の自分のアドレスを取得
    public function get_my_position() {
        return ((empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    }

}