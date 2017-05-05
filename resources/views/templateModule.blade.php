<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">



    <link href="{{ mix('css/app.css') }}" rel="stylesheet">



    <link rel="shortcut icon" href="{{env('domain')}}"  type="image/x-icon" />


    <title>@yield('t')</title>
</head>

<body class="application" >
    <div class="body-content">
          <div class="off-canvas-wrapper">
                <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
                    <div class="off-canvas position-left hide-for-print" id="offCanvasLeft" data-off-canvas>
                        <ul class="c">
                            <li> <a href=""><i class="fa fa-close " data-close="offCanvasLeft"></i></a></li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                        </ul>
                    </div>
                    <div class="off-canvas-content" data-off-canvas-content>
                        {{--TOP BAR--------------------------------------------------------------------------------------}}

                        {{--FIN TOP BAR-----------------------------------------------------------------------------------}}
                        <div class=" menu_mrg ">
                            <?php //var_dump(url(env('FONT').'build/fonts/Roboto-ThinItalic-webfont.eot')) ?>
                            @yield('content')
                        </div>
                        {{--CONTENUE --------------------------------------------------------------------------------------}}
                        <br/>
                        {{--FIN CONTENU -----------------------------------------------------------------------------------}}
                    </div>
                </div>

              <script type="text/javascript" src="{{asset('js/jq.js')}}"></script>
              <script type="text/javascript" src="{{asset('js/all.js')}}"></script>
              <script type="text/javascript" src="{{asset('js/bbcode.js')}}"></script>

          </div>
    </div>
    <script>
        $(function() {
            var wbbOpt = {
                lang: "fr",
                buttons: "bold,italic,underline,bullist,numlist,|,fontcolor,img,link,|,code,quote"
            }
            $("#editor").wysibb(wbbOpt);
        })
    $(document).foundation();



    $(document).ready(function(){

        var $switch = $('#exampleSwitch');
        $switch.bind('click',function(){
            if( $switch.is(':checked') == true){
                 $('#expanded').addClass('expanded');
                 $('#expanded_').addClass('expanded');
            }
            else{
                $('#expanded').removeClass('expanded');
                $('#expanded_').removeClass('expanded');
            }
        });
    });

    </script>
    <footer class="footer ">
        <div class="bgmain10 pad10">
            @include('footer.footer')
        </div>
    </footer>
</body>



</html>