@extends('_layouts.main')

@section('head')

<title>Notaría Pública en New Jersey</title>

<meta name="description" content="Somos una oficina especializada en ⭐ Trámites Notariales en Elizabeth New Jersey 🥇, comprometidos en ofrecer la mejor asesoría a migrantes hispanos.">
<meta name="keywords" content="Notary Public Near Me, Notario Publico en New Jersey">

<meta property="og:type" content="article" />
<meta property="og:site_name" content="Notaría Pública en New Jersey" />
<meta property="og:title" content="Notaría Pública en New Jersey"/>
<meta property="og:url" content="{{ $page->getUrl() }}"/>
<meta property="og:description" content="Somos una oficina especializada en trámites notariales en Elizabeth New Jersey, comprometidos en ofrecer la mejor asesoría a migrantes hispanos. " />
<meta property="og:updated_time" content="2023-06-12T08:00:44+00:00" />


@endsection


@section('body')


<header class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 80vh;" >
  <div class="absolute top-0 w-full h-full bg-bottom bg-cover" style='background-image: url("{{ $page->baseUrl }}/assets/images/header.jpg");'>
    <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-slate-950"></span>
  </div>
  <div class="container relative mx-auto">
    <div class="items-center flex flex-wrap">
      <div class="w-full lg:w-11/12 px-4 ml-auto mr-auto text-left">
        <div class="px-4">
          <h1 class="text-white text-3xl xs:text-3xl md:text-4xl xl:text-5xl font-primary uppercase">La mejor asesoría <br> a <span class="font-bold">migrantes hispanos</span> </h1>
        <br>
         <p> <a href="tel:+1{{ $page->phonecity[1] ?? $page->phoneprinc[1] ?? ''}}" class="show-modal text-sm md:text-xl  bg-yellow-500 hover:bg-teal-950 hover:text-white tracking-wider uppercase px-2 md:px-4 py-2 rounded-sm shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
            style="transition: all 0.15s ease 0s;">Solicitar Información</a></p>
        </div>
      </div>
    </div>
  </div>    
</header>




  <div class="my-8 px-5 items-center mx-auto w-full">
    <div class="mx-auto px-4 md:px-32">
      <div class="flex flex-col lg:flex-row items-center">
          <div class="lg:w-1/2 lg:pr-32">      
            <div class="">
              <img class="h-full" src="{{ $page->baseUrl }}/assets/images/notario-sabrina-espinoza-600.png">
            </div>
          </div>

            <div class="mt-8 mx-4 text-center lg:text-left lg:w-1/2 lg:mt-0">
               
              <div class="flex pt-2">
                <div class="border-l-8 border-yellow-400 px-8 pb-4">
                    <span class="text-xl text-gray-600">Bienvenidos a </span>
                    <h4 class="text-2xl ">SERVICIOS NOTARIALES</h4>
                </div>
              </div>
              <p class="text-3xl md:text-5xl py-8">
                Tu Tiempo, <br> Nuestra Gestión.
              </p>
              <p  class="text-lg md:text-xl font-light p-2  text-left text-gray-800"> 
                Somos una oficina especializada en trámites notariales, comprometidos en ofrecer la mejor asesoría a migrantes hispanos. 
              </p> 

              

              <p  class="text-lg md:text-xl font-light p-2 text-left text-gray-800"> 
                Basamos nuestra atención al cliente en valores como la honestidad, la lealtad, la humanidad y un trato muy cercano.
              </p>


              <p  class="text-lg md:text-xl font-light p-2 text-left text-gray-800"> 
                Ofrecemos una amplia gama de servicios, desde la gestión de licencia de conducir, hasta la traducción y legalización de documentos.
              </p>

            </div>
  
      </div>
    </div>
  </div>
  
