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



<table class="table table-bordered" style="width: 85%; 
          margin-left: auto;
          margin-right: auto;
          border: 1px solid gray; 
          text-indent: 60px">

<tr>
            <th>টেস্টের ধরন</th>
            <th>তারিখ</th>
            <th>প্রাপ্ত স্কোর</th>
            <th>পরিক্ষনটিতে আপনার ফলাফল ছিল</th>
            
        </tr>

        @foreach ($gad7result as $key => $value)
        <tr>
            <td>উদ্বিগ্নতা নির্ণায়ক টেস্ট(GAD7)</td>
            <td>{{ $value->created_at }}</td>
            <script>var num =  {{$value->Total}};
                 var text = num.toString();     
                      </script>
            <td><script>document.write(engToBdNum(text));</script></td>
            
           
            <td>

            @if($value->Total >=16) 
                <h7> তীব্র উদ্বিগ্নতায়  ভুগছেন</h7>
                @elseif($value->Total >=11)
                    <h7> মাঝারিভাবে তীব্র উদ্বিগ্নতায় ভুগছেন</h7>

                @elseif($value->Total >=6)
                    <h7> মাঝারি উদ্বিগ্নতায় ভুগছেন</h7>
                @else
                    <h7> হালকা উদ্বিগ্নতায় ভুগছেন</h7> 

            @endif
                
            </td>
             
        </tr>
        @endforeach

        @foreach ($phq9result as $key => $value)
        <tr>
            <td>দুশ্চিন্তা নির্ণায়ক টেস্ট(PHQ9)</td>
            <td>{{ $value->created_at }}</td>
            <script>var num =  {{$value->Total}};
                 var text = num.toString();     
                      </script>
            <td><script>document.write(engToBdNum(text));</script></td>
           
            <td>

            
            @if($value->Total >=16) 
                        <h7> তীব্র বিষণ্নতায় ভুগছেন</h7>
                    @elseif($value->Total >=11)
                        <h7> মাঝারিভাবে তীব্র বিষণ্নতায় ভুগছেন</h7>

                    @elseif($value->Total >=6)
                        <h7> মাঝারি বিষণ্নতায় ভুগছেন</h7>
                    @else
                        <h7> হালকা বিষণ্নতায় ভুগছেন</h7> 

                @endif
                    
                      
                
                
            </td>
             
        </tr>
        @endforeach



        @foreach ($ptsdresult as $key => $value)
        <tr>
            <td>দুর্ঘটনা পরবর্তী মানসিক বৈকল্য(PTSD)</td>
            <td>{{ $value->created_at }}</td>
            <script>var num =  {{$value->Total}};
                 var text = num.toString();     
                      </script>
            <td><script>document.write(engToBdNum(text));</script></td>
            
           
            <td>

            @if($value->Total >=3) 
                    <h7 style="color:red">  দুর্ঘটনা পরবর্তী মানসিক বৈকল্য সমস্যায় ভুগছিলেন </h7> 
                @else
                    <h7 style="color:green">  দুর্ঘটনা পরবর্তী মানসিক বৈকল্য সমস্যায় ভুগছিলেন না</h7> 

            @endif
                
            </td>
             
        </tr>
        @endforeach






</table>





@endsection