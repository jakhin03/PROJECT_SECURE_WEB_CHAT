<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TALK-Y</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Tomorrow' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" type="text/css" rel="stylesheet">
    
    <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.16.1/echo.min.js" integrity="sha512-8owut6N5yaaBeiV/noGkbrQi+eT+i2BaQGUOp+GTVwXHPKNZwMv5ZGEDC1omn+6+dls0DjWkcV7hYHB/EZHLsA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.7.5/socket.io.min.js" integrity="sha512-11t8Q+vY9JlCrr+PveZKTYJq8n7O09Y5X/pk/aMd3vJugSvu4xOunGEUzaADqL3I8cZKE/pBwwCfXzDkRJh2sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!------ Include the above in your HEAD tag ---------->
  </head>
  <body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
      <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div id="app" class="container"> 
          <div class="mt-16">
            <div class="messaging">
              <div class="inbox_msg">
                <div class="inbox_people ">
                  <div class="headind_srch">
                    <div class="recent_heading flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <a href="{{url('/chat')}}">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="bg-gray-100 dark:bg-gray-900" fill="none" x="0px" y="0px"
                        width="25%" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve">
                      <path fill="#FF2D10" opacity="1.000000" stroke="none" 
                        d="
                      M1.000000,282.000000 
                        C1.000000,261.645782 1.000000,241.291550 1.252638,220.814789 
                        C4.299976,217.701477 7.702205,216.767990 11.788581,216.926270 
                        C18.718931,217.194687 25.667215,217.000061 32.999584,217.000061 
                        C32.999584,215.306885 32.970757,214.175995 33.004036,213.046936 
                        C33.345745,201.454193 32.454243,189.660446 34.292061,178.308975 
                        C38.834770,150.250397 52.753452,127.322861 75.505424,109.993034 
                        C94.014633,95.894852 114.823883,88.142815 138.171906,88.042229 
                        C174.993118,87.883606 211.815598,88.040771 248.637299,87.954315 
                        C253.903244,87.941956 259.208405,87.617783 264.425690,86.917961 
                        C284.483215,84.227516 302.617004,76.433823 319.718506,65.853516 
                        C328.449951,60.451576 337.365692,55.335178 346.330139,50.326008 
                        C353.427521,46.360115 363.415558,50.116043 362.081543,59.658554 
                        C361.578949,63.253815 362.000000,66.978210 362.000000,70.643738 
                        C362.000000,76.389069 362.000000,82.134399 362.000000,88.000122 
                        C387.811310,88.000122 412.800720,87.994156 437.790161,88.013657 
                        C439.442047,88.014946 441.145752,87.984314 442.737610,88.350319 
                        C459.512085,92.207100 469.201172,105.449379 469.065826,122.434280 
                        C468.829590,152.089844 468.999969,181.748657 468.999939,211.406113 
                        C468.999939,213.169739 468.999939,214.933350 468.999939,216.518997 
                        C480.031219,218.471725 491.046448,214.212402 501.000000,220.000000 
                        C501.000000,240.354233 501.000000,260.708466 500.743713,281.184723 
                        C497.049561,282.537811 493.675201,284.547699 490.160248,284.834564 
                        C483.267395,285.397095 476.296265,284.999908 468.999939,284.999908 
                        C468.999939,292.890747 468.834076,300.195862 469.038086,307.490601 
                        C469.358917,318.963318 467.136322,330.075134 463.507874,340.766144 
                        C457.645630,358.038849 447.784210,372.858337 434.274048,385.299744 
                        C414.291138,403.701721 390.954254,413.779053 363.729675,413.943542 
                        C326.406067,414.169098 289.080017,413.960663 251.755264,414.045959 
                        C246.655396,414.057617 241.523529,414.430939 236.463745,415.081940 
                        C216.821396,417.609161 199.359116,425.863861 182.586929,435.897491 
                        C173.632660,441.254181 164.671921,446.608337 155.573380,451.712860 
                        C148.687698,455.575897 138.987595,452.038269 139.830399,442.232544 
                        C140.621933,433.023315 140.000000,423.692596 140.000000,413.999939 
                        C137.676575,413.999939 135.878082,413.999939 134.079575,413.999939 
                        C111.417999,413.999939 88.749664,413.658447 66.096962,414.106689 
                        C47.558556,414.473541 32.623760,399.310364 32.883400,381.076752 
                        C33.312775,350.922974 33.000076,320.758606 33.000065,290.598724 
                        C33.000065,288.834503 33.000065,287.070312 33.000065,285.496826 
                        C21.974041,283.500793 10.950610,287.822235 1.000000,282.000000 
                      M182.500000,128.999939 
                        C167.005997,128.999939 151.511978,128.998398 136.017975,129.002625 
                        C134.685654,129.002975 133.321045,128.859619 132.025909,129.089676 
                        C115.140594,132.089157 100.734688,139.625656 89.657425,152.887817 
                        C79.943359,164.517899 74.066040,177.824966 74.039757,193.167435 
                        C73.940453,251.145935 73.999847,309.124695 73.999847,367.103363 
                        C73.999847,369.014923 73.999855,370.926514 73.999855,373.000275 
                        C83.450874,373.000275 92.119049,372.732971 100.764091,373.066071 
                        C112.286720,373.510101 122.722061,377.225433 130.456528,386.096252 
                        C136.905075,393.492218 140.702362,402.230286 140.015228,413.172089 
                        C146.313126,409.504181 151.958313,406.293182 157.528687,402.957275 
                        C171.819489,394.399048 186.462677,386.414917 202.374161,381.427246 
                        C221.067734,375.567413 240.398743,373.013489 260.020721,373.004547 
                        C295.174469,372.988556 330.328186,373.003143 365.481934,372.990509 
                        C367.137665,372.989899 368.826935,373.036346 370.443878,372.745575 
                        C387.009552,369.766693 401.141144,362.472229 412.120667,349.420197 
                        C421.571564,338.185303 427.777802,325.377472 427.861633,310.712463 
                        C428.196991,252.069290 428.000122,193.423080 428.000183,134.777985 
                        C428.000183,132.996704 428.000153,131.215439 428.000153,128.999847 
                        C418.192963,128.999847 408.897522,129.219223 399.617096,128.939713 
                        C389.840973,128.645248 381.157013,125.182281 373.963257,118.440651 
                        C365.675934,110.674149 361.385803,101.123947 361.902191,89.148544 
                        C359.851135,90.196854 358.240967,90.941971 356.705078,91.817322 
                        C346.082031,97.871735 335.673309,104.337814 324.821838,109.948517 
                        C299.829071,122.870857 273.006256,128.685791 244.976990,128.960617 
                        C224.486496,129.161514 203.992462,128.999939 182.500000,128.999939 
                      z"/>
                      <path fill="#000000" opacity="1.000000" stroke="none" 
                        d="
                      M1.000000,282.468658 
                        C10.950610,287.822235 21.974041,283.500793 33.000065,285.496826 
                        C33.000065,287.070312 33.000065,288.834503 33.000065,290.598724 
                        C33.000076,320.758606 33.312775,350.922974 32.883400,381.076752 
                        C32.623760,399.310364 47.558556,414.473541 66.096962,414.106689 
                        C88.749664,413.658447 111.417999,413.999939 134.079575,413.999939 
                        C135.878082,413.999939 137.676575,413.999939 140.000000,413.999939 
                        C140.000000,423.692596 140.621933,433.023315 139.830399,442.232544 
                        C138.987595,452.038269 148.687698,455.575897 155.573380,451.712860 
                        C164.671921,446.608337 173.632660,441.254181 182.586929,435.897491 
                        C199.359116,425.863861 216.821396,417.609161 236.463745,415.081940 
                        C241.523529,414.430939 246.655396,414.057617 251.755264,414.045959 
                        C289.080017,413.960663 326.406067,414.169098 363.729675,413.943542 
                        C390.954254,413.779053 414.291138,403.701721 434.274048,385.299744 
                        C447.784210,372.858337 457.645630,358.038849 463.507874,340.766144 
                        C467.136322,330.075134 469.358917,318.963318 469.038086,307.490601 
                        C468.834076,300.195862 468.999939,292.890747 468.999939,284.999908 
                        C476.296265,284.999908 483.267395,285.397095 490.160248,284.834564 
                        C493.675201,284.547699 497.049561,282.537811 500.743713,281.653381 
                        C501.000000,354.965942 501.000000,427.931854 501.000000,500.948914 
                        C334.445190,500.948914 167.890350,500.948914 1.000000,500.948914 
                        C1.000000,428.312775 1.000000,355.625061 1.000000,282.468658 
                      z"/>
                      <path fill="#000000" opacity="1.000000" stroke="none" 
                        d="
                      M501.000000,219.531342 
                        C491.046448,214.212402 480.031219,218.471725 468.999939,216.518997 
                        C468.999939,214.933350 468.999939,213.169739 468.999939,211.406113 
                        C468.999969,181.748657 468.829590,152.089844 469.065826,122.434280 
                        C469.201172,105.449379 459.512085,92.207100 442.737610,88.350319 
                        C441.145752,87.984314 439.442047,88.014946 437.790161,88.013657 
                        C412.800720,87.994156 387.811310,88.000122 362.000000,88.000122 
                        C362.000000,82.134399 362.000000,76.389069 362.000000,70.643738 
                        C362.000000,66.978210 361.578949,63.253815 362.081543,59.658554 
                        C363.415558,50.116043 353.427521,46.360115 346.330139,50.326008 
                        C337.365692,55.335178 328.449951,60.451576 319.718506,65.853516 
                        C302.617004,76.433823 284.483215,84.227516 264.425690,86.917961 
                        C259.208405,87.617783 253.903244,87.941956 248.637299,87.954315 
                        C211.815598,88.040771 174.993118,87.883606 138.171906,88.042229 
                        C114.823883,88.142815 94.014633,95.894852 75.505424,109.993034 
                        C52.753452,127.322861 38.834770,150.250397 34.292061,178.308975 
                        C32.454243,189.660446 33.345745,201.454193 33.004036,213.046936 
                        C32.970757,214.175995 32.999584,215.306885 32.999584,217.000061 
                        C25.667215,217.000061 18.718931,217.194687 11.788581,216.926270 
                        C7.702205,216.767990 4.299976,217.701477 1.252638,220.346130 
                        C1.000000,147.034042 1.000000,74.068092 1.000000,1.051072 
                        C167.554871,1.051072 334.109741,1.051072 501.000000,1.051072 
                        C501.000000,73.687218 501.000000,146.374954 501.000000,219.531342 
                      z"/>
                      <path fill="#000000" opacity="1.000000" stroke="none" 
                        d="
                      M183.000000,128.999939 
                        C203.992462,128.999939 224.486496,129.161514 244.976990,128.960617 
                        C273.006256,128.685791 299.829071,122.870857 324.821838,109.948517 
                        C335.673309,104.337814 346.082031,97.871735 356.705078,91.817322 
                        C358.240967,90.941971 359.851135,90.196854 361.902191,89.148544 
                        C361.385803,101.123947 365.675934,110.674149 373.963257,118.440651 
                        C381.157013,125.182281 389.840973,128.645248 399.617096,128.939713 
                        C408.897522,129.219223 418.192963,128.999847 428.000153,128.999847 
                        C428.000153,131.215439 428.000183,132.996704 428.000183,134.777985 
                        C428.000122,193.423080 428.196991,252.069290 427.861633,310.712463 
                        C427.777802,325.377472 421.571564,338.185303 412.120667,349.420197 
                        C401.141144,362.472229 387.009552,369.766693 370.443878,372.745575 
                        C368.826935,373.036346 367.137665,372.989899 365.481934,372.990509 
                        C330.328186,373.003143 295.174469,372.988556 260.020721,373.004547 
                        C240.398743,373.013489 221.067734,375.567413 202.374161,381.427246 
                        C186.462677,386.414917 171.819489,394.399048 157.528687,402.957275 
                        C151.958313,406.293182 146.313126,409.504181 140.015228,413.172089 
                        C140.702362,402.230286 136.905075,393.492218 130.456528,386.096252 
                        C122.722061,377.225433 112.286720,373.510101 100.764091,373.066071 
                        C92.119049,372.732971 83.450874,373.000275 73.999855,373.000275 
                        C73.999855,370.926514 73.999847,369.014923 73.999847,367.103363 
                        C73.999847,309.124695 73.940453,251.145935 74.039757,193.167435 
                        C74.066040,177.824966 79.943359,164.517899 89.657425,152.887817 
                        C100.734688,139.625656 115.140594,132.089157 132.025909,129.089676 
                        C133.321045,128.859619 134.685654,129.002975 136.017975,129.002625 
                        C151.511978,128.998398 167.005997,128.999939 183.000000,128.999939 
                      M189.141373,220.001511 
                        C187.476898,220.001007 185.812363,219.990128 184.147980,220.001572 
                        C161.988159,220.153946 148.976639,240.695129 155.227402,260.818542 
                        C159.155136,273.463287 169.509735,282.561951 186.337311,282.090576 
                        C208.494141,281.469849 222.548248,258.814850 213.491867,238.011978 
                        C209.023682,227.748337 200.792267,222.191849 189.141373,220.001511 
                      M346.152924,239.598740 
                        C343.705750,233.520905 340.005890,228.539108 334.414673,224.867004 
                        C320.625183,215.810562 299.033356,219.843155 290.990356,232.883835 
                        C280.943665,249.173187 285.819122,270.294220 302.185242,278.724548 
                        C314.826843,285.236359 332.650208,282.601776 341.986877,270.157043 
                        C348.882019,260.966583 349.260254,250.845169 346.152924,239.598740 
                      z"/>
                      <path fill="#FF2D10" opacity="1.000000" stroke="none" 
                        d="
                      M189.592850,220.005188 
                        C200.792267,222.191849 209.023682,227.748337 213.491867,238.011978 
                        C222.548248,258.814850 208.494141,281.469849 186.337311,282.090576 
                        C169.509735,282.561951 159.155136,273.463287 155.227402,260.818542 
                        C148.976639,240.695129 161.988159,220.153946 184.147980,220.001572 
                        C185.812363,219.990128 187.476898,220.001007 189.592850,220.005188 
                      z"/>
                      <path fill="#FF2D10" opacity="1.000000" stroke="none" 
                        d="
                      M346.419312,239.907166 
                        C349.260254,250.845169 348.882019,260.966583 341.986877,270.157043 
                        C332.650208,282.601776 314.826843,285.236359 302.185242,278.724548 
                        C285.819122,270.294220 280.943665,249.173187 290.990356,232.883835 
                        C299.033356,219.843155 320.625183,215.810562 334.414673,224.867004 
                        C340.005890,228.539108 343.705750,233.520905 346.419312,239.907166 
                      z"/>
                      </svg>
            </a>
                    </div>
                    <div class="srch_bar">
                      <div class="stylish-input-group">
                        <input type="text" class="search-bar" placeholder="Search">
                        <span class="input-group-addon">
                          <button type="button">
                            <i class="fa fa-search" aria-hidden="true"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="inbox_chat">
                    <div class="chat_list active_chat scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                      <div class="chat_people">
                        <div class="chat_img">
                          <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                        </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">Dec 25</span>
                          </h5>
                          <p>Test, which is a new approach to have all solutions astrology under one roof.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                      <div class="chat_people">
                        <div class="chat_img">
                          <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                        </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">Dec 25</span>
                          </h5>
                          <p>Test, which is a new approach to have all solutions astrology under one roof.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                      <div class="chat_people">
                        <div class="chat_img">
                          <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                        </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">Dec 25</span>
                          </h5>
                          <p>Test, which is a new approach to have all solutions astrology under one roof.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                      <div class="chat_people">
                        <div class="chat_img">
                          <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                        </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">Dec 25</span>
                          </h5>
                          <p>Test, which is a new approach to have all solutions astrology under one roof.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                      <div class="chat_people">
                        <div class="chat_img">
                          <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                        </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">Dec 25</span>
                          </h5>
                          <p>Test, which is a new approach to have all solutions astrology under one roof.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                      <div class="chat_people">
                        <div class="chat_img">
                          <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                        </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">Dec 25</span>
                          </h5>
                          <p>Test, which is a new approach to have all solutions astrology under one roof.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list active_chat scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                      <div class="chat_people">
                        <div class="chat_img">
                          <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                        </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">Dec 25</span>
                          </h5>
                          <p> Test, which is a new approach to have all solutions astrology under one roof.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mesgs">
                  <div class="msg_history">
                    <div class="incoming_msg">
                      <div class="incoming_msg_img">
                        <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                      </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Test which is a new approach to have all solutions</p>
                          <span class="time_date"> 11:01 AM | June 9</span>
                        </div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>Test which is a new approach to have all solutions</p>
                        <span class="time_date"> 11:01 AM | June 9</span>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img">
                        <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                      </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Test, which is a new approach to have</p>
                          <span class="time_date"> 11:01 AM | Yesterday</span>
                        </div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>Apollo University, Delhi, India Test</p>
                        <span class="time_date"> 11:01 AM | Today</span>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img">
                        <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                      </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>We work directly with our designers and suppliers, and sell direct to you, which means quality, exclusive products, at a price anyone can afford.</p>
                          <span class="time_date"> 11:01 AM | Today</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="type_msg">
                    <div class="input_msg_write">
                      <input v-model="message" @keyup.enter="sendMessage" type="text" class="write_msg" placeholder="Type a message" />
                      <button @click="sendMessage" class="msg_send_btn" type="button">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              </p>
            </div>
          </div>           
        </div>
        @include("footer") 
      </div>
      <script>
        new Vue({
          el: '#app',
          data(){
            return {
              message: ""
            }
          },
          methods:{
            sendMessage(){
              axios.post('/message', {message: this.message})
              this.message = "";
            }
          }
        })
      </script>
    </div>
  </body>
</html>