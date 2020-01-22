<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Encodegrades extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	
public function _admin_output($output = null)
	{
		$this->load->view('encodegrades.php',(array)$output);
	}

	public function index()
	{
		$this->_admin_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	
	


public function g8_sec1()
	{
		
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			

			$crud->set_table('8section1');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 8-Amity');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		

			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				  
				  ->display_as('1stBackSubjectLearningArea','1st Back Subject Learning Area')
				  ->display_as('1stBackSubjectFinalRating','1st Back Subject Final Rating')
				  ->display_as('BACK1','1st Back Subject Remedial Class Mark')
				  ->display_as('2ndBackSubjectLearningArea','2nd Back Subject Learning Area')
				  ->display_as('2ndBackSubjectFinalRating','2nd Back Subject Final Rating')
				  ->display_as('BACK2','2nd Back Subject Remedial Class Mark')

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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

//SUBJECT UNSET FIELDS NEW SETTING PER SUBJECT 1-4 QUARTER

				 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 $crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');

				

						 
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
		
			
			//$crud->callback_before_insert(array($this,'test_callback'));		
			////$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s1'));
			$crud->callback_before_update(array($this,'general_average8s1'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s1($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 




public function g8_sec2()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
					$crud->set_table('8section2');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 8-Benevolence');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');
 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');		
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			////$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s2'));
			$crud->callback_before_update(array($this,'general_average8s2'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s2($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec3()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			
			$crud->set_table('8section3');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 8-Charity');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

			 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//////$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s3'));
			$crud->callback_before_update(array($this,'general_average8s3'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s3 ($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec4()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section4');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 8-Diligence');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');
 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			////$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s4'));
			$crud->callback_before_update(array($this,'general_average8s4'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s4($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec5()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section5');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 8-Endurance');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

			 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s5'));
			$crud->callback_before_update(array($this,'general_average8s5'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s5($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec6()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section6');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 8-Faithfulness');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

		 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s6'));
			$crud->callback_before_update(array($this,'general_average8s6'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s6($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec7()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section7');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 8-Generosity');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

		 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s7'));
			$crud->callback_before_update(array($this,'general_average8s7'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s7($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 
			
public function g8_sec8()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section8');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 8-Honesty');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

			 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s8'));
			$crud->callback_before_update(array($this,'general_average8s8'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s8($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec9()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section9');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 8-Integrity');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');
 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
				
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s9'));
			$crud->callback_before_update(array($this,'general_average8s9'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s9($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 


public function g8_sec10()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section10');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 8-Joyfulness');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');
 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s10'));
			$crud->callback_before_update(array($this,'general_average8s10'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s10($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec11()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section11');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 8-Kindness');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

				 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s11'));
			$crud->callback_before_update(array($this,'general_average8s11'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s11($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec12()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section12');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 8-Loyalty');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');
 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s12'));
			$crud->callback_before_update(array($this,'general_average8s12'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s12($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec13()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section13');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 8-Modesty');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

				 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s13'));
			$crud->callback_before_update(array($this,'general_average8s13'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s13($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec14()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section14');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

			 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s14'));
			$crud->callback_before_update(array($this,'general_average8s14'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s14($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec15()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section15');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

				 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s15'));
			$crud->callback_before_update(array($this,'general_average8s15'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s15($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec16()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section16');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');
 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s16'));
			$crud->callback_before_update(array($this,'general_average8s16'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s16($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec17()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section17');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

				 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s17'));
			$crud->callback_before_update(array($this,'general_average8s17'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s17($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec18()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section18');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

				 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s18'));
			$crud->callback_before_update(array($this,'general_average8s18'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s18($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec19()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section19');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');
 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s19'));
			$crud->callback_before_update(array($this,'general_average8s19'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s19($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec20()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section20');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');
 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s20'));
			$crud->callback_before_update(array($this,'general_average8s20'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s20($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec21()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section21');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

				 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s21'));
			$crud->callback_before_update(array($this,'general_average8s21'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s21($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec22()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section22');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

				 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s22'));
			$crud->callback_before_update(array($this,'general_average8s22'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s22($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec23()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section23');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

				 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s23'));
			$crud->callback_before_update(array($this,'general_average8s23'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s23($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 

public function g8_sec24()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section24');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

				  $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s24'));
			$crud->callback_before_update(array($this,'general_average8s24'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s24($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 


public function g8_sec25()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
				$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','AR1','AR2','AR3','AR4','ARAVE');
			$crud->set_table('8section25');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('SchoolYear','School Year')
				 ->display_as('firstName','First Name')	 	
				 ->display_as('extension','Middle Name')
				 ->display_as('lastName','Surname')
				 ->display_as('empNumber','Class Adviser')
				 ->display_as('ExtensionName','Extension Name')
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
				  ->display_as('EPP1','TLE 1st QTR')
				 ->display_as('EPP2','TLE 2nd QTR')
				 ->display_as('EPP3','TLE 3rd QTR')
				 ->display_as('EPP4','TLE 4th QTR')
				 ->display_as('EPPAVE','TLE AVERAGE')
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
				 ->display_as('FinalAve','FINAL AVERAGE')
				 ->display_as('EOSY','EOSY Status')
				 ->display_as('EOSYstatus','EOSY Description')
				 ->display_as('yrsinschool','Years in School')
				 ->display_as('ageasofjune','Age as of June')
				 ->display_as('totalattendance','Total No. of Days of Attendance in Curriculum Year')
				 ->display_as('elemschool','Name of Elementary School')
				 ->display_as('elemave','Elementary School General Average')
				 ->display_as('elemSID','Elementary School ID')
				 ->display_as('citation','Citation (If Any)')
				 ->display_as('elemaddress','Elementary School Address')
				 ->display_as('PEPTrating','PEPT Passer Rating')
				 ->display_as('PEPTdate','Date of Examination/Assessment')
				 ->display_as('ALSrating','ALS A & E Passer Rating')
				 ->display_as('otherTC','Name and Address of Testing Center');

				 $crud->unset_add();	
				 //$crud->unset_edit();
				 $crud->unset_delete();

				 $crud->field_type('LRN','readonly');
				 $crud->field_type('lastName','readonly');
				 $crud->field_type('firstName','readonly');
				 $crud->field_type('extension','readonly');
				 $crud->field_type('ExtensionName','readonly');
				 $crud->field_type('empNumber','readonly');
				 $crud->field_type('GradeLevel','readonly');
				 $crud->field_type('SchoolYear','readonly');
				 $crud->field_type('Section','readonly');
				 $crud->field_type('Birthdate','readonly');
				 $crud->field_type('Sex','readonly');			
				 $crud->field_type('BOSY','readonly');
				 $crud->field_type('BOSYstatus','readonly');
				 $crud->field_type('EOSY','readonly');
				 $crud->field_type('EOSYstatus','readonly');

				 $crud->field_type('RemedialStarted','hidden');
				 $crud->field_type('RemedialEnded','hidden');

				 
$crud->field_type('FIL1','hidden');
				 $crud->field_type('FIL2','hidden');
				 $crud->field_type('FIL3','hidden');
				 $crud->field_type('FIL4','hidden');
				 $crud->field_type('FILAVE','hidden');
				 
				 $crud->field_type('ENG1','hidden');
				 $crud->field_type('ENG2','hidden');
				 $crud->field_type('ENG3','hidden');
				 $crud->field_type('ENG4','hidden');
				 $crud->field_type('ENGAVE','hidden');

				 $crud->field_type('MATH1','hidden');
				 $crud->field_type('MATH2','hidden');
				 $crud->field_type('MATH3','hidden');
				 $crud->field_type('MATH4','hidden');
				 $crud->field_type('MATHAVE','hidden');

				 $crud->field_type('SCI1','hidden');
				 $crud->field_type('SCI2','hidden');
				 $crud->field_type('SCI3','hidden');
				 $crud->field_type('SCI4','hidden');
				 $crud->field_type('SCIAVE','hidden');

				 $crud->field_type('AP1','hidden');
				 $crud->field_type('AP2','hidden');
				 $crud->field_type('AP3','hidden');
				 $crud->field_type('AP4','hidden');
				 $crud->field_type('APAVE','hidden');

				 $crud->field_type('ESP1','hidden');
				 $crud->field_type('ESP2','hidden');
				 $crud->field_type('ESP3','hidden');
				 $crud->field_type('ESP4','hidden');
				 $crud->field_type('ESPAVE','hidden');

				 $crud->field_type('EPP1','hidden');
				 $crud->field_type('EPP2','hidden');
				 $crud->field_type('EPP3','hidden');
				 $crud->field_type('EPP4','hidden');
				 $crud->field_type('EPPAVE','hidden');

				 $crud->field_type('MAPEH1','hidden');
				 $crud->field_type('MAPEH2','hidden');
				 $crud->field_type('MAPEH3','hidden');
				 $crud->field_type('MAPEH4','hidden');
				 $crud->field_type('MAPEHAVE','hidden');

				 $crud->field_type('MU1','hidden');
				 $crud->field_type('MU2','hidden');
				 $crud->field_type('MU3','hidden');
				 $crud->field_type('MU4','hidden');
				 $crud->field_type('MUAVE','hidden');

				 //$crud->field_type('AR1','hidden');
				 //$crud->field_type('AR2','hidden');
				 //$crud->field_type('AR3','hidden');
				 //$crud->field_type('AR4','hidden');
				 //$crud->field_type('ARAVE','hidden');

				 $crud->field_type('PE1','hidden');
				 $crud->field_type('PE2','hidden');
				 $crud->field_type('PE3','hidden');
				 $crud->field_type('PE4','hidden');
				 $crud->field_type('PEAVE','hidden');

				 $crud->field_type('HE1','hidden');
				 $crud->field_type('HE2','hidden');
				 $crud->field_type('HE3','hidden');
				 $crud->field_type('HE4','hidden');
				 $crud->field_type('HEAVE','hidden');

				 $crud->field_type('FinalAve','hidden');

				 $crud->field_type('1stBackSubjectLearningArea','hidden');
				 $crud->field_type('1stBackSubjectFinalRating','hidden');

				 $crud->field_type('2ndBackSubjectLearningArea','hidden');
				 $crud->field_type('2ndBackSubjectFinalRating','hidden');

				 $crud->field_type('yrsinschool','hidden');
				 $crud->field_type('ageasofjune','hidden');
				 $crud->field_type('totalattendance','hidden');
				 $crud->field_type('elemschool','hidden');
				 $crud->field_type('elemave','hidden');
				 $crud->field_type('elemSID','hidden');
				 $crud->field_type('citation','hidden');
				 $crud->field_type('elemaddress','hidden');
				 $crud->field_type('PEPTrating','hidden');
				 $crud->field_type('PEPTdate','hidden');
				 $crud->field_type('ALSrating','hidden');
				 $crud->field_type('otherTC','hidden');

				 $crud->field_type('BACK1','hidden');
				 $crud->field_type('BACK2','hidden');
				 $crud->field_type('BACK3','hidden');
				 $crud->field_type('BACK4','hidden');
				 $crud->field_type('BACKAVE','hidden');

				 $crud->field_type('BACK1A','hidden');
				 $crud->field_type('BACK2A','hidden');
				 $crud->field_type('BACK3A','hidden');
				 $crud->field_type('BACK4A','hidden');
				 $crud->field_type('BACKAAVE','hidden');

				 $crud->field_type('BACK1AA','hidden');
				 $crud->field_type('BACK2AA','hidden');
				 $crud->field_type('BACK3AA','hidden');
				 $crud->field_type('BACK4AA','hidden');
				 $crud->field_type('BACKAAAVE','hidden');
			//$crud->set_field_upload('pics','assets/uploads/files');
			//$crud->field_type('LRN','readonly');
			//$crud->field_type('firstName','readonly');
			//$crud->field('ENG2','FIL2','invisible'); 

//FIRST GRADING VIEW TAB -- FOR ALL GRADES
//COMMENT HERE TO UNLOCK 2ND QTR
			//$crud->field_type('ENG2','invisible');$crud->field_type('FIL2','invisible');$crud->field_type('MATH2','invisible');$crud->field_type('SCI2','invisible');$crud->field_type('AP2','invisible');$crud->field_type('ESP2','invisible');$crud->field_type('EPP2','invisible');$crud->field_type('MAPEH2','invisible');$crud->field_type('MU2','invisible');$crud->field_type('AR2','invisible');$crud->field_type('PE2','invisible');$crud->field_type('HE2','invisible');$crud->field_type('BACK2','invisible');$crud->field_type('BACK2A','invisible');$crud->field_type('BACK2AA','invisible');

//COMMENT HERE TO UNLOCK 3RD QTR
			//$crud->field_type('ENG3','invisible');$crud->field_type('FIL3','invisible');$crud->field_type('MATH3','invisible');$crud->field_type('SCI3','invisible');$crud->field_type('AP3','invisible');$crud->field_type('ESP3','invisible');$crud->field_type('EPP3','invisible');$crud->field_type('MU3','invisible');$crud->field_type('MAPEH3','invisible');$crud->field_type('AR3','invisible');$crud->field_type('PE3','invisible');$crud->field_type('HE3','invisible');$crud->field_type('BACK3','invisible');$crud->field_type('BACK3A','invisible');	$crud->field_type('BACK3AA','invisible');

//COMMENT HERE TO UNLOCK 4TH QTR
			//$crud->field_type('ENG4','invisible');$crud->field_type('FIL4','invisible');$crud->field_type('MATH4','invisible');$crud->field_type('SCI4','invisible');$crud->field_type('AP4','invisible');$crud->field_type('ESP4','invisible');$crud->field_type('EPP4','invisible');$crud->field_type('MU4','invisible');$crud->field_type('MAPEH4','invisible');	$crud->field_type('AR4','invisible');$crud->field_type('PE4','invisible');$crud->field_type('HE4','invisible');$crud->field_type('BACK4','invisible');$crud->field_type('BACK4A','invisible');$crud->field_type('BACK4AA','invisible');

//COMMENT HERE TO UNLOCK AVERAGE QTR
			//$crud->field_type('ENGAVE','invisible');	$crud->field_type('FILAVE','invisible');$crud->field_type('MATHAVE','invisible');$crud->field_type('SCIAVE','invisible');$crud->field_type('APAVE','invisible');$crud->field_type('ESPAVE','invisible');$crud->field_type('EPPAVE','invisible');$crud->field_type('MUAVE','invisible');$crud->field_type('MAPEHAVE','invisible');$crud->field_type('ARAVE','invisible');$crud->field_type('PEAVE','invisible');$crud->field_type('HEAVE','invisible');$crud->field_type('BACKAVE','invisible');$crud->field_type('BACKAAVE','invisible');$crud->field_type('BACKAAAVE','invisible');

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
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average8s25'));
			$crud->callback_before_update(array($this,'general_average8s25'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average8s25($post_array) {


$post_array['MAPEH1']= round(($post_array['MU1'] + $post_array['AR1'] + $post_array['PE1'] + $post_array['HE1']) / 4);
$post_array['MAPEH2'] = round(($post_array['MU2'] + $post_array['AR2'] + $post_array['PE2'] + $post_array['HE2']) / 4);
$post_array['MAPEH3'] = round(($post_array['MU3'] + $post_array['AR3'] + $post_array['PE3'] + $post_array['HE3']) / 4);
$post_array['MAPEH4'] = round(($post_array['MU4'] + $post_array['AR4'] + $post_array['PE4'] + $post_array['HE4']) / 4);
$post_array['MAPEHAVE'] = round(($post_array['MAPEH1'] + $post_array['MAPEH2'] + $post_array['MAPEH3'] + $post_array['MAPEH4']) / 4);

$post_array['FILAVE'] = round(($post_array['FIL1'] + $post_array['FIL2'] + $post_array['FIL3'] + $post_array['FIL4']) / 4);
$post_array['ENGAVE'] = round(($post_array['ENG1'] + $post_array['ENG2'] + $post_array['ENG3'] + $post_array['ENG4']) / 4);
$post_array['MATHAVE'] = round(($post_array['MATH1'] + $post_array['MATH2'] + $post_array['MATH3'] + $post_array['MATH4'])/ 4);
$post_array['SCIAVE'] = round(($post_array['SCI1'] + $post_array['SCI2'] + $post_array['SCI3'] + $post_array['SCI4']) / 4);
$post_array['APAVE'] = round(($post_array['AP1'] + $post_array['AP2'] + $post_array['AP3'] + $post_array['AP4']) / 4);
$post_array['ESPAVE'] = round(($post_array['ESP1'] + $post_array['ESP2'] + $post_array['ESP3'] + $post_array['ESP4']) / 4);
$post_array['EPPAVE'] = round(($post_array['EPP1'] + $post_array['EPP2'] + $post_array['EPP3'] + $post_array['EPP4']) / 4);
$post_array['MUAVE'] = ($post_array['MU1'] + $post_array['MU2'] + $post_array['MU3'] + $post_array['MU4']) / 4;
$post_array['ARAVE'] = ($post_array['AR1'] + $post_array['AR2'] + $post_array['AR3'] + $post_array['AR4']) / 4;
$post_array['PEAVE'] = ($post_array['PE1'] + $post_array['PE2'] + $post_array['PE3'] + $post_array['PE4']) / 4;
$post_array['HEAVE'] = ($post_array['HE1'] + $post_array['HE2'] + $post_array['HE3'] + $post_array['HE4']) / 4;

$post_array['FinalAve'] = ($post_array['FILAVE'] + $post_array['ENGAVE'] + $post_array['MATHAVE'] + $post_array['SCIAVE'] + $post_array['APAVE'] + $post_array['ESPAVE'] + $post_array['EPPAVE'] + $post_array['MAPEHAVE']) / 8;
 
return $post_array;
} 


}