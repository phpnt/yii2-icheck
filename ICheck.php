<?php
/**
 * Created by PhpStorm.
 * User: phpNT - http://phpnt.com
 * Date: 29.04.2017
 * Time: 11:59
 */

namespace phpnt\ICheck;

use yii\bootstrap\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class ICheck extends InputWidget
{
    const TYPE_CHECBOX      = 'checkbox';
    const TYPE_CHECBOX_LIST = 'checkbox-list';
    const TYPE_RADIO        = 'radio';
    const TYPE_RADIO_LIST   = 'radio-list';

    const STYLE_MIMIMAL     = 'minimal';
    const STYLE_SQUARE      = 'square';
    const STYLE_FLAT        = 'flat';
    const STYLE_LINE        = 'line';
    const STYLE_POLARIS     = 'polaris';
    const STYLE_FUTURICO    = 'futurico';

    public $type;
    public $style;
    public $color           = 'black';
    public $items           = [];
    public $options         = [];
    public $checkOptions    = [];

    private $idItem;

    public function init()
    {
        parent::init();
        $this->type = $this->type ? $this->type : 'checkbox';
        if ($this->style == 'polaris') {
            $this->color = 'polaris';
        }
        if ($this->style == 'futurico') {
            $this->color = 'futurico';
        }
        $this->color = ($this->color != 'black') ? $this->color : 'minimal';
        $this->options += [
            'class' => 'i-checks-'.$this->id
        ];
        $this->idItem = $this->options['id'];
    }

    public function run()
    {
        $this->registerScript();

        switch ($this->type) {
            case 'checkbox':
                echo Html::activeCheckbox($this->model, $this->attribute, $this->options);
                break;
            case 'checkbox-list':
                echo Html::activeCheckboxList($this->model, $this->attribute, $this->items, $this->options);
                break;
            case 'radio':
                echo Html::activeRadio($this->model, $this->attribute, $this->options);
                break;
            case 'radio-list':
                echo Html::activeRadioList($this->model, $this->attribute, $this->items, $this->options);
                break;
        }
    }

    public function registerScript()
    {
        $view = $this->getView();
        $asset = ICheckAsset::register($view);
        $this->getCheckOptions();

        $view->registerCssFile($asset->baseUrl.'/skins/'.$this->style.'/'.$this->color.'.css');

        $this->checkOptions = Json::encode($this->checkOptions);

        $js = <<< JS
        
            $(document).ready(function(){
             if ('$this->style' == 'line') {
                 if ('$this->color' == 'line') {
                 $('#$this->idItem > input').each(function(){
                    var self = $(this),
                      label = self.next(),
                      label_text = label.text();
                
                    label.remove();
                    self.iCheck({
                      checkboxClass: 'icheckbox_line',
                      radioClass: 'iradio_line',
                      insert: '<div class="icheck_line-icon"></div>' + label_text
                    });
                  });
                 } else {
                     $('#$this->idItem > input').each(function(){
                        var self = $(this),
                          label = self.next(),
                          label_text = label.text();
                    
                        label.remove();
                        self.iCheck({
                          checkboxClass: 'icheckbox_line-$this->color',
                          radioClass: 'iradio_line-$this->color',
                          insert: '<div class="icheck_line-icon"></div>' + label_text
                        });
                  });
                 }
              } 
            if ('$this->style' == 'minimal' || '$this->style' == 'square' || '$this->style' == 'flat' || '$this->style' == 'polaris' || '$this->style' == 'futurico') {
                $(document).ready(function () {
                    $(".i-checks-$this->id").iCheck($this->checkOptions);
                }); 
            }              
        });
JS;
        $view->registerJs($js);
    }

    private function getCheckOptions() {
        switch ($this->style) {
            case 'minimal':
                if ($this->color == 'minimal') {
                    $this->checkOptions += [
                        'checkboxClass' => 'icheckbox_'.$this->style.'',
                        'radioClass' => 'iradio_'.$this->style.'',
                    ];
                } else {
                    $this->checkOptions += [
                        'checkboxClass' => 'icheckbox_'.$this->style.'-'.$this->color,
                        'radioClass' => 'iradio_'.$this->style.'-'.$this->color,
                    ];
                }
                break;
            case 'square':
                if ($this->color == 'square') {
                    $this->checkOptions += [
                        'checkboxClass' => 'icheckbox_'.$this->style.'',
                        'radioClass' => 'iradio_'.$this->style.'',
                    ];
                } else {
                    $this->checkOptions += [
                        'checkboxClass' => 'icheckbox_'.$this->style.'-'.$this->color,
                        'radioClass' => 'iradio_'.$this->style.'-'.$this->color,
                    ];
                }
                break;
            case 'flat':
                if ($this->color == 'flat') {
                    $this->checkOptions += [
                        'checkboxClass' => 'icheckbox_'.$this->style.'',
                        'radioClass' => 'iradio_'.$this->style.'',
                    ];
                } else {
                    $this->checkOptions += [
                        'checkboxClass' => 'icheckbox_'.$this->style.'-'.$this->color,
                        'radioClass' => 'iradio_'.$this->style.'-'.$this->color,
                    ];
                }
                break;
            case 'line':
                if ($this->color == 'line') {
                    $this->checkOptions += [
                        'checkboxClass' => 'icheckbox_'.$this->style.'',
                        'radioClass' => 'iradio_'.$this->style.'',
                    ];
                } else {
                    $this->checkOptions += [
                        'checkboxClass' => 'icheckbox_'.$this->style.'-'.$this->color,
                        'radioClass' => 'iradio_'.$this->style.'-'.$this->color,
                    ];
                }
                break;
            case 'polaris':
                $this->checkOptions += [
                    'checkboxClass' => 'icheckbox_'.$this->style.'',
                    'radioClass' => 'iradio_'.$this->style.'',
                ];
            case 'futurico':
                $this->checkOptions += [
                    'checkboxClass' => 'icheckbox_'.$this->style.'',
                    'radioClass' => 'iradio_'.$this->style.'',
                ];
                break;
        }
    }
}
