<div class="d-flex flex-column bg-light col-2">
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link active" aria-current="page">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('projects.index') }}" class="nav-link link-dark">
                Projects
            </a>
        </li>
        <li>
            <a href="{{ route('compounds.index') }}" class="nav-link link-dark">
                Compounds
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark">
                Import
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark">
                Export
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="bg-dark rounded-circle me-2" style="width: 32px; height:32px;"></span>
            <strong>{{ Auth()->user()->name }}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
