<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }

  public function pageOutput($page)
  {
    $this->load->view('/dashboard/header');
    $this->load->view('/dashboard/top-menu');
    $this->load->view('/dashboard/slide-menu');
    $this->load->view('/dashboard/pages/'.$page);
    $this->load->view('/dashboard/footer');
  }

  public function index()
  {
    $this->pageOutput('upload');
    // $this->load->view('index_view');
  }

  public function uploadImg() {
    $options = array(
      'script_url' => site_url('index.php/dashboard/uploadImg'),
      'upload_dir' => APPPATH . '../assets/uploads/files/',
      'upload_url' => site_url('assets/uploads/files/')
     );
    $this->load->library('UploadHandler', $options);
  }

}
