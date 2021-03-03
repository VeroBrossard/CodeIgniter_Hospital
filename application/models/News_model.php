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
//méthode qui écrit les données dans la base de données. Vous allez utiliser la classe Query Builder pour insérer les informations et utiliser la bibliothèque d'entrée pour obtenir les données publiées
public function set_news()
{
    $this->load->helper('url');

    //Supprime la chaîne passée, en remplaçant tous les espaces par des tirets (-) et s'assure que tout est en minuscules.
    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
            //Cette méthode post() garanti que les données sont nettoyées, vous protégeant des attaques malveillantes des autres
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text')
    );

    return $this->db->insert('news', $data);
}

}
