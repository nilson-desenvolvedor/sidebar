@php

$width = 300;

$menu = [
    ["id" => null, "parent_id" => null, "page" => "/", "name" => null, "label" => "Home", "icon" => "home"],
    ["id" => null, "parent_id" => null, "page" => null, "name" => "install", "label" => "Instalação", "icon" => "package-import"],
    ["id" => "separator", "parent_id" => null, "page" => null, "name" => null, "label" => null, "icon" => null],
    ["id" => "category", "parent_id" => null, "page" => null, "name" => null, "label" => "Temas", "icon" => null],
    [
        "id" => "themes", "parent_id" => null, "page" => null, "name" => "themes", "label" => "Temas do sidebar", "icon" => "brush",
        "children" => [
            ["id" => "light", "parent_id" => "themes", "page" => null, "name" => "theme-light", "label" => "Tema claro", "icon" => "haze"],  //Exemplo de link usando route-name no href
            ["id" => "dark", "parent_id" => "themes", "page" => "/dark", "name" => null, "label" => "Tema escuro", "icon" => "moon-2"],      //Exemplo de link usando a url da página no href         
        ]
    ],
    ["id" => null, "parent_id" => null, "page" => "/pg-sem-tema", "name" => null, "label" => "Tema neutro", "icon" => "brush-off"],
    ["id" => "separator", "parent_id" => null, "page" => null, "name" => null, "label" => null, "icon" => null],
    ["id" => null, "parent_id" => null, "page" => "/pg-sem-icones", "name" => "sem-icones", "label" => "Página sem ícones", "icon" => "photo-off"],
    ["id" => null, "parent_id" => null, "page" => "/sem-layout-com-sidebar", "name" => null, "label" => "Página sem layout e com sidebar", "icon" => "layout-sidebar"],
    ["id" => null, "parent_id" => null, "page" => "/com-layout-sem-sidebar", "name" => null, "label" => "Página com layout e sem sidebar", "icon" => "align-box-left-middle"],
    ["id" => null, "parent_id" => null, "page" => "/sem-layout-sem-sidebar", "name" => null, "label" => "Página sem layout e sem sidebar", "icon" => "rectangle-vertical"],
];

@endphp