<!-- component -->
<div class="relative px-3 md:lg:xl:px-40 py-20 bg-teal-900" > 
  
  <div class="text-center mx-auto pb-4 relative z-10 ">
    <div class="text-3xl md:text-4xl font-principal font-semibold text-white">Nuestros Servicios </div>
    <div class="text-gray-200 text-lg md:text-2xl text tracking-wide font-light pb-4">Brindamos una Amplia Gama de Soluciones Notariales para tus Necesidades Legales</div>
    <hr class="border-yellow-400 border-0 border-b-2 mx-auto my-4">
  </div>  

  <div class="grid gap-4 grid-cols-1 md:grid-cols-3  xl:grid-cols-4 pt-8">

    <a href="{{ $page->baseUrl}}/apostilla-de-documentos">
    <div class="transition duration-150 ease-in-out group hover:scale-105 hover:bg-yellow-300 p-4 h-fullcursor-pointer">
        <p class="text-2xl my-1 text-white uppercase font-principal group-hover:text-teal-950">APOSTILLAS</p>
        <hr class="border-yellow-400 group-hover:border-teal-950 group-hover:bg-teal-950 border-2 my-2" width="50">
        <p class="text-gray-300 group-hover:text-gray-800">
          Apostilla de documentos legales para uso internacional con facilidad y rapidez. ¡Evita trámites engorrosos y confía en nosotros! </p>
    </div>
    </a>

    <a href="{{ $page->baseUrl}}/carta-poder-notarial">
    <div class="transition duration-150 ease-in-out group hover:scale-105 hover:bg-yellow-300 p-4 h-fullcursor-pointer">
        <p class="text-2xl my-1 text-white uppercase font-principal group-hover:text-teal-950">Poderes</p>
        <hr class="border-yellow-400 group-hover:border-teal-950 group-hover:bg-teal-950 border-2 my-2" width="50">
        <p class="text-gray-300 group-hover:text-gray-800">
          Obtén Poderes Notariales Generales y Especiales con nosotros. Simplifica trámites legales y garantiza la validez de tus documentos. </p>
    </div>
    </a>

    <a href="{{ $page->baseUrl}}/traduccion-de-documentos">
    <div class="transition duration-150 ease-in-out group hover:scale-105 hover:bg-yellow-300 p-4 h-fullcursor-pointer">
        <p class="text-2xl my-1 text-white uppercase font-principal group-hover:text-teal-950">Traducciones</p>
        <hr class="border-yellow-400 group-hover:border-teal-950 group-hover:bg-teal-950 border-2 my-2" width="50">
        <p class="text-gray-300 group-hover:text-gray-800">
          Traducciones certificadas de documentos legales para uso internacional. Consigue una traducción precisa y confiable con nosotros. </p>
    </div>
    </a>

    <a href="{{ $page->baseUrl}}/notario-publico">
    <div class="transition duration-150 ease-in-out group hover:scale-105 hover:bg-yellow-300 p-4 h-fullcursor-pointer">
        <p class="text-2xl my-1 text-white uppercase font-principal group-hover:text-teal-950">Notaría</p>
        <hr class="border-yellow-400 group-hover:border-teal-950 group-hover:bg-teal-950 border-2 my-2" width="50">
        <p class="text-gray-300 group-hover:text-gray-800">
          Notariamos documentos legales con rapidez y confidencialidad. Confía en nosotros para dar validez a tus documentos importantes. </p>
    </div>
    </a>

    <a href="{{ $page->baseUrl}}/declaracion-jurada-affidavit">
    <div class="transition duration-150 ease-in-out group hover:scale-105 hover:bg-yellow-300 p-4 h-fullcursor-pointer">
        <p class="text-2xl my-1 text-white uppercase font-principal group-hover:text-teal-950">Affidavit</p>
        <hr class="border-yellow-400 group-hover:border-teal-950 group-hover:bg-teal-950 border-2 my-2" width="50">
        <p class="text-gray-300 group-hover:text-gray-800">
          Asegura la validez legal de tus documentos con affidavits notariales precisos. Obtén un servicio notarial confiable y seguro con nosotros. </p>
    </div>
    </a>

    <a href="{{ $page->baseUrl}}/carta-simple">
    <div class="transition duration-150 ease-in-out group hover:scale-105 hover:bg-yellow-300 p-4 h-fullcursor-pointer">
        <p class="text-2xl my-1 text-white uppercase font-principal group-hover:text-teal-950">Cartas Simples</p>
        <hr class="border-yellow-400 group-hover:border-teal-950 group-hover:bg-teal-950 border-2 my-2" width="50">
        <p class="text-gray-300 group-hover:text-gray-800">
          Servicio de cartas simples notariales con validez legal. Obtén tus documentos notariados de forma confiable y segura. </p>
    </div>
    </a>

    <a href="{{ $page->baseUrl}}/matrimonios">
    <div class="transition duration-150 ease-in-out group hover:scale-105 hover:bg-yellow-300 p-4 h-fullcursor-pointer">
        <p class="text-2xl my-1 text-white uppercase font-principal group-hover:text-teal-950">Matrimonios</p>
        <hr class="border-yellow-400 group-hover:border-teal-950 group-hover:bg-teal-950 border-2 my-2" width="50">
        <p class="text-gray-300 group-hover:text-gray-800">
          Celebra tu matrimonio civil con nuestro servicio notarial de matrimonios. Legalidad y confidencialidad garantizadas. </p>
    </div>
    </a>

    <a href="{{ $page->baseUrl}}/contratos">
    <div class="transition duration-150 ease-in-out group hover:scale-105 hover:bg-yellow-300 p-4 h-fullcursor-pointer">
        <p class="text-2xl my-1 text-white uppercase font-principal group-hover:text-teal-950">Contratos</p>
        <hr class="border-yellow-400 group-hover:border-teal-950 group-hover:bg-teal-950 border-2 my-2" width="50">
        <p class="text-gray-300 group-hover:text-gray-800">
          Garantiza la validez legal de tus contratos con nuestro servicio notarial. Obtén contratos precisos y confiables con nosotros. </p>
    </div>
    </a>


  </div>

