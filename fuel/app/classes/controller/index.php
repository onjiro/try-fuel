<?php

class Controller_Index extends Controller_Hybrid
{

	public function action_index()
	{
		$this->template->title = 'Index &raquo; Index';
		$this->template->content = View::forge('index/index');
	}

  public function get_list()
  {
    return $this->response(array(
                                 'foo' => Input::get('foo'),
                                 'baz' => array(
                                                1, 50, 219
                                                ),
                                 'empty' => null,
                                 ));
  }
}
