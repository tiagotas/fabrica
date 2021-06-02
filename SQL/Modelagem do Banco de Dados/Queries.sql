

-- 1) Quais são os dados completos de uma Compra?

SELECT c.id, DATE_FORMAT(c.data_compra, '%d/%m/%Y - %H:%i') AS data_comp, f.nome
FROM compra c
JOIN fornecedor f ON (f.id = c.id_fornecedor)


-- 2) Quais são os itens de uma determinada Compra?

SELECT i.item, i.qnt, i.preco_unitario, i.total
FROM Item i
WHERE i.id_compra = 1;