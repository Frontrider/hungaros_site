<?php include "./MCServerStatus.php";

//fejlécek beállítása
header('Access-Control-Allow-Origin: http://www.hungaros.hu', false);
header('Access-Control-Allow-Origin: http://srv.hungaros.hu', false);
header('Access-Control-Allow-Origin: http://hungaros.hu', false);

$server = new MCServerStatus("srv.hungaros.hu",25000); //The second argument is optional in this case
?>
<div class="serverstatss">
<h2>Státusz: <i style="color:<?php if($server->online) echo "green";else echo "red"?>"><?php if($server->online) echo "online";else echo "offline"?></i></h2>
<?php if($server->online):?>
  <hr>
Játékosok:<?php echo $server->online_players?>/<?php echo $server->max_players ?>
<?php endif;?>
</div>
