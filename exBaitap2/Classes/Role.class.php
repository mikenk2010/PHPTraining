<?PHP
    require_once 'Classes/Db.class.php';

    use Model\Db as Db;
    
    class Role extends Db
    {
        public function getRole()
        {
            $Sql="select * from role";
            return $Data=$this->selectQuery($Sql);
        }

        public function getEmployeeAtRole($RoleName)
        {
            $Sql="select *
                from employee join rolemapping on employee.ID=rolemapping.EmployeeId
                where rolemapping.RoleId='$RoleName';
                ";
            return $this->selectQuery($Sql);
        }

        public function createUserRole($arr)
        {
            $Sql="INSERT INTO `rolemapping` (`EmployeeId`, `RoleId`) VALUES (?, ?);";
            return $this->selectQuery($Sql,$arr);
        }
    }
?>