@extends('_layouts.main')

@section('head')

<title>Apostilla de Documentos en {{$page->city??'New Jersey'}} - Servicios Notariales NJ</title>

<meta name="description" content="¿Necesitas Apostillar un Documento en {{$page->city??'New Jersey'}}? 🥇 Ofrecemos Servicios de Apostilla ⭐rápidos y confiables ⭐para todo tipo de documentos.">
<meta name="keywords" content="Apostilla de Documentos, Apostilla near me, Apostilla cerca de mi, Apostilla en {{$page->city??'New Jersey'}}">

<meta property="og:type" content="article" />
<meta property="og:title" content="Apostilla de Documentos en {{$page->city??'New Jersey'}} - Servicios Notariales NJ"/>
<meta property="og:url" content="{{ $page->getUrl() }}/"/>
<meta property="og:description" content="¿Necesitas Apostillar un Documento en {{$page->city??'New Jersey'}}? Ofrecemos Servicios de Apostilla rápidos y confiables para todo tipo de documentos." />
<meta property="og:updated_time" content="2023-06-12T08:00:44+00:00" />

<meta property="og:image" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:secure_url" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
<meta property="og:image:alt" content="Apostilla de Documentos en {{$page->city??'New Jersey'}}" />
<meta property="og:locale" content="es_US" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="¿Necesitas Apostillar un Documento en {{$page->city??'New Jersey'}}? 🥇 Ofrecemos Servicios de Apostilla ⭐rápidos y confiables ⭐para todo tipo de documentos." />
<meta name="twitter:title" content="Apostilla de Documentos en {{$page->city??'New Jersey'}} - Servicios Notariales NJ" />
<meta name="twitter:site" content="@Servicios_Notariales_NJ" />
<meta name="twitter:image" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta name="twitter:creator" content="@Servicios_Notariales_NJ" />

<meta name="geo.region" content="{{ $page->region ??'US-NJ'}}" />
<meta name="geo.placename" content="{{ $page->city ?? 'Union' }}" />
<meta name="geo.position" content="{{ $page->lat ?? '40.69797'}};{{$page->long ?? '-74.27717' }}" />
<meta name="ICBM" content="{{ $page->lat ?? '40.69797'}}, {{$page->long ?? '-74.27717' }}" />

<script type="application/ld+json">[
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Apostilla de Documentos en {{$page->city??'New Jersey'}}",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Servicios Notariales NJ",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2162 Morris Ave",
        "addressLocality": "Union",
        "addressRegion": "NJ"
      },      
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "{{ $page->lat ?? '40.69797'}}",
        "longitude": "{{$page->long ?? '-74.27717' }}"
      },
      "url": "{{ $page->getUrl() }}/"
    },
    "areaServed": {
      "@type": "City",
      "name": "{{$page->city??'New Jersey'}}"
    },
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Servicios de Apostilla",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Apostilla de actas de nacimiento"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Apostilla de certificados de matrimonio"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Apostilla de Carta Poder Notarial"
          }
        }
      ]
    },
    "review": [
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name" : "Genesis Quebrada Henao"
          },
          "reviewBody" : "Realice un servicio de apostilla, me fue excelente en el proceso. Muy recomendado.",
          "reviewRating" : {
            "@type" : "Rating",
            "ratingValue" : "5"
          }
        },
        {
          "@type" : "Review",
          "author" : {
            "@type" : "Person",
            "name" : "Luis Meza"
          },
          "reviewBody" : "Excelente servicio, los tiempos son perfectos, y la atención de maravilla.",
          "reviewRating" : {
            "@type" : "Rating",
            "ratingValue" : "5"
          }
        }
      ]

},

{
  "@context": "https://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "{{ $page->getUrl() }}/"
  },
  "headline": "Apostilla de Documentos en {{$page->city??'New Jersey'}}",
  "image": "{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg",
  "datePublished": "2023-06-12T09:00:00+08:00",
  "dateModified": "2023-06-12T10:20:00+08:00",
  "author": {
    "@type": "Person",
    "name": "Sabrina Espinoza",
    "url": "{{ $page->getUrl() }}/notario-publico/"
  }
},
{
  "@context": "https://schema.org",
  "@type": "Product",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "reviewCount": "87"
  },
  "description": "¿Necesitas Apostillar un Documento en {{$page->city??'New Jersey'}}? Ofrecemos Servicios de Apostilla rápidos y confiables para todo tipo de documentos.",
  "name": "Apostilla de Documentos en {{$page->city??'New Jersey'}}",
  "image": "{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg",
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "price": "1.00",
    "priceCurrency": "USD",
    "priceValidUntil" :"2026-06-01",
    "url": "{{ $page->getUrl() }}/"
  },
  "sku": "1001990",
  "mpn": "2150",
  "brand": {
    "@type": "Brand",
    "name": "Servicios Notariales NJ"
  },
  "review": {
    "@type": "Review",
    "author": {
      "@type": "Person",
      "name": "Genesis Quebrada Henao"
    },
    "datePublished": "2023-06-12T09:00:00+08:00",
    "name": "Genesis Quebrada Henao",
    "reviewBody": "Realice un servicio de apostilla, me fue excelente en el proceso. Muy recomendado.",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": "5",
      "bestRating": "5"
    }
  }
}
]</script>

