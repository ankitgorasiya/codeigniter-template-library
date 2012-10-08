<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader 
{
    /**
     * To load module view 
     * this is used for Template Librarry
     * @param type $view
     * @param type $vars
     * @param type $return
     * @param type $path
     * @return type 
     */
    public function theme($view, $vars = array(), $return = FALSE,$path)
    {
        $this->_ci_view_paths = array($path => TRUE);
        return $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
    }
}