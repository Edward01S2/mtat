<div id="page-header" class="page-header relative">
  @if(App::featImage())

  <div id="page-header-bg" class="hidden absolute md:h-full md:block md:w-full z-0 md:bg-cover md:bg-center" style="background-image: url({!! App::featImage() !!});"></div>
  <div class="text-white relative w-full h-full md:pt-40 lg:pt-48 xl:pt-64">
    <div class="relative block">
      <div class="h-full w-full absolute bg-mtat-orange md:opacity-50 z-10"></div>
      <div class="relative flex justify-center items-center md:justify-start">
        <div class="container mx-auto relative z-10 ">
          <div class="py-8 text-center md:py-4 md:text-left lg:px-0 xl:px-0">
            <h1 class="text-2xl tracking-wide uppercase mb-0 md:pl-4 xl:pl-0 xl:text-3xl xl:font-semibold">{!! App::title() !!}</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  @else
  <div class="text-white relative">
    <div class="relative block">
      <div class="h-full w-full absolute bg-mtat-orange z-10"></div>
      <div class="relative flex justify-center px-8 items-center md:justify-start">
        <div class="container mx-auto relative z-10 ">
          <div class="py-8 text-center md:py-4 md:text-left lg:px-0 xl:px-0">
            <h1 class="text-2xl tracking-wide uppercase mb-0 px-16 font-medium md:pl-0 xl:text-3xl xl:font-semibold">{!! App::title() !!}</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endif
</div> 
