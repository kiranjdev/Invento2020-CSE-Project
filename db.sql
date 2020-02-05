/* Create Students table */
CREATE TABLE `project`.`students` ( `id` VARCHAR(10) NOT NULL , `name` VARCHAR(42) NOT NULL , `password` VARCHAR(150) NOT NULL , `sem` INT NOT NULL , `email` VARCHAR(50) NOT NULL , `roll_no` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

/* Create Labs table */
CREATE TABLE `project`.`labs` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `code` VARCHAR(7) NOT NULL , `sem` INT NOT NULL , `year` INT NOT NULL , `active` INT NOT NULL , `teacher_1` INT NOT NULL , `teacher_2` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

/* Insert into Labs table example */
INSERT INTO `labs` (`id`, `name`, `code`, `sem`, `year`, `active`, `teacher_1`, `teacher_2`) VALUES (NULL, 'Network Programming Lab', 'CS333', '6', '2020', '1', '1', '2')
