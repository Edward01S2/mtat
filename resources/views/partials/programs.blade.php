<section id="programs">
    <div class="container mx-auto text-center md:pb-16 lg:px-4">

      @if($programs->title)
        <h2 class="text-mtat-orange text-3xl uppercase font-semibold tracking-wide pb-4">{{ $programs->title }}</h2>
      @endif

      <div class="relative flex flex-col border-t-2 border-b-2 border-teal-500 md:flex-row md:border-none md:mb-8">
        @foreach($programs->programs_w_image as $program)
          <div id="program-img" class="relative border-box md:w-1/4">
            <div class="absolute h-full w-full z-0" style="background-color: {{ $program->bg_color}}; opacity: {{$program->opacity}};"></div>
            <div class="relative md:h-full">
              <div class="flex py-6 md:flex-col md:py-10 md:justify-between md:h-full xl:py-16">
                <div class="w-1/2 flex justify-center items-center md:w-full">
                  <img class="h-16 w-16 md:w-20 md:h-20 lg:w-24 lg:h-24 xl:w-32 xl:h-32" src="{{$program->image->url}}" />
                </div>
                <div class="w-1/2 text-left md:w-full md:text-center md:py-8">
                  <div class="flex flex-col justify-center text-blue-800">
                    <h3 class="uppercase text-xl mr-8 font-semibold tracking-wider md:mr-0 lg:px-4 xl:text-2xl xl:px-8">{{$program->program_name}}</h3>
                    <p class="hidden text-gray-700 font-light md:block md:px-4 md:pb-4 lg:px-8 xl:pb-8">{{$program->subtext}}</p>
                  </div>
                  <div class="mb-4 text-mtat-blue md:hidden">
                      <a class="border-2 font-medium border-mtat-blue px-6 py-2 uppercase text-xs hover:bg-mtat-blue hover:text-white xl:text-lg" href="{{$program->link->url}}">{{$program->link->title}}</a>
                    </div>
                </div>
                <div class="hidden mb-4 text-mtat-blue md:block">
                  <a class="border-2 font-medium border-mtat-blue px-6 py-2 uppercase text-xs hover:bg-mtat-blue hover:text-white xl:text-lg" href="{{$program->link->url}}">{{$program->link->title}}</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <div class="flex flex-col md:flex-row">
        @foreach($programs->program_no_image as $program)
        <a class="md:w-1/3 relative border-b-2 border-white scale-up" href="{{$program->link->url}}">
          <div class="relative">
            <div class="absolute h-full w-full z-0 hover:shadow-inner" style="background-color: {{ $program->bg_color}}; opacity: {{$program->opacity}};"></div>
            <div class="relative z-20 flex justify-between px-8 py-6 md:pl-8 md: pr-4">
              <div class="text-left flex items-center md:flex-col md:items-start md:justify-center">
                <h3 class="uppercase text-lg mr-8 mb-0 font-semibold tracking-wider text-blue-800 md:mr-0 md:pb-2 lg:text-lg">{!!$program->name!!}</h3>
                <p class="hidden text-gray-700 font-light md:block">{{$program->subtext}}</p>
              </div>
              <div class="flex items-center">
                <svg class="fill-current text-mtat-orange h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="1" width="1" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
              </div>
            </div>
          </div>

        </a>
        @endforeach
      </div>
    </div>
  </section>