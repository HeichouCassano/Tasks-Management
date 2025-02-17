<?php
class Task_model extends CI_Model {

    public function get_all_tasks() {
        return $this->db->get('tasks')->result_array();
    }

    public function insert_task() {
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'due_date' => $this->input->post('due_date'),
            'status' => 'pending'
        );
        return $this->db->insert('tasks', $data);
    }
    
    public function get_task($id) {
        return $this->db->get_where('tasks', ['id' => $id])->row_array();
    }
    
    public function update_task($id) {
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'due_date' => $this->input->post('due_date'),
            'status' => $this->input->post('status')
        );
        $this->db->where('id', $id);
        return $this->db->update('tasks', $data);
    }
    
    public function delete_task($id) {
        return $this->db->delete('tasks', array('id' => $id));
    }
    
}
