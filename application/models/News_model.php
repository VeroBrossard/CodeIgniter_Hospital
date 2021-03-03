<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
//there are two methods to view all news items (if slug empty) and one for a specific news item (if slug NOT empty)
        public function get_news($slug = FALSE)
{
        if ($slug === FALSE)
        {
                $query = $this->db->get('news');
                return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
}
}
