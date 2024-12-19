<style>
    .date:hover{
            transform: scale(0.9);
            color: white;
        }

        .date:active{
            transform: scale(0.7);
        }

        .blr:hover{
            transform: scale(1.1);
    }
    
    .my-course {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #D9D9D9;
        border: 2px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        width: 50%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin: 10px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        cursor: pointer;
    }

    .my-course:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .my-course img {
        width: 50px;
        height: 50px;
        margin-right: 15px;
        border-radius: 10px;
    }

    .my-course .course-text {
        font-size: 18px;
        font-weight: bold;
    }
</style>
<x-app-layout>
    <!-- Content -->
    <div class="content mt-2 mb-4 p-4"
        style="display: flex; flex-wrap: wrap; justify-content: center; align-items: start;">
        <!-- Left Content -->
        <div class="left-content" style="display: flex; flex-direction: column; width: 50%;">
            <!-- Next Class Frame -->
            <div class="next-class-frame" style="margin: 10px;">
                <p style="font-family: Arial, Helvetica, sans-serif; color: black; font-size: 30px; font-weight: bold;">
                    Next Class</p>

                <!-- Next Class -->
                <div class="next-class"
                    style="padding: 10px; background-color: #D9D9D9; width: 90%; border-radius: 20px">
                    @if ($schedules->where('schedule_date', '>=', now())->isNotEmpty())
                        @foreach($schedules->where('schedule_date', '>=', now())->take(3) as $schedule)
                            <div class="class1" style="margin: 5px; padding: 5px; background-color: white; border-radius: 10px">
                                <p style="margin-left: 10px; font-size: 18px; font-weight: bold;">
                                    {{ \Carbon\Carbon::parse($schedule->schedule_date)->format('l, jS F Y') }}
                                </p>
                                <hr>
                                <p style="margin-left: 10px; font-size: 18px;">{{ $schedule->course_name }}</p>
                            </div>
                        @endforeach
                    @else
                        <div class="class1" style="margin: 5px; padding: 5px; background-color: white; border-radius: 10px">
                            <p style="margin-left: 10px; font-size: 18px; font-weight: bold;">
                                {{ \Carbon\Carbon::parse(now())->format('l, jS F Y') }}
                            </p>
                            <hr>
                            <p style="margin-left: 10px; font-size: 18px;">No schedules available at the moment.</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Notification Frame -->
            <div class="notification-frame" style="margin: 10px;">
                <p style="font-family: Arial, Helvetica, sans-serif; color: black; font-size: 30px; font-weight: bold;">
                    Notification</p>

                <!-- Notifications -->
                <div class="notification"
                    style="padding: 10px; background-color: #D9D9D9; width: 90%; border-radius: 20px">

                    <!-- Notification1 -->
                    <div class="notification1"
                        style="margin: 5px; padding: 5px; background-color: white; border-radius: 10px">
                        <p style="margin-left: 10px; font-size: 18px; font-weight: bold;">Soundclass Notification</p>
                        <hr>
                        <p style="margin-left: 10px; font-size: 18px;">The latest class schedules are now available! Choose the days and times that work best for you directly on the SoundClass platform. Don’t miss the chance to learn music with us! Access now for more details.
                        </p>
                    </div>

                    <!-- Notification2 -->
                    <div class="notification2"
                        style="margin: 5px; padding: 5px; background-color: white; border-radius: 10px">
                        <p style="margin-left: 10px; font-size: 18px; font-weight: bold;">Soundclass Notification</p>
                        <hr>
                        <p style="margin-left: 10px; font-size: 18px;">Exciting news! Our updated class schedules are ready. Explore flexible time slots and start your musical journey with SoundClass today!</p>
                    </div>

                    <div class="notification2"
                        style="margin: 5px; padding: 5px; background-color: white; border-radius: 10px">
                        <p style="margin-left: 10px; font-size: 18px; font-weight: bold;">Soundclass Notification</p>
                        <hr>
                        <p style="margin-left: 10px; font-size: 18px;">Your onsite classes started at 08:00 today!</p>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row mt-4" style="width: 90%;">
                <a class="my-course" href="{{ route('mycourses') }}">
                    <img loading="lazy" class="object-fit-cover" src="https://logowik.com/content/uploads/images/black-open-book938.logowik.com.webp">
                    <div class="course-text">My Courses</div>
                </a>
                <a class="my-course" href="{{ route('community') }}">
                    <img loading="lazy" class="object-fit-cover" src="https://logowik.com/content/uploads/images/people-talking5832.logowik.com.webp">
                    <div class="course-text">Soundclass Community</div>
                </a>
            </div>
        </div>

        <!-- Right Content -->
        <div class="right-content" style=" display: flex; flex-direction: column; width: 50%;">
            @foreach ($enroll as $enrolls)
                <div class="teacher-card"
                    style="display: flex; background-color: ; padding: 20px; border-radius: 20px; align-items: center; margin: 10px;">
                    <img src="{{ asset($enrolls->teacher->imageURL) }}" alt="Teacher"
                        style="width: 120px; height: 120px; border-radius: 20px; object-fit: cover; margin-right: 20px;">
                    <div class="teacher-info" style="display: flex; flex-direction: column;">
                        <h3 style="font-size: 2em; font-weight: bold; margin: 0;">Your Teacher:</h3>
                        <h4 style="font-size: 1.5em; font-weight: bold; margin: 0;">{{ $enrolls->teacher->user->name }}</h4>
                        <p style="font-size: 1em; margin: 5px 0; color: #555;">Specialization: {{ $enrolls->teacher->specialization }}</p>
                    </div>
                    <div class="ml-auto">
                        <a href="{{ route('schedules.create') }}">
                        <button class="btn btn-dark">Create Schedule</button>
                        </a>
                    </div>
                </div>
            @endforeach
            <!-- Schedule Frame -->
            <div class="schedule-frame" style="margin: 10px;">
                <p style="font-family: Arial, Helvetica, sans-serif; color: black; font-size: 30px; font-weight: bold;">
                    Schedules</p>

                <!-- Calendar Frame -->
                <div class="calendar-frame" style="padding: 10px; background-color: #D9D9D9; border-radius: 20px;">

                    <!-- Month, Year -->
                     <div class="d-flex flex-row justify-content-center align-items-center gap-3">
                         <button class="blr btn rounded-circle" onclick="changeMonth(-1)" style="background-color: white; border: none; font-size: 20px;">&#8592;</button>
                         <div class="month-year"
                             style="padding: 10px; background-color: white; width: 50%; border-radius: 20px; justify-content: center; display: flex;">
                             <p id="month-year" style="margin: 0; font-weight: bold; display: flex; align-items: center;"></p>
                         </div>
                         <button class="blr btn rounded-circle" onclick="changeMonth(1)" style="background-color: white; border: none; font-size: 20px;">&#8594;</button>
                     </div>

                    <!-- Calendar -->
                    <div class="calendar"
                        style="margin: 20px; padding: 10px; background-color: white; border-radius: 10px;">

                        <!-- Day -->
                        <div id="day-grid"
                            style="padding: 10px; display: grid; grid-template-rows: repeat(1, 1fr); grid-template-columns: repeat(7, 1fr);">
                            <!-- Day List -->
                        </div>

                        <!-- Date -->
                        <div id="date-grid"
                            style="padding: 10px; display: grid; grid-template-rows: repeat(6, 1fr); grid-template-columns: repeat(7, 1fr);">
                            <!-- Date List -->
                        </div>

                        <div class="d-flex text-align-center justify-content-center align-items-center gap-2">
                            <div style="width: 1rem; height: 1rem; background-color: red; border-radius: 50%;">
                                <span></span></div>
                            <span>Today</span>
                            <div style="width: 1rem; height: 1rem; background-color: gray; border-radius: 50%;">
                                <span></span></div>
                            <span>Onsite Class</span>
                        </div>
                    </div>

                    <!-- Event -->
                    <div id="event" style="">
                        <div class="event-frame"
                            style="margin: 20px; padding: 10px; background-color: white; border-radius: 20px;">
                            <p id="selected-date" style="margin: 5px; padding: 5px; font-weight: bold;">Click an
                                existing appointment schedule</p>
                            <p style="margin-left: 10px; font-size: 18px; color: gray;">No schedules on this date.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <script>
        var currentDate = new Date();
        var today = currentDate.getDate();
        var month = currentDate.getMonth();
        var year = currentDate.getFullYear();
        var monthname = new Intl.DateTimeFormat('en-US', { month: 'long' }).format(currentDate);
        var num_date = 0;
        var dates = [];
        var schedules = @json($schedules);

        function updateCalendar() {
            var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            var dayStr = ``;
            var dateStr = ``;

            if (month == 1 && ((year % 4 == 0 && year % 100 != 0) || (year % 400 == 0))) {
                num_date = 29; 
            } else if (month == 1) {
                num_date = 28;
            } else if (month % 2 != 0 && month <= 7) {
                num_date = 31;
            } else if (month % 2 == 0 && month <= 7) {
                num_date = 30;
            } else if (month % 2 == 0 && month > 7) {
                num_date = 31;
            } else if (month % 2 != 0 && month > 7) {
                num_date = 30;
            }

            monthname = new Intl.DateTimeFormat('en-US', { month: 'long' }).format(new Date(year, month));
            document.getElementById("month-year").textContent = `${today} ${monthname} ${year}`;

            for (var i = 0; i < 7; i++) {
                dayStr += `<div class="day" style="margin: 0.2vw; display: flex; justify-content: center;">${days[i]}</div>`;
            }

            var has = @json($schedules).map(schedule => {
                var scheduleDate = new Date(schedule.schedule_date);
                return {
                    day: scheduleDate.getDate(),
                    month: scheduleDate.getMonth(),
                    year: scheduleDate.getFullYear()
                };
            });

            for (var i = 0; i < num_date; i++) {
                var currentDay = i + 1;
                var isToday = (currentDay === today && month === currentDate.getMonth() && year === currentDate.getFullYear());

                var hasSchedule = has.some(schedule => {
                    return schedule.day === currentDay &&
                        schedule.month === month &&
                        schedule.year >= year && 
                        schedule.year <= year + 1;
                });

                var dateClass = isToday ? 'today' : hasSchedule ? 'has-schedule' : '';
                dateStr += `<div class="date ${dateClass}" 
                style="margin: 2px; padding: 0.5vw; display: flex; justify-content: center; 
                cursor: pointer; border-radius: 20px;
                background-color: ${isToday ? 'red' : hasSchedule ? 'gray' : '#D9D9D9'};" 
                onclick="showEvent(${currentDay})">${currentDay}</div>`;
            }
            document.getElementById("day-grid").innerHTML = dayStr;
            document.getElementById("date-grid").innerHTML = dateStr;
        }

        function changeMonth(direction) {
            month += direction;
            if (month < 0) {
                month = 11;
                year--;
            } else if (month > 11) {
                month = 0;
                year++;
            }
            updateCalendar();
        }

        updateCalendar();

        function showEvent(event) {
            selected = event + ' ' + monthname + ' ' + year;
            var fullDate = `${year}-${(month + 1).toString().padStart(2, '0')}-${event.toString().padStart(2, '0')}`;
            var filteredSchedules = schedules.filter(schedule => schedule.schedule_date === fullDate);
            var eventStr = `<div class="event-frame" style="margin: 20px; padding: 10px; background-color: white; border-radius: 20px;">
                <p id="selected-date" style="margin: 5px; padding: 5px; font-weight: bold;">${selected}</p>`;
            if (filteredSchedules.length > 0) {
                filteredSchedules.forEach(schedule => {
                    eventStr += `<div class="event-item" style="margin: 5px; padding: 5px; background-color: #D9D9D9; border-radius: 10px;">
                        <p style="margin-left: 10px; font-size: 18px; font-weight: bold;">${schedule.course_name}</p>
                        <hr>
                        <p style="margin-left: 10px; font-size: 18px;">${schedule.start_time} - ${schedule.end_time}</p>
                    </div>`;
                });
            } else {
                eventStr += `<p style="margin-left: 10px; font-size: 18px; color: gray;">No schedules on this date.</p>`;
            }
            eventStr += `</div>`;
            document.getElementById("event").innerHTML = eventStr;
        }
    </script>
</x-app-layout>