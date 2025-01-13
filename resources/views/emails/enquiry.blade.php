<x-mail::message>
# Merhaba,

Website üzerinden bir eposta aldınız
\
\
Gönderici Bilgileri:


<h3>İsim: {{ $data['name'] }}</h3>
<h3>Email: {{ $data['email'] }}</h3>
<h3>Mesaj:</h3>
<p>
    {{ $data['message'] }}
</p>


</x-mail::message>

