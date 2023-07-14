<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}{{ $page->baseUrl."/"!=$page->getUrl() ? "/":""}}">
        <link rel="icon" type="image/png" href="{{ $page->baseUrl}}/assets/images/favicon.png?v=1" />
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&&family=Rajdhani&display=swap" rel="stylesheet">


        @if ($page->production)  
        <script type="module">          
            import { initializeApp } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-app.js";          
            import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-analytics.js";          
            const firebaseConfig = {          
              apiKey: "AIzaSyDdvRIvqaVMQ5Y-JPIlCzjm8Wb2mxhHilM",          
              authDomain: "notarianewjersey.firebaseapp.com",          
              projectId: "notarianewjersey",          
              storageBucket: "notarianewjersey.appspot.com",          
              messagingSenderId: "789620749185",          
              appId: "1:789620749185:web:3ea50bc8aaa9615d14ae80",          
              measurementId: "G-BQKHS48G2W"          
            };          
            const app = initializeApp(firebaseConfig);          
            const analytics = getAnalytics(app);          
          </script>
          
           <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11196214194"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-11196214194');
            </script>            

            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-PVR2ZXR');
            </script>
                <!-- End Google Tag Manager -->


        @endif

    @yield('head')
   
    </head>
    <body class="text-gray-800 antialiased" id="app">
        <nav class="z-50 w-full flex flex-wrap items-center justify-between px-2 py-2 bg-gradient-to-r from-teal-900 to-teal-950">
            <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                <div class="w-auto relative flex justify-between lg:static lg:block lg:justify-start">
    
                    <div class="flex items-center">
                        <img src="{{ $page->baseUrl}}/assets/images/favicon.png" width="40" height="40" alt="Logo">
                        <div class="items-center text-white font-primary text-xs md:text-xl px-4 uppercase">
                            <div class="flex flex-col md:flex-row gap-1">Servicios <span class="">Notariales</span></div>                             
                        </div>
                    </div>
                </div>
                <div class="items-center bg-transparent lg:shadow-none">   
                            <a class="flex items-center rounded-sm bg-yellow-500 font-bold uppercase px-4 py-2 mt-4 md:mt-0 shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                                href="tel:+1{{ $phoneland1 ?? $phoneland1 ?? ''}}"type="button" style="transition: all 0.15s ease 0s;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                  </svg><span class="pl-1">{{ $phoneland2 ?? $phoneland2 ?? ''}}</span></a>
                </div>
            </div>
        </nav>
    
        <main>
            <header class="relative py-16 flex content-center items-center justify-center" style="min-height: 40vh;" >
                <div class="absolute top-0 w-full h-full bg-bottom bg-cover" style='background-image: url("{{ $page->baseUrl }}/assets/images/header.jpg");'>
                  <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-slate-950"></span>
                </div>
                <div class="flex-auto w-full container max-w-4xl mx-auto relative">
                  <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-11/12 px-4 ml-auto mr-auto text-left">
                      <div class="px-4">
                        <h1 class="text-white text-3xl xs:text-3xl md:text-4xl xl:text-5xl font-primary uppercase font-semibold">{{$title}} </h1>
                        <h2 class="text-gray-300 text-lg xs:text-xl md:text-2xl xl:text-3xl font-primary uppercase">EN NEW JERSEY</h2>
                      <br>
                      <div class="flex">
                        <a href="tel:+1{{ $phoneland1 ?? $phoneland1 ?? ''}}" class="flex items-center text-lg md:text-xl  bg-yellow-500 hover:bg-teal-950 hover:text-white tracking-wider uppercase px-2 md:px-4 py-2 rounded-sm shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg><span class="pl-2">{{ $phoneland2 ?? $phoneland2 ?? ''}}</span></a>
                      </div>

                      </div>
                    </div>
                  </div>
                </div>    
              </header>
            @yield('body')
        </main>    
    
        
