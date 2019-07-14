<section id="class-types" class="md:pb-16">
    <div class="container mx-auto text-center px-8 py-16">
      <h2 class="text-mtat-orange text-3xl uppercase font-semibold tracking-wide pb-4">{{$class->title }}</h2>
      <p class="leading-loose text-center text-gray-600 md:text-center md:px-12 lg:max-w-5xl lg:mx-auto">{{ $class->subtext }}</p>
    </div>

    <div class="border-t-2 border-mtat-ltblue md:border-2 md:border-b-0 md:max-w-xl md:mx-auto">
      {{-- @foreach($class->classes as $class) --}}
      @for($i=0; $i < count($classes); $i++)
      <div class="text-gray-700 text-sm border-b-2 border-mtat-ltblue">
        <div class="">
          <div class="px-8 py-8 md:flex md:items-center md:justify-between">
            <div class="flex items-center justify-between md:w-full">
              <div class="text-left xl:text-base">
                <h3 class="text-mtat-blue text-base font-semibold tracking-wider mb-0 md:text-lg xl:pb-2">{{$classes[$i]->title}}</h3>
              </div>
              <button id="loc-dd" class="accordion">
                  <svg id="loc-up" class="h-6 w-6 fill-current text-mtat-orange" xmlns="http://www.w3.org/2000/svg" height="1" width="1" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  <svg id="loc-down" class="h-6 w-6 fill-current text-mtat-orange hidden"xmlns="http://www.w3.org/2000/svg" height="1" width="1" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg>
              </button>
            </div>
          </div>

            {{-- Mobile dropdown --}}
            <div id="loc-open" class="accordion-content border-t-2 border-mtat-ltblue hidden relative">
              <div class="h-full w-full absolute bg-mtat-ltblue opacity-30 z-0"></div>
              <div class="class-dd py-8 px-8 relative z-20">
                  {!!$classes[$i]->content !!}
              </div>
            </div>
          </div>
        </div>
        @endfor
        {{-- @endforeach --}}
    </div>

</section>