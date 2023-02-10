@include('layouts.menu')

<x-app-layout>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    {{ Auth::user()->name }}
                    {{ Auth::user()->email }}
                    {{ Auth::user()->useruid }}
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="myteam">Pricing</a>
      <a class="nav-item nav-link disabled" href="myteam" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>

<form action="/myteam" method="get">
<input type="submit">
</form>




</x-app-layout>



