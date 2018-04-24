<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {

	private $request;

	function __construct()
    {
        parent::__construct();
		$this->load->model('tasks_model');
		$this->request = json_decode(file_get_contents('php://input'));
    }

	
	public function index()
	{
		$this->load->view('index');
	}

	function read()
    {

        $data = $this->tasks_model->get_all();

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
	}

	function save()
    {
        $reccord = array
        (            
            'keep' =>$this->request->keep,
        );
		$this->tasks_model->insert($reccord);
       
	}
	
	function delete($id){
		$this->tasks_model->delete($id);
	}

	function update()
    {
        $reccord = array
        (            
            'keep' =>$this->request->keep,
        );
		$this->tasks_model->update($this->request->id, $reccord);
       
	}
	
}
