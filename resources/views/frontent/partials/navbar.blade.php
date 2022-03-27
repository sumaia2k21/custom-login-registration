<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

      

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          @if (auth()->user())
          <a href="{{route('logout')}}" type="button" class="btn btn-outline-light me-2">logout</button>
            <a href="" type="button" class="btn btn-warning">{{auth()->user()->name}}</a>
            @else()
         
          <a href="{{route('login')}}" type="button" class="btn btn-outline-light me-2">Login</button>
          <a href="{{route('signup')}}" type="button" class="btn btn-warning">Sign-up</a>
          @endif
        </div>
      </div>
    </div>
  </header>