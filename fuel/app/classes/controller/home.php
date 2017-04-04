<?php

class Controller_home extends Controller_Base
{
	/**
	 * home index
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$this->template->content = View::forge('frontend/index.php');
	}

}
