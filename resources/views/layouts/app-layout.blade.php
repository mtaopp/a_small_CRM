<x-header pageTitle="Login"/>
<div>
   You're logged in!<!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
   {{ dd(Auth::user()); }}
</div>
