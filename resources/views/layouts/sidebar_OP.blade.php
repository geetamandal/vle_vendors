  <!-- Dashboard -->
  <li class="menu-header">Main</li>

  <li class="menu-item {{ request()->is('operator/dashboard') ? 'active' : '' }}">
      <a href="{{ url('operator/dashboard') }}" class="menu-link">
          <i data-feather="home"></i>
          <span class="menu-text">Dashboard</span>
      </a>
  </li>


  <!-- Apps -->
  <li class="menu-header">Apps</li>


  <!-- Enquiry -->
  @php
      $enquiryOpen =
          request()->is('operator/add-enquiry') ||
          request()->is('common/enquiry-list') ||
          request()->is('common/enquiry-details*');
  @endphp

  <li class="menu-item has-submenu {{ $enquiryOpen ? 'active open' : '' }}">

      <a href="javascript:void(0);" class="menu-link">
          <i data-feather="briefcase"></i>
          <span class="menu-text">Enquiry</span>
      </a>

      <ul class="submenu {{ $enquiryOpen ? 'show' : '' }}">

          <!-- Add Enquiry -->
          <li>
              <a href="{{ url('operator/add-enquiry') }}"
                  class="{{ request()->is('operator/add-enquiry') ? 'active' : '' }}">
                  Add Enquiry
              </a>
          </li>


          <!-- Enquiry List -->
          <li>
              <a href="{{ url('common/enquiry-list') }}"
                  class="{{ request()->is('common/enquiry-list') || request()->is('common/enquiry-details*') ? 'active' : '' }}">
                  Enquiry List
              </a>
          </li>

      </ul>

  </li>
  @php
      $dealOpen =
          request()->is('operator/add-deal') ||
          request()->is('common/deal-list') ||
          request()->is('common/deal-details*');
  @endphp

  <li class="menu-item has-submenu {{ $dealOpen ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link">
          <i data-feather="book"></i>
          <span class="menu-text">Deal</span>
      </a>

      <ul class="submenu {{ $dealOpen ? 'show' : '' }}">
          <li>
              <a href="{{ url('operator/add-deal') }}"
                  class="{{ request()->is('operator/add-deal') ? 'active' : '' }}">
                  Add Deal
              </a>
          </li>

          <li>
              <a href="{{ url('common/deal-list') }}"
                  class="{{ request()->is('common/deal-list') || request()->is('common/deal-details*') ? 'active' : '' }}">
                  Deal List
              </a>
          </li>
      </ul>
  </li>

  <!-- Contacts -->
  <li class="menu-item {{ request()->is('common/customer-list') ? 'active' : '' }}">
      <a href="{{ url('common/customer-list') }}" class="menu-link">
          <i data-feather="users"></i>
          <span class="menu-text">Contacts</span>
      </a>
  </li>

  <!-- Reports -->
@php
    $reportOpen =
        request()->is('common/housing-lead-list') ||
        request()->is('common/enquiry-report*');
@endphp

{{-- <li class="menu-item has-submenu {{ $reportOpen ? 'active open' : '' }}">

    <a href="javascript:void(0);" class="menu-link">
        <i data-feather="trello"></i>
        <span class="menu-text">Reports</span>
    </a>

    <ul class="submenu {{ $reportOpen ? 'show' : '' }}">

        <!-- Enquiry Report -->
        <li>
            <a href="{{ url('common/housing-lead-list') }}"
                class="{{ request()->is('common/housing-lead-list') ? 'active' : '' }}">
                Enquiry Report
            </a>
        </li>

    </ul>

</li> --}}
  
