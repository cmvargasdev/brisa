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

        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVR2ZXR"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
        
        <nav class="z-50 w-full flex flex-wrap items-center justify-between px-2 py-2 bg-gradient-to-r from-teal-900 to-teal-950">
            <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                <div class="w-auto relative flex justify-between lg:static lg:block lg:justify-start">
    
                    <div class="flex items-center">
                        <img src="{{ $page->baseUrl}}/assets/images/favicon.png" width="40" height="40" alt="Logo">
                        <a href="{{ $page->baseUrl}}" title="home" class="items-center text-white font-primary text-xs md:text-xl px-4 uppercase">
                            <div class="flex flex-col md:flex-row gap-1">Servicios <span class=""> Notariales</span></div>                             
                        </a>
                    </div>
                </div>
                <div class="items-center bg-transparent lg:shadow-none">   
                            <a class="flex rounded-sm bg-yellow-500 font-bold uppercase px-4 py-2 mt-4 md:mt-0 shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                                href="tel:+1{{ $page->phonecity[1] ?? $page->phoneprinc[1] ?? ''}}"type="button" style="transition: all 0.15s ease 0s;">{{ $page->phonecity[0] ?? $page->phoneprinc[0] ?? ''}}</a>
                </div>
            </div>
        </nav>
        
        <main>
            @yield('body')
        </main>    
    
        
<section class="w-full bg-white" >

    <div class="mx-auto">
        <div class="flex flex-col lg:flex-row">
  
  
            <div class="relative w-full lg:w-6/12 bg-bottom bg-cover" style='background-image: url("{{ $page->baseUrl }}/assets/images/contactenos.jpg");'>
                <div class="flex flex-col items-start justify-start w-full h-full p-8 lg:p-16 xl:p-24">
                    <div class="flex flex-col tracking-tight lg:max-w-3xl">
  
                        <h4 class="w-full text-3xl font-primary text-teal-950 uppercase font-semibold">Contácto</h4>  
                        <p class="text-gray-600  text-lg  pb-12">Comuníquese con nosotros y con gusto lo ayudaremos.</p>
  
  
                        <div class="flex space-x-2 items-center sm:space-x-4 pb-8">
                            <div class="bg-yellow-400 text-teal-950 rounded-full p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                  </svg>
                            </div>
                            <div class="">
                              <div class="text-base md:text-lg xl:text-xl text-gray-600">Teléfono</div>
                                <p class="text-lg md:text-xl xl:text-2xl text-sky-950">
                                    <a href="tel:+1{{ $page->phonecity[1] ?? $page->phoneprinc[1] ?? ''}}" target="_blank">{{ $page->phonecity[0] ?? $page->phoneprinc[0] ?? ''}}</a>
                                </p>                              
                            </div>
                        </div>
  
                        <div class="flex space-x-2 items-center sm:space-x-4 pb-8">
                          <div class="bg-yellow-400 text-teal-950 rounded-full p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                  </svg>
                            </div>
                            <div class="">
                              <div class="text-base md:text-lg xl:text-xl text-gray-600">Dirección</div>
                                <p class="text-lg md:text-xl xl:text-2xl text-sky-950">
                                    <a href="https://goo.gl/maps/hcMeYVbqdcsWMC3i7" target="_blank">2162 Morris Ave, <br> Union, NJ 07083.</a>
                                </p>                              
                            </div>
                        </div>
  
                        <div class="flex space-x-2 items-center sm:space-x-4 pb-8">
                          <div class="bg-yellow-400 text-teal-950 rounded-full p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                  </svg>
                            </div>
                            <div class="">
                              <div class="text-base md:text-lg xl:text-xl text-gray-600">Email</div>
                                <p class="text-lg md:text-xl xl:text-2xl text-sky-950">
                                  <a href="mailto:info@serviciosnotarialesnj.com" target="_blank">info@serviciosnotarialesnj.com</a>
                                </p>                              
                            </div>
                        </div>

                        <div class="flex pl-16">
                            <p class="text-xl md:text-2xl xl:text-3xl text-sky-950">Nuestras Redes Sociales</p>
                        </div>
                        <div class="flex pt-4 pl-16">
                            <a class="pl-4" target="_blank" href="https://www.facebook.com/profile.php?id=100092307400864" >    
                                <img src="{{ $page->baseUrl}}/assets/images/facebook.png" width="60">   
                            </a>
                            <a class="pl-4" target="_blank" href="https://www.instagram.com/servicios_notarialesnj" >    
                                <img src="{{ $page->baseUrl}}/assets/images/instagram.png" width="65">   
                            </a>
                            <a class="pl-4" target="_blank" href="https://wa.me/+1{{ $page->phonecity[1] ?? $page->phoneprinc[1] ?? ''}}" >    
                                <img src="{{ $page->baseUrl}}/assets/images/whatsapp.png" width="60">   
                            </a>
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
