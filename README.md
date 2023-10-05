# Login

http://127.0.0.1:8000/ = login

menggunakan akun berikut dan yang dimasukkan email dan password. Terus akan diarahkan menuju halaman yang sesuai dengan rolenya.
'email'=>'operator@gmail.com',
'role'=>'operator',
'password'=>bcrypt('123456')

'email'=>'marketing@gmail.com',
'role'=>'marketing',
password'=>bcrypt('123456')

'email'=>'keuangan@gmail.com',
'role'=>'keuangan',
'password'=>bcrypt('123456')
