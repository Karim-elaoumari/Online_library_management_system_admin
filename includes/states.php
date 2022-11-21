<?php
	include('includes/database.php');
    function total_sales($conn){
        $sql = "SELECT * FROM books inner join sales on books.id = sales.book_id ";
        $result = mysqli_query($conn, $sql);
        $total=0;
        if (mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){
            $total+=$row["price"]*$row["quantity_solded"];
        }}
        return $total;
       

    }
    function total_books($conn){
        $sql = "SELECT * FROM `books` ";
        $result = mysqli_query($conn, $sql);
        $total=0;
        if (mysqli_num_rows($result) > 0){
           
        while($row = mysqli_fetch_assoc($result)){
            $total++;
        }}
        return $total;
    }
    function total_admins($conn){
        $sql = "SELECT * FROM admins";
        $result = mysqli_query($conn, $sql);
        $total=0;
        if (mysqli_num_rows($result) > 0){
           
        while($row = mysqli_fetch_assoc($result)){
            $total++;}}
        return $total;
    }
    function total_today_sales($conn){
        $today=date("Y-m-d");
        $sql = "SELECT * FROM books inner join sales on books.id = sales.book_id where sales.date_sold ='$today' ";
        $result = mysqli_query($conn, $sql);
        $total=0;
        if (mysqli_num_rows($result) > 0){
            
        while($row = mysqli_fetch_assoc($result)){
            $total+=$row["price"]*$row["quantity_solded"];
        }}
        return $total;

    }







?>

