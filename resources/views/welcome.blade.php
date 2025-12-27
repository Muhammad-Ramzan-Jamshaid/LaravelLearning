<h1>Hi my name is Muhammad Ramzan Jamshaid </h1>

{{-- php ma jp hm echo use krty thy kesi bhi chez ko print krny k liyy laravel ma hm esy krty ha --}}

{{ "Hi ma laravel ko use kr rha hu " }}
<br><br>

{{ 3+5 }}
<br><br>

{{-- agr hm html k kesi tag ko use krna chahty ha print k liyy to hm esy kry gy  that helps us from cross-site scripting--}}

{{ "<h1>hi using h1 tag </h1>" }}is wrong <br><br>

{!!" <h1>Hi using h1 tag in laravel blade</h1>" !!} <br><br>
 {{-- simlarly we can use it for javascript  --}}
{!! "<script> alert('Please login ') </script>" !!}

{{-- now if we want to store some value in a variable or define a variable and intialize an arry we must use this --}}

@php
    $Array = ['ali ','Ahmad' .'umar' ,'manana' ,'ramzan']
@endphp
 {{-- we are using foreach lop that help you to store array value in a new variable and print it  --}}
<ul>
    @foreach ($Array as $user )
       <li>{{ $user }}</li> 
    @endforeach
</ul>