<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
       <!-- <script src="{{ asset('js/app.js') }}" defer></script> !-->
        <title>Laravel</title>

        <!-- Fonts -->
        

        <!-- Styles -->
        <style>
            
            * {
                margin: 0;
            }
            p {
                padding: 0;
                margin: 0;
            }
            body {
                margin-top: 20px;
                font-size: 100%;
                background: rgba(100,100,100);
                

            }
            #header {
                color: white;
                text-align: center;
                font-family: 'Helvetica Neue Cyr Heavy';
                margin-bottom: 30px;
              
            }
            #content {
                font-family: 'Helvetica Neue Cyr Thin';
                color: white;
                display:flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin: 0 auto;
            }
            #item {
                border-radius: 10px;
                padding: 5px;
                width: 100%;
                margin-bottom:5px;

            }
            #item:nth-child(odd) {
                background: #FF7952;
            }
            #item:nth-child(even) {
                background: #3860FF;
            }
            @media screen and (min-width: 800px) {
             #content {
              
               width:33%;
               margin: 0 auto;
           }
            #item {
                font-size: 1.2rem;
            }
            #header {
                font-size: 2rem;
            }

           
            }

            @media (max-width: 768px) {
                #content {
              
              width:80%;
              margin: 0 auto;
          }

            }

            @media screen and (max-width: 480px) {
                
                #content {
                    width: 80%;
                }
                #item {
                    width: 100%;
                    font-size: 0.9rem;
                    padding: 10px;
                }
                #header {
                    font-size: 1.3rem;
                    margin-bottom: 10px;
                }

            }

            @font-face {
                font-family: 'Helvetica Neue Cyr Heavy';
                src: url('../fonts/HelveticaNeueCyr-Heavy.eot');
                src: url('../fonts/HelveticaNeueCyr-Heavy.eot?#iefix') format('embedded-opentype'),
                url('../fonts/HelveticaNeueCyr-Heavy.woff') format('woff'),
                url('../fonts/HelveticaNeueCyr-Heavy.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }

            @font-face {
                font-family: 'Helvetica Neue Cyr Thin';
                src: url('../fonts/HelveticaNeueCyr-Thin.eot');
                src: url('../fonts/HelveticaNeueCyr-Thin.eot?#iefix') format('embedded-opentype'),
                url('../fonts/HelveticaNeueCyr-Thin.woff') format('woff'),
                url('../fonts/HelveticaNeueCyr-Thin.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }

            @font-face {
                font-family: 'Helvetica Neue Cyr Light';
                src: url('../fonts/HelveticaNeueCyr-Light.eot');
                src: url('../fonts/HelveticaNeueCyr-Light.eot?#iefix') format('embedded-opentype'),
                url('../fonts/HelveticaNeueCyr-Light.woff') format('woff'),
                url('../fonts/HelveticaNeueCyr-Light.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }
        </style>
    </head>
    <body>
     
        <div id="app">
        </div>
        <div id="header">
            Номер зубной щетки:{{$tooth_brush_id}} <br>
            Владелец щетки: {{$name}}
        </div>
        <div id="content">
            @foreach ($brushes as $brush)
            <div id="item">
                <p>Время начала чистки:{{date('d.m.Y H:m',strtotime($brush->started_at))}}</p>
                <p>Продолжительность: {{$brush->duration}}</p>
            </div>
            @endforeach 
        </div>

    </body>
</html>
