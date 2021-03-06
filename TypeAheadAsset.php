<?php
/**
 * @link https://github.com/2amigos/yii2-type-ahead-widget
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace xutl\typeahead;

use yii\web\AssetBundle;

/**
 * TypeAheadAsset
 *
 * @author Alexander Kochetov <creocoder@gmail.com>
 */
class TypeAheadAsset extends AssetBundle
{
    public $sourcePath = '@vendor/xutl/yii2-type-ahead-widget/assets';

    public $css = [
        'css/bootstrap-typeahead.css',
    ];

    public $js = [
        'js/typeahead.bundle.min.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
