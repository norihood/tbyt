<?php

class Controller_Base extends Controller_Template
{
   /**
    * @var string page template
    */
    public $template = 'frontend/template';

    public $path_tpl = 'frontend/partial/';

    public $config_tpl = array(
        'top_header' => 1,
        'mid_header' => 1,
        'bot_header' => 1,
        'slider' => 1,
        'top_footer' => 1,
        'wig_footer' => 1,
        'breadcrumb' => 1,
        'left_sidebar' => 1
        );

    /**
     * Load the template and create the $this->template object
     */
    public function before()
    {
        if ( ! empty($this->template) and is_string($this->template))
        {
            // Load the template
            $this->template = \View::forge($this->template);
        }
        Lang::load(Lang::get_lang());

        return parent::before();
    }

    /**
     * After controller method has run output the template
     *
     * @param  Response  $response
     */
    public function after($response)
    {
        // If nothing was returned default to the template
        if ($response === null)
        {
            //load part of template by config_tpl
            foreach ($this->config_tpl as $view_name => $value) {
                if($value){
                    $this->template->$view_name = View::forge( $this->path_tpl . $view_name);
                }
            }

            $response = $this->template;
        }

        return parent::after($response);
    }
}
