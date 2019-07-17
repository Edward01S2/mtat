{{--
  Template Name: Testing
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  @include('partials.page-header')

  @include('partials.classes')
    
  <div class="container mx-auto flex justify-center py-8 md:justify-end md:px-4 lg:px-4 xl:px-0">
    <button id="" class="compare-btn uppercase bg-mtat-orange text-white px-12 py-3 text-lg">
      COMPARE
    </button>
  </div>

  <div class="tests container mx-auto border-mtat-ltblue md:flex md:flex-col lg:flex-row">
    <section id="test-search" class="relative border-mtat-ltblue border-t-2 outline-blue lg:border-0 md:pt-0 lg:max-w-xs xl:max-w-sm">
      <div class="w-full h-full absolute bg-mtat-ltblue opacity-30"></div>

      <div class="">
        <div class="relative border-b-2 border-mtat-ltblue lg:border-0 md:w-full lg:border-b-0">
          
          <div class="p-8 md:px-8 md:py-4 md:flex md:items-center md:justify-between lg:items-start lg:flex-col lg:py-8 xl:p-16">
          <div class="md:w-1/3 lg:w-auto">
            <p class="pb-8 md:pb-4 lg:pb-8">Choose the test date you are searching classes for:</p>
            <div class="flex pb-8 md:pb-4 lg:pb-16">
              <input class="bg-mtat-bbblue py-4 flex-grow text-white text-xl text-left px-8 relative outline-none md:py-3" type="button" id="test-date" name="test-date" value="Choose Date" />
            </div>
          </div>
          <div class="">
            <p class="pb-8">Check the class you are looking for:</p>
            <p id="output">--</p>
            <div id="ui-inputs" class="text-lg md:flex lg:flex-col">
              <div class="pr-8">
                <label class="block text-mtat-blue text-lg test-checkbox">
                  <input class="mr-2" type="checkbox" value=".group-classes">
                  <span class="checkmark"></span>
                  <span class="">
                    Group Classes
                  </span>
                </label>
                <label class="block text-mtat-blue text-lg test-checkbox">
                  <input class="mr-2" type="checkbox" value=".private-tutoring">
                  <span class="checkmark"></span>
                  <span class="">
                    Private Tutoring
                  </span>
                </label>
              </div>
              <div>
                <label class="block text-mtat-blue text-lg test-checkbox">
                  <input class="mr-2" type="checkbox" value=".hybrid">
                  <span class="checkmark"></span>
                  <span class="">
                    Hybrid
                  </span>
                </label>
                <label class="block text-mtat-blue text-lg test-checkbox">
                  <input class="mr-2" type="checkbox" value=".bootcamps">
                  <span class="checkmark"></span>
                  <span class="">
                    Bootcamps
                  </span>
                </label>
              </div>
            </div>
          </div>

        </div>
        </div>
      </div>
    </section>

    <section id="test-locations" class="h-auto border-box lg:flex-grow">

      <div id="" class="test-location group-classes outline-blue border-b-2 border-mtat-ltblue text-gray-700 text-sm w-full h-auto relative lg:border-0 lg:text-base">
        <div class="px-8 py-8 md:flex md:items-center md:justify-between md:mx-auto md:px-8 md:w-full">
          <div class="flex items-center justify-between md:w-full">
            <div class="text-left xl:text-base">
              <h2 class="text-mtat-orange text-2xl uppercase font-semibold tracking-wider mb-0 md:text-3xl lg:text-4xl xl:pb-2">Location #1 Group Classes</h2>
              <div class="text-mtat-blue text-base font-light md:flex lg:text-lg">
                <p class="">1234 Rainbow Rd</p>
                <span class="hidden md:block">,&nbsp</span>
                <p>Dallas, TX 75206</p>
              </div>
            </div>
            <button id="loc-dd" class="accordion md:hidden">
              <svg id="loc-up" class="loc-up h-6 w-6 fill-current text-mtat-orange" xmlns="http://www.w3.org/2000/svg" height="1" width="1" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              <svg id="loc-down" class="loc-down h-6 w-6 fill-current text-mtat-orange hidden"xmlns="http://www.w3.org/2000/svg" height="1" width="1" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg>
            </button>
            <label id="" class="hidden text-mtat-blue text-lg test-checkbox test-compare md:block">
              <input class="mr-2" type="checkbox" value=".compare">
              <span class="checkmark"></span>
              <span class="text-sm">
                Compare
              </span>
            </label>
          </div>
        </div>

        {{-- Mobile dropdown --}}
        <div id="loc-open" class="accordion-content pb-8 px-8 invisible md:visible md:block md:flex md:flex-row md:px-8 md:pb-0">

          <label class="block text-mtat-blue text-lg test-checkbox mobile-chk md:hidden">
              <input class="mr-2" type="checkbox" value=".compare">
              <span class="checkmark"></span>
              <span class="text-sm">
                Compare
              </span>
          </label>

          <div class="loc-details w-full flex flex-col md:flex-row">
            <div class="text-base pb-4 md:flex md:justify-between md:items-start md:pb-8 md:flex-col md:w-1/3">
              <div class="md:pb-4">
                <p class="font-semibold">Monday / Wednesday</p>
                <p>1/28/2019 - 2/18/2019</p>
                <p class="pb-4 md:pb-2">5:00 PM - 7:00PM</p>
                <p>Course #</p>
                <p class="mb-12">Seats Available: 12/15</p>
                <div class="pb-8 md:pb-0">
                  <a class="uppercase bg-mtat-blue px-16 py-3 text-white md:px-12" href=#>Details</a>
                </div>
              </div>
            </div>
  
            <div class="text-base md:flex md:justify-between md:items-start md:pb-8 md:flex-col md:w-1/3">
              <div class="md:pb-4">
                <p class="font-semibold">Monday / Wednesday</p>
                <p>1/28/2019 - 2/18/2019</p>
                <p class="pb-4 md:pb-2">5:00 PM - 7:00PM</p>
                <p>Course #</p>
                <p class="mb-12">Seats Available: 12/15</p>
                <div class="pb-8 md:pb-0">
                  <a class="uppercase bg-mtat-blue px-16 py-3 text-white md:px-12" href=#>Details</a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <div id="" class="test-location hybrid outline-blue border-b-2 border-mtat-ltblue text-gray-700 text-sm w-full h-auto relative lg:border-0 lg:text-base">
          <div class="px-8 py-8 md:flex md:items-center md:justify-between md:mx-auto md:px-8 md:w-full">
            <div class="flex items-center justify-between md:w-full">
              <div class="text-left xl:text-base">
                <h2 class="text-mtat-orange text-2xl uppercase font-semibold tracking-wider mb-0 md:text-3xl lg:text-4xl xl:pb-2">Location #1 Hybrid</h2>
                <div class="text-mtat-blue text-base font-light md:flex lg:text-lg">
                  <p class="">1234 Rainbow Rd</p>
                  <span class="hidden md:block">,&nbsp</span>
                  <p>Dallas, TX 75206</p>
                </div>
              </div>
              <button id="loc-dd" class="accordion md:hidden">
                <svg id="loc-up" class="loc-up h-6 w-6 fill-current text-mtat-orange" xmlns="http://www.w3.org/2000/svg" height="1" width="1" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                <svg id="loc-down" class="loc-down h-6 w-6 fill-current text-mtat-orange hidden"xmlns="http://www.w3.org/2000/svg" height="1" width="1" viewBox="0 0 20 20"><path d="M10.707 7.05L10 6.343 4.343 12l1.414 1.414L10 9.172l4.243 4.242L15.657 12z"/></svg>
              </button>
              <label id="" class="hidden text-mtat-blue text-lg test-checkbox test-compare md:block">
                <input class="mr-2" type="checkbox" value=".compare">
                <span class="checkmark"></span>
                <span class="text-sm">
                  Compare
                </span>
              </label>
            </div>
          </div>
  
          {{-- Mobile dropdown --}}
          <div id="loc-open" class="accordion-content pb-8 px-8 invisible md:visible md:block md:flex md:flex-row md:px-8 md:pb-0">
  
            <label class="block text-mtat-blue text-lg test-checkbox mobile-chk md:hidden">
                <input class="mr-2" type="checkbox" value=".compare">
                <span class="checkmark"></span>
                <span class="text-sm">
                  Compare
                </span>
            </label>
  
            <div class="loc-details w-full flex flex-col md:flex-row">
              <div class="text-base pb-4 md:flex md:justify-between md:items-start md:pb-8 md:flex-col md:w-1/3">
                <div class="md:pb-4">
                  <p class="font-semibold">Monday / Wednesday</p>
                  <p>1/28/2019 - 2/18/2019</p>
                  <p class="pb-4 md:pb-2">5:00 PM - 7:00PM</p>
                  <p>Course #</p>
                  <p class="mb-12">Seats Available: 12/15</p>
                  <div class="pb-8 md:pb-0">
                    <a class="uppercase bg-mtat-blue px-16 py-3 text-white md:px-12" href=#>Details</a>
                  </div>
                </div>
              </div>
    
              <div class="text-base md:flex md:justify-between md:items-start md:pb-8 md:flex-col md:w-1/3">
                <div class="md:pb-4">
                  <p class="font-semibold">Monday / Wednesday</p>
                  <p>1/28/2019 - 2/18/2019</p>
                  <p class="pb-4 md:pb-2">5:00 PM - 7:00PM</p>
                  <p>Course #</p>
                  <p class="mb-12">Seats Available: 12/15</p>
                  <div class="pb-8 md:pb-0">
                    <a class="uppercase bg-mtat-blue px-16 py-3 text-white md:px-12" href=#>Details</a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>

    </section>
  </div>
    
  <div class="container mx-auto flex justify-center py-8 md:justify-end md:px-4 lg:px-4 xl:px-0">
    <button class="compare-btn uppercase bg-mtat-orange text-white px-12 py-3 text-lg">
      COMPARE
    </button>
  </div>

  </div>
  @debug()
  @dump($test_data)
    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection
