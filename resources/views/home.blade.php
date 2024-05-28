<x-layout :user="$user">
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="relative overflow-hidden bg-white">
        <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
          <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
            <div class="sm:max-w-lg">
              <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Summer styles are finally here</h1>
              <p class="mt-4 text-xl text-gray-500">This year, our new summer collection will shelter you from the harsh elements of a world that doesn't care if you live or die.</p>
            </div>
            <di>
              <div class="mt-10">
                <!-- Decorative image grid -->
                <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                  <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                    <div class="flex items-center space-x-6 lg:space-x-8">
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                          <img src="https://www.converse.id/media/wysiwyg/W3_Feb24_Small_Banner_Right.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://sombrero.jdsports.id/pub/media/wysiwyg/BrandHub/Adidas/ShopBy/adidas_1_1656x1656.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://static.nike.com/a/images/f_auto,cs_srgb/w_1536,c_limit/21749e6e-3dd0-4589-9319-4449a04af96a/air-force-1.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://sombrero.jdsports.id/pub/media/wysiwyg/BrandHub/Adidas/ShopBy/HB_X_JD_ADIDAS_TERRACE8502.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://image.adsoftheworld.com/2ph9l2wgurztr1j140pgl723usck" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://www.onitsukatiger.com/id/en-id/mk/brand/onitsukatiger/assets/image/sub-1.jpg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="https://5.imimg.com/data5/SELLER/Default/2021/6/HT/BN/XF/86432004/whatsapp-image-2021-06-07-at-12-36-48-pm-1000x1000.jpeg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <a href="/products" class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Shop Collection</a>
              </div>
            </di>
          </div>
        </div>
      </div>
      
</x-layout>