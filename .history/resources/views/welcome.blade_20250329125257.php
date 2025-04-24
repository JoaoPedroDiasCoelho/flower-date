<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="container">
        <div class="night"></div>
        <div class="flowers" id="flowers">
          <div class="flower flower--1">
            <div class="flower__leafs flower__leafs--1">
              <div class="flower__leaf flower__leaf--1"></div>
              <div class="flower__leaf flower__leaf--2"></div>
              <div class="flower__leaf flower__leaf--3"></div>
              <div class="flower__leaf flower__leaf--4"></div>
              <div class="flower__white-circle"></div>

              <div class="flower__light flower__light--1"></div>
              <div class="flower__light flower__light--2"></div>
              <div class="flower__light flower__light--3"></div>
              <div class="flower__light flower__light--4"></div>
              <div class="flower__light flower__light--5"></div>
              <div class="flower__light flower__light--6"></div>
              <div class="flower__light flower__light--7"></div>
              <div class="flower__light flower__light--8"></div>

            </div>
            <div class="flower__line">
              <div class="flower__line__leaf flower__line__leaf--1"></div>
              <div class="flower__line__leaf flower__line__leaf--2"></div>
              <div class="flower__line__leaf flower__line__leaf--3"></div>
              <div class="flower__line__leaf flower__line__leaf--4"></div>
              <div class="flower__line__leaf flower__line__leaf--5"></div>
              <div class="flower__line__leaf flower__line__leaf--6"></div>
            </div>
          </div>

          <div class="flower flower--2 hidden" id="flower-2">
            <div class="flower__leafs flower__leafs--2">
              <div class="flower__leaf flower__leaf--1"></div>
              <div class="flower__leaf flower__leaf--2"></div>
              <div class="flower__leaf flower__leaf--3"></div>
              <div class="flower__leaf flower__leaf--4"></div>
              <div class="flower__white-circle"></div>

              <div class="flower__light flower__light--1"></div>
              <div class="flower__light flower__light--2"></div>
              <div class="flower__light flower__light--3"></div>
              <div class="flower__light flower__light--4"></div>
              <div class="flower__light flower__light--5"></div>
              <div class="flower__light flower__light--6"></div>
              <div class="flower__light flower__light--7"></div>
              <div class="flower__light flower__light--8"></div>

            </div>
            <div class="flower__line">
              <div class="flower__line__leaf flower__line__leaf--1"></div>
              <div class="flower__line__leaf flower__line__leaf--2"></div>
              <div class="flower__line__leaf flower__line__leaf--3"></div>
              <div class="flower__line__leaf flower__line__leaf--4"></div>
            </div>
          </div>

          <div class="flower flower--3 hidden" id="flower-3">
            <div class="flower__leafs flower__leafs--3">
              <div class="flower__leaf flower__leaf--1"></div>
              <div class="flower__leaf flower__leaf--2"></div>
              <div class="flower__leaf flower__leaf--3"></div>
              <div class="flower__leaf flower__leaf--4"></div>
              <div class="flower__white-circle"></div>

              <div class="flower__light flower__light--1"></div>
              <div class="flower__light flower__light--2"></div>
              <div class="flower__light flower__light--3"></div>
              <div class="flower__light flower__light--4"></div>
              <div class="flower__light flower__light--5"></div>
              <div class="flower__light flower__light--6"></div>
              <div class="flower__light flower__light--7"></div>
              <div class="flower__light flower__light--8"></div>

            </div>
            <div class="flower__line">
              <div class="flower__line__leaf flower__line__leaf--1"></div>
              <div class="flower__line__leaf flower__line__leaf--2"></div>
              <div class="flower__line__leaf flower__line__leaf--3"></div>
              <div class="flower__line__leaf flower__line__leaf--4"></div>
            </div>
          </div>

          <div class="flower flower--4 hidden" id="flower-4">
            <div class="flower__leafs flower__leafs--2">
              <div class="flower__leaf flower__leaf--1"></div>
              <div class="flower__leaf flower__leaf--2"></div>
              <div class="flower__leaf flower__leaf--3"></div>
              <div class="flower__leaf flower__leaf--4"></div>
              <div class="flower__white-circle"></div>

              <div class="flower__light flower__light--1"></div>
              <div class="flower__light flower__light--2"></div>
              <div class="flower__light flower__light--3"></div>
              <div class="flower__light flower__light--4"></div>
              <div class="flower__light flower__light--5"></div>
              <div class="flower__light flower__light--6"></div>
              <div class="flower__light flower__light--7"></div>
              <div class="flower__light flower__light--8"></div>

            </div>
            <div class="flower__line">
              <div class="flower__line__leaf flower__line__leaf--1"></div>
              <div class="flower__line__leaf flower__line__leaf--2"></div>
              <div class="flower__line__leaf flower__line__leaf--3"></div>
              <div class="flower__line__leaf flower__line__leaf--4"></div>
            </div>
          </div>

          <div class="flower flower--5 hidden" id="flower-5">
            <div class="flower__leafs flower__leafs--3">
              <div class="flower__leaf flower__leaf--1"></div>
              <div class="flower__leaf flower__leaf--2"></div>
              <div class="flower__leaf flower__leaf--3"></div>
              <div class="flower__leaf flower__leaf--4"></div>
              <div class="flower__white-circle"></div>

              <div class="flower__light flower__light--1"></div>
              <div class="flower__light flower__light--2"></div>
              <div class="flower__light flower__light--3"></div>
              <div class="flower__light flower__light--4"></div>
              <div class="flower__light flower__light--5"></div>
              <div class="flower__light flower__light--6"></div>
              <div class="flower__light flower__light--7"></div>
              <div class="flower__light flower__light--8"></div>

            </div>
            <div class="flower__line">
              <div class="flower__line__leaf flower__line__leaf--1"></div>
              <div class="flower__line__leaf flower__line__leaf--2"></div>
              <div class="flower__line__leaf flower__line__leaf--3"></div>
              <div class="flower__line__leaf flower__line__leaf--4"></div>
            </div>
          </div>

          <div class="flower flower--6 hidden" id="flower-6">
            <div class="flower__leafs flower__leafs--3">
              <div class="flower__leaf flower__leaf--1"></div>
              <div class="flower__leaf flower__leaf--2"></div>
              <div class="flower__leaf flower__leaf--3"></div>
              <div class="flower__leaf flower__leaf--4"></div>
              <div class="flower__white-circle"></div>

              <div class="flower__light flower__light--1"></div>
              <div class="flower__light flower__light--2"></div>
              <div class="flower__light flower__light--3"></div>
              <div class="flower__light flower__light--4"></div>
              <div class="flower__light flower__light--5"></div>
              <div class="flower__light flower__light--6"></div>
              <div class="flower__light flower__light--7"></div>
              <div class="flower__light flower__light--8"></div>

            </div>
            <div class="flower__line">
              <div class="flower__line__leaf flower__line__leaf--1"></div>
              <div class="flower__line__leaf flower__line__leaf--2"></div>
              <div class="flower__line__leaf flower__line__leaf--3"></div>
              <div class="flower__line__leaf flower__line__leaf--4"></div>
            </div>
          </div>

          <div class="flower flower--7 hidden" id="flower-7">
            <div class="flower__leafs flower__leafs--3">
              <div class="flower__leaf flower__leaf--1"></div>
              <div class="flower__leaf flower__leaf--2"></div>
              <div class="flower__leaf flower__leaf--3"></div>
              <div class="flower__leaf flower__leaf--4"></div>
              <div class="flower__white-circle"></div>

              <div class="flower__light flower__light--1"></div>
              <div class="flower__light flower__light--2"></div>
              <div class="flower__light flower__light--3"></div>
              <div class="flower__light flower__light--4"></div>
              <div class="flower__light flower__light--5"></div>
              <div class="flower__light flower__light--6"></div>
              <div class="flower__light flower__light--7"></div>
              <div class="flower__light flower__light--8"></div>

            </div>
            <div class="flower__line">
              <div class="flower__line__leaf flower__line__leaf--1"></div>
              <div class="flower__line__leaf flower__line__leaf--2"></div>
              <div class="flower__line__leaf flower__line__leaf--3"></div>
              <div class="flower__line__leaf flower__line__leaf--4"></div>
            </div>
          </div>


          <div class="grow-ans" style="--d:1.2s">
            <div class="flower__g-long">
              <div class="flower__g-long__top"></div>
              <div class="flower__g-long__bottom"></div>
            </div>
          </div>

          <div class="growing-grass">
            <div class="flower__grass flower__grass--1">
              <div class="flower__grass--top"></div>
              <div class="flower__grass--bottom"></div>
              <div class="flower__grass__leaf flower__grass__leaf--1"></div>
              <div class="flower__grass__leaf flower__grass__leaf--2"></div>
              <div class="flower__grass__leaf flower__grass__leaf--3"></div>
              <div class="flower__grass__leaf flower__grass__leaf--4"></div>
              <div class="flower__grass__leaf flower__grass__leaf--5"></div>
              <div class="flower__grass__leaf flower__grass__leaf--6"></div>
              <div class="flower__grass__leaf flower__grass__leaf--7"></div>
              <div class="flower__grass__leaf flower__grass__leaf--8"></div>
              <div class="flower__grass__overlay"></div>
            </div>
          </div>

          <div class="growing-grass">
            <div class="flower__grass flower__grass--2">
              <div class="flower__grass--top"></div>
              <div class="flower__grass--bottom"></div>
              <div class="flower__grass__leaf flower__grass__leaf--1"></div>
              <div class="flower__grass__leaf flower__grass__leaf--2"></div>
              <div class="flower__grass__leaf flower__grass__leaf--3"></div>
              <div class="flower__grass__leaf flower__grass__leaf--4"></div>
              <div class="flower__grass__leaf flower__grass__leaf--5"></div>
              <div class="flower__grass__leaf flower__grass__leaf--6"></div>
              <div class="flower__grass__leaf flower__grass__leaf--7"></div>
              <div class="flower__grass__leaf flower__grass__leaf--8"></div>
              <div class="flower__grass__overlay"></div>
            </div>
          </div>

          <div class="grow-ans" style="--d:2.4s">
            <div class="flower__g-right flower__g-right--1">
              <div class="leaf"></div>
            </div>
          </div>

          <div class="grow-ans" style="--d:2.8s">
            <div class="flower__g-right flower__g-right--2">
              <div class="leaf"></div>
            </div>
          </div>

          <div class="grow-ans" style="--d:2.8s">
            <div class="flower__g-front">
              <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--1">
                <div class="flower__g-front__leaf"></div>
              </div>
              <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--2">
                <div class="flower__g-front__leaf"></div>
              </div>
              <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--3">
                <div class="flower__g-front__leaf"></div>
              </div>
              <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--4">
                <div class="flower__g-front__leaf"></div>
              </div>
              <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--5">
                <div class="flower__g-front__leaf"></div>
              </div>
              <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--6">
                <div class="flower__g-front__leaf"></div>
              </div>
              <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--7">
                <div class="flower__g-front__leaf"></div>
              </div>
              <div class="flower__g-front__leaf-wrapper flower__g-front__leaf-wrapper--8">
                <div class="flower__g-front__leaf"></div>
              </div>
              <div class="flower__g-front__line"></div>
            </div>
          </div>

          <div class="grow-ans" style="--d:3.2s">
            <div class="flower__g-fr">
              <div class="leaf"></div>
              <div class="flower__g-fr__leaf flower__g-fr__leaf--1"></div>
              <div class="flower__g-fr__leaf flower__g-fr__leaf--2"></div>
              <div class="flower__g-fr__leaf flower__g-fr__leaf--3"></div>
              <div class="flower__g-fr__leaf flower__g-fr__leaf--4"></div>
              <div class="flower__g-fr__leaf flower__g-fr__leaf--5"></div>
              <div class="flower__g-fr__leaf flower__g-fr__leaf--6"></div>
              <div class="flower__g-fr__leaf flower__g-fr__leaf--7"></div>
              <div class="flower__g-fr__leaf flower__g-fr__leaf--8"></div>
            </div>
          </div>

          <div class="long-g long-g--1">
            <div class="grow-ans" style="--d:3.6s">
              <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:3.8s">
              <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:4s">
              <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:4.2s">
              <div class="leaf leaf--3"></div>
            </div>
          </div>

          <div class="long-g long-g--2">
            <div class="grow-ans" style="--d:4s">
              <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:4.2s">
              <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:4.4s">
              <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:4.6s">
              <div class="leaf leaf--3"></div>
            </div>
          </div>

          <div class="long-g long-g--3">
            <div class="grow-ans" style="--d:4s">
              <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:4.2s">
              <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:3s">
              <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:3.6s">
              <div class="leaf leaf--3"></div>
            </div>
          </div>

          <div class="long-g long-g--4">
            <div class="grow-ans" style="--d:4s">
              <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:4.2s">
              <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:3s">
              <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:3.6s">
              <div class="leaf leaf--3"></div>
            </div>
          </div>

          <div class="long-g long-g--5">
            <div class="grow-ans" style="--d:4s">
              <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:4.2s">
              <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:3s">
              <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:3.6s">
              <div class="leaf leaf--3"></div>
            </div>
          </div>

          <div class="long-g long-g--6">
            <div class="grow-ans" style="--d:4.2s">
              <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:4.4s">
              <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:4.6s">
              <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:4.8s">
              <div class="leaf leaf--3"></div>
            </div>
          </div>

          <div class="long-g long-g--7">
            <div class="grow-ans" style="--d:3s">
              <div class="leaf leaf--0"></div>
            </div>
            <div class="grow-ans" style="--d:3.2s">
              <div class="leaf leaf--1"></div>
            </div>
            <div class="grow-ans" style="--d:3.5s">
              <div class="leaf leaf--2"></div>
            </div>
            <div class="grow-ans" style="--d:3.6s">
              <div class="leaf leaf--3"></div>
            </div>
          </div>
        </div>
      </body>
