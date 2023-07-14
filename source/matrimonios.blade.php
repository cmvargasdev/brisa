@extends('_layouts.main')

@section('head')

<title>Oficiante de Bodas y Matrimonios en {{$page->city??'New Jersey'}} - Servicios Notariales NJ</title>

<meta name="description" content="Te ofrecemos el servicio de 🥇Oficializar Bodas y Matrimonios en {{$page->city??'New Jersey'}},⭐ con todas las garantías legales y la mejor atención personalizada.">
<meta name="keywords" content="Notary Public Near Me, Notario Publico en New Jersey">


<meta property="og:type" content="article" />
<meta property="og:title" content="Oficiante de Bodas y Matrimonios en {{$page->city??'New Jersey'}} - Servicios Notariales NJ"/>
<meta property="og:url" content="{{ $page->getUrl() }}/"/>
<meta property="og:description" content="Te ofrecemos el servicio de 🥇Oficializar Bodas y Matrimonios en {{$page->city??'New Jersey'}},⭐ con todas las garantías legales y la mejor atención personalizada." />
<meta property="og:updated_time" content="2023-06-12T08:00:44+00:00" />

<meta property="og:image" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:secure_url" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
<meta property="og:image:alt" content="Oficiante de Bodas y Matrimonios en {{$page->city??'New Jersey'}}" />
<meta property="og:locale" content="es_US" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Te ofrecemos el servicio de 🥇Oficializar Bodas y Matrimonios en {{$page->city??'New Jersey'}},⭐ con todas las garantías legales y la mejor atención personalizada." />
<meta name="twitter:title" content="Oficiante de Bodas y Matrimonios en {{$page->city??'New Jersey'}} - Servicios Notariales NJ" />
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
    "serviceType": "Oficiante de Bodas y Matrimonios en {{$page->city??'New Jersey'}}",
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
      "name": "Oficiante de Bodas y Matrimonios",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Oficiante de Bodas"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Oficiante de Matrimonios"
          }
        }
      ]
    },
    "review": [
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name" : "Liz Macias"
          },
          "reviewBody" : "Excelente atención 100% recomendado y lo mejor con precios al alcance de nuestros bolsillos.",
          "reviewRating" : {
            "@type" : "Rating",
            "ratingValue" : "5"
          }
        },
        {
          "@type" : "Review",
          "author" : {
            "@type" : "Person",
            "name" : "Renata Virrueta baneo"
          },
          "reviewBody" : "muy buena la atención el de la señorita Sabrina, me ayudó hacer los trámites que necesitaba súper rápido, lo recomiendo al 100%!",
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
  "headline": "Oficiante de Bodas y Matrimonios en {{$page->city??'New Jersey'}}",
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
  "name": "Oficiante de Bodas y Matrimonios en {{$page->city??'New Jersey'}}",
  "description": "Te ofrecemos el servicio de Oficializar Bodas y Matrimonios en {{$page->city??'New Jersey'}}, con todas las garantías legales y la mejor atención personalizada.",
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
      "name": "Liz Macias"
    },
    "datePublished": "2023-06-12T09:00:00+08:00",
    "name": "Liz Macias",
    "reviewBody": "Excelente atención 100% recomendado y lo mejor con precios al alcance de nuestros bolsillos.",
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
$title = "Oficiante de Bodas y Matrimonios"; @endphp
@include('_layouts.title')

  <div class="container mx-auto flex flex-col pt-6 pb-32 px-6 md:flex-row-reverse">
    <section class="w-full lg:w-9/12 px-4">    
      
      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">Oficializamos Bodas y Matrimonios en {{$page->city??'New Jersey'}}</h2>
      <p class="mt-4 text-lg md:text-xl text-slate-500">¿Quieres casarte en {{$page->city??'New Jersey'}} y no sabes cómo hacerlo? ¿Buscas un servicio profesional, rápido y económico que te ayude a cumplir tu sueño? Entonces estás en el lugar correcto. Te ofrecemos el servicio de oficializar bodas y matrimonios en {{$page->city??'New Jersey'}}, con todas las garantías legales y la mejor atención personalizada.</p>
      @include('_layouts.contactanos')

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">Servicio de Matrimonios</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Como notario público, estamos autorizados por el estado para certificar su matrimonio y asegurarnos de que se cumplan todos los requisitos legales. Nos aseguramos de que todas las partes involucradas firmen los documentos necesarios y de que todas las formalidades se cumplan adecuadamente.</p>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Ofrecemos servicios de matrimonio legal en todo el estado de New Jersey. Con nuestra experiencia y profesionalismo, podemos ayudarlo a asegurarnos de que su matrimonio sea una experiencia sin problemas y completamente legal. </p>
      @include('_layouts.contactanos')
    
      <p class="mt-4 text-lg md:text-xl text-slate-500">Ya sea que busque un matrimonio civil o religioso, estamos aquí para ayudarlo. Ofrecemos citas flexibles para adaptarse a su horario y estamos disponibles para viajar a su ubicación si es necesario.</p>
      <p class="mt-4 text-lg md:text-xl text-slate-500">¡No permita que la burocracia se interponga en el camino de su feliz matrimonio! Comuníquese con nosotros hoy para programar una consulta o para obtener más información sobre nuestros servicios de matrimonio notarial en New Jersey.</p>
      

    </section> 
    @include('_layouts.sidebar')

  </div>
@endsection
