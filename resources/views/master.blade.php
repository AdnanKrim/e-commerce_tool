<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com Preject</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    
</body>
<style>
    .custom-login{
        height: 600px;
        padding-top:100px;
    }
    img.slider-img{
        height:400px !important;
    }
    .custom-product{
        height:600px;
        overflow: auto;
    }
    .carousel-caption{
        color:black;
        background-color: #ffffff80;
    }
    .trending-image{
        height: 100px;
    }
    .trending-items{
        float: left;
        width: 25%;
    }
    .trending-wrapper{
        margin-top: 30px;
    }
     .detail-image{
         height: 400px;
     }
     .search-box{
         width:500px!important;
     }
     .searched-item{
         margin-top: 3rem;
         border-bottom: 1px solid gray;
         padding-bottom: 2rem;
     }
    
</style>

</html>