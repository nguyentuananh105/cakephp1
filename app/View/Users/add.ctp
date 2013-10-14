<div class="Users form">
<? echo $this->Form->create('User'); ?>
<fieldset>
	<legend> <? echo __('Add User') ?> </legend>
	<?
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('role', array(
			'option' => array('admin' => 'admin','author' => 'Author')
			));
	?>
</fieldset>
<? echo $this->form->end(__('Submit')); ?>
</div>