 <ul><li><a href="/">My BLOG: </a></li></ul>
    <ul>
        <li>
            <a href="{{ route('home.index') }}">Home 
              </a>
        </li>
        <li>
           <a href=""> @auth 
                {{Auth::user() -> name}}
                @else
                <a href="{{ route('login') }}"> Login</a>
                @endauth</li></a>
        </li>
    
        <li>
            <a href="/"> Contact</a>
        </li>
    </ul>