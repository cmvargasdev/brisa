@extends('_layouts.main')

@section('head')

<title>Contratos Notariados en {{$page->city??'New Jersey'}} - Servicios Notariales NJ</title>

<meta name="description" content="Si quieres realizar un 🥇 Contrato Notariado en {{$page->city??'New Jersey'}},⭐ te ofrecemos las mejores garantías de calidad, seguridad y profesionalidad.">
<meta name="keywords" content="Notary Public Near Me, Notario Publico en New Jersey">

<meta property="og:type" content="article" />
<meta property="og:title" content="Contratos Notariados en {{$page->city??'New Jersey'}} - Servicios Notariales NJ"/>
<meta property="og:url" content="{{ $page->getUrl() }}/"/>
<meta property="og:description" content="Si quieres realizar un Contrato Notariado en {{$page->city??'New Jersey'}}, te ofrecemos las mejores garantías de calidad, seguridad y profesionalidad." />
<meta property="og:updated_time" content="2023-06-12T08:00:44+00:00" />

<meta property="og:image" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:secure_url" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
<meta property="og:image:alt" content="Contratos Notariados en {{$page->city??'New Jersey'}}" />
<meta property="og:locale" content="es_US" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Si quieres realizar un Contrato Notariado en {{$page->city??'New Jersey'}}, te ofrecemos las mejores garantías de calidad, seguridad y profesionalidad." />
<meta name="twitter:title" content="Contratos Notariados en {{$page->city??'New Jersey'}} - Servicios Notariales NJ" />
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
    "serviceType": "Contratos Notariados en {{$page->city??'New Jersey'}}",
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
      "name": "Contratos Notariados",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Contratos de compraventa"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Contratos de préstamo"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Contratos de arrendamiento"
          }
        }
      ]
    },
    "review": [
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name" : "Tocho Cobos"
          },
          "reviewBody" : "Excelente servicio 100 % recomendado venga y haga sus trámites notariales pregunté por la notaría Sabrina Espinoza.",
          "reviewRating" : {
            "@type" : "Rating",
            "ratingValue" : "5"
          }
        },
        {
          "@type" : "Review",
          "author" : {
            "@type" : "Person",
            "name" : "Rommel Ruiz"
          },
          "reviewBody" : "Exelente la atención muy profesional",
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
  "headline": "Contratos Notariados en {{$page->city??'New Jersey'}}",
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
  "name": "Contratos Notariados en {{$page->city??'New Jersey'}}",
  "description": "Si quieres realizar un Contrato Notariado en {{$page->city??'New Jersey'}}, te ofrecemos las mejores garantías de calidad, seguridad y profesionalidad.",
  "image": "{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg",
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "price": "1.00",
    "priceCurrency": "USD",
    "priceValidUntil" :"2026-06-01",
    "url": "{{ $page->getUrl() }}/"
  },
  "sku": "1001993",
  "mpn": "2153",
  "brand": {
    "@type": "Brand",
    "name": "Servicios Notariales NJ"
  },
  "review": {
    "@type": "Review",
    "author": {
      "@type": "Person",
      "name": "Tocho Cobos"
    },
    "datePublished": "2023-06-12T09:00:00+08:00",
    "name": "Tocho Cobos",
    "reviewBody": "Excelente servicio 100 % recomendado venga y haga sus trámites notariales pregunté por la notaría Sabrina Espinoza.",
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
$title = "Contratos Notariados"; @endphp
@include('_layouts.title')

  <div class="container mx-auto flex flex-col pt-6 pb-32 px-6 md:flex-row-reverse">
    <section class="w-full lg:w-9/12 px-4">    

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Dónde realizar un Contrato Notariado en {{$page->city??'New Jersey'}}?</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Si quieres realizar un contrato notariado en {{$page->city??'New Jersey'}}, te ofrecemos las mejores garantías de calidad, seguridad y profesionalidad. Con nuestro servicio, podrás hacer cualquier tipo de contrato notariado (compraventa, arrendamiento, préstamo, etc.) de forma rápida y sencilla, con la intervención de un notario público experto en derecho contractual, que se encargará de redactar o revisar tu contrato, informarte sobre sus implicaciones legales, y darle validez y legalidad.</p>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Además, te ofrecemos un precio justo y competitivo, sin sorpresas ni costes adicionales, y una atención personalizada y cercana, adaptada a tus necesidades y expectativas. No lo dudes más y contacta con nosotros hoy mismo para solicitar tu cita y hacer tu contrato notariado en {{$page->city??'New Jersey'}}. </p>
  
      @include('_layouts.contactanos')

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Que es Contrato Notarial?</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Un contrato notarial es un acuerdo legal que se formaliza ante un notario público. El notario certifica la autenticidad de la firma de todas las partes involucradas y garantiza que el acuerdo cumpla con las leyes aplicables. Es común utilizar un contrato notarial para todo tipo de transacciones legales, como la compra o venta de bienes inmuebles, la transferencia de acciones, la cesión de derechos de propiedad, entre otros. </p>
      <p class="mt-4 text-lg md:text-xl text-slate-500">El contrato notarial se considera un documento legalmente vinculante y puede ser utilizado como prueba en caso de cualquier disputa o conflicto. En resumen, un contrato notarial es un documento legal que se formaliza ante un notario público para garantizar que cumple con las leyes aplicables y tiene una mayor validez legal por ser certificado por el notario.</p>

      @include('_layouts.contactanos')
    
      <h2 class="leading-none mb-4 text-xl md:text-2xl font-josefin font-semibold">¿Que Contratos Requieren ser Notariados?</h2> 
      
      
      <ul class="grid grid-cols-1 md:grid-cols-2  lg:grid-cols-3 mt-8 space-y-3 font-medium">
          @php
              $list = [
                "Compra o venta de propiedades inmobiliarias.",
                "Traspaso de acciones o propiedad de una empresa.",
                "Cesión de derechos de propiedad.",
                "Acuerdos de préstamos y financiamiento.",
                "Acuerdos de arrendamiento y contratos de renta.",
                "Acuerdos de sociedad o asociación comercial.",
                "Acuerdos de compraventa de bienes muebles.",
                "Acuerdos de manutención de menores.",
                "Acuerdos de divorcio y separación marriage.",
                "Acuerdos prenupciales y postnupciales.",
                "Acuerdos de confidencialidad y no divulgación.",
                "Liquidación de una sucesión o herencia.",
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
