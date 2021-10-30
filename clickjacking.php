
<?php
    if ( isset($_POST['url']) )
        echo '<iframe src="'.$_POST['url'].'" width="500" height="500"></iframe>';
?>

<p>Check url is vulnerable to clickjacking!</p>
<form action="" method="post" autocomplete="off">
  <div class="container">
    <input type="text" placeholder="Enter url here (full address)" name="url" required>
    <button type="submit">Login</button>
  </div>
</form>


