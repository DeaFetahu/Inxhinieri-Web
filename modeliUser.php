<?php 
require_once('DB_Connection.php');

class useri extends dbConnect{
    private $id;
    private $emri;
    private $mbiemri;
    private $email;
    private $password;
    private $roli;
    private $dbconn;

    public function __construct($id='', $emri='', $mbiemri='', $email='', $password='',$roli='')
    {
       $this ->id= $id;
       $this ->emri=$emri;
       $this ->mbiemri=$mbiemri;
       $this ->email=$email;
       $this ->password=$password;
       $this ->roli=$roli;

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
        public function setRoli($roli)
        {
            $this ->roli=$roli;
        }
        public function getRoli()
        {
            return $this->roli;
        }


    
    public function insertoDhenat(){
        $sql="INSERT INTO useri (emri,mbiemri,email, password,roli) VALUES (:emri,:mbiemri,:email,:password,:roli)";

        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam(':emri', $this->emri);
        $stm->bindParam(':mbiemri', $this->mbiemri);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':password', $this->password);
        $stm->bindParam(':roli', $this->roli);
       

        $stm->execute();

        echo "<script>
                alert('te dhenat jane regjistruar me sukses');
                document.location='account.php';
         </script>";
        
    }
    public function lexoDhenat()
    {
       $sql=" SELECT * FROM useri";
    $stm=$this-> dbconn-> prepare($sql);

    $stm-> execute();
   $rezultati= $stm->fetchAll(PDO::FETCH_ASSOC);

    return $rezultati;
    }

    public function deleteDhenat($id){
        $sql="DELETE FROM useri WHERE id=:id";

        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam('id',$id);
        $stm->execute();

        if($stm==true){
            echo "<script>
            alert('Te dhenat jane fshire me sukses');
            document.location='display.php';
            </script>";
        }else{
            return false;
        }
    }
    public function lexoDhenatSipasId($id){
        $sql='SELECT * FROM useri WHERE id=:id';

        $stm=$this->dbconn->prepare($sql);
        $stm->execute([':id'=>$this->id=$id]);
        $rezultati=$stm->fetch(PDO::FETCH_ASSOC);

        return $rezultati;
    }
    public function updateDhenat(){
        $sql='UPDATE useri GET emri=?, mbiemri=?, email=?, password=?, roli=? where id=?';

        $stm=$this->dbconn->prepare($sql);
        $stm->execute ([$this->emri, $this->mbiemri,$this->email, $this->password,$this->roli,$this->id]);
    }
   
}


?>
