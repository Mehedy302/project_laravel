@extends('layouts.app')
@section('content')
<div style="width: 100%; 
          
          border: 25px solid green; 
          ">


<div style="width: 85%; 
          margin-left: auto;
          margin-right: auto;
          border: 0px solid gray; 
          text-indent: -1px;
          padding-left: 40px;
          ">

<form action="" method="post">
{{ csrf_field() }}  





<h3>গত ২ সপ্তাহ ধরে আপনার </h3>

<h2>১)আপনি কি গত ১৫ দিনে স্নায়বিক, উদ্বিগ্ন বা প্রান্তে বোধ করা?</h2>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q1" id="q1" value='0'>
  <label class="form-check-label" for="q1">
    কোন দিনই এই সমস্যা হয় নি।
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q1" id="q1" value='1'>
  <label class="form-check-label" for="q1">
    সমস্যা টি অল্প কয়েকদিন হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q1" id="q1" value='2'>
  <label class="form-check-label" for="q1">
    সমস্যাটি ৭ দিনের বেশি সময় ধরে হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q1" id="q1" value='3'>
  <label class="form-check-label" for="q1">
    সমস্যাটি প্রায় প্রত্যেকদিনই হয়েছে
  </label>
</div>


<h2>২)আপনি কি গত ১৫ দিনে উদ্বেগ থামাতে বা নিয়ন্ত্রণ করতে না পারা?</h2>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q2" id="q2" value='0'>
  <label class="form-check-label" for="q2">
    কোন দিনই এই সমস্যা হয় নি।
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q2" id="q2" value='1'>
  <label class="form-check-label" for="q2">
    সমস্যা টি অল্প কয়েকদিন হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q2" id="q2" value='2'>
  <label class="form-check-label" for="q2">
    সমস্যাটি ৭ দিনের বেশি সময় ধরে হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q2" id="q2" value='3'>
  <label class="form-check-label" for="q2">
    সমস্যাটি প্রায় প্রত্যেকদিনই হয়েছে
  </label>
</div>


<h2>৩)আপনি কি গত ১৫ দিনে বিভিন্ন বিষয়ে খুব বেশি চিন্তা করা?</h2>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q3" id="q3" value='0'>
  <label class="form-check-label" for="q3">
    কোন দিনই এই সমস্যা হয় নি।
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q3" id="q3" value='1'>
  <label class="form-check-label" for="q3">
    সমস্যা টি অল্প কয়েকদিন হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q3" id="q3" value='2'>
  <label class="form-check-label" for="q3">
    সমস্যাটি ৭ দিনের বেশি সময় ধরে হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q3" id="q3" value='3'>
  <label class="form-check-label" for="q3">
    সমস্যাটি প্রায় প্রত্যেকদিনই হয়েছে
  </label>
</div>

<h2>৪)আপনি কি গত ১৫ দিনে শিথিল করতে সমস্যা?</h2>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q4" id="q4" value='0'>
  <label class="form-check-label" for="q4">
    কোন দিনই এই সমস্যা হয় নি।
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q4" id="q4" value='1'>
  <label class="form-check-label" for="q4">
    সমস্যা টি অল্প কয়েকদিন হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q4" id="q4" value='2'>
  <label class="form-check-label" for="q4">
    সমস্যাটি ৭ দিনের বেশি সময় ধরে হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q4" id="q4" value='3'>
  <label class="form-check-label" for="q4">
    সমস্যাটি প্রায় প্রত্যেকদিনই হয়েছে
  </label>
</div>


<h2>৫)আপনি কি গত ১৫ দিনে এতটাই অস্থির যে স্থির হয়ে বসে থাকা কঠিন?</h2>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q5" id="q5" value='0'>
  <label class="form-check-label" for="q5">
    কোন দিনই এই সমস্যা হয় নি।
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q5" id="q5" value='1'>
  <label class="form-check-label" for="q5">
    সমস্যা টি অল্প কয়েকদিন হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q5" id="q5" value='2'>
  <label class="form-check-label" for="q5">
    সমস্যাটি ৭ দিনের বেশি সময় ধরে হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q5" id="q5" value='3'>
  <label class="form-check-label" for="q5">
    সমস্যাটি প্রায় প্রত্যেকদিনই হয়েছে
  </label>
</div>


<h2>৬)আপনি কি গত ১৫ দিনে সহজে বিরক্ত বা খিটখিটে হওয়া?</h2>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q6" id="q6" value='0'>
  <label class="form-check-label" for="q6">
    কোন দিনই এই সমস্যা হয় নি।
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q6" id="q6" value='1'>
  <label class="form-check-label" for="q6">
    সমস্যা টি অল্প কয়েকদিন হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q6" id="q6" value='2'>
  <label class="form-check-label" for="q6">
    সমস্যাটি ৭ দিনের বেশি সময় ধরে হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q6" id="q6" value='3'>
  <label class="form-check-label" for="q6">
    সমস্যাটি প্রায় প্রত্যেকদিনই হয়েছে
  </label>
</div>


<h2>৭)আপনি কি গত ১৫ দিনে ভয় লাগছে যেন ভয়ংকর কিছু
হতে পারে?</h2>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q7" id="q7" value='0'>
  <label class="form-check-label" for="q7">
    কোন দিনই এই সমস্যা হয় নি।
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q7" id="q7" value='1'>
  <label class="form-check-label" for="q7">
    সমস্যা টি অল্প কয়েকদিন হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q7" id="q7" value='2'>
  <label class="form-check-label" for="q7">
    সমস্যাটি ৭ দিনের বেশি সময় ধরে হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q7" id="q7" value='3'>
  <label class="form-check-label" for="q7">
    সমস্যাটি প্রায় প্রত্যেকদিনই হয়েছে
  </label>
</div>





<br><br>

<style>
  .wrapper {
    text-align: center;
}
  </style>
<div class="wrapper">

  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<br>
</form>

</div>
</div>

@endsection