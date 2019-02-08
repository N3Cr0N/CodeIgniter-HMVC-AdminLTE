<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
* Index Page for this controller.
*
* Maps to the following URL
*      http://example.com/index.php/welcome
*  - or -
*      http://example.com/index.php/welcome/index
*  - or -
* Since this controller is set as the default controller in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/<method_name>
* @see https://codeigniter.com/user_guide/general/urls.html
*/

class Welcome extends CI_Controller
{
    /**
     * Function to load the welcome template
     *
     * @method index
     *
     * @return [string] [description]
     */
    public function index()
    {
        // Load the welcome template
        $this->load->view('welcome_message');
    }
}
