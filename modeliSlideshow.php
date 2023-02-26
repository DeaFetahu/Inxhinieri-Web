<?php
require_once('DB_Connection.php');

class slideshow extends dbConnect{
    private $id;
    private $foto;
    private $teksti1;
    private $teksti2;
    private $dbconn;

    public function __construct($id='', $foto='', $teksti1='', $teksti2="")
    {
       $this ->id= $id;
       $this ->foto=$foto;
       $this ->teksti1=$teksti1;
       $this ->teksti2=$teksti2;


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
        public function setTeksti1($teksti1)
        {
            $this ->teksti1=$teksti1;
        }
        public function getTeksti1()
        {
            return $this->teksti1;
        }
        public function setTeksti2($teksti2)
        {
            $this ->teksti2=$teksti2;
        }
        public function getTeksti2()
        {
            return $this->teksti2;
        }
    
        public function insertoDhenatS(){
            $sql="INSERT INTO slideshow (foto,teksti1,teksti2) VALUES (:foto,:teksti1,:teksti2)";
             $stm=$this ->dbconn ->prepare ($sql);
             $stm ->bindParam(':foto',$this->foto);
             $stm ->bindParam(':teksti1',$this->teksti1);
             $stm ->bindParam(':teksti2',$this->teksti2);
             
             $stm ->execute();
     
             echo "<script>
              alert('Product has been added successfully!');
              document.location='displaySlide.php';
              </script>";
         }

       public function lexoDhenatS()
       {
         $sql=" SELECT * FROM slideshow";
         $stm=$this-> dbconn-> prepare($sql);

         $stm-> execute();
         $rezultati= $stm->fetchAll(PDO::FETCH_ASSOC);

         return $rezultati;
       }

       public function deleteDhenatS($id){
        $sql="DELETE FROM slideshow WHERE id=:id";

        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam('id',$id);
        $stm->execute();

        if($stm==true){
            echo "<script>
            alert('Te dhenat jane fshire me sukses');
            document.location='displaySlide.php';
            </script>";
        }else{
            return false;
        }
    }

    public function lexoDhenatSipasIDsS($id){
        $sql = 'SELECT * FROM slideshow where id=:id';
    
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([':id'=>$this->id=$id]);
        $rezultati=$stm->fetch(PDO::FETCH_ASSOC);
        return $rezultati;
    }

    public function updateDhenatS(){
        $sql='UPDATE slideshow SET foto=?,teksti1=?,teksti2=? where id=?';

            $stm=$this->dbconn->prepare($sql);
            $stm->execute([$this->foto,$this->teksti1,$this->teksti2,$this->id]);
    }

      
    }
?>