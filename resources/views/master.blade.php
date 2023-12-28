<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECommerce</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      
    </style>

</head>
<body>
    {{ View::make('header') }}
  @yield("content")
  {{ View::make('footer') }}
</body>
<style>
    .custom-login {
        height:500px;
        padding-top:100px;
    }
    img.slider-img{
        height: 400px !important;
    } 
    .custom-product{
        height: 1000px;
    }
    .slider-text{
        background-color: #24465454 !important;
    }
    .trending-img {
        height:100px;
    }
    .trending-item {
      float: left;  
      width: 20%;
    }
    .trending-wrapper{
        margin:20px;
    }
    .detail-img{
        height:200px;
    }
</style>
</html>