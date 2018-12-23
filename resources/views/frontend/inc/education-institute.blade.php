<div class="container-fluid" style="background-color: #65cfda;">
 <div class="row">
   <div class="container my-2 main-container">
     <div class="row align-items-center">
       <div class="col text-center">
         <h4 class="text-white"> 
          @php 
          $institute_name = session()->get('institute_name');
          echo $institute_name;
          @endphp
        </h4>
      </div>
    </div>
  </div>
</div>
</div>
