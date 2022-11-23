<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<button>send data</button>
<p>azehdouaehduiahzei</p>
<script>
$(function() {
    $("button").on("click", function(){
        $.ajax({
        
        method: "post",
        url: "includes/",
        data : {sign_in: "", email : "eloaumarikarim@gmail.com", password: "K2020aa"},
        success: function(first,sec,tre){
            location.href="dashboard.php"
        },
        error : function(f,s,t){
            console.log(f);
            console.log(s);
            console.log(t);
        },
    });

    });
});


</script>
</body>
</html>