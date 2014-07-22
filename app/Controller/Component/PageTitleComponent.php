<?php
/**
 * ページタイトルを設定するコンポーネント
 */
class PageTitleComponent extends Component {

    public $pageTitles = array(
        'Campaigns' => array(
            'index'   => 'CrowdFun'
        ),
        'Users' => array(
            'login'   => 'CrowdFun',
            'logout'   => 'CrowdFun',
        ),
    );

    public function getPageTitle(Controller $controller) {
        return !empty($this->pageTitles[$controller->name][$controller->action])
            ? $this->pageTitles[$controller->name][$controller->action]
            : 'CrowdFun';
    }
}