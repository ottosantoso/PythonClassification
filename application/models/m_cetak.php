<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_cetak extends CI_Model
{
	public function view(){
        return $this->db->get('guru')->result();
    }

    public function view_siswa(){
        return $this->db->get('siswa')->result();
    }

    public function view_pengajar(){
        return $this->db->get('pengajar')->result();
    }

    public function view_mapel(){
        return $this->db->get('mapel')->result();
    }

    public function view_siswa_where3(){
       $query=$this->db->query("select siswa.* from siswa join kelassiswa using(nis) join kelas using(idkelas) where kelassiswa.idkelas='".$_GET['idkelas']."'");
        return $query;
    }

    public function view_siswaBaru(){
       $query=$this->db->query("select siswa.* from siswa join kelassiswa using(nis) where idkelas='".$this->input->post('kdkelas')."'");
		return $query->result();
    }
    public function view_pengajarBaru(){
       $query=$this->db->query("select p.kdpengajar, p.nip, g.namaguru, k.namakelas, m.namamapel, p.tahunajaran, p.semester from pengajar p join guru g on p.nip=g.nip join kelas k on p.idkelas=k.idkelas join mapel m on p.idmapel=m.idmapel where p.idkelas='".$this->input->post('kdkelas')."'");
        return $query->result();
    }

    public function view_siswa_where(){
       $query=$this->db->query("select siswa.* from siswa join kelassiswa using(nis) where idkelas='".$this->input->post('kdkelas')."'");
        return $query->result();
    }

    public function view_pengajar_where(){
       $query=$this->db->query("select p.kdpengajar, p.nip, g.namaguru, k.namakelas, m.namamapel, p.tahunajaran, p.semester from pengajar p join guru g on p.nip=g.nip join kelas k on p.idkelas=k.idkelas join mapel m on p.idmapel=m.idmapel where p.idkelas='".$this->input->post('kdkelas')."'");
        return $query->result();
    }

    public function view_raport($nis='', $semester='', $idkelas=''){
        $query=$this->db->query("SELECT n.*, m.namamapel  
       FROM nilai n JOIN mapel m on n.idmapel=m.idmapel JOIN kelas k on n.idkelas=k.idkelas WHERE nis='".$nis."' AND n.semester='".$semester."' AND n.idkelas='".$idkelas."' ");
        return $query;
    }
    public function view_deskripsi($nis='', $semester='', $idkelas=''){
        $query=$this->db->query("SELECT n.*, m.namamapel  
       FROM nilai n JOIN mapel m on n.idmapel=m.idmapel JOIN kelas k on n.idkelas=k.idkelas WHERE nis='".$nis."' AND n.semester='".$semester."' AND n.idkelas='".$idkelas."' ");
        return $query;
    }
}