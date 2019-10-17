
**smartschool-skeleton** ini merupakan initiate dari project smartschool, ada beberapa yang perlu diperhatikan dalam membuat struktur code nya.
pertama skeleton ini memakai design pattern, gabungan antara **repository pattern** dan **domain driven design(DDD)**


perlu diingat, agar code selalu clean
1. controller hanya I/O, jangan sampai ada logic di controller ataupun di repository file sebuah module, jika ingin membuat sebuah logic, buatlah sebuah service terhadap module tersebut, contoh UserService.php, dan jangan lupa jika membuat suatu service dan service tersebut terhubung ke banyak table, wajib hukumnya menggunakan transaction manager, agar data tetap ter-rollback
2. setiap controller request wajib memiliki validator, sudah ada contohnya
3. jika view berupa CRUD, nama view wajib seperti yang ada di skeleton agar rapi, ada index.blade, create.blade, dan update.blade. 
4. wajib menggunakan migration database untuk membuat suatu table, jangan sampai merubah struktur table dari phpmyadmin or something else, data yang dimasukkan juga jangan melalui phpmyadmin, gunakan database seeds
5. route harus selalu di grouping dan dikasin name sebagai id, name ini berfungsi jika di controller ada sebuah redirect file, jangan gunakan redirect route url, gunakan redirect route name
