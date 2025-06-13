<?PHP
function dividir($n1, $n2){

    if ($n2 ===0){
        //Constructor
        throw new Exception("División entre cero");

    }else 
    return $n1/$n2;
}


try {
//lo que intento hacer

echo dividir(7,2);
echo dividir(7,0);


}catch (Exception $ex){
    echo "Excepción Ocurrida: ".$ex->getMessage()."<br>";
}
finally{

    //Esto siempre se correrá independientemente si tiene un error.
    echo "Todo Terminó.<br>";
}
?>