@extends('_layouts.landing')

@section('head')
@php
    $phoneland1 = '9084099240';
    $phoneland2 = '(908)409-9240';
@endphp
<title>Traducciones - Notaría Pública en New Jersey</title>

<meta name="description" content="Somos una oficina especializada en ⭐ Trámites Notariales en Elizabeth New Jersey 🥇, comprometidos en ofrecer la mejor asesoría a migrantes hispanos.">
<meta name="keywords" content="Notary Public Near Me, Notario Publico en New Jersey">

<meta property="og:type" content="article" />
<meta property="og:site_name" content="Notaría Pública en New Jersey" />
<meta property="og:title" content="Apostillas - Notaría Pública en New Jersey"/>
<meta property="og:url" content="{{ $page->getUrl() }}"/>
<meta property="og:description" content="Somos una oficina especializada en trámites notariales en Elizabeth New Jersey, comprometidos en ofrecer la mejor asesoría a migrantes hispanos. " />
<meta property="og:updated_time" content="{{date('Y-m-d')}}T08:00:44+00:00" />


@endsection


@section('body')

@php $title = "Traducciones"; @endphp
    <div class="container mx-auto my-auto py-8 md:py-20 px-8 md:px-20 lg:px-48">
        <div class="border-l-8 border-yellow-400 px-2 md:px-8 pb-4">
            <h4 class="text-xl md:text-3xl leading-tight">Traducciones certificadas de documentos legales para uso oficial y legal.</h4>
            <h4 class="text-xl md:text-3xl leading-tight font-semibold">¡Consigue una traducción precisa y confiable con nosotros validos para tramites en USCIS!</h4>
        </div>
        
        <div class="py-8 md:py-8">
            <div class="text-center mx-auto px-4 mb-6 relative z-10 ">
                <h2 class="text-xl md:text-3xl mb-8 font-principal text-teal-900">Contáctanos sin compromiso para recibir más información.</h2>
                <a  href="tel:+1{{ $phoneland1 ?? $phoneland1 ?? ''}}" class="bg-yellow-400 text-teal-950 text-xl font-semibold  uppercase px-8 py-3  mt-4">Contáctanos</a>
            </div>
        </div>
     
    </div>
    <div class="mx-auto bg-gray-200 py-8 md:py-20 px-8 md:px-20 lg:px-28 xl:px-48">
        <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Necesitas traducir documentos importantes en {{$page->city??'New Jersey'}}?</h2>
        <p class="mt-4 text-lg md:text-xl text-slate-600">Si necesitas traducir documentos importantes en {{$page->city??'New Jersey'}}, has llegado al lugar correcto.</p>
        <p class="mt-4 text-lg md:text-xl text-slate-600">Ofrecemos servicios de traducción de alta calidad para una amplia variedad de documentos. Nos aseguramos de que cada traducción sea precisa y confiable para que puedas confiar en nuestros servicios y obtener los resultados que necesitas.Estamos capacitados y contamos con la experiencia en la traducción de documentos.</p>
        
        <div class="py-8 md:py-8">
            <div class="text-center mx-auto px-4 mb-6 relative z-10 ">
                <h2 class="text-xl md:text-3xl mb-8 font-principal text-teal-900">Contáctanos sin compromiso para recibir más información.</h2>
                <a  href="tel:+1{{ $phoneland1 ?? $phoneland1 ?? ''}}" class="bg-yellow-400 text-teal-950 text-xl font-semibold  uppercase px-8 py-3  mt-4">Contáctanos</a>
            </div>
        </div>

    <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Que documentos se pueden Traducir y Certificar por un Notario?</h2> 
    <p class="mt-4 text-lg md:text-xl text-slate-600">En Estados Unidos, se pueden traducir y certificar por un notario cualquier tipo de documento que requiera una traducción oficial y certificada para su uso en asuntos legales o financieros. Por ejemplo:</p>
      
      
    <ul class="grid grid-cols-1 md:grid-cols-2 mt-8 font-medium">
          @php
              $list = [
                "Actas de nacimiento",
                "Actas de matrimonio",
                "Certificados de defunción",
                "Licencias de conducir",
                "Documentos de inmigración",
                "Diplomas",
                "Sentencias de divorcio",
                "Testamentos",
                "Antecedentes penales",
                "Y muchos más",
              ]
            @endphp   
            @foreach($list as $item)      
                <li class="flex items-start pb-2">
                    <div class="flex-shrink-0 pt-1">
                        <svg class="w-5 h-5 text-teal-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <p class="ml-3 leading-5 text-gray-600 text-lg md:text-xl">
                    {{$item}}
                    </p>
                </li>
            @endforeach
      </ul>
    </div>
@endsection
