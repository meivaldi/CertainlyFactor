<?php
	ob_start();
	include('lib/TCPDF-master/tcpdf.php');

	class MYPDF extends TCPDF {
	  public function Header() {
	    $isi_header = "";
	    $this->writeHTML($isi_header, false, false, false, false, '');
	  }
	  public function Footer() {
	    $isi_footer = "";
	    $this->writeHTML($isi_footer, false, false, false, false, '');
	  }
	}

	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'LEGAL', true, 'UTF-8', false);

	$pdf->SetTitle('Hasil Diagnosa');
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

	$pdf->SetFont('helvetica', '', 7);

	$pdf->AddPage();
?>

<?php
	
	$kode = $_POST['kode'];
	$nama_kerusakan = $_POST['nama_kerusakan'];
	$gejala = json_decode($_POST['gejala']);
	$solusi = $_POST['solusi'];
	$jumlah = $_POST['jumlah'];
	$hasil = $_POST['hasil'];
	$status = $_POST['status'];

	$html = '
		<style type="text/css">
		 h3 {
		 	
		 }
		</style>
		<h3 style="font-size: 22px; text-align: center; text-justify: inter-word;"><center>HASIL DIAGNOSA KERUSAKAN KOMPUTER LABORATORIUM SMK NEGERI 1 GALANG</center></h3>
		<table style="margin-top: 200px;">
		  <tr>
		    <td><span style="font-size: 15px;">Kode PC</span></td>
		    <td><span style="font-size: 15px;"><b>'.$kode.'</b></span></td>
		  </tr>
		  <tr>
		  	<td><span style="font-size: 15px;">Nama Kerusakan</span></td>
		    <td><span style="font-size: 15px;"><b>'.$nama_kerusakan.'</b></span></td>
		  </tr>
		  <tr>
		    <td><span style="font-size: 15px;">Gejala</span></td>
		    <td><span style="font-size: 15px;"><b>'.$gejala[0].'</b></span></td>
		  </tr>';

	for ($i = 1; $i < count($gejala); $i++) {
		$html .= '<tr>
					<td></td>
					<td><span style="font-size: 15px;"><b>'.$gejala[$i].'</b></span></td>
				  </tr>';
	}

  $html .= '<tr>
		    <td><span style="font-size: 15px;">Solusi</span></td>
		    <td><span style="font-size: 15px;"><b>'.$solusi.'</b></span></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td colspan="2"><span style="font-size: 15px;">Bersarkan hasil perhitungan, maka kerusakan '.$nama_kerusakan.' memiliki tingkat keyakinan sistem <b>'. $hasil * 100 .'%</b> dan memiliki persentase nilai keyakinan <b>"'.$status.'"</b></span></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  	<td><span style="font-size: 15px;">Galang, '.Date('d M Y').'</span></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr><tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr><tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  </tr>
		  <tr>
		  	<td></td>
		  	<td><span style="font-size: 15px;"><b>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</b></span></td>
		  </tr>
		</table>';

	$pdf->writeHTML($html, true, false, true, false, '');
	$pdf->lastPage();

	ob_clean();

	$pdf->Output('Rekap Absen.pdf', 'I');
?>