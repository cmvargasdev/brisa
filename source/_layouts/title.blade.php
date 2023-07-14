<header class="relative py-16 flex content-center items-center justify-center" style="min-height: 40vh;" >
    <div class="absolute top-0 w-full h-full bg-bottom bg-cover" style='background-image: url("{{ $page->baseUrl }}/assets/images/header.jpg");'>
      <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-slate-950"></span>
    </div>
    <div class="flex-auto w-full container max-w-4xl mx-auto relative">
      <div class="items-center flex flex-wrap">
        <div class="w-full lg:w-11/12 px-4 ml-auto mr-auto text-left">
          <div class="px-4">
            <h1 class="text-white text-3xl xs:text-3xl md:text-4xl xl:text-5xl font-primary uppercase">{{$title}} <span class="block text-xl md:text-2xl"> en {{$city}}</span></h1>
          <br>
           <p> <a href="tel:+1{{ $page->phonecity[1] ?? $page->phoneprinc[1] ?? ''}}" class="show-modal text-sm md:text-xl  bg-yellow-500 hover:bg-teal-950 hover:text-white tracking-wider uppercase px-2 md:px-4 py-2 rounded-sm shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
              style="transition: all 0.15s ease 0s;">Solicitar Información</a></p>
          </div>
        </div>
      </div>
    </div>    
  </header>