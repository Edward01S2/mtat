@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    {{-- @include('partials.content-page') --}}

    <div class="text-center text-white text-sm bg-mtat-bbblue flex items-center justify-between md:ml-auto">
      <div class="banner-bar container mx-auto">
          <div class="flex justify-between items-center py-3 px-8 md:px-4 xl:px-0">
            <p class="text-xs w-1/3 tracking-wider text-left font-light md:text-base md:w-auto">{{$banner_text}}</p>
            <a class="border-2 border-white px-4 py-2 uppercase text-base text-white" href="{{$banner_button->url}}">{{$banner_button->title}}</a>
          </div>
      </div>
    </div>

    <section id="main-loc">
      <div class="border-b-2 border-mtat-ltblue">
        <div class="container mx-auto">
          @foreach($location_loop as $loc)
            @if($loc['primary'])
            {{-- Main location --}}
              <div>
                <div class="px-8 py-16 text-center text-gray-700 text-sm  flex flex-col md:flex-row xl:px-0 xl:text-base">
                  <div class="md:w-1/2 md:flex md:flex-col md:items-center md:justify-center xl:w-2/5">
                    <h2 class="text-mtat-orange text-3xl uppercase font-semibold tracking-wider mb-0 pb-4">{{$loc['name']}}</h2>
                    <p class="pb-4 md:text-base">{{$loc['address']}} {{$loc['address2']}}</p>
                    <p class="pb-4 flex items-center justify-center">
                      <img class="h-5 pr-2" src="{{$acf_options->phone_icon->url}}" />
                      <a href="tel:{{$loc['phone']}}" >{{$loc['phone']}}</a>
                    </p>
                    <p class="pb-8 flex items-center justify-center">
                      <img class="h-6 pr-2" src="{{$acf_options->hours_icon->url}}" />
                      {{$loc['hours']}}
                    </p>
                  </div>
                  <div class="w-full h-64 md:w-1/2 xl:h-72 xl:w-3/5">
                    {!!$loc['map']!!}
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
        @foreach($location_loop as $loc)
          @if(!$loc['primary'])
          {{-- Other locations not primary --}}
          <div class="text-gray-700 text-sm border-b-2 border-mtat-ltblue">
            <div class="container mx-auto">
              <div class="px-8 py-8 md:flex md:items-center md:justify-between md:w-4/5 md:mx-auto xl:w-4/5">
                <div class="flex items-center justify-between">
                  <div class="text-left xl:text-base">
                    <h2 class="text-mtat-orange text-2xl uppercase font-semibold tracking-wider mb-0 xl:pb-2">{{$loc['name']}}</h2>
                    <p class="">{{$loc['address']}}</p>
                    <p>{{$loc['address2']}}</p>
                  </div>
                  <button id="loc-dd" class="accordion md:hidden">
                      <svg id="loc-up" class="h-6 w-6 fill-current text-mtat-orange" xmlns="http://www.w3.org/2000/svg" height="1" width="1" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                      <svg id="loc-down" class="h-6 w-6 fill-current text-mtat-orange hidden"xmlns="http://www.w3.org/2000/svg" height="1" width="1" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg>
                  </button>
                </div>
                <div class="py-8 pt-12 hidden md:block md:pt-0 md:py-0 xl:text-base">
                  <p class="pb-4 flex items-center md:pb-3">
                    <img class="h-5 pr-4" src="{{$acf_options->phone_icon->url}}" />
                    <a href="tel:{{$loc['phone']}}" >{{$loc['phone']}}</a>
                  </p>
                  <p class="flex items-center">
                    <img class="h-6 pr-4" src="{{$acf_options->hours_icon->url}}" />
                    {{$loc['hours']}}
                  </p>
                </div>
              </div>

              {{-- Mobile dropdown --}}
              <div id="loc-open" class="accordion-content pb-8 px-8 hidden">
                  <p class="pb-4 flex items-center md:pb-3">
                    <img class="h-5 pr-4" src="{{$acf_options->phone_icon->url}}" />
                    <a href="tel:{{$loc['phone']}}" >{{$loc['phone']}}</a>
                  </p>
                  <p class="flex items-center">
                    <img class="h-6 pr-4" src="{{$acf_options->hours_icon->url}}" />
                    {{$loc['hours']}}
                  </p>
                </div>
              </div>

            </div>
          @endif
        @endforeach

      </div>
    </section>

    <section id="events">
      <div class="relative">
        <div class="h-full w-full absolute bg-mtat-ltblue opacity-25 z-0"></div>
        <div class="relative container mx-auto text-center z-10 px-8 py-8">
          <h3 class="uppercase text-2xl font-medium tracking-wide text-mtat-orange">Upcoming Events</h3>
          <div id="event-slider" class="md:flex">
            @foreach($event_loop as $item)
              <div class="flex flex-col text-left py-6 md:w-1/3 md:px-4 lg:px-8">
                <h4 class="text-mtat-blue text-xl font-light md:text-xl">{{ $item['name'] }}</h4>
                <p class="normal-case pb-6 leading-loose text-sm text-gray-700 font-light md:text-sm">{{ $item['excerpt']}}</p>
                <div class="text-left">
                  <a class="bg-mtat-blue text-white px-8 py-3 uppercase text-base font-light" href="{{$item['url']}}">Learn More</a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

  @endwhile

    {{-- @debug
  @dump($event_loop) --}}
@endsection