<div id="sidebar"
     class="fixed top-0 left-0 h-full transition-all duration-300 overflow-hidden"
     style="width: {{ $width }}px;">

    <!-- OVERLAY DO TEMA -->
    <div class="sidebar-overlay absolute inset-0 pointer-events-none"></div>

    <!-- HEADER -->
    <div class="relative h-24 flex items-end p-4 header-container">

        <div class="header-overlay absolute inset-0"></div>

        <h1 class="relative text-lg font-bold tracking-wide whitespace-nowrap overflow-hidden text-ellipsis">
            Operar Sidebar
        </h1>

        <button id="toggleSidebar"
                class="absolute right-3 top-3 w-9 h-9 flex items-center justify-center cursor-pointer border rounded-md">
            <i id="toggleIcon" class="ti ti-menu-2 text-xl"></i>
        </button>
    </div>


    <!-- MENU -->
    <nav class="relative mt-4 flex flex-col space-y-1">

        @foreach ($menu as $item)
            @if($item['id']=="separator")
                <div class="mt-1 mb-2 border-t opacity-60"></div>
            @elseif($item['id']=="category")
                <h2 class="menu-section-title px-4 text-[10px] font-bold tracking-wider uppercase opacity-100 transition-all duration-300">{{ $item['label'] }}</h2>      
            @elseif(!empty($item['children']))   
                <a href="#" id="{{ $item['id'] }}" class="menu-item menu-dropdown flex items-center gap-3 px-4 py-2 transition-all overflow-hidden">
                    <i class="ti ti-{{ $item['icon'] }} text-xl"></i>
                    <span class="menu-label whitespace-nowrap opacity-100 transition-all">{{ $item['label'] }}</span>
                    <i class="ti ti-chevron-down ml-auto transition-all duration-300 dropdown-arrow"></i>
                </a>
                <!-- ===== LEVEL 1 ===== -->            
                <div class="submenu max-h-0 overflow-hidden transition-all duration-300">

                    @foreach ($item['children'] as $child)
                        @if(empty($child['children']))   
                            <div class="submenu-item">
                                <a href= "{{ $child['name'] ? route($child['name']) : ($child['page'] ?? '#') }}" data-parent="{{ $child['parent_id'] }}" class="menu-item menu-dropdown-second flex items-center gap-3 px-4 py-2 transition-all overflow-hidden">
                                    <i class="ti ti-{{ $child['icon'] }} text-xl"></i>
                                    <span class="menu-label whitespace-nowrap opacity-100">{{ $child['label'] }}</span>
                                </a>  
                            </div>
                        @else
                            <div class="submenu-item">

                                <a href="#" id="{{ $child['id'] }}" data-parent="{{ $child['parent_id'] }}" class="menu-item menu-dropdown-second block px-5 py-2 relative flex justify-between items-center transition-all">

                                    <span class="flex items-center gap-2">
                                        <i class="ti ti-{{ $child['icon'] }} text-sm"></i>
                                        <span class="menu-label whitespace-nowrap transition-all">{{ $child['label'] }}</span>
                                    </span>

                                    <i class="ti ti-chevron-down transition-all duration-300 arrow-second"></i>
                                </a>

                                <div class="submenu-second max-h-0 overflow-hidden transition-all duration-300">
                                @foreach ($child['children'] as $grandchild)
                                    <a href="{{ $grandchild['name'] ? route($grandchild['name']) : ($grandchild['page'] ?? '#') }}" data-parent="{{ $grandchild['parent_id'] }}" class="menu-item block px-8 py-2 text-sm transition-all flex items-center gap-2">
                                        <i class="ti ti-{{ $grandchild['icon'] }} text-sm"></i>
                                        <span class="menu-label whitespace-nowrap transition-all">{{ $grandchild['label'] }}</span>
                                    </a>
                                @endforeach 
                                </div>
                            </div>
                        @endif
                    @endforeach  
                </div>                       
            @else
                <a href="{{ $item['name'] ? route($item['name']) : ($item['page'] ?? '#') }}"  class="menu-item flex items-center gap-3 px-4 py-2 transition-all overflow-hidden">
                    <i class="ti ti-{{ $item['icon'] }} text-xl"></i>        
                    <span class="menu-label whitespace-nowrap opacity-100">{{ $item['label'] }}</span>
                </a>        
            @endif    
        @endforeach


        <!-- ===== EXAMPLES ONLY HTML ===== -->
        <div class="mt-1 mb-2 border-t opacity-60"></div>
        <h2 class="menu-section-title px-4 text-[10px] font-bold tracking-wider uppercase opacity-100 transition-all duration-300">Examples Without PHP Array</h2>    
        
        <a href="{{ route('simple1') }}" class="menu-item flex items-center gap-3 px-4 py-2 transition-all overflow-hidden">
            <i class="ti ti-settings text-xl"></i>
            <span class="menu-label whitespace-nowrap opacity-100">Simple menu Level 1 HTML</span>
        </a>            
        <!-- id e data-parent são usados no javascript para reabrir automaticamente os submenus -->
        <a href="#" id="dl1wp" class="menu-item menu-dropdown flex items-center gap-3 px-4 py-2 transition-all overflow-hidden">
            <i class="ti ti-plug text-xl"></i>
            <span class="menu-label whitespace-nowrap opacity-100 transition-all">Dropdown Level 1 HTML</span>
            <i class="ti ti-chevron-down ml-auto transition-all duration-300 dropdown-arrow"></i>
        </a>

        <div class="submenu max-h-0 overflow-hidden transition-all duration-300">

            <!-- FIRST SUBMENU -->
            <div class="submenu-item">
                <!-- id e data-parent são usados no javascript para reabrir automaticamente os submenus -->
                <a href="#" id="dl2wp" data-parent="dl1wp" class="menu-item menu-dropdown-second block px-5 py-2 relative flex justify-between items-center transition-all">

                    <span class="flex items-center gap-2">
                        <i class="ti ti-building-community text-sm"></i>
                        <span class="menu-label whitespace-nowrap transition-all">Level 2 HTML</span>
                    </span>

                    <i class="ti ti-chevron-down transition-all duration-300 arrow-second"></i>
                </a>

                <div class="submenu-second max-h-0 overflow-hidden transition-all duration-300">

                    <a href="{{ route('simple4') }}" data-parent="dl2wp" class="menu-item block px-8 py-2 text-sm transition-all flex items-center gap-2">
                        <i class="ti ti-car-fan text-sm"></i>
                        <span class="menu-label whitespace-nowrap transition-all">Level 3 HTML</span>
                    </a>

                    <a href="{{ route('simple5') }}" data-parent="dl2wp" class="menu-item block px-8 py-2 text-sm transition-all flex items-center gap-2">
                        <i class="ti ti-usb text-sm"></i>
                        <span class="menu-label whitespace-nowrap transition-all">Level 3 HTML</span>
                    </a>

                </div>
            </div>

            <!-- SECOND SUBMENU -->
            <div class="submenu-item">
                <a href="{{ route('simple2') }}" data-parent="dl1wp" class="menu-item menu-dropdown-second flex items-center gap-3 px-4 py-2 transition-all overflow-hidden">
                    <i class="ti ti-view-360 text-xl"></i>
                    <span class="menu-label whitespace-nowrap opacity-100">Simple menu Level 2 HTML</span>
                </a>  
            </div>

        </div> 
        
        <a href="{{ route('simple3') }}" class="menu-item flex items-center gap-3 px-4 py-2 transition-all overflow-hidden">
            <i class="ti ti-icons text-xl"></i>
            <span class="menu-label whitespace-nowrap opacity-100">Simple menu Level 1 HTML</span>
        </a>        

    </nav>

    <div class="absolute bottom-0 left-0 w-full px-4 py-3 flex items-center gap-3">
        <img src="{{ asset('./favicon.ico') }}" class="w-5 h-5" alt="">
        <span class="text-sm tracking-wide menu-label opacity-100 translate-x-0 transition-all duration-300">
            OperarSS
        </span>
    </div>

</div>
<div id="pageContent" class="transition-all duration-300 ml-[var(--sidebar)]" style="--sidebar: {{ $width }}px;">
