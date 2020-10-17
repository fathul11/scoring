<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DBConfig extends CI_Model {

    private $_table  = "employee";
    private $_table2 = "user_role";
    private $_table3 = "jabatan"; 
    private $_table4 = "user_menu";
    private $_table5 = "user_sub_menu";

    public function getJabatan()
    { return $this->db->get($this->_table3); }


    /* ------------------ Model to User ----------------------*/
    public function changePasswordUser($password, $nik)
    {  
        $this->db->set('password', $password);
        $this->db->where('nik', $nik);
        return $this->db->update($this->_table);
    
    }
    /*-------------------- End Model to User ----------------*/

    

    /* --------------- Model to Admin -------------------------*/
    public function getCountPerson()
    {
    $query  = "SELECT COUNT(name) as person FROM {$this->_table}    ";
        $result = $this->db->query($query);
        return $result->row()->person; 
    }

    public function getAllPerson()
    {   $query = "SELECT {$this->_table}.*, {$this->_table3}.`nama_jabatan`
                  FROM {$this->_table} JOIN {$this->_table3}
                  ON {$this->_table}.id_jabatan = {$this->_table3}.`id`";
        return $this->db->query($query)->result(); 
    }

    public function getPerson()
    {   $query = "SELECT {$this->_table}.*, {$this->_table3}.`nama_jabatan`
                  FROM {$this->_table} JOIN {$this->_table3}
                  ON {$this->_table}.id_jabatan = {$this->_table3}.`id`";
        return $this->db->query($query)->row(); 
    }

    public function deleteRole($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->_table2);
    }
    /* --------------- End Model to User -----------------------*/

    

    /* --------------- Model to Menu ---------------------------*/
    public function insertMenu($data)
    {
        return $this->db->insert('user_menu', $data);
    }

    public function getMenu()
    { return $this->db->get('user_menu')->result(); }
    
    public function deleteMenu($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->_table4);
    }

    public function getSubmenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu` 
                  FROM `user_sub_menu` JOIN `user_menu` 
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`";
        return $this->db->query($query)->result();
    }

    public function deleteSubmenu($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->_table5);
    }

    /* ------------------- End Model to Menu -----------------------*/
  

}
