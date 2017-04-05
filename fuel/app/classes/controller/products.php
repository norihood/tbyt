<?php

class Controller_Products extends Controller_Base
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

	public function action_detail()
	{
		$this->template->content = View::forge('frontend/detail_product.php');
	}
}