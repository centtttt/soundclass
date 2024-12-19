<x-app-layout>
    @if(session('message'))
        <div class="alert alert-danger" id="alert-message">
            {{ session('message') }}
        </div>
    @endif
    @if(session('messagesuccess'))
        <div class="alert alert-success" id="alert-message-success">
            {{ session('messagesuccess') }}
        </div>
    @endif
    <main class="container" style="padding: 20px; display: flex; justify-content: center; flex-direction: column; align-items: center;">
        <div class="search-filter" style="display: flex; align-items: center; margin-bottom: 20px;">
            <div style="width: 100%; display: flex;">
                <form action="{{ route('teachers') }}" method="GET">
                    <input type="text" id="search" placeholder="Search . . ." name="search"
                    style="width: 500px; padding: 12px 12px 12px 35px; border-radius: 20px; border: 1px solid #ccc; background-color: #d9d9d9; color: black; font-size: 1em;">
                </form>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-secondary border-0 dropdown-toggle" type="button" id="filterDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    style="padding: 12px 20px; border: none; border-radius: 20px; background-color: #d9d9d9; cursor: pointer; font-size: 1em; margin-left: 20px;">
                    <i class="bi bi-funnel"></i>
                    Filter
                </button>
                <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                    <li>
                        <a class="dropdown-item fw-bold" href="{{ route('teachers', ['filter' => ' ']) }}">All Teachers</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('teachers', ['filter' => 'Piano']) }}">Piano</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('teachers', ['filter' => 'Guitar']) }}">Guitar</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('teachers', ['filter' => 'Drum']) }}">Drum</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('teachers', ['filter' => 'Vocal']) }}">Vocal</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('teachers', ['filter' => 'Violin']) }}">Violin</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('teachers', ['filter' => 'Saxophone']) }}">Saxophone</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="teacher-list"
            style="display: grid; grid-template-columns: repeat(2, 1fr); column-gap: 50px; row-gap: 20px; width: 80%; margin: 0 auto;">
            @foreach ($teachers as $teacher)
                <div class="teacher-card"
                    style="display: flex; background-color: #d9d9d9; padding: 15px; border-radius: 30px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); width: 100%; min-height: 160px; position: relative; align-items: center; font-size: 20px;">
                    <img loading="lazy" src="{{ asset($teacher->imageURL) }}" alt="Teacher"
                        style="width: 150px; height: 250px; margin-inline: 5px; object-fit: cover; border-radius: 20px;">
                    <div class="d-flex flex-column">
                        <div class="teacher-info"
                            style="display: flex; flex-direction: column; font-size: 0.6em; margin-left: 20px; margin-right: 20px; flex: 1;">
                            <h2 style="margin: 5px; font-size: 2em; font-weight: bold;">{{ $teacher->user->name }}</h2>
                            <p class="badge"
                                style="color:black; background-color: #f0f0f0; padding: 4px 8px; border-radius: 10px; font-size: 0.9em; width: 80px; display: inline-block; text-align: center;">
                                <strong>{{ $teacher->user->gender }}</strong>
                            </p>
                            <p style="margin-left: 3px; margin-top: 3px;">Teacher: {{ $teacher->specialization }}</p>
                            <p style="margin-left: 3px;">Location: {{ $teacher->location }}</p>
                            <p class="mt-2" style="margin: 3px;">{{ $teacher->bio }}</p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <form action="{{ route('enrollTeacher', $teacher->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="enroll-btn d-flex justify-content-center"
                                        style="margin-top: 0.5rem; margin-bottom: 0.5rem; background-color: black; color: white; padding: 8px 20px; border: none; border-radius: 30px; cursor: pointer;">
                                    Enroll
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    <script>
        setTimeout(function() {
            document.getElementById('alert-message').style.display = 'none';
        }, 5000); 
        setTimeout(function() {
            document.getElementById('alert-message-success').style.display = 'none';
        }, 10000); 
    </script>
</x-app-layout>