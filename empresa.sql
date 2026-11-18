USE empresa;

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `cargo` varchar(50) NOT NULL,
  `salario` decimal(10,2) NOT NULL,
  `data_admissao` date NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `funcionario` (`id`, `nome`, `email`, `cargo`, `salario`, `data_admissao`, `ativo`) VALUES
(1, 'Carlos Isaias', 'carlos@gmail.com', 'Professor', 5000.00, '2026-08-01', 1);

ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

COMMIT;