<?php 
    $this->load->view('sds/load/head');
    $this->load->view('sds/load/top_bar');
    $this->load->view('sds/load/side_bar');
    $this->load->view('sds/load/foot_bar');
    $this->load->view('sds/load/top_nav');
    $this->load->view('sds/page/'.$page);
    $this->load->view('sds/load/foot');
?>