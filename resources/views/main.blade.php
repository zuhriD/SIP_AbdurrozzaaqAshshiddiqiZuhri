
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - Account Management</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('style/assets/scss/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><h3>Zuhri Admin</h3></a>
                <a class="navbar-brand hidden" href="./">Z</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('home') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="{{ url('user') }}"> <i class="menu-icon fa fa-users"></i>Users </a>
                    </li>
                    @if(session('role_id') == 1)
                    <li>
                        <a href="{{ url('role') }}"> <i class="menu-icon fa fa-users"></i>Roles </a>
                    </li>
                    @endif

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>


                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <label style="margin-right: 10px;
                        margin-top: 5px;">{{ session('nama') }}</label>    
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="  fa fa-angle-double-down"></i>
                        </a>
                        <div class="user-menu dropdown-menu">

                            <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-power -off"></i>Logout</a>
                        </div>

                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        @yield('breadcrumbs')
        @yield('content')


        

        


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="{{asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{asset('style/assets/js/main.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="{{asset('style/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('style/assets/js/widgets.js')}}"></script>

    <script src="{{asset('style/assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('style/assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
     $(document).ready(function() {
       $("#checkBoxAll").click(function() {
          $(".checkBoxClass").prop('checked', $(this).prop('checked')); 
      }); 

       $(document).on('click','#deleteAllSelectedR',function() {
           var id = [];
           if(confirm("Are You sure to delete this data?")){
               $('.checkBoxClass:checked').each(function () {
                id.push($(this).val());     
            });
               if (id.length > 0) {
                   $.ajax({
                    url:'{{ url('profil/dell') }}',
                    type:'DELETE',
                    data:{
                        ids:id,
                        _token:$("input[name=_token]").val()
                    },
                    success:function (response) {
                        $.each(id,function(key,val){
                            $('#sid'+val).remove();
                        });
                    }
                });

               }else{
                alert("Please select atleast one checkbox");  
            }
        }

    });
   });
     function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
      }

    reader.readAsDataURL(input.files[0]); // convert to base64 string
}
}
    
$("#imgInp").change(function() {
  readURL(this);
});
$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});

</script>

</body>
</html>
