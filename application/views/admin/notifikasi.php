<?php
  define('db_host', 'localhost');
  define('db_user', 'root');
  define('db_pass', '');
  define('db_name', 'hadir_dosen');
  $db = new mysqli(db_host, db_user, db_pass,  db_name);
  $sql = mysqli_query($db, "SELECT * FROM mahasiswas");
  while ($q = mysqli_fetch_assoc($sql)) {
    $my_apikey = "IQNT7FI7JL8G0UN37JLL";
    $destination = $q['nomor'];
    $status = $_POST['status'];
    $matkul = $_POST['matkul'];
    $alasan = $_POST['alasan'];
    if (empty($_POST['cek'])) {
      if ($status == 'Waiting') {
        $pra_message = 'Halo *{nama_mahasiswa}*. Hari ini kamu ada jadwal kuliah '.$matkul.'.'.$alasan.'
Semangat!!!';
    } elseif ($status == 'Tidak') {
        $pra_message = 'Halo {nama_mahasiswa}. Hari ini kamu ada jadwal kuliah '.$matkul.', tapi dosennya tidak bisa hadir, karena *'.$alasan.'*. Tenang aja nanti ada jadwal pengganti kok, ditunggu yaa!!!';
    }
      if ($status == 'Ya') {
          $pra_message = 'Halo *{nama_mahasiswa}*. Hari ini kamu ada jadwal kuliah '.$matkul.'.
Keterangan : '.$alasan.'
Semangat!!!';
      } elseif ($status == 'Tidak') {
          $pra_message = 'Halo {nama_mahasiswa}. Hari ini kamu ada jadwal kuliah '.$matkul.', tapi dosennya tidak bisa hadir, karena *'.$alasan.'*. Tenang aja nanti ada jadwal pengganti kok, ditunggu yaa!!!';
      }
    } else {
      if ($status == 'Waiting') {
        $pra_message = 'Halo *{nama_mahasiswa}*. Hari ini kamu ada jadwal pengganti '.$matkul.'.'.$alasan.'
Semangat!!!';
    } elseif ($status == 'Tidak') {
        $pra_message = 'Halo {nama_mahasiswa}. Hari ini kamu ada jadwal pengganti '.$matkul.', tapi dosennya tidak bisa hadir, karena *'.$alasan.'*. Tenang aja nanti ada jadwal pengganti kok, ditunggu yaa!!!';
    }
      if ($status == 'Ya') {
          $pra_message = 'Halo *{nama_mahasiswa}*. Hari ini kamu ada jadwal pengganti '.$matkul.'.
Keterangan : '.$alasan.'
Semangat!!!';
      } elseif ($status == 'Tidak') {
          $pra_message = 'Halo {nama_mahasiswa}. Hari ini kamu ada jadwal pengganti '.$matkul.', tapi dosennya tidak bisa hadir, karena *'.$alasan.'*. Tenang aja nanti ada jadwal pengganti kok, ditunggu yaa!!!';
      }
    }
    $message = str_replace('{nama_mahasiswa}', $q['nama'], $pra_message);
    $api_url = "http://panel.rapiwha.com/send_message.php";
    $api_url .= "?apikey=". urlencode ($my_apikey);
    $api_url .= "&number=". urlencode ($destination);
    $api_url .= "&text=". urlencode ($message);
    $my_result_object = json_decode(file_get_contents($api_url, false));
    // echo "<br>Result: ". $my_result_object->success;
    // echo "<br>Description: ". $my_result_object->description;
    // echo "<br>Code: ". $my_result_object->result_code;
  }
?>