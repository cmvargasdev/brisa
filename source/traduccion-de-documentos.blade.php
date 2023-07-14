@extends('_layouts.main')

@section('head')

<title>Traducción de Documentos en {{$page->city??'New Jersey'}} - Servicios Notariales NJ</title>

<meta name="description" content="Ofrecemos servicios de 🥇Traducción de alta calidad para una amplia variedad de documentos.⭐ Nos aseguramos de que cada traducción sea precisa y confiable.">
<meta name="keywords" content="Traducción de Documentos Near Me, Traducción de Licencia, Traducción de Actas">


<meta property="og:type" content="article" />
<meta property="og:title" content="Traducción de Documentos en {{$page->city??'New Jersey'}}"/>
<meta property="og:url" content="{{ $page->getUrl() }}"/>
<meta property="og:description" content="Ofrecemos servicios de 🥇Traducción de alta calidad para una amplia variedad de documentos.⭐ Nos aseguramos de que cada traducción sea precisa y confiable." />
<meta property="og:updated_time" content="2023-06-12T08:00:44+00:00" />

<meta property="og:image" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:secure_url" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
<meta property="og:image:alt" content="Traducción de Documentos en {{$page->city??'New Jersey'}}" />
<meta property="og:locale" content="es_US" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Ofrecemos servicios de 🥇Traducción de alta calidad para una amplia variedad de documentos.⭐ Nos aseguramos de que cada traducción sea precisa y confiable." />
<meta name="twitter:title" content="Traducción de Documentos en {{$page->city??'New Jersey'}} - Servicios Notariales NJ" />
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
    "serviceType": "Traducción de Documentos en {{$page->city??'New Jersey'}}",
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
      "name": "Traducción de Documentos en {{$page->city??'New Jersey'}}",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Traducción de Actas de nacimiento en {{$page->city??'New Jersey'}}"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Traducción de Licencias de conducir en {{$page->city??'New Jersey'}}"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Traducción de Actas de matrimonio  en {{$page->city??'New Jersey'}}"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Traducción de Diplomas en {{$page->city??'New Jersey'}}"
          }
        }
      ]
    },
    "review": [
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name" : "Monica johanna LadinoHernández"
          },
          "reviewBody" : "Me fue muy bien en la traducción y en la asesoría.",
          "reviewRating" : {
            "@type" : "Rating",
            "ratingValue" : "5"
          }
        },
        {
          "@type" : "Review",
          "author" : {
            "@type" : "Person",
            "name" : "Moises David"
          },
          "reviewBody" : "Excelente atención en Traducciones, super recomendado",
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
  "headline": "Traducción de Documentos en {{$page->city??'New Jersey'}}",
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
  "name": "Traducción de Documentos en {{$page->city??'New Jersey'}}",
  "description": "Ofrecemos servicios de Traducción de alta calidad para una amplia variedad de documentos. Nos aseguramos de que cada traducción sea precisa y confiable.",
  "image": "{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg",
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "price": "1.00",
    "priceCurrency": "USD",
    "priceValidUntil" :"2026-06-01",
    "url": "{{ $page->getUrl() }}/"
  },
  "sku": "1001995",
  "mpn": "2155",
  "brand": {
    "@type": "Brand",
    "name": "Servicios Notariales NJ"
  },
  "review": {
    "@type": "Review",
    "author": {
      "@type": "Person",
      "name": "Monica johanna LadinoHernández"
    },
    "datePublished": "2023-06-12T09:00:00+08:00",
    "name": "Monica johanna LadinoHernández",
    "reviewBody": "Me fue muy bien en la traducción y en la asesoría.",
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
$title = "Traducción de Documentos"; @endphp
@include('_layouts.title')

  <div class="container mx-auto flex flex-col pt-6 pb-32 px-6 md:flex-row-reverse">
    <section class="w-full lg:w-9/12 px-4">    

      
      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Necesitas traducir documentos importantes en {{$page->city??'New Jersey'}}?</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Si necesitas traducir documentos importantes en {{$page->city??'New Jersey'}}, has llegado al lugar correcto.</p>

      <p class="mt-4 text-lg md:text-xl text-slate-500">Ofrecemos servicios de traducción de alta calidad para una amplia variedad de documentos. Nos aseguramos de que cada traducción sea precisa y confiable para que puedas confiar en nuestros servicios y obtener los resultados que necesitas.Estamos capacitados y contamos con la experiencia en la traducción de documentos.</p>

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">Traducciones precisas y confiables</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Somos profesionales y estamos altamente capacitados y con experiencia en la traducción de documentos. Nos aseguramos de que cada traducción sea precisa y confiable para que puedas confiar en nuestros servicios.</p>

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">Servicio rápido y eficiente</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Entendemos que a veces necesitas traducciones rápidas. Por eso, ofrecemos un servicio rápido y eficiente para que puedas obtener tus documentos traducidos en el menor tiempo posible.</p>
      
      <p class="mt-4 text-lg md:text-xl text-slate-500">¿Listo para comenzar? ¡Contáctanos hoy mismo para obtener más información sobre nuestros servicios de traducción de documentos en {{$page->city??'New Jersey'}}!</p>

      @include('_layouts.contactanos')


      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Que es una Traducción Certificada?</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Es la traducción oficial de un documento que ha sido certificada por un notario público para su uso en asuntos legales o financieros. Esto significa que un notario público ha certificado que la traducción es precisa y se ha completado de manera imparcial y objetiva, y que dicha certificación incluye la firma y sello oficial del notario. </p>
       
      <h2 class="leading-none mb-4 mt-16 text-xl md:text-2xl font-josefin font-semibold">¿Cuando se Requiere una Traducción Certificada?</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Las traducciones certificadas son a menudo requeridas para documentos importantes como actas de nacimiento, diplomas y certificados de matrimonio cuando se utilizan en procedimientos legales o financieros ante tribunales, embajadas, universidades y otros organismos oficiales.</p>

    @include('_layouts.contactanos')
    <h2 class="leading-none mb-4 text-xl md:text-2xl font-josefin font-semibold">¿Que documentos se pueden Traducir y Certificar por un Notario?</h2> 
    <p class="mt-4 text-lg md:text-xl text-slate-500">En Estados Unidos, se pueden traducir y certificar por un notario cualquier tipo de documento que requiera una traducción oficial y certificada para su uso en asuntos legales o financieros. Por ejemplo:</p>
      
      
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

    </section> 
    @include('_layouts.sidebar')

  </div>
@endsection
