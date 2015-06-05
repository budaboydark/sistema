<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pages
 *
 * @author Rodrigo
 */
class pages extends CI_Controller {

    function index() {
        $this->load->helpers('url');
        $dados = array(
            'titulo_pagina' => 'Intranet',
            'view_principal' => 'Principal',
            'view_pagina' => 'Home'
        );
        $this->load->view('templates/header');
        $this->load->view('pages/home', $dados);
        $this->load->view('templates/footer');
    }

    function view($page = 'home') {
        $dados = array(
            'titulo_pagina' => 'Intranet',
            'view_principal' => 'Principal',
            'view_pagina' => $page
        );
        $this->load->view('templates/header',$dados);
        $this->load->view('pages/'.$page, $dados);
        $this->load->view('templates/footer');
    }

    function login() {
        $this->load->helpers('url');
        $dados = array(
            'titulo_pagina' => 'Intranet',
            'view_principal' => 'Principal',
            'view_pagina' => 'Login'
        );
        $this->load->view('templates/header', $dados);
        $this->load->view('pages/login', $dados);
        $this->load->view('templates/footer');
    }

}

?>
