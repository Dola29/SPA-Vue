<?php

class Tasks_model extends CI_Model
{

    function get_all()
    {
        $query = $this->db->query("SELECT * FROM tasks ");
        return $query->result_array();
    }

    function insert($data)
    {       
        $this->db->set('created_at', 'now()', FALSE);
        $this->db->set('updated_at', 'now()', FALSE);
        $this->db->insert('tasks', $data);
        return $this->db->insert_id();
    }

    function update($id, $data)
    {
        $this->db->set('created_at', 'now()', FALSE);
        $this->db->set('updated_at', 'now()', FALSE);
        $this->db->where('id', $id);

        return $this->db->update('tasks', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tasks');
    }

}
