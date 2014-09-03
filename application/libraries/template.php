<?php
/**
 * Created by JetBrains PhpStorm.
 * User: reck
 * Date: 5/17/13
 * Time: 10:59 PM
 * To change this template use File | Settings | File Templates.
 */
class template
{
 protected $_armaweb;
    function __construct()
    {
        $this->_armaweb=&get_instance();

    }
    function display($template,$data=null)
    {
        $data['_nav']=$this->_armaweb->load->view('template/nav',$data,true);
        $data['_slide']=$this->_armaweb->load->view('template/slide',$data,true);
        $data['_welcome']=$this->_armaweb->load->view('template/welcome',$data,true);
        $data['_menu']=$this->_armaweb->load->view('template/menu',$data,true);
        $data['_info']=$this->_armaweb->load->view('template/info',$data,true);
        $data['_newproducts']=$this->_armaweb->load->view('template/newproduct',$data,true);
        $data['_footer']=$this->_armaweb->load->view('template/footer',$data,true);
        $this->_armaweb->load->view('/template.php',$data);


    }

}
