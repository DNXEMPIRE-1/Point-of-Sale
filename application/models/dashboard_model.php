<?php
class Dashboard_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getTotalItemsCount() {
        $query = $this->db->get('items');
        return $query->num_rows();
    }

    public function getTotalSalesCount() {
        $query = $this->db->get('sales');
        return $query->num_rows();
    }

    public function getTotalCategoriesCount() {
        $query = $this->db->get('category');
        return $query->num_rows();
    }

    public function getTotalAccountsCount() {
        $query = $this->db->get('accounts');
        return $query->num_rows();
    }
}

?>
