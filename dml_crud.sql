CREATE DATABASE iuran_kas_rt

-- Tabel users

CREATE TABLE users (
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(100) NULL,
    `password` VARCHAR(100) NULL,
    `nama` VARCHAR(200) NULL,
    `email` VARCHAR(200) NULL,
    `status` TINYINT(1) NULL,
    `role` TINYINT(1) NULL DEFAULT 2 '1:Admin\n2:User',
    PRIMARY KEY (id)
    UNIQUE INDEX `username_UNIQUE` (`username` ASC)
    UNIQUE INDEX `email_UNIQUE` (`email` ASC)
    )

insert into users (id,username,password,nama,email,status,role)
VALUES ('12345','Azzam','12345','Azzam Sauqi','azzamsauqi2004@gmail.com','0','0'),
('678910','Angga','678910','Dafa Alfiana E','dafaerlangga674@gmail.com','0','0'),
('11121314','Hadi','11121314','Hadi Permana','hadipermana123@gmail.com','0','0');
UPDATE users
SET Role = '1', status = '1'
WHERE id = '12345';
UPDATE users
SET Role = '1', status = '2'
WHERE id = '678910';
UPDATE users
SET Role = '1', status = '3'
WHERE id = '11121314';
DELETE FROM users 
WHERE username = 'Hadi';


-- Tabel Warga
CREATE TABLE warga (
`id` INT NOT NULL AUTO_INCREMENT,
`nik` VARCHAR(50) NULL,
`nama` VARCHAR(200) NULL,
`jenis_kelamin` ENUM('L', 'P') NULL,
`no_hp` VARCHAR(20) NULL,
`alamat` TINYTEXT NULL,
`no_rumah` VARCHAR(10) NULL,
`status` TINYINT(1) NULL,
`users_id` INT NOT NULL,
PRIMARY KEY (`id`),
UNIQUE INDEX `nik_UNIQUE` (`nik` ASC),
INDEX `fk_warga_users1_idx` (`users_id` ASC),
CONSTRAINT `fk_warga_users1`
FOREIGN KEY (`users_id`)
REFERENCES `mydb`.`users` (`id`)
) 
insert into warga (id,nik,nama,jenis_kelamin,no_hp,alamat,no_rumah,status,user_id)
VALUES('12345','9489504','Azzam Sauqi','L','08189289','Jeruk_01','05','1','1088'),
('678910','1112131415','Dafa Alfiana E','L','085693128836','Jeruk_01','04','1','1067'),
('11121314','2122232425','Hadi Permana','L','081316439192','Jeruk_01','03','1','1038');
UPDATE warga
SET  user_id = '1040', status = '4'
WHERE id = '11121314';
DELETE from warga
WHERE id = '11121314';


-- Tabel Iuran
CREATE TABLE iuran (
`id` INT NOT NULL AUTO_INCREMENT,
`tanggal` DATE NULL,
`warga_id` INT NOT NULL,
`nominal` DECIMAL(10,2) NULL,
`keterangan` TINYTEXT NULL,
`jenis_iuran` TINYINT(1) NULL,
PRIMARY KEY (`id`),
INDEX `fk_iuran_warga1_idx` (`warga_id` ASC),
CONSTRAINT `fk_iuran_warga1`
FOREIGN KEY (`warga_id`)
REFERENCES `mydb`.`warga` (`id`)
)
insert into iuran (id,tanggal,warga_id,nominal,keterangan,jenis_iuran)
VALUES('12345','2024-01-02','9489504','50000','Lunas','Denda_ronda'),
('678910','2024-01-03','1112131415','50000','Lunas','Bayar_kebersihan')
('11121314','2024-01-04','2122232425','250000','Belum Lunas','Bayar_keamanan');
UPDATE iuran
SET keterangan = 'Lunas', jenis_iuran = 'Bayar keamanan'
WHERE id = '11121314';
DELETE from iuran 
WHERE id = '11121314';
