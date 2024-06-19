<div class="view">
    Patient
    <b><?php echo CHtml::encode($data->getAttributeLabel('patient_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->patient_id), array('view', 'id'=>$data->patient_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
    <?php echo CHtml::encode($data->first_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
    <?php echo CHtml::encode($data->last_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('date_of_birth')); ?>:</b>
    <?php echo CHtml::encode($data->date_of_birth); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
    <?php echo CHtml::encode($data->gender); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('contact_number')); ?>:</b>
    <?php echo CHtml::encode($data->contact_number); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
    <?php echo CHtml::encode($data->address); ?>
    <br />
</div>
