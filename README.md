phpNT - Yii2 ICheck
================================
[![Latest Stable Version](https://poser.pugx.org/phpnt/yii2-icheck/v/stable)](https://packagist.org/packages/phpnt/yii2-icheck) [![Total Downloads](https://poser.pugx.org/phpnt/yii2-icheck/downloads)](https://packagist.org/packages/phpnt/yii2-icheck) [![Latest Unstable Version](https://poser.pugx.org/phpnt/yii2-icheck/v/unstable)](https://packagist.org/packages/phpnt/yii2-icheck) [![License](https://poser.pugx.org/phpnt/yii2-chartjs/license)](https://packagist.org/packages/phpnt/yii2-icheck)

### Описание:
### Стилизованный чекбоксы и радиокнопки.
### [DEMO](http://phpnt.com/widget/yii2-icheck)

------------
### - [Поддержать phpNT](http://phpnt.com/donate/index) 
------------

### Социальные сети:
 - [Канал YouTube](https://www.youtube.com/c/phpnt)
 - [Группа VK](https://vk.com/phpnt)
 - [Группа facebook](https://www.facebook.com/Phpnt-595851240515413/)

------------

Установка:

------------

```
php composer.phar require "phpnt/yii2-icheck" "*"
```
или

```
composer require phpnt/yii2-icheck
```

или добавить в composer.json файл

```
"phpnt/yii2-icheck": "*"
```

### Представление:
------------
```php
use phpnt\ICheck\ICheck;
```
```html
<h3>STYLE_MIMIMAL (цвета для STYLE_MIMIMAL - minimal (черный), red, green, blue, aero, grey, orange, yellow, pink, purple)</h3>
<div class="col-md-6">
    <?= $form->field($model, 'checkbox', ['template' => '{label} {input}'])->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX,
        'style'  => ICheck::STYLE_MIMIMAL,
        'color'  => 'green'                  // цвет
    ]) ?>
    <?= $form->field($model, 'checkbox2')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_MIMIMAL,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'color'  => 'minimal',                  // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-1-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-1-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>

    <?= $form->field($model, 'checkbox3')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_MIMIMAL,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'color'  => 'red',                  // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-2-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-2-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'radio')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO,
        'style'  => ICheck::STYLE_MIMIMAL,
        'color'  => 'green'                  // цвет
    ]) ?>

    <?= $form->field($model, 'radio2')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_MIMIMAL,
        'items'    => [1 => 'Вася2', 2 => 'Катя2', 3 => 'Жора'],
        'color'  => 'purple',                  // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="check-3-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-3-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>

    <?= $form->field($model, 'radio3')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_MIMIMAL,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'color'  => 'blue',                  // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="check-4-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-4-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
</div>
<h3>STYLE_SQUARE (цвета для STYLE_SQUARE - square (черный), red, green, blue, aero, grey, orange, yellow, pink, purple)</h3>
<div class="col-md-6">
    <?= $form->field($model, 'checkbox4', ['template' => '{label} {input}'])->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX,
        'style'  => ICheck::STYLE_SQUARE,
        'color'  => 'square'                  // цвет
    ]) ?>
    <?= $form->field($model, 'checkbox5')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_SQUARE,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'color'  => 'green',                  // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-5-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-5-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
    <?= $form->field($model, 'checkbox6')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_SQUARE,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'color'  => 'red',                  // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-6-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-6-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'radio4')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO,
        'style'  => ICheck::STYLE_SQUARE,
        'color'  => 'blue'                  // цвет
    ]) ?>
    <?= $form->field($model, 'radio5')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_SQUARE,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'color'  => 'yellow',               // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="check-7-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-7-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
    <?= $form->field($model, 'radio6')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_SQUARE,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'color'  => 'aero',                  // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="check-8-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-8-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
</div>
<h3>STYLE_FLAT (цвета для STYLE_SQUARE - flat (черный), red, green, blue, aero, grey, orange, yellow, pink, purple)</h3>
<div class="col-md-6">
    <?= $form->field($model, 'checkbox7', ['template' => '{label} {input}'])->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX,
        'style'  => ICheck::STYLE_FLAT,
        'color'  => 'flat'                  // цвет
    ]) ?>
    <?= $form->field($model, 'checkbox8')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'color'  => 'green',                // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-9-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-9-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
    <?= $form->field($model, 'checkbox9')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'color'  => 'red',                  // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-10-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-10-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'radio7')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO,
        'style'  => ICheck::STYLE_FLAT,
        'color'  => 'blue'                      // цвет
    ]) ?>
    <?= $form->field($model, 'radio8')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'color'  => 'yellow',                  // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-7-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="radio-7-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
    <?= $form->field($model, 'radio9')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FLAT,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'color'  => 'aero',                     // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-8-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="radio-8-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
</div>
<h3>STYLE_LINE (цвета для STYLE_LINE - line (черный), red, green, blue, aero, grey, orange, yellow, pink, purple)</h3>
<div class="col-md-6">
    <?= $form->field($model, 'checkbox10')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_LINE,
        'items'    => [1 => 'Вася'],
        'color'  => 'yellow',                  // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-10-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> 
                        <label for="check-7-'.$index.'">'.$label.'</label>';
            },
        ]]) ?>
    <?= $form->field($model, 'checkbox11')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_LINE,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'color'  => 'red',                  // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-11-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> 
                        <label for="check-7-'.$index.'">'.$label.'</label>';
            },
        ]]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'radio10')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_LINE,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'color'  => 'pink',                  // цвет
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-10-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> 
                        <label for="check-7-'.$index.'">'.$label.'</label>';
            },
        ]]) ?>
</div>
<h3>STYLE_POLARIS</h3>
<div class="col-md-6" style="background-color: #2c323c; padding: 20px;">
    <?= $form->field($model, 'checkbox12', ['template' => '{label} {input}'])->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX,
        'style'  => ICheck::STYLE_POLARIS,
    ]) ?>
    <?= $form->field($model, 'checkbox13')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_POLARIS,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-13-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-13-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
    <?= $form->field($model, 'checkbox14')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_POLARIS,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-14-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-14-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
</div>
<div class="col-md-6" style="background-color: #2c323c; padding: 20px;">
    <?= $form->field($model, 'radio11')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO,
        'style'  => ICheck::STYLE_POLARIS,
    ]) ?>
    <?= $form->field($model, 'radio12')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_POLARIS,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-12-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="radio-12-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
    <?= $form->field($model, 'radio13')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_POLARIS,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-13-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="radio-13-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
</div>
<h3>STYLE_FUTURICO</h3>
<div class="col-md-6" style="background-color: #2c323c; padding: 20px;">
    <?= $form->field($model, 'checkbox15', ['template' => '{label} {input}'])->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX,
        'style'  => ICheck::STYLE_FUTURICO,
    ]) ?>
    <?= $form->field($model, 'checkbox16')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FUTURICO,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-16-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-16-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
    <?= $form->field($model, 'checkbox17')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_CHECBOX_LIST,
        'style'  => ICheck::STYLE_FUTURICO,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="checkbox" id="check-17-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="check-17-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
</div>
<div class="col-md-6" style="background-color: #2c323c; padding: 20px;">
    <?= $form->field($model, 'radio14')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO,
        'style'  => ICheck::STYLE_FUTURICO,
    ]) ?>
    <?= $form->field($model, 'radio15')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FUTURICO,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-15-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="radio-15-'.$index.'">'.$label.'</label><br>';
            }
        ]]) ?>
    <?= $form->field($model, 'radio16')->widget(ICheck::className(), [
        'type'  => ICheck::TYPE_RADIO_LIST,
        'style'  => ICheck::STYLE_FUTURICO,
        'items'    => [1 => 'Вася', 2 => 'Катя', 3 => 'Жора'],
        'options' => [
            'item' => function ($index, $label, $name, $checked, $value){
                return '<input type="radio" id="radio-16-'.$index.'" name="'.$name.'" value="'.$value.'" '.($checked ? 'checked' : false).'> <label for="radio-16-'.$index.'">'.$label.'</label>';
            }
        ]]) ?>
</div>
```
------------
# Документация:
## [ICheck](http://icheck.fronteed.com/)
------------
### Лицензия:
### [MIT](https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT)
------------
