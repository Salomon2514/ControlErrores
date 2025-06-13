<?PHP

try {
//Intentar
    echo "try to do something here <br>";
    //Algo salió Mal
    throw new Exception("YIkes, Something went  funky<br>",234);
    echo $variable;

}catch (Exception $e){

    echo $e->getMessage();

}finally
{
    //Esto siempre se correrá en nuestro bloque try
    echo "This will always run in our try block.<br>";
}