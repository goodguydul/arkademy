<!-- Pada sebuah form, terdapat 4 buah field yaitu: username dan password. Buatlah method/function untuk memvalidasi field-field tersebut, dengan requirement sebagai berikut:
●       Disarankan menggunakan REGEX
●       Format username: merupakan kombinasi dari huruf kecil, huruf besar dan angka dengan panjang 5-9 karakter. Username tidak boleh diawali dengan angka / karakter special.
●       Format password: merupakan kombinasi dari huruf kecil, huruf besar minimal satu karakter, angka minimal satu karakter, dan karakter spesial minimal satu karakter dan harus memiliki karakter simbol “=”  dan panjang minimal 8 karakter.
Clue:
Peserta hanya diminta membuat function validasi, tidak perlu membuat form HTML.
Examples:
-        is_username_valid(‘Xrutaf888’)
    return true
-        is_username_valid(‘1Diana’)
    return false
-        is_password_valid(‘passW0rd=’)
    return true
-        is_password_valid(‘C0d3YourFuture!#’)
    return false
 -->
<?php 
	function is_usernameValid($username){
		if (preg_match('/^[a-zA-Z][a-zA-Z0-9]{5,9}$/', $username)) {
			
			return 1;

		}else{
			
			return 0;
		}
	}
	
	function is_passwordValid($password){
		if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.*[=])(?=.{8,})/', $password)) {
			
			return 1;

		}else{
			
			return 0;
		}
	}
$x = is_passwordValid("Abdulganteng12!=");
print_r($x);
?>