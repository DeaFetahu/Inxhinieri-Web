<?php
require_once('DB_Connection.php');

class contactus extends dbConnect{
    private $id;
    private $emri;
    private $email;
    private $message;
    private $dbconn;

    public function __construct($id='', $emri='', $email='', $message='')
    {
       $this ->id= $id;
       $this ->emri=$emri;
       $this ->email=$email;
       $this ->message=$message;

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
        public function setEmail($email)
        {
            $this ->email=$email;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function setMessage($message)
        {
            $this ->message=$message;
        }
        public function getMessage()
        {
            return $this->message;
        }

        public function insertoDhenat2(){
            $sql="INSERT INTO contactus (emri,email, message) VALUES (:emri,:email,:message)";
    
            $stm=$this->dbconn->prepare($sql);
            $stm->bindParam(':emri', $this->emri);
            $stm->bindParam(':email', $this->email);
            $stm->bindParam(':message', $this->message);
           
    
            $stm->execute();
    
            echo "<script>
                    alert('Te dhenat jane regjistruar me sukses');
                    document.location='contactus.php';
             </script>";
            
        }
        public function lexoDhenat2()
       {
         $sql=" SELECT * FROM contactus";
         $stm=$this-> dbconn-> prepare($sql);

         $stm-> execute();
         $rezultati= $stm->fetchAll(PDO::FETCH_ASSOC);

         return $rezultati;
       }
       public function deleteDhenat2($id){
        $sql="DELETE FROM contactus WHERE id=:id";

        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam('id',$id);
        $stm->execute();

        if($stm==true){
            echo "<script>
            alert('Te dhenat jane fshire me sukses');
            document.location='displayContactUs.php';
            </script>";
        }else{
            return false;
        }
    }

      
    }
?>