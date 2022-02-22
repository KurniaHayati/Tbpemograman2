<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("mahasiswa/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("mahasiswa/_partials/navbar.php") ?>

<div id="wrapper">

  <?php $this->load->view("mahasiswa/_partials/sidebar.php") ?>

  <div id="content-wrapper">

    <div class="container-fluid">

<?php
  function resourceWeb($url) {
    $data = curl_init();
    curl_setopt($data, CURLOPT_URL, $url);
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    $hasil = curl_exec($data);
    curl_close($data);
    return $hasil;
  }

  echo '<center><table border="1" cellpadding="0" cellspacing="0" class="MsoTableGrid" style="border-collapse: collapse; border: medium none; mso-border-alt: solid black .5pt; mso-border-themecolor: text1; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt; mso-yfti-tbllook: 1184;">
  <tbody>
 <tr style="height: 134.2pt; mso-yfti-firstrow: yes; mso-yfti-irow: 0;">
   <td style="border: 1pt solid black; height: 134.2pt; mso-border-alt: solid black .5pt; mso-border-themecolor: text1; padding: 0cm 5.4pt; width: 119.7pt;" valign="top" width="160"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <div style="text-align: justify;">
 <br>
 <br></div>
 </div>
 <div class="separator" style="clear: both; text-align: center;">
 </div>
 <div class="separator" style="clear: both; text-align: center;">
 <a href="https://1.bp.blogspot.com/-PsuIGr7VMMA/WXMI3ZlXe1I/AAAAAAABBJc/397gSJ9dvZUWWyzs7NcJTA3dBEU-VS6XgCPcBGAYYCw/s1600/Screen%2BShot%2B2017-07-22%2Bat%2B3.11.48%2BPM.png" style="clear: left; margin-bottom: 1em; margin-right: 1em;"><img border="0" data-original-height="196" data-original-width="191" height="200" src="https://1.bp.blogspot.com/-PsuIGr7VMMA/WXMI3ZlXe1I/AAAAAAABBJc/397gSJ9dvZUWWyzs7NcJTA3dBEU-VS6XgCPcBGAYYCw/s200/Screen%2BShot%2B2017-07-22%2Bat%2B3.11.48%2BPM.png" width="194"></a></div>
 </td>
   <td style="border: 1pt solid black; height: 134.2pt; mso-border-alt: solid black .5pt; mso-border-left-alt: solid black .5pt; mso-border-left-themecolor: text1; mso-border-themecolor: text1; padding: 0cm 5.4pt; width: 225.9pt;" valign="top" width="301"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;"><br></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Nama :&nbsp;</span><span face="" style="font-size: 13.3333px;"><a href="https://forlap.ristekdikti.go.id/dosen/detail/MkY5NjkwRUEtQzY1Ri00NDBGLUFGNjAtNjE5N0RFQjgwNUI2" target="_blank">M. Yusril Helmi Setyawan, S.Kom., M.Kom</a>.</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Kode Dosen : MYH</span><br>
 <span face="" style="font-size: 10pt;">NIDN&nbsp;: 0407117405</span><br>
 <span face="" style="font-size: 10pt;">NIK : 113.74.163</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Email : yusrilhelmi@poltekpos.ac.id&nbsp;</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><a href="https://scholar.google.co.id/citations?user=RpUUTTYAAAAJ&amp;hl=id&amp;authuser=1">Google Scholar Profile</a><o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member APTIKOM : AP-12.00392</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member IEEE : #94799683</span></div><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;"><span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">ResearcherID :&nbsp;<a href="https://publons.com/researcher/3072652/muhammad-yusril-helmi-setyawan/">W-3006-2019</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">ID SCOPUS :&nbsp;<a href="https://www.scopus.com/authid/detail.uri?authorId=57201197832">57201197832</a><o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">ID SINTA :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 14px;"><a href="http://sinta2.ristekdikti.go.id/authors/detail?id=6098575&amp;view=overview" target="_blank">6098575</a></span><br>
 <span face="" style="background-color: white; font-size: 13.3333px;">ID ORCID :&nbsp;<a href="http://orcid.org/0000-0003-2467-9110" target="_blank">http://orcid.org/0000-0003-2467-9110</a></span></div><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;"><span style="font-size: 13.3333px;">CISCO NetAcad Instructor ID :&nbsp;</span><span face="Arial, sans-serif" style="background-color: white; color: #58585b; font-size: 14px;"><a href="https://drive.google.com/file/d/1W3J4uh_gzA1C17oso_kUqYcNppHOO1fJ/view?usp=sharing">5014741</a></span><span style="font-size: 13.3333px;"><br></span>
 <span face="" style="background-color: white; font-size: 13.3333px;">S1 :&nbsp;Teknik Informatika, STMIK Tasikmalaya</span><br>
 <span face="" style="background-color: white; font-size: 13.3333px;">S2 : Sistem Informasi, STMIK LIKMI Bandung</span><span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Jabatan Fungsional : Lektor</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Pangkat / Golongan :&nbsp;</span><span face="" style="background-color: white; font-size: 13.3333px;">Penata/III-C</span><br>
 <span face="" style="background-color: white; font-size: 13.3333px;"><span face="" style="font-size: 13px;">Asessor BNSP LSP Politeknik Pos Indonesia</span></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Research Interest : Data Science</span><span face="" style="background-color: white; font-size: 13.3333px;">, Computer Networks</span><br>
 <span face="" style="background-color: white; font-size: 13.3333px;"><span face="" style="font-size: 13px;">Jabatan Struktural : Kaprodi D4 Teknik Informatika</span></span><br>
 <br></div>
 </td>
  </tr>
 <tr style="height: 136.85pt; mso-yfti-irow: 1;">
   <td style="border: 1pt solid black; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 119.7pt;" valign="top" width="160"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <br>
 <div class="separator" style="clear: both; text-align: center;">
 <br></div>
 <div class="separator" style="clear: both; text-align: center;">
 <br></div>
 <div class="separator" style="clear: both; text-align: center;">
 <br></div>
 <div class="separator" style="clear: both; text-align: center;">
 <a href="http://kampus.awangga.net/_/rsrc/1456199306993/home/rolly2.png" style="margin-left: 1em; margin-right: 1em; text-align: center;"><img border="0" data-original-height="681" data-original-width="493" height="200" src="https://kampus.awangga.net/_/rsrc/1456199306993/home/rolly2.png" width="143"></a></div>
 </div>
 </td>
   <td style="border-color: currentcolor black black currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-bottom-themecolor: text1; mso-border-left-alt: solid black .5pt; mso-border-left-themecolor: text1; mso-border-right-themecolor: text1; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 225.9pt;" valign="top" width="301"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;"><br></span> <span face="" style="font-size: 10pt;">Nama : <a href="https://forlap.ristekdikti.go.id/dosen/detail/QzhGRjM2OEQtRTAwRC00QUNELUJGMEMtMTFFQjk1NUYwRTFG" target="_blank">Rolly Maulana Awangga, S.T., M.T</a>.<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 13.3333px;">Kode Dosen : RMA</span><br>
 <span face="" style="font-size: 10pt;">NIDN : <span style="color: black;">0410118609</span></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">NIK : 117.86.219<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Email : awangga@poltekpos.ac.id<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Google Scholar Profile :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; color: black; font-size: 13px; outline: currentcolor none medium;"><a href="https://scholar.google.com/citations?user=zN-ay84AAAAJ" style="background-color: white; font-family: roboto, arial, helvetica, sans-serif; font-size: 13px; outline: currentcolor none medium; text-decoration-line: none;" target="_blank">zN-ay84AAAAJ</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member APTIKOM : AP-12.00388</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member IEEE : #92398331</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SCOPUS :&nbsp;</span><span face="" style="background-color: white; color: red; font-size: 13px; outline: currentcolor none medium;"><a href="https://www.scopus.com/authid/detail.uri?authorId=57200415037" style="background-color: white; font-family: roboto, arial, helvetica, sans-serif; font-size: 13px; outline: currentcolor none medium; text-decoration-line: none;">57200415037</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SINTA :&nbsp;</span><span face="" style="background-color: white; color: black; font-size: 13px; outline: currentcolor none medium;"><a href="http://sinta2.ristekdikti.go.id/authors/detail?id=149195&amp;view=overview" style="background-color: white; font-family: roboto, arial, helvetica, sans-serif; font-size: 13px; outline: currentcolor none medium;">149195</a></span><br>
 <span face="" style="background-color: white; font-size: 13.3333px;">ID ORCID :&nbsp;<a href="http://orcid.org/0000-0001-5530-9505" target="_blank">http://orcid.org/0000-0001-5530-9505</a></span><br>
 <span face="" style="background-color: white; font-size: 13px;">S1: Teknik Informatika, Institut Teknologi Telkom</span><br>
 <span face="" style="background-color: white; font-size: 13px;">S2: Teknik Informatika, Institut Teknologi&nbsp;Telkom</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Jabatan Fungsional : </span><span face="" style="background: none 0% 0% repeat scroll white; font-size: 13.3333px;">Lektor</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Pangkat / Golongan :&nbsp;</span><o:p></o:p><span face="" style="background-color: white; font-size: 13.3333px;">Penata/III-C</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Research Interest :&nbsp;</span><span face="" style="font-size: 10pt;"><o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">Geospatial Intelligence, Machine Learning,&nbsp; Data Science, Social Network Analysis.</span><br>
 <span face="" style="background-color: white; font-size: 13px;"><span face="">Asessor BNSP LSP Politeknik Pos Indonesia</span></span><br>
 <span face="" style="background-color: white; font-size: 13px;"><span face="">Jabatan Struktural:</span></span></div><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;"><span face="" style="background-color: white; font-size: 13px;"><span face="">Deputy TIK YPBPI</span></span></div><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;"><span face="" style="background-color: white; font-size: 13px;"><span face="">Koord. IRC (Informatics R</span></span><span face=""><span style="font-size: 13px;">esearch Center)</span></span></div><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;"><span style="font-size: 13px;"><br></span>
 <span face="" style="background-color: white; font-size: 13px;"><b>Reviewer Jurnal :</b></span><br>
 <span face="" style="background-color: white; font-size: 13px;">Nasional Terakreditasi: <a href="https://journal.unnes.ac.id/nju/index.php/jte/about/displayMembership/352" target="_blank">JTE Unnes</a>&nbsp;|&nbsp;</span><span face="" style="background-color: white; color: black; font-size: 13px; outline: currentcolor none medium;"><a href="https://ejurnal.itenas.ac.id/index.php/elkomika/about/displayMembership/5" style="background-color: white; font-family: roboto, arial, helvetica, sans-serif; font-size: 13px; outline: currentcolor none medium; text-decoration-line: none;" target="_blank">ELKOMIKA ITENAS</a>&nbsp;|&nbsp;</span><a href="https://jurnal.stiki-indonesia.ac.id/index.php/sintechjournal/reviewer" style="font-size: 13px;" target="_blank">SINTECH STIKI</a>&nbsp;<br>
 <span face="" style="background-color: white; font-size: 13px;">Nasional : <a href="https://ojs.serambimekkah.ac.id/index.php/jnkti/pages/view/Reviewers" target="_blank">JNKTI USM</a>&nbsp;| </span><br>
 <span face="" style="background-color: white; font-size: 13px;">Laman Portal :&nbsp;</span><a href="http://kampus.awangga.net/" style="background-color: white; font-family: roboto, arial, helvetica, sans-serif; font-size: 13px; outline: currentcolor none medium; text-decoration-line: none;" target="_blank">Portal Kampus Keren</a><br>
 <br></div>
 </td>
  </tr>
 <tr style="height: 133.85pt; mso-yfti-irow: 2;">
   <td style="border: 1pt solid black; height: 133.85pt; mso-border-alt: solid black .5pt; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 119.7pt;" valign="top" width="160"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <br>
 <div class="separator" style="clear: both; text-align: center;">
 <a href="https://2.bp.blogspot.com/-joAB_eLEXkI/WgkHKsxwF0I/AAAAAAABDxI/lbVrJv9QL2seAKVfHFLTU3BS10NHAcBqwCLcBGAs/s1600/kamal.png" style="margin-left: 1em; margin-right: 1em; text-align: left;"><img border="0" data-original-height="896" data-original-width="795" height="200" src="https://2.bp.blogspot.com/-joAB_eLEXkI/WgkHKsxwF0I/AAAAAAABDxI/lbVrJv9QL2seAKVfHFLTU3BS10NHAcBqwCLcBGAs/s200/kamal.png" width="175"></a></div>
 <br>
 <br></div>
 </td>
   <td style="border-color: currentcolor black black currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium; height: 133.85pt; mso-border-alt: solid black .5pt; mso-border-bottom-themecolor: text1; mso-border-left-alt: solid black .5pt; mso-border-left-themecolor: text1; mso-border-right-themecolor: text1; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 225.9pt;" valign="top" width="301"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;"><br></span><span face="" style="font-size: 10pt;">Nama :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;"><a href="https://forlap.ristekdikti.go.id/dosen/detail/NjQ4NEI2QzMtNjAyRC00NDk5LTlDQzQtQzM1N0U5RjdFNDM0" target="_blank">Mohamad Nurkamal Fauzan, S.T., M.T.</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 13.3333px;">Kode Dosen : MNF</span><br>
 <span face="" style="font-size: 10pt;">NIDN :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">0402058005</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">NIK :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">113.80.159</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Email :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">m.nurkamal.f@poltekpos.ac.id</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><a href="https://scholar.google.co.id/citations?user=aOb4nWQAAAAJ&amp;hl=id" target="_blank">Google Scholar Profile</a><o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member APTIKOM :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">AP-12.00383</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member IEEE : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SCOPUS : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SINTA :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 14px;"><a href="http://sinta2.ristekdikti.go.id/authors/detail?id=149205&amp;view=overview" target="_blank">149205</a></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">S1: Teknik Informatika, Universitas Gunadharma</span><br style="font-family: roboto, arial, helvetica, sans-serif; font-size: 13px;"><span face="" style="font-size: 13px;">S2: Teknik Informatika, Institut Teknologi Bandung</span></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Jabatan Fungsional :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 13.3333px;">Asisten Ahli</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Pangkat / Golongan :&nbsp;</span><o:p></o:p><span face="" style="background-color: white; font-size: 13.3333px;">Penata Muda Tk. I/III-B</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Research Interest :&nbsp;</span><span face="" style="font-size: 10pt;"><o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">E-Learning, IoT</span><br>
 <span face="" style="background-color: white; font-size: 13px;"><span face="">Asessor BNSP LSP Politeknik Pos Indonesia</span></span><br>
 <span face="" style="background-color: white; font-size: 13px;"><span face="">Jabatan Struktural&nbsp;:&nbsp;</span></span><br>
 <span face="" style="background-color: white; font-size: 13px;"><span face=""><br></span></span></div>
 </td>
  </tr>
 <tr style="height: 136.55pt; mso-yfti-irow: 3;">
   <td style="border: 1pt solid black; height: 136.55pt; mso-border-alt: solid black .5pt; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 119.7pt;" valign="top" width="160"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <br>
 <div class="separator" style="clear: both; text-align: center;">
 <br></div>
 <div class="separator" style="clear: both; text-align: center;">
 <a href="https://2.bp.blogspot.com/-Qr5FRtwZob0/WgkLWSoAK1I/AAAAAAABDxY/PrwI1CsfOiIGAJ_TI66PVYnlmrvuLFtLQCLcBGAs/s1600/rohab.png" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="240" data-original-width="213" height="200" src="https://2.bp.blogspot.com/-Qr5FRtwZob0/WgkLWSoAK1I/AAAAAAABDxY/PrwI1CsfOiIGAJ_TI66PVYnlmrvuLFtLQCLcBGAs/s200/rohab.png" width="177"></a></div>
 <div style="text-align: center;">
 </div>
 </div>
 </td>
   <td style="border-color: currentcolor black black currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium; height: 136.55pt; mso-border-alt: solid black .5pt; mso-border-bottom-themecolor: text1; mso-border-left-alt: solid black .5pt; mso-border-left-themecolor: text1; mso-border-right-themecolor: text1; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 225.9pt;" valign="top" width="301"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;"><br></span> <span face="" style="font-size: 10pt;">Nama :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;"><a href="https://forlap.ristekdikti.go.id/dosen/detail/MDc2NkNDOUEtQTI4MS00MjVCLUE2REQtNURDQjczQ0NBOUE1" target="_blank">Roni Habibi, S.Kom., M.T.</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 13.3333px;">Kode Dosen : RHA</span><br>
 <span face="" style="font-size: 10pt;">NIDN :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">0423127804</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">NIK :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">103.78.069</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Email :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">ronihabibi@poltekpos.ac.id</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><a href="https://scholar.google.co.id/citations?view_op=list_works&amp;hl=id&amp;user=IBtTXDAAAAAJ" target="_blank">Google Scholar Profile</a><o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member APTIKOM :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">AP-12.00390</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member IEEE : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SCOPUS : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID&nbsp;</span>SINTA :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 14px;"><a href="http://sinta2.ristekdikti.go.id/authors/detail?id=6093694&amp;view=overview" target="_blank">6093694</a></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">S1: Teknik Informatika, Universitas Nasional Pasim</span><br style="font-family: roboto, arial, helvetica, sans-serif; font-size: 13px;"><span face="" style="font-size: 13px;">S2: Teknik Informatika, Institut Teknologi Bandung</span></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Jabatan Fungsional :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 13.3333px;">Asisten Ahli</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Pangkat / Golongan :&nbsp;</span><o:p></o:p><span face="" style="background-color: white; font-size: 13.3333px;">Penata Muda Tk. I/III-B</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Research Interest :&nbsp;</span><span face="" style="font-size: 10pt;"><o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">Information System</span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">Asessor BNSP LSP Politeknik Pos Indonesia</span></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">Jabatan Struktural&nbsp;: Asisten Deputy TIK YPBPI</span></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><br></span></div>
 </td>
  </tr>
 <tr style="height: 136.55pt; mso-yfti-irow: 4;">
   <td style="border: 1pt solid black; height: 136.55pt; mso-border-alt: solid black .5pt; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 119.7pt;" valign="top" width="160"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <br>
 <div class="separator" style="clear: both; text-align: center;">
 <br></div>
 <div class="separator" style="clear: both; text-align: center;">
 <a href="https://1.bp.blogspot.com/-g1lAsfRsY-E/WgkMTUBD4cI/AAAAAAABDxg/xswsASEtXgMHTLDYLtd7I5p3C6pmNJhlACLcBGAs/s1600/ronan.png" style="margin-left: 1em; margin-right: 1em; text-align: center;"><img border="0" data-original-height="460" data-original-width="383" height="200" src="https://1.bp.blogspot.com/-g1lAsfRsY-E/WgkMTUBD4cI/AAAAAAABDxg/xswsASEtXgMHTLDYLtd7I5p3C6pmNJhlACLcBGAs/s200/ronan.png" width="166"></a></div>
 </div>
 </td>
   <td style="border-color: currentcolor black black currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium; height: 136.55pt; mso-border-alt: solid black .5pt; mso-border-bottom-themecolor: text1; mso-border-left-alt: solid black .5pt; mso-border-left-themecolor: text1; mso-border-right-themecolor: text1; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 225.9pt;" valign="top" width="301"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;"><br></span>
 <br>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Nama :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;"><a href="https://forlap.ristekdikti.go.id/dosen/detail/NzBCNjgwREEtMUVFQi00NUZELTk0MDYtQ0NCMTQyMzQxRDM3" target="_blank">Roni Andarsyah, S.T., M.Kom.</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 13.3333px;">Kode Dosen : RAN</span><br>
 <span face="" style="font-size: 10pt;">NIDN :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">0420058801</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">NIK :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">115.88.193</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Email :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">roniandarsyah@poltekpos.ac.id</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><a href="https://scholar.google.co.id/citations?hl=id&amp;user=vWTYjPcAAAAJ&amp;view_op=list_works&amp;authuser=1" target="_blank">Google Scholar Profile</a><o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member APTIKOM :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">AP-12.00391</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member IEEE : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SCOPUS : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SINTA :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 14px;"><a href="http://sinta2.ristekdikti.go.id/authors/detail?id=6108193&amp;view=overview" target="_blank">6108193</a></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">D3: Teknik Informatika, Poltekpos Bandung</span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">S1:&nbsp;</span><span face="" style="font-size: 13px;">Teknik Informatika, ST Inten Bandung</span><br style="font-family: roboto, arial, helvetica, sans-serif; font-size: 13px;"><span face="" style="font-size: 13px;">S2:&nbsp;</span></span><span face="" style="background-color: white; font-size: 13px;">Sistem Informasi, STMIK LIKMI</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Jabatan Fungsional :&nbsp;</span><span face="" style="background-color: white; font-size: 13.3333px;">Asisten Ahli</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Pangkat / Golongan :&nbsp;</span><o:p></o:p><span face="" style="background-color: white; font-size: 13.3333px;">Penata Muda Tk. I/III-B</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Research Interest :&nbsp;</span><span face="" style="font-size: 10pt;"><o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">Information System</span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">Asessor BNSP LSP Politeknik Pos Indonesia</span></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">Jabatan Struktural&nbsp;:&nbsp;</span></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">2016 - 2019 Ka. Humas &amp; Rekruitment</span></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">2019 - 2022&nbsp;</span></span><span face="" style="background-color: white; font-size: 13px;">Kabag. Kemahasiswaan, Alumni &amp; Kerjasama Eksternal</span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;"><span face="" style="background-color: white; font-size: 13px;">Laman Portal :&nbsp;<a href="http://roniandarsyah.net/" target="_blank">http://roniandarsyah.net/</a></span></span></span></div>
 </div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><br></span></div>
 </td>
  </tr>
 <tr style="height: 136.85pt; mso-yfti-irow: 5;">
   <td style="border: 1pt solid black; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 119.7pt;" valign="top" width="160"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <br>
 <br>
 <div class="separator" style="clear: both; text-align: center;">
 <a href="https://1.bp.blogspot.com/-mtzXFL58K08/WgkMqC9gnaI/AAAAAAABDxk/w48DQ-lm4U04FswvEmSD9mG8jpxSwBTrwCLcBGAs/s1600/cahyo.png" style="margin-left: 1em; margin-right: 1em; text-align: center;"><img border="0" data-original-height="297" data-original-width="227" height="200" src="https://1.bp.blogspot.com/-mtzXFL58K08/WgkMqC9gnaI/AAAAAAABDxk/w48DQ-lm4U04FswvEmSD9mG8jpxSwBTrwCLcBGAs/s200/cahyo.png" width="152"></a></div>
 </div>
 </td>
   <td style="border-color: currentcolor black black currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-bottom-themecolor: text1; mso-border-left-alt: solid black .5pt; mso-border-left-themecolor: text1; mso-border-right-themecolor: text1; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 225.9pt;" valign="top" width="301"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;"><br></span>
 <br>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Nama :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;"><a href="https://forlap.ristekdikti.go.id/dosen/detail/NEI2Q0ZBRjctNUVBRi00MkUyLTk1QkMtRjJDMzQ5ODdBM0I4" target="_blank">Cahyo Prianto, S.Pd., M.T.</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 13.3333px;">Kode Dosen : CPY</span><br>
 <span face="" style="font-size: 10pt;">NIDN :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">0427078401</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">NIK :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">117.84.222</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Email :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">cahyoprianto@poltekpos.ac.id</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><a href="https://scholar.google.co.id/citations?user=cQB86eYAAAAJ&amp;hl=id&amp;oi=ao" target="_blank">Google Scholar Profile</a><o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member APTIKOM :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">AP-12.00384</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member IEEE : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SCOPUS : 57212213833<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID&nbsp;</span>SINTA :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 14px;"><a href="http://sinta2.ristekdikti.go.id/authors/detail?id=6117419&amp;view=overview" target="_blank">6117419</a></span><br>
 <span face="" style="background-color: white; font-size: 13px;">ID ORCID :&nbsp;</span><span face=""><span style="font-size: 13px;"><a href="https://orcid.org/0000-0003-1857-1189">0000-0003-1857-1189</a></span></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">S1:&nbsp;</span><span face="" style="font-size: 13px;">Pendidikan Fisika, Universitas Pendidikan Indonesia</span><br style="font-family: roboto, arial, helvetica, sans-serif; font-size: 13px;"><span face="" style="font-size: 13px;">S2:&nbsp;</span></span><span face="" style="background-color: white; font-size: 13px;">Teknik Elektro, Institut Teknologi Bandung</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Jabatan Fungsional :&nbsp;</span><span face="" style="background-color: white; font-size: 13.3333px;">Asisten Ahli</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Pangkat / Golongan :&nbsp;</span><o:p></o:p><span face="" style="background-color: white; font-size: 13.3333px;">Penata Muda Tk. I/III-B</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Research Interest :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">Information System, Data Science</span><br>
 <span face="" style="background-color: white; font-size: 13px;">Jabatan Struktural : -&nbsp;</span><br>
 <br></div>
 </div>
 </div>
 </td>
  </tr>
 <tr style="height: 136.85pt; mso-yfti-irow: 6;">
   <td style="border: 1pt solid black; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 119.7pt;" valign="top" width="160"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <br>
 <br>
 <div class="separator" style="clear: both; text-align: center;">
 <br></div>
 <div class="separator" style="clear: both; text-align: center;">
 <br></div>
 <div class="separator" style="clear: both; text-align: center;">
 <a href="https://1.bp.blogspot.com/-g12ryAUHGpU/Xd_DAYbyJwI/AAAAAAAABWs/e-Kz8DYgLgEWeadD--66SUou59Sv_7nPgCLcBGAsYHQ/s1600/foto.jpg" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="1600" data-original-width="1029" height="200" src="https://1.bp.blogspot.com/-g12ryAUHGpU/Xd_DAYbyJwI/AAAAAAAABWs/e-Kz8DYgLgEWeadD--66SUou59Sv_7nPgCLcBGAsYHQ/s200/foto.jpg" width="128"></a></div>
 <div class="separator" style="clear: both; text-align: center;">
 <br></div>
 </div>
 </td>
   <td style="border-color: currentcolor black black currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-bottom-themecolor: text1; mso-border-left-alt: solid black .5pt; mso-border-left-themecolor: text1; mso-border-right-themecolor: text1; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 225.9pt;" valign="top" width="301"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Nama :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;"><a href="https://forlap.ristekdikti.go.id/dosen/detail/RDUzMDAzMzgtMzE5RC00OTQ5LUFDREUtQkE1MTY4NzA4Q0RG" target="_blank">Syafrial Fachri Pane, S.T., M.T.I.,EBDP</a></span><br>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 13.3333px;">Kode Dosen : SFP</span><br>
 <span face="" style="font-size: 10pt;">NIDN :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">0416048803</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">NIK :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">117.88.233</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Email :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">syafrial.fachri@poltekpos.ac.id</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span id="goog_1823055798"></span>Google Scholar Profile&nbsp;:&nbsp;<a href="https://scholar.google.co.id/citations?user=vV5P2LsAAAAJ&amp;hl=id" target="_blank">vV5P2LsAAAAJ</a><span id="goog_1823055799"></span><o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member APTIKOM :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">AP-12.00389</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member IEEE :&nbsp;<o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;"># 94799707</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SCOPUS : <a href="https://www.scopus.com/authid/detail.uri?authorId=57202579746" target="_blank">57202579746</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SINTA : <a href="http://sinta2.ristekdikti.go.id/authors/detail?id=6168692&amp;view=overview" target="_blank">6168692</a><o:p></o:p></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">ID ORCID :&nbsp;<a href="https://orcid.org/0000-0001-5119-3808">https://orcid.org/0000-0001-5119-3808</a></span></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">D3:&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">Teknik Informatika, POLTEKPOS,Bandung</span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">S1:&nbsp;</span><span face="" style="font-size: 13px;">Teknik Informatika, UNPAS, Bandung&nbsp;</span><br style="font-family: roboto, arial, helvetica, sans-serif; font-size: 13px;"><span face="" style="font-size: 13px;">S2:&nbsp;</span></span><span face="" style="background-color: white; font-size: 13px;">Teknik Informatika, BINUS, Jakarta</span><br>
 <span face="" style="background-color: white; font-size: 13px;">Sertifikasi Lisensi International :</span><br>
 <span face="" style="background-color: white; font-size: 13px;">1. <a href="https://drive.google.com/file/d/1la9xEjtLO73eEUd63XWNEznf-mSVZLCQ/view?usp=sharing" target="_blank">Instruktur Oracle Academy</a></span><br>
 <span face="" style="background-color: white; font-size: 13px;">2. <a href="https://drive.google.com/file/d/10jv-fJ2k2M8WwvDuPOZFPl8WzH3sVlps/view?usp=sharing" target="_blank">Enterprise Big Data Professional (EBDP)</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Jabatan Fungsional : Asisten Ahli</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Pangkat / Golongan :&nbsp;</span><o:p></o:p><span face="" style="background-color: white; font-size: 13.3333px;">Penata Muda Tk. I/III-B</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Research Interest :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;"><i>Big Data, Data Science</i></span><br>
 <span face="" style="background-color: white; font-size: 13px;">Asessor BNSP LSP Politeknik Pos Indonesia</span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">Jabatan Struktural :&nbsp;</span></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">2017 - 2019 Kabag. Kemahasiswaan, Alumni &amp; Kerjasama Eksternal<br>2019 - 2022 Ka.Teknologi Informasi dan Komunikasi &amp; TUK dan SAP</span></span></div>
 </div>
 </div>
 </td>
  </tr>
 <tr style="height: 136.85pt; mso-yfti-irow: 7; mso-yfti-lastrow: yes;">
   <td style="border: 1pt solid black; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 119.7pt;" valign="top" width="160"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <br>
 <br>
 <br>
 <div class="separator" style="clear: both; text-align: center;">
 <a href="https://1.bp.blogspot.com/-rYGJHGqqPr0/WgkOShpoZZI/AAAAAAABDx4/lJuhFhwEj04U5a0DcQfVdwK-NJJHWZeJACLcBGAs/s1600/hari.png" style="margin-left: 1em; margin-right: 1em; text-align: center;"><img border="0" data-original-height="373" data-original-width="352" height="200" src="https://1.bp.blogspot.com/-rYGJHGqqPr0/WgkOShpoZZI/AAAAAAABDx4/lJuhFhwEj04U5a0DcQfVdwK-NJJHWZeJACLcBGAs/s200/hari.png" width="188"></a></div>
 </div>
 </td>
   <td style="border-color: currentcolor black black currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-bottom-themecolor: text1; mso-border-left-alt: solid black .5pt; mso-border-left-themecolor: text1; mso-border-right-themecolor: text1; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 225.9pt;" valign="top" width="301"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;"><br></span>
 <br>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Nama :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;"><a href="https://forlap.ristekdikti.go.id/dosen/detail/NjYyREJDQzUtRjQyQy00QTcyLThGRjYtOUYwQzFBNkFBNjM3" target="_blank">M. Harry K Saputra, S.T., M.T.I</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 13.3333px;">Kode Dosen : MHK</span><br>
 <span face="" style="font-size: 10pt;">NIDN :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">0424038805</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">NIK : </span><span face="" style="background-color: white; font-size: 13px;">118.88.246</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Email :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">harrysaputra@poltekpos.ac.id</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Google Scholar Profile<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member APTIKOM :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">AP-12.00387</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member IEEE : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID&nbsp;</span>SCOPUS : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SINTA : -.<o:p></o:p></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">D3:&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">Teknik Informatika, Poltekpos Bandung</span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">S1:&nbsp;</span><span face="" style="font-size: 13px;">Teknik Informatika, Universitas Pasundan Bandung</span><br style="font-family: roboto, arial, helvetica, sans-serif; font-size: 13px;"><span face="" style="font-size: 13px;">S2:&nbsp;</span></span><span face="" style="background-color: white; font-size: 13px;">Teknik Informatika, Bina Nusantara Jakarta</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Jabatan Fungsional :&nbsp;</span><span face="" style="background-color: white; font-size: 13.3333px;">Tenaga Pengajar</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Pangkat / Golongan :&nbsp;</span><o:p></o:p><span face="" style="background-color: white; font-size: 13.3333px;">Penata Muda Tk. I/III-B</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Research Interest :&nbsp;</span><span face="" style="font-size: 10pt;"><o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">Information System</span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">Asessor BNSP LSP Politeknik Pos Indonesia</span></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">Jabatan Struktural&nbsp;:&nbsp;</span></span><span face="" style="background-color: white; font-size: 13px;">Manager GKM Akreditasi</span></div>
 </div>
 </div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><br></span></div>
 </td>
  </tr>
 <tr style="height: 136.85pt; mso-yfti-irow: 7; mso-yfti-lastrow: yes;">
   <td style="border: 1pt solid black; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 119.7pt;" valign="top" width="160"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <br>
 <br>
 <div class="separator" style="clear: both; text-align: center;">
 <a href="https://3.bp.blogspot.com/-MjC6Uet9L70/WgkO9rXM_KI/AAAAAAABDyA/DLoizoArlgA85LNUUEbmixxxPIeLazzFwCLcBGAs/s1600/s200_nuraini.siti_fathonah.jpg" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="200" data-original-width="200" height="200" src="https://3.bp.blogspot.com/-MjC6Uet9L70/WgkO9rXM_KI/AAAAAAABDyA/DLoizoArlgA85LNUUEbmixxxPIeLazzFwCLcBGAs/s200/s200_nuraini.siti_fathonah.jpg" width="200"></a></div>
 </div>
 </td>
   <td style="border-color: currentcolor black black currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-bottom-themecolor: text1; mso-border-left-alt: solid black .5pt; mso-border-left-themecolor: text1; mso-border-right-themecolor: text1; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 225.9pt;" valign="top" width="301"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;"><br></span>
 <br>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Nama :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;"><a href="https://forlap.ristekdikti.go.id/dosen/detail/QUM5NDdGM0MtOTQ2Ni00RjU2LThCNEItRkIyRThCNDM4RUFG" target="_blank">Rd. Nuraini Siti Fatonah, S.S., M.Hum.</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 13.3333px;">Kode Dosen : RNS</span><br>
 <span face="" style="font-size: 10pt;">NIDN :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">0402047205</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">NIK : </span><span face="" style="background-color: white; font-size: 13px;">118.72.251</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Email :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">nuraini@poltekpos.ac.id</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><a href="https://scholar.google.co.id/citations?user=cVjpd0AAAAAJ&amp;hl=id&amp;oi=ao" target="_blank">Google Scholar Pro<span id="goog_1823055821"></span><span id="goog_1823055822"></span>file</a><o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member APTIKOM :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">AP-12.00386</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member IEEE : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SCOPUS :&nbsp;</span><span face=""><span style="font-size: 13.3333px;"><a href="https://www.scopus.com/authid/detail.uri?authorId=57201505408" target="_blank">57201505408</a></span></span><br>
 <span face="" style="font-size: 10pt;">ID</span><span face="" style="background-color: white; font-size: 10pt;">&nbsp;SINTA : -.</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">S1:&nbsp;</span><span face="" style="font-size: 13px;">Bahasa Inggris, Universitas Padjadjaran</span><br style="font-family: roboto, arial, helvetica, sans-serif; font-size: 13px;"><span face="" style="font-size: 13px;">S2:&nbsp;</span></span><span face="" style="background-color: white; font-size: 13px;">Linguistik, Universitas Pendidikan Indonesia</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Jabatan Fungsional :&nbsp;</span><span face="" style="background-color: white; font-size: 13.3333px;">Tenaga Pengajar</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Pangkat / Golongan :&nbsp;</span><o:p></o:p><span face="" style="background-color: white; font-size: 13.3333px;">Penata Muda Tk. I/III-B</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Research Interest :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">Information System</span><br>
 <span face="" style="background-color: white; font-size: 13px;">Jabatan Struktural&nbsp;: -</span></div>
 </div>
 </div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><br></span></div>
 </td>
  </tr>
 <tr style="height: 136.85pt; mso-yfti-irow: 7; mso-yfti-lastrow: yes;">
   <td style="border: 1pt solid black; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 119.7pt;" valign="top" width="160"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <br>
 <div class="separator" style="clear: both; text-align: center;">
 <a href="https://1.bp.blogspot.com/-DxEo-ZI5vk8/XXnBQdrIC6I/AAAAAAAAAW4/XllyCbraMesMeAd_0xVEjnJGrlef1LuhwCLcBGAsYHQ/s1600/IMG_0811.JPG" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="1600" data-original-width="1327" height="200" src="https://1.bp.blogspot.com/-DxEo-ZI5vk8/XXnBQdrIC6I/AAAAAAAAAW4/XllyCbraMesMeAd_0xVEjnJGrlef1LuhwCLcBGAsYHQ/s200/IMG_0811.JPG" width="165"></a></div>
 <br></div>
 </td>
   <td style="border-color: currentcolor black black currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-bottom-themecolor: text1; mso-border-left-alt: solid black .5pt; mso-border-left-themecolor: text1; mso-border-right-themecolor: text1; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 225.9pt;" valign="top" width="301"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;"><br></span>
 <br>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Nama :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;"><a href="http://sinta2.ristekdikti.go.id/authors/detail?id=6093595&amp;view=overview" target="_blank">Nisa Hanum Harani, S.Kom., M.T.</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 13.3333px;">Kode Dosen : NHH</span><br>
 <span face="" style="font-size: 10pt;">NIDN :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">0415048901</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">NIK :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">117.89.223</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Email :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">nisahanum@poltekpos.ac.id</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><a href="https://scholar.google.co.id/citations?user=a34B7m4AAAAJ&amp;hl=id&amp;oi=sra" target="_blank">Google Scholar Profile</a><o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member APTIKOM :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">AP-12.00385</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member IEEE : #95580519<o:p></o:p></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">WoS ResearcherID&nbsp; : <a href="https://publons.com/researcher/3050477/nisa-harani/" target="_blank">V-1237-2019</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SCOPUS :&nbsp;<a href="https://www.scopus.com/authid/detail.uri?authorId=57202304751" target="_blank">57202304751</a><o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SINTA :&nbsp;</span><span face="" style="background-color: white; font-size: 14px;"><a href="http://sinta2.ristekdikti.go.id/authors/detail?id=6093595&amp;view=overview" target="_blank">6093595</a></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">S1:&nbsp;</span><span face="" style="font-size: 13px;">Sistem Informasi, Universitas Maranatha</span></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">S2:&nbsp;</span></span><span face="" style="background-color: white; font-size: 13px;">Sistem Informasi, Institut Teknologi Bandung</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Jabatan Fungsional :&nbsp;</span><span face="" style="background-color: white; font-size: 13.3333px;">Asisten Ahli</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Pangkat / Golongan :&nbsp;</span><o:p></o:p><span face="" style="background-color: white; font-size: 13.3333px;">Penata Muda Tk. I/III-B</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Research Interest :&nbsp;</span><span face="" style="font-size: 10pt;"><o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">Information System,&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">Enterprise Architecture</span><span face="" style="background-color: white; font-size: 13px;">,&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">Data Science,&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">Machine Learning.</span><br>
 <span face="" style="background-color: white; font-size: 13px;">Jabatan Struktural&nbsp;: -</span></div>
 </div>
 </div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><br></span></div>
 </td>
  </tr>
 <tr style="height: 136.85pt; mso-yfti-irow: 7; mso-yfti-lastrow: yes;">
   <td style="border: 1pt solid black; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 119.7pt;" valign="top" width="160"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <div class="separator" style="clear: both; text-align: center;">
 <br></div>
 <div class="separator" style="clear: both; text-align: center;">
 <br></div>
 <div class="separator" style="clear: both; text-align: center;">
 <a href="https://3.bp.blogspot.com/-wrGhtqsMBGE/WgkP-HzZ03I/AAAAAAABDyQ/0mB4CdmXf9YD7gyyWB5ZEVwyyhxL1folwCLcBGAs/s1600/Screen%2BShot%2B2017-11-13%2Bat%2B10.22.14.png" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="211" data-original-width="193" height="200" src="https://3.bp.blogspot.com/-wrGhtqsMBGE/WgkP-HzZ03I/AAAAAAABDyQ/0mB4CdmXf9YD7gyyWB5ZEVwyyhxL1folwCLcBGAs/s200/Screen%2BShot%2B2017-11-13%2Bat%2B10.22.14.png" width="182"></a></div>
 <a href="https://3.bp.blogspot.com/-wrGhtqsMBGE/WgkP-HzZ03I/AAAAAAABDyQ/0mB4CdmXf9YD7gyyWB5ZEVwyyhxL1folwCLcBGAs/s1600/Screen%2BShot%2B2017-11-13%2Bat%2B10.22.14.png" style="clear: right; float: right; margin-bottom: 1em; margin-left: 1em; text-align: center;"><br></a></div>
 </td>
   <td style="border-color: currentcolor black black currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-bottom-themecolor: text1; mso-border-left-alt: solid black .5pt; mso-border-left-themecolor: text1; mso-border-right-themecolor: text1; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 225.9pt;" valign="top" width="301"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;"><br></span>
 <br>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Nama :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;"><a href="https://forlap.ristekdikti.go.id/dosen/detail/RjFGMEEzOEMtOTU1Ri00REU3LUFEMTctNkE3Njg4MkJENzA0" target="_blank">Woro Isti Rahayu, S.T., M.T.</a></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 13.3333px;">Kode Dosen : WIR</span><br>
 <span face="" style="font-size: 10pt;">NIDN :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">0415107901</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">NIK :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">105.79.081</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Email :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">woroisti@poltekpos.ac.id</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><a href="https://scholar.google.co.id/citations?user=OK7zAJMAAAAJ&amp;hl=id">Google Scholar Profile</a><o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member APTIKOM :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">AP-12.00393</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member IEEE : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SCOPUS : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SINTA : -.<o:p></o:p></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">S1:&nbsp;</span><span face="" style="font-size: 13px;">Teknik Informatika, Universitas Widyatama</span><br style="font-family: roboto, arial, helvetica, sans-serif; font-size: 13px;"><span face="" style="font-size: 13px;">S2:&nbsp;</span></span><span face="" style="background-color: white; font-size: 13px;">Teknik Informatika, Institut Teknologi Bandung</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Jabatan Fungsional :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">Lektor</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Pangkat / Golongan :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">Penata Muda Tk. II / IV-b</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Research Interest :&nbsp;</span><span face="" style="font-size: 10pt;"><o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">Information System</span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">Asessor BNSP LSP Politeknik Pos Indonesia</span></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">Jabatan Struktural&nbsp;: Anggota SENAT</span></span></div>
 </div>
 </div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><br></span></div>
 </td>
  </tr>
 <tr style="height: 136.85pt; mso-yfti-irow: 7; mso-yfti-lastrow: yes;">
   <td style="border: 1pt solid black; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 119.7pt;" valign="top" width="160"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <br>
 <div class="separator" style="clear: both; text-align: center;">
 <br></div>
 <div class="separator" style="clear: both; text-align: center;">
 <a href="https://3.bp.blogspot.com/-y2UD1YIqdrk/WsXxLDeTDAI/AAAAAAAAAN8/D1xzMPozH98xaQuTVSvUfPnSivSnB1ckACLcBGAs/s1600/novi.jpg" style="margin-left: 1em; margin-right: 1em; text-align: center;"><img border="0" data-original-height="1280" data-original-width="720" height="200" src="https://3.bp.blogspot.com/-y2UD1YIqdrk/WsXxLDeTDAI/AAAAAAAAAN8/D1xzMPozH98xaQuTVSvUfPnSivSnB1ckACLcBGAs/s200/novi.jpg" width="112"></a></div>
 </div>
 </td>
   <td style="border-color: currentcolor black black currentcolor; border-style: none solid solid none; border-width: medium 1pt 1pt medium; height: 136.85pt; mso-border-alt: solid black .5pt; mso-border-bottom-themecolor: text1; mso-border-left-alt: solid black .5pt; mso-border-left-themecolor: text1; mso-border-right-themecolor: text1; mso-border-themecolor: text1; mso-border-top-alt: solid black .5pt; mso-border-top-themecolor: text1; padding: 0cm 5.4pt; width: 225.9pt;" valign="top" width="301"><div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;"><br></span>
 <br>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Nama :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;"><a href="https://forlap.ristekdikti.go.id/dosen/detail/NkQyN0VERTMtODI1RS00Nzc2LUE0RjQtNTQ0QjM0NDc0Rjc4" target="_blank">Noviana Riza, S.Si., M.T</a>.</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face=""><span style="font-size: 13.3333px;">Kode Dosen : NRI</span></span><br>
 <span face="" style="font-size: 10pt;">NIDN :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">(Proses DIKTI)</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">NIK :&nbsp;</span><span face="" style="background-color: white; font-size: 13px;">103.78.065</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="font-size: 10pt;">Email : -</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Google Scholar Profile<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member APTIKOM : -</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Member IEEE : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID</span>&nbsp;SCOPUS : -<o:p></o:p></span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="">ID&nbsp;</span>SINTA : -.<o:p></o:p></span><br>
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><span face="" style="font-size: 13px;">S1:&nbsp;</span><span face="" style="font-size: 13px;">Teknik Informatika, Universitas Padjajaran</span><br style="font-family: roboto, arial, helvetica, sans-serif; font-size: 13px;"><span face="" style="font-size: 13px;">S2:&nbsp;</span></span><span face="" style="background-color: white; font-size: 13px;">Teknik Informatika, Institut Teknologi Bandung</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Jabatan Fungsional :&nbsp;</span><span face="" style="background-color: white; font-size: 13.3333px;">Tenaga Pengajar</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Pangkat / Golongan :&nbsp;</span><o:p></o:p><span face="" style="background-color: white; font-size: 13.3333px;">Penata Muda Tk. I/III-B</span></div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;">Research Interest :&nbsp;</span><span face="" style="font-size: 10pt;"><o:p></o:p></span><span face="" style="background-color: white; font-size: 13px;">Information System</span><br>
 <span face="" style="background-color: white; font-size: 13px;">Jabatan Struktural&nbsp;: -</span></div>
 </div>
 </div>
 <div class="MsoNormal" style="line-height: normal; margin-bottom: 0cm;">
 <span face="" style="background: none 0% 0% repeat scroll white; font-size: 10pt;"><br></span></div>
 </td>
  </tr>
 </tbody></table></center>
  ';
  
?>

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
    <?php //$this->load->view("mahasiswa/_partials/breadcrumb.php") ?>

    <!-- Icon Cards-->
    
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->view("mahasiswa/_partials/footer.php") ?>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("mahasiswa/_partials/scrolltop.php") ?>
<?php $this->load->view("mahasiswa/_partials/modal.php") ?>
<?php $this->load->view("mahasiswa/_partials/js.php") ?>
    
</body>
</mahasiswa