</html>

<script>

    const agora = new Date();

    const dataEspecifica = new Date(2025, 1, 12, 18, 0, 0, 0);
    const diffTime = Math.abs(agora - dataEspecifica);
    const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24));
    console.log(diffDays + " days");

    function addFlower() {
        const element = document.getElementById("flowers");
        var next = element.querySelectorAll('.flower');
        console.log (next)
        element.classList.toggle("visible");
        element.classList.remove("hidden")
    }

    if(diffDays > 15){
        onload = () =>{
            document.body.classList.remove("container");
            addFlower();
        };

    }


</script>

<style>
    *,
*::after,
*::before {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.visible{
    overflow: visible
}

.hidden{
    overflow: hidden;
}

:root {
  --dark-color: #000;
}

body {
  display: flex;
  align-items: flex-end;
  justify-content: center;
  min-height: 100vh;
  background-color: var(--dark-color);
  overflow: hidden;
  perspective: 1000px;
}

.night {
  position: fixed;
  left: 50%;
  top: 0;
  transform: translateX(-50%);
  width: 100%;
  height: 100%;
  filter: blur(0.1vmin);
  background-image: radial-gradient(ellipse at top, transparent 0%, var(--dark-color)), radial-gradient(ellipse at bottom, var(--dark-color), rgba(145, 233, 255, 0.2)), repeating-linear-gradient(220deg, rgb(0, 0, 0) 0px, rgb(0, 0, 0) 19px, transparent 19px, transparent 22px), repeating-linear-gradient(189deg, rgb(0, 0, 0) 0px, rgb(0, 0, 0) 19px, transparent 19px, transparent 22px), repeating-linear-gradient(148deg, rgb(0, 0, 0) 0px, rgb(0, 0, 0) 19px, transparent 19px, transparent 22px), linear-gradient(90deg, rgb(7, 107, 42), rgb(240, 240, 240));
}

.music {
  position: absolute;
  top: 0px;
}

.flowers {
  position: relative;
  transform: scale(0.9);
}

.flower {
  position: absolute;
  bottom: 10vmin;
  transform-origin: bottom center;
  z-index: 10;
  --fl-speed: 0.3s;
}
.flower--1 {
    height: 55vh;
  -webkit-animation: moving-flower-1 4s linear infinite;
          animation: moving-flower-1 4s linear infinite;
}
.flower--1 .flower__line {
  height: 70vmin;
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
}
.flower--1 .flower__line__leaf--1 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 1.6s backwards;
          animation: blooming-leaf-right var(--fl-speed) 1.6s backwards;
}
.flower--1 .flower__line__leaf--2 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 1.4s backwards;
          animation: blooming-leaf-right var(--fl-speed) 1.4s backwards;
}
.flower--1 .flower__line__leaf--3 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 1.2s backwards;
          animation: blooming-leaf-left var(--fl-speed) 1.2s backwards;
}
.flower--1 .flower__line__leaf--4 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 1s backwards;
          animation: blooming-leaf-left var(--fl-speed) 1s backwards;
}
.flower--1 .flower__line__leaf--5 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 1.8s backwards;
          animation: blooming-leaf-right var(--fl-speed) 1.8s backwards;
}
.flower--1 .flower__line__leaf--6 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 2s backwards;
          animation: blooming-leaf-left var(--fl-speed) 2s backwards;
}
.flower--2 {
  left: 50%;
  transform: rotate(20deg);
  -webkit-animation: moving-flower-2 4s linear infinite;
          animation: moving-flower-2 4s linear infinite;
}
.flower--2 .flower__line {

  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
}
.flower--2 .flower__line__leaf--1 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 1.9s backwards;
          animation: blooming-leaf-right var(--fl-speed) 1.9s backwards;
}
.flower--2 .flower__line__leaf--2 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 1.7s backwards;
          animation: blooming-leaf-right var(--fl-speed) 1.7s backwards;
}
.flower--2 .flower__line__leaf--3 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 1.5s backwards;
          animation: blooming-leaf-left var(--fl-speed) 1.5s backwards;
}
.flower--2 .flower__line__leaf--4 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 1.3s backwards;
          animation: blooming-leaf-left var(--fl-speed) 1.3s backwards;
}
.flower--3 {
  left: 50%;
  transform: rotate(-15deg);
  -webkit-animation: moving-flower-3 4s linear infinite;
          animation: moving-flower-3 4s linear infinite;
}
.flower--3 .flower__line {
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
}
.flower--3 .flower__line__leaf--1 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 2.5s backwards;
          animation: blooming-leaf-right var(--fl-speed) 2.5s backwards;
}
.flower--3 .flower__line__leaf--2 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 2.3s backwards;
          animation: blooming-leaf-right var(--fl-speed) 2.3s backwards;
}
.flower--3 .flower__line__leaf--3 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 2.1s backwards;
          animation: blooming-leaf-left var(--fl-speed) 2.1s backwards;
}
.flower--3 .flower__line__leaf--4 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 1.9s backwards;
          animation: blooming-leaf-left var(--fl-speed) 1.9s backwards;
}

