<nav>
  <div class="nav-content">
    <a href="#Logo">
      <img id="logo" src="/logo.svg" alt="Logo" width="100">
    </a>

    <div class="d-flex">
      <button class="search-button" type="button">
        <img src="/search.svg" alt="search" width="26px" height="26px">
      </button>

      <div class="p-relative">
        <button id="button-expand" type="button" aria-expanded="false">
          <img src="/menu.svg" alt="menu" width="18px" height="12px" />
        </button>

        <div id="menu-content">
          <ul id="menu-links">
            @each('components.header.nav.menu-item-link-component', $menuItems, 'item')
          </ul>
          
          <button class="search-button lg-hide" type="button">
            <img src="/search-green.svg" alt="search green" width="20px" height="20px">
          </button>
          
          <ul id="menu-icons">
            @each('components.header.nav.menu-item-li-component', $liItems, 'item')
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>