
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('posts.index') }}">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a  href="{{ route('posts.create') }}">Create</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            <a href="{{route('soft.show')}}">Trash</a>
          </li>
          {{-- <li class="breadcrumb-item active" aria-current="page">
            <a href="#">Data</a>
          </li> --}}
        </ol>
      </nav>
    </div>
  </nav>
