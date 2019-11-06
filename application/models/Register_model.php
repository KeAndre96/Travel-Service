<?php
class Register_model extends CI_Model
{
  function insert($data)
  {
    $this->db->insert('myusers', $data);
    return $this->db->insert_id();
  }
}


 ?>
