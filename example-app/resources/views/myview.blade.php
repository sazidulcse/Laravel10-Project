<div>
   @foreach ($users as $user)
   <p>First Name: {{$user['fname']}} Last name :  {{$user['lname']}} Age :  {{$user['age']}}</p>
       
   @endforeach
    
</div>
