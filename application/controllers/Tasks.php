<?php 
class Tasks extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load form_validation dan model
        $this->load->library('form_validation');
        $this->load->model('Task_model'); // Tambahkan baris ini untuk meload model
    }

    public function index() {
        // Ambil semua data tugas dari model
        $data['tasks'] = $this->Task_model->get_all_tasks();
        // Load view untuk menampilkan daftar tugas
        $this->load->view('tasks/index', $data);
    }

    public function create() {
        // Validasi form untuk title
        $this->form_validation->set_rules('title', 'Title', 'required');

        // Jika validasi gagal, tampilkan form lagi
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tasks/create');
        } else {
            // Jika validasi berhasil, simpan data dan redirect
            $this->store(); // Panggil method store untuk menyimpan
        }
    }

    public function store() {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('due_date', 'Due Date', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tasks/create');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'due_date' => $this->input->post('due_date'),
                'status' => $this->input->post('status')
            ];
    
            $this->Task_model->insert_task($data);
            redirect('tasks');
        }
    }    

    public function edit($id) {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('due_date', 'Due Date', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $data['task'] = $this->Task_model->get_task($id);
            $this->load->view('tasks/edit', $data);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'due_date' => $this->input->post('due_date'),
                'status' => $this->input->post('status')
            ];
    
            $this->Task_model->update_task($id, $data);
            redirect('tasks');
        }
    }
    

    public function delete($id) {
        $this->Task_model->delete_task($id);
        redirect('tasks');
    }
    
}
