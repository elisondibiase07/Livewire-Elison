<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand">New York</a>
      <button class="navbar-toggler" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" /">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" {{route('article.create')}} ">Crea il tuo articolo</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href=" {{route('index')}} "> All Articles</a>
          </li>
          
      </div>
    </div>
  </nav>