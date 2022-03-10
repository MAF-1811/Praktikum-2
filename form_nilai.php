<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div  class="container">
  <div class="py-5 text-lelf">
    <h2>Form Nilai Siswa</h2>
  </div>
    <form method="POST">
     <div class="form-group row">
      <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
         <input id="nama_lengkap" name="nama_lengkap" placeholder="nama lengkap" type="text" class="form-control">
        </div>
    </div>
      <div class="form-group row">
       <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
      <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar- dasar Pemograman</option>
        <option value="BDI">Basis Data I</option>
        <option value="WEB1">Pemograman Web</option>
      </select>
      </div>
      </div>
      <div class="form-group row">
       <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
          <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
      </div>
     </div>
      <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
          <div class="col-8">
           <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
        </div>
      </div>
    <div class="form-group row">
      <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
        <div class="col-8">
          <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</form>
<?php 
  $nama_lengkap = isset ($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
  $matkul = isset ($_POST['matkul']) ? $_POST['matkul'] : '';
  $nilai_uts = isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
  $nilai_uas = isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
  $nilai_tugas = isset ($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';
  $nilai_total = ((int)$nilai_uts+(int)$nilai_uas+(int)$nilai_tugas)/3;


  function kelulusan($nilai_total){
    if ($nilai_total > 55){
      return 'LULUS';
    }else{
      return 'TIDAK LULUS';
    }
  }

  if ($nilai_total >= 85){
    $grade = 'A';
  } elseif($nilai_total >= 70 ){
    $grade = 'B';
  } elseif($nilai_total >= 56){
    $grade = 'C';
  } elseif($nilai_total >= 36){
    $grade = 'D';
  } elseif($nilai_total >= 0){
    $grade = 'E';
} 
    switch ($grade){
      case 'A':
        $info = "Sangat memuaskan";
        break;
      case 'B':
        $info = "memuaskan";
        break;
      case 'C':
        $info = "Cukup";
        break;
      case 'D':
        $info = "Kurang";
        break;
      case 'E':
        $info = "Sangat kurang";
        break;
    }
  echo 'Nama Lengkap : '.$nama_lengkap;
  echo '<br/>Mata Kuliah : '.$matkul;
  echo '<br/>Nilai UTS : '.$nilai_uts;
  echo '<br/>Nilai UAS : '.$nilai_uas;
  echo '<br/>Nilai Tugas : '.$nilai_uas;
  echo '<br/>Nilai Total : '.$nilai_total;
  $hasil = kelulusan($nilai_total);
  echo '<br/> grade : '.$grade;
  echo '<br/>Keterangan : '.$info;
  echo '<br/> Dinyatakan : '.$hasil;
?>