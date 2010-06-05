<?php
class Main extends Controller {
	function Main()
	{	
		parent::Controller();
		$this->load->model('link_model');
	}
	
	function index()
	{	$data = $this->config->item('basic_elements');
		$data['next']=1;
		$data['entries'] = $this->link_model->get_entries();

		$this->load->view('incs/template', $data);
	}
	
	function page($page=0)
	{
		if($page==0){
		redirect();
		}
		else{
		$data = $this->config->item('basic_elements');
		$data['prev']= $page-1;
		$data['next'] = $page + 1;
		$data['entries'] = $this->link_model->get_entries($page);

		$this->load->view('incs/template', $data);
		}
	}
	
	function create()
	{
		$input= $this->input->post('body');
		$data = array(
			'body' => $input);
			
		if(!empty($input)){
			$this->link_model->insert_links($data);
		}
		redirect();
	}
	
	function link($id)
	{	$data = $this->config->item('basic_elements');
		$data['title'] = "Link-Bundler - Bundle $id";
		$data['content'] = 'bundle_view';
	
		$data['links'] = $this->link_model->explode_links($id);
		$data['script'] = $this->link_model->create_script($data['links']);
		
		$this->load->view('incs/template', $data);
	}
}
