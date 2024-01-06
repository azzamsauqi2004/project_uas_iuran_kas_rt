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
VALUES ('12345','Azzam','12345','Azzam Sauqi','azzamsauqi2004@gmail.com','Belum menikah','admin'),
('678910','Angga','678910','Dafa Alfiana E','dafaerlangga674@gmail.com','Belum Menikah','Editor'),
('11121314','Hadi','11121314','Hadi Permana','hadipermana123@gmail.com','Belum menikah','author');
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
REFERENCES `mydb`.`warga` (`id`))