<?php
    namespace Model;

    use PDO;

    class Db
    {
        private $o;
        public function __construct()
        {   
            $this->o=new PDO("mysql:host=localhost; dbname=customer","root",'' );
            $this->o->query("set name 'utf8' ");
        }

        protected function selectQuery($sql,$arr=array())
        {
            $temp=$this->o->prepare($sql);
            $temp->execute($arr);
            return $temp->fetchALL(PDO::FETCH_ASSOC);
        }
        protected function updateQuery($sql,$arr)
        {
            $temp=$this->o->prepare($sql);
            $temp->execute($arr);
            return $temp->rowCount();
        }
    }
?>