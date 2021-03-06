<?php

class Model_User extends \Orm\Model_Soft
{
	protected static $_properties = array(
		'id',
		'name',
		'role_id',
		'created_at',
		'updated_at',
		'deleted_at',
	);

  protected static $_belongs_to = array(
    'role' => array(
      'key_from' => 'role_id',
      'model_to' => 'Model_Role',
      'key_to' => 'id',
      'cascade_save' => true,
      'cascade_delete' => false,
    ),
  );

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('role_id', 'Role_id', 'required|valid_string[numeric]');

		return $val;
	}

}
