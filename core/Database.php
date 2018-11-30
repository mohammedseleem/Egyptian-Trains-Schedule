<?php
require_once "init.php";
function createDatabase()
{
  $dbh = new PDO("mysql:host=localhost",USERNAME,PASSWORD,[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
  $dbh->exec("CREATE DATABASE IF NOT EXISTS egytrains");
  $dbh->exec("USE egytrains");
  $dbh->exec("CREATE TABLE IF NOT EXISTS `trains` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `number` int(11) NOT NULL,
      `speed` int(11) NOT NULL,
      `degree` varchar(255) CHARACTER SET utf8 NOT NULL,
      `source_station` varchar(255) CHARACTER SET utf8 NOT NULL,
      `destination_station` varchar(255) CHARACTER SET utf8 NOT NULL,
      `moving` varchar(255) CHARACTER SET utf8 NOT NULL,
      `arriving` varchar(255) CHARACTER SET utf8 NOT NULL,
      `period` varchar(255) CHARACTER SET utf8 NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;");

   
  $stmt = $dbh->prepare("SELECT * FROM trains");
  $stmt->execute();
  $rows = $stmt->fetchAll(); 
  if(count($rows) == 0)
  {
    $dbh->exec("INSERT INTO `trains` VALUES 
    (1,83,120,'اكسبريس بعربيات مطورة (ركاب)','اسوان','الاقصر','9:15 ص','11:15 ص','2:00'),
    (2,83,120,'اكسبريس بعربيات مطورة (ركاب)','الاقصر','قنا','11:15 ص','1:15 م','2:00'),
    (3,83,120,'اكسبريس بعربيات مطورة (ركاب)','قنا','سوهاج','1:15 م','3:15 م','2:00'),
    (4,83,120,'اكسبريس بعربيات مطورة (ركاب)','سوهاج','اسيوط','3:15 م','5:15 م','2:00'),
    (5,83,120,'اكسبريس بعربيات مطورة (ركاب)','اسيوط','المنيا','5:15 م','7:15 م','2:00'),
    (6,803,130,'VIP','اسوان','الاقصر','9:00 م','10:00 م','1:00'),
    (7,803,130,'VIP','الاقصر','قنا','10:15 م','11:15 م','1:00'),
    (8,803,130,'VIP','قنا','سوهاج','11:30 م','12:30 ص','1:00'),
    (9,803,130,'VIP','سوهاج','اسيوط','12:45 ص','1:45 ص','1:00'),
    (10,803,130,'VIP','اسيوط','المنيا','2:00 ص','3:00 ص','1:00'),
    (11,1050,140,'نوم','اسوان','الاقصر','9:15 م','10:15 م','1:00'),
    (12,1050,140,'نوم','الاقصر','قنا','10:15 م','11:15 م','1:00'),
    (13,1050,140,'نوم','قنا','سوهاج','11:15 م','12:15 ص','1:00'),
    (14,1050,140,'نوم','سوهاج','اسيوط','12:15 ص','1:15 ص','1:00'),
    (15,150,140,'نوم','اسيوط','المنيا','1:15 ص','2:15 ص','1:00'),
    (16,996,130,'مكيف','اسوان','الاقصر','1:00 م','2:30 م','1:30'),
    (17,996,130,'مكيف','الاقصر','قنا','2:30 م','4:00 م','1:30'),
    (18,996,130,'مكيف','قنا','سوهاج','4:00 م','5:30 م','1:30'),
    (19,996,130,'مكيف','سوهاج','اسيوط','5:30 م','7:00 م','1:30'),
    (20,996,130,'مكيف','اسيوط','المنيا','7:00 م','8:30 م','1:30'),
    (21,83,120,'اكسبريس بعربيات مطورة (ركاب)','المنيا','بنى سويف','7:15 م','9:15 م','2:00'),
    (22,83,120,'اكسبريس بعربيات مطورة (ركاب)','بنى سويف','الجيزة','9:15 م','11:15 م','2:00'),
    (26,803,130,'VIP','المنيا','بنى سويف','3:15 ص','4:15 ص','1:00'),
    (27,803,130,'VIP','بنى سويف','الجيزة','4:15 ص','5:15 ص','1:00');");

  }
  
}
Class Database
{
   private $_dsn = DSN;
   private $_username = USERNAME;
   private $_password = PASSWORD;
   private $_pdo;

   public function __construct()
   {
      createDatabase();
      $this->connection();
   }

   public function connection()
   {
    	try
        {
           $this->_pdo = new PDO($this->_dsn,$this->_username,$this->_password,[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",]);
           $this->_pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo "Failed to connect { " . $e->getMessage() . " }";
        }
   }

   public function getOneObj($query,$params)
   {
     $stmt = $this->_pdo->prepare($query);
     $stmt->execute($params);
     return $stmt->fetch(PDO::FETCH_OBJ);
   }
   public function getOne($query,$params)
   {
     $stmt = $this->_pdo->prepare($query);
     $stmt->execute($params);
     return $stmt->fetch();
   }
   public function getManyObj($query,$params)
   {
     $stmt = $this->_pdo->prepare($query);
     $stmt->execute($params);
     return $stmt->fetchAll(PDO::FETCH_OBJ);
   }
   public function getMany($query,$params)
   {
     $stmt = $this->_pdo->prepare($query);
     $stmt->execute($params);
     return $stmt->fetchAll();
   }
   public function getCount($query,$params)
   {
     $stmt = $this->_pdo->prepare($query);
     $stmt->execute($params);
     return $stmt->rowCount();
   }
   public function insert($query,$params)
   {
     $stmt = $this->_pdo->prepare($query);
     $stmt->execute($params);
     return $stmt->rowCount();
   }
   public function update($query,$params)
   {
     return $this->insert($query,$params);
   }
   public function delete($query,$params)
   {
     return $this->insert($query,$params);
   }



}

$database = new Database;
?>

