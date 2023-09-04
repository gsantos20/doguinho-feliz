<br>
<link href="/styles/style.css" rel="stylesheet" type="text/css"/>

<script>
  $('.preLogin').click(function(){
    swal.fire({
      toast: true,
      template: '#my-template'
  }).then((result) => {
    if(result.isConfirmed) {
     window.open('<? echo $BASE_URL; ?>/login.php', '_blank');
     } else if (result.isDenied) {
      window.open('<? echo $BASE_URL; ?>/login.php?PA=true', '_blank');
      }
    })
});

</script>
<footer class="section">
  <div class="container grid">
    <div class="brand">
      <a class="logo logo-alt" href="#home">Doguinho<span>Feliz</span></a>
      <p>©2021 DoguinhoFeliz.</p>
      <p>Todos os direitos reservados.</p>
    </div>

    <div class="social grid">
      <a href="https://instagram.com/doguinhofeliztcc?igshid=YmMyMTA2M2Y=" target="_blank">
        <i class="fa-brands fa-instagram"></i>
      </a>
      <a href="https://www.facebook.com/Doguinho-Feliz-104282872215806/" target="_blank">
        <i class="fa-brands fa-facebook"></i></a>
      <a href="https://youtube.com/channel/UCWxvwfQrZeyotEqPi9tKD_g" target="_blank">
        <i class="fa-brands fa-youtube"></i></a>
    </div>
  </div>
</footer>