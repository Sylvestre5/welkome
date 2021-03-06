<nav class="navbar navbar-expand-lg navbar-light app-nav border border-top-0 border-right-0 border-left-0">
    <a class="navbar-brand text-muted" href="{{ $url }}">
        {{ $title }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        @if (!empty($search))
            <form class="form-inline my-2 my-lg-0" action="{{ $search['action'] }}" method="get">
                <div class="input-group">
                    <input class="form-control" type="search" name="query" placeholder="{{ trans('common.search') }}" aria-label="Search" {{ isset($search['query']) ? 'value=' . $search['query'] : '' }} required>
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text" id="btnGroupAddon">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        @endif

        <ul class="navbar-nav ml-auto">
            @foreach($options as $option)
                @include('partials.li', ['option' => $option])
            @endforeach
        </ul>
    </div>
</nav>