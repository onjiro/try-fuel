<h2>Viewing #<?php echo $user->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $user->name; ?></p>
<p>
	<strong>RoleId:</strong>
	<?php echo $user->role_id; ?></p>

<?php echo Html::anchor('user/edit/'.$user->id, 'Edit'); ?> |
<?php echo Html::anchor('user', 'Back'); ?>