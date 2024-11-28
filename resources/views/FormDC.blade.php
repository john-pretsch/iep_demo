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
    .roline{
        padding; 0px;
        border; 0px;
        
    }
</style>
<h1 class="text-3xl font-bold ">IEP: Application Review Form</h1>
<br>
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
    <div class="form-cont">
             <h2 class="text-4x1 col-head">Applicant Information:</h2>
            
            <div class="col-span-2 roline">Last Name: Smith</div>
            <div class="col-span-2 roline">First Name: John</div>
            <div class="col-span-2 roline">Status: A&S faculty member with continuous appointment</div>
            <div class="col-span-2 roline">Email: john.smith@mail.com</div><br>

            <h2 class="text-4x1 col-head">Co Applicant Information:</h2>
            
            <div class="col-span-2 roline">Last Name: Jane</div>
            <div class="col-span-2 roline">First Name: Doe</div>
            <div class="col-span-2 roline">Status: A&S faculty member with continuous appointment</div>
            <div class="col-span-2 roline">Email: jane.Double@mail.com</div><br>


            <h2 class="text-4x1 col-head">Project Summary:</h2>
            
            <div class="col-span-2 roline">Course Code: ABC123</div>
            <div class="col-span-2 roline">Course Title: Organic Chemistry</div>
            <div class="col-span-2 roline">Estimated number of undergraduate students: 300</div>
            <div class="col-span-2 roline">Maximum number of students propsed to participate: 30</div>
            <div class="col-span-2 roline">Location City: Tokyo</div>
            <div class="col-span-2 roline">Location Country: Japan</div><br>
            <div class="col-span-2 roline">Start Date: 2025-02-01</div>
            <div class="col-span-2 roline">End Date: 2025-02-15</div><br>

            <h2 class="text-4x1 col-head">Propsed Activity:</h2>
            
            <div class="col-span-2 roline">Propsed Activity: some text</div>
            <div class="col-span-2 roline">Planned academic outcomes: some text...learn to speak Japanese</div>


        <br>     
        <h2 class="text-4x1 col-head">Itinerary and Budget:</h2><br />
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">May 15, 2025</td>
                            <td class="border px-4 py-2">Travel</td>
                            <td class="border px-4 py-2">Flight: Toronto – Country X - Toronto</td>
                            <td class="border px-4 py-2">$1,500 x 5 students + 1 instructor</td>
                            <td class="border px-4 py-2">$9000</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">May 16 - May 22, 2025</td>
                            <td class="border px-4 py-2">Accommodation</td>
                            <td class="border px-4 py-2">Double occupancy for students</td>
                            <td class="border px-4 py-2">4 rooms @ $40/day x 7 nights = $280</td>
                            <td class="border px-4 py-2">$1120</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">May 16 - May 0-2-2h-2V1a1, 2025</td>
                            <td class="border px-4 py-2">Food</td>
                            <td class="border px-4 py-2">6 participants @ $25/day x 7 days</td>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2">$1750</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2">Other funds:</td>
                            <td class="border px-4 py-2">Dept. X providing plane ticket for faculty
                                member</td>
                            <td class="border px-4 py-2">($1500)</td>
                            <td class="border px-4 py-2">($1500)</td>
                        </tr>
                    </tbody>
                </table>
            </div>



        </div>
        <div class="col-span-2">
                <label for="iep_desc">Feedback:</label>
    
            </div>
            <div class="col-span-2">
                <textarea id="iep_desc" style="border:1px solid #000" rows="5" cols="65"></textarea>
            </div><br>
        <div class="col-span-2"><label for="status">Update Status:</label>
                <select class="select select-bordered" id="status">
                    <option disabled selected>Select Applicantion's Status</option>
                    <option>Dept Approved</option>
                    <option>Pending Revisions</option>
                    <option>Denied</option>
                </select>
            </div>
            <br>
            <div class="col-span-2">
            <button btn btn-primary>Submit</button>
            </div>


    </div>
    </div>

</form>