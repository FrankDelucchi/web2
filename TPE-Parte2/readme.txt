URL             || Verbo   ||   Controller              ||      Metodo

api/productos       GET         ApiProductsController       obtenerProductos()

api/productos/ID:   GET         ApiProductsController       obtenerProducto(ID)

api/productos       POST        ApiProductsController       agregarProducto()

api/productos/ID:   PUT         ApiProductsController       modificarProducto(ID)

api/productos/ID:   DELETE      ApiProductsController       borrarProducto(ID)



api-router procesa segun siguiente tipo:

"api/recurso/:params"