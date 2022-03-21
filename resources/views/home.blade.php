@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                           


                            
                        </div>
                        
                        
                    @endif

                    
                
            </div>
        </div>
    </div>
    <h2>মানসিক স্বাস্থ্য এবং শারিরিক স্বাস্থ্য উভয় গুরুত্বপূর্ণ</h2>

    <table>
        <th><td><a class="btn" href="phq9">দুশ্চিন্তা নির্ণায়ক(PHQ-9 Test) </a></td>
        <td><a class="btn" href="gad7">উদ্বিগ্নতা নির্ণায়ক(GAD-7 Test) </a></td>
        <td><a class="btn" href="ptsd">দুর্ঘটনা পরবর্তী মানসিক বৈকল্য(PTSD Test) </a></td>
        <td><a class="btn" href="bipolart">বাইপোলার টেস্ট(Bipolar Test) </a></td>
       </th>
</table>
<h4>____আপনার গত টেস্ট গুলোর ফলাফল____</h4>
<table border='2'>
    
<th><td><a class="btn" href="result"> আপনার গত টেস্ট গুলোর ফলাফল</a></td></th>      


</table>

    
</div>
@endsection
