<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->helper('url');
	}

	public function index(){
	  // $file_name = "index_view";
	  // $data = null;
    //  $this->template($file_name, $data);
    $this->load->view('templates/header_template');
    $this->load->view('index_view');
    $this->load->view('templates/footer_template');
	}

	public function aboutus($section = 'overview'){

	   // Load the template engines first..
	   $this->load->view('templates/header_template');

       switch ($section) {
       	// switch case to create a spa for the about us page section..
       	case 'ourhistory':

       		$data["page_name"] = 'our History';
       		// $this->load->view('templates/header_template');
       		$this->load->view('templates/page_title_view', $data);
       		$this->load->view('templates/sidebar_view');
       		$this->load->view('aboutsections/history_section');
       		// $this->load->view('templates/footer_template');
       		break;
       	
       	case 'ourteam':

       		$data["page_name"] = 'our team';
       		// $this->load->view('templates/header_template');
       		$this->load->view('templates/page_title_view', $data);
       		$this->load->view('templates/sidebar_view');
       		$this->load->view('aboutsections/team_section');
       		// $this->load->view('templates/footer_template');
       		break;

              case 'faqs':

       		$data["page_name"] = 'FAQS';
       		// $this->load->view('templates/header_template');
       		$this->load->view('templates/page_title_view', $data);
       		$this->load->view('templates/sidebar_view');
       		$this->load->view('aboutsections/faq_section');
       		// $this->load->view('templates/footer_template');
       		break;

       	case 'testimonials':

       		$data["page_name"] = 'testimonials';
       		// $this->load->view('templates/header_template');
       		$this->load->view('templates/page_title_view', $data);
       		$this->load->view('templates/sidebar_view');
       		$this->load->view('aboutsections/testimonials_section');
       		// $this->load->view('templates/footer_template');
       		break;

       	case 'career':

       		$data["page_name"] = 'career';
       		// $this->load->view('templates/header_template');
       		$this->load->view('templates/page_title_view', $data);
       		$this->load->view('templates/sidebar_view');
       		$this->load->view('aboutsections/career_section');
       		// $this->load->view('templates/footer_template');
       		break;

       	default:
       	    // by default the site launches the about us overview page..
       		$data["page_name"] = 'overview';
       		// $this->load->view('templates/header_template');
       		$this->load->view('templates/page_title_view', $data);
       		$this->load->view('templates/sidebar_view');
       		$this->load->view('aboutsections/overview_section');
       		// $this->load->view('templates/footer_template');
       		break;
       }

       $this->load->view('templates/footer_template');
	}

	public function template($file_name = "", $data = array()){
		$this->load->view('templates/header_template');
		$this->load->view($file_name, $data);
		$this->load->view('templates/footer_template');
	}

	public function contactus(){
     $file_name = "contact_view";
	   $data = null;
     $this->template($file_name, $data);
	}

   public function oursectors(){
      $file_name = "sectors_view";
      $data = null;
      $this->template($file_name, $data);    
   }

   public function services(){
      $file_name = "services_view";
      $data = null;
      $this->template($file_name, $data);    
   }  
}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */