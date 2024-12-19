<x-app-layout>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-direction: column;
            font-family: Arial, Helvetica, sans-serif;
        }

        .courseHeader {
            width: 100%;
            height: 350px;
            background-color: grey;
            display: flex;
            align-items: center;
        }

        .courseHeader iframe {
            margin-left: 30px;
            border-radius: 10px;
        }

        .courseHeaderText {
            margin-left: 30px;
        }

        .courseHeaderText h1 {
            font-size: 48px;
            margin-bottom: 30px;
        }

        .courseMaker {
            display: flex;
            align-items: center;
            gap: 20px;
            width: 100%;
        }

        .courseMaker img {
            border-radius: 50%;
            width: 4rem;
            height: 4rem;
            margin-left: 0px;
        }

        .courseMaker span {
            font-weight: bold;
            font-size: 20px;
        }

        .courseContentContainer {
            display: flex;
            justify-content: center;
        }

        .courseContentContainer2 {
            display: flex;
            flex-direction: column;
            width: 90%;
        }

        .courseContent {
            display: flex;
            flex-direction: column;
        }

        .courseContent {
            height: auto;
        }

        .videoContent {
            background-color: gray;
            width: 70%;
            height: 40px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .videoContent span {
            font-size: 16px;
            margin-top: 0;
            margin-left: 20px;
            color: white;
        }

        .videoContent:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.2);
        }

        .videoContent2 {
            text-decoration: none;
        }

        /* separator */

        .button-29 {
            align-items: center;
            appearance: none;
            background-image: gray;
            border: 0;
            border-radius: 6px;
            box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-flex;
            font-family: "JetBrains Mono",monospace;
            height: 48px;
            justify-content: center;
            line-height: 1;
            list-style: none;
            overflow: hidden;
            padding-left: 16px;
            padding-right: 16px;
            position: relative;
            text-align: left;
            text-decoration: none;
            transition: box-shadow .15s,transform .15s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            will-change: box-shadow,transform;
            font-size: 18px;
        }

        .button-29:focus {
            box-shadow: gray 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, white 0 -3px 0 inset;
        }

        .button-29:hover {
            box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, white 0 -3px 0 inset;
            transform: translateY(-2px);
        }

        .button-29:active {
            box-shadow: white 0 3px 7px inset;
            transform: translateY(2px);
        }

        /* separator */

        .ratings-container {
            display: flex;
            justify-content: space-between;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .most-liked, .expectations-met {
            width: 48%;
        }
        .section-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .most-liked ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .most-liked li {
            display: flex;
            align-items: center;
            font-size: 1rem;
            margin-bottom: 10px;
        }
        .most-liked li .icon {
            color: #222;
            margin-right: 10px;
            font-size: 1.2rem;
        }
        .most-liked li span {
            font-weight: bold;
            color: #333;
            margin-right: 5px;
        }
        .expectations-met .bar-container {
            margin-bottom: 10px;
        }
        .expectations-met .bar-container:last-child {
            margin-bottom: 0;
        }
        .expectations-met .bar-title {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }
        .expectations-met .bar {
            height: 10px;
            border-radius: 5px;
            background-color: #e0e0e0;
            position: relative;
        }
        .expectations-met .bar .filled {
            height: 100%;
            border-radius: 5px;
            background-color: gray;
            position: absolute;
            left: 0;
            top: 0;
        }

        /* separator */

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

        .course-card:active {
            transform: scale(0.95);
        }
    </style>

    <div class="mb-4">
        <div class="courseHeader">
            <iframe width="500" height="290" 
                src="https://www.youtube.com/embed/BBz-Jyr23M4?si=cMSq2uos_BWKNZVz" 
                title="YouTube video"
                frameborder="0"
                allow="autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>    
            </iframe>
            <div class="courseHeaderText">
                <h1>Acoustic Guitar Lessons for Beginner to Intermediate</h1>
                <div class="courseMaker">
                    <img loading="lazy" src="{{ asset('images/andy.jpg') }}">
                    <span>Andy Guitar, Music Instructor</span>
                </div>
            </div>
        </div>
        <div class="courseContentContainer mb-4">
            <div class="courseContentContainer2">
                <span style="font-size: 30px; font-weight: bold;" class="mt-4 mb-4">Lessons in This Course</span>
                <div class="courseContent">
                    <a href="https://www.youtube.com/watch?v=BBz-Jyr23M4&list=PL-RYb_OMw7GfqsbipaR65GDDzA1rP5deq&index=1"
                        target="_blank" class="videoContent2">
                        <div class="videoContent">
                            <span>1. Guitar Lesson 1 - Absolute Beginner? Start Here!</span>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/watch?v=6Jxz9F3CYuo&list=PL-RYb_OMw7GfqsbipaR65GDDzA1rP5deq&index=2&t=181s"
                        target="_blank" class="videoContent2">
                        <div class="videoContent">
                            <span>2. Guitar Lesson 2 - EASY 2 CHORD SONG & LEAD GUITAR</span>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/watch?v=SV2ehlxGEFw&list=PL-RYb_OMw7GfqsbipaR65GDDzA1rP5deq&index=3"
                        target="_blank" class="videoContent2">
                        <div class="videoContent">
                            <span>3. Guitar Lesson 3 - 'Three Little Birds' Guitar Tutorial</span>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/watch?v=VK1Fe0mnXvE&list=PL-RYb_OMw7GfqsbipaR65GDDzA1rP5deq&index=4"
                        target="_blank" class="videoContent2">
                        <div class="videoContent">
                            <span>4. Guitar Lesson 4 - Your First Riff!</span>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/watch?v=VCIsdvZheC8&list=PL-RYb_OMw7GfqsbipaR65GDDzA1rP5deq&index=5"
                        target="_blank" class="videoContent2">
                        <div class="videoContent">
                            <span>5. Guitar Lesson 5 - 'Ooh La la' Rod Stewart & NEW Melody!</span>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/watch?v=Zr0WmWpeWL8&list=PL-RYb_OMw7GfqsbipaR65GDDzA1rP5deq&index=6"
                        target="_blank" class="videoContent2">
                        <div class="videoContent">
                            <span>6. Guitar Lesson 6 - EASY Fingerstyle & Minor Chords - Ain't no sunshine
                                Tutorial</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="m-4">
            <hr>
        </div>
        <div class="courseContentContainer mt-4 mb-4">
            <div class="courseContentContainer2 gap-4">
                <span style="font-size: 30px; font-weight: bold;">Meet Your Teacher</span>
                <div class="d-flex flex-row justify-content-center align-items-center" style="background-color: grey; width: 45rem; border-radius: 30px; padding: 10px">
                    <img loading="lazy" src="{{ asset('images/andy.jpg') }}" class="rounded-circle m-2" style="width: 5rem; height: 5rem;">
                    <span style="font-size: 30px; font-weight: bold;" class="ml-4">Andy Guitar, Music Instructor</span>
                    <a href="">
                        <button class="button-29 m-4" role="button">Enroll</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="m-4">
            <hr>
        </div>
        <div class="courseContentContainer mt-4 mb-4">
            <div class="courseContentContainer2">
                <span style="font-size: 30px; font-weight: bold;">About This Course</span>
            </div>
        </div>
        <div class="courseContentContainer mt-4 mb-4">
            <div class="courseContentContainer2">
                    <h3>Andy Guitar offers a comprehensive, approachable, and fun way to learn guitar, designed for beginners and advancing players alike. Led by Andy Crowley, this free online resource features step-by-step tutorials covering chords, strumming patterns, fingerpicking, and even full-song playthroughs.</h3>
                <div class="mt-3 mb-1">
                    <h1 class="fw-bold">What You'll Learn:</h1>
                    <li>Beginner Essentials: Master the basics with lessons on holding the guitar, tuning, and playing your first chords and songs.</li>
                    <li>Song Tutorials: Learn popular songs across genres, with guidance tailored to your skill level.</li>
                    <li>Techniques and Theory: Improve your strumming, fingerpicking, and rhythm, while understanding music theory in a simple and practical way.</li>
                    <li>Style Variety: Explore different genres, including pop, rock, blues, and acoustic classics.</li>
                </div>
                <div class="mt-3 mb-1"></div>
                    <h1 class="fw-bold">Why Andy Guitar?</h1>
                    <li>Clear Instructions: Lessons are easy to follow and paced for learning at your speed.</li>
                    <li>Free Resources: Access chord diagrams, downloadable materials, and bonus content on the website.</li>
                    <li>Supportive Community: Join thousands of learners worldwide sharing progress and tips.</li> 
                    <h3 class="mt-4">Whether you're picking up a guitar for the first time or looking to level up, Andy Guitar's channel provides everything you need to start making music today!</h3>
                </div>
            </div>
        </div>
        <div class="m-4">
            <hr>
        </div>
        <div class="courseContentContainer mt-4 mb-4">
            <div class="courseContentContainer2">
                <div class="ratings-container">
                    <div class="most-liked">
                        <div class="section-title">Most Liked</div>
                        <ul>
                            <li><span class="icon">❤</span> <span>10</span> Engaging Teacher</li>
                            <li><span class="icon">❤</span> <span>23</span> Student Motivation</li>
                            <li><span class="icon">❤</span> <span>38</span> Comprehensive Content</li>
                            <li><span class="icon">❤</span> <span>9</span> Engaging Activities</li>
                            <li><span class="icon">❤</span> <span>40</span> Relevant Examples</li>
                        </ul>
                    </div>
                    <div class="expectations-met">
                        <div class="section-title">Expectations Met?</div>
                        <div class="bar-container">
                            <div class="bar-title">
                                <span>Exceeded!</span>
                                <span>79%</span>
                            </div>
                            <div class="bar">
                                <div class="filled" style="width: 79%;"></div>
                            </div>
                        </div>
                        <div class="bar-container">
                            <div class="bar-title">
                                <span>Yes</span>
                                <span>16%</span>
                            </div>
                            <div class="bar">
                                <div class="filled" style="width: 16%;"></div>
                            </div>
                        </div>
                        <div class="bar-container">
                            <div class="bar-title">
                                <span>Somewhat</span>
                                <span>5%</span>
                            </div>
                            <div class="bar">
                                <div class="filled" style="width: 5%;"></div>
                            </div>
                        </div>
                        <div class="bar-container">
                            <div class="bar-title">
                                <span>Not really</span>
                                <span>0%</span>
                            </div>
                            <div class="bar">
                                <div class="filled" style="width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-4">
            <hr>
        </div>
        <div class="courseContentContainer mt-4 mb-4">
            <div class="courseContentContainer2">
                <span style="font-size: 30px; font-weight: bold;">Another Course Like This</span>
                <div class="mt-1 row row-cols-1 row-cols-md-4 g-4">
                    @foreach ($relatedCourses as $course)
                        <div class="col">
                            <div class="card course-card" style="height: 100%;">
                                <a href="{{ $course->id }}">
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