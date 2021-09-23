<?php
class Sepatu extends CI_Controller
{

  public function index()
  {
    $this->load->view('templates/header');
    $this->load->view('view-form-toko');
    $this->load->view('templates/footer');
  }
  public function hasil()
  {
    $this->load->helper('rupiah_helper');

    $nama = $this->input->post('nama');
    $nohp = $this->input->post('nohp');
    $merk = $this->input->post('merk');
    $size = $this->input->post('size');
    if ($merk == "Nike") {
      $harga = "375000";
    } else if ($merk == "Adidas"){
      $harga = "300000";
    } else if ($merk == "Kickers") {
      $harga = "250000";
    } else if ($merk == "Eiger"){
      $harga = "275000";
    } else if ($merk == "Bucherri"){
      $harga = "400000";
    } else {
      $harga = "0";
    }
    $this->input->post(floatval('harga'));


    $data = [
      'nama' => $nama,
      'nohp' => $nohp,
      'merk' => $merk,
      'size' => $size,
      'harga' => $harga
    ];


  ////  $data = [
  ////  'nama' => $this->input->post('nama'),
  ////  'nohp' => $this->input->post('nohp'),
  ////  'merk' => $this->input->post('merk'),
  ////  'size' => $this->input->post('size'),
  ////  'harga' => $this->input->post('harga'),

  ////  ];

      $this->load->helper('rupiah_helper');
      $this->load->view('templates/header');
      $this->load->view('view-data-toko', $data);

      $this->load->view('templates/footer');

    }
  }
