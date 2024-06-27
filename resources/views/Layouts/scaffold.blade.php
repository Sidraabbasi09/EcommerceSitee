<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Basic -->
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <!-- Mobile Metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <!-- Site Metas -->
     <meta name="keywords" content="" />
     <meta name="description" content="" />
     <meta name="author" content="" />
     <link rel="shortcut icon" href="images/favicon.png" type="">
     <title>Famms - Fashion HTML Template</title>
     @include('Partial.style')
     <style>
           .login-button {
        margin-right: 11px;
        display: inline-block;
        padding: 10px 20px;
        background-color: #f7444e; /* Your preferred color */
        color: white;
        text-decoration: none;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        font-size: 16px;
    }

    /* new */
    
        .img-boxnew img {
            max-width: 60%;
            height: auto;
            max-height: 500px; /* Adjust the maximum height as needed */
           
        }
        
        .btn-primary {
            background-color: #5cb85c;
            border-color: #4cae4c;
        }
        .detail-boxnew{
            margin-left: -150px; /* Move the detail box slightly to the left */
        }
        /* ,,, */
        body{
    margin-top:20px;
    background:#eee;
}
.ui-w-40 {
    width: 40px !important;
    height: auto;
}

.card{
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);    
}

.ui-product-color {
    display: inline-block;
    overflow: hidden;
    margin: .144em;
    width: .875rem;
    height: .875rem;
    border-radius: 10rem;
    -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    vertical-align: middle;
}
.nav_search-btn:focus{
    display: none;

}
     </style>
</head>
<body>
    
    @include('Partial.header')
    <main>
        @yield('content')
    </main>
    @include('Partial.footer')
    @include('Partial.script')
</body>
</html>