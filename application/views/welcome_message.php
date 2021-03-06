<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Kehadiran Dosen</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	.besar {
		color: #444;
		background-color: transparent;
		font-size: 70px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
		position: relative;
        bottom: 100px;
	}
	.himatif {
		position: relative;
		right: -1000px;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	a {
		text-decoration: none;
		font-weight: bold;
	}
	</style>
</head>
<body>
<!--
<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
-->
<img src="https://4.bp.blogspot.com/-JXEuDvgvfcQ/WcwdcfnMxLI/AAAAAAAADuM/G6PmH9SVsbYpRAXKDVimx0TaJ0ijco3_wCLcBGAs/s1600/Pendaftaran%2BPOLTEKPOS.jpg" width="10%" height="10%">
<center>
<h2 class="besar">Kehadiran Dosen Mengajar</h2>
</center>
<div id="container">
	<div id="body">
		<div class="post-outer">
<div class="post">
<div class="post-header">
<div class="post-head"><marquee><h2 class="post-title entry-title" itemprop="name headline">
 Informasi Kehadiran Dosen Mengajar
</h2></marquee></div>
</div>
<div class="hreview" style="display:none;">
<span class="item">
<span class="fn">Profil Program Studi</span>
<img alt="Profil Program Studi" class="photo" src="https://1.bp.blogspot.com/-ssbErJfDyEI/X_UlvZUvNlI/AAAAAAAACLU/ZTBVqlJ-vU8S0SAijeuOa7uOpDLIA2olACPcBGAYYCw/s72-c/SENAT%2BYUSRIL.jpg">
</span>
        Reviewed by <span class="reviewer">Helmy Setthy</span>
        on
        <span class="dtreviewed">
September 14, 2020
<span class="value-title" title="September 14, 2020"></span>
</span>
        Rating: <span class="rating">5</span>
</div>
<div style="clear:both"></div>
<div class="post-footer">
</div>
</div>
<div class="comments" id="comments">
<a name="comments"></a>
<div id="backlinks-container">
<div id="Blog1_backlinks-container">
</div>
</div>
</div>
</div>
		<code><h1><a href="<?= base_url('index.php/prodi'); ?>">Profil Prodi</a></h1></code>
		<code><h1><a href="<?= base_url('index.php/login'); ?>">Login Admin</a></h1></code>
		<code><h1><a href="<?= base_url('index.php/logindosen'); ?>">Login Dosen</a></h1></code>
		<code><h1><a href="<?= base_url('index.php/loginmahasiswa'); ?>">Login Mahasiswa</a></h1></code>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>