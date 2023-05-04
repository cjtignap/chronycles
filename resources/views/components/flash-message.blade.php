@if(session()->has('message'))
<div 
    x-data="{show:true}" 
    x-init="setTimeout(()=>show=false,3000)" 
    x-show="show" 
    class="alert alert-info fixed-top" 
    role="alert" 
    style="padding:10px;width:400px;margin:auto">

     <p style="margin:0px"> {{session('message')}}</p>
  </div>
@endif