<?php 
$con=mysqli_connect("localhost","root","","studentsform");//learing data base name and "" me jo hai wo password hai
if(mysqli_connect_error()){
    echo "can not connect";
}
else{
    echo "connected".mysqli_connect_error();
}

?>