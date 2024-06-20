<nav>
  <div class="nav-content">
    <a href="#">
      <img id="logo" src="/logo.svg" alt="Logo" width="100">
    </a>

    <div class="p-relative">
      <button id="button-expand" type="button" aria-expanded="false">
        <img src="/menu.svg" alt="menu" width="18px" height="12px" />
      </button>

      <div id="menu-content">
        <ul id="menu-links">
          @each('components.menu-item-link-component', $menuItems, 'item')
        </ul>
        
        <button id="search-button" type="button">
          <img src="/search.svg" alt="search" width="20px" height="20px">
        </button>
        
        <ul id="menu-icons">
          @each('components.menu-item-li-component', $liItems, 'item')
        </ul>
      </div>
    </div>
  </div>
</nav>