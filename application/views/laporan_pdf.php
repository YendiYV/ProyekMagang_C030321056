<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Cuti</title>
</head>

<body>
    <?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>

    <?php

$id = 0;
foreach($cuti as $i)
:
$id++;
$id_cuti = $i['id_cuti'];
$id_user = $i['id_user'];
$nama_lengkap = $i['nama_lengkap'];
$alasan = $i['alasan'];
$nip = $i['nip'];
$pangkat = $i['pangkat'];
$jabatan = $i['jabatan'];
$perihal_cuti = $i['perihal_cuti'];
$tgl_diajukan = $i['tgl_diajukan'];
$mulai = $i['mulai'];
$berakhir = $i['berakhir'];
$id_status_cuti1 = $i['id_status_cuti1'];
$id_status_cuti2 = $i['id_status_cuti2'];
$id_status_cuti3 = $i['id_status_cuti3'];

?>

    <?php $diff = abs(strtotime($mulai) - strtotime($berakhir));
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    ?>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%; font-size:12pt;"><span
            style="height:0pt; text-align:left; display:block; position:absolute; z-index:-1;"><img
                src="<?=base_url();?>assets/login/images/logo.jpg"
                width="105" height="105" alt="" class="fr-fir fr-dib fr-draggable"></span><strong><span
                style="font-family:'Times New Roman';">PEMERINTAH PROVINSI KALIMANTAN SELATAN</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%; font-size:12pt;"><strong><span
                style="font-family:'Times New Roman';">PLN TARAKAN CABANG KSKT</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%; font-size:14pt;"><strong><span
                style="font-family:'Times New Roman';">UPTB PENGELOLAAN PENDAPATAN DAERAH</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%; font-size:14pt;"><strong><span
                style="font-family:'Times New Roman';">WILAYAH KALIMANTAN SELATAN</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:150%;"><span
            style="font-family:Arial;">Jl. Pangeran Hidayatullah No.22 Banjarbaru</span></p>
    <hr>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="font-family:'Times New Roman';">&nbsp;</span></p>
    <p
        style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt; text-indent:36pt; text-align:justify; line-height:150%;">
        <span style="font-family:'Times New Roman';">Banjarbaru, <?= tgl_indo($tgl_diajukan)?></span>
    </p>
    <p
        style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt; text-indent:36pt; text-align:justify; line-height:150%;">
        <span style="font-family:'Times New Roman';">Kepada</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="font-family:'Times New Roman';">Nomor</span><span
            style="width:4.84pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">: 020/
            30 /Penda/2023</span><span style="width:11.14pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">Yth.
            Ma</span><span style="font-family:'Times New Roman';">nejer PLN Tarakan Cabang KSKT
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Lampiran</span><span style="font-family:'Times New Roman';">&nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-family:'Times New Roman';">: 1 (satu) lembar</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp; &nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;Daerah Provinsi Kalimantan Selatan&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="font-family:'Times New Roman';">Perihal</span><span
            style="width:4.84pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">:
            <?=$perihal_cuti?>&nbsp;</span><span style="width:22.14pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">Wilayah Kota Banjarbaru&nbsp;</span></p>
    <p
        style="margin-top:0pt; margin-left:36pt; margin-bottom:0pt; text-indent:36pt; text-align:justify; line-height:150%;">
        <span style="font-family:'Times New Roman';">&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">Karena Alasan Penting</span><span
            style="width:1.09pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">Di-</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">Banjarbaru</span><span
            style="width:6.02pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">Bersama
            ini diteruskan usul Cuti Karena Alasan Penting operator Kasi Pendataan operator Penagihan Provinsi Sumatera
            Selatan Wilayah Kota Pagaralam, atas nama saudara :</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;Nama</span><span
            style="width:6.99pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">:
            <?=$nama_lengkap?></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;NIP</span><span
            style="width:16.75pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">:
            <?=$nip?></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;Bidang</span><span
            style="width:16.75pt; display:inline-block;">&nbsp;</span><span
            style="width:20pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">:
            <?=$pangkat?></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="font-family:'Times New Roman';">&nbsp;Jabatan</span><span
            style="width:0.27pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">: <?=$jabatan?></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:150%;"><span
            style="font-family:'Times New Roman';">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span
            style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">Dengan
            ini saya mengajukan Permohonan Cuti Karena Alasan Penting selama <?=$days?> hari kerja, yaitu
            terhitung mulai
            tanggal <?=$mulai?> s.d <?=$berakhir?> yang akan di pergunakan untuk <?=$alasan?>.</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:150%;"><span
        style="width:36pt; display:inline-block;">&nbsp;</span><span
        style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">Demikian
        Permohonan ini saya ajukan, atas pertimbangan dan perhatian Bapak Manajer diucapkan terima kasih.</span>
        </p><br><br><br>
        
        <div style="text-align: right; margin-right: 30px;">
                <p style="font-family: 'Times New Roman'; margin: 0;">Banjarbaru, <span id="tanggalMulai"><?=$mulai?></span></p><br><br><br>
                <p style="margin-top: 10px;">__________________________</p>
                <p style="font-family: 'Times New Roman'; margin: 0;"><?=$nama_lengkap?></p>
        </div>


    <p></p>
    <?php endforeach; ?>
</body>

</html>