<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Mahasiswa extends CI_Controller {

        // Fungsi : menampilkan seluruh data
        public function index(){

            // Load model + bikin objek
            $this->load->model('dosen_model','dosen1');

            // Menggunakan class model + isi data
            $this->mhs1->id = 1;
            $this->mhs1->nim = '010001';
            $this->mhs1->nama = 'Faiz Fikri';
            $this->mhs1->gender = 'L';
            $this->mhs1->ipk = 3.85;

            // Load model + bikin objek
            $this->load->model('mahasiswa_model','mhs2');

            $this->mhs2->id = 2;
            $this->mhs2->nim = '020001';
            $this->mhs2->nama = 'Pandan Wangi';
            $this->mhs2->gender = 'P';
            $this->mhs2->ipk = 3.35;

            // Menyimpan objek kedalam array
            $list_mhs = [$this->mhs1, $this->mhs2];

            // Menyiapkan data untuk dikirim ke view
            $data['list_mhs'] = $list_mhs;

            // Untuk mengirim data dan menampilkan view
            $this->load->view('header');
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('footer');

        }
    }
?>