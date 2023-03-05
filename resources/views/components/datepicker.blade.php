<div class="relative">
    <input class="datepicker s me text-slate-500 hover--text-slate-600 gp xq ol flatpickr-input active" placeholder="Select dates" data-class="flatpickr-right" />
    <div class="g w j flex items-center pointer-events-none">
        <svg class="oo sl du text-slate-500 ml-3" viewBox="0 0 16 16">
            <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
        </svg>
    </div>
</div>

{{--
    
<div class="y">
    <div class="flatpickr-wrapper">
        <input class="datepicker s me text-slate-500 hover--text-slate-600 gp xq ol flatpickr-input active" placeholder="Select dates" data-class="flatpickr-right" type="text" readonly="readonly">
        <div class="flatpickr-calendar rangeMode animate static flatpickr-right open arrowTop arrowLeft" tabindex="-1">
            <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg class="fill-current" width="7" height="11" viewBox="0 0 7 11">
                        <path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z"></path>
                    </svg></span>
                <div class="flatpickr-month">
                    <div class="flatpickr-current-month"><span class="cur-month">February </span>
                        <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div>
                    </div>
                </div><span class="flatpickr-next-month"><svg class="fill-current" width="7" height="11" viewBox="0 0 7 11">
                        <path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z"></path>
                    </svg></span>
            </div>
            <div class="flatpickr-innerContainer">
                <div class="flatpickr-rContainer">
                    <div class="flatpickr-weekdays">
                        <div class="flatpickr-weekdaycontainer">
                            <span class="flatpickr-weekday">
                                Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
                            </span>
                        </div>
                    </div>
                    <div class="flatpickr-days" tabindex="-1">
                        <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="January 29, 2023" tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="January 30, 2023" tabindex="-1">30</span><span class="flatpickr-day prevMonthDay" aria-label="January 31, 2023" tabindex="-1">31</span><span class="flatpickr-day" aria-label="February 1, 2023" tabindex="-1">1</span><span class="flatpickr-day" aria-label="February 2, 2023" tabindex="-1">2</span><span class="flatpickr-day" aria-label="February 3, 2023" tabindex="-1">3</span><span class="flatpickr-day" aria-label="February 4, 2023" tabindex="-1">4</span><span class="flatpickr-day" aria-label="February 5, 2023" tabindex="-1">5</span><span class="flatpickr-day" aria-label="February 6, 2023" tabindex="-1">6</span><span class="flatpickr-day" aria-label="February 7, 2023" tabindex="-1">7</span><span class="flatpickr-day" aria-label="February 8, 2023" tabindex="-1">8</span><span class="flatpickr-day" aria-label="February 9, 2023" tabindex="-1">9</span><span class="flatpickr-day" aria-label="February 10, 2023" tabindex="-1">10</span><span class="flatpickr-day" aria-label="February 11, 2023" tabindex="-1">11</span><span class="flatpickr-day" aria-label="February 12, 2023" tabindex="-1">12</span><span class="flatpickr-day" aria-label="February 13, 2023" tabindex="-1">13</span><span class="flatpickr-day" aria-label="February 14, 2023" tabindex="-1">14</span><span class="flatpickr-day" aria-label="February 15, 2023" tabindex="-1">15</span><span class="flatpickr-day" aria-label="February 16, 2023" tabindex="-1">16</span><span class="flatpickr-day" aria-label="February 17, 2023" tabindex="-1">17</span><span class="flatpickr-day" aria-label="February 18, 2023" tabindex="-1">18</span><span class="flatpickr-day" aria-label="February 19, 2023" tabindex="-1">19</span><span class="flatpickr-day" aria-label="February 20, 2023" tabindex="-1">20</span><span class="flatpickr-day" aria-label="February 21, 2023" tabindex="-1">21</span><span class="flatpickr-day" aria-label="February 22, 2023" tabindex="-1">22</span><span class="flatpickr-day" aria-label="February 23, 2023" tabindex="-1">23</span><span class="flatpickr-day" aria-label="February 24, 2023" tabindex="-1">24</span><span class="flatpickr-day" aria-label="February 25, 2023" tabindex="-1">25</span><span class="flatpickr-day" aria-label="February 26, 2023" tabindex="-1">26</span><span class="flatpickr-day selected startRange" aria-label="February 27, 2023" tabindex="-1">27</span><span class="flatpickr-day inRange" aria-label="February 28, 2023" tabindex="-1">28</span><span class="flatpickr-day nextMonthDay inRange" aria-label="March 1, 2023" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay inRange" aria-label="March 2, 2023" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay inRange" aria-label="March 3, 2023" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay inRange" aria-label="March 4, 2023" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay today selected endRange" aria-label="March 5, 2023" aria-current="date" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="March 6, 2023" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="March 7, 2023" tabindex="-1">7</span><span class="flatpickr-day nextMonthDay" aria-label="March 8, 2023" tabindex="-1">8</span><span class="flatpickr-day nextMonthDay" aria-label="March 9, 2023" tabindex="-1">9</span><span class="flatpickr-day nextMonthDay" aria-label="March 10, 2023" tabindex="-1">10</span><span class="flatpickr-day nextMonthDay" aria-label="March 11, 2023" tabindex="-1">11</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="g w j flex items-center pointer-events-none">
        <svg class="oo sl du text-slate-500 ml-3" viewBox="0 0 16 16">
            <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
        </svg>
    </div>
</div>

--}}

{{--
@props(['id', 'error'])

<input {{ $attributes }} type="text" class="form-control datetimepicker-input @error($error) is-invalid @enderror" id="{{ $id }}" data-toggle="datetimepicker" data-target="#{{ $id }}"
onchange="this.dispatchEvent(new InputEvent('input'))"
/>


@push('before-livewire-scripts')
<script type="text/javascript">
    $('#{{ $id }}').datetimepicker({
        format: 'L'
    });
</script>
@endpush

--}}