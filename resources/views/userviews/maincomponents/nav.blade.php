<nav style="background-color: transparent;" class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" style="padding-left: 20px;" href="/"><b>AquaFlow</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item p-2">
                                <a class="nav-link active" aria-current="page" href="/userdashboard">Home</a>
                            </li>
                            <!-- <li class="nav-item dropdown p-2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                                </a>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/insert_students">For Students</a></li>
                                <li><a class="dropdown-item" href="/insert_pets">For Pets</a></li>
                                <li><a class="dropdown-item" href="/insert_vehicals">For Vehicals</a></li>
                                </ul>
                            </li> -->
                
                <!-- <li class="nav-item p-2">
                    <a class="nav-link active" href="#pets">All Pets</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link active" href="#vehicals">All vehicals</a>                        </li>
                <li class="nav-item p-2">
                    <a class="nav-link active" href="/logOut">Log Out</a>
                </li> -->
                @if(Session()->has('loginId'))
                    <li class="nav-item p-2">
                        <a class="nav-link active" href="#orders">Status</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link active" href="/profile?id={{Session::get('loginId')}}">Profile</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link active" href="/logOut">Logout</a>
                    </li>
                    
                    @else
                    <li class="nav-item p-2">
                        <a class="nav-link active" href="/login">Log in</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link active" href="/registration">Register yourself</a>
                    </li>
                    
                    @endif
            </ul>
        </div>
    </div>
</nav>