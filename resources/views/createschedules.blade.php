<x-app-layout>
    <style>
        .form-group input{
            border-radius: 10px;
            background-color: #D9D9D9;
        }

        .form-group select{
            border-radius: 10px;
            background-color: #D9D9D9;
        }

        .btn{
            background-color: gray;
            color: black;
        }

        .btn:hover{
            background-color: #D9D9D9;
        }
    </style>
    <div class="d-flex flex-row">
        <div id='calendar' class="m-4 fw-bold" style="width: 50%; cursor: pointer;">
    
        </div>
        <div class="container p-4" style="width: 50%;">
            <h1 class="mb-2 fw-bold" style="font-size: 2rem;">Select Schedule</h1>
    
            @if(session('message'))
                <div class="alert alert-success" id="alert-message">{{ session('message') }}</div>
            @endif
            @if(session('message-error'))
                <div class="alert alert-danger" id="danger-message">{{ session('message-error') }}</div>
            @endif
    
            <form action="{{ route('schedules.store') }}" method="POST">
                @csrf
                <div class="form-group fw-bold mb-3">
                    <label for="course_name">Course Name</label>
                    <input type="text" name="course_name" id="course_name" class="form-control" required>
                </div>
    
                <div class="form-group fw-bold mb-3">
                    <label for="schedule_date">Schedule Date</label>
                    <input type="date" name="schedule_date" id="schedule_date" class="form-control" required>
                </div>
    
                <div class="form-group fw-bold mb-2">
                    <label for="start_time">Start Time</label>
                    <select name="start_time" id="start_time" class="form-control" required>
                        <option value="08:00">08:00</option>
                        <option value="10:00">10:00</option>
                        <option value="13:00">13:00</option>
                        <option value="15:00">15:00</option>
                        <option value="17:00">17:00</option>
                    </select>
                </div>
    
                <div class="form-group fw-bold mb-3">
                    <label for="end_time">End Time</label>
                    <input type="text" name="end_time" id="end_time" class="form-control" readonly required></input>
                </div>

                <button type="submit" class="btn mt-2">Create Schedule</button>
            </form>
        </div>
    </div>
    <script>
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0');
        const day = String(today.getDate()).padStart(2, '0');

        const todayDate = `${year}-${month}-${day}`;
        document.getElementById('schedule_date').setAttribute('min', todayDate);

        function setDefaultEndTime() {
            const startTime = document.getElementById('start_time').value;
            const [hours, minutes] = startTime.split(':');
            const newHours = parseInt(hours) + 2; 
            const endTime = `${String(newHours).padStart(2, '0')}:${minutes}`;
            document.getElementById('end_time').value = endTime;
        }

        setDefaultEndTime();

        document.getElementById('start_time').addEventListener('change', function () {
            const startTime = this.value; 
            const [hours, minutes] = startTime.split(':');
            const newHours = parseInt(hours) + 2; 
            const endTime = `${String(newHours).padStart(2, '0')}:${minutes}`;
            document.getElementById('end_time').value = endTime; 
        });
        
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    @foreach ($availableSchedules as $as)
                        {
                            title: '{{ $as->course_name }}',
                            start: '{{ $as->start_time }}',
                            end: '{{ $as->end_time }}'
                        },
                    @endforeach
                ],
                selectable: true,
                select: function (info) {
                    // Mengisi input schedule_date dengan tanggal yang dipilih
                    document.getElementById('schedule_date').value = info.startStr;
                }
            });
            calendar.render();
        }); 

        setTimeout(function() {
            document.getElementById('alert-message').style.display = 'none';
        }, 5000); 

        setTimeout(function() {
            document.getElementById('danger-message').style.display = 'none';
        }, 10000);
    </script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js'></script>
</x-app-layout>