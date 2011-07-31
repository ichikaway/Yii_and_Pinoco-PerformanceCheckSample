<h2>Posts</h2>
	<dl>
		<dt><?php echo CHtml::encode($model->getAttributeLabel('id')); ?></dt>
		<dd>
			<?php echo CHtml::encode($model->id); ?>
			&nbsp;
		</dd>
		<dt><?php echo CHtml::encode($model->getAttributeLabel('name')); ?></dt>
		<dd>
			<?php echo CHtml::encode($model->name); ?>
			&nbsp;
		</dd>
		<dt><?php echo CHtml::encode($model->getAttributeLabel('text')); ?></dt>
		<dd>
			<?php echo CHtml::encode($model->text); ?>
			&nbsp;
		</dd>
		<dt><?php echo CHtml::encode($model->getAttributeLabel('created')); ?></dt>
		<dd>
			<?php echo CHtml::encode($model->created); ?>
			&nbsp;
		</dd>
		<dt><?php echo CHtml::encode($model->getAttributeLabel('modified')); ?></dt>
		<dd>
			<?php echo CHtml::encode($model->modified); ?>
			&nbsp;
		</dd>
	</dl>
</div>
