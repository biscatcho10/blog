<div class="row" style="padding: 7px 15px 5px 15px; border-bottom: 1px solid #ccc;">
    <div class="col-1"><img src="img/Untitled-3.png" width="30" alt=""></div>
    <div class="col-1 {{ $active == 'home' ? 'chek' : '' }}"><a href="{{ route('home') }}">Home</a> <span></span>
    </div>
    <div class="col-1 {{ $active == 'feeds' ? 'chek' : '' }}"><a href="{{ route('feeds') }}">Feeds</a><span></span>
    </div>
    <div class="col-1 {{ $active == 'create' ? 'chek' : '' }}"><a href="{{ route('posts.create') }}">Create
            Post</a><span></span></div>
    <div class="col-1 {{ $active == 'posts' ? 'chek' : '' }}"><a href="{{ route('myposts') }}">My
            Posts</a><span></span></div>
    <div class="col-7" style="text-align: right;">
        <div>
            <!-- Authentication Links -->
            <a id="navbarDropdown" class="nav-link dropdown-toggle rounded" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre
                style="width: 170px ; border:none; background-color: #AED6F1; color: #3498DB; float: right;">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
