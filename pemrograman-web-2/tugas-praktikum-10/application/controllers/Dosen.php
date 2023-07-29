<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Dosen extends CI_Controller {

        // Fungsi : menampilkan seluruh data
        public function index(){

            // Load model + bikin objek
            $this->load->model('dosen_model','dsn1');
        
            // Menggunakan class model + isi data
            $this->dsn1->id = 1;
            $this->dsn1->nidn = '010001';
            $this->dsn1->nama = 'Faiz Fikri';
            $this->dsn1->gender = 'L';
            $this->dsn1->pendidikan = 'S1';

            // Load model + bikin objek
            $this->load->model('dosen_model','dsn2');

            $this->dsn2->id = 2;
            $this->dsn2->nidn = '020001';
            $this->dsn2->nama = 'Pandan Wangi';
            $this->dsn2->gender = 'P';
            $this->dsn2->pendidikan = 'S1';

            // Load model + bikin objek
            $this->load->model('dosen_model','dsn3');

            $this->dsn3->id = 3;
            $this->dsn3->nidn = '020001';
            $this->dsn3->nama = 'Pandan Wangi';
            $this->dsn3->gender = 'P';
            $this->dsn3->pendidikan = 'S1';

            // Menyimpan objek kedalam array
            $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];

            // Menyiapkan data untuk dikirim ke view
            $data['list_dsn'] = $list_dsn;

            // Untuk mengirim data dan menampilkan view
            // $this->load->view('header');
            // $this->load->view('dosen/index', $data);
            // $this->load->view('footer');

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('dosen/index',$data);
            $this->load->view('layout/footer');
        }

        public function create(){
            $data['judul'] = 'Form Kelola Dosen';
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('dosen/create',$data);
            $this->load->view('layout/footer');
        }

        public function save(){
            $this->load->model('dosen_model','dsn');

            $this->dsn->nidn = $this->input->post('nidn');
            $this->dsn->nama = $this->input->post('nama');
            $this->dsn->gender = $this->input->post('gender');
            $this->dsn->tmp_lahir = $this->input->post('tmp_lahir');
            $this->dsn->tgl_lahir = $this->input->post('tgl_lahir');
            $this->dsn->pendidikan = $this->input->post('pendidikan');

            $data['dsn'] = $this->dsn;

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('dosen/view',$data);
            $this->load->view('layout/footer');
        }
    }
?>