<?php

class Controller_Upload extends Controller_Template
{

	public function action_index()
	{
		$this->template->title = 'Upload &raquo; Index';
		$this->template->content = View::forge('upload/index');
	}

}
