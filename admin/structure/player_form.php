<?php
if ((isset($_GET['action'])) & ($_GET['action'] == 'edit') & (isset($_GET['player_id']))) {
  $act = 'edit';
  $player = $playersObj->selectOne($_GET['player_id']);
}
if((isset($_GET['action'])) & ($_GET['action'] == 'insert')){
    $act='insert';
}
?>
<div class="obj_form">
  <form action="?obj=players&action=<?php echo ($act == 'edit') ? 'update' : 'new'; ?>" method="post" enctype="multipart/form-data">
    <?php if ($act == 'edit') { ?>
      <input type="hidden" name="id" value="<?php echo $player['id']; ?>"/>
    <?php } ?>
    <div>
      Nomer : <input type="text" name="number" value="<?php if($act='edit') echo @$player['number']; else echo "" ?>" />
    </div>
    <div>
      posiciya : <input type="text" name="position" value="<?php if($act='edit') echo @$player['position']; ?>" />
    </div>
      <div>
      fio : <input type="text" name="fio" value="<?php if($act='edit') echo @$player['fio']; ?>" />
    </div>
    <div class="btns">
      <input type="submit" value="Сохранить" />
    </div>
  </form>
</div>