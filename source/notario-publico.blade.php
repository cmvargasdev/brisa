@extends('_layouts.main')

@section('head')

<title>Notario Público en {{$page->city??'New Jersey'}} - Servicios Notariales NJ</title>

<meta name="description" content="Nuestra oficina cuenta con 🥇 Notarios Hispanos ⭐confiables y profesionales para satisfacer todas tus necesidades y responder tus dudas.">
<meta name="keywords" content="Notary Public Near Me, Notario Publico en {{$page->city??'New Jersey'}}">

<meta property="og:type" content="article" />
<meta property="og:title" content="Notario Público en {{$page->city??'New Jersey'}}"/>
<meta property="og:url" content="{{ $page->getUrl() }}"/>
<meta property="og:description" content="Nuestra oficina cuenta con Notarios Hispanos confiables y profesionales para satisfacer todas tus necesidades y responder tus dudas." />
<meta property="og:updated_time" content="2023-06-12T08:00:44+00:00" />

<meta property="og:image" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:secure_url" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
<meta property="og:image:alt" content="Notario Público en {{$page->city??'New Jersey'}}" />
<meta property="og:locale" content="es_US" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Nuestra oficina cuenta con Notarios Hispanos confiables y profesionales para satisfacer todas tus necesidades y responder tus dudas." />
<meta name="twitter:title" content="Notario Público en {{$page->city??'New Jersey'}} - Servicios Notariales NJ" />
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
    "serviceType": "Notario Público en {{$page->city??'New Jersey'}}",
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
      "name": "Notario Público en {{$page->city??'New Jersey'}}",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Notariar Cartas en {{$page->city??'New Jersey'}}"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Notariar Contratos y Acuerdos en {{$page->city??'New Jersey'}}"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Notariar Testamentos en {{$page->city??'New Jersey'}}"
          }
        }
      ]
    },
    "review": [
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name" : "Andres Cano"
          },
          "reviewBody" : "Excelente atención, muy buen servicio , de gran ayuda para la comunidad  en procesos notariales y servicios relacionados ,  totalmente recomendados !",
          "reviewRating" : {
            "@type" : "Rating",
            "ratingValue" : "5"
          }
        },
        {
          "@type" : "Review",
          "author" : {
            "@type" : "Person",
            "name" : "Jerry Paul"
          },
          "reviewBody" : "Highly recommended. Thank you for your quick resolution on the translation and notarized documents. Sabrina is a friendly and professional lady who can help you with all your needs!",
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
  "headline": "Notario Público en {{$page->city??'New Jersey'}}",
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
  "name": "Notario Público en {{$page->city??'New Jersey'}}",
  "description": "Nuestra oficina cuenta con Notarios Hispanos confiables y profesionales para satisfacer todas tus necesidades y responder tus dudas.",
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
      "name": "Andres Cano"
    },
    "datePublished": "2023-06-12T09:00:00+08:00",
    "name": "Andres Cano",
    "reviewBody": "Excelente atención, muy buen servicio , de gran ayuda para la comunidad  en procesos notariales y servicios relacionados ,  totalmente recomendados !",
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
$title = "Notario Público"; @endphp
@include('_layouts.title')

  <div class="container mx-auto flex flex-col pt-6 pb-32 px-6 md:flex-row-reverse">
    <section class="w-full lg:w-9/12 px-4">

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Necesitas un Notario Público en {{$page->city??'New Jersey'}}?</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Si estás buscando un notario público en {{$page->city??'New Jersey'}}, has llegado al lugar correcto. Nuestra oficina cuenta con notarios hispanos confiables y profesionales para satisfacer todas tus necesidades, altamente capacitados y experimentados en el manejo de una amplia variedad de documentos legales. </p>

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Por qué elegirnos?</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Nos esforzamos por brindar un servicio excepcional a la comunidad hispana en {{$page->city??'New Jersey'}} y garantizar que tus documentos sean notariados correctamente y a tiempo.</p>

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">Contáctanos</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Si necesitas un notario público en {{$page->city??'New Jersey'}}, no dudes en contactarnos. Estamos disponibles para ayudarte con todas tus necesidades de notaría. ¡Llámanos hoy mismo para programar una cita!</p>

      
      @include('_layouts.contactanos')

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Que es Notariar un Documento?</h2> 
      <p class="mt-4 text-lg text-slate-600">Notariar un documento es un proceso legal mediante el cual un notario público certifica que una persona ha firmado un documento de manera voluntaria, que dicha persona es quien dice ser y que comprende los alcances de lo que está firmando. Además, el notario también confirma que el documento es auténtico y que no ha sido objeto de alteraciones. </p>
      <p class="mt-4 text-lg text-slate-600">Notariar un documento es importante en muchos contextos legales y financieros , ya que confirma la validez del documento y proporciona evidencia de que la persona que lo firmó lo hizo de manera voluntaria y con pleno conocimiento de lo que estaba firmando. Es una forma de prevención del fraude y garantiza la autenticidad del documento Notariado.</p>

      <h2 class="leading-none mb-4 mt-16 text-xl md:text-2xl font-josefin font-semibold">¿Cuando se debe Notariar un Documento?</h2> 
      <p class="mt-4 text-lg text-slate-600">En los Estados Unidos, se requiere Notariar un documento en una amplia variedad de situaciones legales y financieras. Algunos ejemplos comunes incluyen la firma de documentos legales, como contratos y acuerdos, testamentos y poderes notariales, la realización de transacciones financieras, como préstamos y transferencias de propiedad, y la autenticación de documentos comerciales.</p>
      <p class="mt-4 text-lg text-slate-600">Además, los documentos que se presentan ante agencias gubernamentales, como solicitudes de pasaporte o permisos de conducir, también pueden necesitar ser Notariados. En general, cualquier documento que se necesite demostrar su legalidad, autenticidad y validez a menudo se requiere que sea Notariado en los Estados Unidos.</p>
    
      @include('_layouts.contactanos')
    
      <h2 class="leading-none mb-4 text-xl md:text-2xl font-josefin font-semibold">¿Que documentos requieren ser Notariados?</h2> 
      
      
      <ul class="grid grid-cols-1 md:grid-cols-2  lg:grid-cols-3 mt-8 space-y-3 font-medium">
          @php
              $list = [
                        "Poderes notariales",
                        "Contratos y acuerdos",
                        "Testamentos",
                        "Préstamos y otros acuerdos financieros",
                        "Transferencia de propiedades",
                        "Declaraciones juradas y afidávits",
                        "Documentos para solicitar pasaportes y visas",
                        "Documentos de adopción y custodia de menores",

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
