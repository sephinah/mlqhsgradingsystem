<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	
public function _admin_output($output = null)
	{
		$this->load->view('admin.php',(array)$output);
	}

	public function index()
	{
		$this->_admin_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	
	


public function encode()
	{
		
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			
			$crud->set_table('7section1');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Superuser access');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
			$crud->columns();
			//$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');


			//$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			
			$crud->unset_fields('empNumber','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');



						$crud->unset_fields('empNumber','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE','SY20182019BACK3','SY20182019BACK4','SY20182019BACKAVE','SY20182019BACK1A','SY20182019BACK2A','SY20182019BACK3A','SY20182019BACK4A','SY20182019BACKAAVE','SY20182019BACK1AA','SY20182019BACK2AA','SY20182019BACK3AA','SY20182019BACK4AA','SY20182019BACKAAAVE','SY20182019FIL1','SY20182019FIL2','SY20182019FIL3','SY20182019FIL4','SY20182019FILAVE','SY20182019ENG1','SY20182019ENG2','SY20182019ENG3','SY20182019ENG4','SY20182019ENGAVE','SY20182019MATH1','SY20182019MATH2','SY20182019MATH3','SY20182019MATH4','SY20182019MATHAVE','SY20182019SCI1','SY20182019SCI2','SY20182019SCI3','SY20182019SCI4','SY20182019SCIAVE','SY20182019AP1','SY20182019AP2','SY20182019AP3','SY20182019AP4','SY20182019APAVE','SY20182019ESP1','SY20182019ESP2','SY20182019ESP3','SY20182019ESP4','SY20182019ESPAVE','SY20182019EPP1','SY20182019EPP2','SY20182019EPP3','SY20182019EPP4','SY20182019EPPAVE','SY20182019MAPEH1','SY20182019MAPEH2','SY20182019MAPEH3','SY20182019MAPEH4','SY20182019MAPEHAVE','SY20182019MU1','SY20182019MU2','SY20182019MU3','SY20182019MU4','SY20182019MUAVE','SY20182019AR1','SY20182019AR2','SY20182019AR3','SY20182019AR4','SY20182019ARAVE','SY20182019PE1','SY20182019PE2','SY20182019PE3','SY20182019PE4','SY20182019PEAVE','SY20182019HE1','SY20182019HE2','SY20182019HE3','SY20182019HE4','SY20182019HEAVE','SY20182019FinalAve','SY20182019yrsinschool','SY20182019ageasofjune','SY20182019totalattendance','SY20182019elemschool','SY20182019elemave','SY20182019elemSID','SY20182019citation','SY20182019elemaddress','SY20182019PEPTrating','SY20182019PEPTdate','SY20182019ALSrating','SY20182019otherTC','SY20182019BOSY','SY20182019BOSYstatus','SY20182019EOSY','SY20182019EOSYstatus','SY201820191stBackSubjectLearningArea','SY201820191stBackSubjectFinalRating','SY20182019BACK1','SY201820192ndBackSubjectLearningArea','SY201820192ndBackSubjectFinalRating','SY20182019BACK2','SY20182019RemedialStarted','SY20182019RemedialEnded','SY20192020FIL1','SY20192020FIL2','SY20192020FIL3','SY20192020FIL4','SY20192020FILAVE','SY20192020ENG1','SY20192020ENG2','SY20192020ENG3','SY20192020ENG4','SY20192020ENGAVE','SY20192020MATH1','SY20192020MATH2','SY20192020MATH3','SY20192020MATH4','SY20192020MATHAVE','SY20192020SCI1','SY20192020SCI2','SY20192020SCI3','SY20192020SCI4','SY20192020SCIAVE','SY20192020AP1','SY20192020AP2','SY20192020AP3','SY20192020AP4','SY20192020APAVE','SY20192020ESP1','SY20192020ESP2','SY20192020ESP3','SY20192020ESP4','SY20192020ESPAVE','SY20192020EPP1','SY20192020EPP2','SY20192020EPP3','SY20192020EPP4','SY20192020EPPAVE','SY20192020MAPEH1','SY20192020MAPEH2','SY20192020MAPEH3','SY20192020MAPEH4','SY20192020MAPEHAVE','SY20192020MU1','SY20192020MU2','SY20192020MU3','SY20192020MU4','SY20192020MUAVE','SY20192020AR1','SY20192020AR2','SY20192020AR3','SY20192020AR4','SY20192020ARAVE','SY20192020PE1','SY20192020PE2','SY20192020PE3','SY20192020PE4','SY20192020PEAVE','SY20192020HE1','SY20192020HE2','SY20192020HE3','SY20192020HE4','SY20192020HEAVE','SY20192020FinalAve','SY20192020yrsinschool','SY20192020ageasofjune','SY20192020totalattendance','SY20192020elemschool','SY20192020elemave','SY20192020elemSID','SY20192020citation','SY20192020elemaddress','SY20192020PEPTrating','SY20192020PEPTdate','SY20192020ALSrating','SY20192020otherTC','SY20192020BOSY','SY20192020BOSYstatus','SY20192020EOSY','SY20192020EOSYstatus','SY201920201stBackSubjectLearningArea','SY201920201stBackSubjectFinalRating','SY20192020BACK1','SY201920202ndBackSubjectLearningArea','SY201920202ndBackSubjectFinalRating','SY20192020BACK2','SY20192020RemedialStarted','SY20192020RemedialEnded','SY20202021FIL1','SY20202021FIL2','SY20202021FIL3','SY20202021FIL4','SY20202021FILAVE','SY20202021ENG1','SY20202021ENG2','SY20202021ENG3','SY20202021ENG4','SY20202021ENGAVE','SY20202021MATH1','SY20202021MATH2','SY20202021MATH3','SY20202021MATH4','SY20202021MATHAVE','SY20202021SCI1','SY20202021SCI2','SY20202021SCI3','SY20202021SCI4','SY20202021SCIAVE','SY20202021AP1','SY20202021AP2','SY20202021AP3','SY20202021AP4','SY20202021APAVE','SY20202021ESP1','SY20202021ESP2','SY20202021ESP3','SY20202021ESP4','SY20202021ESPAVE','SY20202021EPP1','SY20202021EPP2','SY20202021EPP3','SY20202021EPP4','SY20202021EPPAVE','SY20202021MAPEH1','SY20202021MAPEH2','SY20202021MAPEH3','SY20202021MAPEH4','SY20202021MAPEHAVE','SY20202021MU1','SY20202021MU2','SY20202021MU3','SY20202021MU4','SY20202021MUAVE','SY20202021AR1','SY20202021AR2','SY20202021AR3','SY20202021AR4','SY20202021ARAVE','SY20202021PE1','SY20202021PE2','SY20202021PE3','SY20202021PE4','SY20202021PEAVE','SY20202021HE1','SY20202021HE2','SY20202021HE3','SY20202021HE4','SY20202021HEAVE','SY20202021FinalAve','SY20202021yrsinschool','SY20202021ageasofjune','SY20202021totalattendance','SY20202021elemschool','SY20202021elemave','SY20202021elemSID','SY20202021citation','SY20202021elemaddress','SY20202021PEPTrating','SY20202021PEPTdate','SY20202021ALSrating','SY20202021otherTC','SY20202021BOSY','SY20202021BOSYstatus','SY20202021EOSY','SY20202021EOSYstatus','SY202020211stBackSubjectLearningArea','SY202020211stBackSubjectFinalRating','SY20202021BACK1','SY202020212ndBackSubjectLearningArea','SY202020212ndBackSubjectFinalRating','SY20202021BACK2','SY20202021RemedialStarted','SY20202021RemedialEnded','SY20192020BACK3','SY20192020BACK4','SY20192020BACKAVE','SY20192020BACK1A','SY20192020BACK2A','SY20192020BACK3A','SY20192020BACK4A','SY20192020BACKAAVE','SY20192020BACK1AA','SY20192020BACK2AA','SY20192020BACK3AA','SY20192020BACK4AA','SY20192020BACKAAAVE','SY20202021BACK3','SY20202021BACK4','SY20202021BACKAVE','SY20202021BACK1A','SY20202021BACK2A','SY20202021BACK3A','SY20202021BACK4A','SY20202021BACKAAVE','SY20202021BACK1AA','SY20202021BACK2AA','SY20202021BACK3AA','SY20202021BACK4AA','SY20202021BACKAAAVE');
			$crud->unset_columns('empNumber','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');


		


			//$crud->add_fields('SchoolYear','YearLevel','Section','Adviser','BOSY');
			//$crud->callback_column('pics');
			$crud->display_as('LRN',"(LRN) - Learner's Reference Number ")
				->display_as('GradeLevel','SY2017-2018 Grade Level')
				->display_as('Section','SY2017-2018 Section')
				->display_as('SchoolYear','Current School Year Enrolled')
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













				 

				 //$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
				 //$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 //$crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			$crud->field_type('SY2017-2018','readonly');
			$crud->field_type('SY2018-2019','readonly');
			$crud->field_type('SY2019-2020','readonly');
			$crud->field_type('SY2020-2021','readonly');
			
			//$crud->callback_before_insert(array($this,'test_callback'));		
			////$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s1'));
			$crud->callback_before_update(array($this,'general_average7s1'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s1($post_array) {


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




public function g7_sec2()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section2');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 7-Benevolence');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
			$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			////$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s2'));
			$crud->callback_before_update(array($this,'general_average7s2'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s2($post_array) {


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

public function g7_sec3()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section3');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 7-Charity');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
			$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			//$crud->field_type('ENGAVE','invisible');
			//$crud->field_type('FILAVE','invisible');
			//$crud->field_type('MATHAVE','invisible');
			//$crud->field_type('SCIAVE','invisible');
			//$crud->field_type('APAVE','invisible');
			//$crud->field_type('ESPAVE','invisible');
			//$crud->field_type('EPPAVE','invisible');
			//$crud->field_type('MUAVE','invisible');
			//$crud->field_type('MAPEHAVE','invisible');
			//$crud->field_type('ARAVE','invisible');
			//$crud->field_type('PEAVE','invisible');
			//$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//////$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s3'));
			$crud->callback_before_update(array($this,'general_average7s3'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s3 ($post_array) {


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

public function g7_sec4()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section4');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 7-Diligence');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname');
			$crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			////$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s4'));
			$crud->callback_before_update(array($this,'general_average7s4'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s4($post_array) {


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

public function g7_sec5()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section5');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 7-Endurance');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s5'));
			$crud->callback_before_update(array($this,'general_average7s5'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s5($post_array) {


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

public function g7_sec6()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section6');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 7-Faithfulness');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s6'));
			$crud->callback_before_update(array($this,'general_average7s6'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s6($post_array) {


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

public function g7_sec7()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section7');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 7-Generosity');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s7'));
			$crud->callback_before_update(array($this,'general_average7s7'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s7($post_array) {


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
			
public function g7_sec8()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section8');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 7-Honesty');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s8'));
			$crud->callback_before_update(array($this,'general_average7s8'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s8($post_array) {


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

public function g7_sec9()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section9');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 7-Integrity');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s9'));
			$crud->callback_before_update(array($this,'general_average7s9'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s9($post_array) {


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


public function g7_sec10()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section10');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 7-Joyfulness');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s10'));
			$crud->callback_before_update(array($this,'general_average7s10'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s10($post_array) {


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

public function g7_sec11()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section11');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 7-Kindness');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s11'));
			$crud->callback_before_update(array($this,'general_average7s11'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s11($post_array) {


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

public function g7_sec12()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section12');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 7-Loyalty');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s12'));
			$crud->callback_before_update(array($this,'general_average7s12'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s12($post_array) {


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

public function g7_sec13()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section13');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Grade 7-Modesty');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s13'));
			$crud->callback_before_update(array($this,'general_average7s13'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s13($post_array) {


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

public function g7_sec14()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section14');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s14'));
			$crud->callback_before_update(array($this,'general_average7s14'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s14($post_array) {


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

public function g7_sec15()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section15');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s15'));
			$crud->callback_before_update(array($this,'general_average7s15'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s15($post_array) {


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

public function g7_sec16()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section16');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s16'));
			$crud->callback_before_update(array($this,'general_average7s16'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s16($post_array) {


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

public function g7_sec17()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section17');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s17'));
			$crud->callback_before_update(array($this,'general_average7s17'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s17($post_array) {


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

public function g7_sec18()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section18');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s18'));
			$crud->callback_before_update(array($this,'general_average7s18'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s18($post_array) {


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

public function g7_sec19()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section19');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s19'));
			$crud->callback_before_update(array($this,'general_average7s19'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s19($post_array) {


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

public function g7_sec20()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section20');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s20'));
			$crud->callback_before_update(array($this,'general_average7s20'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s20($post_array) {


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

public function g7_sec21()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section21');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s21'));
			$crud->callback_before_update(array($this,'general_average7s21'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s21($post_array) {


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

public function g7_sec22()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section22');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s22'));
			$crud->callback_before_update(array($this,'general_average7s22'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s22($post_array) {


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

public function g7_sec23()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section23');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s23'));
			$crud->callback_before_update(array($this,'general_average7s23'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s23($post_array) {


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

public function g7_sec24()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section24');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s24'));
			$crud->callback_before_update(array($this,'general_average7s24'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s24($post_array) {


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


public function g7_sec25()
	{
			$crud = new grocery_CRUD();
		
			//$this->config->set_item('grocery_crud_default_per_page',50);
			$crud->set_table('7section25');
			$crud->set_theme('bootstrap');
			$crud->set_subject('Students');
			//$crud->set_relation('Class Adviser','students_faculty','faculty','empNumber','surname','priority');
			$crud->set_relation('empNumber','faculty','surname'); $crud->columns('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->fields('LRN','lastName','firstName','extension','ExtensionName','empNumber','GradeLevel','Section','SchoolYear','Sex','Birthdate','FIL1','FIL2','FIL3','FIL4','FILAVE','ENG1','ENG2','ENG3','ENG4','ENGAVE','MATH1','MATH2','MATH3','MATH4','MATHAVE','SCI1','SCI2','SCI3','SCI4','SCIAVE','AP1','AP2','AP3','AP4','APAVE','ESP1','ESP2','ESP3','ESP4','ESPAVE','EPP1','EPP2','EPP3','EPP4','EPPAVE','MAPEH1','MAPEH2','MAPEH3','MAPEH4','MAPEHAVE','MU1','MU2','MU3','MU4','MUAVE','AR1','AR2','AR3','AR4','ARAVE','PE1','PE2','PE3','PE4','PEAVE','HE1','HE2','HE3','HE4','HEAVE','FinalAve','yrsinschool','ageasofjune','totalattendance','elemschool','elemave','elemSID','citation','elemaddress','PEPTrating','PEPTdate','ALSrating','otherTC','BOSY','BOSYstatus','EOSY','EOSYstatus','1stBackSubjectLearningArea','1stBackSubjectFinalRating','BACK1','2ndBackSubjectLearningArea','2ndBackSubjectFinalRating','BACK2','RemedialStarted','RemedialEnded');
			$crud->unset_fields('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				 $crud->unset_columns('BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
		
		


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

				 $crud->unset_columns('BOSY','BOSYstatus','EOSY','EOSYstatus','BACK1','BACK2','BACK3','BACK4','BACKAVE','BACK1A','BACK2A','BACK3A','BACK4A','BACKAAVE','BACK1AA','BACK2AA','BACK3AA','BACK4AA','BACKAAAVE');
				
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
			
			$crud->field_type('ENGAVE','invisible');
			$crud->field_type('FILAVE','invisible');
			$crud->field_type('MATHAVE','invisible');
			$crud->field_type('SCIAVE','invisible');
			$crud->field_type('APAVE','invisible');
			$crud->field_type('ESPAVE','invisible');
			$crud->field_type('EPPAVE','invisible');
			$crud->field_type('MUAVE','invisible');
			$crud->field_type('MAPEHAVE','invisible');
			$crud->field_type('ARAVE','invisible');
			$crud->field_type('PEAVE','invisible');
			$crud->field_type('HEAVE','invisible');
			$crud->field_type('BACKAVE','invisible');
			$crud->field_type('BACKAAVE','invisible');
			$crud->field_type('BACKAAAVE','invisible');
			
			//$crud->field_type('FinalAve','invisible');
			//$crud->callback_before_insert(array($this,'test_callback'));		
			//$crud->field_type('FinalAve','invisible'); 
			$crud->callback_before_insert(array($this,'general_average7s25'));
			$crud->callback_before_update(array($this,'general_average7s25'));
			
			  
			  $output = $crud->render();
			$this->_admin_output($output);
	}
	
	function general_average7s25($post_array) {


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