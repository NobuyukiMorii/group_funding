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

/**
 * ページタイトルを設定する
 *
 * @param Controller $controller A reference to the instantiating controller object
 * @return string
 * @access public
 */
    public function getPageTitle(Controller $controller) {
        return !empty($this->pageTitles[$controller->name][$controller->action])
            ? $this->pageTitles[$controller->name][$controller->action]
            : 'CrowdFun';
    }
}