<?php
if ((isset($_GET['obj'])) & ($_GET['obj'] == 'players')) {
  $playersObj = new playerClass($pdo); // создание объекта "пользователи"
  ?>
  <h2>Управление составом</h2>
  <?php
  
  if (isset($_GET['action'])) {
    switch ($_GET['action']) {
      case 'edit':
        require_once 'structure/player_form.php';
        break;

      case 'update':
        if (isset($_POST['id'])) {
          echo $playersObj->updatePlayer($_POST); // см. комментарии в классе (в netbeans можно подвести курсор мыши и удерживать Ctrl)
        }
        break;
        
      case 'delete':
          if(isset($_GET['player_id'])) {
              echo $playersObj->deletePlayer($_GET['player_id']);
          }
          break;
      case 'insert':
          require_once 'structure/player_form.php';
          break;
      case 'new':
          echo $playersObj->insertPlayer($_POST); // см. комментарии в классе (в netbeans можно подвести курсор мыши и удерживать Ctrl)
        break;
      
      default:
        break;
    }
  }
  ?>
  <table>
    <caption>
      <a href="?obj=players&action=insert">
        Новый игрок
      </a>
    </caption>
    <tr>
      <th class="buts" colspan="2">Действия</th>
      <th class="id">Номер</th>
      <th class="user_name">Позиция</th>
      <th class="user_pass">ФИО</th>
    </tr>
    <?php
    $players = $playersObj->selectAll(); // см. комментарии в классе (в netbeans можно подвести курсор мыши и удерживать Ctrl)
    foreach ($players as $player) { // вывод всех записей пользователей в таблице с действиями
      ?>
      <tr>
        <td class="but_edit">
          <a href="?obj=players&action=edit&player_id=<?php echo $player['id']; ?>">
            Редактирование
          </a>
        </td>
        <td class="but_delete">
          <a href="?obj=players&action=delete&player_id=<?php echo $player['id']; ?>">
            Удаление
          </a>
        </td>
        <td class="id"><?php echo $player['number']; ?></td>
        <td class="user_name"><?php echo $player['position']; ?></td>
        <td class="user_pass"><?php echo $player['fio']; ?></td>
      </tr>
    <?php } ?>
  </table>
<?php } ?>