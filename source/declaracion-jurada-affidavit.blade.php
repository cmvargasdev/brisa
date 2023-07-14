@extends('_layouts.main')

@section('head')

<title>Declaración Jurada Affidávit en {{$page->city??'New Jersey'}} - Servicios Notariales NJ</title>

<meta name="description" content="Si necesitas hacer una 🥇Declaración Jurada o Affidávit en {{$page->city??'New Jersey'}},⭐ te ofrecemos un servicio profesional, rápido y seguro, con asesoría de contenido.">
<meta name="keywords" content="Declaración Jurada, Affidávit, {{$page->city??'New Jersey'}}">


<meta property="og:type" content="article" />
<meta property="og:title" content="Declaración Jurada Affidávit en {{$page->city??'New Jersey'}} - Servicios Notariales NJ"/>
<meta property="og:url" content="{{ $page->getUrl() }}/"/>
<meta property="og:description" content="Si necesitas hacer una Declaración Jurada o Affidávit en {{$page->city??'New Jersey'}}, te ofrecemos un servicio profesional, rápido y seguro, con asesoría de contenido." />
<meta property="og:updated_time" content="2023-06-12T08:00:44+00:00" />

<meta property="og:image" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:secure_url" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
<meta property="og:image:alt" content="Declaración Jurada Affidávit en {{$page->city??'New Jersey'}}" />
<meta property="og:locale" content="es_US" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Si necesitas hacer una Declaración Jurada o Affidávit en {{$page->city??'New Jersey'}}, te ofrecemos un servicio profesional, rápido y seguro, con asesoría de contenido." />
<meta name="twitter:title" content="Declaración Jurada Affidávit en {{$page->city??'New Jersey'}} - Servicios Notariales NJ" />
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
    "serviceType": "Declaración Jurada Affidávit en {{$page->city??'New Jersey'}}",
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
      "name": "Declaración Jurada Affidávit",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Declaración Jurada"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Affidávit"
          }
        }
      ]
    },
    "review": [
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name" : "Maximo"
          },
          "reviewBody" : "Gracias por sus servicios , excelente ,  estoy super sastifecho por su trabajo , bendiciones",
          "reviewRating" : {
            "@type" : "Rating",
            "ratingValue" : "5"
          }
        },
        {
          "@type" : "Review",
          "author" : {
            "@type" : "Person",
            "name" : "Sergio Israel Montes Mera"
          },
          "reviewBody" : "Excelente atención, realice el Servicio de Declaración Juramentada super Recomendado",
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
  "headline": "Declaración Jurada Affidávit en {{$page->city??'New Jersey'}}",
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
  "name": "Declaración Jurada Affidávit en {{$page->city??'New Jersey'}}",
  "description": "Si necesitas hacer una Declaración Jurada o Affidávit en {{$page->city??'New Jersey'}}, te ofrecemos un servicio profesional, rápido y seguro, con asesoría de contenido.",
  "image": "{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg",
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "price": "1.00",
    "priceCurrency": "USD",
    "priceValidUntil" :"2026-06-01",
    "url": "{{ $page->getUrl() }}/"
  },
  "sku": "1001994",
  "mpn": "2154",
  "brand": {
    "@type": "Brand",
    "name": "Servicios Notariales NJ"
  },
  "review": {
    "@type": "Review",
    "author": {
      "@type": "Person",
      "name": "Maximo"
    },
    "datePublished": "2023-06-12T09:00:00+08:00",
    "name": "Maximo",
    "reviewBody": "Gracias por sus servicios , excelente ,  estoy super sastifecho por su trabajo , bendiciones",
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
 $title = "Declaración Jurada Affidávit"; @endphp
@include('_layouts.title')

  <div class="container mx-auto flex flex-col pt-6 pb-32 px-6 md:flex-row-reverse">
    <section class="w-full lg:w-9/12 px-4">    

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Dónde puedo hacer una Declaración Jurada o Affidávit en {{$page->city??'New Jersey'}}?</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Si necesitas hacer una declaración jurada o affidávit en {{$page->city??'New Jersey'}}, te ofrecemos un servicio profesional, rápido, seguro y asesoría de contenido. Contamos con notarios públicos autorizados y con experiencia en la elaboración de este tipo de documentos, y te entregamos el documento notarizado y apostillado en el menor tiempo posible.</p>
      
      <p class="mt-4 text-lg md:text-xl text-slate-500">Además, te ofrecemos un precio justo y competitivo por nuestro servicio, y te garantizamos la confidencialidad y la validez de tu declaración jurada o affidávit. No dudes en contactarnos o visitarnos para solicitar tu trámite.</p>

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Qué beneficios tiene hacer una declaración jurada o affidávit con nosotros?</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Hacer una declaración jurada o affidávit con nosotros tiene muchos beneficios, entre los que se destacan:</p>
      
      <ul class="mt-8 space-y-3 font-medium">
        <li class="flex items-start lg:col-span-1">
          <div class="flex-shrink-0">
              <svg class="w-5 h-5 text-teal-900" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
          </div>
          <p class="ml-3 leading-5 text-lg text-slate-500">
            <strong>Te ahorras tiempo y dinero:</strong> no tienes que buscar ni contratar a un abogado ni a otro intermediario para hacer tu declaración jurada o affidávit. Nosotros nos encargamos de todo el proceso, desde la redacción hasta la certificación del documento.
          </p>
        </li>
        <li class="flex items-start lg:col-span-1">
          <div class="flex-shrink-0">
              <svg class="w-5 h-5 text-teal-900" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
          </div>
          <p class="ml-3 leading-5 text-lg text-slate-500">
            <strong>Te aseguras de cumplir con las normas legales:</strong> nuestro equipo de notarios públicos conoce las leyes y los requisitos que se aplican a las declaraciones juradas o affidávits en union new jersey y en otros estados. Te orientamos sobre lo que debes y no debes incluir en tu documento, y te evitamos problemas o inconvenientes futuros.
          </p>
        </li>
        <li class="flex items-start lg:col-span-1">
          <div class="flex-shrink-0">
              <svg class="w-5 h-5 text-teal-900" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
          </div>
          <p class="ml-3 leading-5 text-lg text-slate-500">
            <strong>Te brindamos un servicio personalizado y de calidad:</strong> nos adaptamos a tus necesidades y preferencias. Puedes elegir el idioma, el formato y el medio de entrega de tu declaración jurada o affidávit. Además, te atendemos con amabilidad, respeto y profesionalismo.
          </p>
        </li>
      </ul>

      <p class="mt-4 text-lg md:text-xl text-slate-500">No esperes más y haz tu declaración jurada o affidávit con nosotros. Estamos a tu disposición para ayudarte a resolver tus asuntos legales de la mejor manera. Llámanos o escríbenos para más información o para solicitar una cita.</p>
      
      @include('_layouts.contactanos')

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Que es Declaración Jurada o Affidávit?</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Una Declaración Jurada o Affidávit es un documento legal que se utiliza para declarar y afirmar bajo juramento que algo es verdadero. Se utiliza a menudo en procedimientos legales y contiene una declaración escrita y firmada que establece los hechos de un caso o asunto en particular.</p>
      <p class="mt-4 text-lg md:text-xl text-slate-500">La persona que firma la Declaración Jurada o Affidávit, llamada el "declarante", attestifica a la veracidad de los hechos declarados bajo pena de perjurio. La notarización de una Declaración Jurada o Affidávit es a menudo requerida en casos legales y financieros, como prueba de la autenticidad y veracidad de la declaración.</p>

      @include('_layouts.contactanos')
    
      <h2 class="leading-none mb-4 text-xl md:text-2xl font-josefin font-semibold">¿Que situaciones requieren un Affidávit?</h2> 
      
      
      <ul class="grid grid-cols-1 md:grid-cols-2  lg:grid-cols-3 mt-8 space-y-3 font-medium">
          @php
              $list = [
                        "Testimonios en procedimientos judiciales.",
                        "Préstamos financieros.",
                        "Verificación de identidad.",
                        "Verificación de ingresos y activos.",
                        "Transacciones de bienes raíces.",
                        "Verificación de antecedentes penales.",
                        "Prueba de residencia legal en los EE.UU.",
                        "Solicitudes de empleo.",
                        "Apoyo de paternidad.",
                        "Ciertas solicitudes de inmigración.",
                        "Solicitud de beneficios de seguro social.",
                        "Solicitud de pasaporte.",
                        "Cambio de nombre legal.",
                        "Casos de negligencia y compensación de trabajadores.",
                        "Juicios civiles.",
                        "Solicitud de beneficios de VA.",
                        "Procedimientos de quiebra.",
                        "Acusaciones criminales.",
                        "Cuestiones de propiedad intelectual y patentes.",
                        "Transacciones de negocios y fusiones.",
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
