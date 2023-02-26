<?php
require_once('DB_Connection.php');

class dashboard1 extends dbConnect{
    private $id;
    private $date;
    private $user;
    private $total;
    private $dbconn;

    public function __construct($id='', $date='', $user='', $total='')
    {
       $this ->id= $id;
       $this ->emri=$date;
       $this ->email=$user;
       $this ->message=$total;

        $this->dbconn=$this->connectDB();
    }
        public function setId($id)
        {
            $this ->id=$id;
        }
        public function getId()
        {
            return $this->id;
        }
        public function setDate($date)
        {
            $this ->date=$date;
        }
        public function getDate()
        {
            return $this->date;
        }
        public function setUser($user)
        {
            $this ->user=$user;
        }
        public function getUser()
        {
            return $this->user;
        }
        public function setTotal($total)
        {
            $this ->total=$total;
        }
        public function getTotal()
        {
            return $this->total;
        }

        public function lexoDhenat2()
        {
          $sql=" SELECT * FROM dashboard1";
          $stm=$this-> dbconn-> prepare($sql);
 
          $stm-> execute();
          $rezultati= $stm->fetchAll(PDO::FETCH_ASSOC);
 
          return $rezultati;
        }

        public function deleteDhenat2($id){
            $sql="DELETE FROM dashboard1 WHERE id=:id";
    
            $stm=$this->dbconn->prepare($sql);
            $stm->bindParam('id',$id);
            $stm->execute();
    
            if($stm==true){
                echo "<script>
                alert('Te dhenat jane fshire me sukses');
                document.location='dashboard.php';
                </script>";
            }else{
                return false;
            }
        }
    


 }