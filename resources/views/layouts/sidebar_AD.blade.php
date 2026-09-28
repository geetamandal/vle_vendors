  <!-- Dashboard -->
  <li class="menu-header">Main</li>

  <li class="menu-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
      <a href="{{ url('admin/dashboard') }}" class="menu-link">
          <i data-feather="home"></i>
          <span class="menu-text">डैशबोर्ड</span>
      </a>
  </li>



  <!-- Apps -->
  <li class="menu-header">ऐप्स</li>


@php
      $vleOpen =
          request()->is('admin/add-vle') ||
          request()->is('common/enquiry-list') ||
          request()->is('common/enquiry-details*');
  @endphp

 <li class="menu-item has-submenu {{ $vleOpen ? 'active open' : '' }}">

      <a href="javascript:void(0);" class="menu-link">
          <i data-feather="briefcase"></i>
          <span class="menu-text">VLE प्रबंध</span>
      </a>

      <ul class="submenu {{ $vleOpen ? 'show' : '' }}">

          <!-- Add Enquiry -->
          <li>
              <a href="{{ url('admin/add-vle') }}"
                  class="{{ request()->is('admin/add-vle') ? 'active' : '' }}">
                  VLE जोड़ें
              </a>
          </li>


          <!-- Enquiry List -->
          <li>
              <a href="{{ url('common/vle-list') }}"
                  class="{{ request()->is('common/enquiry-list') || request()->is('common/enquiry-details*') ? 'active' : '' }}">
                  VLE सूची
              </a>
          </li>

      </ul>

  </li>
  <!-- Contacts -->
  <li class="menu-item {{ request()->is('common/order-list') ? 'active' : '' }}">
    <a href="{{ url('common/order-list') }}" class="menu-link">
        <i data-feather="shopping-bag"></i>
        <span class="menu-text">ऑर्डर सूची</span>
    </a>
</li>