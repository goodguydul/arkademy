<!-- Buatlah sebuah method/function untuk me-return biodata asli Anda, dengan ketentuan sebagai berikut:
name (String)
age (Number)
address (String)
hobbies (Array)
is_married (Boolean)
list_school (Array of Object) with key name, year_in, year_out, and major (if any, if no set “null” )
skills (Array of Obj) with key skill_name and level (beginner, advanced, expert)
interest_in_coding (Boolean)
    Return value harus berformat JSON dan sesuai ketentuan di atas.
Pada readme sebutkan kegunaan JSON pada REST API.
Berikut adalah contoh dari JSON format: https://api.bukalapak.com/v2/products/f3vi.json
 -->
<?php 
	function getBiodata(){
		$data =  [	'name' 					=> "Abdul Halim",
					'age'					=> 22,
					'address'				=> "Jalan Keloran No. 6, Kasihan, Bantul, Yogyakarta",
					'hobbies'				=> ['Coding',
												'Photography',
					 					 		'Videography',
					 					 		'Travelling',
					 					 		'Blogging'
							 					],
					'is_married'			=> 0,
					'list_school' 			=> (object)['0'=> [
						  										'name'		=> "Universitas Sriwijaya",
						  										'year_in'	=> "2014",
						  										'year_out'	=> "2018",
						  										'major'		=> "Teknik Informatika"
						  								  	]
					     								],
					'skills'				=> (object)['0'=> [
							  									'skill_name'=> "PHP",
							  									'level'		=> "advance"
							  								  ],
							  							'1'=> [
							  									'skill_name'=> "Javascript",
							  									'level'		=> "beginner"
							  								  ],
							  							'2'=> [
							  									'skill_name'=> "C/C++",
							  									'level'		=> "beginner"
							  								  ],
							  							'3'=> [
							  									'skill_name'=> "Java",
							  									'level'		=> "beginner"
							  								  ],
							  							],
					'interest_in_coding' => 1
				];
		return json_encode($data);
	}

print_r(getBiodata());

//Fungsi JSON dari web API adalah sebagai format untuk mengirim/menerima data dari server ke client, atau pun sebaliknya.

?>
