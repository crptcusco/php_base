-- SELECT
--   DISTINCT concat(co.vendedor_id,"-", i.persona_id) as codigo
-- , ve.nombre vendedor
-- , ju.nombre juridico
-- FROM co_involucrado i
-- JOIN co_cotizacion co ON co.id = i.cotizacion_id 
-- JOIN co_vendedor ve ON ve.id = co.vendedor_id
-- JOIN co_involucrado_juridica ju ON ju.id=i.persona_id
-- WHERE
--    i.persona_tipo="Juridica"
-- ORDER BY 2,3
-- ;
-- SELECT
--   DISTINCT concat(co.vendedor_id,"-", i.persona_id) as codigo
-- , ve.nombre vendedor
-- , na.nombre naturals
-- FROM co_involucrado i
-- JOIN co_cotizacion co ON co.id = i.cotizacion_id 
-- JOIN co_vendedor ve ON ve.id = co.vendedor_id
-- JOIN co_involucrado_natural na ON na.id=i.persona_id
-- WHERE
--    i.persona_tipo="Natural"
-- ORDER BY 2,3
-- ;

