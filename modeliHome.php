<?php
require_once('DB_Connection.php');

class home extends dbConnect{
    private $id;
    private $tekst;
    private $foto;
    private $description;
    private $dbconn;

    public function __construct($id='', $tekst='', $foto='', $description='')
    {
       $this ->id= $id;
       $this ->tekst=$tekst;
       $this ->foto=$foto;
       $this ->description=$description;

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
        public function setTeksti($tekst)
        {
            $this ->tekst=$tekst;
        }
        public function getTeksti()
        {
            return $this->tekst;
        }
        public function setFoto($foto)
        {
            $this ->foto=$foto;
        }
        public function getFoto()
        {
            return $this->foto;
        }
        public function setDesc($description)
        {
            $this ->description=$description;
        }
        public function getDesc()
        {
            return $this->description;
        }

        
        public function lexoDhenat2()
       {
         $sql=" SELECT * FROM home";
         $stm=$this-> dbconn-> prepare($sql);

         $stm-> execute();
         $rezultati= $stm->fetchAll(PDO::FETCH_ASSOC);

         return $rezultati;
       }

       public function lexoDhenatStay()
       {
         $sql=" SELECT * FROM stay";
         $stm=$this-> dbconn-> prepare($sql);

         $stm-> execute();
         $rezultati= $stm->fetchAll(PDO::FETCH_ASSOC);

         return $rezultati;
       }

       public function lexoDhenatEat()
       { 
         $sql=" SELECT * FROM eat";
         $stm=$this-> dbconn-> prepare($sql);

         $stm-> execute();
         $rezultati= $stm->fetchAll(PDO::FETCH_ASSOC);

         return $rezultati;
       }

       public function lexoDhenatDo()
       {
         $sql=" SELECT * FROM do";
         $stm=$this-> dbconn-> prepare($sql);

         $stm-> execute();
         $rezultati= $stm->fetchAll(PDO::FETCH_ASSOC);

         return $rezultati;
       }

       public function lexoDhenatQytetet()
       {
         $sql=" SELECT * FROM qytetet";
         $stm=$this-> dbconn-> prepare($sql);

         $stm-> execute();
         $rezultati= $stm->fetchAll(PDO::FETCH_ASSOC);

         return $rezultati;
       }
        
       public function deleteDhenat2($id){
        $sql="DELETE FROM home WHERE id=:id";

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

      
    }
?>