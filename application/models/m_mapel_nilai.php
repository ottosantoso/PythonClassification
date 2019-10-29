<?php
Class M_mapel_nilai extends CI_Model{
	function all(){
		return $this->db->query('select n.*, m.namamapel, g.namaguru from nilai n join mapel m on n.idmapel=m.idmapel join pengajar p on n.nip=p.kdpengajar join guru g on p.nip=g.nip GROUP BY n.nip, n.idkelas, n.idmapel, n.semester')->result();
	}

	function switch_status($idnilai){
		$nilai = $this->db->get_where('nilai', array('idnilai' => $idnilai))->row();

		switch($nilai->status){
			case "Pending":
			$this->db->where('nip', $nilai->nip);
			$this->db->where('idkelas', $nilai->idkelas);
			$this->db->where('idmapel', $nilai->idmapel);
			$this->db->where('semester', $nilai->semester);
			$this->db->update('nilai', array('status' => 'Disetujui'));
			break;
			case "Disetujui":
			$this->db->where('nip', $nilai->nip);
			$this->db->where('idkelas', $nilai->idkelas);
			$this->db->where('idmapel', $nilai->idmapel);
			$this->db->where('semester', $nilai->semester);
			$this->db->update('nilai', array('status' => 'Pending'));
			break;
		}
	}
}