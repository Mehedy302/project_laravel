@extends('layouts.app')
@section('content')
<h3>গত ২ সপ্তাহ ধরে আপনার </h3>
<form action="" method="post">
{{ csrf_field() }}
<h2>১)আপনি কি গত ১৫ দিনে কাজ করার সামান্য আগ্রহ বা আনন্দ পেয়েছেন?</h2>
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


<h2>২)আপনি কি গত ১৫ দিনে হতাশ, হতাশা বা আশাহীন বোধ করেছেন?</h2>
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


<h2>৩)আপনি কি গত ১৫ দিনে খুব কম ঘুমিয়েছেন বা ঘুমাতে পারেন নি অথবা ঘুমে ব্যাঘাত ঘটেছে?</h2>
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

<h2>৪)আপনি কি গত ১৫ দিনে ক্লান্তি বোধ করেছেন বা অল্প শক্তি পেয়েছেন?</h2>
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


<h2>৫)আপনি কি গত ১৫ দিনে খুব অল্প ক্ষুধা বা অতিরিক্ত খেয়েছেন?</h2>
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


<h2>৬)আপনি কি গত ১৫ দিনে নিজের সম্পর্কে খারাপ বোধ করেছেন - বা আপনি ব্যর্থ
অথবা নিজেকে বা আপনার পরিবারকে হতাশ করেছেন এরকম কি মনে হয়েছে?</h2>
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


<h2>৭)আপনি কি গত ১৫ দিনে বিভিন্ন বিষয়ে মনোনিবেশ করতে সমস্যায় পড়েছেন? যেমন 
সংবাদপত্র পড়া বা টেলিভিশন দেখা?</h2>
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


<h2>৮)আপনি কি গত ১৫ দিনে চলাফেরা বা কথা বলা এত ধীরে যে অন্য লোকেরা পারে
লক্ষ্য করেছেন? অথবা উল্টোটা—এত অস্থির হচ্ছে বা
অস্থির যে আপনি নড়াচড়া করা হয়েছে. এর চেয়ে অনেক বেশি
চলিত?</h2>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q8" id="q8" value='0'>
  <label class="form-check-label" for="q8">
    কোন দিনই এই সমস্যা হয় নি।
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q8" id="q8" value='1'>
  <label class="form-check-label" for="q8">
    সমস্যা টি অল্প কয়েকদিন হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q8" id="q8" value='2'>
  <label class="form-check-label" for="q8">
    সমস্যাটি ৭ দিনের বেশি সময় ধরে হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q8" id="q8" value='3'>
  <label class="form-check-label" for="q8">
    সমস্যাটি প্রায় প্রত্যেকদিনই হয়েছে
  </label>
</div>


<h2>৯)আপনি কি গত ১৫ দিনে আপনি মৃত বা আঘাত ভাল হবে যে চিন্তা
নিজেকে কোনোভাবে?</h2>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q9" id="q9" value='0'>
  <label class="form-check-label" for="q9">
    কোন দিনই এই সমস্যা হয় নি।
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="q9" id="q9" value='1'>
  <label class="form-check-label" for="q9">
    সমস্যা টি অল্প কয়েকদিন হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q9" id="q9" value='2'>
  <label class="form-check-label" for="q9">
    সমস্যাটি ৭ দিনের বেশি সময় ধরে হয়েছে
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="q9" id="q9" value='3'>
  <label class="form-check-label" for="q9">
    সমস্যাটি প্রায় প্রত্যেকদিনই হয়েছে
  </label>
</div>





  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection