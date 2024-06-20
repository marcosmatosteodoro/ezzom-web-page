<header>
  <div id="header">
    <div id="root-video">
      <video  autoplay loop muted controls>
        <source src="/video.mp4" type="video/mp4">
      </video>
    </div>

    <div id="header-border-top">
      <div></div>
    </div>
    
    <div id="root-menu">
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

      <div id="title-group">
        <h1>
          Novas <span>modalidades</span> e ampliaçãode <span>horários.</span>
        </h1>
        
        <h2>
          Aulas de 45 minutos e período de teste gratuito.
        </h2>

        <button class="outline-light" type="button">
          SAIBA MAIS
        </button>
      </div>
    </div>
  </div>
</header>

<div id="fixed-component">
  <button type="button">
    <img src="/whatsapp.svg" alt="whatsapp" />
  </button>
</div>