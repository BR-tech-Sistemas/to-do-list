<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 min-h-screen sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <x-application-logo class="w-20 h-20"/>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <a href="{{ route('login') }}">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg class="svg-icon w-8 h-8" viewBox="0 0 20 20">
                                <path fill="none" d="M10.001,9.658c-2.567,0-4.66-2.089-4.66-4.659c0-2.567,2.092-4.657,4.66-4.657s4.657,2.09,4.657,4.657
                                C14.658,7.569,12.569,9.658,10.001,9.658z M10.001,1.8c-1.765,0-3.202,1.437-3.202,3.2c0,1.766,1.437,3.202,3.202,3.202
                                c1.765,0,3.199-1.436,3.199-3.202C13.201,3.236,11.766,1.8,10.001,1.8z"></path>
                                <path fill="none" d="M9.939,19.658c-0.091,0-0.179-0.017-0.268-0.051l-7.09-2.803c-0.276-0.108-0.461-0.379-0.461-0.678
                                c0-4.343,3.535-7.876,7.881-7.876c4.343,0,7.878,3.533,7.878,7.876c0,0.302-0.182,0.572-0.464,0.68l-7.213,2.801
                                C10.118,19.64,10.03,19.658,9.939,19.658z M3.597,15.639l6.344,2.507l6.464-2.512c-0.253-3.312-3.029-5.927-6.404-5.927
                                C6.623,9.707,3.848,12.326,3.597,15.639z"></path>
                                <path fill="none" d="M9.939,19.658c0,0-0.003,0-0.006,0c-0.347-0.003-0.646-0.253-0.709-0.596L7.462,9.567
                                C7.389,9.172,7.65,8.79,8.046,8.718C8.442,8.643,8.82,8.906,8.894,9.301l1.076,5.796l1.158-5.741
                                c0.08-0.394,0.461-0.655,0.86-0.569c0.396,0.08,0.649,0.464,0.569,0.859l-1.904,9.427C10.585,19.413,10.286,19.658,9.939,19.658z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <p class="underline text-gray-900 dark:text-white">Login</p>
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Use o link acima para acessar o sistema de listas!
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <a href="{{ route('register') }}">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg class="svg-icon w-8 h-8" viewBox="0 0 20 20">
                                <path fill="none" d="M10.001,9.658c-2.567,0-4.66-2.089-4.66-4.659c0-2.567,2.092-4.657,4.66-4.657s4.657,2.09,4.657,4.657
							C14.658,7.569,12.569,9.658,10.001,9.658z M10.001,1.8c-1.765,0-3.202,1.437-3.202,3.2c0,1.766,1.437,3.202,3.202,3.202
							c1.765,0,3.199-1.436,3.199-3.202C13.201,3.236,11.766,1.8,10.001,1.8z"></path>
                                <path fill="none" d="M9.939,19.658c-0.091,0-0.179-0.017-0.268-0.051l-7.09-2.803c-0.276-0.108-0.461-0.379-0.461-0.678
							c0-4.343,3.535-7.876,7.881-7.876c4.343,0,7.878,3.533,7.878,7.876c0,0.302-0.182,0.572-0.464,0.68l-7.213,2.801
							C10.118,19.64,10.03,19.658,9.939,19.658z M3.597,15.639l6.344,2.507l6.464-2.512c-0.253-3.312-3.029-5.927-6.404-5.927
							C6.623,9.707,3.848,12.326,3.597,15.639z"></path>
                                <path fill="none" d="M9.939,19.658c0,0-0.003,0-0.006,0c-0.347-0.003-0.646-0.253-0.709-0.596L7.462,9.567
							C7.389,9.172,7.65,8.79,8.046,8.718C8.442,8.643,8.82,8.906,8.894,9.301l1.076,5.796l1.158-5.741
							c0.08-0.394,0.461-0.655,0.86-0.569c0.396,0.08,0.649,0.464,0.569,0.859l-1.904,9.427C10.585,19.413,10.286,19.658,9.939,19.658z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <p class="underline text-gray-900 dark:text-white">
                                    Registrar
                                </p>
                            </div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Use o link acima para se registrar no sistema de listas!
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


    </div>
</div>
<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
