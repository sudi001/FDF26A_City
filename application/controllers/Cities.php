<?php

class Cities extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('cities_model');
        $this->load->library('ion_auth');
    }

    public function index() {

        if (!$this->ion_auth->logged_in()) { // remove this elseif if you want to enable this for non-admins
            // redirect them to the home page because they must be an administrator to view this
            show_error('Bejelentkezés nélkül nem tekintheted meg a városokat.');
        } else {
            $records = $this->cities_model->get_list();
            $view_params = [
                'cities' => $records
            ];
            $this->load->helper('url');
            $this->load->view('cities/list', $view_params);
        }
    }

    public function insert() {
        if (!$this->ion_auth->is_admin()) { // remove this elseif if you want to enable this for non-admins
            // redirect them to the home page because they must be an administrator to view this
            show_error('Csak az adminisztrátorok adhatnak hozzá várost.');
        } else {
            if ($this->input->post('submit')) {
                $this->load->library('form_validation');
                $this->form_validation->set_rules('name', 'név', 'required');
                $this->form_validation->set_rules('postal_code', 'irányítószám', 'required');

                if ($this->form_validation->run() == TRUE) {
                    $this->cities_model->insert($this->input->post('name'),
                            $this->input->post('postal_code'));
                    $this->load->helper('url');
                    redirect(base_url('cities'));
                }
            }
            $this->load->helper('form');
            $this->load->view('cities/insert');
        }
    }

    public function edit($id = NULL) {
        if (!$this->ion_auth->is_admin()) { // remove this elseif if you want to enable this for non-admins
            // redirect them to the home page because they must be an administrator to view this
            show_error('Csak az adminisztrátorok módosíthatnak.');
        } else {
            if ($id == NULL) {
                show_error('A szerkesztéshez hiányzik az id!');
            }
            $record = $this->cities_model->select_by_id($id);
            if ($record == NULL) {
                show_error('Nem létezik ilyen rekord!');
            }

            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'név', 'required');
            $this->form_validation->set_rules('postal_code', 'irányítószám', 'required');
            if ($this->form_validation->run() == TRUE) {
                $this->cities_model->update($id,
                        $this->input->post('name'),
                        $this->input->post('postal_code'));
                $this->load->helper('url');
                redirect(base_url('cities'));
            } else {
                $view_params = [
                    'cit' => $record
                ];
                $this->load->helper('form');
                $this->load->view('cities/edit', $view_params);
            }
        }
    }

    public function exportAsCsv() {
        $this->load->dbutil();
        $query = $this->db->query("SELECT * FROM cities");
        $csvdata = $this->dbutil->csv_from_result($query);
        $csvdata = str_replace(",", ";", $csvdata);
        $csvdata = preg_replace('/\s+/', "\n", $csvdata);

        header("Content-type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"my-data.csv\"");
        header("Content-Encoding: UTF-8");
        echo $csvdata;
        exit;
    }

    public function delete($id = NULL) {

        if (!$this->ion_auth->is_admin()) { // remove this elseif if you want to enable this for non-admins
            // redirect them to the home page because they must be an administrator to view this
            show_error('Csak az adminisztrátorok törölhetnek.');
        } else {
            if ($id == NULL) {
                show_error('Hiányzó rekord azonosító!');
            }
            $record = $this->cities_model->select_by_id($id);
            if ($record == NULL) {
                show_error('Ilyen azonosítóval nincs rekord!');
            }
            $this->cities_model->delete($id);
            $this->load->helper('url');
            redirect(base_url('cities'));
        }
    }

}
