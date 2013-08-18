<?php
/**
 * @var SiteController $this
 * @var TestDrive $model
 */
?>

<div class="midWrap">

    <div class="feedback">
        <h3 class="drive_title">Тест-драйв</h3>
			<span class="title">Пожалуйста, заполните форму, чтобы поучаствовать в тест-драйве автомобиля LUXGEN.
		Мы обязательно свяжемся с вами.</span>

        <?php
        /**
         * @var TbActiveForm $form
         */
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'form-test-drive',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnChange' => true,
            ),
        ));

        if ($model->hasErrors()){
            echo $form->errorSummary($model);
        }
        ?>
        <table class="test_drive_form">
            <tr>
                <td width="240px" style="vertical-align: top;">
                    <?= CHtml::activeLabelEx($model, 'surname'); ?>
                </td>
                <td width="400px">
                    <?= CHtml::activeTextField($model, 'surname'); ?>
                    <?= CHtml::error($model, 'surname'); ?>
                </td>
            </tr>
            <tr>
                <td width="240px" style="vertical-align: top;">
                    <?= CHtml::activeLabelEx($model, 'name'); ?>
                </td>
                <td width="400px">
                    <?= CHtml::activeTextField($model, 'name'); ?>
                    <?= CHtml::error($model, 'name'); ?>
                </td>
            </tr>
            <tr>
                <td width="240px" style="vertical-align: top;">
                    <?= CHtml::activeLabelEx($model, 'patronymic'); ?>
                </td>
                <td width="400px">
                    <?= CHtml::activeTextField($model, 'patronymic'); ?>
                    <?= CHtml::error($model, 'patronymic'); ?>
                </td>
            </tr>
            <tr>
                <td width="240px" style="vertical-align: top;">
                    <?= CHtml::activeLabelEx($model, 'age'); ?>
                </td>
                <td width="400px">
                    <?= CHtml::activeTextField($model, 'age'); ?>
                    <?= CHtml::error($model, 'age'); ?>
                </td>
            </tr>
            <tr>
                <td width="240px" style="vertical-align: top;">
                    <?= CHtml::activeLabelEx($model, 'city'); ?>
                </td>
                <td width="400px">
                    <?= CHtml::activeTextField($model, 'city'); ?>
                    <?= CHtml::error($model, 'city'); ?>
                </td>
            </tr>
            <tr>
                <td width="240px" style="vertical-align: top;">
                    <?= CHtml::activeLabelEx($model, 'start_time'); ?>
                </td>
                <td width="400px">
                    <?= CHtml::activeDropDownList(
                        $model,
                        'start_time',
                        array_merge(array('' => '...'), TestDrive::listTime()));
                    ?>
                    <?= CHtml::error($model, 'start_time'); ?>
                </td>
            </tr>
            <tr>
                <td width="240px" style="vertical-align: top;">
                    <?= CHtml::activeLabelEx($model, 'end_time'); ?>
                </td>
                <td width="400px">
                    <?= CHtml::activeDropDownList(
                        $model,
                        'end_time',
                        array_merge(array('' => '...'), TestDrive::listTime()));
                    ?>
                    <?= CHtml::error($model, 'end_time'); ?>
                </td>
            </tr>
            <tr>
                <td width="240px" style="vertical-align: top;">
                    <?= CHtml::activeLabelEx($model, 'phone'); ?>
                </td>
                <td width="400px">
                    <?= CHtml::activeTextField($model, 'phone'); ?>
                    <?= CHtml::error($model, 'phone'); ?>
                </td>
            </tr>
            <tr>
                <td width="240px" style="vertical-align: top;">
                    <?= CHtml::activeLabelEx($model, 'email'); ?>
                </td>
                <td width="400px">
                    <?= CHtml::activeTextField($model, 'email'); ?>
                    <?= CHtml::error($model, 'email'); ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    $this->widget('bootstrap.widgets.TbButton',
                        array(
                            'buttonType' => 'submit',
                            'type' => 'primary',
                            'label'=>'Отправить'
                        )
                    );
                    ?>
                </td>
            </tr>
        </table>
    <?php $this->endWidget(); ?>
    </div>
</div>
