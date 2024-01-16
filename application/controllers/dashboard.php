<?php
class Dashboard extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load the Dashboard_model
        $this->load->model('dashboard_model');

        // Check if the user is logged in
        if (!$this->session->userdata('logged_in')) {
            redirect('login'); // Redirect to the login page if not logged in
        }

        // Check if the logged-in user is an admin
        if ($this->session->userdata('account_type') !== 'Admin') {
            show_404(); // Or redirect to an error page or handle unauthorized access
        }
    }

    public function index() {
        // Get the total count of items
        $data['total_items'] = $this->Dashboard_model->getTotalItemsCount();
        
        // Load your view passing the total items count
        $this->load->view('dashboard', $data);
    }
}
?>
