<?php
require_once('DB_Connection.php');

class stay extends dbConnect{
    private $id;
    private $foto;
    private $emri;
    private $url;
    private $dbconn;

    public function __construct($id='', $foto='', $emri='', $url='')
    {
       $this ->id= $id;
       $this ->foto=$foto;
       $this ->emri=$emri;
       $this ->url=$url;

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
        public function setUrl($url)
        {
            $this ->url=$url;
        }
        public function getUrl()
        {
            return $this->url;
        }



        public function insertoDhenat(){
            $sql="INSERT INTO stay (foto,emri,url) VALUES (:foto,:emri,:url)";
             $stm=$this ->dbconn ->prepare ($sql);
             $stm ->bindParam(':foto',$this->foto);
             $stm ->bindParam(':emri',$this->emri);
             $stm ->bindParam(':url',$this->url);
           
             
             $stm ->execute();
     
             echo "<script>
              alert('Product has been added successfully!');
              document.location='displayHome.php';
              </script>";
         }

       public function lexoDhenatStay()
       {
         $sql=" SELECT * FROM stay";
         $stm=$this-> dbconn-> prepare($sql);

         $stm-> execute();
         $rezultati= $stm->fetchAll(PDO::FETCH_ASSOC);

         return $rezultati;
       }

       public function deleteDhenatStay($id){
        $sql="DELETE FROM stay WHERE id=:id";

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

    public function lexoDhenatSipasIDs($id){
        $sql = 'SELECT * FROM stay where id=:id';
    
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([':id'=>$this->id=$id]);
        $rezultati=$stm->fetch(PDO::FETCH_ASSOC);
        return $rezultati;
    }

    public function updateDhenat(){
        $sql='UPDATE stay SET foto=?,emri=?,url=? where id=?';

            $stm=$this->dbconn->prepare($sql);
            $stm->execute([$this->foto,$this->emri,$this->url,$this->id]);
    }





        // EAT//

        public function insertoDhenatEat(){
            $sql="INSERT INTO eat (foto,emri,url) VALUES (:foto,:emri,:url)";
             $stm=$this ->dbconn ->prepare ($sql);
             $stm ->bindParam(':foto',$this->foto);
             $stm ->bindParam(':emri',$this->emri);
             $stm ->bindParam(':url',$this->url);
           
             
             $stm ->execute();
     
             echo "<script>
              alert('Product has been added successfully!');
              document.location='displayHome.php';
              </script>";
         }

       public function lexoDhenatEat()
       {
         $sql=" SELECT * FROM eat";
         $stm=$this-> dbconn-> prepare($sql);

         $stm-> execute();
         $rezultati= $stm->fetchAll(PDO::FETCH_ASSOC);

         return $rezultati;
       }

       public function deleteDhenatEat($id){
        $sql="DELETE FROM eat WHERE id=:id";

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

    public function lexoDhenatSipasIDsEat($id){
        $sql = 'SELECT * FROM eat where id=:id';
    
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([':id'=>$this->id=$id]);
        $rezultati=$stm->fetch(PDO::FETCH_ASSOC);
        return $rezultati;
    }
    
    public function updateDhenatEat(){
        $sql='UPDATE eat SET foto=?,emri=?,url=? where id=?';

            $stm=$this->dbconn->prepare($sql);
            $stm->execute([$this->foto,$this->emri,$this->url,$this->id]);
    }





       //  Do  //
       public function insertoDhenatDo(){
        $sql="INSERT INTO do (foto,emri,url) VALUES (:foto,:emri,:url)";
         $stm=$this ->dbconn ->prepare ($sql);
         $stm ->bindParam(':foto',$this->foto);
         $stm ->bindParam(':emri',$this->emri);
         $stm ->bindParam(':url',$this->url);
       
         
         $stm ->execute();
 
         echo "<script>
          alert('Product has been added successfully!');
          document.location='displayHome.php';
          </script>";
     }

   public function lexoDhenatDo()
   {
     $sql=" SELECT * FROM do";
     $stm=$this-> dbconn-> prepare($sql);

     $stm-> execute();
     $rezultati= $stm->fetchAll(PDO::FETCH_ASSOC);

     return $rezultati;
   }

   public function deleteDhenatDo($id){
    $sql="DELETE FROM do WHERE id=:id";

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

public function lexoDhenatSipasIDsDo($id){
    $sql = 'SELECT * FROM do where id=:id';

    $stm=$this->dbconn->prepare($sql);
    $stm->execute([':id'=>$this->id=$id]);
    $rezultati=$stm->fetch(PDO::FETCH_ASSOC);
    return $rezultati;
}

public function updateDhenatDo(){
    $sql='UPDATE do SET foto=?,emri=?,url=? where id=?';

        $stm=$this->dbconn->prepare($sql);
        $stm->execute([$this->foto,$this->emri,$this->url,$this->id]);
}

      
    }
?>