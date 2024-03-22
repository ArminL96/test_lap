/*Which pc was ordered the most*/
SELECT c.name AS pc_name, COUNT(o.ID_computer) AS total_orders
FROM computer c
JOIN orders o ON c.ID = o.ID_computer
GROUP BY c.ID
ORDER BY total_orders DESC
LIMIT 1;

 /*Total money made per pc*/


/*pc order per manufacturer*/
SELECT m.name AS manufacturer_name, COUNT(o.ID_computer) AS total_ordered_pcs
FROM manufacturer m
JOIN computer c ON m.ID = c.ID_manufacturer
JOIN orders o ON c.ID = o.ID_computer
GROUP BY m.ID
ORDER BY total_ordered_pcs DESC;

