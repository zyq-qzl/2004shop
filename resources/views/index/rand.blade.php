<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>抽奖</title>
</head>
<body>

    <h2>抽奖活动</h2>

    <button id="btn-rand">开始抽奖</button>

</body>
</html>
<script src="/static/js/plugins/jquery/jquery.min.js"></script>
<script>
    $(document).on('click',"#btn-rand",function(){
        //alert(123);
        $.ajax({
            url: "/index/addRand",
            data: "get",
            dataType: "json",
            success:function(res){
                console.log(res);
                if(res.data){
                    alert($data);
                }
            }
        });
    });
</script>

