<?php 
/**
	Admin Page Framework v3.8.15 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/wp-favorite-posts>
	Copyright (c) 2013-2017, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class WPFavoritePostsAdminPageFramework_CSS {
    static public function getDefaultCSS() {
        $_sCSS = ".wrap div.updated.wp-favorite-posts-settings-notice-container, .wrap div.error.wp-favorite-posts-settings-notice-container, .media-upload-form div.error.wp-favorite-posts-settings-notice-container{clear: both;margin-top: 16px;}.wrap div.error.confirmation.wp-favorite-posts-settings-notice-container {border-color: #368ADD;}.contextual-help-description {clear: left;display: block;margin: 1em 0;}.contextual-help-tab-title {font-weight: bold;}.wp-favorite-posts-content {margin-bottom: 1.48em;width: 100%;display: block; }.wp-favorite-posts-content > #post-body-content{margin-bottom: 0;}.wp-favorite-posts-container #poststuff .wp-favorite-posts-content h3 {font-weight: bold;font-size: 1.3em;margin: 1em 0;padding: 0;font-family: 'Open Sans', sans-serif;} .nav-tab.tab-disabled,.nav-tab.tab-disabled:hover {font-weight: normal;color: #AAAAAA;} .wp-favorite-posts-in-page-tab .nav-tab.nav-tab-active {border-bottom-width: 2px;}.wrap .wp-favorite-posts-in-page-tab div.error, .wrap .wp-favorite-posts-in-page-tab div.updated {margin-top: 15px;}.wp-favorite-posts-info,.wp-favorite-posts-info code{font-size: 0.8em;font-weight: lighter;text-align: right;}pre.dump-array {border: 1px solid #ededed;margin: 24px 2em;margin: 1.714285714rem 2em;padding: 24px;padding: 1.714285714rem;overflow-x: auto; white-space: pre-wrap;background-color: #FFF;margin-bottom: 2em;width: auto;}";
        return $_sCSS . PHP_EOL . self::_getPageLoadStatsRules() . PHP_EOL . self::_getVersionSpecificRules();
    }
    static private function _getPageLoadStatsRules() {
        return "#wp-favorite-posts-page-load-stats {clear: both;display: inline-block;width: 100%}#wp-favorite-posts-page-load-stats li{display: inline;margin-right: 1em;} #wpbody-content {padding-bottom: 140px;}";
    }
    static private function _getVersionSpecificRules() {
        return '';
    }
    static public function getDefaultCSSIE() {
        return '';
    }
}
