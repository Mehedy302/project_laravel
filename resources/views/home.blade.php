@extends('layouts.app')

@section('content')
<style>
    .wrapper {
    text-align: center;
}
    </style>
<div class="wrapper" >
<div class="container" id="main-img">
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
    <h3 style='color:red'>মানসিক স্বাস্থ্য এবং শারিরিক স্বাস্থ্য উভয় গুরুত্বপূর্ণ । এই সমস্যা গলো আপনার হয়েছে কিনা আপনি কিছু সহজ টেস্টের মাধ্যমে জেনে নিতে পারেন
        ।আপনি যত তাড়াতাড়ি আপনার সমস্যাগুলি নির্ণয় করতে পারবেন তত তাড়াতাড়ি এই সমস্যাগুলো থেকে মুক্তি পাবেন। একজন মানসিক রোগি তার পরিবার এবং আত্মীয় স্বজনের কাছে 
        খুব বিপজ্জনক হয়ে উঠতে পারে। 
    </h3>
    <hr><hr>

    <i><h4 style='color:green'>নিম্নে বর্ণিত টেস্ট গুলো সম্পূর্ণ করুন। এগুলো টেস্ট সম্পূর্ণ করতে ১৫-২০ মিনিট লাগতে পারে।</h4></i>
    <hr>
    <table class="table" style="width: 95%; 
          margin-left: auto;
          margin-right: auto;
          border: 1px solid gray; 
          text-indent: 30px">
        <th><td><a class="btn btn-outline-info" href="phq9">দুশ্চিন্তা নির্ণায়ক(PHQ-9 Test) </a></td>
        <td><a class="btn btn-outline-info" href="gad7">উদ্বিগ্নতা নির্ণায়ক(GAD-7 Test) </a></td>
        <td><a class="btn btn-outline-info" href="ptsd">দুর্ঘটনা পরবর্তী মানসিক বৈকল্য(PTSD Test) </a></td>
        <td><a class="btn btn-outline-info" href="bipolart">বাইপোলার টেস্ট(MDQ Test) </a></td>
       </th>
</table>
<hr>
<h4>আপনার গত টেস্ট গুলোর ফলাফল</h4>
<table  style="width: 95%; 
          margin-left: auto;
          margin-right: auto;
          border: 0px solid gray; 
          text-indent: 15px">
    
<th><td><a class="btn btn-outline-info" href="result"> আপনার গত টেস্ট গুলোর ফলাফল দেখুন</a></td></th>      


</table>

    
</div>

</div>
@endsection
