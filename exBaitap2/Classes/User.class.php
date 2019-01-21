<?PHP
    require_once 'Classes/Db.class.php';

    use Model\Db as Db;

    class User extends Db
    {
        public function getUser()
        {
            $sql="select * from employee";
            $data=$this->selectQuery($sql);
            return $data;
        }
        
        public function addUser($arr)
        {
            $sql="INSERT INTO employee (ID, FirstName, LastName, Gender, Address, DoB, Status, CreateDate)
            VALUES (?,?,?,?,?,?,?,?); ";
            return $this->updateQuery($sql,$arr);
            
        }

        public function deleteUser($arr)
        {
            $sql="DELETE FROM rolemapping WHERE rolemapping.EmployeeId =?";
            $this->updateQuery($sql,$arr);
            $sql="DELETE FROM employee WHERE employee.ID =?";
            $this->updateQuery($sql,$arr);
        }
        public function updateUser($arr,$ID)
        {
            $sql="UPDATE employee SET FirstName=?, LastName=?, Gender= ?, Address= ?, DoB= ?, Status=?
            WHERE employee.ID=$ID";
            return $this->updateQuery($sql,$arr);
        }
    }
?>