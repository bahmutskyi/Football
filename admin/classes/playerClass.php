<?php

/**
 * Класс playerClass
 * предназначен для работы с таблицей игроков (players)
 *
 * @author Багмуцкий Е. А.
 */
class playerClass {

  /**
   * соединение с БД
   * 
   * @var classPDO
   */
  private $pdo;

  /**
   * Наименование таблицы в БД
   * 
   * @var string 
   */
  private $table = 'players';

  /**
   * Конструктор получает соединение (объект PDO) с сервером БД
   * и помещает его в частное свойство для функционирования 
   * остальных методов класса (объекта)
   * 
   * @param classPDO $pdo 
   */
  function __construct($pdo) {
    if ($pdo) {
      $this->pdo = $pdo;
    } else {
      echo 'Не удалось установить соединение с серверм БД';
    }
  }

  /**
   * selectAll($limit, $offset)
   *
   * метод возврвщает все записи таблицы (игроки - players)
   * в многомерный массив
   * 
   * @param int $limit количество выбираемых записей (если не указано, то выбираются все записи)
   * @param int $offset смещение первой выбираемой записи (если не указано, то записи выбираются с нулевой)
   * 
   * @return Array двумерный массив выбранных записей
   */
  public function selectAll($limit = 0, $offset = 0) {
    $q_res = $this->pdo->query('SELECT * FROM ' . $this->table . (($limit == 0) ? '' : ' LIMIT ' . $offset . ', ' . $limit));
    return $q_res->fetchAll(PDO::FETCH_ASSOC);
  }


  /**
   * selectOne($id)
   * 
   * выбор одного игрока по его ID
   * 
   * @param int $id идентификатор пользователя в таблице
   * @return array ассоциативный массив атрибутов найденного игрока, либо false
   */
  public function selectOne($id) {
    $q_res = $this->pdo->query("SELECT * FROM {$this->table} WHERE id={$id} LIMIT 0, 1");
    return $q_res->fetch(PDO::FETCH_ASSOC);
  }

  /**
   * updatePlayer($user)
   * 
   * обновление записи игрока
   * 
   * @param array $user одномерный ассоциативный массив с новыми данными о пользователе 
   * (наличие элемена с ключем id - обязательно для идентификации редактируемой записи)
   * @return string/boolean если не было ошибок при обновлении записи пользователя, 
   * то возвращается false, иначе возвращается текст ошибки
   */
  public function updatePlayer($player) {
    if (!isset($player['id']))
      return 'невозможно идентифицировать редактируемую запись';
    $first_field = "";
    if (isset($player['number'])) {
      $number = "number = '{$player['number']}'";
      $first_field = ", ";
    } else {
      $number = '';
    }
    if (isset($player['position'])) {
      $position = $first_field . "position = '{$player['position']}'";
      $first_field = ", ";
    } else {
      $position = "";
    }
    if (isset($player['fio'])) {
      $fio = $first_field . "fio = '{$player['fio']}'";
      $first_field = ", ";
    } else {
      $fio = "";
    }
    if ($first_field == "")
      return 'нет данных для обновления записи';
    $queryUpdate = "UPDATE {$this->table} SET {$number} {$position} {$fio}  WHERE id={$player['id']}";
    return ($this->pdo->query($queryUpdate)) ? false : 'не удалось обновить игрока';
  }

  /**
   * insertPlayer($player)
   * 
   * Добавление записи игрока
   * 
   * @param type $user одномерный ассоциативный массив с  данными о новом пользователе
   * Наличие элементов number, position, fio обязательны
   */
  public function insertPlayer($player) {
      if(isset($player['number']) & isset($player['position']) & isset($player['fio']))
      {
    $queryInsert = "INSERT INTO players VALUES ('', '$player[number]]','$player[position]', '$player[fio]')";
    return ($this->pdo->query($queryInsert)) ? false : 'не удалось добавить игрока';
      }
      else return 'нет данных для добавления игрока';
  }
  
  /**
   * deletePlayer($id)
   * 
   * Удаление записи игрока
   * 
   * @param type $id айди игрока, которого следует удалить
   */
  public function deletePlayer($id) {
    $queryDelete = "DELETE FROM players WHERE id=$id";
    return ($this->pdo->query($queryDelete)) ? false : 'не удалось удалить игрока';
  }

}

?>
