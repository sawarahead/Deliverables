<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Schedule</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <!--登録ページへのリンク-->
       @for ($i=1; $i <= 31 ; $i++) 
       <div>
          {{$i}}日
       </div>
       @endfor
       
    </body>
</html>