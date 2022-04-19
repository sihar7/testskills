<?php
  $name       = $_POST['name'];
  $palindrom  = strrev($name);
  
  if (!empty($name)) {
    if ($name == $palindrom) {
      ?><script type="text/javascript">
          alert('Ini Adalah Kalimat / Kata Palindrom');
          window.location.href='./';
      </script><?php
    } else {    
      ?><script type="text/javascript">
          alert('Ini Bukan Kalimat / Kata Palindrom');
          window.location.href='./';
      </script><?php
    }
} else {
  ?><script type="text/javascript">
      alert('Silahkan Isi Field Terlebih Dahulu');
      window.location.href='./';
  </script><?php
}
?>