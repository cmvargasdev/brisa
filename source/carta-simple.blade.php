@extends('_layouts.main')

@section('head')

<title>Carta Simple Notariada en {{$page->city??'New Jersey'}} - Servicios Notariales NJ</title>

<meta name="description" content="Podemos ayudarle a redactar y certificar su 🥇 Carta Simple Notariada en {{$page->city??'New Jersey'}} ⭐, de acuerdo con sus necesidades y objetivos.">
<meta name="keywords" content="Carta Simple Notariada, Carta Simple,{{$page->city??'New Jersey'}}">


<meta property="og:type" content="article" />
<meta property="og:title" content="Carta Simple Notariada en {{$page->city??'New Jersey'}} - Servicios Notariales NJ"/>
<meta property="og:url" content="{{ $page->getUrl() }}/"/>
<meta property="og:description" content="Podemos ayudarle a redactar y certificar su Carta Simple Notariada en {{$page->city??'New Jersey'}}, de acuerdo con sus necesidades y objetivos." />
<meta property="og:updated_time" content="2023-06-12T08:00:44+00:00" />

<meta property="og:image" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:secure_url" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
<meta property="og:image:alt" content="Carta Simple Notariada en {{$page->city??'New Jersey'}}" />
<meta property="og:locale" content="es_US" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Podemos ayudarle a redactar y certificar su Carta Simple Notariada en {{$page->city??'New Jersey'}}, de acuerdo con sus necesidades y objetivos." />
<meta name="twitter:title" content="Carta Simple Notariada en {{$page->city??'New Jersey'}} - Servicios Notariales NJ" />
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
    "serviceType": "Carta Simple Notariada en {{$page->city??'New Jersey'}}",
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
      "name": "Carta Simple Notariada",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Notificación legal"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Cambio de dirección"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Cancelación o rescisión de un contrato"
          }
        }
      ]
    },
    "review": [
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name" : "Osciel Lara"
          },
          "reviewBody" : "I highly recommend Sabrina she's Friendly, Professional, Incredibly Flexible, And Fair.",
          "reviewRating" : {
            "@type" : "Rating",
            "ratingValue" : "5"
          }
        },
        {
          "@type" : "Review",
          "author" : {
            "@type" : "Person",
            "name" : "Alessandro Alejos"
          },
          "reviewBody" : "Hacen un trabajo Excelente y son súper profesionales, los recomiendo",
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
  "headline": "Carta Simple Notariada en {{$page->city??'New Jersey'}}",
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
  "name": "Carta Simple Notariada en {{$page->city??'New Jersey'}}",
  "description": "Podemos ayudarle a redactar y certificar su Carta Simple Notariada en {{$page->city??'New Jersey'}}, de acuerdo con sus necesidades y objetivos.",
  "image": "{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg",
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "price": "1.00",
    "priceCurrency": "USD",
    "priceValidUntil" :"2026-06-01",
    "url": "{{ $page->getUrl() }}/"
  },
  "sku": "1001992",
  "mpn": "2152",
  "brand": {
    "@type": "Brand",
    "name": "Servicios Notariales NJ"
  },
  "review": {
    "@type": "Review",
    "author": {
      "@type": "Person",
      "name": "Osciel Lara"
    },
    "datePublished": "2023-06-12T09:00:00+08:00",
    "name": "Osciel Lara",
    "reviewBody": "I highly recommend Sabrina she's Friendly, Professional, Incredibly Flexible, And Fair.",
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
 $title = "Carta Simple"; @endphp
@include('_layouts.title')

  <div class="container mx-auto flex flex-col pt-6 pb-32 px-6 md:flex-row-reverse">
    <section class="w-full lg:w-9/12 px-4">

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Dónde puedo encontrar ayuda profesional para hacer una Carta Simple Notariada en {{$page->city??'New Jersey'}}?</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Podemos ayudarle a redactar y certificar su Carta Simple Notariada en {{$page->city??'New Jersey'}}, de acuerdo con sus necesidades y objetivos.</p>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Somos una empresa especializada en servicios notariales y legales para la comunidad hispana, contamos con la experiencia y la recomendación de clientes satisfechos. Le ofrecemos un servicio rápido, seguro y económico, con atención personalizada y en su idioma. No lo dude más y contáctanos. Estaremos encantados de atenderle y resolver sus dudas. </p>
      @include('_layouts.contactanos')
      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Que es una Carta Simple Notarial?</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Una carta notarial es un tipo de comunicación oficial que constata la notificación de un hecho o información específicos a través de un notario público. Este tipo de carta se utiliza a menudo en situaciones legales y administrativas para garantizar la autenticidad y validez del envío y recepción de la información contenida en la carta.</p>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Al ser certificada por un notario público, la carta notarial tiene una mayor validez legal y puede ser utilizada como evidencia en diferentes tipos de procedimientos legales, si es necesario. Además, una carta notarial también puede ser utilizada para reclamar pagos, exponer una posición en una disputa, o para otros fines similares. </p>
      <p class="mt-4 text-lg md:text-xl text-slate-500">En resumen, una carta notarial tiene un valor legal importante y las notificaciones hechas a través de ella son consideradas jurídicamente válidas.</p>
      
      @include('_layouts.contactanos')
    
      <h2 class="leading-none mb-4 text-xl md:text-2xl font-josefin font-semibold">¿Que situaciones requieren una Carta Simple Notarial?</h2> 
      
      
      <ul class="grid grid-cols-1 md:grid-cols-2  lg:grid-cols-3 mt-8 space-y-3 font-medium">
          @php
              $list = [
                        "Notificación legal de una disputa comercial o de deudas pendientes.",
                        "Transferencia o cesión de derechos de propiedad.",
                        "Cancelación o rescisión de un contrato.",
                        "Confirmación de información o cambio de dirección.",
                        "Notificación de incumplimiento de obligaciones contractuales.",
                        "Notificación de violación de derechos de autor o propiedad intelectual.",
                        "Confirmación de identidad o autorización de acciones.",
                        "Autorización o permiso para un menor de edad para viajar sin uno o ambos padres.",
                        "Afirmación de la veracidad de una declaración o información.",
                        "Preparación o cobro de pagos adeudados.",
                        "Renuncia o ratificación de derechos legales.",
                        "Notificación de cambio en el estado civil."
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

      
      <h2 class="leading-none mb-4 text-xl md:text-2xl font-josefin font-semibold">¿Cómo se hace una Carta Simple Notariada en {{$page->city??'New Jersey'}}?</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Para hacer una carta simple notariada en {{$page->city??'New Jersey'}}, se puede seguir el siguiente proceso:</p>

      
      <ul class="mt-8 space-y-3 font-medium">
        <li class="flex items-start lg:col-span-1">
          <div class="flex-shrink-0">
              <svg class="w-5 h-5 text-teal-900" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
          </div>
          <p class="ml-3 leading-5 text-lg text-slate-500">
            Redactar la carta simple con los datos y hechos esenciales que se quieren comunicar. La carta debe ser clara, precisa y concisa.
          </p>
        </li>
        <li class="flex items-start lg:col-span-1">
          <div class="flex-shrink-0">
              <svg class="w-5 h-5 text-teal-900" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
          </div>
          <p class="ml-3 leading-5 text-lg text-slate-500">
            Asistir a nuestras oficinas con un documento de identidad válido para que un notario público certifique su carta.
          </p>
        </li>
        <li class="flex items-start lg:col-span-1">
          <div class="flex-shrink-0">
              <svg class="w-5 h-5 text-teal-900" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
          </div>
          <p class="ml-3 leading-5 text-lg text-slate-500">
            Pagar el costo del servicio. Puede contactarnos sin compromiso y consultar nuestros costos.
          </p>
        </li>
      </ul>



    </section> 
    @include('_layouts.sidebar')

  </div>
@endsection
