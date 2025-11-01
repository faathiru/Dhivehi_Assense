<?php
try{
    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'maldivian_culture'
    );

    echo    "<script>console.log('DB Connection Sccessfully')</script>";
}catch(Throwable $th){
    echo $th->getMessage();
    echo '<pre>' . $th->getTraceAsString(). '</pre>';
}
?>