.flower--4 {
  height: 60vh;
  left: 50%;
  transform: rotate(-10deg);
  -webkit-animation: moving-flower-4 4s linear infinite;
          animation: moving-flower-4 4s linear infinite;
}

.flower--4 .flower__line {
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
}
.flower--4 .flower__line__leaf--1 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 2.5s backwards;
          animation: blooming-leaf-right var(--fl-speed) 2.5s backwards;
}
.flower--4 .flower__line__leaf--2 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 2.3s backwards;
          animation: blooming-leaf-right var(--fl-speed) 2.3s backwards;
}
.flower--4 .flower__line__leaf--3 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 2.1s backwards;
          animation: blooming-leaf-left var(--fl-speed) 2.1s backwards;
}
.flower--4 .flower__line__leaf--4 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 1.9s backwards;
          animation: blooming-leaf-left var(--fl-speed) 1.9s backwards;
}
.flower--5 {
  height: 60vh;
  left: 50%;
  transform: rotate(-10deg);
  -webkit-animation: moving-flower-5 4s linear infinite;
          animation: moving-flower-5 4s linear infinite;
}

.flower--5 .flower__line {
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
}
.flower--5 .flower__line__leaf--1 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 2.5s backwards;
          animation: blooming-leaf-right var(--fl-speed) 2.5s backwards;
}
.flower--5 .flower__line__leaf--2 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 2.3s backwards;
          animation: blooming-leaf-right var(--fl-speed) 2.3s backwards;
}
.flower--5 .flower__line__leaf--3 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 2.1s backwards;
          animation: blooming-leaf-left var(--fl-speed) 2.1s backwards;
}
.flower--5 .flower__line__leaf--4 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 1.9s backwards;
          animation: blooming-leaf-left var(--fl-speed) 1.9s backwards;
}


.flower--6 {
  height: 60vh;
  left: 50%;
  transform: rotate(-10deg);
  -webkit-animation: moving-flower-6 4s linear infinite;
          animation: moving-flower-6 4s linear infinite;
}

.flower--6 .flower__line {
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
}
.flower--6 .flower__line__leaf--1 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 2.5s backwards;
          animation: blooming-leaf-right var(--fl-speed) 2.5s backwards;
}
.flower--6 .flower__line__leaf--2 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 2.3s backwards;
          animation: blooming-leaf-right var(--fl-speed) 2.3s backwards;
}
.flower--6 .flower__line__leaf--3 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 2.1s backwards;
          animation: blooming-leaf-left var(--fl-speed) 2.1s backwards;
}
.flower--6 .flower__line__leaf--4 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 1.9s backwards;
          animation: blooming-leaf-left var(--fl-speed) 1.9s backwards;
}


.flower--7 {
  height: 60vh;
  left: 50%;
  transform: rotate(-10deg);
  -webkit-animation: moving-flower-7 4s linear infinite;
          animation: moving-flower-7 4s linear infinite;
}

.flower--7 .flower__line {
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
}
.flower--7 .flower__line__leaf--1 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 2.5s backwards;
          animation: blooming-leaf-right var(--fl-speed) 2.5s backwards;
}
.flower--7 .flower__line__leaf--2 {
  -webkit-animation: blooming-leaf-right var(--fl-speed) 2.3s backwards;
          animation: blooming-leaf-right var(--fl-speed) 2.3s backwards;
}
.flower--7 .flower__line__leaf--3 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 2.1s backwards;
          animation: blooming-leaf-left var(--fl-speed) 2.1s backwards;
}
.flower--7 .flower__line__leaf--4 {
  -webkit-animation: blooming-leaf-left var(--fl-speed) 1.9s backwards;
          animation: blooming-leaf-left var(--fl-speed) 1.9s backwards;
}

