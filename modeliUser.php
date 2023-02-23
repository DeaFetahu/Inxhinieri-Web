<?php 
require_once('DB_Connection.php');

class useri extends dbConnect{
    private $id;
    private $emri;
    private $mbiemri;
    private $email;
    private $password;
    private $dbconn;

    public function __construct($id='', $emri='', $mbiemri='', $email='', $password='')
    {
       $this ->id= $id;
       $this ->emri=$emri;
       $this ->mbiemri=$mbiemri;
       $this ->email=$email;
       $this ->password=$password;

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
        public function setEmri($emri)
        {
            $this ->emri=$emri;
        }
        public function getEmri()
        {
            return $this->emri;
        }
        public function setMbiemri($mbiemri)
        {
            $this ->mbiemri=$mbiemri;
        }
        public function getMbiemri()
        {
            return $this->mbiemri;
        }
        public function setEmail($email)
        {
            $this ->email=$email;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function setPassword($password)
        {
            $this ->password=$password;
        }
        public function getPassword()
        {
            return $this->password;
        }

    
    public function insertoDhenat(){
        $sql="INSERT INTO useri (emri,mbiemri,email, password) VALUES (:emri,:mbiemri,:email,:password)";

        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam(':emri', $this->emri);
        $stm->bindParam(':mbiemri', $this->mbiemri);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':password', $this->password);
       

        $stm->execute();

        echo "<script>
                alert('te dhenat jane regjistruar me sukses');
                document.location='display.php';
         </script>";
        
    }
   
}


?>
