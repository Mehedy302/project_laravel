@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Laravel App for mental health screening</title>

        <!-- Fonts -->
        

        <!-- Styles -->
        <style>
           
        </style>

        
    </head>
    <style>
body {
  background-image: url('picback.jpg');
}
</style> 
    <body class="antialiased">
        
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <br><br><br><br><br><br><br><br>
      <center> <h2 style="color:green">    আপনি অল্প কয়েকটি প্রশ্নের উত্তর দিয়ে আপনার মানসিক সাস্থ‍্য সম্পর্কে জানতে পারবেন। আপনি যদি রেজিস্ট্রেশন না করে থাকেন তবে এখনই রেজিস্ট্রেশন করে নিন এবং বিভিন্ন টেস্ট এর মাধ্যমে আপনার মানসিক সাস্থ্য সম্পর্কে জানুন।</h2><center>
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <script>window.location = "{{ route('home') }}";</script>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"></a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
    </body>
</html>
@endsection