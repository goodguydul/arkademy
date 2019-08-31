# Arkademy Test Code - Seleksi Bootcamp Arkademy Batch 12-1
**Jawaban Soal Bootcamp Arkademy**
 
 >- Untuk jawaban soal nomor 1-5 ada di setiap file "soal_[nomor soal]" 
 >- Untuk jawaban soal nomor 6 ada di dalam direktori /crud/
 
**FUNGSI JSON PADA WEB API**

 ```Fungsi JSON dari web API adalah sebagai format untuk mengirim/menerima data dari server ke client, atau pun sebaliknya```
 
**DEMO/SNAPSHOT PROGRAM SOAL NOMOR 6**

- Program ini menggunakan bahasa PHP Native dan MySQL, Bootstrap, dan Javascript (jQuery, Ajax).
- Download, lalu taruh di folder htdocs atau di folder localhost atau disesuaikan masing-masing.
- Import crud.sql yang dilampirkan ke database.
- Ubah settingan database di **config/koneksi.php**, lalu sesuaikan.

 Berikut Demo/Snapshot tampilan program hasil nomor 6
 
 **HOME**
  >![alt text](https://github.com/goodguydul/arkademy/blob/master/crud/docs/Screenshot_1.png)
  
 **CREATE**
  >![alt text](https://github.com/goodguydul/arkademy/blob/master/crud/docs/Screenshot_2.png)
  
 **UPDATE**
  >![alt text](https://github.com/goodguydul/arkademy/blob/master/crud/docs/Screenshot_3.png)
  
 **DELETE**
  >![alt text](https://github.com/goodguydul/arkademy/blob/master/crud/docs/Screenshot_4.png)
  
**QUERY MySQL SOAL NOMOR 6**

 |  Name   |     Work     |   Salary   |
 |---------|--------------|------------|
 | Rebecca | Frontend Dev | 10.000.000 |
 |  Vita   | Backend Dev  | 12.000.000 |

**QUERY :**
 
  ``` 
      SELECT nama.name as name, 
             work.name as workname,
             kategori.salary as salary 
      FROM nama 
      JOIN
           work 
      ON nama.id_work = work.id 
      JOIN 
           kategori 
      ON nama.id_salary = kategori.id 
  ```





