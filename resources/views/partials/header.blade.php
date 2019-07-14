<header id="nav-click" class="banner bg-white fixed w-full z-30">

  <div class="bg-mtat-blue">
      <div class="container mx-auto flex justify-center text-white tracking-wide py-2 md:justify-end">
        <div class="flex items-center justify-center px-4 hidden md:flex">
            <img class="h-5 pr-2 md:h-4" src="{{$acf_options->email_icon->url}} " alt="">
            <a href="mailto:{{$acf_options->email}}"class="text-sm md:text-xs">{{$acf_options->email}}</a>
        </div>
        <div class="flex items-center justify-center px-4 hidden md:flex">
          <img class="h-5 pr-2 md:h-4" src="{{$acf_options->phone_icon->url}} " alt="">
          <a href="tel:{{$acf_options->phone}}"class="text-sm md:text-xs">{{$acf_options->phone}}</a>
        </div>
        <div class="flex items-center justify-center px-4">
          <img class="h-5 pr-2 md:h-4" src="{{$acf_options->location_icon->url}} " alt="">
          <span class="text-sm md:text-xs">AUSTIN, TX</span>
        </div>
      </div>
  </div>

  <nav id="nav-pos" class="container mx-auto flex items-center flex-wrap py-2 justify-between lg:py-4">
      <div id="nav-brand" class="flex items-center flex-shrink-0 pl-4 xl:pl-0 ">
          <a class="brand" href="{{ home_url('/') }}">
            <img class="h-12 md:h-16" src="{{$acf_options->logo->url}}" alt="">  
          </a>
      </div>
      <div class="block pr-4 lg:hidden">
        <button id="nav-toggle" class="flex items-center px-3 py-2 text-blue-700 focus:outline-none md:hidden">
          <svg id="menu-btn" class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          <svg id="menu-close" class="fill-current h-6 w-6 hidden" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Close</title><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
        </button>
      </div>
      <div class="hidden md:block">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-main']) !!}
        @endif
      </div>
      <div id="main-nav" class="w-full hidden md:invisible">
        <div class="text-sm relative w-full lg:flex-grow">
          <div class="absolute w-full text-center text-white mt-2">
            <div class="h-full w-full absolute bg-mtat-blue z-20"></div>
              <div class="z-30 relative">
              @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-primary']) !!}
              @endif
              </div>
          </div>
        </div>
      </div>
    </nav>

    @foreach($banner_loop as $banner)
      <div class="text-center text-white text-sm py-3 px-4 bg-mtat-ltpurple flex items-center justify-between md:ml-auto hidden">
        <div class="banner-bar mx-auto">
          {!! $banner['banner'] !!}
        </div>
        <button>
          <svg id="menu-close" class="fill-current h-4 w-4" viewBox="0 0 20 20" height="1" width="1" xmlns="http://www.w3.org/2000/svg"><title>Close</title><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
        </button>
      </div>
    @endforeach

    {{-- @debug --}}
    {{-- @dump($announce_loop) --}}
  
</header>