@endsection


@section('body')

@php 
  $city = $page->city??'New Jersey'; 
  $title = "Apostilla de Documentos"; 
@endphp
@include('_layouts.title')

  <div class="container mx-auto flex flex-col pt-6 pb-32 px-6 md:flex-row-reverse">
    <section class="w-full lg:w-9/12 px-4">    
      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">Servicios de apostilla rápidos y confiables</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">¿Necesitas Apostillar un Documento en {{$page->city??'New Jersey'}}? 🥇 Ofrecemos Servicios de Apostilla ⭐rápidos y confiables ⭐para todo tipo de documentos.</p>



      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">Profesionales con amplia experiencia en el proceso de apostilla</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Nuestro equipo de profesionales tiene amplia experiencia en el proceso de apostilla y estamos comprometidos a brindarte el mejor servicio posible. Ya sea que necesites apostillar un acta de nacimiento, un certificado de matrimonio o cualquier otro documento, podemos ayudarte.</p>

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">Hacemos el proceso de apostilla fácil y sencillo para ti</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">En Servicios Notariales NJ entendemos que el proceso de apostilla puede ser confuso y estresante. Por eso, nos esforzamos por hacerlo lo más fácil y sencillo posible para ti. Nos encargamos de todo el proceso, desde la verificación de los documentos hasta la entrega de la apostilla.</p>

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">Contáctanos hoy mismo para obtener más información</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Si estás buscando un servicio de apostilla confiable en Elizabeth, New Jersey, no busques más. En Servicios Notariales NJ estamos aquí para ayudarte. Contáctanos hoy mismo para obtener más información sobre nuestros servicios y cómo podemos ayudarte.</p>


      @include('_layouts.contactanos')


      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Que es la Apostilla?</h2> 
        <p class="mt-4 text-lg md:text-xl text-slate-500">Una apostilla es un certificado adjunto a un documento oficial (por ejemplo, un certificado de nacimiento o matrimonio) que certifica:</p>
        <ul class="mt-8 space-y-3 font-medium">
          <li class="flex items-start lg:col-span-1">
              <div class="flex-shrink-0">
                  <svg class="w-5 h-5 text-teal-900" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
              </div>
              <p class="ml-3 leading-5 text-gray-600">
                La autenticidad de la firma del funcionario público que firmó el documento.
              </p>
          </li>
          <li class="flex items-start mt-5 lg:col-span-1 lg:mt-0">
              <div class="flex-shrink-0">
                  <svg class="w-5 h-5 text-teal-900" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
              </div>
              <p class="ml-3 leading-5 text-gray-600">
                  La capacidad en que actuó ese funcionario público.
              </p>
          </li>
          <li class="flex items-start mt-5 lg:col-span-1 lg:mt-0">
              <div class="flex-shrink-0">
                  <svg class="w-5 h-5 text-teal-900" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
              </div>
              <p class="ml-3 leading-5 text-gray-600">
                  La autenticidad del sello (o sello) colocado en el documento.
              </p>
          </li>
      </ul>

      <h2 class="leading-none mb-4 mt-16 text-xl md:text-2xl font-josefin font-semibold">¿Porque es Necesaria la Apostilla?</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Para que un documento emitido en un país pueda ser reconocido en otro país, dicho documento debe estar legalizado o autenticado. Para los países que son miembros de la Convención de La Haya de 1961 que suprime el requisito de legalización de los documentos públicos extranjeros, este proceso de legalización se ha simplificado. Bajo la Convención de La Haya sobre Apostilla, los países signatarios han acordado reconocer los documentos oficiales de cada uno si tienen una Apostilla.        </p>

       
    @include('_layouts.contactanos')

      
      
      
      <h2 class="leading-none mb-4 text-xl md:text-2xl font-josefin font-semibold">¿Cuáles Documentos Necesitan ser Apostillados?</h2> 
      
      <ul class="grid grid-cols-1 md:grid-cols-2 mt-8 font-medium">
          @php
              $list = [
                "Certificados de nacimiento",
                "Copia de pasaporte",
                "Documentos del coche",
                "Certificados de matrimonio",
                "Copia de licencia de conducir",
                "Documentos inmobiliarios",
                "Certificados de divorcio",
                "Copia de DNI",
                "Poder legal",
                "Certificados de defunción",
                "Certificados de Naturalización",
                "Registros de antecedentes penales/policiales",
                "Declaraciones juradas de estado único",
                "Documentos de adopción",
                "Registros de antecedentes del FBI",
                "Escrituras y testamentos",
                "Autorizaciones de viaje",
                "Diplomas y Transcripciones",
                "Documentos corporativos",
                "Certificados de Incorporación",
                "Certificados de buena reputación",
                "Certificados de origen",
                "Documentos de Marcas / Patentes",
                "Documentos fiscales"
              ]
          @endphp   
          @foreach($list as $item)
            <li class="flex items-start lg:col-span-1">
              <div class="flex-shrink-0">
                  <svg class="w-5 h-5 text-teal-900" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
              </div>
              <p class="ml-3 leading-5 text-gray-600">
                {{$item}}
              </p>
            </li>
            @endforeach
      </ul>

    </section> 
    @include('_layouts.sidebar')

  </div>
@endsection
