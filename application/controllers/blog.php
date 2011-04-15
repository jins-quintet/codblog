
<?php
class Blog extends CI_Controller {

	public function index()
	{
        $this->load->model('model_blog');
        $data['title'] = "My Real Title";
		$data['heading'] = "My Real Heading";
        $data['loop_head']="My loop Heading";
        
        $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
        
        $data['dbdata_list']=$this->model_blog->get_entries(); 

		$this->load->view('bolg_view', $data);
	}

	public function comments()
	{
    if ( ! isset($_POST['name']) && ! isset($_POST['des'])  ){
        $name = FALSE;
        $des=FALSE;
     header('Location:blog');
    }
    else{
        $data['name']=$this->input->post('name');
        $data['des']=$this->input->post('des');
       // print_r($data);
        $this->load->model('model_blog');
        $result=$this->model_blog->post_entries($data);
       // $this->load->set_notice('Please fill in all required fields');
        header('Location:blog');
		//  $this->load->view('bolg_view', $data);;
    }
      
		
	}
    function edit_blog(){
        parent::CI_Controller();
       $test = $this->input->get('id');
        var_dump($test);
        print $test;
        die;
        
    }
}
?>