<section class="w-full bg-white" >

    <div class="mx-auto">
        <div class="flex flex-col lg:flex-row">
  
  
            <div class="relative w-full lg:w-6/12 bg-bottom bg-cover" style='background-image: url("{{ $page->baseUrl }}/assets/images/contactenos.jpg");'>
                <div class="flex flex-col items-start justify-start w-full h-full p-8 lg:p-16 xl:p-24">
                    <div class="flex flex-col tracking-tight lg:max-w-3xl">
  
                     <p class="my-2 text-center text-lg md:text-xl font-primary uppercase font-semibold">Nuestros clientes nos recomiendan</p>


                        
        

<!-- component -->
<div class="flex-row  justify-center items-center">

    <div class="overflow-hidden rounded-lg bg-white shadow-md ">
        <div class="p-4">

            <div class="flex justify-center items-center">
                <div class="text-2xl">Servicios Notariales NJ</div>
            </div>
            <div class="flex justify-center items-center">
                <h2 class="mb-2 text-xl font-medium text-slate-600">5.0</h2>
                <div class="flex items-center my-2">
                    <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                </div>
            </div>
        </div>
    </div>
    
            
            <div class="pr-0 pb-0 pl-0 mt-5 mr-0 mb-0 ml-0">
                <div class="sm:flex sm:items-center sm:justify-between sm:space-x-5">
                  <div class="flex flex-col md:flex-row items-center flex-1 min-w-0">
                    <div class="mt-0 mr-0 mb-0 ml-4 flex-1 min-w-0">                    
                          <p class="text-lg font-bold text-gray-800 truncate">Priscilla Andrade</p>                    
                          <div class="flex items-center">
                            <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                          </div>
                          <p class="text-gray-600 text-md">Mejor notaria no pude encontrar! Excelente servicio al cliente, rapidos y confiables.. definitivamente  para recomendar!</p>
                    </div>
                  </div>
                </div>
            </div>

            <div class="pr-0 pb-0 pl-0 mt-5 mr-0 mb-0 ml-0">
              <div class="sm:flex sm:items-center sm:justify-between sm:space-x-5">
                <div class="flex flex-col md:flex-row items-center flex-1 min-w-0">
                  <div class="mt-0 mr-0 mb-0 ml-4 flex-1 min-w-0">                    
                        <p class="text-lg font-bold text-gray-800 truncate">Katherine Aveiga Aguirre</p>                    
                        <div class="flex items-center">
                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                        <p class="text-gray-600 text-md">Totalmente confiable, trabajo realice un Servicio de Un poder para Ecuador, excelente precio y buena atención.</p>
                  </div>
                </div>
              </div>
            </div>  

            <div class="pr-0 pb-0 pl-0 mt-5 mr-0 mb-0 ml-0">
              <div class="sm:flex sm:items-center sm:justify-between sm:space-x-5">
                <div class="flex flex-col md:flex-row items-center flex-1 min-w-0">
                  <div class="mt-0 mr-0 mb-0 ml-4 flex-1 min-w-0">                    
                        <p class="text-lg font-bold text-gray-800 truncate">Andres Cano</p>                    
                        <div class="flex items-center">
                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                          <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                        <p class="text-gray-600 text-md">Excelente atención, muy buen servicio, de gran ayuda para la comunidad  en procesos notariales y servicios relacionados,  totalmente recomendados!</p>
                  </div>
                </div>
              </div>
            </div>  

  </div>





                       





                        
  
  
                    </div>
                </div>
                
            </div>
  
            <div class="w-full lg:w-6/12 bg-teal-900">
                    <div class="flex flex-col items-start justify-start w-full h-full p-8 lg:p-16 xl:p-24">
                        <h4 class="w-full text-3xl font-primary text-white uppercase font-semibold">Envía tu consulta</h4>
                        <p class="text-white  text-lg">En breve recibirás una respuesta.</p>
                        <div id="divform" class="w-full mt-4 space-y-2 md:space-y-3">
                            <form id="formlead">
                                <div class="relative pt-4">
                                    <label class="font-semibold text-white uppercase">NOMBRES</label>
                                    <input required type="text" minlength="4" maxlength="80" name="contact_name" id="contact_name" class="block w-full px-4 py-2 mt-2 text-white border-b border-white placeholder-gray-400 bg-teal-800 focus:outline-none " >
                                </div>
                                <div class="relative pt-4">
                                    <label class="font-semibold text-white uppercase">TELEFONO</label>
                                    <input required type="text" minlength="8" maxlength="20" name="contact_phone" id="contact_phone" class="block w-full px-4 py-2 mt-2 text-white border-b border-white placeholder-gray-400 bg-teal-800 focus:outline-none ">
                                </div>
                                <div class="relative pt-4">
                                    <label class="font-semibold text-white uppercase">MENSAJE</label>
                                    <textarea required name="textarea" minlength="6" maxlength="999" rows="1" name="contact_message" id="contact_message" class="block w-full px-4 py-2 mt-2 text-white border-b border-white placeholder-gray-400 bg-teal-800 focus:outline-none "></textarea>
                                </div>
                                <div class="relative pt-4">
                                    <button id="contact-us-button" type="submit" 
                                    class="inline-block w-full px-5 py-4 text-base  text-center focus:outline-none text-teal-950 transition duration-200 bg-yellow-400 uppercase font-bold">
                                        Enviar Mensaje
                                    </button>
                                </div>
                            </form>
                        </div>
                            
                        <div id="gracias" class="text-center mx-auto py-12 hidden">
                            <img class="mx-auto w-36" src="{{ $page->baseUrl}}/assets/images/favicon.png?v=1" alt="">
                            <div class="text-yellow-400 font-bold py-6 text-2xl">Gracias por su confianza.</div>
                        </div>
                    </div>
            </div>
  
  
        </div>
    </div>
  
