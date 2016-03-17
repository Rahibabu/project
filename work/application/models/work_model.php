  <?php 


  class Work_model extends CI_Model
  {
    function __construct()
    {
      parent::__construct();

    }
    public function insert($table,$data)
    {
      $query= $this->db->insert($table,$data);
      if($query)
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    public function DBSelect($table)
    {
      $query= $this->db->get($table);
      return $query->result();
    }
    public function DBdelete($table,$wherecondition)
    {
      $this->db->where($wherecondition);
      $query =$this->db->delete($table);
      return $query;
    }
public function DBSelectesingleRow($table,$where)
{
  $this->db->where($where);
  $query=$this->db->get($table);
  return $query->row();
}
public function DBupdate($tablename,$data,$Condition)
{
  $this->db->where($Condition);
  $query= $this->db->update($tablename,$data);
  return $query;
}

    }
 


  ?>