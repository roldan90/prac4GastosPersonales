CREATE TABLE `sistemasweb`.`t_gastos_personales` (
  `id_gasto` INT NOT NULL AUTO_INCREMENT,
  `nombre` TEXT NOT NULL,
  `monto` FLOAT NOT NULL,
  `fecha` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`id_gasto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
