@extends('layouts.app')
@section('content')

<script>
let banglaNumber = {
  0: "০",
  1: "১",
  2: "২",
  3: "৩",
  4: "৪",
  5: "৫",
  6: "৬",
  7: "৭",
  8: "৮",
  9: "৯",
};
const engToBdNum = (str) => {
  for (var x in banglaNumber) {
    str = str.replace(new RegExp(x, "g"), banglaNumber[x]);
  }
  return str;
};

</script>



<h3 align='center'>গত ২ বছর ধরে আপনার প্রদত্ব তথ্যের উপর ভিত্তি করে তৈরিকৃত ফলাফল</h3><hr><hr>

<table class="table table-bordered" style="width: 85%; 
          margin-left: auto;
          margin-right: auto;
          border: 1px solid gray; 
          text-indent: 60px">

<tr>
            <th>আপনার নাম</th><th>{{Auth::user()->name}}</th>
            
            
</tr>

<tr>
            <th>টেস্টের ধরন</th><th>বাইপোলার ডিসঅর্ডার টেস্ট(MDQ)</th>
            
            
</tr>



<tr>

<th>তারিখ</th><th>{{ $new_data->created_at }}</th>
            
</tr>






<tr>


            <th>পরিক্ষনটিতে আপনার ফলাফল</th>
            <th>
              @if($new_data->Result ==1) 
              <h4 style="color:red">  আপনি বাইপোলার ডিসঅর্ডার  সমস্যায় ভুগছেন </h4> 
             @else
              <h4 style="color:green"> আপনি বাইপোলার ডিসঅর্ডার  সমস্যায় ভুগছেন না</h4> 

              @endif
            </th>
</tr>



</table>       

@endsection