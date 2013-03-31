<h2>Viewing #<?php echo $role->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $role->name; ?></p>

<?php echo Html::anchor('role/edit/'.$role->id, 'Edit'); ?> |
<?php echo Html::anchor('role', 'Back'); ?>