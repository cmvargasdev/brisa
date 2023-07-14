@extends('_layouts.landing')

@section('head')
@php
    $phoneland1 = '9084099239';
    $phoneland2 = '(908)409-9239';
@endphp
<title>Apostillas - Notaría Pública en New Jersey</title>

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

@php $title = "Apostillas"; @endphp


    <div class="container mx-auto my-auto py-8 md:py-20 px-8 md:px-20 lg:px-48">
        <div class="border-l-8 border-yellow-400 px-2 md:px-8 pb-4">
            <h4 class="text-xl md:text-3xl leading-tight">Ofrecemos Servicios de Apostilla rápidos y confiables para todo tipo de documentos. </h4>
            <h4 class="text-lg md:text-2xl leading-tight text-gray-500">Ya sea que necesites apostillar un acta de nacimiento, un certificado de matrimonio o cualquier otro documento, podemos ayudarte.</h4>
        </div>
        
        <div class="py-8 md:py-8">
            <div class="text-center mx-auto px-4 mb-6 relative z-10 ">
                <h2 class="text-xl md:text-3xl mb-8 font-principal text-teal-900">Contáctanos sin compromiso para recibir más información.</h2>
                <a  href="tel:+1{{ $phoneland1 ?? $phoneland1 ?? ''}}" class="bg-yellow-400 text-teal-950 text-xl font-semibold  uppercase px-8 py-3  mt-4">Llamar Ahora</a>
            </div>
        </div>
     
    </div>
    <div class="mx-auto bg-gray-100 py-8 md:py-20 px-8 md:px-20 lg:px-28 xl:px-48">
        <div class="px-2 md:px-20 lg:px-48 pb-4 ">
            <h4 class="text-xl md:text-2xl leading-tight font-semibold pb-2">Amplia gama de servicios de Apostilla con los mejores tiempos de entrega.</h4>
            
            <ul class="grid grid-cols-1 md:grid-cols-2 mt-8 font-medium">
                @php
                    $list = [
                        'Certificados de nacimiento',
                        'Copia de pasaporte',
                        'Documentos del coche',
                        'Certificados de matrimonio',
                        'Copia de licencia de conducir',
                        'Documentos inmobiliarios',
                        'Certificados de divorcio',
                        'Copia de DNI',
                        'Poder legal',
                        'Certificados de defunción',
                        'Certificados de Naturalización',
                        'Registros de antecedentes penales/policiales',
                        'Declaraciones juradas de estado único',
                        'Documentos de adopción',
                        'Registros de antecedentes del FBI',
                        'Escrituras y testamentos',
                        'Autorizaciones de viaje',
                        'Diplomas y Transcripciones',
                        'Documentos corporativos',
                        'Certificados de Incorporación',
                        'Certificados de buena reputación',
                        'Certificados de origen',
                        'Documentos de Marcas / Patentes',
                        'Documentos fiscales ',

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
    </div>


@endsection
