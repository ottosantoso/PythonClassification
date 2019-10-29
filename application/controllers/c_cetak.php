<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_cetak extends CI_Controller {
	 public function __construct(){
        parent::__construct();
         
        $this->load->model('m_cetak');
    }
     
    public function index(){
        $data['guru'] = $this->m_cetak->view();
        $this->load->view('cetak_guru', $data);
    }
     
    public function siswa(){
    	$data ['siswa'] = $this->m_cetak->view_siswa();
    	$this->load->view('cetak_siswa', $data);
    }

    public function view_siswa(){
        $data ['siswa'] = $this->m_cetak->view_siswa_where();
        $this->load->view('cetak_siswa', $data);
    }

    public function mapel(){
    	$data['mapel'] = $this->m_cetak->view_mapel();
    	$this->load->view('cetak_mapel', $data);
    }

    public function Pengajar(){
        $data['pengajar'] = $this->m_cetak->view_pengajar();
        $this->load->view('cetak_pengajar', $data);
    }

    public function view_pengajar(){
        $data ['siswa'] = $this->m_cetak->view_pengajar_where();
        $this->load->view('cetak_pengajar',$data);
    }

    public function kelas(){
    	$data['kelas'] = $this->m_cetak->view_kelas();
    	$this->load->view('cetak_kelas', $data);
    }

    public function kelas_siswa(){
    	$data['kelassisw'] = $this->m_cetak->view_kelassiswa();
    	$this->load->view('cetak_kelas', $data);
    }

    public function cetak(){
        ob_start();
        $data['guru'] = $this->m_cetak->view();
        $this->load->view('print', $data);
        $html = ob_get_contents();
        ob_end_clean();
         
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('L','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data Guru.pdf', 'D');
    }

    function wali_nilai(){
            $data['content_view']="cetak_raport.php";
            $data['list_data']=$this->m_cetak->view_siswa_where3();
            $this->load->view('home',$data);
        }

    public function raport(){
        ob_start();
        $this->load->model('m_wali');
        $data['nilai'] = $this->m_cetak->view_raport();
        $data['list_data']=$this->m_wali->siswa_nilai();
        //$data['nilai'] = $this->m_cetak->view_raport();
        //$data['nilai'] = $this->m_cetak->view_raport();
        $this->load->view('print_raport', $data);
        $html = ob_get_contents();
        ob_end_clean();
         
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','Legal','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Raport Siswa.pdf', 'D');
    }

    public function deskripsi(){
        ob_start();
        $this->load->model('m_deskripsi');
        $nis=$_GET['nis'];
        $data['list_data']=$this->m_deskripsi->get_deskripsi();
        $deskripsi = $this->db->query("SELECT * FROM deskripsi 
                join siswa on siswa.nis=deskripsi.nis 
                join kelas on kelas.idkelas=deskripsi.idkelas 
                join guru on kelas.walikelas=guru.nip
                join mapel on mapel.idmapel=deskripsi.idmapel
                WHERE deskripsi.nis='$nis'")->result();
        $data['xx'] = $deskripsi;
        $data['deskripsi'] = $this->m_cetak->view_deskripsi();
        $this->load->view('print_deskripsi', $data);
        $html = ob_get_contents();
        ob_end_clean();
         
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('L','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Deskripsi Nilai.pdf', 'D');
    }

    public function cetak_siswa(){
        if($this->input->post('print')!=null){
            ob_start();        
            $data['siswa'] = $this->m_cetak->view_siswaBaru();
            $this->load->view('print_kelassiswa', $data);
            $html = ob_get_contents();
            ob_end_clean();             
            require_once('./assets/html2pdf/html2pdf.class.php');
            $pdf = new HTML2PDF('L','A4','en');
            $pdf->WriteHTML($html);
            $pdf->Output('Data Siswa.pdf', 'D');
        }else if($this->input->post('view')!=null){
             $data ['siswa'] = $this->m_cetak->view_siswa_where();
            $this->load->view('cetak_siswa', $data);
        }
    	
    }

    public function cetak_mapel(){
    	ob_start();
    	$data['mapel'] = $this->m_cetak->view_mapel();
    	$this->load->view('print_mapel', $data);
    	$html = ob_get_contents();
    	ob_end_clean();

    	require_once('./assets/html2pdf/html2pdf.class.php');
    	$pdf = new HTML2PDF('L','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data Mapel.pdf', 'D');
    }

    public function cetak_pengajar(){
        if($this->input->post('print')!=null){
            ob_start();        
            $data['pengajar'] = $this->m_cetak->view_pengajarBaru();
            $this->load->view('printpengajar', $data);
            $html = ob_get_contents();
            ob_end_clean();             
            require_once('./assets/html2pdf/html2pdf.class.php');
            $pdf = new HTML2PDF('L','A4','en');
            $pdf->WriteHTML($html);
            $pdf->Output('Data Pengajar.pdf', 'D');
        }else if($this->input->post('view')!=null){
             $data ['pengajar'] = $this->m_cetak->view_pengajar_where();
            $this->load->view('cetak_pengajar', $data);
        }
    }

    public function cetak_kelas(){
    	ob_start();
    	$data['kelas'] = $this->m_cetak->view_kelas();
    	$this->load->view('print_kelas', $data);
    	$html = ob_get_contents();
    	ob_end_clean();

    	require_once('./assets/html2pdf/html2pdf.class.php');
    	$pdf = new HTML2PDF('L','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data Kelas.pdf', 'D');
    }

    public function cetak_raport(){
        ob_start();
        $data['nilai'] = $this->m_cetak->view_raport();
        $this->load->view('print_kelas', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('L','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Raport.pdf', 'D');
    }

    public function cetak_raport_siswa(){
        ob_start();
        $data['nilai'] = $this->m_cetak->view_raport();
        $this->load->view('print_raport', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('L','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('raport_siswa.pdf', 'D');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */