//codeiginter  bansal


//admin
Username - admin@admin.com
Password - admin123

 //users
 Student credentials
Usr- ankita@student.com
Psd- 1234


//
http://localhost/bansal/admin/Ujian


//important link
//question add link
http://localhost/bansal/admin/soal/add


//question get created in datatable tb_soal

http://localhost/bansal/admin/Mahasiswa/import
link to upload question in bulks


//
change
for default null value
sql

ALTER TABLE `tb_soal` CHANGE `dosen_id` `dosen_id` INT NULL DEFAULT NULL, CHANGE `matkul_id` `matkul_id` INT NULL DEFAULT NULL, CHANGE `bobot` `bobot` INT NULL DEFAULT NULL, CHANGE `file` `file` VARCHAR(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL, CHANGE `tipe_file` `tipe_file` VARCHAR(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL, CHANGE `soal` `soal` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL, CHANGE `opsi_a` `opsi_a` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL, CHANGE `opsi_b` `opsi_b` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL, CHANGE `opsi_c` `opsi_c` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL, CHANGE `opsi_d` `opsi_d` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL, CHANGE `opsi_e` `opsi_e` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL, CHANGE `file_a` `file_a` VARCHAR(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL, CHANGE `file_b` `file_b` VARCHAR(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL, CHANGE `file_c` `file_c` VARCHAR(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL, CHANGE `file_d` `file_d` VARCHAR(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL, CHANGE `file_e` `file_e` VARCHAR(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL, CHANGE `jawaban` `jawaban` VARCHAR(5) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL;

//
soal
opsi_a
opsi_b
opsi_c
opsi_d
opsi_e
jawaban
