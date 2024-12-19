<x-app-layout>
    <style>
        .course-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .course-card a{
            cursor: pointer;
        }

        .course-card:hover {
            transform: scale(1.02);
        }

        .tab-link {
            font-weight: bold;
            font-size: 1rem;
        }

        .tab-link:hover {
            color: red;
        }

        .tab-link.active {
            color: red;
        }

        .search-bar {
            border-radius: 20px;
        }

        .bookmark-icon {
            cursor: pointer;
        }
    </style>
    <div class="container my-4" style="padding: 5rem; padding-top: 0;">
        <div class="d-flex justify-content-center align-items-center mb-4 rounded-pill border-2" style="gap: 3rem;">
            <form action="{{ route('archived') }}" method="GET" style="width: 25rem;"
                class="justify-content-center d-flex align-items-center">
                <button type="submit" class="btn border-0 p-0">
                    <i class="bi bi-search"></i>
                </button>
                <input type="text" class="form-control search-bar border-0" name="search" placeholder="Search . . ."
                    style="box-shadow: none;">
            </form>
            <div class="justify-content-center d-flex" style="gap: 2rem; width: 25rem">
                <a href="{{ route('courses') }}" class="tab-link">All</a>
                <a href="{{ route('archived') }}" class="tab-link active">Archived</a>
            </div>
            <div style="width: 25rem" class="justify-content-end d-flex">
                <div class="dropdown">
                    <button class="btn btn-outline-secondary border-0 dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-funnel"></i>
                        Filter
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                        <li>
                            <a class="dropdown-item fw-bold" href="{{ route('archived', ['filter' => '']) }}">All Archived Course</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('archived', ['filter' => 'Piano']) }}">Piano</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('archived', ['filter' => 'Guitar']) }}">Guitar</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('archived', ['filter' => 'Drum']) }}">Drum</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('archived', ['filter' => 'Vocal']) }}">Vocal</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('archived', ['filter' => 'Violin']) }}">Violin</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('archived', ['filter' => 'Saxophone']) }}">Saxophone</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($bookmarkedCourses as $course)
                <div class="col">
                    <div class="card course-card" style="height: 100%;">
                        <a href="{{ 'coursecontent/' }}{{ $course->id }}">
                            <img loading="lazy" src="{{ asset($course->imageURL) }}" class="card-img-top" alt="{{ $course['title'] }}"
                                style="height: 200px; fit:cover">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $course['title'] }}</h5>
                                <p style="font-size: 10px;" class="card-text text-muted">{{ $course['description'] }}</p>
                            </div>
                        </a>
                        <div class="card-body d-flex justify-content-between align-items-center mt-4">
                            <span class="text-muted">
                                <i class="bi bi-book"></i> {{ $course->total_lessons }} Lessons
                            </span>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-dark rounded-pill mr-1" onclick="enroll({{ $course->id }})">
                                    Enroll
                                </button>
                                <i class="bi bookmark-icon ml-1 {{ auth()->user()->bookmarkedCourses->contains($course->id) ? 'bi-bookmark-fill text-danger' : 'bi-bookmark' }}"
                                    onclick="toggleBookmark({{ $course->id }}, this)" style="cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        function toggleBookmark(courseId, element) {
            fetch(`/courses/${courseId}/bookmark`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
            })
                .then(response => response.json())
                .then(data => {
                    if (data.message.includes('added')) {
                        element.classList.remove('bi-bookmark');
                        element.classList.add('bi-bookmark-fill', 'text-danger');
                    } else {
                        element.classList.remove('bi-bookmark-fill', 'text-danger');
                        element.classList.add('bi-bookmark');
                        location.reload();
                    }
                    alert(data.message);
                })
                .catch(error => console.error('Error:', error));
        }
        function enroll(courseId) {
            fetch(`/courses/${courseId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
            })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</x-app-layout>