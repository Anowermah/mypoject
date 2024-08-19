<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">search</span>
  </div>
  <input type="text" class="form-control" placeholder="Search item here">
</div>
<div>
  <button class="btn btn-danger form-control my-2">Category</button>
  <ul class="rite-menu">
    @foreach ($category_menu as $menudatas)
      <li><a href="{{route('categoryPost',['category_id'=>$menudatas->id,'slug'=>$menudatas->slug])}}">{{ $menudatas->category_name }}</a></li>
    @endforeach
  </ul>
</div>
<div>
  <h3 class="bg-danger p-5 mt-3 text-uppercase text-center">Important Links</h3>
</div>
<div class="text-center mt-3">
  <a href="">Islamic Organizations</a><br>
  <a href="">Islamic Research and Fatawa Sites</a><br>
  <a href="">International Islamic Organizations</a><br>
  <a href="">Muslim Scholars Sites</a><br>
  <a href="">Websites for Islamic Finance</a><br>
</div>
<div>
  <h3 class="bg-danger p-5 mt-3 text-uppercase text-center">tags</h3>
</div>
<div class="text-center mt-3">
  <a href="">Quran Learning</a>
</div>
<div>
  <h3 class="bg-danger p-5 mt-3 text-uppercase text-center">Our Address</h3>
</div>
<div class="mt-3">
  <h5 class="m-0"><span class="fw-bold">Address :</span> 79/ka/3 North Jatrabari,<br> Dhaka-1204</h5>
  <h5 class="m-0"><span class="fw-bold">Mobile :</span> +880 1765812261</h5>
  <h5 class="mt-0 mb-3"><span class="fw-bold">Email :</span> info@shubbanbd.org</h5>
</div>