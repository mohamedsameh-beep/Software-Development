-- MySQL Script generated by MySQL Workbench
-- Wed Dec 30 02:35:06 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`company`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`company` (
  `ID` INT NOT NULL,
  `name` VARCHAR(30) NOT NULL,
  `website` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `Name_UNIQUE` ON `mydb`.`company` (`name` ASC) VISIBLE;

SHOW WARNINGS;
CREATE UNIQUE INDEX `website_UNIQUE` ON `mydb`.`company` (`website` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`employer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`employer` (
  `ID` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `department` VARCHAR(45) NOT NULL,
  `company_id` INT NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `fk_company_employer`
    FOREIGN KEY (`company_id`)
    REFERENCES `mydb`.`company` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `email_UNIQUE` ON `mydb`.`employer` (`email` ASC) VISIBLE;

SHOW WARNINGS;
CREATE INDEX `fk_company_employer_idx` ON `mydb`.`employer` (`company_id` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`seeker_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`seeker_status` (
  `ID` INT NOT NULL,
  `application_status` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`career_level`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`career_level` (
  `ID` INT NOT NULL,
  `level_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`job_seeker`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`job_seeker` (
  `ID` INT NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `birth_date` DATE NOT NULL,
  `email` VARCHAR(40) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `cv` VARCHAR(45) NULL,
  `marital_status` VARCHAR(45) NOT NULL,
  `military_status` VARCHAR(45) NOT NULL,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `location` VARCHAR(45) NOT NULL,
  `age` INT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `email_UNIQUE` ON `mydb`.`job_seeker` (`email` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`career_interests`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`career_interests` (
  `ID` INT NOT NULL,
  `min_salary` DOUBLE NOT NULL,
  `work_locations` VARCHAR(65) NOT NULL,
  `job_titles` VARCHAR(65) NOT NULL,
  `level_id` INT NOT NULL,
  `seeker_id` INT NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `fk_level_interests`
    FOREIGN KEY (`level_id`)
    REFERENCES `mydb`.`career_level` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_seeker_interests`
    FOREIGN KEY (`seeker_id`)
    REFERENCES `mydb`.`job_seeker` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_level_interests_idx` ON `mydb`.`career_interests` (`level_id` ASC) VISIBLE;

SHOW WARNINGS;
CREATE INDEX `fk_seeker_interests_idx` ON `mydb`.`career_interests` (`seeker_id` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`job_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`job_types` (
  `ID` INT NOT NULL,
  `type_name` VARCHAR(45) NOT NULL,
  `interests_id` INT NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `fk_interests_job-types`
    FOREIGN KEY (`interests_id`)
    REFERENCES `mydb`.`career_interests` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_interests_job-types_idx` ON `mydb`.`job_types` (`interests_id` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`job`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`job` (
  `ID` INT NOT NULL,
  `experience_needed` VARCHAR(45) NULL,
  `salary` VARCHAR(45) NOT NULL,
  `publish_date` DATE NOT NULL,
  `skills` VARCHAR(45) NOT NULL,
  `description` VARCHAR(45) NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `vacancies` INT NOT NULL,
  `expire_date` DATE NOT NULL,
  `employer_id` INT NOT NULL,
  `type_id` INT NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `fk_employer_job`
    FOREIGN KEY (`employer_id`)
    REFERENCES `mydb`.`employer` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_types_job`
    FOREIGN KEY (`type_id`)
    REFERENCES `mydb`.`job_types` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_employer_job_idx` ON `mydb`.`job` (`employer_id` ASC) VISIBLE;

SHOW WARNINGS;
CREATE INDEX `fk_types_job_idx` ON `mydb`.`job` (`type_id` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`work_experience`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`work_experience` (
  `ID` INT NOT NULL,
  `salary` VARCHAR(45) NOT NULL,
  `company_name` VARCHAR(45) NOT NULL,
  `job_type` VARCHAR(45) NOT NULL,
  `job_title` VARCHAR(45) NOT NULL,
  `start_date` DATE NOT NULL,
  `end_date` DATE NOT NULL,
  `seeker_id` INT NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `fk_seeker_work-exp`
    FOREIGN KEY (`seeker_id`)
    REFERENCES `mydb`.`job_seeker` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_seeker_work-exp_idx` ON `mydb`.`work_experience` (`seeker_id` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`job_qualification`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`job_qualification` (
  `ID` INT NOT NULL,
  `degree_level` VARCHAR(45) NOT NULL,
  `country` VARCHAR(45) NOT NULL,
  `institution` VARCHAR(45) NOT NULL,
  `field_of_study` VARCHAR(45) NOT NULL,
  `start_date` DATE NOT NULL,
  `end_date` DATE NOT NULL,
  `graduation_grade` VARCHAR(45) NOT NULL,
  `seeker_id` INT NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `fk_seeker_qualification`
    FOREIGN KEY (`seeker_id`)
    REFERENCES `mydb`.`job_seeker` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_seeker_qualification_idx` ON `mydb`.`job_qualification` (`seeker_id` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`locations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`locations` (
  `ID` INT NOT NULL,
  `location` INT NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`company_locations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`company_locations` (
  `company_id` INT NOT NULL,
  `location_id` INT NOT NULL,
  PRIMARY KEY (`company_id`, `location_id`),
  CONSTRAINT `fk_locations_com-locations`
    FOREIGN KEY (`location_id`)
    REFERENCES `mydb`.`locations` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_company_com-locations`
    FOREIGN KEY (`company_id`)
    REFERENCES `mydb`.`company` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_locations_com-locations_idx` ON `mydb`.`company_locations` (`location_id` ASC) VISIBLE;

SHOW WARNINGS;
CREATE INDEX `fk_company_com-locations_idx` ON `mydb`.`company_locations` (`company_id` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`skills`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`skills` (
  `ID` INT NOT NULL,
  `skill_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`interests_skills`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`interests_skills` (
  `interest_id` INT NOT NULL,
  `skill_id` INT NOT NULL,
  PRIMARY KEY (`interest_id`, `skill_id`),
  CONSTRAINT `fk_skills_interests-skills`
    FOREIGN KEY (`skill_id`)
    REFERENCES `mydb`.`skills` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_career-interests_interests-skills`
    FOREIGN KEY (`interest_id`)
    REFERENCES `mydb`.`career_interests` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_skills_interests-skills_idx` ON `mydb`.`interests_skills` (`skill_id` ASC) INVISIBLE;

SHOW WARNINGS;
CREATE INDEX `fk_career-interests_interests-skills_idx` ON `mydb`.`interests_skills` (`interest_id` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`seeker_phone`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`seeker_phone` (
  `seeker_id` INT NOT NULL,
  `phone_num` INT NOT NULL,
  PRIMARY KEY (`seeker_id`),
  CONSTRAINT `fk_seeker_seeker-phone`
    FOREIGN KEY (`seeker_id`)
    REFERENCES `mydb`.`job_seeker` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_seeker_seeker-phone_idx` ON `mydb`.`seeker_phone` (`seeker_id` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`roles` (
  `ID` INT NOT NULL,
  `role_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`seeker_role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`seeker_role` (
  `seeker_id` INT NOT NULL,
  `role_id` INT NOT NULL,
  PRIMARY KEY (`seeker_id`, `role_id`),
  CONSTRAINT `fk_seeker_seeker-role`
    FOREIGN KEY (`seeker_id`)
    REFERENCES `mydb`.`job_seeker` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_roles_seeker-role`
    FOREIGN KEY (`role_id`)
    REFERENCES `mydb`.`roles` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_seeker_seeker-role_idx` ON `mydb`.`seeker_role` (`seeker_id` ASC) INVISIBLE;

SHOW WARNINGS;
CREATE INDEX `fk_roles_seeker-role_idx` ON `mydb`.`seeker_role` (`role_id` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mydb`.`applying_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`applying_status` (
  `seeker_id` INT NOT NULL,
  `job_id` INT NOT NULL,
  `status_id` INT NOT NULL,
  PRIMARY KEY (`seeker_id`, `job_id`, `status_id`),
  CONSTRAINT `fk_seeker_applying-status`
    FOREIGN KEY (`seeker_id`)
    REFERENCES `mydb`.`job_seeker` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_job_applying-status`
    FOREIGN KEY (`job_id`)
    REFERENCES `mydb`.`job` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_seeker-status_applying-status`
    FOREIGN KEY (`status_id`)
    REFERENCES `mydb`.`seeker_status` (`ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_job_applying-status_idx` ON `mydb`.`applying_status` (`job_id` ASC) VISIBLE;

SHOW WARNINGS;
CREATE INDEX `fk_seeker-status_applying-status_idx` ON `mydb`.`applying_status` (`status_id` ASC) VISIBLE;

SHOW WARNINGS;
CREATE INDEX `fk_seeker_appying-status_idx` ON `mydb`.`applying_status` (`seeker_id` ASC) INVISIBLE;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;