<?php
/**
 * ページタイトルを設定するコンポーネント
 */
class PageTitleComponent extends Component {

    public $pageTitles = array(
        'Campaigns' => array(
            'index'   => 'Group Fun!'
        ),
        'Users' => array(
            'login'   => 'Group Fun!',
            'logout'   => 'Group Fun!',
        ),
    );

    public function getPageTitle(Controller $controller) {
        return !empty($this->pageTitles[$controller->name][$controller->action])
            ? $this->pageTitles[$controller->name][$controller->action]
            : 'Group Fun!';
    }
}