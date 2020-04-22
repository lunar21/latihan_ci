<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_barang');
		$this->load->helper('url');
		// $this->load->library('pdf');
	}

	public function index($id_barang = null)
	{
		if ($id_barang !=null) {
			$getRes = $this->m_barang->get_Data($id_barang);
			if ($getRes != false) {
				$this->load->view('index.php', 
					array(
					'id_barang' => 'v_edit' ,
					'id_barang' => $getRes[0]['id_barang'],
					'barang' => $getRes[0]['barang'],
					'id_kategori' => $getRes[0]['kategori'],
					'jumlah' => $getRes[0]['jumlah'] 
					)
				);
				# code...
			}
			else{
				redirect(base_url('/index'));
			}
		}else{
			redirect(base_url('/index'));
		}
		// $data['jut'] = $this->m_barang->join_Data()->result();

		// $this->load->view('index',$data);
		// $data['jut'] = $this->m_barang->get_Data('tb_barang')->result();

		// $this->load->view('index', $data);
		#code...
	}

	public function add()
	{
		$data['list'] = $this->m_barang->get_Value('tb_kategori',$where)->result();

		$this->load->view('v_add',$data);
		#code...
	}

	public function add_action()
	{
		$id_barang 	= $this->input->post('id_barang'); 
		$barang 	= $this->input->post('barang');
		$kategori 	= $this->input->post('kategori');
		$jumlah 	= $this->input->post('jumlah');

		$data = array(
			'id_barang' => $id_barang,
			'barang' 	=> $barang,
			'kategori' 	=> $kategori,
			'jumlah' 	=> $jumlah );

		$this->m_barang->input_Data('tb_barang',$data);
		redirect ('barang/index');
		#code...
	}

	public function delete_action($id_barang)
	{
		$where = array('id_barang' => $id_barang);

		$this->m_barang->delete_Data('tb_barang',$where);
		redirect('barang/index');
		# code...
	}

	public function edit($id_barang)
	{
		$where = array('id_barang' => $id_barang);

		$data['jut'] = $this->m_barang->join_Edit('tb_barang',$where)->result();
		$this->load->view('v_edit',$data);
		# code...
	}

	public function update_action()
	{
		$id_barang 	= $this->input->post('id_barang'); 
		$barang 	= $this->input->post('barang');
		$kategori 	= $this->input->post('kategori');
		$jumlah 	= $this->input->post('jumlah');

		$data = array(
			'id_barang' => $id_barang,
			'barang' 	=> $barang,
			'id_kategori' 	=> $kategori,
			'jumlah' 	=> $jumlah );

		$where = array('id_barang' => $id_barang );
		$this->m_barang->update_data('tb_barang',$data,$where);
		redirect('barang/index');
		# code...
	}

	// public function print()
	// {
	// 	$pdf = new FPDF('l','mm','A5');
 //        // membuat halaman baru
 //        $pdf->AddPage();
 //        // setting jenis font yang akan digunakan
 //        $pdf->SetFont('Arial','B',16);
 //        // mencetak string 
 //        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
 //        $pdf->SetFont('Arial','B',12);
 //        $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
 //        // Memberikan space kebawah agar tidak terlalu rapat
 //        $pdf->Cell(10,7,'',0,1);
 //        $pdf->SetFont('Arial','B',10);
 //        $pdf->Cell(20,6,'NIM',1,0);
 //        $pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
 //        $pdf->Cell(27,6,'NO HP',1,0);
 //        $pdf->Cell(25,6,'TANGGAL LHR',1,1);
 //        $pdf->SetFont('Arial','',10);
 //        $data = $this->m_barang->getBarang()->result();
 //        foreach ($data as $row){
 //            $pdf->Cell(20,6,$row->id_barang,1,0);
 //            $pdf->Cell(85,6,$row->barang,1,0);
 //            $pdf->Cell(27,6,$row->kategori,1,0);
 //            $pdf->Cell(25,6,$row->jumlah,1,1); 
 //        }
	// $pdf->Output();
	// }
}