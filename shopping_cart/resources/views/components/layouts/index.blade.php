
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Shopping Cart System.</title>
</head>
<body>
    <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
        <!-- Mobile menu -->
        
          <div x-show="open" class="relative z-40 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true" style="display: none;">
            
              <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state." class="fixed inset-0 bg-black bg-opacity-25" style="display: none;"></div>
            
    
            <div class="fixed inset-0 z-40 flex">
              
                <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl" @click.away="open = false" style="display: none;">
                  <div class="flex px-4 pt-5 pb-2">
                    <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400" @click="open = false">
                      <span class="sr-only">Close menu</span>
                      <svg class="h-6 w-6" x-description="Heroicon name: outline/x-mark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
    </svg>
                    </button>
                  </div>
    
                  <!-- Links -->
                  <div class="mt-2" x-data="Components.tabs()" @tab-click.window="onTabClick" @tab-keydown.window="onTabKeydown">
                    <div class="border-b border-gray-200">
                      <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                        
                          <button id="tabs-1-tab-1" class="flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium text-indigo-600 border-indigo-600" x-state:on="Selected" x-state:off="Not Selected" :class="{ 'text-indigo-600 border-indigo-600': selected, 'text-gray-900 border-transparent': !(selected) }" x-data="Components.tab(0)" aria-controls="tabs-1-panel-1" role="tab" x-init="init()" @click="onClick" @keydown="onKeydown" @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1" :aria-selected="selected ? 'true' : 'false'" type="button" tabindex="0" aria-selected="true" >Women</button>
                        
                          <button id="tabs-1-tab-2" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" x-state:on="Selected" x-state:off="Not Selected" :class="{ 'text-indigo-600 border-indigo-600': selected, 'text-gray-900 border-transparent': !(selected) }" x-data="Components.tab(0)" aria-controls="tabs-1-panel-2" role="tab" x-init="init()" @click="onClick" @keydown="onKeydown" @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1" :aria-selected="selected ? 'true' : 'false'" type="button" tabindex="-1" aria-selected="false">Men</button>
                        
                      </div>
                    </div>
                    
                      
                        <div id="tabs-1-panel-1" class="space-y-10 px-4 pt-10 pb-8" x-description="'Women' tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-1" x-init="init()" x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                          <div class="grid grid-cols-2 gap-x-4">
                            
                              <div class="group relative text-sm">
                                <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                  New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                            
                              <div class="group relative text-sm">
                                <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                  Basic Tees
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                            
                          </div>
                          
                            <div>
                              <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                              <ul role="list" aria-labelledby="women-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Dresses</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Denim</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                                  </li>
                                
                              </ul>
                            </div>
                          
                            <div>
                              <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
                              <ul role="list" aria-labelledby="women-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                                  </li>
                                
                              </ul>
                            </div>
                          
                            <div>
                              <p id="women-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                              <ul role="list" aria-labelledby="women-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Significant Other</a>
                                  </li>
                                
                              </ul>
                            </div>
                          
                        </div>
                      
                        <div id="tabs-1-panel-2" class="space-y-10 px-4 pt-10 pb-8" x-description="'Men' tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-2" x-init="init()" x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0" style="display: none;">
                          <div class="grid grid-cols-2 gap-x-4">
                            
                              <div class="group relative text-sm">
                                <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                  <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                  New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                            
                              <div class="group relative text-sm">
                                <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                  <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                  Artwork Tees
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                            
                          </div>
                          
                            <div>
                              <p id="men-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                              <ul role="list" aria-labelledby="men-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                                  </li>
                                
                              </ul>
                            </div>
                          
                            <div>
                              <p id="men-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
                              <ul role="list" aria-labelledby="men-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                                  </li>
                                
                              </ul>
                            </div>
                          
                            <div>
                              <p id="men-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                              <ul role="list" aria-labelledby="men-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                                  </li>
                                
                                  <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                                  </li>
                                
                              </ul>
                            </div>
                          
                        </div>
                      
                    
                  </div>
    
                  <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                    
                      <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                      </div>
                    
                      <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                      </div>
                    
                  </div>
    
                  <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                    <div class="flow-root">
                      <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                    </div>
                    <div class="flow-root">
                      <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create account</a>
                    </div>
                  </div>
    
                  <div class="border-t border-gray-200 py-6 px-4">
                    <a href="#" class="-m-2 flex items-center p-2">
                      <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="block h-auto w-5 flex-shrink-0">
                      <span class="ml-3 block text-base font-medium text-gray-900">CAD</span>
                      <span class="sr-only">, change currency</span>
                    </a>
                  </div>
                </div>
              
            </div>
          </div>
        
    
        <header class="relative bg-white">
          <p class="flex h-10 items-center justify-center bg-indigo-600 px-4 text-sm font-medium text-white sm:px-6 lg:px-8">Get free delivery on orders over $100</p>
    
          <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
              <div class="flex h-16 items-center">
                <button type="button" x-description="Mobile menu toggle, controls the 'mobileMenuOpen' state." class="rounded-md bg-white p-2 text-gray-400 lg:hidden" @click="open = true">
                  <span class="sr-only">Open menu</span>
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/bars-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
    </svg>
                </button>
    
                <!-- Logo -->
                <div class="ml-4 flex lg:ml-0">
                  <a href="#">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="">
                  </a>
                </div>
    
                <!-- Flyout menus -->
                <div class="hidden lg:ml-8 lg:block lg:self-stretch" x-data="Components.popoverGroup()" x-init="init()">
                  <div class="flex h-full space-x-8">
                    
                      <div class="flex" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                        <div class="relative flex">
                          <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" :class="{ 'border-indigo-600 text-indigo-600': open, 'border-transparent text-gray-700 hover:text-gray-800': !(open) }" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">Women</button>
                        </div>
    
                        
                          <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="'Women' flyout menu, show/hide based on flyout menu state." class="absolute inset-x-0 top-full z-10 text-sm text-gray-500" x-ref="panel" @click.away="open = false" style="display: none;">
                            <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                            <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
    
                            <div class="relative bg-white">
                              <div class="mx-auto max-w-7xl px-8">
                                <div class="grid grid-cols-2 gap-y-10 gap-x-8 py-16">
                                  <div class="col-start-2 grid grid-cols-2 gap-x-8">
                                    
                                      <div class="group relative text-base sm:text-sm">
                                        <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                          <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                                        </div>
                                        <a href="#" class="mt-6 block font-medium text-gray-900">
                                          <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                          New Arrivals
                                        </a>
                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                      </div>
                                    
                                      <div class="group relative text-base sm:text-sm">
                                        <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                          <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                                        </div>
                                        <a href="#" class="mt-6 block font-medium text-gray-900">
                                          <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                          Basic Tees
                                        </a>
                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                      </div>
                                    
                                  </div>
                                  <div class="row-start-1 grid grid-cols-3 gap-y-10 gap-x-8 text-sm">
                                    
                                      <div>
                                        <p id="Clothing-heading" class="font-medium text-gray-900">Clothing</p>
                                        <ul role="list" aria-labelledby="Clothing-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Tops</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Dresses</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Pants</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Denim</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Sweaters</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">T-Shirts</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Jackets</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Activewear</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Browse All</a>
                                            </li>
                                          
                                        </ul>
                                      </div>
                                    
                                      <div>
                                        <p id="Accessories-heading" class="font-medium text-gray-900">Accessories</p>
                                        <ul role="list" aria-labelledby="Accessories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Watches</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Wallets</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Bags</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Sunglasses</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Hats</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Belts</a>
                                            </li>
                                          
                                        </ul>
                                      </div>
                                    
                                      <div>
                                        <p id="Brands-heading" class="font-medium text-gray-900">Brands</p>
                                        <ul role="list" aria-labelledby="Brands-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">My Way</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Significant Other</a>
                                            </li>
                                          
                                        </ul>
                                      </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                      </div>
                    
                      <div class="flex" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                        <div class="relative flex">
                          <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" :class="{ 'border-indigo-600 text-indigo-600': open, 'border-transparent text-gray-700 hover:text-gray-800': !(open) }" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">Men</button>
                        </div>
    
                        
                          <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="'Men' flyout menu, show/hide based on flyout menu state." class="absolute inset-x-0 top-full z-10 text-sm text-gray-500" x-ref="panel" @click.away="open = false" style="display: none;">
                            <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                            <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
    
                            <div class="relative bg-white">
                              <div class="mx-auto max-w-7xl px-8">
                                <div class="grid grid-cols-2 gap-y-10 gap-x-8 py-16">
                                  <div class="col-start-2 grid grid-cols-2 gap-x-8">
                                    
                                      <div class="group relative text-base sm:text-sm">
                                        <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                          <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-cover object-center">
                                        </div>
                                        <a href="#" class="mt-6 block font-medium text-gray-900">
                                          <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                          New Arrivals
                                        </a>
                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                      </div>
                                    
                                      <div class="group relative text-base sm:text-sm">
                                        <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                          <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-cover object-center">
                                        </div>
                                        <a href="#" class="mt-6 block font-medium text-gray-900">
                                          <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                          Artwork Tees
                                        </a>
                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                      </div>
                                    
                                  </div>
                                  <div class="row-start-1 grid grid-cols-3 gap-y-10 gap-x-8 text-sm">
                                    
                                      <div>
                                        <p id="Clothing-heading" class="font-medium text-gray-900">Clothing</p>
                                        <ul role="list" aria-labelledby="Clothing-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Tops</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Pants</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Sweaters</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">T-Shirts</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Jackets</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Activewear</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Browse All</a>
                                            </li>
                                          
                                        </ul>
                                      </div>
                                    
                                      <div>
                                        <p id="Accessories-heading" class="font-medium text-gray-900">Accessories</p>
                                        <ul role="list" aria-labelledby="Accessories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Watches</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Wallets</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Bags</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Sunglasses</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Hats</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Belts</a>
                                            </li>
                                          
                                        </ul>
                                      </div>
                                    
                                      <div>
                                        <p id="Brands-heading" class="font-medium text-gray-900">Brands</p>
                                        <ul role="list" aria-labelledby="Brands-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                            </li>
                                          
                                            <li class="flex">
                                              <a href="#" class="hover:text-gray-800">My Way</a>
                                            </li>
                                          
                                        </ul>
                                      </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                      </div>
                    
    
                    
                      <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>
                    
                      <a href="{{url('components')}}" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800"> Dashboard</a>
                    
                  </div>
                </div>
    
                <div class="ml-auto flex items-center">
                  <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                    <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign in</a>
                    <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                    <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create account</a>
                  </div>
    
                  <div class="hidden lg:ml-8 lg:flex">
                    <a href="#" class="flex items-center text-gray-700 hover:text-gray-800">
                      <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="block h-auto w-5 flex-shrink-0">
                      <span class="ml-3 block text-sm font-medium">CAD</span>
                      <span class="sr-only">, change currency</span>
                    </a>
                  </div>
    
                  <!-- Search -->
                  <div class="flex lg:ml-6">
                    <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                      <span class="sr-only">Search</span>
                      <svg class="h-6 w-6" x-description="Heroicon name: outline/magnifying-glass" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
    </svg>
                    </a>
                  </div>
    
                  <!-- Cart -->
                  <div class="ml-4 flow-root lg:ml-6">
                    <a href="#" class="group -m-2 flex items-center p-2">
                      <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: outline/shopping-bag" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
    </svg>
                      <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                      <span class="sr-only">items in cart, view bag</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </header>
    
        <main class="mx-auto max-w-2xl px-4 pt-16 pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
          <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Shopping Cart</h1>
    
          <form class="mt-12 lg:grid lg:grid-cols-12 lg:items-start lg:gap-x-12 xl:gap-x-16">
            <section aria-labelledby="cart-heading" class="lg:col-span-7">
              <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>
    
              <ul role="list" class="divide-y divide-gray-200 border-t border-b border-gray-200">
                
                  <li class="flex py-6 sm:py-10">
                    <div class="flex-shrink-0">
                      <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-01.jpg" alt="Front of men's Basic Tee in sienna." class="h-24 w-24 rounded-md object-cover object-center sm:h-48 sm:w-48">
                    </div>
    
                    <div class="ml-4 flex flex-1 flex-col justify-between sm:ml-6">
                      <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                        <div>
                          <div class="flex justify-between">
                            <h3 class="text-sm">
                              <a href="#" class="font-medium text-gray-700 hover:text-gray-800">Basic Tee</a>
                            </h3>
                          </div>
                          <div class="mt-1 flex text-sm">
                            <p class="text-gray-500">Sienna</p>
                            
                              <p class="ml-4 border-l border-gray-200 pl-4 text-gray-500">Large</p>
                            </div>
                          <p class="mt-1 text-sm font-medium text-gray-900">$32.00</p>
                        </div>
    
                        <div class="mt-4 sm:mt-0 sm:pr-9">
                          <label for="quantity-0" class="sr-only">Quantity, Basic Tee</label>
                          <select id="quantity-0" name="quantity-0" class="max-w-full rounded-md border border-gray-300 py-1.5 text-left text-base font-medium leading-5 text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                          </select>
    
                          <div class="absolute top-0 right-0">
                            <button type="button" class="-m-2 inline-flex p-2 text-gray-400 hover:text-gray-500">
                              <span class="sr-only">Remove</span>
                              <svg class="h-5 w-5" x-description="Heroicon name: mini/x-mark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
      <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"></path>
    </svg>
                            </button>
                          </div>
                        </div>
                      </div>
    
                      <p class="mt-4 flex space-x-2 text-sm text-gray-700">
                        
                          <svg class="h-5 w-5 flex-shrink-0 text-green-500" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
      <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
    </svg>
                        <span>In stock</span>
                      </p>
                    </div>
                  </li>
                
                  <li class="flex py-6 sm:py-10">
                    <div class="flex-shrink-0">
                      <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-02.jpg" alt="Front of men's Basic Tee in black." class="h-24 w-24 rounded-md object-cover object-center sm:h-48 sm:w-48">
                    </div>
    
                    <div class="ml-4 flex flex-1 flex-col justify-between sm:ml-6">
                      <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                        <div>
                          <div class="flex justify-between">
                            <h3 class="text-sm">
                              <a href="#" class="font-medium text-gray-700 hover:text-gray-800">Basic Tee</a>
                            </h3>
                          </div>
                          <div class="mt-1 flex text-sm">
                            <p class="text-gray-500">Black</p>
                            
                              <p class="ml-4 border-l border-gray-200 pl-4 text-gray-500">Large</p>
                            </div>
                          <p class="mt-1 text-sm font-medium text-gray-900">$32.00</p>
                        </div>
    
                        <div class="mt-4 sm:mt-0 sm:pr-9">
                          <label for="quantity-1" class="sr-only">Quantity, Basic Tee</label>
                          <select id="quantity-1" name="quantity-1" class="max-w-full rounded-md border border-gray-300 py-1.5 text-left text-base font-medium leading-5 text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                          </select>
    
                          <div class="absolute top-0 right-0">
                            <button type="button" class="-m-2 inline-flex p-2 text-gray-400 hover:text-gray-500">
                              <span class="sr-only">Remove</span>
                              <svg class="h-5 w-5" x-description="Heroicon name: mini/x-mark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
      <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"></path>
    </svg>
                            </button>
                          </div>
                        </div>
                      </div>
    
                      <p class="mt-4 flex space-x-2 text-sm text-gray-700">
                        
                          <svg class="h-5 w-5 flex-shrink-0 text-gray-300" x-description="Heroicon name: mini/clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z" clip-rule="evenodd"></path>
    </svg>
                        <span>Ships in 3–4 weeks</span>
                      </p>
                    </div>
                  </li>
                
                  <li class="flex py-6 sm:py-10">
                    <div class="flex-shrink-0">
                      <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-03.jpg" alt="Insulated bottle with white base and black snap lid." class="h-24 w-24 rounded-md object-cover object-center sm:h-48 sm:w-48">
                    </div>
    
                    <div class="ml-4 flex flex-1 flex-col justify-between sm:ml-6">
                      <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                        <div>
                          <div class="flex justify-between">
                            <h3 class="text-sm">
                              <a href="#" class="font-medium text-gray-700 hover:text-gray-800">Nomad Tumbler</a>
                            </h3>
                          </div>
                          <div class="mt-1 flex text-sm">
                            <p class="text-gray-500">White</p>
                            </div>
                          <p class="mt-1 text-sm font-medium text-gray-900">$35.00</p>
                        </div>
    
                        <div class="mt-4 sm:mt-0 sm:pr-9">
                          <label for="quantity-2" class="sr-only">Quantity, Nomad Tumbler</label>
                          <select id="quantity-2" name="quantity-2" class="max-w-full rounded-md border border-gray-300 py-1.5 text-left text-base font-medium leading-5 text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                          </select>
    
                          <div class="absolute top-0 right-0">
                            <button type="button" class="-m-2 inline-flex p-2 text-gray-400 hover:text-gray-500">
                              <span class="sr-only">Remove</span>
                              <svg class="h-5 w-5" x-description="Heroicon name: mini/x-mark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
      <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"></path>
    </svg>
                            </button>
                          </div>
                        </div>
                      </div>
    
                      <p class="mt-4 flex space-x-2 text-sm text-gray-700">
                        
                          <svg class="h-5 w-5 flex-shrink-0 text-green-500" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
      <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
    </svg>
                        <span>In stock</span>
                      </p>
                    </div>
                  </li>
                
              </ul>
            </section>
    
            <!-- Order summary -->
            <section aria-labelledby="summary-heading" class="mt-16 rounded-lg bg-gray-50 px-4 py-6 sm:p-6 lg:col-span-5 lg:mt-0 lg:p-8">
              <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Order summary</h2>
    
              <dl class="mt-6 space-y-4">
                <div class="flex items-center justify-between">
                  <dt class="text-sm text-gray-600">Subtotal</dt>
                  <dd class="text-sm font-medium text-gray-900">$99.00</dd>
                </div>
                <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                  <dt class="flex items-center text-sm text-gray-600">
                    <span>Shipping estimate</span>
                    <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                      <span class="sr-only">Learn more about how shipping is calculated</span>
                      <svg class="h-5 w-5" x-description="Heroicon name: mini/question-mark-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
    </svg>
                    </a>
                  </dt>
                  <dd class="text-sm font-medium text-gray-900">$5.00</dd>
                </div>
                <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                  <dt class="flex text-sm text-gray-600">
                    <span>Tax estimate</span>
                    <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                      <span class="sr-only">Learn more about how tax is calculated</span>
                      <svg class="h-5 w-5" x-description="Heroicon name: mini/question-mark-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
    </svg>
                    </a>
                  </dt>
                  <dd class="text-sm font-medium text-gray-900">$8.32</dd>
                </div>
                <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                  <dt class="text-base font-medium text-gray-900">Order total</dt>
                  <dd class="text-base font-medium text-gray-900">$112.32</dd>
                </div>
              </dl>
    
              <div class="mt-6">
                <button type="submit" class="w-full rounded-md border border-transparent bg-indigo-600 py-3 px-4 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Checkout</button>
              </div>
            </section>
          </form>
    
          <!-- Related products -->
          <section aria-labelledby="related-heading" class="mt-24">
            <h2 id="related-heading" class="text-lg font-medium text-gray-900">You may also like…</h2>
    
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
              
                <div class="group relative">
                  <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:aspect-none lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-related-product-01.jpg" alt="Front of Billfold Wallet in natural leather." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                  </div>
                  <div class="mt-4 flex justify-between">
                    <div>
                      <h3 class="text-sm text-gray-700">
                        <a href="#">
                          <span aria-hidden="true" class="absolute inset-0"></span>
                          Billfold Wallet
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Natural</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$118</p>
                  </div>
                </div>
              
                <div class="group relative">
                  <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:aspect-none lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-related-product-02.jpg" alt="Black machined pen and pencil with hexagonal shaft and small white logo." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                  </div>
                  <div class="mt-4 flex justify-between">
                    <div>
                      <h3 class="text-sm text-gray-700">
                        <a href="#">
                          <span aria-hidden="true" class="absolute inset-0"></span>
                          Machined Pen and Pencil Set
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Black</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$70</p>
                  </div>
                </div>
              
                <div class="group relative">
                  <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:aspect-none lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-related-product-03.jpg" alt="Three mini sketchbooks with tan and charcoal typography poster covers." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                  </div>
                  <div class="mt-4 flex justify-between">
                    <div>
                      <h3 class="text-sm text-gray-700">
                        <a href="#">
                          <span aria-hidden="true" class="absolute inset-0"></span>
                          Mini Sketchbook Set
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Tan and Charcoal</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$28</p>
                  </div>
                </div>
              
                <div class="group relative">
                  <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:aspect-none lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-related-product-04.jpg" alt="Grooved walnut desk organizer base with five modular white plastic organizer trays." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                  </div>
                  <div class="mt-4 flex justify-between">
                    <div>
                      <h3 class="text-sm text-gray-700">
                        <a href="#">
                          <span aria-hidden="true" class="absolute inset-0"></span>
                          Organize Set
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Walnut</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$149</p>
                  </div>
                </div>
              
            </div>
          </section>
        </main>
    
        <footer aria-labelledby="footer-heading" class="bg-white">
          <h2 id="footer-heading" class="sr-only">Footer</h2>
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="border-t border-gray-200 py-20">
              <div class="grid grid-cols-1 md:grid-flow-col md:auto-rows-min md:grid-cols-12 md:gap-x-8 md:gap-y-16">
                <!-- Image section -->
                <div class="col-span-1 md:col-span-2 lg:col-start-1 lg:row-start-1">
                  <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="" class="h-8 w-auto">
                </div>
    
                <!-- Sitemap sections -->
                <div class="col-span-6 mt-10 grid grid-cols-2 gap-8 sm:grid-cols-3 md:col-span-8 md:col-start-3 md:row-start-1 md:mt-0 lg:col-span-6 lg:col-start-2">
                  <div class="grid grid-cols-1 gap-y-12 sm:col-span-2 sm:grid-cols-2 sm:gap-x-8">
                    <div>
                      <h3 class="text-sm font-medium text-gray-900">Products</h3>
                      <ul role="list" class="mt-6 space-y-6">
                        
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Bags</a>
                          </li>
                        
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Tees</a>
                          </li>
                        
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Objects</a>
                          </li>
                        
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Home Goods</a>
                          </li>
                        
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Accessories</a>
                          </li>
                        
                      </ul>
                    </div>
                    <div>
                      <h3 class="text-sm font-medium text-gray-900">Company</h3>
                      <ul role="list" class="mt-6 space-y-6">
                        
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Who we are</a>
                          </li>
                        
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Sustainability</a>
                          </li>
                        
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Press</a>
                          </li>
                        
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Careers</a>
                          </li>
                        
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Terms &amp; Conditions</a>
                          </li>
                        
                          <li class="text-sm">
                            <a href="#" class="text-gray-500 hover:text-gray-600">Privacy</a>
                          </li>
                        
                      </ul>
                    </div>
                  </div>
                  <div>
                    <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>
                    <ul role="list" class="mt-6 space-y-6">
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Contact</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Shipping</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Returns</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Warranty</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Secure Payments</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">FAQ</a>
                        </li>
                      
                        <li class="text-sm">
                          <a href="#" class="text-gray-500 hover:text-gray-600">Find a store</a>
                        </li>
                      
                    </ul>
                  </div>
                </div>
    
                <!-- Newsletter section -->
                <div class="mt-12 md:col-span-8 md:col-start-3 md:row-start-2 md:mt-0 lg:col-span-4 lg:col-start-9 lg:row-start-1">
                  <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
                  <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
                  <form class="mt-2 flex sm:max-w-md">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" type="text" autocomplete="email" required="" class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white py-2 px-4 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                    <div class="ml-4 flex-shrink-0">
                      <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign up</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
    
            <div class="border-t border-gray-100 py-10 text-center">
              <p class="text-sm text-gray-500">© 2021 Your Company, Inc. All rights reserved.</p>
            </div>
          </div>
        </footer>
      </div>
</body>
</html>
