<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jump</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Exo+2:400,100' rel='stylesheet' type='text/css'>
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
                background: linear-gradient(to bottom right, whitesmoke, #E4E4E4);
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
                /*text-shadow: 2px 3px 0px rgb(143, 143, 143);*/
                text-shadow: 0 0 2px #8F8F8F;
            }

            .loader{
                margin: 0 0 2em;
                height: 100px;
                width: 100%;
                text-align: center;
                padding: 1em;
                margin: 0 auto 1em;
            }

            svg path,
            svg rect {
              fill: #009FFF;
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
                <my-app>
                    <div class="loader loader--style3" title="2">
                      <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                      <path fill="#000" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
                        <animateTransform attributeType="xml"
                          attributeName="transform"
                          type="rotate"
                          from="0 25 25"
                          to="360 25 25"
                          dur="0.6s"
                          repeatCount="indefinite"/>
                        </path>
                      </svg>
                    </div>
                </my-app>
            </div>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    </body>
</html>
