<li class="menu-header">मुख्य</li>

<li class="menu-item {{ request()->is('vle/dashboard') ? 'active' : '' }}">
    <a href="{{ url('vle/dashboard') }}" class="menu-link">
        <i data-feather="home"></i>
        <span class="menu-text">डैशबोर्ड</span>
    </a>
</li>

<li class="menu-header">ऐप्स</li>

<li class="menu-item {{ request()->is('vle/service-list') ? 'active' : '' }}">
    <a href="{{ url('vle/service-list') }}" class="menu-link">
        <i data-feather="file-text"></i>
        <span class="menu-text">शासकीय सेवाएं</span>
    </a>
</li>

@php
$productOpen =
request()->is('vle/add-product') ||
request()->is('common/product-list') ||
request()->is('common/product-details*');
@endphp

<li class="menu-item has-submenu {{ $productOpen ? 'active open' : '' }}">
    <a href="javascript:void(0);" class="menu-link">
        <i data-feather="package"></i>
        <span class="menu-text">उत्पाद प्रबंधन</span>
    </a>


<ul class="submenu {{ $productOpen ? 'show' : '' }}">
    <li>
        <a href="{{ url('vle/add-product') }}"
            class="{{ request()->is('vle/add-product') ? 'active' : '' }}">
            उत्पाद जोड़ें
        </a>
    </li>

    <li>
        <a href="{{ url('common/product-list') }}"
            class="{{ request()->is('common/product-list') || request()->is('common/product-details*') ? 'active' : '' }}">
            उत्पाद सूची
        </a>
    </li>
</ul>


</li>

@php
$customerOpen =
request()->is('vle/add-customer') ||
request()->is('vle/customer-list');
@endphp

<li class="menu-item has-submenu {{ $customerOpen ? 'active open' : '' }}">
    <a href="javascript:void(0);" class="menu-link">
        <i data-feather="users"></i>
        <span class="menu-text">ग्राहक प्रबंधन</span>
    </a>


<ul class="submenu {{ $customerOpen ? 'show' : '' }}">
    <li>
        <a href="{{ url('vle/add-customer') }}"
            class="{{ request()->is('vle/add-customer') ? 'active' : '' }}">
            ग्राहक जोड़ें
        </a>
    </li>

    <li>
        <a href="{{ url('vle/customer-list') }}"
            class="{{ request()->is('vle/customer-list') ? 'active' : '' }}">
            ग्राहक सूची
        </a>
    </li>
</ul>


</li>


  <!-- Reports -->
@php
    $advertisementOpen =
        request()->is('vle/advertisement-entry') ||
        request()->is('common/advertisement-list');
@endphp

 <li class="menu-item has-submenu {{ $advertisementOpen ? 'active open' : '' }}">

    <a href="javascript:void(0);" class="menu-link">
        <i data-feather="trello"></i>
        <span class="menu-text">विज्ञापन प्रबंधन</span>
    </a>

    <ul class="submenu {{ $advertisementOpen ? 'show' : '' }}">

        <!-- advertisement management -->
        <li>
            <a href="{{ url('vle/advertisement-entry') }}"
                class="{{ request()->is('vle/advertisement-entry') ? 'active' : '' }}">
               विज्ञापन एंट्री
            </a>
        </li>
         <li>
            <a href="{{ url('common/advertisement-list') }}"
                class="{{ request()->is('common/advertisement-list') ? 'active' : '' }}">
               विज्ञापन सूची
            </a>
        </li>

    </ul>

</li> 


@php
    $offerOpen =
        request()->is('vle/offer-entry') ||
        request()->is('common/offer-list');
@endphp

 <li class="menu-item has-submenu {{ $offerOpen ? 'active open' : '' }}">

    <a href="javascript:void(0);" class="menu-link">
         <i data-feather="bar-chart-2"></i>
        <span class="menu-text">ऑफर प्रबंधन</span>
    </a>

    <ul class="submenu {{ $offerOpen ? 'show' : '' }}">

        <!-- advertisement management -->
        <li>
            <a href="{{ url('vle/offer-entry') }}"
                class="{{ request()->is('vle/advertisement-entry') ? 'active' : '' }}">
               ऑफर एंट्री
            </a>
        </li>
         <li>
            <a href="{{ url('common/offer-list') }}"
                class="{{ request()->is('common/advertisement-list') ? 'active' : '' }}">
               ऑफर सूची
            </a>
        </li>

    </ul>

</li> 

<li class="menu-item {{ request()->is('vle/enquiry-list') ? 'active' : '' }}">
    <a href="{{ url('vle/enquiry-list') }}" class="menu-link">
        <i data-feather="file-text"></i>
        <span class="menu-text">जन सेवा अनुरोध सूची</span>
    </a>
</li>

<li class="menu-item {{ request()->is('common/order-list') ? 'active' : '' }}">
    <a href="{{ url('common/order-list') }}" class="menu-link">
        <i data-feather="shopping-bag"></i>
        <span class="menu-text">ऑर्डर सूची</span>
    </a>
</li>




