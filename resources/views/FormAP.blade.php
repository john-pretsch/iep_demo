<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<style>
    .col-head {
        font-weight: bold;
    }

    .dark-bg {
        background-color: black;
    }

    .text {
        border: black;
    }
    input[type="text"], textarea {
        border: 1px solid black;
    }
    input, label {
    display:block;
    }
    .form-cont{
        padding; 20px:
    }
</style>
<h1 class="text-3xl font-bold ">IEP: Application Form</h1>
<br>
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
    <div class="form-cont">
        <h2 class="text-4x1 col-head">Part I Applicant Information:</h2>
        <div class="grid grid-cols-2 gap-4 bg-gray">
            <div class="col-span-2 col-head">Applicant:</div>
            
            <div class="">
                <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" value="Smith">
        </div>
            <div class="">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" value="John">
        </div>

            <div class="col-span-2"><label for="status">Status:</label>
                <select class="select select-bordered" id="status">
                    <option disabled selected>Select Applicant's Status</option>
                    <option>A&S faculty member with continuous appointment</option>
                    <option>A&S undergraduate student</option>
                    <option>Graduate student</option>
                </select>

            </div>
            <div class=""><label for="sponsor">Sponsoring department or program:</label>
            <select class="select select-bordered" id="status">
                    <option disabled selected>Select Department or Program</option>
                    <option>Biology</option>
                    <option>Chemistry</option>
                    <option>English</option>
                </select>
                </div>
            <div class="">
                <label for="emil">Email Address:</label><input type="text" id="email"></div>
            <div class=""></div>

            <div class="col-span-2 col-head">Co Applicant (if applicable):</div>
            <div class=""><label for="first_name">Last Name:</label><input type="text" id="last_name"></div>
            <div class=""><label for="first_name">First Name:</label><input type="text" id="first_name"></div>


            <div class="col-span-2"><label for="status">Status:</label>
                <select class="select select-bordered" id="status">
                    <option disabled selected>Select Applicant's Status</option>
                    <option>A&S faculty member with continuous appointment</option>
                    <option>A&S undergraduate student</option>
                    <option>Graduate student</option>
                </select>
            </div>
            <div class="">
                <label for="sponsor">Sponsoring department or program:</label>
              <select class="select select-bordered" id="status">
                    <option disabled selected>Select Department or Program</option>
                    <option>Biology</option>
                    <option>Chemistry</option>
                    <option>English</option>
                </select>
                </div>
            <div class=""><label for="emil">Email Address:</label><input type="text" id="email"></div>
            <div class=""></div>

        </div>
    </div>

    <br><hr /><br>


    <div>
        <h2 class="text-4x1 col-head">Part II Project Summary:</h2>
        <div class="grid grid-cols-2 gap-4 bg-white">
            <div class=""><label for="course_code">Course Code:</label><input type="text" id="course_code"></div>
            <div class=""><label for="course_title">Course Title:</label><input type="text" id="course_title"></div>

            <div class=""><label for="num_ug">Estimated total number of undergraduate students enrolled:</label><input
                    type="text" id="num_ug"></div>
            <div class=""><label for="num_st">Maximum number of students propsed to participate in IEP:</label><input
                    type="text" id="num_st"></div>
            <div class=""><label for="num_ug">Location City:</label><input type="text" id="x"></div>
            <div class=""><label for="num_st">Location Country:</label><input type="text" id="x"></div>

            <div id="date-range-picker" date-rangepicker class="flex items-center">
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input id="datepicker-range-start" name="start" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Proposed Start Date">
                </div>
                <span class="mx-4 text-gray-500">to</span>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input id="datepicker-range-end" name="end" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Proposed End Date">

                </div>

            </div>

            <div class="col-span-2"><label for="amount_requested">Amount Requested from Arts and Sciences:</label><input
                    type="text" id="amount_requested"></div>



        </div>
    </div>
    <br />
    <hr />
    <div>
        <h2 class="text-4x1 col-head">Part III Proposed Activity:</h2><br />
        <div class="grid grid-cols-2 gap-4 bg-gray">
            <div class="col-span-2">
                <label for="iep_desc">Description of proposed IEP module:</label>
                <p>Please provide a brief description that is student-facing and can be used in A&S
                    promotional materials.</p>
            </div>
            <div class="col-span-2">
                <textarea id="iep_desc" style="border:1px solid #000" rows="5" cols="65"></textarea>
            </div>

            <div class="col-span-2">
                <label for="academic_outcomes">Planned academic outcomes:</label>
                <p>What are the learning objectives of this module and how does the IEP enhance
                    students’ (both IEP participants and non-participants) learning for the course in
                    which it is embedded?</p>
            </div>
            <div class="col-span-2">
                <textarea id="iep_desc" style="border:1px solid #000" rows="5" cols="65"></textarea>
            </div>

            <div class="col-span-2">
                <p>All undergraduate students, graduate students, and faculty taking part in
                    international opportunities must meet the UofT Safety Aboard guidelines as
                    noted on the Safety Abroad website:
                    http://www.studentlife.utoronto.ca/cie/safety-abroad in order to participate.
                    Support will be provided by the Professional and International Programs (PIP)
                    office at Woodsworth College to ensure safety abroad requirements are met.</p><br />
            </div>

        </div>



    </div>
    <hr />
    <div>
        <h2 class="text-4x1 col-head">Part IV Itinerary and Budget:</h2><br />
        <div class="grid grid-cols-2 gap-4 bg-gray">
            <div class="col-span-2">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Dates</th>
                            <th class="px-4 py-2">Item Type</th>
                            <th class="px-4 py-2">Item</th>
                            <th class="px-4 py-2">Amount and description</th>
                            <th class="px-4 py-2">Total</th>
                            <th class="px-4 py-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">May 15, 2025</td>
                            <td class="border px-4 py-2">Travel</td>
                            <td class="border px-4 py-2">Flight: Toronto – Country X - Toronto</td>
                            <td class="border px-4 py-2">$1,500 x 5 students + 1 instructor</td>
                            <td class="border px-4 py-2">$9000</td>
                            <td class="border px-4 py-2"><button btn btn-primary>Remove</button></td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">May 16 - May 22, 2025</td>
                            <td class="border px-4 py-2">Accommodation</td>
                            <td class="border px-4 py-2">Double occupancy for students</td>
                            <td class="border px-4 py-2">4 rooms @ $40/day x 7 nights = $280</td>
                            <td class="border px-4 py-2">$1120</td>
                            <td class="border px-4 py-2"><button btn btn-primary>Remove</button></td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">May 16 - May 0-2-2h-2V1a1, 2025</td>
                            <td class="border px-4 py-2">Food</td>
                            <td class="border px-4 py-2">6 participants @ $25/day x 7 days</td>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2">$1750</td>
                            <td class="border px-4 py-2"><button btn btn-primary>Remove</button></td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2">Other funds:</td>
                            <td class="border px-4 py-2">Dept. X providing plane ticket for faculty
                                member</td>
                            <td class="border px-4 py-2">($1500)</td>
                            <td class="border px-4 py-2">($1500)</td>
                            <td class="border px-4 py-2"><button btn btn-primary>Remove</button></td>
                        </tr>
                        <tr><td class="border px-4 py-2" colspan="6"><button btn btn-primary>Add New Line</button></td></tr>
                    </tbody>
                </table>
            </div>


        </div>



    </div>
    </div>

</form>