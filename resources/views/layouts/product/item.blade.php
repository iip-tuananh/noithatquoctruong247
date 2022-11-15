@php
      $img = json_decode($service->image);
@endphp

<div class="item-product hover-action-product style-view-2 clearfix">
   <div class="img border bg-img-14112"
      title="{{$service->name}}">
      <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}"
         title="{{$service->name}}">
         <img
            src="{{$img[0]}}"
            alt="{{$service->name}}"
            class="img-product"> </a></div>
   <div class="info">
      <h2 class="title-product"> <a
            href="{{route('serviceDetail', ['slug'=>$service->slug])}}">
            {{$service->name}}
         </a></h2>
   </div>
</div>