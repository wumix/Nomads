<?php
// init
$loggedInTopper = null;
// topper logged out vars
$time = time();
$time = date("H:i:s");
$timeOut = "Server Time.: " . $time;
// topper logged in vars
if (isset($_SESSION['player'])){
  $loggedInTopper = "
    <td>
      <a href='/?logout=1'>
        Logout
      </a>
    </td>
  ";
}
?>
<table class="topperTable">
  <tr>
    <td>
      <a href="/">
        <b>NOMADS</b>
      </a>
    </td>
    <td>
      <?php print $timeOut; ?>
    </td>
    <?php print $loggedInTopper; ?>
  </tr>
</table>
