<?php
/*
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "kanas" ;


$conn = mysqli_connect($server , $username , $password , $dbname) ;

if(isset($_POST['submit'])){

    if(!empty($_POST['Brugernavn']) && !empty($_POST['Password'])){

        $Brugernavn = $_POST['Brugernavn'];
        $Password = $_POST['Password'];

        $query = "INSERT INTO login(Brugernavn,Password) VALUES('$Brugernavn','$Password')";

        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

        if($run){
            echo "Login submitted sucessfully" ;
        }
                else {
                    echo "Login not submitted" ;
            }
        }
        else{
            echo "all fields required" ;
    }
    }
?>

//*https://www.youtube.com/watch?v=-WiWjYnTmXM
 */
/*
$Brugernavn = $_POST['Brugernavn'];
$Password = $_POST['Password'];

$conn = new mysqli('localhost' , 'root' , '', 'kanas') ;

$sql = "INSERT INTO login(Brugernavn,Password)
    VALUES('$Brugernavn','Password')";
*/

$conn = mysqli_connect('localhost','root','','kanas');
$sql = mysqli_query($conn,'SELECT * FROM login');
while($data = mysqli_fetch_array($sql)){
    echo $data['Brugernavn'] , $data['Password'].;
}

?>