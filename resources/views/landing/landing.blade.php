<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('keyTitle')</title>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom2.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/preloader.css') }}">
   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-EXAMPLE_HASH" crossorigin="anonymous" />
   
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.2-web/css/all.min.css')}}">
    <link rel="icon" type="image/png" style="height: 12px;width:16px;" href="{{asset('images/logo/ride3.png')}}"> 
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>
<body>
   

            @include('landing.pre-header')
            @include('landing.navbar')
            
        
           @yield('maincontent')
        
            @include('landing.footer')


       

       


    
    
    
    

        <script>
            
function showLoading() {
  document.querySelector('#loading').classList.add('loading');
  document.querySelector('#loading-content').classList.add('loading-content');
}

function hideLoading() {
  document.querySelector('#loading').classList.remove('loading');
  document.querySelector('#loading-content').classList.remove('loading-content');
}


        </script>
        
<script src="{{asset('bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="https://kit.fontawesome.com/dc30f419d9.js" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
       case 'info':
       toastr.info(" {{ Session::get('message') }} ");
       break;
   
       case 'success':
       toastr.success(" {{ Session::get('message') }} ");
       break;
   
       case 'warning':
       toastr.warning(" {{ Session::get('message') }} ");
       break;
   
       case 'error':
       toastr.error(" {{ Session::get('message') }} ");
       break; 
    }
    @endif 
</script>
</body>
</html>