<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Matakuliah extends CI_Controller {

        // Fungsi : menampilkan seluruh data
        public function index(){

            // Load model + bikin objek
            $this->load->model('matakuliah_model','mk1');
        
            // Menggunakan class model + isi data
            $this->mk1->id = 1;
            $this->mk1->nama = 'Pemrograman Web 2';
            $this->mk1->sks = 3;
            $this->mk1->kode = 'PW2';

            // Load model + bikin objek
            $this->load->model('matakuliah_model','mk2');

            $this->mk2->id = 2;
            $this->mk2->nama = 'Basis Data';
            $this->mk2->sks = 4;
            $this->mk2->kode = 'BS1';

            // Load model + bikin objek
            $this->load->model('matakuliah_model','mk3');

            $this->mk3->id = 3;
            $this->mk3->nama = 'Jaringan Komputer';
            $this->mk3->sks = '3';
            $this->mk3->kode = 'jarkom';

            // Menyimpan objek kedalam array
            $list_mk = [$this->mk1, $this->mk2, $this->mk3];

            // Menyiapkan data untuk dikirim ke view
            $data['list_mk'] = $list_mk;

            // Untuk mengirim data dan menampilkan view
            $this->load->view('header');
            $this->load->view('matakuliah/index', $data);
            $this->load->view('footer');
        }
    }
?>