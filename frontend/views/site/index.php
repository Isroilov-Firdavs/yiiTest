<?php
use yii\helpers\Html;
use kartik\daterange\DateRangePicker;



/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                        <div class="row">
                    <? foreach ($data as $img): ?>
                            <div class="col-lg-3">
                                <div class="fool-img">
                                    <img src="../../images/<?=$img['foto']?>" width='100px'>
                                </div>
                            </div>
                    <? endforeach; ?>
                        </div>
            </div>
        </div>
    </div>
</div>

<?php
use kartik\icons\Icon;
Icon::map($this);


// Rotated/Flipped Icons
echo Icon::show('shield-alt') . 'normal' .
    Icon::show('shield-alt', ['class'=>'fa-rotate-90']) . 'fa-rotate-90' .
    Icon::show('shield-alt', ['class'=>'fa-flip-horizontal']) . 'fa-flip-horizontal';

// Spinning Icons in Buttons
echo Html::button(Icon::show('spinner', ['class'=>'fa-spin']), ['class'=>'btn btn-outline-secondary']) . ' ' .
    Html::button(Icon::show('sync-alt', ['class'=>'fa-spin']), ['class'=>'btn btn-outline-secondary']) . ' ' .


    Html::button(Icon::show('camera-retro', ['class'=>'']), ['class'=>'btn btn-success']);

?>
<h1>User Icons</h1>
<?php


// Option 1: Uses the `icon-framework` setup in Yii config params.
echo Icon::show('user');
echo Icon::show('telegram');
echo Icon::show('bowling');
echo Icon::show('uni uni-spades-white');

// Option 2: Specific Icon Call in a view. Additional options can also be passed to style the icon.
echo Icon::show('user', ['class'=>'fa-2x', 'framework' => Icon::FAS]);



?>

<h1>Data input</h1>
<?php


// DateRangePicker without ActiveForm and with an initial default value, a custom date,
// format and a custom separator. Auto conversion of date format from PHP DateTime to
// Moment.js DateTime is set to <code>true</code>. Custom addon markup on the right and
// make the picker open in the direction right to left.
$addon = <<< HTML
<span class="input-group-text">
    <i class="fas fa-calendar-alt"></i>
</span>
HTML;
echo '<label class="control-label">Date Range</label>';
echo '<div class="input-group drp-container">';
echo DateRangePicker::widget([
    'name'=>'date_range_1',
    'value'=>'01-Jan-14 to 20-Feb-14',
    'convertFormat'=>true,
    'useWithAddon'=>true,
    'pluginOptions'=>[
        'locale'=>[
            'format'=>'d-M-y',
            'separator'=>' to ',
        ],
        'opens'=>'left'
    ]
]) . $addon;
echo '</div>';

// DateRangePicker in a dropdown format (uneditable/hidden input) and uses the preset dropdown.
// Note that placeholder setting in this case will be displayed when value is null
// Also the includeMonthsFilter setting will display LAST 3, 6 and 12 MONTHS filters.
echo '<label class="control-label">Date Range</label>';
echo '<div class="drp-container">';
echo DateRangePicker::widget([
    'name'=>'date_range_2',
    'presetDropdown'=>true,
    'convertFormat'=>true,
    'includeMonthsFilter'=>true,
    'pluginOptions' => ['locale' => ['format' => 'd-M-y']],
    'options' => ['placeholder' => 'Select range...']
]);
echo '</div>';

echo "<h1>PHP</h1>";
//  A disabled Date Range Picker
echo '<label class="control-label">Date Range (Disabled)</label>';
echo '<div class="drp-container">';
echo DateRangePicker::widget([
    'name'=>'date_range_2a',
    'value'=>'2015-10-19 - 2015-11-03',
    'convertFormat'=>true,
    'disabled' => true,
    'pluginOptions'=>[
        'locale'=>['format'=>'Y-m-d']
    ]
]);
echo '</div>';

//  A readonly Date Range Picker
echo '<label class="control-label">Date Range (Readonly)</label>';
echo '<div class="drp-container">';
echo DateRangePicker::widget([
    'name'=>'date_range_2a',
    'value'=>'2015-10-19 - 2015-11-03',
    'convertFormat'=>true,
    'disabled' => true,
    'readonly' => true,
    'pluginOptions'=>[
        'locale'=>['format'=>'Y-m-d']
    ]
]);
echo '</div>';

//  Date and Time picker with time increment of 15 minutes and without any input group addons.
echo DateRangePicker::widget([
    'name'=>'date_range_3',
    'value'=>'2015-10-19 12:00 AM - 2015-11-03 01:00 PM',
    'convertFormat'=>true,
    'disabled' => true,
    'pluginOptions'=>[
        'timePicker'=>true,
        'timePickerIncrement'=>15,
        'locale'=>['format'=>'Y-m-d h:i A']
    ]
]);

// Single date picker without range.
echo '<div class="input-group drp-container">';
echo DateRangePicker::widget([
    'name'=>'date_range_4',
    'value'=>'01/12/2015',
    'useWithAddon'=>true,
    'disabled' => true,
    'pluginOptions'=>[
        'singleDatePicker'=>true,
        'showDropdowns'=>true
    ]
]) . $addon;
echo '</div>';

// Single date time picker without range.
echo '<div class="input-group drp-container">';
echo DateRangePicker::widget([
    'name'=>'date_range_5',
    'value'=>'2015-10-19 12:00 AM',
    'useWithAddon'=>true,
    'convertFormat'=>true,
    'disabled' => true,
    'pluginOptions'=>[
        'timePicker'=>true,
        'timePickerIncrement'=>15,
        'locale'=>['format' => 'Y-m-d h:i A'],
        'singleDatePicker'=>true,
        'showDropdowns'=>true
    ]
]) . $addon;
echo '</div>';

// Advanced configuration using separate start and end attributes to store information.
// Note that you can have these attributes have their own validation rules in the model.
// In the scenario that your base attribute (e.g. `kvdate1` in this example), does not
// have an initial value, then the initial value will be auto derived from the start and
// end attributes.

// Extension of above scenario using separate start and end attributes
// but without a model. You can set the initial value within
// `startInputOptions` and `endInputOptions`.
echo '<div class="input-group drp-container">';
echo DateRangePicker::widget([
    'name'=>'kvdate2',
    'useWithAddon'=>true,
    'convertFormat'=>true,
    'disabled' => true,
    'startAttribute' => 'from_date',
    'endAttribute' => 'to_date',
    'startInputOptions' => ['value' => '2017-06-11'],
    'endInputOptions' => ['value' => '2017-07-20'],
    'pluginOptions'=>[
        'locale'=>['format' => 'Y-m-d'],
    ]
]) . $addon;
echo '</div>';

// Variation of above scenario by setting a value directly in base attribute
// instead of setting separate attributes. In this case the individual
// attributes will be set automatically.
echo '<div class="input-group drp-container">';
echo DateRangePicker::widget([
    'name'=>'kvdate3',
    'value' => '2018-10-04 - 2018-11-14',
    'useWithAddon'=>true,
    'convertFormat'=>true,
    'disabled' => true,
    'startAttribute' => 'from_date',
    'endAttribute' => 'to_date',
    'pluginOptions'=>[
        'locale'=>['format' => 'Y-m-d'],
    ]
]) . $addon;
echo '</div>';

?>