</section>

  
        <footer>  

            <div class="bg-gradient-to-r from-teal-900 to-teal-950">                
                <div class="max-w-2xl mx-auto py-5">
                    <div class="text-center text-sm text-gray-400"> &copy; {{ $page->title }}, {{date('Y')}}. </div>
                </div>
            </div>


        </footer>    
    
        



        <div class="fixed z-30 bottom-0 right-0 w-14 h-14 mr-4 mb-4 cursor-pointer" id="box_btn">
            <a target="_blank" href="https://wa.me/+1{{ $page->phonecity[1] ?? $page->phoneprinc[1] ?? ''}}" >    <img src="{{ $page->baseUrl}}/assets/images/icon-whatsapp.png">   </a>
        </div>
    
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script>
            function toggleNavbar(collapseID) {
                document.getElementById(collapseID).classList.toggle("hidden");
                document.getElementById(collapseID).classList.toggle("block");
            }


            function openModal(nModal) { document.getElementById(nModal).classList.remove('hidden') }
            function closModal(nModal) { document.getElementById(nModal).classList.add('hidden') }

            
            const form = document.getElementById('formlead');

            form.addEventListener('submit', (event) => {
                event.preventDefault(); // detener el envío del formulario por defecto
                
                const leadName  = document.getElementById('contact_name').value
                const leadPhone = document.getElementById('contact_phone').value
                const leadMessage = document.getElementById('contact_message').value
                if (leadName && leadPhone && leadMessage) { // validar campos requeridos
                    closModal('divform');
                    openModal('gracias');

                    const postData = {
                        contact_name: leadName,
                        contact_phone: leadPhone,
                        contact_message: leadMessage
                    }; 

                    fetch('https://vercel-nodemailer-nine.vercel.app/api/sendmail', {
                            method: 'POST', // método HTTP POST
                            mode:'no-cors',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify(postData) // datos a enviar en la solicitud, convertidos a JSON
                            })
                            .then(response => {
                            if (!response.ok) {
                                throw new Error('Error en la solicitud'); // manejo de errores
                            }
                            return response.json();
                            })
                            .then(data => {
                            console.log(data); // respuesta exitosa de la API
                            })
                            .catch(error => {
                            console.error(error); // manejo de errores
                            });
                }
            });
    
        </script>
        
        @yield('foot')
    </body>
</html>