</div>


<div class="py-8 md:py-16">
  <div class="container mx-auto">
      <div class="text-center mx-auto px-4 md:px-20 mb-6 relative z-10 ">     
        <img class="mx-auto w-60  mb-2" src="{{ $page->baseUrl }}/assets/images/licencia-new-jersey.jpg?v=1" alt="">     
          <h2 class="text-3xl md:text-4xl mb-2 font-primary uppercase">Te ayudamos a tramitar </h2>
          <h2 class="text-4xl md:text-5xl mb-2 font-primary uppercase">tu <b>ID</b> y <b>Licencia de Conducir</b> </h2>
          <h4 class="text-2xl md:text-3xl mb-2 font-primary ">Sin importar tu status migratorio.</h4>
          <h5 class="text-2xl md:text-3xl mb-8 font-primary ">Te asesoramos hasta obtener tu licencia.</h5>
          <a  href="tel:+1{{ $page->phonecity[1] ?? $page->phoneprinc[1] ?? ''}}" class="text-white bg-teal-950 text-xl font-semibold  uppercase px-8 py-3  mt-4">Contáctanos</a>
      </div>      
  </div>
</div>

  <div class="min-h-full bg-gray-200 pb-16">
    <div class="w-full bg-yellow-400 pt-16 pb-24 text-center">
        <h4 class="text-2xl md:text-3xl text-teal-950">Brindamos servicios de <b>Apostillas</b>  segun el tiempo de procesamiento.</h4>
        <p class="text-lg md:text-xl text-teal-950 mt-2">Si necesita una apostilla con urgencia, puede optar por una apostilla express para recibir el documento en un plazo más breve.</p>       
    </div>
    <div class="w-full 2xl:w-3/4 flex items-center justify-center px-8 md:px-32 lg:px-16 2xl:px-0 mx-auto -mt-8">
        <div class="w-full flex flex-col md:flex-row justify-center gap-8">
            <div class="bg-white w-full md:w-1/3 shadow-2xl rounded-lg py-4">
                <p class="text-xl text-center font-bold text-teal-900">Apostilla</p>
                <p class="text-center py-6">
                    <span class="text-4xl font-bold text-gray-700">
                        <span x-text="premiumPrice">Regular</span>
                    </span>
                </p>
                <p class="text-center border-t border-gray-300 py-8 space-y-6">
                  <span class="text-xl text-gray-600">Se procesa en un plazo de <br> <b>15 a 20 días</b>.</span>
                </p>
                <div class="flex items-center justify-center mt-6">
                    <a href="tel:+1{{ $page->phonecity[1] ?? $page->phoneprinc[1] ?? ''}}" class="bg-teal-900 hover:bg-teal-950 px-8 py-2 text-sm text-gray-200 uppercase rounded-sm font-bold transition duration-150" title="Purchase">Solicitar</a>
                </div>
            </div>
            <div class="bg-white  w-full md:w-1/3 shadow-2xl rounded-lg py-4">
                <p class="text-xl text-center font-bold text-teal-900">Apostilla</p>
                <p class="text-center py-6">
                    <span class="text-4xl font-bold text-gray-700">
                        <span x-text="proPrice">Express</span>
                    </span>
                </p>
                <p class="text-center border-t border-gray-300 py-8 space-y-6">
                  <span class="text-xl text-gray-600">Se procesa en un plazo de <br> <b>4 a 7 días</b>.</span>
                </p>
                <div class="flex items-center justify-center mt-6">
                    <a href="tel:+1{{ $page->phonecity[1] ?? $page->phoneprinc[1] ?? ''}}" class="bg-teal-900 hover:bg-teal-950 px-8 py-2 text-sm text-gray-200 uppercase rounded-sm font-bold transition duration-150" title="Purchase">Solicitar</a>
                </div>
            </div>
        </div>
    </div>
</div>










@endsection
