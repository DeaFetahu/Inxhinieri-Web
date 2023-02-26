<?php
require_once('DB_Connection.php');

class qytetet extends dbConnect{
    private $id;
    private $foto;
    private $emri;
    private $dbconn;

    public function __construct($id='', $foto='', $emri='')
    {
       $this ->id= $id;
       $this ->foto=$foto;
       $this ->emri=$emri;


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
        public function setFoto($foto)
        {
            $this ->foto=$foto;
        }
        public function getFoto()
        {
            return $this->foto;
        }
        public function setEmri($emri)
        {
            $this ->emri=$emri;
        }
        public function getEmri()
        {
            return $this->emri;
        }
    
        public function insertoDhenatCities(){
            $sql="INSERT INTO qytetet (foto,emri) VALUES (:foto,:emri)";
             $stm=$this ->dbconn ->prepare ($sql);
             $stm ->bindParam(':foto',$this->foto);
             $stm ->bindParam(':emri',$this->emri);
             
             $stm ->execute();
     
             echo "<script>
              alert('Product has been added successfully!');
              document.location='displayHome.php';
              </script>";
         }

       public function lexoDhenatCities()
       {
         $sql=" SELECT * FROM qytetet";
         $stm=$this-> dbconn-> prepare($sql);

         $stm-> execute();
         $rezultati= $stm->fetchAll(PDO::FETCH_ASSOC);

         return $rezultati;
       }

       public function deleteDhenatCities($id){
        $sql="DELETE FROM qytetet WHERE id=:id";

        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam('id',$id);
        $stm->execute();

        if($stm==true){
            echo "<script>
            alert('Te dhenat jane fshire me sukses');
            document.location='displayHome.php';
            </script>";
        }else{
            return false;
        }
    }

    public function lexoDhenatSipasIDsCities($id){
        $sql = 'SELECT * FROM qytetet where id=:id';
    
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([':id'=>$this->id=$id]);
        $rezultati=$stm->fetch(PDO::FETCH_ASSOC);
        return $rezultati;
    }

    public function updateDhenatCities(){
        $sql='UPDATE qytetet SET foto=?,emri=? where id=?';

            $stm=$this->dbconn->prepare($sql);
            $stm->execute([$this->foto,$this->emri,$this->id]);
    }

      
    }
?>