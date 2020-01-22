<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	
public function _view_output($output = null)
	{
		$this->load->view('view.php',(array)$output);
	}

	public function index()
	{
		$this->_view_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}



	public function g7_sec1()
	{
			$crud = new grocery_CRUD();

			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_edit();


			//$crud->unset_back_to_list();
			$crud->unset_list();
			$this->config->set_item('grocery_crud_default_per_page',1);
			$crud->set_table('7section1');
			$crud->set_theme('datatables');
			$crud->set_subject('Students');
			//$crud->field_type('SchoolYear','readonly');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('lastName','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field_type('extension','readonly');
			//$crud->field_type('BOSY','readonly');
			//$crud->field_type('BOSYstatus','readonly');
			//$crud->field_type('EOSY','readonly');
			//$crud->field_type('EOSYstatus','readonly');
			//$crud->field_type('MAPEH1','hidden');

			$crud->columns('SchoolYear','LRN','lastName','firstName','extension','BOSY','BOSYstatus','EOSY','EOSYstatus');
			$crud->fields('SchoolYear','LRN','lastName','firstName','extension','BOSY','BOSYstatus','EOSY','EOSYstatus');		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('BOSY','BOSY Status')
				 ->display_as('BOSYstatus','BOSY Description')
				 ->display_as('FIL1','Filipino 1st QTR')
				 ->display_as('FIL2','Filipino 2nd QTR')
				 ->display_as('FIL3','Filipino 3rd QTR')
				 ->display_as('FIL4','Filipino 4th QTR')
				 ->display_as('FILAVE','Filipino AVERAGE')
				 ->display_as('ENG1','English 1st QTR')
				 ->display_as('ENG2','English 2nd QTR')
				 ->display_as('ENG3','English 3rd QTR')
				 ->display_as('ENG4','English 4th QTR')
				 ->display_as('ENGAVE','English AVERAGE')
				  ->display_as('MATH1','Math 1st QTR')
				 ->display_as('MATH2','Math 2nd QTR')
				 ->display_as('MATH3','Math 3rd QTR')
				 ->display_as('MATH4','Math 4th QTR')
				 ->display_as('MATHAVE','Math AVERAGE')
				  ->display_as('SCI1','Science 1st QTR')
				 ->display_as('SCI2','Science 2nd QTR')
				 ->display_as('SCI3','Science 3rd QTR')
				 ->display_as('SCI4','Science 4th QTR')
				 ->display_as('SCIAVE','Science AVERAGE')
				  ->display_as('AP1','AP 1st QTR')
				 ->display_as('AP2','AP 2nd QTR')
				 ->display_as('AP3','AP 3rd QTR')
				 ->display_as('AP4','AP 4th QTR')
				 ->display_as('APAVE','AP AVERAGE')
				  ->display_as('ESP1','ESP 1st QTR')
				 ->display_as('ESP2','ESP 2nd QTR')
				 ->display_as('ESP3','ESP 3rd QTR')
				 ->display_as('ESP4','ESP 4th QTR')
				 ->display_as('ESPAVE','ESP AVERAGE')
				  ->display_as('EPP1','EPP 1st QTR')
				 ->display_as('EPP2','EPP 2nd QTR')
				 ->display_as('EPP3','EPP 3rd QTR')
				 ->display_as('EPP4','EPP 4th QTR')
				 ->display_as('EPPAVE','EPP AVERAGE')
				  ->display_as('MAPEH1','MAPEH 1st QTR')
				 ->display_as('MAPEH2','MAPEH 2nd QTR')
				 ->display_as('MAPEH3','MAPEH 3rd QTR')
				 ->display_as('MAPEH4','MAPEH 4th QTR')
				 ->display_as('MAPEHAVE','MAPEH AVERAGE')
				  ->display_as('MU1','Music 1st QTR')
				 ->display_as('MU2','Music 2nd QTR')
				 ->display_as('MU3','Music 3rd QTR')
				 ->display_as('MU4','Music 4th QTR')
				 ->display_as('MUAVE','Music AVERAGE')
				  ->display_as('AR1','Arts 1st QTR')
				 ->display_as('AR2','Arts 2nd QTR')
				 ->display_as('AR3','Arts 3rd QTR')
				 ->display_as('AR4','Arts 4th QTR')
				 ->display_as('ARAVE','Arts AVERAGE')
				  ->display_as('PE1','PE 1st QTR')
				 ->display_as('PE2','PE 2nd QTR')
				 ->display_as('PE3','PE 3rd QTR')
				 ->display_as('PE4','PE 4th QTR')
				 ->display_as('PEAVE','PE AVERAGE')
				  ->display_as('HE1','Health 1st QTR')
				 ->display_as('HE2','Health 2nd QTR')
				 ->display_as('HE3','Health 3rd QTR')
				 ->display_as('HE4','Health 4th QTR')
				 ->display_as('HEAVE','Health AVERAGE')
				  ->display_as('BACK1','BACK SUBJECT 1st QTR')
				 ->display_as('BACK2','BACK-1 SUBJECT 2nd QTR')
				 ->display_as('BACK3','BACK-1 SUBJECT 3rd QTR')
				 ->display_as('BACK4','BACK-1 SUBJECT 4th QTR')
				 ->display_as('BACKAVE','BACK-1 SUBJECT AVERAGE')
				 ->display_as('BACK1A','BACK-2 SUBJECT 1st QTR')
				 ->display_as('BACK2A','BACK-2 SUBJECT 2nd QTR')
				 ->display_as('BACK3A','BACK-2 SUBJECT 3rd QTR')
				 ->display_as('BACK4A','BACK-2 SUBJECT 4th QTR')
				 ->display_as('BACKAAVE','BACK-2 SUBJECT AVERAGE')
				 ->display_as('BACK1AA','BACK-3 SUBJECT 1st QTR')
				 ->display_as('BACK2AA','BACK-3 SUBJECT 2nd QTR')
				 ->display_as('BACK3AA','BACK-3 SUBJECT 3rd QTR')
				 ->display_as('BACK4AA','BACK-3 SUBJECT 4th QTR')
				 ->display_as('BACKAAAVE','BACK-3 SUBJECT AVERAGE')
				 //->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description');



				 //$crud->unset_columns('SchoolYear','BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','hidden');$crud->field_type('FIL2','hidden');$crud->field_type('MATH2','hidden');$crud->field_type('SCI2','hidden');$crud->field_type('AP2','hidden');$crud->field_type('ESP2','hidden');$crud->field_type('EPP2','hidden');$crud->field_type('MAPEH2','hidden');$crud->field_type('MU2','hidden');$crud->field_type('AR2','hidden');$crud->field_type('PE2','hidden');$crud->field_type('HE2','hidden');$crud->field_type('BACK2','hidden');$crud->field_type('BACK2A','hidden');$crud->field_type('BACK2AA','hidden');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','hidden');$crud->field_type('FIL3','hidden');$crud->field_type('MATH3','hidden');$crud->field_type('SCI3','hidden');$crud->field_type('AP3','hidden');$crud->field_type('ESP3','hidden');$crud->field_type('EPP3','hidden');$crud->field_type('MU3','hidden');$crud->field_type('MAPEH3','hidden');$crud->field_type('AR3','hidden');$crud->field_type('PE3','hidden');$crud->field_type('HE3','hidden');$crud->field_type('BACK3','hidden');$crud->field_type('BACK3A','hidden');	$crud->field_type('BACK3AA','hidden');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','hidden');$crud->field_type('FIL4','hidden');$crud->field_type('MATH4','hidden');$crud->field_type('SCI4','hidden');$crud->field_type('AP4','hidden');$crud->field_type('ESP4','hidden');$crud->field_type('EPP4','hidden');$crud->field_type('MU4','hidden');$crud->field_type('MAPEH4','hidden');	$crud->field_type('AR4','hidden');$crud->field_type('PE4','hidden');$crud->field_type('HE4','hidden');$crud->field_type('BACK4','hidden');$crud->field_type('BACK4A','hidden');$crud->field_type('BACK4AA','hidden');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','hidden');	$crud->field_type('FILAVE','hidden');$crud->field_type('MATHAVE','hidden');$crud->field_type('SCIAVE','hidden');$crud->field_type('APAVE','hidden');$crud->field_type('ESPAVE','hidden');$crud->field_type('EPPAVE','hidden');$crud->field_type('MUAVE','hidden');$crud->field_type('MAPEHAVE','hidden');$crud->field_type('ARAVE','hidden');$crud->field_type('PEAVE','hidden');$crud->field_type('HEAVE','hidden');$crud->field_type('BACKAVE','hidden');$crud->field_type('BACKAAVE','hidden');$crud->field_type('BACKAAAVE','hidden');

//$crud->callback_before_insert(array($this,'test_callback'));	
//COMMENT HERE TO SHOW READ ONLY AVERAGE
			//$crud->field_type('ENGAVE','readonly');
			//$crud->field_type('FILAVE','readonly');
			//$crud->field_type('MATHAVE','readonly');
			//$crud->field_type('SCIAVE','readonly');
			//$crud->field_type('APAVE','readonly');
			//$crud->field_type('ESPAVE','readonly');
			//$crud->field_type('EPPAVE','readonly');
			//$crud->field_type('MUAVE','readonly');
			//$crud->field_type('MAPEHAVE','readonly');
			//$crud->field_type('ARAVE','readonly');
			//$crud->field_type('PEAVE','readonly');
			//$crud->field_type('HEAVE','readonly');
			//$crud->field_type('BACKAVE','readonly');
			//$crud->field_type('BACKAAVE','readonly');
			//$crud->field_type('BACKAAAVE','readonly');
		
			//$crud->unset_add();	
			//$crud->unset_columns();
			//$crud->unset_edit();
			//$crud->unset_delete();
			
			//$crud->field_type('FinalAve','invisible');
				
			//$crud->field_type('FinalAve','invisible'); 
			//$crud->callback_before_insert(array($this,'general_average7s1'));
			//$crud->callback_before_update(array($this,'general_average7s1'));
			
			  
			  $output = $crud->render();
			$this->_view_output($output);
	}
	
	//function general_average7s1($post_array) {


//$post_array['MAPEH1'] = ($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4;
//$post_array['MAPEH2'] = ($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4;
//$post_array['MAPEH3'] = ($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4;
//$post_array['MAPEH4'] = ($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4;
//$post_array['MAPEHAVE'] = ($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4;

//$post_array['FILAVE'] = ($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4;
//$post_array['ENGAVE'] = ($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4;
//$post_array['MATHAVE'] = ($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4;
//$post_array['SCIAVE'] = ($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4;
//$post_array['APAVE'] = ($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4;
//$post_array['ESPAVE'] = ($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4;
//$post_array['EPPAVE'] = ($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4;
//$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
//$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
//$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
//$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

//$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
//return $post_array;
	
} 