@extends('layouts.app')
@section('content')

<div style="width: 100%; 
          
          border: 25px solid green; 
          ">
<form action="" method="post">
{{ csrf_field() }}
<br>
<div style="width: 85%; 
          margin-left: auto;
          margin-right: auto;
          border: 1px solid gray; 
          text-indent: 50px">

<h3>১)এমন কোন সময় কি কখনও হয়েছে যখন আপনি আপনার স্বাভাবিক স্বভাবে ছিলেন না এবং... </h3>

<div style="width: 85%; 
          margin-left: auto;
          margin-right: auto;
          border: 0px solid gray; 
          text-indent: -1px;
          padding-left: 40px;
          ">
<h4>i)আপনি এত ভাল বা হাইপার অনুভব করেছেন যে অন্য লোকেরা ভেবেছিল যে আপনি আপনার স্বাভাবিক স্ব নন বা আপনি এত হাইপার ছিলেন যে আপনি সমস্যায় পড়েছেন?</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q1" id="q1" value='1'>
  <label class="form-check-label" for="q1">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q1" id="q1" value='0'>
  <label class="form-check-label" for="q1">
    না
  </label>
</div>




<h4>ii)আপনি এতই খিটখিটে ছিলেন যে আপনি লোকেদের উপর চিৎকার করেছিলেন বা মারামারি বা তর্ক শুরু করেছিলেন?</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q2" id="q2" value='1'>
  <label class="form-check-label" for="q2">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q2" id="q2" value='0'>
  <label class="form-check-label" for="q2">
    না
  </label>
</div>


<h4>iii)আপনি স্বাভাবিকের চেয়ে অনেক বেশি আত্মবিশ্বাসী বোধ করেন?</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q3" id="q3" value='1'>
  <label class="form-check-label" for="q3">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q3" id="q3" value='0'>
  <label class="form-check-label" for="q3">
    না
  </label>
</div>

<h4>iv)আপনি স্বাভাবিকের চেয়ে অনেক কম ঘুম পেয়েছেন এবং খুঁজে পেয়েছেন যে আপনি সত্যিই এটি মিস করেননি?</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q4" id="q4" value='1'>
  <label class="form-check-label" for="q4">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q4" id="q4" value='0'>
  <label class="form-check-label" for="q4">
    না
  </label>
</div>


<h4>v)আপনি অনেক বেশি আলাপচারী বা স্বাভাবিকের চেয়ে অনেক দ্রুত কথা বলছিলেন?</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q5" id="q5" value='1'>
  <label class="form-check-label" for="q5">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q5" id="q5" value='0'>
  <label class="form-check-label" for="q5">
    না
  </label>
</div>


<h4>vi)চিন্তাগুলো আপনার মাথায় ঘুরছে নাকি আপনি আপনার মনকে ধীর করতে পারেননি?</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q6" id="q6" value='1'>
  <label class="form-check-label" for="q6">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q6" id="q6" value='0'>
  <label class="form-check-label" for="q6">
    না
  </label>
</div>


<h4>vii)আপনি আপনার চারপাশের জিনিসগুলির দ্বারা এত সহজেই বিভ্রান্ত হয়েছিলেন যে আপনার মনোযোগ দিতে বা ট্র্যাকে থাকতে সমস্যা হয়েছিল?</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q7" id="q7" value='1'>
  <label class="form-check-label" for="q7">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q7" id="q7" value='0'>
  <label class="form-check-label" for="q7">
    না
  </label>
</div>


<h4>viii)আপনার স্বাভাবিকের চেয়ে অনেক বেশি শক্তি ছিল?</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q8" id="q8" value='1'>
  <label class="form-check-label" for="q8">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q8" id="q8" value='0'>
  <label class="form-check-label" for="q8">
    না
  </label>
</div>

<h4>ix)আপনি অনেক বেশি সক্রিয় ছিলেন বা স্বাভাবিকের চেয়ে অনেক বেশি কাজ করেছেন?</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q9" id="q9" value='1'>
  <label class="form-check-label" for="q9">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q9" id="q9" value='0'>
  <label class="form-check-label" for="q9">
    না
  </label>
</div>

