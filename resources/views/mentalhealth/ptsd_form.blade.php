@extends('layouts.app')
@section('content')
<h3>গত ১ মাস ধরে আপনার </h3>
<form action="" method="post">
{{ csrf_field() }}
<h2>১)আপনি কি গত  দিনে ঘটনা(গুলি) সম্পর্কে দুঃস্বপ্ন দেখেছেন বা আপনি যখন চাননি তখন ঘটনা(গুলি) সম্পর্কে চিন্তা করেছেন?</h2>
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




<h2>২)আপনি কি গত ১৫ দিনে ঘটনা(গুলি) সম্পর্কে চিন্তা না করার জন্য কঠোর চেষ্টা করেছেন বা ঘটনা(গুলি) আপনাকে মনে করিয়ে দেয় এমন পরিস্থিতি এড়াতে আপনার পথের বাইরে চলে গেছে?</h2>
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


<h2>৩)আপনি কি গত ১৫ দিনে ক্রমাগত সতর্ক, সতর্ক বা সহজেই চমকে গেছেন?</h2>
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

<h2>৪)আপনি কি গত ১৫ দিনে মানুষ, কার্যকলাপ, বা আপনার চারপাশ থেকে অসাড় বা বিচ্ছিন্ন অনুভূত?</h2>
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


<h2>৫)আপনি কি গত ১৫ দিনে ঘটনা(গুলি) বা ঘটনা(গুলি) সৃষ্ট কোন সমস্যার জন্য নিজেকে বা অন্যদের দোষারোপ করা বন্ধ করতে দোষী বা অক্ষম বোধ করেছেন?</h2>
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











  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection