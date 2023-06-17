<?php

class Flasher {
    public static function setflash($pesan, $aksi, $tipe){
        $_SESSION['flash'] = [
			'pesan' => $pesan,
			'aksi' => $aksi,
			'tipe' => $tipe
		];
    }

    public static function flash(){
		if(isset($_SESSION['flash'])){
			echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].' alert-dismissible fade show" role="alert">
							  Data Siswa <strong>'.$_SESSION['flash']['pesan'].'</strong> '.$_SESSION['flash']['aksi'].'
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>';
				unset($_SESSION['flash']);
		}
	}
	public static function sweet(){
		if (isset($_SESSION['flash'])) {
			echo '<script>
			$(function() {
				var Toast = Swal.mixin({
				  toast: true,
				  position: "top-end",
				  showConfirmButton: false,
				  timer: 3000
				  
				});
				Toast.fire({
					icon: '.$_SESSION['flash']['tipe'].',
					title: '.$_SESSION['flash']['pesan'].'
				  })
			  }
			)
			</script>';
			unset($_SESSION['flash']);
		}
	}
}
