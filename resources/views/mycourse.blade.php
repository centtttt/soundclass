<x-app-layout>
    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
        }

        .header {
            text-align: center;
            padding: 15px;
            background-color: gray;
            color: #fff;
        }

        .header h1 {
            margin: 0;
            font-size: 32px;
            font-weight: bold;
        }

        .main-container {
            max-width: 1200px;
            margin: 20px auto;
            justify-content: center;
            display: flex;
            padding: 20px;
        }

        .course-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .course-card {
            background-color: #fff;
            width: calc(33.333% - 20px);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s;
        }

        .course-card:hover {
            transform: scale(1.05);
        }

        .course-image {
            width: 100%;
            height: 150px;
            background-size: cover;
            background-position: center;
        }

        .course-details {
            padding: 15px;
        }

        .course-details h3 {
            font-size: 20px;
            margin: 0 0 10px;
            color: #black;
        }

        .course-details p {
            margin: 0 0 10px;
            font-size: 14px;
            color: #555;
        }

        .progress-bar {
            position: relative;
            background-color: #ddd;
            border-radius: 10px;
            overflow: hidden;
            height: 10px;
            margin-bottom: 10px;
        }

        .progress-bar-inner {
            background-color: gray;
            height: 100%;
            width: 0;
            transition: width 0.5s;
        }

        .course-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            color: #555;
        }

        .course-footer a {
            color: black;
            text-decoration: none;
        }

        .course-footer a:hover {
            text-decoration: underline;
        }
        
        .course-description {
            flex: 1;
            padding: 5px; 
            overflow: hidden;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .course-card {
                width: calc(50% - 10px);
            }
        }

        @media (max-width: 480px) {
            .course-card {
                width: 100%;
            }
        }
    </style>

    <!-- Header -->
    <div class="header">
        <h1>My Courses</h1>
    </div>

    <div class="main-container">
        <div class="course-container">
            @foreach ($enrollments as $enrollment) 
                <div class="course-card">
                    <div class="course-image" style="background-image: url('{{ asset($enrollment->course->imageURL) }}');"></div>
                    <div class="course-details">
                        <h3>{{ $enrollment->course->title }}</h3>
                        <div class="course-description">
                            <p>{{ $enrollment->course->description }}</p>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-bar-inner" style="width: {{ $enrollment->progress }}%;"></div>
                        </div>
                        <div class="course-footer">
                            <span>Progress: {{ $enrollment->progress }}%</span>
                            <a href="#">Continue</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
