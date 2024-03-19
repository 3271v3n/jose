--todos los vuelos que salen de Manizales
SELECT * 
FROM vuelos
WHERE  ORIGEN ='manizales'

--todos los vueloque llegan a bogota
SELECT *
FROM vuelos
WHERE origen = 'bogota'

--datos especificos
SELECT origen, destino, arolinea
FROM vuelos
WHERE destino = 'bogota'

-- que aerolinias me llevan de manizales a cartagena
SELECT arolinea
FROM vuelos 
WHERE origen = 'manizales' AND destino = 'catagena'

--colocar alias a la de columnas
SELECT origen as desde, destino as hasta, areolinea as operador
FROM vuelos 
WHERE origen = 'manizales' 

--vuelos que lleguen a cartagena provinientes de manizales y medellin 
SELECT origen as desde, destino as hasta, areolinea as operador
FROM vuelos
WHERE destino = 'cartagena' AND origen = 'manizales'
-- UNIR TODO A UNA SOLA CONSULTA
UNION

SELECT origen as desde, destino as hasta, areolinea as operador
FROM vuelos
WHERE destino = 'cartagena' AND origen = 'medellin';