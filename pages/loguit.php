<?php
$_SESSION['logged_in'] = false;
$_SESSION['user_id'] = 0;
?>
<script>
    setTimeout(function () {
        window.location.href= 'https://rkloppenburg.gc-webhosting.nl/';

    },2500);
</script>
<div class="alert alert-success" role="alert">
    Succesvol uitgelogd. Je wordt doorgestuurd naar de homepagina
</div>