@extends('_layouts.landing')

@section('head')
@php
    $phoneland1 = '9084099238';
    $phoneland2 = '(908)409-9238';
@endphp
<title>Poderes - Notaría Pública en New Jersey</title>

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

@php $title = "Poderes Notariales"; @endphp
    <div class="container mx-auto my-auto py-8 md:py-20 px-8 md:px-20 lg:px-48">
        <div class="border-l-8 border-yellow-400 px-2 md:px-8 pb-4">
            <h4 class="text-xl md:text-3xl leading-tight">Obtén Poderes Generales y Especiales con nosotros para realizar trámites legales y oficiales en otro país. </h4>
            <h4 class="text-xl md:text-3xl leading-tight font-semibold">¡Garantizamos la validez de tus documentos!</h4>
        </div>
        
        <div class="py-8 md:py-8">
            <div class="text-center mx-auto px-4 mb-6 relative z-10 ">
                <h2 class="text-xl md:text-3xl mb-8 font-principal text-teal-900">Contáctanos sin compromiso para recibir más información.</h2>
                <a  href="tel:+1{{ $phoneland1 ?? $phoneland1 ?? ''}}" class="bg-yellow-400 text-teal-950 text-xl font-semibold  uppercase px-8 py-3  mt-4">Contáctanos</a>
            </div>
        </div>
     
    </div>
    <div class="mx-auto bg-gray-200 py-8 md:py-20 px-8 md:px-20 lg:px-28 xl:px-48">
        <div class="px-2 md:px-20 lg:px-48 pb-4 text-center">
            
            <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Necesitas una carta poder notarial en {{$page->city??'New Jersey'}}?</h2> 
            <p class="mt-4 text-lg md:text-xl text-slate-600">Si estás buscando una carta poder notarial en {{$page->city??'New Jersey'}}, somos tu mejor opción. Ofrecemos servicios de alta calidad a precios competitivos para ayudarte a realizar tus trámites legales de manera rápida y sencilla.</p>
            
            <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Cómo obtener tu carta poder notarial en {{$page->city??'New Jersey'}}?</h2> 
            <p class="mt-4 text-lg md:text-xl text-slate-600">Obtener tu carta poder notarial en {{$page->city??'New Jersey'}} es muy fácil. Solo tienes que contactarnos y programar una cita con uno de nuestros profesionales. Ellos te guiarán en todo el proceso y te ayudarán a completar todos los documentos necesarios.</p>
            
            <p class="mt-4 text-lg md:text-xl text-slate-600">No esperes más y contáctanos para obtener tu carta poder notarial en {{$page->city??'New Jersey'}}.</p>
            
            <div class="text-center mx-auto px-4 my-6 relative z-10 ">
                <h2 class="text-xl md:text-3xl mb-8 font-principal text-teal-900">Contáctanos sin compromiso para recibir más información.</h2>
                <a  href="tel:+1{{ $phoneland1 ?? $phoneland1 ?? ''}}" class="bg-yellow-400 text-teal-950 text-xl font-semibold  uppercase px-8 py-3  mt-4">Contáctanos</a>
            </div>

            <h2 class="leading-none mb-4 mt-16 text-xl md:text-2xl font-josefin font-semibold">¿Cuando se debe Apostillar un Poder Notarial?</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-600">Un poder notarial requiere ser apostillado si se va a utilizar en un país que es parte del Convenio de La Haya de 1961 , que establece un proceso de legalización simplificado para documentos públicos emitidos en un país miembro y que se utilizan en otro país miembro. La apostilla es una certificación que se agrega al poder notarial por una autoridad designada del estado en el que se emitió el documento.</p>
      
        </div>
    </div>
@endsection
