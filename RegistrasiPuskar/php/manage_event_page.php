<html>
<head>
    <?php 
    include("connect.php"); 
    if(isset($_GET['id'])){
        $que = mysqli_query($con,"select * from detail_acara where id_acara='".$_GET['id']."'");
        $arr = mysqli_fetch_array($que);
        $judul = $arr['judul_acara'];
        $detail_event = $arr['penjelasan_acara'];
        $start_date = $arr['tanggal_mulai'];
        $end_date = $arr['tanggal_selesai'];
        $id=$_GET['id'];
        $var_nama_panggilan=$arr['nama_panggilan'];
        $var_l_p=$arr['l_p'];
        $var_jurusan=$arr['jurusan'];
        $var_ipk = $arr['ipk'];
        $var_skkk=$arr['skkk'];
        $var_asal_univ=$arr['asal_universitas'];
        $var_id_line=$arr['id_line'];
        $var_ktp_sim = $arr['no_ktp_sim'];
        $var_alergi_vegan=$arr['alergi_vegan'];
        $var_ukuran_kaos=$arr['ukuran_kaos'];
        $var_gambar_ukuran_kaos=$arr['gambar_ukuran_kaos'];
        $var_emergency_contact = $arr['emergency_contact'];
        $var_penyakit_khusus=$arr['penyakit_khusus'];
        $var_foto_diri=$arr['foto_diri'];
        $var_pilih_perusahaan=$arr['pilih_perusahaan'];
        $var_pilih_sesi = $arr['pilih_sesi'];
        $var_bukti_transfer=$arr['bukti_transfer'];
        $var_kelengkapan_form=$arr['kelengkapan_form'];
        $var_sistem_cicilan=$arr['sistem_cicilan'];
        $var_cashback=$arr['cashback'];
    }
    else{
        $id = 0;
        $judul ="";
        $start_date="";
        $end_date="";
        $detail_event = "";
    }
    if(isset($_GET['submit'])){
        if($id==0){
            mysqli_query($con,"INSERT INTO acara (id_acara, nama_acara) VALUES ('".$_GET['event_name']."')");
            $que = mysqli_query($con,"select * from acara where nama_acara='".$_GET['event_name']."'");
            $arr = mysqli_fetch_array($que);
            $id = $arr['id_acara'];
            mysqli_query($con,"INSERT INTO detail_acara (judul_acara,penjelasan_acara,tanggal_mulai,tanggal_selesai,id_acara,nama_lengkap,nrp,no_hp,alamat_email,nama_panggilan,l_p,jurusan,ipk,skkk,asal_universitas,id_line,no_ktp_sim,alergi_vegan,ukuran_kaos,gambar_ukuran_kaos,emergency_contact,penyakit_khusus,foto_diri,pilih_perusahaan,pilih_sesi,bukti_transfer,kelengkapan_form,sistem_cicilan,cashback) VALUES ('".$_GET['event_name']."','".$_GET['textEdit']."','".$_GET['event_start_date']."','".$_GET['event_end_date']."','".$id."',true,true,true,true,'".$_GET['nama_panggilan_cb']."','".$_GET['l_p_cb']."','".$_GET['jurusan_cb']."','".$_GET['ipk_cb']."','".$_GET['skkk_cb']."','".$_GET['asal_universitas_cb']."','".$_GET['id_line_cb']."','".$_GET['ktp_sim_cb']."','".$_GET['alergi_vegan_cb']."','".$_GET['ukuran_kaos_cb']."','".$_GET['gambar_ukuran_kaos_cb']."','".$_GET['emergency_contact_cb']."','".$_GET['penyakit_khusus_cb']."','".$_GET['foto_diri_cb']."','".$_GET['perusahaan_cb']."','".$_GET['sesi_cb']."','".$_GET['form_cb']."','".$_GET['cicilan_cb']."','".$_GET['cashback_cb']."')");
        }
        else{
            
        }
    }
    ?>
    <title>Admin Acara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
    <meta charset="utf-8">
    <style>
    .row.content{
        height:100%;
    } 
        .sidenav{
            background-color: #f1f1f1;
            height:100%;
        }
        table,th,td{
            border: 1px;
        }
        #textEditor{
            width:75%;
            height:50%;
        }
    </style>
    <script type="text/javascript">
    function getContent(){
		document.getElementById("nama_panggilan_cb").checked=<?php echo $var_nama_panggilan ?>;
        document.getElementById("l_p_cb").checked=<?php echo $var_l_p ?>;
        document.getElementById("jurusan_cb").checked=<?php echo $var_jurusan ?>;
        document.getElementById("ipk_cb").checked=<?php echo $var_ipk ?>;
        document.getElementById("skkk_cb").checked=<?php echo $var_skkk ?>;
        document.getElementById("asal_universitas_cb").checked=<?php echo $var_asal_universitas ?>;
        document.getElementById("id_line_cb").checked=<?php echo $var_id_line ?>;
        document.getElementById("ktp_sim_cb").checked=<?php echo $var_ktp_sim ?>;
        document.getElementById("alergi_vegan_cb").checked=<?php echo $var_alergi_vegan ?>;
        document.getElementById("ukuran_kaos_cb").checked=<?php echo $var_ukuran_kaos ?>;
        document.getElementById("gambar_ukuran_kaos_cb").checked=<?php echo $var_gambar_ukuran_kaos ?>;
        document.getElementById("emergency_contact_cb").checked=<?php echo $var_emergency_contact ?>;
        document.getElementById("penyakit_khusus_cb").checked=<?php echo $var_penyakit_khusus ?>;
        document.getElementById("foto_diri_cb").checked=<?php echo $var_foto_diri ?>;
        document.getElementById("perusahaan_cb").checked=<?php echo $var_pilih_perusahaan ?>;
        document.getElementById("sesi_cb").checked=<?php echo $var_pilih_sesi ?>;
        document.getElementById("transfer_cb").checked=<?php echo $var_bukti_transfer ?>;
        document.getElementById("form_cb").checked=<?php echo $var_kelengkapan_form ?>;
        document.getElementById("cicilan_cb").checked=<?php echo $var_sistem_cicilan ?>;
        document.getElementById("cashback_cb").checked=<?php echo $var_cashback ?>;
        
	}
	   $(function(){ getContent();});
    </script>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs">
                <h2>Admin Acara</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="home.php">Manage Acara</a></li>
                    <li><a href="manage-users.php">Manage Users</a></li>
                    <li><a href="log.php">Log</a></li>
                    <li><a href="login-page.php">Log Out</a></li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="well">
                    <h4 >Add Acara </h4>
                    <div class="form-group">
                    <form method="get">
                    <label for="event_name">Nama Event :</label> 
                    <input type="text" name="event_name" id="event_name_tb" value="<?php echo $judul ?>" class="form-control"><br>
                    <label for="textEditor">Detail Acara : </label>
                    <textarea id= "textEditor" name="textEdit"><?php echo $detail_event ?></textarea><br>
                    <label for="event_start_date">Tanggal Mulai :</label>
                    <input type="text" name="event_start_date" class="form-control" value="<?php echo $start_date?>" placeholder="YYYY-MM-DD"><br>
                    <label for="event_end_date">Tanggal Selesai :</label>
                    <input type="text" name="event_end_date" class="form-control" value="<?php echo $end_date?>" placeholder="YYYY-MM-DD"><br>
                    <br>
                    <h4> Manage Form Pendaftaran </h4>
                    Silahkan pilih bagian mana yang ingin ditampilkan saat peserta mendaftar<br>
                    <table class="table">
                        <tr>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" disabled>Nama Lengkap</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" disabled>NRP</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" disabled>No. HP</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" disabled>Alamat Email</label></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" id="nama_panggilan_cb" name="nama_panggilan">Nama Panggilan</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="l_p_cb" id="l_p">L/P</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="jurusan_cb">Jurusan</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="ipk_cb">IPK</label></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="skkk_cb">SKKK</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="asal_univ_cb">Asal Universitas</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="id_line_cb">ID Line</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="ktp_sim_cb" >No KTP/SIM</label></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name ="alergi_vegan_cb">Alergi/Vegan</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="ukuran_kaos_cb">Ukuran Kaos</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="gambar_ukuran_kaos_cb">Gambar Ukuran Kaos</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="emergency_contact_cb">Emergency Contact</label></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="penyakit_khusus_cb">Penyakit Khusus</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="foto_diri_cb">Foto Diri</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="perusahaan_cb">Pilih Perusahaan (Untuk Career Days)</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="sesi_cb">Pilih Sesi (Untuk Scholarship Days)</label></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="transfer_cb">Bukti Transfer</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="form_cb">Kelengkapan Form</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="cicilan_cb">Sistem Cicilan</label></div>
                            </td>
                            <td>
                                <div class="checkbox"><label><input type="checkbox" value="" name="cashback_cb">Cashback</label></div>
                            </td>
                        </tr>
                    </table>
                    <center><input type="submit" class="btn" value="Save" name="submit"></center>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>