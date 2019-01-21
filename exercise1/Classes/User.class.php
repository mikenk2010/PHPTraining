<?PHP
    require 'Classes/Db.class.php';

    use Model\Db as Db;

    class User extends Db
    {
        public function getUser()
        {
            $sql="select * from user";
            $data=$this->selectQuery($sql);
            return $data;
        }
        
        public function addUser($arr)
        {
            $sql="INSERT INTO `user` (`FirstName`, `LastName`, `Gender`, `Address`, `DoB`, `Status`, `CreateDate`)
            VALUES (?,?,?,?,?,?,?); ";
            return $this->updateQuery($sql,$arr);
            
        }

        public function deleteUser($arr)
        {
            $sql="DELETE FROM user WHERE user.FirstName =? AND user.LastName = ?";
            $this->updateQuery($sql,$arr);
        }
        public function updateUser($arr,$First,$Last)
        {
            $sql="UPDATE user SET Gender = ?, Address = ?, DoB = ?, Status =?
            WHERE user.FirstName = '$First' AND user.LastName = '$Last';";
            return $this->updateQuery($sql,$arr);
        }
    }
?>