<h4>x)আপনি স্বাভাবিকের চেয়ে অনেক বেশি সামাজিক বা বহির্গামী ছিলেন, উদাহরণস্বরূপ, আপনি
মাঝরাতে বন্ধুদের  সাথে ফোনে কথা বলেছেন !</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q10" id="q10" value='1'>
  <label class="form-check-label" for="q10">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q10" id="q10" value='0'>
  <label class="form-check-label" for="q10">
    না
  </label>
</div>



<h4>xi)আপনি স্বাভাবিকের চেয়ে অনেক বেশি ভালোবাসা,প্রেম বা দৈহিক মিলনে আগ্রহী ছিলেন?</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q11" id="q11" value='1'>
  <label class="form-check-label" for="q11">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q11" id="q11" value='0'>
  <label class="form-check-label" for="q11">
    না
  </label>
</div>

<h4>xii)আপনি এমন কিছু করেছেন যা আপনার জন্য অস্বাভাবিক বা অন্য লোকেদের মনে হতে পারে
য়াপনি অত্যধিক মূর্খ বা ঝুঁকিপূর্ণ?</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q12" id="q12" value='1'>
  <label class="form-check-label" for="q12">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q12" id="q12" value='0'>
  <label class="form-check-label" for="q12">
    না
  </label>
</div>
<h4>xiii)টাকা খরচ করে আপনি বা আপনার পরিবারকে সমস্যায় ফেলেছেন?</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q13" id="q13" value='1'>
  <label class="form-check-label" for="q13">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q13" id="q13" value='0'>
  <label class="form-check-label" for="q13">
    না
  </label>
</div>

</div>




</div>
<br>

<div style="width: 85%; 
          margin-left: auto;
          margin-right: auto;
          border: 1px solid gray; 
          
          text-indent: -1px;
          padding-left: 40px;">

<h4>২)আপনি যদি উপরের একটির বেশি হ্যাঁ চেক করেন, তাহলে এর মধ্যে কি কোন ঘটনা  আছে যা
একই সময়ের মধ্যে পুনরায়  ঘটেছে?</h4> 
<div style="width: 85%; 
          margin-left: auto;
          margin-right: auto;
          border: 0px solid gray; 
          text-indent: -1px;
          padding-left: 10px;
          ">

<div class="form-check">
  <input class="form-check-input" type="radio" name="q14" id="q14" value='1'>
  <label class="form-check-label" for="q14">
    হ্যাঁ
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q14" id="q14" value='0'>
  <label class="form-check-label" for="q14">
    না
  </label>
</div>



</div>



</div>


<br>

<div style="width: 85%; 
          margin-left: auto;
          margin-right: auto;
          border: 1px solid gray; 
          
          text-indent: -1px;
          padding-left: 40px;">

<h4>৩)এইগুলির মধ্যে কোনটি আপনাকে কতটা সমস্যার কারণ করেছে — যেমন কাজ করতে সক্ষম হওয়া;
পরিবার, অর্থ বা আইনি সমস্যা থাকা; তর্ক বা মারামারি হচ্ছে? অনুগ্রহ করে শুধুমাত্র 1টি প্রতিক্রিয়া ব্যাক্ত করুন।</h4> 
<div style="width: 85%; 
          margin-left: auto;
          margin-right: auto;
          border: 0px solid gray; 
          text-indent: -1px;
          padding-left: 10px;
          ">

<div class="form-check">
  <input class="form-check-input" type="radio" name="q15" id="q15" value='0'>
  <label class="form-check-label" for="q15">
    কোন সমস্যা হয় নি।
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q15" id="q15" value='1'>
  <label class="form-check-label" for="q15">
    অল্প কিছু সমস্যা হয়েছে।
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q15" id="q15" value='2'>
  <label class="form-check-label" for="q15">
    মোটামুটি সমস্যা হয়েছে।
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q15" id="q15" value='3'>
  <label class="form-check-label" for="q15">
   অনেক সমস্যা হয়েছে।
  </label>
</div>



</div>



</div>




<br>

<style>

.wrapper {
    text-align: center;
}

.btn btn-primary{
    position: absolute;
    top: 50%;
}

  </style>

<div class="wrapper">

  <button type="submit" class="btn btn-primary" >Submit</button>

</div>
</form>
<br>
</div>

@endsection