@extends('layouts.main')

@section('container')
    <!-- biodata -->
<section id="biodata" class="biodata mt-4">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-sm text-right">
        <h2 class="thumbnail">Raymond PS</h2>
        <h4 class="thumbnail text-primary"><a href="https://www.youtube.com/channel/UCG-p_yiGQGsPRbkmkrjQyLg">Youtuber</a></h4>
        <hr>
        <p class="thumbnail">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="col-sm">
        <div class="card thumbnail" style="width: 18rem;">
          <img src="img/1.jpg" class="card-img-top rounded" alt="...">
        </div>
      </div>
      <div class="col-sm">
        <p class="thumbnail">Editing Video</p>
        <div class="progress thumbnail">
          <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
        </div>
        <hr>
        <p class="thumbnail">Design</p>
        <div class="progress thumbnail">
          <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
        </div>
        <hr>
        <p class="thumbnail">Mixing Audio</p>
        <div class="progress thumbnail">
          <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
        </div>
        <hr>
        <p class="thumbnail">Office</p>
        <div class="progress thumbnail">
          <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
        </div>
        <hr>
      </div>
    </div>
    <div class="contact row bg-dark rounded my-4 py-5">
      <div class="col-sm">
        <h3 class="text-light">Phone Number</h3>
        <p class=" text-secondary">+62 8995 8151 63</p>
      </div>
      <div class="col-sm">
        <h3 class="text-light">Address</h3>
        <p class=" text-secondary">Malomba Street Number 29</p>
      </div>
      <div class="col-sm">
        <h3 class=" text-light">Email Address</h3>
        <p class=" text-secondary">raymondputra15@gmail.com</p>
      </div>
    </div>
  </div>
</section>
<!-- akhir biodata -->
@endsection