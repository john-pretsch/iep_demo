<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<style>
    .col-head{font-weight:bold;}
</style>
    <h1 class="text-3xl font-bold ">Dashboard: Department Chair View</h1>
    <br>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
    <div class="grid grid-cols-6 gap-4 bg-white">
    
  <div class="col-head">Application ID</div>
  <div class="col-head">Program</div>
  <div class="col-head">Faculty Sponsor</div>
  <div class="col-head">Activity</div>
  <div class="col-head">Status</div>
  <div class="col-head"></div>

  <div class="">01234</div>
  <div class="">International Experience</div>
  <div class="...">John Dow</div>
  <div class="...">Spring Break</div>
  <div class="">DO Approved</div>
  <div class="..."><button class="btn btn-primary">View</button></div>

  <div class="">01235</div>
  <div class="">International Experience</div>
  <div class="...">Jane Smith</div>
  <div class="...">Amazon Trip</div>
  <div class="">Pending Dept Approval</div>
  <div class="..."><button class="btn btn-primary">View</button></div>

  <div class="">01236</div>
  <div class="">International Experience</div>
  <div class="...">Billy Bailey</div>
  <div class="...">Everest Climb</div>
  <div class="">DO Denied</div>
  <div class="..."><button class="btn btn-primary">View</button></div>

  <div class="">01237</div>
  <div class="">Research Opportunity</div>
  <div class="...">Mary Clark</div>
  <div class="...">Lab Work</div>
  <div class="">DO Denied</div>
  <div class="..."><button class="btn btn-primary">View</button></div>

  <div class="">01238</div>
  <div class="">Experiential Learning</div>
  <div class="...">Louise Brown</div>
  <div class="...">A Fun Experience</div>
  <div class="">DO Denied</div>
  <div class="..."><button class="btn btn-primary">View</button></div>
</div>
        
    </form>