.flower__leafs {
  position: relative;
  -webkit-animation: blooming-flower 2s backwards;
          animation: blooming-flower 2s backwards;
}
.flower__leafs--1 {
  -webkit-animation-delay: 1.1s;
          animation-delay: 1.1s;
}
.flower__leafs--2 {
  -webkit-animation-delay: 1.4s;
          animation-delay: 1.4s;
}
.flower__leafs--3 {
  -webkit-animation-delay: 1.7s;
          animation-delay: 1.7s;
}
.flower__leafs::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  transform: translate(-50%, -100%);
  width: 8vmin;
  height: 8vmin;
  background-color: #6bf0ff;
  filter: blur(10vmin);
}
.flower__leaf {
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 8vmin;
  height: 11vmin;
  border-radius: 51% 49% 47% 53%/44% 45% 55% 69%;
  background-color: #da1212;
  background-image: linear-gradient(to top, #ff0000, #ff0000);
  transform-origin: bottom center;
  opacity: 0.9;
  box-shadow: inset 0 0 2vmin rgba(255, 255, 255, 0.5);
}
.flower__leaf--1 {
  transform: translate(-10%, 1%) rotateY(40deg) rotateX(-50deg);
}
.flower__leaf--2 {
  transform: translate(-50%, -4%) rotateX(40deg);
}
.flower__leaf--3 {
  transform: translate(-90%, 0%) rotateY(45deg) rotateX(50deg);
}
.flower__leaf--4 {
  width: 8vmin;
  height: 8vmin;
  transform-origin: bottom left;
  border-radius: 4vmin 10vmin 4vmin 4vmin;
  transform: translate(0%, 18%) rotateX(70deg) rotate(-43deg);
  background-image: linear-gradient(to top, #ff0000, #fc0000);
  z-index: 1;
  opacity: 0.8;
}
.flower__white-circle {
  position: absolute;
  left: -3.5vmin;
  top: -3vmin;
  width: 9vmin;
  height: 4vmin;
  border-radius: 50%;
  background-color: #fff;
}
.flower__white-circle::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 45%;
  transform: translate(-50%, -50%);
  width: 60%;
  height: 60%;
  border-radius: inherit;
  background-image: repeating-linear-gradient(135deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(45deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(67.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(135deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(45deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(112.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(112.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(45deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(22.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(45deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(22.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(135deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(157.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(67.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), repeating-linear-gradient(67.5deg, rgba(0, 0, 0, 0.03) 0px, rgba(0, 0, 0, 0.03) 1px, transparent 1px, transparent 12px), linear-gradient(90deg, rgb(127, 47, 21), rgb(255, 206, 0));
}
.flower__line {
  height: 55vmin;
  width: 1.5vmin;
  background-image: linear-gradient(to left, rgba(0, 0, 0, 0.2), transparent, rgba(255, 255, 255, 0.2)), linear-gradient(to top, transparent 10%, #583e08, #944415);
  box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.5);
  -webkit-animation: grow-flower-tree 4s backwards;
          animation: grow-flower-tree 4s backwards;
}
.flower__line__leaf {
  --w: 7vmin;
  --h: calc(var(--w) + 2vmin);
  position: absolute;
  top: 20%;
  left: 90%;
  width: var(--w);
  height: var(--h);
  border-top-right-radius: var(--h);
  border-bottom-left-radius: var(--h);
  background-image: linear-gradient(to top, rgba(20, 117, 122, 0.4), #095721);
}
.flower__line__leaf--1 {
  transform: rotate(70deg) rotateY(30deg);
}
.flower__line__leaf--2 {
  top: 45%;
  transform: rotate(70deg) rotateY(30deg);
}
.flower__line__leaf--3, .flower__line__leaf--4, .flower__line__leaf--6 {
  border-top-right-radius: 0;
  border-bottom-left-radius: 0;
  border-top-left-radius: var(--h);
  border-bottom-right-radius: var(--h);
  left: -460%;
  top: 12%;
  transform: rotate(-70deg) rotateY(30deg);
}
.flower__line__leaf--4 {
  top: 40%;
}
.flower__line__leaf--5 {
  top: 0;
  transform-origin: left;
  transform: rotate(70deg) rotateY(30deg) scale(0.6);
}
.flower__line__leaf--6 {
  top: -2%;
  left: -450%;
  transform-origin: right;
  transform: rotate(-70deg) rotateY(30deg) scale(0.6);
}
.flower__light {
  position: absolute;
  bottom: 0vmin;
  width: 1vmin;
  height: 1vmin;
  background-color: rgb(255, 251, 0);
  border-radius: 50%;
  filter: blur(0.2vmin);
  -webkit-animation: light-ans 4s linear infinite backwards;
          animation: light-ans 4s linear infinite backwards;
}
.flower__light:nth-child(odd) {
  background-color: #f76baf;
}
.flower__light--1 {
  left: -2vmin;
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
}
.flower__light--2 {
  left: 3vmin;
  -webkit-animation-delay: 0.5s;
          animation-delay: 0.5s;
}
.flower__light--3 {
  left: -6vmin;
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
}
.flower__light--4 {
  left: 6vmin;
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
}
.flower__light--5 {
  left: -1vmin;
  -webkit-animation-delay: 1.5s;
          animation-delay: 1.5s;
}

.flower__light--6 {
  left: -4vmin;
  -webkit-animation-delay: 3s;
          animation-delay: 3s;
}
.flower__light--7 {
  left: 3vmin;
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
}
.flower__light--8 {
  left: -6vmin;
  -webkit-animation-delay: 3.5s;
          animation-delay: 3.5s;
}
.flower__grass {
  --c: #04661f;
  --line-w: 1.5vmin;
  position: absolute;
  bottom: 12vmin;
  left: -7vmin;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  z-index: 20;
  transform-origin: bottom center;
  transform: rotate(-48deg) rotateY(40deg);
}
.flower__grass--1 {
  -webkit-animation: moving-grass 2s linear infinite;
          animation: moving-grass 2s linear infinite;
}
.flower__grass--2 {
  left: 2vmin;
  bottom: 10vmin;
  transform: scale(0.5) rotate(75deg) rotateX(10deg) rotateY(-200deg);
  opacity: 0.8;
  z-index: 0;
  -webkit-animation: moving-grass--2 1.5s linear infinite;
          animation: moving-grass--2 1.5s linear infinite;
}
.flower__grass--top {
  width: 7vmin;
  height: 10vmin;
  border-top-right-radius: 100%;
  border-right: var(--line-w) solid var(--c);
  transform-origin: bottom center;
  transform: rotate(-2deg);
}
.flower__grass--bottom {
  margin-top: -2px;
  width: var(--line-w);
  height: 25vmin;
  background-image: linear-gradient(to top, transparent, var(--c));
}
.flower__grass__leaf {
  --size: 10vmin;
  position: absolute;
  width: calc(var(--size) * 2.1);
  height: var(--size);
  border-top-left-radius: var(--size);
  border-top-right-radius: var(--size);
  background-image: linear-gradient(to top, transparent, transparent 30%, var(--c));
  z-index: 100;
}
.flower__grass__leaf--1 {
  top: -6%;
  left: 30%;
  --size: 6vmin;
  transform: rotate(-20deg);
  -webkit-animation: growing-grass-ans--1 2s 2.6s backwards;
          animation: growing-grass-ans--1 2s 2.6s backwards;
}
@-webkit-keyframes growing-grass-ans--1 {
  0% {
    transform-origin: bottom left;
    transform: rotate(-20deg) scale(0);
  }
}
@keyframes growing-grass-ans--1 {
  0% {
    transform-origin: bottom left;
    transform: rotate(-20deg) scale(0);
  }
}
.flower__grass__leaf--2 {
  top: -5%;
  left: -110%;
  --size: 6vmin;
  transform: rotate(10deg);
  -webkit-animation: growing-grass-ans--2 2s 2.4s linear backwards;
          animation: growing-grass-ans--2 2s 2.4s linear backwards;
}
@-webkit-keyframes growing-grass-ans--2 {
  0% {
    transform-origin: bottom right;
    transform: rotate(10deg) scale(0);
  }
}
@keyframes growing-grass-ans--2 {
  0% {
    transform-origin: bottom right;
    transform: rotate(10deg) scale(0);
  }
}
.flower__grass__leaf--3 {
  top: 5%;
  left: 60%;
  --size: 8vmin;
  transform: rotate(-18deg) rotateX(-20deg);
  -webkit-animation: growing-grass-ans--3 2s 2.2s linear backwards;
          animation: growing-grass-ans--3 2s 2.2s linear backwards;
}
@-webkit-keyframes growing-grass-ans--3 {
  0% {
    transform-origin: bottom left;
    transform: rotate(-18deg) rotateX(-20deg) scale(0);
  }
}
@keyframes growing-grass-ans--3 {
  0% {
    transform-origin: bottom left;
    transform: rotate(-18deg) rotateX(-20deg) scale(0);
  }
}
.flower__grass__leaf--4 {
  top: 6%;
  left: -135%;
  --size: 8vmin;
  transform: rotate(2deg);
  -webkit-animation: growing-grass-ans--4 2s 2s linear backwards;
          animation: growing-grass-ans--4 2s 2s linear backwards;
}
@-webkit-keyframes growing-grass-ans--4 {
  0% {
    transform-origin: bottom right;
    transform: rotate(2deg) scale(0);
  }
}
@keyframes growing-grass-ans--4 {
  0% {
    transform-origin: bottom right;
    transform: rotate(2deg) scale(0);
  }
}
.flower__grass__leaf--5 {
  top: 20%;
  left: 60%;
  --size: 10vmin;
  transform: rotate(-24deg) rotateX(-20deg);
  -webkit-animation: growing-grass-ans--5 2s 1.8s linear backwards;
          animation: growing-grass-ans--5 2s 1.8s linear backwards;
}
@-webkit-keyframes growing-grass-ans--5 {
  0% {
    transform-origin: bottom left;
    transform: rotate(-24deg) rotateX(-20deg) scale(0);
  }
}
@keyframes growing-grass-ans--5 {
  0% {
    transform-origin: bottom left;
    transform: rotate(-24deg) rotateX(-20deg) scale(0);
  }
}
.flower__grass__leaf--6 {
  top: 22%;
  left: -180%;
  --size: 10vmin;
  transform: rotate(10deg);
  -webkit-animation: growing-grass-ans--6 2s 1.6s linear backwards;
          animation: growing-grass-ans--6 2s 1.6s linear backwards;
}
@-webkit-keyframes growing-grass-ans--6 {
  0% {
    transform-origin: bottom right;
    transform: rotate(10deg) scale(0);
  }
}
@keyframes growing-grass-ans--6 {
  0% {
    transform-origin: bottom right;
    transform: rotate(10deg) scale(0);
  }
}
.flower__grass__leaf--7 {
  top: 39%;
  left: 70%;
  --size: 10vmin;
  transform: rotate(-10deg);
  -webkit-animation: growing-grass-ans--7 2s 1.4s linear backwards;
          animation: growing-grass-ans--7 2s 1.4s linear backwards;
}
@-webkit-keyframes growing-grass-ans--7 {
  0% {
    transform-origin: bottom left;
    transform: rotate(-10deg) scale(0);
  }
}
@keyframes growing-grass-ans--7 {
  0% {
    transform-origin: bottom left;
    transform: rotate(-10deg) scale(0);
  }
}
.flower__grass__leaf--8 {
  top: 40%;
  left: -215%;
  --size: 11vmin;
  transform: rotate(10deg);
  -webkit-animation: growing-grass-ans--8 2s 1.2s linear backwards;
          animation: growing-grass-ans--8 2s 1.2s linear backwards;
}
@-webkit-keyframes growing-grass-ans--8 {
  0% {
    transform-origin: bottom right;
    transform: rotate(10deg) scale(0);
  }
}
@keyframes growing-grass-ans--8 {
  0% {
    transform-origin: bottom right;
    transform: rotate(10deg) scale(0);
  }
}
.flower__grass__overlay {
  position: absolute;
  top: -10%;
  right: 0%;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.6);
  filter: blur(1.5vmin);
  z-index: 100;
}
.flower__g-long {
  --w: 2vmin;
  --h: 6vmin;
  --c: #0e5b3c;
  position: absolute;
  bottom: 10vmin;
  left: -3vmin;
  transform-origin: bottom center;
  transform: rotate(-30deg) rotateY(-20deg);
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  -webkit-animation: flower-g-long-ans 3s linear infinite;
          animation: flower-g-long-ans 3s linear infinite;
}
@-webkit-keyframes flower-g-long-ans {
  0%, 100% {
    transform: rotate(-30deg) rotateY(-20deg);
  }
  50% {
    transform: rotate(-32deg) rotateY(-20deg);
  }
}
@keyframes flower-g-long-ans {
  0%, 100% {
    transform: rotate(-30deg) rotateY(-20deg);
  }
  50% {
    transform: rotate(-32deg) rotateY(-20deg);
  }
}
.flower__g-long__top {
  top: calc(var(--h) * -1);
  width: calc(var(--w) + 1vmin);
  height: var(--h);
  border-top-right-radius: 100%;
  border-right: 0.7vmin solid var(--c);
  transform: translate(-0.7vmin, 1vmin);
}
.flower__g-long__bottom {
  width: var(--w);
  height: 50vmin;
  transform-origin: bottom center;
  background-image: linear-gradient(to top, transparent 30%, var(--c));
  box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.5);
  -webkit-clip-path: polygon(35% 0, 65% 1%, 100% 100%, 0% 100%);
          clip-path: polygon(35% 0, 65% 1%, 100% 100%, 0% 100%);
}
.flower__g-right {
  position: absolute;
  bottom: 6vmin;
  left: -2vmin;
  transform-origin: bottom left;
  transform: rotate(20deg);
}
.flower__g-right .leaf {
  width: 30vmin;
  height: 50vmin;
  border-top-left-radius: 100%;
  border-left: 2vmin solid #217005;
  background-image: linear-gradient(to bottom, transparent, var(--dark-color) 60%);
  -webkit-mask-image: linear-gradient(to top, transparent 30%, #24803e 60%);
}
.flower__g-right--1 {
  -webkit-animation: flower-g-right-ans 2.5s linear infinite;
          animation: flower-g-right-ans 2.5s linear infinite;
}
.flower__g-right--2 {
  left: 5vmin;
  transform: rotateY(-180deg);
  -webkit-animation: flower-g-right-ans--2 3s linear infinite;
          animation: flower-g-right-ans--2 3s linear infinite;
}
.flower__g-right--2 .leaf {
  height: 75vmin;
  filter: blur(0.3vmin);
  opacity: 0.8;
}
@-webkit-keyframes flower-g-right-ans {
  0%, 100% {
    transform: rotate(20deg);
  }
  50% {
    transform: rotate(24deg) rotateX(-20deg);
  }
}
@keyframes flower-g-right-ans {
  0%, 100% {
    transform: rotate(20deg);
  }
  50% {
    transform: rotate(24deg) rotateX(-20deg);
  }
}
@-webkit-keyframes flower-g-right-ans--2 {
  0%, 100% {
    transform: rotateY(-180deg) rotate(0deg) rotateX(-20deg);
  }
  50% {
    transform: rotateY(-180deg) rotate(6deg) rotateX(-20deg);
  }
}
@keyframes flower-g-right-ans--2 {
  0%, 100% {
    transform: rotateY(-180deg) rotate(0deg) rotateX(-20deg);
  }
  50% {
    transform: rotateY(-180deg) rotate(6deg) rotateX(-20deg);
  }
}
.flower__g-front {
  position: absolute;
  bottom: 6vmin;
  left: 2.5vmin;
  z-index: 100;
  transform-origin: bottom center;
  transform: rotate(-28deg) rotateY(30deg) scale(1.04);
  -webkit-animation: flower__g-front-ans 2s linear infinite;
          animation: flower__g-front-ans 2s linear infinite;
}
@-webkit-keyframes flower__g-front-ans {
  0%, 100% {
    transform: rotate(-28deg) rotateY(30deg) scale(1.04);
  }
  50% {
    transform: rotate(-35deg) rotateY(40deg) scale(1.04);
  }
}
@keyframes flower__g-front-ans {
  0%, 100% {
    transform: rotate(-28deg) rotateY(30deg) scale(1.04);
  }
  50% {
    transform: rotate(-35deg) rotateY(40deg) scale(1.04);
  }
}
.flower__g-front__line {
  width: 0.3vmin;
  height: 20vmin;
  background-image: linear-gradient(to top, transparent, #042e0b, transparent 100%);
  position: relative;
}
.flower__g-front__leaf-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  transform-origin: bottom left;
  transform: rotate(10deg);
}
.flower__g-front__leaf-wrapper:nth-child(even) {
  left: 0vmin;
  transform: rotateY(-180deg) rotate(5deg);
  -webkit-animation: flower__g-front__leaf-left-ans 1s ease-in backwards;
          animation: flower__g-front__leaf-left-ans 1s ease-in backwards;
}
.flower__g-front__leaf-wrapper:nth-child(odd) {
  -webkit-animation: flower__g-front__leaf-ans 1s ease-in backwards;
          animation: flower__g-front__leaf-ans 1s ease-in backwards;
}
.flower__g-front__leaf-wrapper--1 {
  top: -8vmin;
  transform: scale(0.7);
  -webkit-animation: flower__g-front__leaf-ans 1s 5.5s ease-in backwards !important;
          animation: flower__g-front__leaf-ans 1s 5.5s ease-in backwards !important;
}
.flower__g-front__leaf-wrapper--2 {
  top: -8vmin;
  transform: rotateY(-180deg) scale(0.7) !important;
  -webkit-animation: flower__g-front__leaf-left-ans-2 1s 4.6s ease-in backwards !important;
          animation: flower__g-front__leaf-left-ans-2 1s 4.6s ease-in backwards !important;
}
.flower__g-front__leaf-wrapper--3 {
  top: -3vmin;
  -webkit-animation: flower__g-front__leaf-ans 1s 4.6s ease-in backwards;
          animation: flower__g-front__leaf-ans 1s 4.6s ease-in backwards;
}
.flower__g-front__leaf-wrapper--4 {
  top: -3vmin;
  transform: rotateY(-180deg) scale(0.9) !important;
  -webkit-animation: flower__g-front__leaf-left-ans-2 1s 4.6s ease-in backwards !important;
          animation: flower__g-front__leaf-left-ans-2 1s 4.6s ease-in backwards !important;
}
@-webkit-keyframes flower__g-front__leaf-left-ans-2 {
  0% {
    transform: rotateY(-180deg) scale(0);
  }
}
@keyframes flower__g-front__leaf-left-ans-2 {
  0% {
    transform: rotateY(-180deg) scale(0);
  }
}
.flower__g-front__leaf-wrapper--5, .flower__g-front__leaf-wrapper--6 {
  top: 2vmin;
}
.flower__g-front__leaf-wrapper--7, .flower__g-front__leaf-wrapper--8 {
  top: 6.5vmin;
}
.flower__g-front__leaf-wrapper--2 {
  -webkit-animation-delay: 5.2s !important;
          animation-delay: 5.2s !important;
}
.flower__g-front__leaf-wrapper--3 {
  -webkit-animation-delay: 4.9s !important;
          animation-delay: 4.9s !important;
}
.flower__g-front__leaf-wrapper--5 {
  -webkit-animation-delay: 4.3s !important;
          animation-delay: 4.3s !important;
}
.flower__g-front__leaf-wrapper--6 {
  -webkit-animation-delay: 4.1s !important;
          animation-delay: 4.1s !important;
}
.flower__g-front__leaf-wrapper--7 {
  -webkit-animation-delay: 3.8s !important;
          animation-delay: 3.8s !important;
}
.flower__g-front__leaf-wrapper--8 {
  -webkit-animation-delay: 3.5s !important;
          animation-delay: 3.5s !important;
}
@-webkit-keyframes flower__g-front__leaf-ans {
  0% {
    transform: rotate(10deg) scale(0);
  }
}
@keyframes flower__g-front__leaf-ans {
  0% {
    transform: rotate(10deg) scale(0);
  }
}
@-webkit-keyframes flower__g-front__leaf-left-ans {
  0% {
    transform: rotateY(-180deg) rotate(5deg) scale(0);
  }
}
@keyframes flower__g-front__leaf-left-ans {
  0% {
    transform: rotateY(-180deg) rotate(5deg) scale(0);
  }
}
.flower__g-front__leaf {
  width: 10vmin;
  height: 10vmin;
  border-radius: 100% 0% 0% 100%/100% 100% 0% 0%;
  box-shadow: inset 0 2px 1vmin hsla(184deg, 97%, 58%, 0.2);
  background-image: linear-gradient(to bottom left, transparent, var(--dark-color)), linear-gradient(to bottom right, #064f0a 50%, transparent 50%, transparent);
  -webkit-mask-image: linear-gradient(to bottom right, #097149 50%, transparent 50%, transparent);
  mask-image: linear-gradient(to bottom right, #0e8723 50%, transparent 50%, transparent);
}
.flower__g-fr {
  position: absolute;
  bottom: -4vmin;
  left: vmin;
  transform-origin: bottom left;
  z-index: 10;
  -webkit-animation: flower__g-fr-ans 2s linear infinite;
          animation: flower__g-fr-ans 2s linear infinite;
}
@-webkit-keyframes flower__g-fr-ans {
  0%, 100% {
    transform: rotate(2deg);
  }
  50% {
    transform: rotate(4deg);
  }
}
@keyframes flower__g-fr-ans {
  0%, 100% {
    transform: rotate(2deg);
  }
  50% {
    transform: rotate(4deg);
  }
}
.flower__g-fr .leaf {
  width: 30vmin;
  height: 50vmin;
  border-top-left-radius: 100%;
  border-left: 2vmin solid #147b47;
  -webkit-mask-image: linear-gradient(to top, transparent 25%, #0e4e2a 50%);
  position: relative;
  z-index: 1;
}
.flower__g-fr__leaf {
  position: absolute;
  top: 0;
  left: 0;
  width: 10vmin;
  height: 10vmin;
  border-radius: 100% 0% 0% 100%/100% 100% 0% 0%;
  box-shadow: inset 0 2px 1vmin hsla(184deg, 97%, 58%, 0.2);
  background-image: linear-gradient(to bottom left, transparent, var(--dark-color) 98%), linear-gradient(to bottom right, #106e18 45%, transparent 50%, transparent);
  -webkit-mask-image: linear-gradient(135deg, #175f22 40%, transparent 50%, transparent);
}
.flower__g-fr__leaf--1 {
  left: 20vmin;
  transform: rotate(45deg);
  -webkit-animation: flower__g-fr-leaft-ans-1 0.5s 5.2s linear backwards;
          animation: flower__g-fr-leaft-ans-1 0.5s 5.2s linear backwards;
}
@-webkit-keyframes flower__g-fr-leaft-ans-1 {
  0% {
    transform-origin: left;
    transform: rotate(45deg) scale(0);
  }
}
@keyframes flower__g-fr-leaft-ans-1 {
  0% {
    transform-origin: left;
    transform: rotate(45deg) scale(0);
  }
}
.flower__g-fr__leaf--2 {
  left: 12vmin;
  top: -7vmin;
  transform: rotate(25deg) rotateY(-180deg);
  -webkit-animation: flower__g-fr-leaft-ans-6 0.5s 5s linear backwards;
          animation: flower__g-fr-leaft-ans-6 0.5s 5s linear backwards;
}
.flower__g-fr__leaf--3 {
  left: 15vmin;
  top: 6vmin;
  transform: rotate(55deg);
  -webkit-animation: flower__g-fr-leaft-ans-5 0.5s 4.8s linear backwards;
          animation: flower__g-fr-leaft-ans-5 0.5s 4.8s linear backwards;
}
.flower__g-fr__leaf--4 {
  left: 6vmin;
  top: -2vmin;
  transform: rotate(25deg) rotateY(-180deg);
  -webkit-animation: flower__g-fr-leaft-ans-6 0.5s 4.6s linear backwards;
          animation: flower__g-fr-leaft-ans-6 0.5s 4.6s linear backwards;
}
.flower__g-fr__leaf--5 {
  left: 10vmin;
  top: 14vmin;
  transform: rotate(55deg);
  -webkit-animation: flower__g-fr-leaft-ans-5 0.5s 4.4s linear backwards;
          animation: flower__g-fr-leaft-ans-5 0.5s 4.4s linear backwards;
}
@-webkit-keyframes flower__g-fr-leaft-ans-5 {
  0% {
    transform-origin: left;
    transform: rotate(55deg) scale(0);
  }
}
@keyframes flower__g-fr-leaft-ans-5 {
  0% {
    transform-origin: left;
    transform: rotate(55deg) scale(0);
  }
}
.flower__g-fr__leaf--6 {
  left: 0vmin;
  top: 6vmin;
  transform: rotate(25deg) rotateY(-180deg);
  -webkit-animation: flower__g-fr-leaft-ans-6 0.5s 4.2s linear backwards;
          animation: flower__g-fr-leaft-ans-6 0.5s 4.2s linear backwards;
}
@-webkit-keyframes flower__g-fr-leaft-ans-6 {
  0% {
    transform-origin: right;
    transform: rotate(25deg) rotateY(-180deg) scale(0);
  }
}
@keyframes flower__g-fr-leaft-ans-6 {
  0% {
    transform-origin: right;
    transform: rotate(25deg) rotateY(-180deg) scale(0);
  }
}
.flower__g-fr__leaf--7 {
  left: 5vmin;
  top: 22vmin;
  transform: rotate(45deg);
  -webkit-animation: flower__g-fr-leaft-ans-7 0.5s 4s linear backwards;
          animation: flower__g-fr-leaft-ans-7 0.5s 4s linear backwards;
}
@-webkit-keyframes flower__g-fr-leaft-ans-7 {
  0% {
    transform-origin: left;
    transform: rotate(45deg) scale(0);
  }
}
@keyframes flower__g-fr-leaft-ans-7 {
  0% {
    transform-origin: left;
    transform: rotate(45deg) scale(0);
  }
}
.flower__g-fr__leaf--8 {
  left: -4vmin;
  top: 15vmin;
  transform: rotate(15deg) rotateY(-180deg);
  -webkit-animation: flower__g-fr-leaft-ans-8 0.5s 3.8s linear backwards;
          animation: flower__g-fr-leaft-ans-8 0.5s 3.8s linear backwards;
}
@-webkit-keyframes flower__g-fr-leaft-ans-8 {
  0% {
    transform-origin: right;
    transform: rotate(15deg) rotateY(-180deg) scale(0);
  }
}
@keyframes flower__g-fr-leaft-ans-8 {
  0% {
    transform-origin: right;
    transform: rotate(15deg) rotateY(-180deg) scale(0);
  }
}

.long-g {
  position: absolute;
  bottom: 25vmin;
  left: -42vmin;
  transform-origin: bottom left;
}
.long-g--1 {
  bottom: 0vmin;
  transform: scale(0.8) rotate(-5deg);
}
.long-g--1 .leaf {
  -webkit-mask-image: linear-gradient(to top, transparent 40%, #196d2a 80%) !important;
}
.long-g--1 .leaf--1 {
  --w: 5vmin;
  --h: 60vmin;
  left: -2vmin;
  transform: rotate(3deg) rotateY(-180deg);
}
.long-g--2, .long-g--3 {
  bottom: -3vmin;
  left: -35vmin;
  transform-origin: center;
  transform: scale(0.6) rotateX(60deg);
}
.long-g--2 .leaf, .long-g--3 .leaf {
  -webkit-mask-image: linear-gradient(to top, transparent 50%, #176220 80%) !important;
}
.long-g--2 .leaf--1, .long-g--3 .leaf--1 {
  left: -1vmin;
  transform: rotateY(-180deg);
}
.long-g--3 {
  left: -17vmin;
  bottom: 0vmin;
}
.long-g--3 .leaf {
  -webkit-mask-image: linear-gradient(to top, transparent 40%, #176220 80%) !important;
}
.long-g--4 {
  left: 25vmin;
  bottom: -3vmin;
  transform-origin: center;
  transform: scale(0.6) rotateX(60deg);
}
.long-g--4 .leaf {
  -webkit-mask-image: linear-gradient(to top, transparent 50%, #176220 80%) !important;
}
.long-g--5 {
  left: 42vmin;
  bottom: 0vmin;
  transform: scale(0.8) rotate(2deg);
}
.long-g--6 {
  left: 0vmin;
  bottom: -20vmin;
  z-index: 100;
  filter: blur(0.3vmin);
  transform: scale(0.8) rotate(2deg);
}
.long-g--7 {
  left: 35vmin;
  bottom: 20vmin;
  z-index: -1;
  filter: blur(0.3vmin);
  transform: scale(0.6) rotate(2deg);
  opacity: 0.7;
}
.long-g .leaf {
  --w: 15vmin;
  --h: 40vmin;
  --c: #1aaa15;
  position: absolute;
  bottom: 0;
  width: var(--w);
  height: var(--h);
  border-top-left-radius: 100%;
  border-left: 2vmin solid var(--c);
  -webkit-mask-image: linear-gradient(to top, transparent 20%, var(--dark-color));
  transform-origin: bottom center;
}
.long-g .leaf--0 {
  left: 2vmin;
  -webkit-animation: leaf-ans-1 4s linear infinite;
          animation: leaf-ans-1 4s linear infinite;
}
.long-g .leaf--1 {
  --w: 5vmin;
  --h: 60vmin;
  -webkit-animation: leaf-ans-1 4s linear infinite;
          animation: leaf-ans-1 4s linear infinite;
}
.long-g .leaf--2 {
  --w: 10vmin;
  --h: 40vmin;
  left: -0.5vmin;
  bottom: 5vmin;
  transform-origin: bottom left;
  transform: rotateY(-180deg);
  -webkit-animation: leaf-ans-2 3s linear infinite;
          animation: leaf-ans-2 3s linear infinite;
}
.long-g .leaf--3 {
  --w: 5vmin;
  --h: 30vmin;
  left: -1vmin;
  bottom: 3.2vmin;
  transform-origin: bottom left;
  transform: rotate(-10deg) rotateY(-180deg);
  -webkit-animation: leaf-ans-3 3s linear infinite;
          animation: leaf-ans-3 3s linear infinite;
}

@-webkit-keyframes leaf-ans-1 {
  0%, 100% {
    transform: rotate(-5deg) scale(1);
  }
  50% {
    transform: rotate(5deg) scale(1.1);
  }
}

@keyframes leaf-ans-1 {
  0%, 100% {
    transform: rotate(-5deg) scale(1);
  }
  50% {
    transform: rotate(5deg) scale(1.1);
  }
}
@-webkit-keyframes leaf-ans-2 {
  0%, 100% {
    transform: rotateY(-180deg) rotate(5deg);
  }
  50% {
    transform: rotateY(-180deg) rotate(0deg) scale(1.1);
  }
}
@keyframes leaf-ans-2 {
  0%, 100% {
    transform: rotateY(-180deg) rotate(5deg);
  }
  50% {
    transform: rotateY(-180deg) rotate(0deg) scale(1.1);
  }
}
@-webkit-keyframes leaf-ans-3 {
  0%, 100% {
    transform: rotate(-10deg) rotateY(-180deg);
  }
  50% {
    transform: rotate(-20deg) rotateY(-180deg);
  }
}
@keyframes leaf-ans-3 {
  0%, 100% {
    transform: rotate(-10deg) rotateY(-180deg);
  }
  50% {
    transform: rotate(-20deg) rotateY(-180deg);
  }
}
.grow-ans {
  -webkit-animation: grow-ans 2s var(--d) backwards;
          animation: grow-ans 2s var(--d) backwards;
}

@-webkit-keyframes grow-ans {
  0% {
    transform: scale(0);
    opacity: 0;
  }
}

@keyframes grow-ans {
  0% {
    transform: scale(0);
    opacity: 0;
  }
}
@-webkit-keyframes light-ans {
  0% {
    opacity: 0;
    transform: translateY(0vmin);
  }
  25% {
    opacity: 1;
    transform: translateY(-5vmin) translateX(-2vmin);
  }
  50% {
    opacity: 1;
    transform: translateY(-15vmin) translateX(2vmin);
    filter: blur(0.2vmin);
  }
  75% {
    transform: translateY(-20vmin) translateX(-2vmin);
    filter: blur(0.2vmin);
  }
  100% {
    transform: translateY(-30vmin);
    opacity: 0;
    filter: blur(1vmin);
  }
}
@keyframes light-ans {
  0% {
    opacity: 0;
    transform: translateY(0vmin);
  }
  25% {
    opacity: 1;
    transform: translateY(-5vmin) translateX(-2vmin);
  }
  50% {
    opacity: 1;
    transform: translateY(-15vmin) translateX(2vmin);
    filter: blur(0.2vmin);
  }
  75% {
    transform: translateY(-20vmin) translateX(-2vmin);
    filter: blur(0.2vmin);
  }
  100% {
    transform: translateY(-30vmin);
    opacity: 0;
    filter: blur(1vmin);
  }
}
@-webkit-keyframes moving-flower-1 {
  0%, 100% {
    transform: rotate(2deg);
  }
  50% {
    transform: rotate(-2deg);
  }
}
@keyframes moving-flower-1 {
  0%, 100% {
    transform: rotate(2deg);
  }
  50% {
    transform: rotate(-2deg);
  }
}
@-webkit-keyframes moving-flower-2 {
  0%, 100% {
    transform: rotate(18deg);
  }
  50% {
    transform: rotate(14deg);
  }
}
@keyframes moving-flower-2 {
  0%, 100% {
    transform: rotate(18deg);
  }
  50% {
    transform: rotate(14deg);
  }
}
@-webkit-keyframes moving-flower-3 {
  0%, 100% {
    transform: rotate(-18deg);
  }
  50% {
    transform: rotate(-20deg) rotateY(-10deg);
  }
}
@keyframes moving-flower-3 {
  0%, 100% {
    transform: rotate(-18deg);
  }
  50% {
    transform: rotate(-20deg) rotateY(-10deg);
  }
}

@-webkit-keyframes moving-flower-4 {
  0%, 100% {
    transform: rotate(-15deg);
  }
  50% {
    transform: rotate(-20deg) rotateY(-10deg);
  }
}
@keyframes moving-flower-4 {
  0%, 100% {
    transform: rotate(-15deg);
  }
  50% {
    transform: rotate(-20deg) rotateY(-10deg);
  }
}
@-webkit-keyframes moving-flower-5 {
  0%, 100% {
    transform: rotate(15deg);
  }
  50% {
    transform: rotate(20deg) rotateY(-10deg);
  }
}
@keyframes moving-flower-5 {
  0%, 100% {
    transform: rotate(15deg);
  }
  50% {
    transform: rotate(20deg) rotateY(-10deg);
  }
}

@-webkit-keyframes moving-flower-6 {
  0%, 100% {
    transform: rotate(5deg);
  }
  50% {
    transform: rotate(10deg) rotateY(-10deg);
  }
}
@keyframes moving-flower-6 {
  0%, 100% {
    transform: rotate(8deg);
  }
  50% {
    transform: rotate(10deg) rotateY(-10deg);
  }
}

@-webkit-keyframes moving-flower-7 {
  0%, 100% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(-5deg) rotateY(-10deg);
  }
}
@keyframes moving-flower-7 {
  0%, 100% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(-5deg) rotateY(-10deg);
  }
}

@-webkit-keyframes blooming-leaf-right {
  0% {
    transform-origin: left;
    transform: rotate(70deg) rotateY(30deg) scale(0);
  }
}
@keyframes blooming-leaf-right {
  0% {
    transform-origin: left;
    transform: rotate(70deg) rotateY(30deg) scale(0);
  }
}
@-webkit-keyframes blooming-leaf-left {
  0% {
    transform-origin: right;
    transform: rotate(-70deg) rotateY(30deg) scale(0);
  }
}
@keyframes blooming-leaf-left {
  0% {
    transform-origin: right;
    transform: rotate(-70deg) rotateY(30deg) scale(0);
  }
}
@-webkit-keyframes grow-flower-tree {
  0% {
    height: 0;
    border-radius: 1vmin;
  }
}
@keyframes grow-flower-tree {
  0% {
    height: 0;
    border-radius: 1vmin;
  }
}
@-webkit-keyframes blooming-flower {
  0% {
    transform: scale(0);
  }
}
@keyframes blooming-flower {
  0% {
    transform: scale(0);
  }
}
@-webkit-keyframes moving-grass {
  0%, 100% {
    transform: rotate(-48deg) rotateY(40deg);
  }
  50% {
    transform: rotate(-50deg) rotateY(40deg);
  }
}
@keyframes moving-grass {
  0%, 100% {
    transform: rotate(-48deg) rotateY(40deg);
  }
  50% {
    transform: rotate(-50deg) rotateY(40deg);
  }
}
@-webkit-keyframes moving-grass--2 {
  0%, 100% {
    transform: scale(0.5) rotate(75deg) rotateX(10deg) rotateY(-200deg);
  }
  50% {
    transform: scale(0.5) rotate(79deg) rotateX(10deg) rotateY(-200deg);
  }
}
@keyframes moving-grass--2 {
  0%, 100% {
    transform: scale(0.5) rotate(75deg) rotateX(10deg) rotateY(-200deg);
  }
  50% {
    transform: scale(0.5) rotate(79deg) rotateX(10deg) rotateY(-200deg);
  }
}
.growing-grass {
  -webkit-animation: growing-grass-ans 1s 2s backwards;
          animation: growing-grass-ans 1s 2s backwards;
}

@-webkit-keyframes growing-grass-ans {
  0% {
    transform: scale(0);
  }
}

@keyframes growing-grass-ans {
  0% {
    transform: scale(0);
  }
}
.container * {
  -webkit-animation-play-state: paused !important;
          animation-play-state: paused !important;
}
</style>
