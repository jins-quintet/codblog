<?php
class Model_blog extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    function get_entries()
    {
       // $this->blog_db=$this->load->database('blog',TRUE);


        $query = $this->db->get('blog');
         //print_r($query->result());
         //   die;
        return $query->result();
    }
    function post_entries($data)
    {
        $query = $this->db->insert('blog',$data);
        return $query;
      
    }
}
?>