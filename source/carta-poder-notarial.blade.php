@extends('_layouts.main')

@section('head')

<title>Carta Poder Notarial en {{$page->city??'New Jersey'}} - Servicios Notariales NJ</title>

<meta name="description" content="Ofrecemos servicios de 🥇 Carta Poder Notarial de ⭐ Alta Calidad a Precios Competitivos ⭐ para ayudarte a realizar tus trámites legales de manera rápida y sencilla.">
<meta name="keywords" content="Carta Poder Notarial, {{$page->city??'New Jersey'}}, Carta Poder cerca de mi">

<meta property="og:type" content="article" />
<meta property="og:title" content="Carta Poder Notarial en {{$page->city??'New Jersey'}}"/>
<meta property="og:url" content="{{ $page->getUrl() }}"/>
<meta property="og:description" content="Ofrecemos servicios de Carta Poder Notarial de Alta Calidad a Precios Competitivos para ayudarte a realizar tus trámites legales de manera rápida y sencilla." />
<meta property="og:updated_time" content="2023-06-12T08:00:44+00:00" />

<meta property="og:image" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:secure_url" content="{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
<meta property="og:image:alt" content="Carta Poder Notarial en {{$page->city??'New Jersey'}}" />
<meta property="og:locale" content="es_US" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Ofrecemos servicios de Carta Poder Notarial de Alta Calidad a Precios Competitivos para ayudarte a realizar tus trámites legales de manera rápida y sencilla." />
<meta name="twitter:title" content="Carta Poder Notarial en {{$page->city??'New Jersey'}} - Servicios Notariales NJ" />
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
    "serviceType": "Carta Poder Notarial en {{$page->city??'New Jersey'}}",
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
      "name": "Carta Poder Notarial en {{$page->city??'New Jersey'}}",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Carta Poder Notarial Especial en {{$page->city??'New Jersey'}}"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Carta Poder Notarial General en {{$page->city??'New Jersey'}}"
          }
        }
      ]
    },
    "review": [
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name" : "Iker Echeverria"
          },
          "reviewBody" : "Excelente  Atención Realice un Poder para mi país y al mejor precio super recomendado.",
          "reviewRating" : {
            "@type" : "Rating",
            "ratingValue" : "5"
          }
        },
        {
          "@type" : "Review",
          "author" : {
            "@type" : "Person",
            "name" : "Irlanda Alcívar"
          },
          "reviewBody" : "Excelente atención Realice un Poder para ecuador y súper eficiente recomiendo la Notaría",
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
  "headline": "Carta Poder Notarial en {{$page->city??'New Jersey'}}",
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
  "name": "Carta Poder Notarial en {{$page->city??'New Jersey'}}",
  "description": "Ofrecemos servicios de Carta Poder Notarial de Alta Calidad a Precios Competitivos para ayudarte a realizar tus trámites legales de manera rápida y sencilla.",
  "image": "{{ $page->baseUrl }}/assets/images/servicios-notariales-nj.jpg",
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "price": "1.00",
    "priceCurrency": "USD",
    "priceValidUntil" :"2026-06-01",
    "url": "{{ $page->getUrl() }}/"
  },
  "sku": "1001991",
  "mpn": "2151",
  "brand": {
    "@type": "Brand",
    "name": "Servicios Notariales NJ"
  },
  "review": {
    "@type": "Review",
    "author": {
      "@type": "Person",
      "name": "Iker Echeverria"
    },
    "datePublished": "2023-06-12T09:00:00+08:00",
    "name": "Iker Echeverria",
    "reviewBody": "Excelente  Atención Realice un Poder para mi país y al mejor precio super recomendado.",
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
$title = "Carta Poder Notarial"; @endphp
@include('_layouts.title')

  <div class="container mx-auto flex flex-col pt-6 pb-32 px-6 md:flex-row-reverse">
    <section class="w-full lg:w-9/12 px-4">    
      
      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Necesitas una carta poder notarial en {{$page->city??'New Jersey'}}?</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Si estás buscando una carta poder notarial en {{$page->city??'New Jersey'}}, somos tu mejor opción. Ofrecemos servicios de alta calidad a precios competitivos para ayudarte a realizar tus trámites legales de manera rápida y sencilla.</p>
      
      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Cómo obtener tu carta poder notarial en {{$page->city??'New Jersey'}}?</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Obtener tu carta poder notarial en {{$page->city??'New Jersey'}} es muy fácil. Solo tienes que contactarnos y programar una cita con uno de nuestros profesionales. Ellos te guiarán en todo el proceso y te ayudarán a completar todos los documentos necesarios.</p>
      
      <p class="mt-4 text-lg md:text-xl text-slate-500">No esperes más y contáctanos para obtener tu carta poder notarial en {{$page->city??'New Jersey'}}.</p>
      
    @include('_layouts.contactanos') 

      <h2 class="leading-none my-4 text-xl md:text-2xl font-josefin font-semibold">¿Que es un Poder Notarial?</h2> 
        <p class="mt-4 text-lg md:text-xl text-slate-500">Un poder notarial es un documento legal en el que una persona autoriza a otra a actuar en su nombre en asuntos legales y financieros en situaciones específicas o durante un período de tiempo específico, según se establece en el documento.</p>
      

      <h2 class="leading-none mb-4 mt-16 text-xl md:text-2xl font-josefin font-semibold">Tipos de Poder Notarial</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Existen varios tipos de poder notarial que se ajustan a diferentes situaciones y necesidades específicas. Dos de ellos son el poder notarial especial y el poder notarial general.</p>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Un poder notarial especial es aquel que autoriza a una persona a realizar un acto o conjunto de actos específicos en nombre de otra persona. Es decir, limita la autoridad de la persona que actúa en nombre de la otra.</p>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Por otro lado, un poder notarial general es mucho más amplio y autoriza a una persona a realizar cualquier tipo de acto en nombre de otra persona, siempre y cuando dicho acto se ajuste a las leyes y regulaciones aplicables.</p>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Es importante tener en cuenta que los poderes notariales pueden variar según el país y es siempre recomendable contar con la asesoría de un abogado para determinar qué tipo de poder notarial se ajusta mejor a tus necesidades y objetivos específicos.</p>

       
    @include('_layouts.contactanos')      
      
      
      <h2 class="leading-none mb-4 text-xl md:text-2xl font-josefin font-semibold">¿Que es un Apoderado?</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Un apoderado es una persona que ha recibido autorización legal para actuar en nombre de otra persona o entidad . El acto de otorgar poderes a un apoderado se hace mediante un documento legal conocido como poder notarial o carta poder. </p>
      <p class="mt-4 text-lg md:text-xl text-slate-500">  El apoderado puede ser una persona física o jurídica y puede actuar en una amplia variedad de situaciones legales y financieras en nombre de la persona que lo ha nombrado.</p>
      
      <h2 class="leading-none mb-4 mt-16 text-xl md:text-2xl font-josefin font-semibold">¿Cuando se debe Apostillar un Poder Notarial?</h2> 
      <p class="mt-4 text-lg md:text-xl text-slate-500">Un poder notarial requiere ser apostillado si se va a utilizar en un país que es parte del Convenio de La Haya de 1961 , que establece un proceso de legalización simplificado para documentos públicos emitidos en un país miembro y que se utilizan en otro país miembro. La apostilla es una certificación que se agrega al poder notarial por una autoridad designada del estado en el que se emitió el documento.</p>
      <p class="mt-4 text-lg md:text-xl text-slate-500">Esta certificación verificada por la apostilla confirma que la firma del notario y el sello o timbre del notario son verdaderos y auténticos. Por lo tanto, si un poder notarial emitido en Estados Unidos se va a utilizar en un país que es parte del Convenio de La Haya , debe obtener una apostilla antes de su uso en el extranjero.</p>
      
     

    </section> 
    @include('_layouts.sidebar')

  </div>
@endsection
