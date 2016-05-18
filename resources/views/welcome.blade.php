<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jump</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        {{-- <link href='http://fonts.googleapis.com/css?family=Lora:100,300,400' rel='stylesheet' type='text/css'> --}}

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 300;
                font-family: Ubuntu, 'Open Sans';
            }

            .container {
                margin-top: 100px;
                text-align: center;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .header {
                text-align: center;
                width: 100%;
            }

            .title {
                font-size: 50px;
                font-weight: 600;
                font-family: Ubuntu, 'Source Sans Pro';
            }
        </style>
        <base href="./">
        {{ Html::style('css/styles.css') }}
    <!-- Load libraries -->
    <!-- IE required polyfills, in this exact order -->
    {{ Html::script('es6-shim/es6-shim.min.js') }}
    {{ Html::script('angular2/es6/dev/src/testing/shims_for_IE.js') }}
    {{ Html::script('angular2/bundles/angular2-polyfills.js') }}
    {{ Html::script('systemjs/dist/system.js') }}
    {{ Html::script('rxjs/bundles/Rx.js') }}
    {{ Html::script('angular2/bundles/angular2.dev.js') }}
    {{ Html::script('angular2/bundles/router.dev.js') }}
    {{ Html::script('angular2/bundles/http.dev.js') }}

    {{ Html::script('js/d3.min.js') }}
    {{ Html::script('js/c3.min.js') }}
    {{ Html::script('js/scripts.js') }}

    <script>
        System.config({
            "defaultJSExtensions": true,
            packages: {
                app: {
                    format: 'register',
                    defaultExtension: 'js'
                }
            }
        });

        System.import('js/boot')
                .then(null, console.error.bind(console));
    </script>
    </head>
    <body>
        <div class="header">
            <h1 class="title">Šuolių parašiutu rezervacijų sistema</h1>
        </div>
        <div class="container">
            <div class="content">
                <my-app>Loading...</my-app>
            </div>
        </div>
    </body>
</html>
