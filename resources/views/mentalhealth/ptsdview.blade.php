@extends('layouts.app')
@section('content')


<h3>___________________________________________গত ২ সপ্তাহ ধরে আপনার ___________________________________________</h3>

<h4>আপনার স্কোর   </h4>{{ $new_data->Total }}

<h4>আপনার লক্ষন অনুযায়ী আপনি  </h4> 

@if($new_data->Total >=3) 
<h4 style="color:red">  দুর্ঘটনা পরবর্তী মানসিক বৈকল্য সমস্যায় ভুগছেন </h4> 
  @else
  <h4 style="color:green">  দুর্ঘটনা পরবর্তী মানসিক বৈকল্য সমস্যায় ভুগছেন না</h4> 

@endif




@endsection