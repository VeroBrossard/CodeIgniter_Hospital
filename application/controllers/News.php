<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }
// method to view all news items 
        public function index()
        {
          {
            $data['news'] = $this->news_model->get_news();
            $data['title'] = 'News archive';
            var_dump($data);
            $this->load->view('templates/header', $data);
            $this->load->view('news/index', $data);
            $this->load->view('templates/footer');
    }
        }
// one for a specific news item
public function view_1News($slug = NULL)
{
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item']))
        {
                show_404();
        }

        $data['title'] = $data['news_item']['title'] .'dans News.php by VB';

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
}
}