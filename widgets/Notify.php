<?php
/**
 * @link http://www.yiiassets.com
 * 8/11/15 AD 2:27 AM
 * @copyright Copyright (c) 2015 infinitesteam
 * @author Prawee Wongsa <konkeanweb@gmai.com>
 * @license BSD-3-Clause
 */

namespace prawee\metroui\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class Notify extends Widget
{
    public $icon;
    public $delay=3000;

    public function init(){
    }
    public function run()
    {
        $flashes = Yii::$app->getSession()->getAllFlashes();

        $output = null;
        foreach ($flashes as $key => $value) {
            /*
            $output['type'] = $key;
            $output['caption'] = ucfirst($key);
            $output['content'] = $value;
            $output['icon'] = $this->renderIcon($key);
            */
            $output=[
                'type'=>$key,
                'caption'=>ucfirst($key),
                'content'=>$value,
                'icon'=>$this->renderIcon($key)
            ];
            $option = json_encode($output);
        }
        $option=!empty($option)?$option:json_encode([]);
        $js = '
            setTimeout(function(){
                $.Notify('.$option.');
            },'.$this->delay.');
        ';
        $this->getView()->registerJs($js);
    }
    public function renderIcon($key){
        switch($key){
            case 'success':
                $this->icon='mif-checkmark';
                break;
            case 'alert':
                $this->icon='mif-alarm';
                break;
            case 'warning':
                $this->icon='mif-bell';
                break;
            default:
                $this->icon='mif-info';
                break;
        }
        return Html::tag('span',null,['class'=>$this->icon]);
    }
}
