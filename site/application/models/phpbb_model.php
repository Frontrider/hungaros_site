
<?php

class Phpbb_model extends CI_Model {
        var $session_running = false;
        public function __construct()
        {
            parent::__construct();
            //initialising phpbb.

        }

        public function initsession()
        {

        }
        public function get_session()
        {

        }

        function get_latest_news()
        {
          $this->load->database("forum");

          $query = $this->db->query('SELECT * FROM phpbb_posts where forum_id=4 ORDER BY post_time DESC limit 4');
          return $query->result();
        }
}
