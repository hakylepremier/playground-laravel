@php
  $videoAdded = false;
  $featuresAdded = false;

  $pendingFeatures = [
      [
          'name' => 'A pending feature',
          'description' => 'A description of a feature yet to be added.',
      ],
  ];

  $completedFeatures = [
      [
          'name' => 'A completed feature',
          'description' => 'A description of the completed feature',
      ],
  ];

  $actions = [
      [
          'name' =>
              'Learn more about the project, like what technology is being used, how it\'s being developed and many more',
          'atext' => 'here',
          'href' => 'https://humphreyyeboah.com/projects/playgruound',
      ],
      // [
      //     'name' => 'Try out the features with a dummy account',
      //     'atext' => 'here',
      //     'href' => '/login',
      // ],
      // [
      //     'name' => 'Explore the list of features added and planned',
      //     'atext' => 'here',
      //     'href' => '#features',
      // ],
      // [
      //     'name' => 'Watch a Youtube video walkthrough of the features that have been added thus far',
      //     'atext' => 'here',
      //     'href' => '#video-walkthrough',
      // ],
  ];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Playground</title>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ Vite::asset('resources/images/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32"
    href="{{ Vite::asset('resources/images/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16"
    href="{{ Vite::asset('resources/images/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ Vite::asset('resources/images/favicon/site.webmanifest') }}">

  <!-- SVG -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <!-- -->

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <script src="//unpkg.com/alpinejs" defer></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    [x-cloak] {
      display: none !important;
    }
  </style>
</head>

<body class="bg-white">
  <main class="text-slate-600 ">
    <header
      class="relative flex flex-col items-center justify-center w-full min-h-screen gap-4 px-8 py-10 border-b-2 border-gray-200 sm:py-24 font-poppins">
      <nav class="fixed top-0 right-0 z-20 flex flex-col items-end gap-2 p-4 px-4 sm:p-6 text-end sm:block sm:space-x-2"
        x-data="{ expanded: false }">
        @auth
          <a href="{{ url('/dashboard') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 relative top-0 left-0 active:top-1 active:left-1 transition-all ease-in focus:outline focus:outline-2 focus:rounded-3xl focus:outline-teal-400 bg-gray-200 px-8 py-2 hover:bg-white active:shadow-[6px_6px_1px_rgba(15,_118,_110,_1),_0_10px_20px_rgba(204,_204,_204,_1)] hover:shadow-[10px_10px_1px_rgba(23,_169,_148,_1),_0_10px_20px_rgba(204,_204,_204,_1)] rounded-3xl shadow-[10px_10px_1px_rgba(15,_118,_110,_1),_0_10px_20px_rgba(204,_204,_204,_1)]"
            wire:navigate>Dashboard</a>
        @else
          <button type="button" @click="expanded = !expanded"
            class="font-semibold text-gray-600 hover:text-gray-900 relative top-0 left-0 active:top-1 active:left-1 transition-all ease-in focus:outline focus:outline-2 focus:rounded-3xl focus:outline-teal-400 bg-gray-200 px-4 py-2 hover:bg-white active:shadow-[6px_6px_1px_rgba(15,_118,_110,_1),_0_10px_20px_rgba(204,_204,_204,_1)] hover:shadow-[10px_10px_1px_rgba(23,_169,_148,_1),_0_10px_20px_rgba(204,_204,_204,_1)] rounded-3xl shadow-[10px_10px_1px_rgba(15,_118,_110,_1),_0_10px_20px_rgba(204,_204,_204,_1)] sm:hidden block">
            <i class="fa-solid" :class="expanded ? 'fa-xmark' : 'fa-bars'"></i>
            {{-- <i class="fa-solid fa-bars"></i> --}}
            {{-- <i class="transition-all fa-solid" :class="openMenu ? 'translate-x-0' : 'translate-x-full'" expanded ? "fa-xmark" : "fa-bars" }`} /> --}}
          </button>
          <div class="relative">
            <div class="absolute top-0 flex flex-col gap-4 py-4 space-x-2 transition-all sm:block sm:static"
              :class="expanded ? 'right-0' : '-right-40'">
              <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 relative top-0 left-0 active:top-1 active:left-1 transition-all ease-in focus:outline focus:outline-2 focus:rounded-3xl focus:outline-teal-400 bg-gray-200 px-8 py-2 hover:bg-white active:shadow-[6px_6px_1px_rgba(15,_118,_110,_1),_0_10px_20px_rgba(204,_204,_204,_1)] hover:shadow-[10px_10px_1px_rgba(23,_169,_148,_1),_0_10px_20px_rgba(204,_204,_204,_1)] rounded-3xl shadow-[10px_10px_1px_rgba(15,_118,_110,_1),_0_10px_20px_rgba(204,_204,_204,_1)]"
                wire:navigate>Log in</a>
              {{-- // HACK: removes register link from production --}}
              @if (Route::has('register'))
                <a href="{{ route('register') }}"
                  class="font-semibold text-gray-600 hover:text-gray-900 relative top-0 left-0 active:top-1 active:left-1 transition-all ease-in focus:outline focus:outline-2 focus:rounded-3xl focus:outline-teal-400 bg-gray-200 px-8 py-2 hover:bg-white active:shadow-[6px_6px_1px_rgba(15,_118,_110,_1),_0_10px_20px_rgba(204,_204,_204,_1)] hover:shadow-[10px_10px_1px_rgba(23,_169,_148,_1),_0_10px_20px_rgba(204,_204,_204,_1)] rounded-3xl shadow-[10px_10px_1px_rgba(15,_118,_110,_1),_0_10px_20px_rgba(204,_204,_204,_1)]"
                  wire:navigate>Register</a>
              @endif
            @endauth
          </div>
        </div>
      </nav>
      <div class="z-10">

        <h1 class="max-w-3xl mx-auto text-6xl font-bold text-center text-teal-700 font-merriweather ">
          Add a random title
        </h1>
        <div class="max-w-3xl pt-2 mx-auto">
          <p class="pb-6 text-xl text-center text-slate-600 font-inter">
            This website is currently still under development hence this placeholder homepage but you can:
          </p>
          <ul class="flex flex-col gap-4 rounded-lg font-inter">
            @foreach ($actions as $action)
              <li
                class="px-8 py-4 text-center bg-white rounded-xl shadow-[10px_10px_1px_rgba(15,_118,_110,_1),_0_10px_20px_rgba(204,_204,_204,_1)]">
                {{ $action['name'] }}
                <a href="{{ $action['href'] }}" class="text-teal-500 border-b-2 border-teal-500">
                  {{ $action['atext'] }}
                </a>
                .
              </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div style="background-image: url('{{ Vite::asset('resources/images/bg-image.webp') }}')"
        class="absolute top-0 left-0 w-full h-full bg-cover md:bg-center blur bg-[left_-17rem_top_-2rem] bg-none position z-0 ">
      </div>
    </header>
    {{-- <section
            class="flex flex-col items-center justify-center w-full min-h-screen px-8 py-16 bg-gray-100 lg:px-6">
            <h2>Gallery</h2>
        </section> --}}
    @if ($videoAdded)
      <section class="flex flex-col items-center justify-center w-full py-32 sm:min-h-screen sm:py-16"
        id="video-walkthrough">
        <h2 class="pb-4 text-3xl font-bold text-center text-teal-700 font-merriweather">
          Video walkthrough
        </h2>
        <iframe // width="1035" // height="582"
          class="max-w-3xl md:w-2/3 w-4/5  aspect-video p-4 bg-slate-400 rounded-lg shadow-[0px_10px_1px_rgba(211,_211,_211,_1),_0_10px_20px_rgba(204,_204,_204,_1)]"
          src="https://www.youtube.com/embed/e2nkq3h1P68" title="Learn Accessibility - Full a11y Tutorial"
          frameBorder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerPolicy="strict-origin-when-cross-origin" allowFullScreen />
        <details class="w-full mt-6 transition-all duration-300 ease-in-out">
          <summary
            class="flex items-center justify-between w-4/5 max-w-3xl gap-4 p-4 m-auto list-none transition-all duration-300 ease-in-out bg-gray-200 rounded-lg cursor-pointer md:w-2/3 ">
            <h4>Previous Video Updates</h4>
            {{-- {/* <i class="text-lg fa-brands fa-facebook" /> */} --}}
            <div class="relative w-4 h-4">
              <i class="absolute top-0 right-0 fa-solid fa-chevron-down detail-open" />
              <i class="absolute top-0 right-0 fa-solid fa-chevron-up detail-close" />
            </div>
          </summary>
          <div class="w-4/5 max-w-3xl px-8 py-4 m-auto md:w-2/3">
            <iframe // width="1035" // height="582" class="w-full p-4 m-auto rounded-lg aspect-video bg-slate-400"
              src="https://www.youtube.com/embed/e2nkq3h1P68" title="Learn Accessibility - Full a11y Tutorial"
              frameBorder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerPolicy="strict-origin-when-cross-origin" allowFullScreen />
          </div>
        </details>
      </section>
    @endif

    @if ($featuresAdded)
      <section id="features"
        class="flex flex-col items-center justify-center w-full min-h-screen px-8 py-16 bg-gray-100 lg:px-6">
        <h2 class="pb-4 text-3xl font-bold text-center text-teal-700 font-merriweather">
          Features
        </h2>
        <div class="flex flex-col max-w-5xl gap-12 lg:gap-8 lg:flex-row">
          <article class="flex-1">
            <h3 class="pb-4 text-xl text-center text-teal-600 lg:pl-4 lg:text-left font-merriweather">
              Completed Features
            </h3>
            <ul
              class="space-y-5 rounded-xl shadow-[10px_10px_1px_rgba(221,_221,_221,_1),_0_10px_20px_rgba(204,_204,_204,_1)] p-6">
              @foreach ($completedFeatures as $feature)
                <li>
                  <details class="transition-all duration-300 ease-in-out">
                    <summary
                      class="flex items-center justify-between gap-4 p-4 list-none transition-all duration-300 ease-in-out bg-gray-200 rounded-lg cursor-pointer">
                      <h4>{{ $feature['name'] }}</h4>
                      {{-- {/* <i class="text-lg fa-brands fa-facebook" /> */} --}}
                      <div class="relative w-4 h-4">
                        <i class="absolute top-0 right-0 fa-solid fa-chevron-down detail-open"></i>
                        <i class="absolute top-0 right-0 fa-solid fa-chevron-up detail-close"></i>
                      </div>
                    </summary>
                    <p class="p-2">{{ $feature['description'] }}</p>
                  </details>
                </li>
              @endforeach
            </ul>
          </article>
          <article class="flex-1">
            <h3 class="pb-4 text-xl text-center text-teal-600 lg:pl-4 lg:text-left font-merriweather">
              Pending Features
            </h3>
            <ul
              class="space-y-5 rounded-xl shadow-[10px_10px_1px_rgba(221,_221,_221,_1),_0_10px_20px_rgba(204,_204,_204,_1)] p-6">
              @foreach ($pendingFeatures as $feature)
                <li>
                  <details class="transition-all duration-300 ease-in-out">
                    <summary
                      class="flex items-center justify-between gap-4 p-4 list-none transition-all duration-300 ease-in-out bg-gray-200 rounded-lg cursor-pointer">
                      <h4>{{ $feature['name'] }}</h4>
                      <div class="relative w-4 h-4">
                        <i class="absolute top-0 right-0 fa-solid fa-chevron-down detail-open"></i>
                        <i class="absolute top-0 right-0 fa-solid fa-chevron-up detail-close"></i>
                      </div>
                    </summary>
                    <p class="p-2">{{ $feature['description'] }}</p>
                  </details>
                </li>
              @endforeach
            </ul>
          </article>
        </div>
      </section>
    @endif
  </main>
  <footer class="px-0 py-8 lg:px-0 md:px-8">
    <div class="flex max-w-4xl gap-4 px-8 pb-6 m-auto border-b border-gray-600 md:px-0 ">
      <article class="flex-1">
        <h2 class="pb-2 text-lg font-bold text-teal-700 uppercase">
          Humphrey Yeboah
        </h2>
        <p>
          A full stack and mobile developer ready to help to bring your
          business online.
        </p>
      </article>
      <article>
        <h2 class="pb-2 text-lg font-bold text-teal-700 uppercase">
          Socials
        </h2>
        <div class="grid grid-cols-2 sm:block">
          <a href="https://www.linkedin.com/in/humphrey-yeboah-9850881b3/"
            class="p-2 transition-colors rounded hover:dark:bg-gray-800 hover:bg-gray-400 hover:text-white"
            target="_blank" rel="noopener noreferrer" title="Humphrey Yeboah on LinkedIn">
            <i class="text-lg fa-brands fa-linkedin"></i>
          </a>
          <a href="https://www.twitter.com/hakylepremier"
            class="p-2 transition-colors rounded hover:dark:bg-gray-800 hover:bg-gray-400 hover:text-white"
            target="_blank" rel="noopener noreferrer" title="Humphrey Yeboah on Twitter">
            <i class="text-lg fa-brands fa-x-twitter"></i>
          </a>
          <a href="https://github.com/hakylepremier"
            class="p-2 transition-colors rounded hover:dark:bg-gray-800 hover:bg-gray-400 hover:text-white"
            target="_blank" rel="noopener noreferrer" title="Humphrey Yeboah on Github">
            <i class="text-lg fa-brands fa-github"></i>
          </a>
          <a href="https://facebook.com/humphrey.yeboah.5"
            class="p-2 transition-colors rounded hover:dark:bg-gray-800 hover:bg-gray-400 hover:text-white"
            target="_blank" rel="noopener noreferrer" title="Humphrey Yeboah on Facebook">
            <i class="text-lg fa-brands fa-facebook"></i>
          </a>
        </div>
      </article>
    </div>
    <p class="px-8 pt-6 text-center">
      &copy; Copyright
      <script>
        new Date().getFullYear()
        }, Made by {
          " "
        }
      </script>
      <a href="http://humphreyyeboah.com" target="_blank" rel="noopener noreferrer"
        class="pb-1 font-bold text-teal-700 border-b text-inherit dark:border-b-white hover:text-neutral hover:dark:text-gray-300 border-b-gray-600">
        Humphrey Yeboah
      </a>
    </p>
    <p class="pt-4 text-center">
      <a href="https://www.pexels.com/photo/flat-lay-photography-of-macbook-pro-beside-white-spiral-notebook-and-green-mug-434337/"
        class="text-center text-gray-300 border-b-2" target="_blank" rel="noopener noreferrer">
        Photo by Pixabay
      </a>
    </p>
  </footer>
</body>

</html>
