@extends('layouts.app')
@section('content')


<h3>___________________________________________গত ২ সপ্তাহ ধরে আপনার ___________________________________________</h3>

<h4>আপনার স্কোর   </h4>{{ $new_data->Total }}

<h4>আপনার লক্ষন অনুযায়ী আপনি  </h4> 

@if($new_data->Total >=16) 
   <h4> তীব্র বিষণ্নতায় ভুগছেন</h4>
   @elseif($new_data->Total >=11)
  <h4> মাঝারিভাবে তীব্র বিষণ্নতায় ভুগছেন</h4>

  @elseif($new_data->Total >=6)
  <h4> মাঝারি বিষণ্নতায় ভুগছেন</h4>
  @else
  <h4> হালকা বিষণ্নতায় ভুগছেন</h4> 

@endif




@endsection