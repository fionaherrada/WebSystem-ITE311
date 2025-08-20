<?php
<<<<<<< HEAD

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
=======
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        $this->load->view('template');
    }
}
?>
>>>>>>> 13959ea3e45ce4708e852374352e559b87f80e58
