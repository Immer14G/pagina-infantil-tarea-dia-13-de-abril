<?php
class Animal{
    public function roar(){
        echo "El ";
    }
}
class Gato extends Animal{
public $nombre;
public function __construct($nombre)
{
    $this->nombre=$nombre;
}
public function roar(){
    echo $this->nombre."miaguea, MIAU!!";
}
}
class Perro extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar(){
        echo $this->nombre."ladra, Wau!";
    }
    }
    class Vaca extends Animal{
        public $nombre;
        public function __construct($nombre)
        {
            $this->nombre=$nombre;
        }
        public function roar(){
            echo $this->nombre."le hace MU!!";
        }
        }
        class abecedario extends Animal{
            public $nombre;
            public function __construct($nombre)
            {
                $this->nombre=$nombre;
            }
            public function roar(){
                echo $this->nombre."a,b,c,d,e,f,g,h,i,j,k,m,n,o,p,q,r,s,t,u,v,w,x,y,z";
            }
            }

function roarAnimal(Animal $animal)
{
    $animal->roar();
}
$gato=new gato("gato");
$perro=new perro("perro");
$vaca=new vaca("vaca");
$abecedario=new abecedario("abecedario");



if(isset($_POST["gato"])){
    ?>

<script>
    var msg=new SpeechSynthesisUtterance("<?php roarAnimal($gato)?>");
    window.speechSynthesis.speak(msg);
</script>

<?php
}
else if(isset($_POST["perro"])){
    ?> 
<script>
    var msg=new SpeechSynthesisUtterance("<?php roarAnimal($perro)?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
else if(isset($_POST["vaca"])){
    ?> 
<script>
    var msg=new SpeechSynthesisUtterance("<?php roarAnimal($vaca)?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
else if(isset($_POST["abecedario"])){
    ?> 
<script>
    var msg=new SpeechSynthesisUtterance("<?php roarAnimal($abecedario)?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
?>





