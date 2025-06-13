 <?PHP
 function sumar($num1, $num2){
    //Se comprueba si ambos números son numéricos.
    if(is_numeric($num1) and is_numeric($num2)){
       return $num1 + $num2;
    }else{
       //Se lanza una excepción.
       throw new Exception('Los valores a sumar tienen que ser numéricos');
       return 0;
    }
 }
 try{
    //Ejecutamos la función con números.
    echo sumar(15, 20);
 }catch(Exception $e){
    echo $e->getMessage();
 }

 ?>